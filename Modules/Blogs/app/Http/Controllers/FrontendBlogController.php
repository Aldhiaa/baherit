<?php

namespace Modules\Blogs\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Blogs\App\Models\Comment;
use Modules\Blogs\App\Models\Post;
use Modules\Blogs\App\Models\Reaction;

class FrontendBlogController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $posts = Post::where('published', true)
            ->orderByDesc('published_at')
            ->paginate(10);

        return view('blogs.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('published', true)
            ->with([
                'comments' => function ($query) {
                    $query->where('approved', true)
                        ->latest()
                        ->with('user');
                },
            ])
            ->withCount([
                'comments as approved_comments_count' => fn($query) => $query->where('approved', true),
                'reactions as likes_count' => fn($query) => $query->where('type', 'like'),
                'reactions as dislikes_count' => fn($query) => $query->where('type', 'dislike'),
            ])
            ->firstOrFail();

        return view('blogs.show', compact('post'));
    }

    public function comment(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $this->authorize('view', $post);
        $this->authorize('create', Comment::class);

        $rules = [
            'body' => 'required|string|max:2000',
        ];

        if (! Auth::check()) {
            $rules['guest_name'] = 'required|string|max:255';
            $rules['guest_email'] = 'required|email|max:255';
        }

        $validated = $request->validate($rules);

        $comment = new Comment([
            'body' => $validated['body'],
            'guest_name' => $validated['guest_name'] ?? null,
            'guest_email' => $validated['guest_email'] ?? null,
        ]);

        if (Auth::check()) {
            $comment->user_id = Auth::id();
            $comment->approved = true;
        }

        $post->comments()->save($comment);

        return back()->with('status', __('Comment submitted'));
    }

    public function react(Request $request, $type, $postId)
    {
        if (! in_array($type, ['like', 'dislike'], true)) {
            return response()->json(['error' => 'Invalid reaction'], 422);
        }

        $post = Post::findOrFail($postId);

        $this->authorize('view', $post);
        $this->authorize('create', Reaction::class);

        $userId = Auth::id();

        $existing = $post->reactions()->where('user_id', $userId)->first();

        if ($existing) {
            $this->authorize('update', $existing);

            if ($existing->type === $type) {
                $this->authorize('delete', $existing);
                $existing->delete();

                return response()->json(['status' => 'removed']);
            }

            $existing->update(['type' => $type]);

            return response()->json(['status' => 'updated']);
        }

        $post->reactions()->create(['user_id' => $userId, 'type' => $type]);

        return response()->json(['status' => 'created']);
    }
}

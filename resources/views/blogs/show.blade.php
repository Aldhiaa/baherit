@extends('layouts')

@section('content')
<section class="single-blog section-b-space">
    <div class="container">
        <div class="title-basic">
            <h2 class="wow zoomIn">{{ $post->title }}</h2>
            <p class="text-muted">{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</p>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <article class="blog-article">
                    @if(!empty($post->featured_image) || !empty($post->featured_image_url))
                        <div class="featured-image mb-4">
                            <img src="{{ !empty($post->featured_image) ? asset('storage/' . $post->featured_image) : $post->featured_image_url }}" alt="{{ $post->title }}" class="img-fluid rounded-3" />
                        </div>
                    @endif

                    <div class="content mb-4">{!! $post->content !!}</div>

                    <div class="reactions mb-4">
                        @auth
                            <button type="button" class="btn btn-outline-primary me-2" data-reaction="like">
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span class="ms-2">{{ $post->likes_count ?? 0 }}</span>
                            </button>
                            <button type="button" class="btn btn-outline-secondary" data-reaction="dislike">
                                <i class="fa-regular fa-thumbs-down"></i>
                                <span class="ms-2">{{ $post->dislikes_count ?? 0 }}</span>
                            </button>
                        @else
                            <p class="text-muted">{{ __('messages.Sign in to add a reaction') }}</p>
                        @endauth
                    </div>

                    <section class="comments mt-5">
                        <h3>{{ __('messages.Comments') }} ({{ $post->approved_comments_count ?? $post->comments->count() }})</h3>

                        @foreach($post->comments as $comment)
                            <div class="comment mb-4">
                                <div class="author fw-bold">{{ $comment->user->name ?? $comment->guest_name ?? __('messages.Guest') }}</div>
                                <div class="body">{{ $comment->body }}</div>
                                <div class="meta text-muted small">{{ $comment->created_at->diffForHumans() }}</div>
                            </div>
                        @endforeach

                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('blogs.comment', $post->id) }}" method="POST" class="mt-4">
                            @csrf
                            @guest
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="guest_name" class="form-label">{{ __('messages.Name') }}</label>
                                        <input type="text" name="guest_name" id="guest_name" class="form-control" value="{{ old('guest_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="guest_email" class="form-label">{{ __('messages.Email') }}</label>
                                        <input type="email" name="guest_email" id="guest_email" class="form-control" value="{{ old('guest_email') }}" required>
                                    </div>
                                </div>
                            @endguest

                            <div class="form-group mt-3">
                                <label for="body" class="form-label">{{ __('messages.Comment') }}</label>
                                <textarea name="body" id="body" class="form-control" rows="4" required>{{ old('body') }}</textarea>
                            </div>

                            <div class="mt-3">
                                <button class="btn-solid">{{ __('messages.Submit Comment') }}</button>
                            </div>
                        </form>
                    </section>
                </article>
            </div>
        </div>
    </div>
</section>

@auth
    @push('scripts')
    <script>
        document.querySelectorAll('[data-reaction]').forEach(function (button) {
            button.addEventListener('click', function () {
                const type = this.getAttribute('data-reaction');
                fetch(`{{ url('blogs/react') }}/${type}/{{ $post->id }}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                })
                    .then((response) => response.json())
                    .then((data) => console.log(data));
            });
        });
    </script>
    @endpush
@endauth

@endsection

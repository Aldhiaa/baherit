@extends('admin.layouts.app')

@section('title', 'Edit FAQ')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit FAQ</h1>
        <a href="{{ route('admin.faqs.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to FAQs
        </a>
    </div>

    <!-- Edit FAQ Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">FAQ Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.faqs.update', $faq ?? 1) }}">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="faq_category_id">Category</label>
                            <select class="form-control" id="faq_category_id" name="faq_category_id" required>
                                <option value="">Select Category</option>
                                <!-- Categories will be populated here -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control" id="display_order" name="display_order" 
                                   value="1" min="1" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                        <label class="form-check-label" for="is_active">
                            Active
                        </label>
                    </div>
                </div>

                <!-- English Translation -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-info">English Content</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="question_en">Question (English)</label>
                            <input type="text" class="form-control" id="question_en" name="question_en" required>
                        </div>
                        <div class="form-group">
                            <label for="answer_en">Answer (English)</label>
                            <textarea class="form-control" id="answer_en" name="answer_en" rows="4" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Arabic Translation -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-warning">Arabic Content</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="question_ar">Question (Arabic)</label>
                            <input type="text" class="form-control" id="question_ar" name="question_ar" dir="rtl">
                        </div>
                        <div class="form-group">
                            <label for="answer_ar">Answer (Arabic)</label>
                            <textarea class="form-control" id="answer_ar" name="answer_ar" rows="4" dir="rtl"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update FAQ
                    </button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

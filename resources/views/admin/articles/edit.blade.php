<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'تعديل مقال')
<!-- Start Content Section -->
@section('content')
<!-- Start Card -->
  <div class="card main-card">
    <!-- Start Card Header -->
    <div class="card-header">
      <a href="{{ route('admin.articles.index') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-newspaper"></i>
        </span>
        <span>قائمة المقالات</span>
      </a>
    </div><!-- End Card Header -->
    <!-- Start Form -->
    {!! Form::model($article,['method' => 'PATCH', 'files' => true, 'url' => route('admin.articles.update', $article->id)]) !!}
      @include('admin.articles._form')
    {!! Form::close() !!}<!-- End Form -->
  </div><!-- End Card -->
@endsection<!-- End Content Section -->

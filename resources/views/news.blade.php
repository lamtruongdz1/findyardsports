@extends('layout.client.master')
@section('content')
<section class="news" id="news">
    <h1>Tin tức</h1>
    @foreach ($blogs as $blog)

    <div class="news-list">
      <img src="{{ $blog->images }}" alt="">
      <div class="news-content">
        <a href="news-detail.html">
        <span>{{ $blog->time }}</span>
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->description }}</p>
      </a>
      </div>
    </div>
@endforeach
</section>
@if ($blogs->links()->paginator->hasPages())
{{ $blogs->links() }}
@endif
@endsection

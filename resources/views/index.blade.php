@extends('blog::layouts.blog')

<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entries \Illuminate\Support\Collection
 */
?>

@section('title', $blog->getPageTitle());

@push('meta')
  @include('blog::feed.metaLink')
  @if($blog->getMetaDescription())
    <meta name="description" content="{{ $blog->getMetaDescription() }}">
  @endif
@endpush

@section('blog')
  <h1>{{ $blog->getTitle() }}</h1>
  @if($entries->count())
    <ul>
      @each('blog::entry.listItem', $entries, 'entry')
    </ul>
  @endif
@endsection

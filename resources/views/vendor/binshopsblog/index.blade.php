@extends('layouts.app')
@section('title', $title)
@section('content')
<div class="main-section">
    @include("includes.header")

    <div class="container">
        @include('binshopsblog::sitewide.search_form')

        <div class="row-posts">
            @forelse($posts as $post)
                @include("binshopsblog::partials.index_loop")
            @empty
                <div class='alert alert-danger'>No posts!</div>
            @endforelse
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
@push('scripts')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    $('.row-posts').infiniteScroll({
    path: '.pagination__next',
    append: '.post-container',
    history: false,
    });
</script>
@endpush
@include("includes.footer")
@endsection
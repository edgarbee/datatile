@extends('layouts.app')
@section('title', strip_tags($post->gen_seo_title()))
@section('content')
<div class="main-section">
        @include("includes.header")

        <div class="container single-container">
            @include("binshopsblog::partials.full_post_details")
            @include("binshopsblog::partials.related")
        </div>
</div>
@include("includes.footer")
@endsection
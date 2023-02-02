@extends('layouts.app')
@section('title', strip_tags($page->title))
@section('body-class', 'white-bg')
@section('content')
@include("includes.header")
<div class="about-us">
    <div class="line">
        <img class="pc-human" loading="lazy" src="{{ asset('storage/'.$page->image) }}" alt="">
        <img class="mob-human" loading="lazy" src="{{ asset('storage/'.$page->image) }}" alt="">
    </div>
    <div class="container">
        <div class="main-section-solutions">
            <div class="main-title">
                <h1>
                    {!! $page->title !!}
                </h1>
            </div>

            <div class="pre-text">
                <div class="black-text">
                {!! $page->subtitle !!}               
                </div>
            </div>

            <div class="main-text-container">
                <div class="main-text">
                    <p class="black-text">
                        {!! $page->description !!} 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@include("includes.footer")
@endsection
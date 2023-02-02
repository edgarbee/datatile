@extends('layouts.app')
@section('title', $title)
@section('content')
<div class="main-section">
    @include("includes.header")

    <div class="container search-container">
        @include('binshopsblog::sitewide.search_form')
        <h2>Search Results for - {{$query}}</h2>

        <div class="row-posts">
        @php $search_count = 0;@endphp
        @forelse($search_results as $result)
            @if(isset($result->indexable))
                @php $search_count += $search_count + 1; @endphp
                <?php $post = $result->indexable; ?>
                @if($post && is_a($post,\BinshopsBlog\Models\BinshopsPostTranslation::class))
                    @include("binshopsblog::partials.index_loop")
                @else
                    <div class='alert alert-danger'>Unable to show this search result - unknown type</div>
                @endif
            @endif
        @empty
            <div class='alert alert-danger'>Sorry, but there were no results!</div>
        @endforelse
        </div>
    </div>
</div>
@include("includes.footer")
@endsection
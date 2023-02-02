@extends('layouts.app')
@section('title', 'DataTile Solutions')
@section('content')
    <div class="main-section">
    @include("includes.header")
    </div>

    <div class="container">
        <div class="main-section-solutions">
            <div class="main-title">
                <h1>
                    Research intelligence <span class="red">solutions</span><br>
                    for data-driven <span class="blue">decisions</span>
                </h1>
            </div>

            <div class="list-solution">
                <ul>
                    @php($i=1)
                    @foreach($solutions as $solution)
                        <li><a href="#solution{{$i}}">{{ strip_tags($solution->title) }}</a></li>
                    @php($i++)
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="main-image-solution">
        <img loading="lazy" class="d-xs-none" src="{{ asset('assets/img/soluition.png') }}" alt="">
        <img loading="lazy" class="d-xs-block" src="{{ asset('assets/img/soluition-mob.png') }}" alt="">
    </div>

    <div class="container">
        @php($j=1)
        @foreach($solutions as $solution)
            <div id="solution{{$j}}" class="solutions @if($solution->color == 'red') solutions-1 @elseif($solution->color == 'blue') solutions-2 @elseif($solution->color == 'fiolet') solutions-3 @elseif($solution->color == 'yellow') solutions-4 @endif">
                <div class="item-decor">
                    <img loading="lazy" src="{{ asset('storage/'.$solution->image) }}" alt="">
                </div>
                <div class="solution-title @if($solution->color == 'blue' || $solution->color == 'yellow') solutions-left @else solutions-right @endif">
                    <h2>
                        <span class="@if($solution->color == 'red') red @elseif($solution->color == 'blue') blue @elseif($solution->color == 'fiolet') fiolet @elseif($solution->color == 'yellow') yellow @endif">{!!  $solution->title !!}</span>
                    </h2>
                    <p class="small">{!!  $solution->subtitle !!}</p>
                    <p class="text">
                    {!!  $solution->description !!}
                    </p>
                </div>

                <div class="row">
                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img @if($solution->color == 'red') red-bg @elseif($solution->color == 'fiolet') fiolet-bg @elseif($solution->color == 'yellow') yellow-bg @endif">
                                <img loading="lazy" src="{{ asset('storage/'.$solution->first_block_image) }}" alt="">
                            </div>
                            <div class="solution-item-text">
                            {{$solution->first_block}}
                            </div>
                        </div>
                    </div>
        
                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img">
                                <img loading="lazy" src="{{ asset('storage/'.$solution->second_block_image) }}" alt="">
                            </div>
                            <div class="solution-item-text">
                            {{$solution->second_block}}
                            </div>
                        </div>
                    </div>

                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img">
                                <img loading="lazy" src="{{ asset('storage/'.$solution->third_block_image) }}" alt="">
                            </div>
                            <div class="solution-item-text">
                            {{$solution->third_block}}
                            </div>
                        </div>
                    </div>

                    <div class="solution-container">
                        <div class="solution-item">
                            <div class="solution-item-img @if($solution->color == 'blue') blue-bg @endif">
                                <img loading="lazy" src="{{ asset('storage/'.$solution->fourth_block_image) }}" alt="">
                            </div>
                            <div class="solution-item-text">
                            {{$solution->fourth_block}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php($j++)
        @endforeach

    </div>

@include("includes.footer")
@endsection
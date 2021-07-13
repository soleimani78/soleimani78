@extends('layouts.Layouts')
@section('content')
<!-- Start More-info Section -->
<div class="container">
    <div class="more-info">
        <div class="more-info-content">
            <img class="img-responsive" src="{{ $post->image_url }}" alt="">
            {!! $post->content !!}
        </div>
        <div class="more-info-news">
            <div class="news">
                <img class="img-responsive" src="{{ asset('/assets/img/n-1.jpg') }}" alt="">
            </div>
            <div class="news">
                <img class="img-responsive" src="{{ asset('/assets/img/n-1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- End More-info Section -->
@endsection
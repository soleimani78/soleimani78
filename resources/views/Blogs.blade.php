@extends('layouts.Layouts')
@section('content')
<div class="search-box">
    <form method="GET" action="{{ route('blogs') }}">
        <input type="text" id="search" name="title"><i class="fa fa-search"></i>
    </form>
</div>


<!-- Start Magezins Section -->
<div class="article-place space-part">
<div class="article-title">
    <span>مقالات آموزشی</span>
    {{-- <a href="C:\Users\Lenovo\Desktop\digitaling-1\article.html">موارد بیشتر</a> --}}
</div>
<div class="article-part">
    @if( count($posts) )
        @foreach( $posts as $post )
            <div class="article">
                <span class="date">22 آبان 98</span>
                <img src="{{ $post->image_url }}" alt="" width="100%" height="250px">
                <a href="{{ $post->url }}"><div class="overlay">
                    <p>آموزش دیجیتال مارکتینگ</p>
                    <p class="desc"> {{ $post->title }}</p>
                </div></a>
            </div>
        @endforeach
    @else
        <h5> موردی یافت نشد !! </h5>
    @endif
</div>
</div>
<!-- End Magezins Section -->
@endsection
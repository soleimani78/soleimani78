@extends('layouts.Layouts')
@section('content')
<!-- Start Article Section -->
<div class="article-place space-part">
    <div class="article-title">
        <span>مقالات آموزشی</span><a href="C:\Users\Lenovo\Desktop\digitaling-1\article.html">موارد بیشتر</a>
    </div>
    <div class="article-part">
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
    </div>
</div>
<!-- End Article Section -->

<!-- Start Target Section -->
<div class="container-fluid space-part">
    <div class="target">
        <div class="target-content">
            <h1>برگزار کننده دوره های تخصصی در زمینه دیجیتال مارکتینگ و تواید محتوا</h1>
            <p>هدف دیگر ما رشد جوانان و نوجوانان علاقه مند به این حوزه است.</p>
            <div class="target-content-button">
                <a href="{{ route('continue') }}">با ما همراه باشید</a>
            </div>
        </div>
        <div class="target-aim">
            <div class="target-aim-img">
                <img class="img-responsive target-img" src="./assets/img/img-target.jpg" alt="">
            </div>
            <div class="target-aims"></div>
        </div>
    </div>
</div>
<!-- End Target Section -->

<!-- Start Services Section -->
<div class="services space-part">
    <div class="services-title">
        <P>دیجیتالینگ ارائه دهنده انواع آموزش های تولید محتوا، دیجیتال مارکتینگ و بهینه سازی سایت است</P>
    </div>
    <div class="services-part">
        <div class="service-card">
            <img src="./assets/img/IMG-20210607-WA0097.jpg" alt="">
            <p class="sub-service-content">
                تیم دیجیتالینگ آماده است تا به روز ترین آموزش ها را خدمت شما عزیزان ارائه کند
            </p>
        </div>
        <div class="service-card">
            <img src="./assets/img/IMG-20210607-WA0095.jpg" alt="">
            <p class="sub-service-content">
                تیم دیجیتالینگ آماده است تا به روز ترین آموزش ها را خدمت شما عزیزان ارائه کند
            </p>
        </div>
        <div class="service-card">
            <img src="./assets/img/IMG-20210607-WA0096.jpg" alt="">
            <p class="sub-service-content">
                تیم دیجیتالینگ آماده است تا به روز ترین آموزش ها را خدمت شما عزیزان ارائه کند
            </p>
        </div>
        <div class="service-card">
            <img src="./assets/img/IMG-20210607-WA0094.jpg" alt="">
            <p class="sub-service-content">
                تیم دیجیتالینگ آماده است تا به روز ترین آموزش ها را خدمت شما عزیزان ارائه کند
            </p>
        </div>
    </div>
</div>
<!-- End Services Section -->

<!-- Start Statistic Section -->
<div class="statistic space-part">
    <div class="statistic-card">
        <i class="fa fa-graduation-cap"></i>
        <p>210000</p>
        <p>دانشجو</p>
    </div>
    <div class="statistic-card">
        <i class="fa fa-book"></i>
        <p>{{ $counts['posts'] }}</p>
        <p>مقاله آموزشی</p>
    </div>
    <div class="statistic-card">
        <i class="fa fa-clock-o"></i>
        <p>12000</p>
        <p>ساعت آموزش</p>
    </div>
    <div class="statistic-card">
        <i class="fa fa-users"></i>
        <p>{{ $counts['users'] }}</p>
        <p>کاربر</p>
    </div>
</div>
<!-- End Statistic Section -->
@endsection
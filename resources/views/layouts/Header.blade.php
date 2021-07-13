<!-- Start Login Section -->
<div class="login">
    <div class="login-box">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-box-head">
                <h3>ورود به سایت</h3>
                <span id="close-login-box">بستن</span>
            </div>
            <hr>
            <div class="login-box-section">
                <div class="input-group">
                    <label for="username">
                        <i class="fa fa-user-circle"></i>
                        نام کاربری
                    </label>
                    <input type="text" id="username" name="username" placeholder="نام کاربری خود را وارد کنید">
                    @if( $errors->has('username'))
                        <small style="color:red"> {{ $errors->first('username') }}
                    @endif
                </div>
                <div class="input-group">
                    <label for="password">
                        <i class="fa fa-key"></i>
                        پسورد
                    </label>
                    <input type="password" id="password" name="password" placeholder="پسورد خود را وارد کنید">
                    @if( $errors->has('password'))
                        <small style="color:red"> {{ $errors->first('password') }}
                    @endif
                </div>
            </div>
            <div class="login-box-footer">
                <button id="btn-login" type="submit">ورود</button>
                <a href="#">رمز عبور خود را فراموش کرده ام</a>
            </div>
         </form>
    </div>
</div>
<!-- End Login Section -->

<!-- Start signup Section -->
<div class="signup">
    <div class="signup-box">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="signup-box-head">
                <h3>ثبت نام</h3>
                <span id="close-signup-box">بستن</span>
            </div>
            <hr>
            <div class="signup-box-section">
                <div class="input-group">
                    <label for="username">
                        <i class="fa fa-user-circle"></i>
                        نام و نام خانوادگی
                    </label>
                    <input type="text" id="name" name="name" placeholder="نام کاربری خود را وارد کنید">
                    @if( $errors->has('name'))
                        <small style="color:red"> {{ $errors->first('name') }}
                    @endif
                </div>
                <div class="input-group">
                    <label for="username">
                        <i class="fa fa-user-circle"></i>
                        نام کاربری
                    </label>
                    <input type="text" id="username" name="username" placeholder="نام کاربری خود را وارد کنید">
                    @if( $errors->has('username'))
                        <small style="color:red"> {{ $errors->first('username') }}
                    @endif
                </div>
                <div class="input-group">
                    <label for="password">
                        <i class="fa fa-key"></i>
                        پسورد
                    </label>
                    <input type="password" id="password" name="password" placeholder="پسورد خود را وارد کنید">
                    @if( $errors->has('password'))
                        <small style="color:red"> {{ $errors->first('password') }}
                    @endif
                </div>
            </div>
            <div class="signup-box-footer">
                <button id="btn-sign" type="submit">ثبت نام</button>
            </div>
        </form>
    </div>
</div>
<!-- End signup Section -->

<!-- Start Navbar Section -->
<div class="container-fluid">
    <div class="navbar">
        <ul class="navbar-right">
            @auth()
            <li><a>سلام {{ auth()->user()->name }} عزیز</a></li>
            <li><a href="{{ route('logout') }}"> خروج </a></li>
            @endauth()
            @guest()
            <li><a href="#" id="open-login-box">ورود</a></li>
            <li><a href="#" id="open-signup-box">ثبت نام</a></li>
            @endguest()
        </ul>
        <ul class="navbar-left">
            <li><a class="logo" href="#">دیجیتالینگ</a></li>
            <li><a href="{{ route('home') }}">خانه</a></li>
            <li><a href="{{ route('how-begin') }}">از کجا شروع کنم؟</a></li>
            <li><a href="#">دوره های آموزشی</a></li>
            <li><a href="{{ route('storyaboutus') }}">داستان ما</a></li>
            <li><a href="{{ route('team') }}">تیم ما</a></li>
        </ul>
    </div>
</div>   
<div class="navbar-responsive">
   <div class="nav-center">
    <a href="#">دیجیتالینگ</a>
    <a class="menu-nav" href="#"><i class="fa fa-align-justify"></i></a>
   </div>
   <ul class="nav">
    @auth()
    <li><a>سلام {{ auth()->user()->name }} عزیز</a></li>
    <li><a href="{{ route('logout') }}"> خروج </a></li>
    @endauth()
    @guest()
    <li><a href="#" id="open-login-box">ورود</a></li>
    <li><a href="#" id="open-signup-box">ثبت نام</a></li>
    @endguest()
    <li><a href="{{ route('home') }}">خانه</a></li>
    <li><a href="{{ route('how-begin') }}">از کجا شروع کنم؟</a></li>
    <li><a href="#">دوره های آموزشی</a></li>
    <li><a href="{{ route('storyaboutus') }}">داستان ما</a></li>
    <li><a href="{{ route('team') }}">تیم ما</a></li>
   </ul>

</div>
@if( session('message') )
<div style="width: 350px; margin: auto; border-radius: 10px;text-align: center; background-color: rgba(0, 0, 0, 0.3); padding: 1px 7px;">
        <h5 style="color: white;">
            {{ session('message') }}
        </h5>
</div>
@endif
<!-- End Navbar Section -->
<!-- Start Header Section -->
<div class="container-fluid">
    <div class="header">
        <div style="text-align: center">

        </div>
        <div class="header-right">
            <div class="gtco-main-nav">
                <div class="banner-image">
                    <img class="img-responsive" src="{{ asset('assets/img/header-img.png') }}" alt="sevenlearn" style="margin-top: 0;">
                </div>
            </div>
        </div>
        <div class="header-left">
            <div class="site-title">
                <h1>دیجیتالینگ</h1>
                <div class="site-sub-title">
                مرجع تخصصی آموزش دیجیتال مارکتینگ و تولید محتوا
            </div>
            </div>
            <div class="header-left-button">
                <a class="btn-content" href="{{ route('moreinfo') }}">بیشتر بدانید</a>
            </div>
        </div>
    </div>
</div>
<!-- End Header Section -->

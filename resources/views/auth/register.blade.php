<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	   <title>{{ env('APP_NAME') }} Register</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    @css

</head>
<body>
	<div class="www-layout">
        <section>
        	<div class="gap no-gap signin whitish medium-opacity register">
                <div class="bg-image" style="background-image:url({{ asset('frontend/images/resources/theme-bg.jpg') }})"></div>
                <div class="container">
                	<div class="row">
                        <div class="col-lg-8">
                            <div class="big-ad">
                                <figure><img src="images/logo2.png" alt=""></figure>
                                <h1>Welcome to the Pitnik</h1>
                                <p>
                                     Pitnik is a social network template that can be used to connect people. use this template for multipurpose social activities like job, dating, posting, bloging and much more. Now join & Make Cool Friends around the world !!!
                                </p>
                                <div class="barcode">
                                    <figure><img src="images/resources/Barcode.jpg" alt=""></figure>
                                    <div class="app-download">
                                        <span>Download Mobile App and Scan QR Code to login</span>
                                        <ul class="colla-apps">
                                            <li><a title="" href="https://play.google.com/store?hl=en"><img src="{{ asset('frontend/images/android.png') }}" alt="">android</a></li>
                                            <li><a title="" href="https://www.apple.com/lae/ios/app-store/"><img src="{{ asset('frontend/images/apple.png') }}" alt="">iPhone</a></li>
                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img src="{{ asset('frontend/images/windows.png') }}" alt="">Windows</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="we-login-register">
                                <div class="form-title">
                                    <i class="fa fa-key"></i>Sign Up
                                    <span>Sign Up now and meet the awesome friends around the world.</span>
                                </div>
                                <form class="we-form" method="post" action="{{ route('user_register') }}">
                                  @csrf
                                    <input type="text" placeholder="Name" name="name" class="@error('name') is-invalid @enderror">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input type="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror">

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror

                                    <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror

                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="@error('password') is-invalid @enderror">

                                      @error('password_confirmation')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror

                                    <button type="submit" data-ripple="">Register</button>
                                    <a class="forgot underline" href="#" title="">forgot password?</a>
                                </form>
                                <a class="with-smedia facebook" href="#" title="" data-ripple="">Register with facebook</a>
                                <a class="with-smedia twitter" href="#" title="" data-ripple="">Register with twitter</a>
                                <span>already have an account? <a class="we-account underline" href="#" title="">Sign in</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

@js

</body>

</html>

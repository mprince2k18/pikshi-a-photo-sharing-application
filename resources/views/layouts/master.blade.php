<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
	  <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('frontend/images/fav.png') }}" type="image/png" sizes="16x16">

    @css
    {{-- <!-- CSS -->
       <link rel="stylesheet" type="text/css" href="{{asset('jqueryui/jquery-ui.min.css')}}">

       <!-- Script -->
       <script src="{{asset('jquery-3.3.1.min.js')}}" type="text/javascript"></script>
       <script src="{{asset('jqueryui/jquery-ui.min.js')}}" type="text/javascript"></script> --}}

</head>
<body>
<div class="se-pre-con"></div>
<div class="theme-layout">

	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="{{ route('post.show') }}" title=""><img src="{{ asset('frontend/images/logo2.png') }}" alt=""></a>
			</span>

		</div>

		<nav id="menu" class="res-menu">
			<ul>
				<li><span>Home Pages</span>
					<ul>
						<li><a href="index.html" title="">Pitnik Default</a></li>
						<li><a href="company-landing.html" title="">Company Landing</a></li>
						<li><a href="pitrest.html" title="">Pitrest</a></li>
						<li><a href="redpit.html" title="">Redpit</a></li>
						<li><a href="redpit-category.html" title="">Redpit Category</a></li>
						<li><a href="soundnik.html" title="">Soundnik</a></li>
						<li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="shop.html" title="">Shop</a></li>
						<li><a href="classified.html" title="">Classified</a></li>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="chat-messenger.html" title="">Messenger</a></li>
					</ul>
				</li>
				<li><span>Pittube</span>
					<ul>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="pittube-detail.html" title="">Pittube single</a></li>
						<li><a href="pittube-category.html" title="">Pittube Category</a></li>
						<li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
						<li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
					</ul>
				</li>
				<li><span>PitPoint</span>
					<ul>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
						<li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
						<li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
						<li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
					</ul>
				</li>
				<li><span>Pitjob</span>
					<ul>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="career-detail.html" title="">Pitjob Detail</a></li>
						<li><a href="career-search-result.html" title="">Job seach page</a></li>
						<li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
					</ul>
				</li>
				<li><span>Timeline</span>
					<ul>
						<li><a href="timeline.html" title="">Timeline</a></li>
						<li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
						<li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
						<li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
						<li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
						<li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
						<li><a href="about.html" title="">Timeline About</a></li>
						<li><a href="blog-posts.html" title="">Timeline Blog</a></li>
						<li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
						<li><a href="newsfeed.html" title="">Newsfeed</a></li>
						<li><a href="search-result.html" title="">Search Result</a></li>
					</ul>
				</li>
				<li><span>Favourit Page</span>
					<ul>
						<li><a href="fav-page.html" title="">Favourit Page</a></li>
						<li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
						<li><a href="fav-events.html" title="">Fav Events</a></li>
						<li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
						<li><a href="event-calendar.html" title="">Event Calendar</a></li>
						<li><a href="fav-page-create.html" title="">Create New Page</a></li>
						<li><a href="price-plans.html" title="">Price Plan</a></li>
					</ul>
				</li>
				<li><span>Forum</span>
					<ul>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
						<li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
						<li><a href="forums-category.html" title="">Forum Category</a></li>
					</ul>
				</li>
				<li><span>Featured</span>
					<ul>
						<li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
						<li><a href="notifications.html" title="">Notifications</a></li>
						<li><a href="badges.html" title="">Badges</a></li>
						<li><a href="faq.html" title="">Faq's</a></li>
						<li><a href="contribution.html" title="">Contriburion Page</a></li>
						<li><a href="manage-page.html" title="">Manage Page</a></li>
						<li><a href="weather-forecast.html" title="">weather-forecast</a></li>
						<li><a href="statistics.html" title="">Statics/Analytics</a></li>
						<li><a href="shop-cart.html" title="">Shop Cart</a></li>
					</ul>
				</li>
				<li><span>Account Setting</span>
					<ul>
						<li><a href="setting.html" title="">Setting</a></li>
						<li><a href="privacy.html" title="">Privacy</a></li>
						<li><a href="support-and-help.html" title="">Support & Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
					</ul>
				</li>
				<li><span>Authentication</span>
					<ul>
						<li><a href="login.html" title="">Login Page</a></li>
						<li><a href="register.html" title="">Register Page</a></li>
						<li><a href="logout.html" title="">Logout Page</a></li>
						<li><a href="coming-soon.html" title="">Coming Soon</a></li>
						<li><a href="error-404.html" title="">Error 404</a></li>
						<li><a href="error-404-2.html" title="">Error 404-2</a></li>
						<li><a href="error-500.html" title="">Error 500</a></li>
					</ul>
				</li>
				<li><span>Tools</span>
					<ul>
						<li><a href="typography.html" title="">Typography</a></li>
						<li><a href="popup-modals.html" title="">Popups/Modals</a></li>
						<li><a href="post-versions.html" title="">Post Versions</a></li>
						<li><a href="sliders.html" title="">Sliders / Carousel</a></li>
						<li><a href="google-map.html" title="">Google Maps</a></li>
						<li><a href="widgets.html" title="">Widgets</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<nav id="shoppingbag">
			<div>
				<div class="">
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"/>
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"/>
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"/>
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"/>
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"/>
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6" />
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7" />
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8" />
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9" />
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10" />
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11" />
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
				</div>
			</div>
		</nav>
	</div><!-- responsive header -->

	<div class="topbar stick">
		<div class="logo">
			<a title="" href="{{ route('post.show') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
		</div>
		<div class="top-area">
			<div class="main-menu">
				<span>
			    	<i class="fa fa-braille"></i>
			    </span>
			</div>
			<div class="top-search">
				<form>
					<input type="text" id="search" name="search" placeholder="Search Photos">


                  <ul class="list-group fast-search-list main-search-list" id="search_list">
                    @foreach ( App\Post::all() as $value)
                      <li class="list-group-item fast-search-list-item"><a href="{{ $value->post_link }}">{{ $value->title }}</a></li>
                    @endforeach
                  </ul>

				</form>
			</div>

			<ul class="setting-area">
				<li><a href="{{ route('post.show') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
				<li><a href="#" title="facebook" data-ripple=""><i class="ti-facebook"></i></a></li>
				<li><a href="#" title="instagram" data-ripple=""><i class="ti-instagram"></i></a></li>
				<li><a href="#" title="twitter" data-ripple=""><i class="ti-twitter"></i></a></li>

        @guest
          <li><a href="{{ route('register') }}" title="Register" data-ripple=""><i class="ti-pencil-alt2"></i></a></li>
          <li><a href="{{ route('login') }}" onclick="location.href='{{ route('login') }}';" title="login" data-ripple=""><i class="fa fa-sign-in"></i></a></li>
        @endguest

        @auth
          <li><a href="#" title="dashboard" data-ripple=""><i class="ti-dashboard"></i></a></li>
  				<li>
            <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" title="logout" data-ripple=""><i class="ti-power-off"></i>
                         </a>
          </li>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
        @endauth






        @auth
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="fa fa-bell"></i><em class="bg-purple">{{ App\Notification::where('user_id',Auth::user()->id)->where('is_read',false)->count() }}</em>
					</a>
					<div class="dropdowns">
						<span>{{ App\Notification::where('user_id',Auth::user()->id)->where('is_read',false)->count() }} New Notifications <a href="{{ url('/mark/as/all/read') }}/{{ Auth::user()->id }}" title="">Mark all as read</a></span>
						<ul class="drops-menu">
              @foreach (App\Notification::where('user_id',Auth::user()->id)->latest()->get() as $notification)
							<li class="{{ $notification->is_read === 1 ? Null : 'mark_as_read' }}">
								<a href="{{ $notification->url }}" title="{{ $notification->url }}">
									<figure>
										<img src="{{ $notification->user->photo }}" alt="" class="w-45">
										<span class="status">
                      <i class="ti-{{ $notification->action === "Loved" ? "heart" : null }}"></i>
                      <i class="ti-{{ $notification->action === "Commented" ? "comment" : null }}"></i>
                      <i class="ti-{{ $notification->action === "Shared" ? "share" : null }}"></i>
                      <i class="ti-{{ $notification->action === "Downloaded" ? "download" : null }}"></i>
                    </span>
									</figure>
									<div class="mesg-meta">
										<h6>{{ $notification->user->name }}</h6>
										<span>{{ $notification->action }} on your posts</span>
										<i>{{ $notification->created_at->diffForHumans() }}</i>
									</div>
								</a>
							</li>
              @endforeach

						</ul>
						<a href="{{ url('/notification') }}/{{ Auth::user()->id }}/{{ Auth::user()->slug }}" title="" class="more-mesg">View All</a>
					</div>
        </li>
        @endauth


			</ul>
			<div class="user-img">
        @auth
          <h5>{{ Auth::user()->name }}</h5>
          <img src="{{ Auth::user()->photo }}" class="w-45" alt="">
        @endauth

        @guest
          <img src="{{ asset('frontend/images/resources/admin.jpg') }}" alt="">
        @endguest

        @auth

          <div class="user-setting">
  					<span class="seting-title">User setting <a href="#" title="">see all</a></span>
  					<ul class="log-out">
  						<li><a href="{{ url('profile') }}/{{ Auth::user()->id }}/{{ Auth::user()->name }}" title=""><i class="ti-user"></i> view profile</a></li>
  						<li><a href="setting.html" title=""><i class="ti-settings"></i>account setting</a></li>
  						<li><a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>log out</a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
              </li>
  					</ul>
  				</div>

        @endauth


			</div>
			<span class="ti-settings main-menu" data-ripple=""></span>
		</div>
		<nav>
			<ul class="nav-list">
				<li><a class="" href="#" title=""><i class="fa fa-home"></i> Home Pages</a>
					<ul>
						<li><a href="index.html" title="">Pitnik Default</a></li>
						<li><a href="company-landing.html" title="">Company Landing</a></li>
						<li><a href="pitrest.html" title="">Pitrest</a></li>
						<li><a href="redpit.html" title="">Redpit</a></li>
						<li><a href="redpit-category.html" title="">Redpit Category</a></li>
						<li><a href="soundnik.html" title="">Soundnik</a></li>
						<li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="shop.html" title="">Shop</a></li>
						<li><a href="classified.html" title="">Classified</a></li>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="chat-messenger.html" title="">Messenger</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-film"></i> Pittube</a>
					<ul>
						<li><a href="pittube.html" title="">Pittube</a></li>
						<li><a href="pittube-detail.html" title="">Pittube single</a></li>
						<li><a href="pittube-category.html" title="">Pittube Category</a></li>
						<li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
						<li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-female"></i> PitPoint</a>
					<ul>
						<li><a href="pitpoint.html" title="">PitPoint</a></li>
						<li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
						<li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
						<li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
						<li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-graduation-cap"></i> Pitjob</a>
					<ul>
						<li><a href="career.html" title="">Pitjob</a></li>
						<li><a href="career-detail.html" title="">Pitjob Detail</a></li>
						<li><a href="career-search-result.html" title="">Job seach page</a></li>
						<li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-repeat"></i> Timeline</a>
					<ul>
						<li><a href="timeline.html" title="">Timeline</a></li>
						<li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
						<li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
						<li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
						<li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
						<li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
						<li><a href="about.html" title="">Timeline About</a></li>
						<li><a href="blog-posts.html" title="">Timeline Blog</a></li>
						<li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
						<li><a href="newsfeed.html" title="">Newsfeed</a></li>
						<li><a href="search-result.html" title="">Search Result</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-heart"></i> Favourit Page</a>
					<ul>
						<li><a href="fav-page.html" title="">Favourit Page</a></li>
						<li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
						<li><a href="fav-events.html" title="">Fav Events</a></li>
						<li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
						<li><a href="event-calendar.html" title="">Event Calendar</a></li>
						<li><a href="fav-page-create.html" title="">Create New Page</a></li>
						<li><a href="price-plans.html" title="">Price Plan</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-forumbee"></i> Forum</a>
					<ul>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
						<li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
						<li><a href="forums-category.html" title="">Forum Category</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-star-o"></i> Featured</a>
					<ul>
						<li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
						<li><a href="notifications.html" title="">Notifications</a></li>
						<li><a href="badges.html" title="">Badges</a></li>
						<li><a href="faq.html" title="">Faq's</a></li>
						<li><a href="contribution.html" title="">Contriburion Page</a></li>
						<li><a href="manage-page.html" title="">Manage Page</a></li>
						<li><a href="weather-forecast.html" title="">weather-forecast</a></li>
						<li><a href="statistics.html" title="">Statics/Analytics</a></li>
						<li><a href="shop-cart.html" title="">Shop Cart</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-gears"></i> Account Setting</a>
					<ul>
						<li><a href="setting.html" title="">Setting</a></li>
						<li><a href="privacy.html" title="">Privacy</a></li>
						<li><a href="support-and-help.html" title="">Support & Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-lock"></i> Authentication</a>
					<ul>
						<li><a href="login.html" title="">Login Page</a></li>
						<li><a href="register.html" title="">Register Page</a></li>
						<li><a href="logout.html" title="">Logout Page</a></li>
						<li><a href="coming-soon.html" title="">Coming Soon</a></li>
						<li><a href="error-404.html" title="">Error 404</a></li>
						<li><a href="error-404-2.html" title="">Error 404-2</a></li>
						<li><a href="error-500.html" title="">Error 500</a></li>
					</ul>
				</li>
				<li><a class="" href="#" title=""><i class="fa fa-wrench"></i> Tools</a>
					<ul>
						<li><a href="typography.html" title="">Typography</a></li>
						<li><a href="popup-modals.html" title="">Popups/Modals</a></li>
						<li><a href="post-versions.html" title="">Post Versions</a></li>
						<li><a href="sliders.html" title="">Sliders / Carousel</a></li>
						<li><a href="google-map.html" title="">Google Maps</a></li>
						<li><a href="widgets.html" title="">Widgets</a></li>
					</ul>
				</li>
			</ul>

		</nav><!-- nav menu -->
	</div><!-- topbar -->

  @yield('content')

  	<div class="bottombar">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<span class="copyright">© Prince 2020. All rights reserved.</span>
  					<i><img src="{{ asset('frontend/images/credit-cards.png') }}" alt=""></i>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  	<div class="side-panel">
  		<h4 class="panel-title">General Setting</h4>
  		<form method="post">
  			<div class="setting-row">
  				<span>use night mode</span>
  				<input type="checkbox" id="nightmode1"/>
  				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Notifications</span>
  				<input type="checkbox" id="switch22" />
  				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Notification sound</span>
  				<input type="checkbox" id="switch33" />
  				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>My profile</span>
  				<input type="checkbox" id="switch44" />
  				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Show profile</span>
  				<input type="checkbox" id="switch55" />
  				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  		</form>
  		<h4 class="panel-title">Account Setting</h4>
  		<form method="post">
  			<div class="setting-row">
  				<span>Sub users</span>
  				<input type="checkbox" id="switch66" />
  				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>personal account</span>
  				<input type="checkbox" id="switch77" />
  				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Business account</span>
  				<input type="checkbox" id="switch88" />
  				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Show me online</span>
  				<input type="checkbox" id="switch99" />
  				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Delete history</span>
  				<input type="checkbox" id="switch101" />
  				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  			<div class="setting-row">
  				<span>Expose author name</span>
  				<input type="checkbox" id="switch111" />
  				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
  			</div>
  		</form>
  	</div><!-- side panel -->

    @auth
      <div class="popup-wraper">
  		<div class="popup">
  			<span class="popup-closed"><i class="ti-close"></i></span>
  			<div class="popup-meta">
  				<div class="popup-head">
  					<h5>Create New Post</h5>
  				</div>
  				<div class="postbox">
  				<div class="new-postbox">
  					<figure>
  						<img src="{{ asset('frontend/images/resources/admin.jpg') }}" alt="">
  					</figure>
  					<div class="newpst-input">
  						<form action="{{ route('post.store') }}" method="post" id="post-form" enctype="multipart/form-data">
                @csrf
  							<textarea rows="1" placeholder="Photo Title" name="title"></textarea>
  							<textarea rows="2" placeholder="Share something about this photo." name="synopsis"></textarea>
  					</div>
  					<div class="attachments">
  						<ul>


  							<li>
  								<i class="fa fa-image"></i>
  								<label class="fileContainer">
  									<input type="file" name="photo">
  								</label>
  							</li>


  						</ul>
            </form>
  						<button class="post-btn" type="submit" onclick="event.preventDefault();
                            document.getElementById('post-form').submit();" data-ripple="">Post</button>
  					</div>

  				</div>
  			</div><!-- add post new box -->
  			</div>
  		</div>
  	</div><!-- create post popup -->
    @endauth


  	<div class="popup-wraper2">
  		<div class="popup post-sharing">
  			<span class="popup-closed"><i class="ti-close"></i></span>
  			<div class="popup-meta">
  				<div class="popup-head">
  					<select data-placeholder="Share to friends..." multiple class="chosen-select multi">
  						<option>Share in your feed</option>
  						<option>Share in friend feed</option>
  						<option>Share in a page</option>
  						<option>Share in a group</option>
  						<option>Share in message</option>
  					</select>
  					<div class="post-status">
  						<span><i class="fa fa-globe"></i></span>
  						<ul>
  							<li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
  							<li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
  							<li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
  						</ul>
  					</div>
  				</div>
  				<div class="postbox">
  					<div class="post-comt-box">
  						<form method="post">
  							<input type="text" placeholder="Search Friends, Pages, Groups, etc....">
  							<textarea placeholder="Say something about this..."></textarea>
  							<div class="add-smiles">
  								<span title="add icon" class="em em-expressionless"></span>
  								<div class="smiles-bunch">
  									<i class="em em---1"></i>
  									<i class="em em-smiley"></i>
  									<i class="em em-anguished"></i>
  									<i class="em em-laughing"></i>
  									<i class="em em-angry"></i>
  									<i class="em em-astonished"></i>
  									<i class="em em-blush"></i>
  									<i class="em em-disappointed"></i>
  									<i class="em em-worried"></i>
  									<i class="em em-kissing_heart"></i>
  									<i class="em em-rage"></i>
  									<i class="em em-stuck_out_tongue"></i>
  								</div>
  							</div>

  							<button type="submit"></button>
  						</form>
  					</div>
  					<figure><img src="{{ asset('frontend/images/resources/share-post.jpg') }}" alt=""></figure>
  					<div class="friend-info">
  						<figure>
  							<img alt="" src="{{ asset('frontend/images/resources/admin.jpg') }}">
  						</figure>
  						<div class="friend-name">
  							<ins><a title="" href="time-line.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
  							<span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in Ontario.</span>
  						</div>
  					</div>
  					<div class="share-to-other">
  						<span>Share to other socials</span>
  						<ul>
  							<li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a></li>
  							<li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
  							<li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
  							<li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
  							<li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a></li>
  						</ul>
  					</div>
  					<div class="copy-email">
  						<span>Copy & Email</span>
  						<ul>
  							<li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
  							<li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
  						</ul>
  					</div>
  					<div class="we-video-info">
  						<ul>
  							<li>
  								<span title="" data-toggle="tooltip" class="views" data-original-title="views">
  									<i class="fa fa-eye"></i>
  									<ins>1.2k</ins>
  								</span>
  							</li>
  							<li>
  								<span title="" data-toggle="tooltip" class="views" data-original-title="views">
  									<i class="fa fa-share-alt"></i>
  									<ins>20k</ins>
  								</span>
  							</li>
  						</ul>
  						<button class="main-btn color" data-ripple="">Submit</button>
  						<button class="main-btn cancel" data-ripple="">Cancel</button>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div><!-- share popup -->

  	<div class="popup-wraper3">
  		<div class="popup">
  			<span class="popup-closed"><i class="ti-close"></i></span>
  			<div class="popup-meta">
  				<div class="popup-head">
  					<h5>Report Post</h5>
  				</div>
  				<div class="Rpt-meta">
  					<span>We're sorry something's wrong. How can we help?</span>
  					<form method="post" class="c-form">
  						<div class="form-radio">
  						  <div class="radio">
  							<label>
  							  <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's spam or abuse
  							</label>
  						  </div>
  						  <div class="radio">
  							<label>
  							  <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's rules
  							</label>
  						  </div>
  							<div class="radio">
  							<label>
  							  <input type="radio" name="radio"><i class="check-box"></i>Not Related
  							</label>
  						  </div>
  							<div class="radio">
  							<label>
  							  <input type="radio" name="radio"><i class="check-box"></i>Other issues
  							</label>
  						  </div>
  						</div>
  					<div>
  						<label>Write about Report</label>
  						<textarea placeholder="write someting about Post" rows="2"></textarea>
  					</div>
  					<div>
  						<button data-ripple="" type="submit" class="main-btn">Submit</button>
  						<a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
  					</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div><!-- report popup -->

@js

{{-- autocomplete search --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#search').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
              console.log(data);
                return process(data);
            });
        }
    });
</script> --}}
{{-- autocomplete search END --}}


{{-- autocomplete jqueryui search --}}

<!-- Script -->
    {{-- <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('autocomplete')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#search').val(ui.item.label); // display the selected text
           return true;
        }
      });

    });
    </script> --}}
    {{-- autocomplete jqueryui search END--}}

    {{-- jquery div search --}}


    {{-- <script type="text/javascript">
    $(document).ready(function(){
        $("#search").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable .col-lg-2").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script> --}}

    {{-- jquery div search END--}}

    <script type="text/javascript">

    jQuery.fn.fastLiveFilter = function(list, options) {
    	// Options: input, list, timeout, callback
    	options = options || {};
    	list = jQuery(list);
    	var input = this;
    	var lastFilter = '';
    	var timeout = options.timeout || 0;
    	var callback = options.callback || function() {};
    	var pType = options.type || "filter";

    	var keyTimeout;

    	// NOTE: because we cache lis & len here, users would need to re-init the plugin
    	// if they modify the list in the DOM later.  This doesn't give us that much speed
    	// boost, so perhaps it's not worth putting it here.
    	var lis = list.children();
    	var len = lis.length;
    	var oldDisplay = len > 0 ? lis[0].style.display : "block";
    	callback(len); // do a one-time callback on initialization to make sure everything's in sync

      if(pType === "search") {
        for (var i = 0; i < len; i++) {
    			lis[i].style.display = "none";
        }
      }

    	input.change(function() {
    		// var startTime = new Date().getTime();
    		var filter = input.val().toLowerCase();

    		var li, innerText;
    		var numShown = 0;
    		for (var i = 0; i < len; i++) {
    			li = lis[i];
    			innerText = !options.selector ?
    				(li.textContent || li.innerText || "") :
    				$(li).find(options.selector).text();

          if(pType !== "search" || filter.trim().length > 0) {
    				if (innerText.toLowerCase().indexOf(filter) >= 0) {
    					if (li.style.display == "none") {
    						li.style.display = oldDisplay;
    					}
    					numShown++;
    				} else {
    					if (li.style.display != "none") {
    						li.style.display = "none";
    					}
    				}
          } else {
    				li.style.display = "none";
    			}
    		}
    		callback(numShown);
    		// var endTime = new Date().getTime();
    		// console.log('Search for ' + filter + ' took: ' + (endTime - startTime) + ' (' + numShown + ' results)');
    		return false;
    	}).keydown(function() {
    		clearTimeout(keyTimeout);
    		keyTimeout = setTimeout(function() {
    			if( input.val() === lastFilter ) return;
    			lastFilter = input.val();
    			input.change();
    		}, timeout);
    	});
    	return this; // maintain jQuery chainability
    }

    $('#search').fastLiveFilter('#search_list', {type: "search"});
    $('#search_in_profile').fastLiveFilter('#search_list_profile', {type: "search"});
    </script>



@yield('js')

  </body>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e31e94579255b4d"></script>

  </html>

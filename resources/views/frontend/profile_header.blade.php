<div class="user-profile">
  <figure>
    <img src="{{ asset('uploads/cover')}}/{{$user->cover }}"  alt="cover photo">
    {{-- <img src="{{ asset('frontend/images/resources/profile-image.jpg')}}" alt=""> --}}
  </figure>

  <div class="profile-section">
    <div class="row">
      <div class="col-lg-2 col-md-3">
        <div class="profile-author">
          <a class="profile-author-thumb" href="about.html">
            <img alt="author" src="{{ asset('uploads/profile')}}/{{$user->photo }}" class="w-149">
          </a>


          <div class="author-content">
            <h5>{{ $user->name }}</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-10 col-md-9">
        <ul class="profile-menu">
          <li>
            <a class="{{ Route::currentRouteNamed('profile.index') ? 'active' : NULL }}" href="{{ url('/profile') }}/{{ $user->id }}/{{ $user->slug }}">Photos</a>
          </li>
          <li>
            <a class="{{ Route::currentRouteNamed('notification.index') ? 'active' : NULL }}" href="{{ url('/notification') }}/{{ $user->id }}/{{ $user->slug }}">Notifications</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div><!-- user profile banner  -->

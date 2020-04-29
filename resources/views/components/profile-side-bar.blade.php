<div>
  <aside class="sidebar static">
    <div class="widget">
      <h4 class="widget-title">Shortcuts</h4>
      <ul class="naves">
        <li>
          <i class="ti-clipboard"></i>
          <a href="{{ route('post.show') }}" title="">News feed</a>
        </li>

        <li>
          <i class="ti-bell"></i>
          <a href="{{ url('/notification') }}/{{ $user->id }}/{{ $user->slug }}" title="">Notifications</a>
        </li>

        <li>
          <i class="ti-power-off"></i>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" title="Logout">Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
          </form>

        </li>
      </ul>
    </div><!-- Shortcuts -->
    <div class="widget">
      <h4 class="widget-title">Profile intro</h4>
      <ul class="short-profile">

        <li>
          <span>about</span>
          <p>{{ $user->profile_bio }}</p>
        </li>


      </ul>
    </div><!-- profile intro widget -->

  </aside>
</div>

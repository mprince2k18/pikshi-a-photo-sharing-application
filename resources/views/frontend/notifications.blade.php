@extends('layouts.master')
@section('title')
Pikshi Profile
@endsection
@section('content')
  <section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							@include('frontend.profile_header')
							<div class="col-lg-3">
								@include('components.profile-side-bar')
							</div><!-- sidebar -->
							<div class="col-lg-9">
                <div class="central-meta">
									<div class="editing-interest">
										<span class="create-post"><i class="ti-bell"></i> All Notifications<a title="Mark as all read" href="{{ url('/mark/as/all/read') }}/{{ Auth::user()->id }}">Mark as all read</a></span>
										<div class="notification-box">
											<ul>
                        @foreach ($notifications as $notification)
                          <li class="{{ $notification->is_read === 1 ? Null : 'mark_as_read' }}">
                            <a href="{{ $notification->url }}" target="_blank">
                              <figure><img src="{{ $notification->user->photo }}" alt=""></figure>
    													<div class="notifi-meta">
    														<p>{{ $notification->user->name }} {{ $notification->action }} post</p>
    														<span>
                                  <i class="ti-{{ $notification->action === "Loved" ? "heart" : null }}"></i>
                                  <i class="ti-{{ $notification->action === "Commented" ? "comment" : null }}"></i>
                                  <i class="ti-{{ $notification->action === "Shared" ? "share" : null }}"></i>
                                  <i class="ti-{{ $notification->action === "Downloaded" ? "download" : null }}"></i>
                                  {{ $notification->created_at->diffForHumans() }}</span>
    													</div>
                            </a>
													{{-- <i class="del ti-close" title="Remove"></i> --}}
                          <a href="{{ url('/mark/as/read') }}/{{ $notification->id }}">
                            👁️
                          </a>

												</li>
                        @endforeach


											</ul>
										</div>
									</div>
								</div>
							</div><!-- centerl meta -->


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection

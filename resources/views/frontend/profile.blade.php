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
									<div class="title-block">
										<div class="row">
											<div class="col-lg-6">
												<div class="align-left">
                          @if (is_null($user->post))
                              No Photos
                            @else
                              <h5>Photos <span>{{ $user->post->count() }}</span></h5>
                          @endif
												</div>
											</div>
											<div class="col-lg-6">
												<div class="row merged20">
													<div class="col-lg-7 col-md-7 col-sm-7">
														<form>
															<input type="text" id="search_in_profile" placeholder="Search Photo">
                              <ul class="list-group fast-search-list" id="search_list_profile">
                                @foreach ( App\Post::all() as $value)
                                  <li class="list-group-item fast-search-list-item"><a href="{{ $value->post_link }}">{{ $value->title }}</a></li>
                                @endforeach
                              </ul>
														</form>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="select-options">
															<select class="select">
																<option>Sort by</option>
																<option>A to Z</option>
																<option>See All</option>
																<option>Newest</option>
																<option>oldest</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- title block -->
								<div class="central-meta">
									<div class="row merged5">
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                      <div class="item-box">
												<div class="item-upload album">
													<i class="fa fa-plus-circle"></i>
													<div class="upload-meta">
														<h5>Upload photo or album</h5>
														<span>its only take a few seconds!</span>
													</div>
												</div>
											</div>
										</div>

                    @foreach ($user_posts as $user_post)
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
											<div class="item-box">
												<a class="strip" href="{{ asset('uploads') }}/{{ $user_post->photo }}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
												{{-- <img src="{{ $user_post->photo }}" alt=""></a> --}}
												<img src="{{ asset('uploads') }}/{{ $user_post->photo }}" alt=""></a>
												<div class="over-photo">
													<a href="#" title=""><i class="fa fa-heart"></i> {{ App\Loved::where('post_id',$user_post->id)->count() }}</a>
													<span>{{ $user_post->created_at->diffForHumans() }}</span>
												</div>
											</div>
										</div>
                    @endforeach


									<div class="lodmore">
                    @if (is_null($user->post))
                        No Photos
                      @else
                        <span>Viewing {{ $user->post->count() }} of {{ $user->post->count() }} Pictures</span>
                    @endif
									</div>
								</div><!-- photos -->
							</div><!-- centerl meta -->


                <div class="popup-wraper5">
                  <div class="popup">
                    <span class="popup-closed"><i class="ti-close"></i></span>
                    <div class="popup-meta">
                      <div class="popup-head">
                        <h5>Upload Pictures</h5>
                      </div>
                      <div class="upload-boxes">

                      <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row">
                          @csrf
                          <textarea rows="1" placeholder="Photo Title" name="title"></textarea>
                          <textarea rows="2" placeholder="Share something about this photo." name="synopsis"></textarea>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="smal-box">
                              <label class="fileContainer">
                                <i class=" ti-layout-media-center-alt"></i>
                                <input type="file" name="photo">
                                <em>Upload New</em>
                                <span>Choose form Computer</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <button class="main-btn" type="submit" title="Proceed" data-ripple="">Proceed</button>
                      </form>

                      </div>
                    </div>
                  </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection

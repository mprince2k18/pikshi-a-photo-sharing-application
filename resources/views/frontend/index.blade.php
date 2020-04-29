@extends('layouts.master')
@section('title')
Pikshi
@endsection
@section('content')
	<section>
		<div class="gap2 gray-bg">
			<div class="container-fluid ext-padding">

				@auth
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8">
							<h2 class="pitrest-title">Newsfeed Posts from Public & friends!</h2>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div class="add-pitrest">
								<a href="#" title="Create Post"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				@endauth

				<div class="row masonry merged-8">

					@forelse ($posts as $post)
						<div class="col-lg-2 col-1-5">
						<figure class="pitrest-post">
							<a class="user-avatr" href="{{ url('/profile') }}/{{ $post->user->id }}/{{ $post->user->slug }}" title="Victoria"><img src="{{ $post->user->photo }}" class="img-fluid w-45" alt=""></a>
							{{-- <img src="{{ $post->photo }}" alt=""> --}}
							<img src="{{ asset('uploads/') }}/{{ $post->photo }}" alt="{{ $post->title }}">
							<h5 class="pitrest-pst-hding">
								<a href="{{ url('/post') }}/{{ $post->id }}/{{ $post->slug }}" title="">{{ $post->title }}</a></h5>
							<div class="more">
								<div class="more-post-optns"><i class="ti-more-alt"></i>
									<ul>
										<li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
										@auth
											<li><i class="fa fa-trash-o"></i>Delete Post</li>
										@endauth
									</ul>
								</div>
							</div>
							<div class="over-photo">
								<div class="likes heart" title="Like/Dislike">❤ <span>{{ App\Loved::where('post_id',$post->id)->count() }}</span></div>
								<span>{{ $post->created_at->diffForHumans() }}</span>
							</div>
						</figure>
					</div>
				@empty
				@endforelse

				</div>
			</div>
		</div>
  </section>
@endsection

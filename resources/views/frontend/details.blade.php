@extends('layouts.master')
@section('title')
Pikshi Details
@endsection
@section('content')
  <section>
		<div class="gap2" style="background: #d4deeb">
			<div class="container">
				<div class="row" id="page-contents">
					<div class="col-lg-8">
						<div class="pittube-video">
							<div class="video-frame">


                <figure class="pitrest-post">
                  <a class="user-avatr" href="{{ url('/profile') }}/{{ $single_post->user->id }}/{{ $single_post->user->slug }}" title="Victoria">
                    <img src="{{ asset('uploads/profile') }}/{{ $single_post->user->photo }}" class="w-45" alt=""></a>
                  <img src="{{ asset('uploads/') }}/{{ $single_post->photo }}" alt="">
                  <h5 class="pitrest-pst-hding">
                    <a href="{{ url('/post') }}/{{ $single_post->id }}/{{ $single_post->slug }}" title="">{{ $single_post->title }}</a></h5>
                  <div class="more">
                    <div class="more-post-optns"><i class="ti-more-alt"></i>
                        @auth
                          <ul>
                          <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                          <li><i class="fa fa-trash-o"></i>Delete Post</li>
                        </ul>
                        @endauth
                    </div>
                  </div>


                  <div class="over-photo">
                    <div class="likes" title="Like/Dislike">
                      
                      <strong class="loved">
                        ❤
                      </strong>

                      {{ App\Loved::where('post_id',$single_post->id)->count() }}</div>
                    <span>{{ $single_post->created_at->diffForHumans() }}</span>
                  </div>



                </figure>


								<ul class="pit-opt">
									<li>
										<div title="Like/Dislike" class="likes">
                      <strong class="loved">
                        ❤
                      </strong>
                      {{ App\Loved::where('post_id',$single_post->id)->count() }}</div>
									</li>
									<li title="Comments" class="comentz"><i class="fa fa-comment"></i><em>{{ App\Comment::where('post_id',$single_post->id)->count() }}</em></li>
									<li title="Report" class="bad-report"><i class="fa fa-flag"></i></li>
									<li title="Get Post Link" class="get-link"><i class="fa fa-link"></i></li>
								</ul>
								<span class="uploadtime"><i class="fa fa-upload"></i>{{ $single_post->created_at->format('M d, Y') }}</span>
								<h4>{{ $single_post->title }}</h4>
							</div>
							<div class="chanel-avatar">
								<figure>
                  <a href="{{ url('/profile') }}/{{ $single_post->user->id }}/{{ $single_post->user->slug }}" title="">
                  <img src="{{ asset('uploads/profile')}}/{{ $single_post->user->photo }}" class="w-80" alt="">
                </a></figure>
								<div class="channl-author">
									<h5><a href="{{ url('/profile') }}/{{ $single_post->user->id }}/{{ $single_post->user->slug }}" title="">{{ $single_post->user->name }}</a></h5>
									<span>Member since {{ $single_post->user->created_at->format('Y') }}</span>
								</div>
							</div>
							<div class="addnsend">
								<a class="main-btn" href="{{ url('/profile') }}/{{ $single_post->user->id }}/{{ $single_post->user->slug }}" title="" data-ripple="">View Profile</a>
							</div>

						</div>
					</div>
					<div class="col-lg-4">

                <aside class="sidebar static">
                <div class="widget">
										<h4 class="widget-title">Details</h4>
										<ul class="short-profile">
											<li>
												<span>Title</span>
												<p>{{ $single_post->title }}</p>
											</li>
											<li>
												<span>Uploaded By</span>
												<p> <a href="#">{{ $single_post->user->name }}</a> </p>
											</li>
											<li>
												<span>Size</span>
												<p>{{ $single_post->size }}KB</p>
											</li>
											<li>
												<span>Resulation</span>
												<p>{{ $single_post->resulation }}</p>
											</li>
										</ul>
									</div>

                  @auth
                    <div class="pb-3">
                      {{-- <a href="#" id="download" class="btn btn-success w-100">Download</a> --}}
                      <a href="{{ url('/download') }}/{{ $single_post->id }}/{{ $single_post->title }}" id="download" class="btn btn-success w-100">Download</a>

                    </div>

                  @endauth

                    <div class="widget">
  										<h4 class="widget-title">Socials</h4>
  										<ul class="socials">
                        <div class="addthis_inline_share_toolbox"></div>
  										</ul>
  									</div>


                </aside>

					</div>


				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="gap2">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="central-meta">
							<div class="create-post">
								<div class="user-fig">
									<img src="{{ asset('uploads/profile')}}/{{ $single_post->user->photo }}" alt="">
									<a href="{{ url('/profile') }}/{{ $single_post->user->id }}/{{ $single_post->user->slug }}" title="">{{ $single_post->user->name }}</a>
								</div>
							</div>
							<div class="about-video">
                                <h6>Synopsis</h6>
                                <div>
                                    <input type="checkbox" class="read-more-state" id="post-1" />
                                    <p class="read-more-wrap">{{ $single_post->synopsis }}</span></p>
                                    <label for="post-1" class="read-more-trigger"></label>
                                </div>

                            </div>
							<h6 class="comet-title"><i class="fa fa-comments"></i> Comments</h6>
							<div class="coment-area" style="display: block">
								<ul class="we-comet">

                    @foreach ($post_comments as $post_comment)

                    					<li>
                    										<div class="comet-avatar">
                    											<img src="{{ asset('uploads/profile')}}/{{ $post_comment->user->photo }}" alt="">
                    										</div>
                    										<div class="we-comment">
                    											<h5><a href="{{ url('/profile') }}/{{ $post_comment->user->id }}/{{ $post_comment->user->slug }}" title="">{{ $post_comment->user->name }}</a></h5>
                    											<p>{{ $post_comment->comment }}</p>
                    											<div class="inline-itms">
                    												<span>{{ $post_comment->created_at->diffForHumans() }}</span>
                    												{{-- <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                    												<a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a> --}}
                    											</div>
                    										</div>

                                      </li>
                    @endforeach

									{{-- <li>
										<a href="#" title="" class="showmore underline">more comments+</a>
									</li> --}}

                @auth
                  <li class="post-comment">
                    <div class="comet-avatar">
                      <img src="{{ asset('uploads/profile') }}/{{ Auth::user()->photo }}" alt="">
                    </div>
                    <div class="post-comt-box">
                      <form method="post" action="{{ route('comment.store',$single_post->id) }}" class="c-form">
                        @csrf
                        <input type="text" placeholder="Post your comment" name="comment"></input>

                        <button type="submit" class="bg-dark position-static mt-2">Comment</button>
                      </form>
                    </div>
                  </li>
                @endauth



								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4">

							<aside class="sidebar">

                <div class="widget">
										<h4 class="widget-title">More Photos</h4>
										<ul class="recent-photos">
                    @foreach ($related_posts->where('user_id',$single_post->user->id) as $related_post)
											<li>
												<a class="strip" href="{{ asset('uploads') }}/{{ $related_post->photo }}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
													<img src="{{ asset('uploads') }}/{{ $related_post->photo }}" alt=""></a>
                        </li>
                    @endforeach

										</ul>
									</div>

              </aside>

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
@section('js')
<script type="text/javascript">
$(".get-link").click(function (event) {
  event.preventDefault();
  CopyToClipboard("{{ $single_post->post_link }}", true, "Link copied");
});

function CopyToClipboard(value, showNotification, notificationText) {

  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val(value).select();
  document.execCommand("copy");
  $temp.remove();

  if (typeof showNotification === 'undefined') {
    showNotification = true;
  }
  if (typeof notificationText === 'undefined') {
    notificationText = "Copied to clipboard";
  }

  var notificationTag = $("div.copy-notification");
  if (showNotification && notificationTag.length == 0) {
    notificationTag = $("<div/>", { "class": "copy-notification", text: notificationText });
    $("body").append(notificationTag);

    notificationTag.fadeIn("slow", function () {
      setTimeout(function () {
        notificationTag.fadeOut("slow", function () {
          notificationTag.remove();
        });
      }, 1000);
    });
  }
}
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#download").click(function(){

            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/download/store/{{ $single_post->id }}',

            });
   });


   $(".loved").click(function(){

       $.ajax({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           type: 'POST',
           url: '/loved/{{ $single_post->id }}',

           success: function(data) {
               location.reload();
           }
       });
});

});
</script>
<script type="text/javascript">
$('.at-svc-facebook').click(function(){
  alert('fdsfds');
});
</script>
@endsection

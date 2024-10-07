
@extends('layouts.webmaster')

@section('content')
    <section class="hero-carousel">
        <div class="container-xl">
            <div class="post-carousel-lg">
                <!-- post -->
                <div class="post featured-post-xl">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge lg">Lifestyle</a>
                        <h4 class="post-title"><a href="blog-single.html">9 Most Awesome Blue Lake With Snow Mountain</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Siam Hossain</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                        </ul>
                    </div>
                    <a href="blog-single.html">
                        <div class="thumb rounded">
                            <div class="inner data-bg-image" data-bg-image="{{ asset('frontend') }}/images/posts/featured-xl-1.jpg"></div>
                        </div>
                    </a>
                </div>
                <!-- post -->
                <div class="post featured-post-xl">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge lg">Culture</a>
                        <h4 class="post-title"><a href="blog-single.html">Important Thing You Need To Know About Swim</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Siam Hossain</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                        </ul>
                    </div>
                    <a href="blog-single.html">
                        <div class="thumb rounded">
                            <div class="inner data-bg-image" data-bg-image="{{ asset('frontend') }}/images/posts/featured-xl-2.jpg"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xl">

        <h3 class="mt-3 text-center">Popular Categories</h3>

    <div class="instagram-feed d-flex flex-wrap">

        @foreach ($category as $item)
        <div class="insta-item col-sm-2 col-6 col-md-2">
            <a href="{{ route('blog.category', $item['slug']) }}">
                <img src="{{ asset('uploads/categories') }}/{{$item['image']}}" alt="insta-title" />
                <h6 class="text-center my-0">{{$item["title"]}} ({{$item->oneBlog->count()}})</h6>
            </a>

        </div>
        @endforeach


    </div>
</div>
	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- post -->
					<div class="post post-classic rounded bordered">
						<div class="thumb top-rounded">
							<a href="category.html" class="category-badge lg position-absolute">Lifestyle</a>
							<span class="post-format">
								<i class="icon-picture"></i>
							</span>
							<a href="blog-single.html">
								<div class="inner">
									<img src="{{ asset('frontend') }}/images/posts/post-lg-1.jpg" alt="post-title" />
								</div>
							</a>
						</div>
						<div class="details">
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="{{ asset('frontend') }}/images/other/author-sm.png" class="author" alt="author"/>Siam Hossain</a></li>
								<li class="list-inline-item">29 March 2021</li>
								<li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
							</ul>
							<h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Become Better With Building In 1 Month</a></h5>
							<p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="post-bottom clearfix d-flex align-items-center">
							<div class="social-share me-auto">
								<button class="toggle-button icon-share"></button>
								<ul class="icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
								</ul>
							</div>
							<div class="float-end d-none d-md-block">
								<a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
							</div>
							<div class="more-button d-block d-md-none float-end">
								<a href="blog-single.html"><span class="icon-options"></span></a>
							</div>
						</div>
					</div>

					<!-- post -->
					<div class="post post-classic rounded bordered">
						<div class="thumb top-rounded">
							<a href="category.html" class="category-badge lg position-absolute">Inspiration</a>
							<a href="blog-single.html">
								<div class="inner">
									<img src="{{ asset('frontend') }}/images/posts/post-lg-2.jpg" alt="post-title" />
								</div>
							</a>
						</div>
						<div class="details">
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="{{ asset('frontend') }}/images/other/author-sm.png" class="author" alt="author"/>Siam Hossain</a></li>
								<li class="list-inline-item">29 March 2021</li>
								<li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
							</ul>
							<h5 class="post-title mb-3 mt-3"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h5>
							<p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="post-bottom clearfix d-flex align-items-center">
							<div class="social-share me-auto">
								<button class="toggle-button icon-share"></button>
								<ul class="icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
								</ul>
							</div>
							<div class="float-end d-none d-md-block">
								<a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
							</div>
							<div class="more-button d-block d-md-none float-end">
								<a href="blog-single.html"><span class="icon-options"></span></a>
							</div>
						</div>
					</div>

					<!-- post -->
					<div class="post post-classic rounded bordered">
						<div class="thumb top-rounded">
							<a href="category.html" class="category-badge lg position-absolute">Culture</a>
							<span class="post-format">
								<i class="icon-camrecorder"></i>
							</span>
							<a href="blog-single.html">
								<div class="inner">
									<img src="{{ asset('frontend') }}/images/posts/post-lg-3.jpg" alt="post-title" />
								</div>
							</a>
						</div>
						<div class="details">
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="{{ asset('frontend') }}/images/other/author-sm.png" class="author" alt="author"/>Siam Hossain</a></li>
								<li class="list-inline-item">29 March 2021</li>
								<li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
							</ul>
							<h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Most Important Thing You Need To Know About Swim</a></h5>
							<p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="post-bottom clearfix d-flex align-items-center">
							<div class="social-share me-auto">
								<button class="toggle-button icon-share"></button>
								<ul class="icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
								</ul>
							</div>
							<div class="float-end d-none d-md-block">
								<a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
							</div>
							<div class="more-button d-block d-md-none float-end">
								<a href="blog-single.html"><span class="icon-options"></span></a>
							</div>
						</div>
					</div>

					<!-- post -->
					<div class="post post-classic rounded bordered">
						<div class="thumb top-rounded">
							<a href="category.html" class="category-badge lg position-absolute">Lifestyle</a>
							<a href="blog-single.html">
								<div class="inner">
									<img src="{{ asset('frontend') }}/images/posts/post-lg-4.jpg" alt="post-title" />
								</div>
							</a>
						</div>
						<div class="details">
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#"><img src="{{ asset('frontend') }}/images/other/author-sm.png" class="author" alt="author"/>Siam Hossain</a></li>
								<li class="list-inline-item">29 March 2021</li>
								<li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
							</ul>
							<h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Your Light Is About To Stop Being Relevant</a></h5>
							<p class="excerpt mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="post-bottom clearfix d-flex align-items-center">
							<div class="social-share me-auto">
								<button class="toggle-button icon-share"></button>
								<ul class="icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
								</ul>
							</div>
							<div class="float-end d-none d-md-block">
								<a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
							</div>
							<div class="more-button d-block d-md-none float-end">
								<a href="blog-single.html"><span class="icon-options"></span></a>
							</div>
						</div>
					</div>

					<nav>
						<ul class="pagination justify-content-center">
							<li class="page-item active" aria-current="page">
								<span class="page-link">1</span>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
						</ul>
					</nav>

				</div>
				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">

                        {{-- categoryies wieget --}}
                        <div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Explore Topics</h3>
								<img src="{{ asset('frontend') }}/images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<ul class="list">
									<li><a href="#">Lifestyle</a><span>(5)</span></li>
									<li><a href="#">Inspiration</a><span>(2)</span></li>
									<li><a href="#">Fashion</a><span>(4)</span></li>
									<li><a href="#">Politic</a><span>(1)</span></li>
									<li><a href="#">Trending</a><span>(7)</span></li>
									<li><a href="#">Culture</a><span>(3)</span></li>
								</ul>
							</div>

						</div>
						<!-- widget about -->
						<div class="widget rounded">
							<div class="widget-about data-bg-image text-center" data-bg-image="{{ asset('frontend') }}/images/map-bg.png">
								{{-- <img src="{{ asset('frontend') }}/images/logo.svg" alt="logo" class="mb-4" /> --}}
                                <h1>Retro Blog</h1>
								<p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
								<ul class="social-icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- widget popular posts -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Popular Posts</h3>
								<img src="{{ asset('frontend') }}/images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">1</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="{{ asset('frontend') }}/images/posts/tabs-1.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">2</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="{{ asset('frontend') }}/images/posts/tabs-2.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">3</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="{{ asset('frontend') }}/images/posts/tabs-3.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<!-- widget categories -->


						<!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
								<img src="{{ asset('frontend') }}/images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
								<form>
									<div class="mb-2">
										<input class="form-control w-100 text-center" placeholder="Email address…" type="email">
									</div>
									<button class="btn btn-default btn-full" type="submit">Sign Up</button>
								</form>
								<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
							</div>
						</div>

						<!-- widget post carousel -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Celebration</h3>
								<img src="{{ asset('frontend') }}/images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<div class="post-carousel-widget">
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="{{ asset('frontend') }}/images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="#">Siam Hossain</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">Trending</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="{{ asset('frontend') }}/images/widgets/widget-carousel-2.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="#">Siam Hossain</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="{{ asset('frontend') }}/images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="#">Siam Hossain</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- carousel arrows -->
								<div class="slick-arrows-bot">
									<button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
									<button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
								</div>
							</div>
						</div>

						<!-- widget advertisement -->
						<div class="widget no-container rounded text-md-center">
							<span class="ads-title">- Sponsored Ad -</span>
							<a href="#" class="widget-ads">
								<img src="{{ asset('frontend') }}/images/ads/ad-360.png" alt="Advertisement" />
							</a>
						</div>

						<!-- widget tags -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Tag Clouds</h3>
								<img src="{{ asset('frontend') }}/images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<a href="#" class="tag">#Trending</a>
								<a href="#" class="tag">#Video</a>
								<a href="#" class="tag">#Featured</a>
								<a href="#" class="tag">#Gallery</a>
								<a href="#" class="tag">#Celebrities</a>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>

@endsection

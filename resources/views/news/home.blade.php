@extends("layout.layout")

@section("content")

<section id="index">

		<!-- boxs sectionun bashlabgici -->
		<section id="boxs">
			<div class="container-fluid">
				<div class="container">
					<div class="row" style="margin:10px; height:405px;">
						<div class="test col-md-6 col-xs-12  padding" >
							<a href="#">
								<div class="boxImg full">
									<img src="images/img1.jpg " class="full">
								</div>
								<div class="boxDesc">
									<div class="row" style="margin:10px;">
										<button>PHOTOGRAPH</button>
											<h5>Celebrity make-up artist Gary Cockerill shows you beauty trick</h5>
											<p>David Lee - September 2015</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="row" >
							@foreach($cat->take(4) as $cats)
							@foreach($cats->xeber()->take(1)->orderBy('id','desc')->get() as $news)
								<div class="test col-md-6 col-xs-6 col-sm-6">
									<a href="single/{{$news->id}}">
										<div class="boxImg2 boxPadLeft">
											<img src="{{ '/images/'.$news->news_image }}">
										</div>
										<div class="boxDesc2">
											<div class="row" style="margin:10px;">
												<button>{{ $news->category->category_name }}</button>
													<h5>{{ $news->news_title }}</h5>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- boxs sectionun sonu -->

		<!-- worldNews sectionun bashlangici -->
		<section id="worldNews">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="container">
							<div class="col-md-8 col-xs-12">
								<div class="row margin" style="border-bottom:2px solid #7f8fa9;">
								<div class="height"></div>
									<div class="col-md-6 col-xs-6">
										<h5>world news</h5>
									</div>
									<!-- <div class="col-md-6 col-xs-6">
										<ul>
											<li><a href="#">World</a></li>
											<li><a href="#">Photography</a></li>
											<li><a href="#">Health</a></li>
											<li><a href="#">Recipes</a></li>
											<li><a href="#">Arts</a></li>
										</ul>
									</div> -->
								</div>


								<div class="row" style="margin-top:30px;">
									<div class="col-md-6 col-xs-12">
										<a href="#">
											<div class="worldImg" >
												<img src="images/img6.jpg" class="img-responsive" >
											</div>
											<div class="worldDesc">
												<h5>Georgian soldier helped in attack near US base in Afghanistan</h5>
												<p><span>David Lee - </span>September 23, 2015</p>
												<h6>All right. Well, take care yourself. I guess that's what you're best, presence old master? A tremor in the Force. The last time felt..</h6>
											</div>
										</a>
									</div>
									<div class="col-md-6 col-xs-12">
										@foreach($cat->find(14)->xeber()->orderBy('id','desc')->take(4)->get() as $news)

											<div class="row">
												<div class="col-md-12 col-xs-12">
													<a href="single/{{$news->id}}">
														<div class="col-md-4 col-xs-2">
															<div class="worldImg2">
																<img src="{{ '/images/'.$news->news_image }}">
															</div>
														</div>
														<div class="col-md-8 col-xs-8">
														<div class="worldDesc2">
															<h6>{{ $news->news_title }}</h6>
															<p>September 23, 2015</p>
														</div>
														</div>
													</a>
												</div>
											</div>
											<div class="height2"></div>

										@endforeach
										<!-- <div class="row">
										<div class="col-md-12 col-xs-12">
											<a href="#">
													<div class="col-md-4 col-xs-2">
														<div class="worldImg2">
															<img src="images/img8.jpg">
														</div>
													</div>
													<div class="col-md-8 col-xs-8">
													<div class="worldDesc2">
														<h6>A Look at How Social & Mobile Gaming Increase Sales</h6>
														<p>September 23, 2015</p>
													</div>
													</div>
												</a>
										</div>
										</div>
										<div class="height2"></div>
										<div class="row">
										<div class="col-md-12 col-xs-12">
											<a href="#">
													<div class="col-md-4 col-xs-2">
														<div class="worldImg2">
															<img src="images/img9.jpg">
														</div>
													</div>
													<div class="col-md-8 col-xs-8">
													<div class="worldDesc2">
														<h6>Things to Look For in a Financial Trading Platform</h6>
														<p>September 23, 2015</p>
													</div>
													</div>
												</a>
										</div>
										</div>
										<div class="height2"></div>
										<div class="row">
										<div class="col-md-12 col-xs-12">
											<a href="#">
													<div class="col-md-4 col-xs-2">
														<div class="worldImg2">
															<img src="images/img10.jpg">
														</div>
													</div>
													<div class="col-md-8 col-xs-8">
													<div class="worldDesc2">
														<h6>Kansas City has a massive network of underground caves</h6>
														<p>September 23, 2015</p>
													</div>
													</div>
												</a>
										</div>
										</div> -->

									</div>
								</div>
							</div>
						<div class="col-md-4 col-xs-12">
						<div class="height"></div>
							<div class="row text-center">
								<div class="col-md-4 col-xs-4">
									<div class="social">
									<a href="#">
										<i class="fa fa-facebook" style="color:color:#516eab;"></i>
										<p>2,263</p>
										<span>Fans</span>
									</a>
									</div>
								</div>
								<div class="col-md-4 col-xs-4">
									<div class="social">
									<a href="#">
										<i class="fa fa-twitter" style="color:#29c5f6;"></i>
										<p>60,765</p>
										<span>Followers</span>
									</a>
									</div>
								</div>
								<div class="col-md-4 col-xs-4">
									<div class="social">
									<a href="#">
										<i class="fa fa-youtube-play" style="color:#e14e42;"></i>
										<p>1,778</p>
										<span>Subscribe</span>
									</a>
									</div>
								</div>
							</div>
							<div class="height"></div>
							<div class="row text-center">
								<a href="#">
									<img src="images/img11.jpg">
								</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- worldNews sectionun sonu -->

		<!-- Travel guides sectionun bashlangici -->
			<section id="TravelGuides">
				<div class="container-fluid">
					<div class="container">
						<div class="col-md-8 ">
							<div class="row margin" style="border-bottom:2px solid #66bb6a;">
							<div class="height"></div>
								<h5>TRAVEL GUIDES</h5>
							</div>
							<div class="row">
							<div class="height"></div>
							@foreach($cat->find(13)->xeber()->orderBy('id','desc')->take(3)->get() as $news)
								<div class="col-md-4 col-xs-4">
									<a href="#">
										<div class="travelImg ">
											<img src="{{ '/images/'.$news->news_image }}">
											<div class="travelBtn">
											<button>{{ $news->category->category_name }}</button>
										</div>
										</div>
										<div class="travelTitle">

												<h5>{{ $news->news_title }}</h5>

										</div>
										</a>
								</div>
							@endforeach
							</div>
							<!-- <div class="row">
								<button class="left_right"><i class="fa fa-angle-left"></i></button>
								<button class="left_right"><i class="fa fa-angle-right"></i></button>
							</div> -->
							<!-- tech sectionun bashlangici -->
						<div class="col-md-6">
							<section id="tech">
								<div class="row" >
									<div class="height"></div>
										<div class="row margin" style="border-bottom:2px solid #3f51b5;width:350px">
											<h5>TECH</h5>
										</div>
										<div class="height"></div>
										<div class="row" style="margin-left:0px;">
											<a href="#">
											<div class="techImg">
												<img src="images/img17.jpg">
													<div class="techBtn">
														<button>TECH</button>
													</div>
											</div>
											<div class="techDesc">

													<h5>Gigabyte GeForce GTX 950 Review: Pricing Is Everything</h5>
													<p><span>David Lee</span>-  September 24, 2015</p>
													<h3>All right. Well, take care yourself. I guess that's what you're best, presence old master? A tremor in the Force. The last time felt...</h3>

											</div>
											</a>
										</div>
									@foreach($cat->find(12)->xeber()->orderBy('id','desc')->take(2)->get() as $news)
										<div class="row" style="margin-left:0px;">
										<a href="#">
											<div class="col-md-4 col-xs-2" style="padding-left:0px; margin-top:10px;">
												<div class="techImg2">
													<img src=" {{'/images/'.$news->news_image }}">
												</div>
											</div>
											<div class="col-md-8 col-xs-8" style="padding-left:0px;">
												<div class="techDesc2">
												<h6>{{ $news->news_title }}</h6>
													<p>September 23, 2015</p>
												</div>
											</div>
										</a>
										</div>
										@endforeach

										<!-- <div class="row">
											<button class="left_right"><i class="fa fa-angle-left"></i></button>
											<button class="left_right"><i class="fa fa-angle-right"></i></button>
										</div> -->
									</div>
							</section>
						</div>
							<!-- tech sectionun sonu -->

							<!-- health sectioun bashlangici -->
							<div class="col-md-6">
								<section id="health">
									<div class="row">
										<div class="height"></div>
											<div class="row margin" style="border-bottom:2px solid #e91e63;width:350px;">
													<h5>HEALTH</h5>
											</div>
											<div class="height"></div>
											<div class="row" style="margin-left:0px;">
												<a href="#">
												<div class="healthImg">
													<img src="images/img20.jpg">
														<div class="healthBtn">
															<button>HEALTH</button>
														</div>
												</div>
												<div class="healthDesc">

														<h5>Summer Sports That Torch Serious Calories</h5>
														<p><span>David Lee</span>-  September 24, 2015</p>
														<h6>All right. Well, take care yourself. I guess that's what you're best, presence old master? A tremor in the Force. The last time felt...</h6>
												</div>
												</a>
											</div>
											@foreach($cat->find(7)->xeber()->orderBy('id','desc')->take(2)->get() as $news)
											<div class="row" style="margin-left:0px;">
												<a href="#">
												<div class="col-md-4 col-xs-2" style="padding-left:0px; margin-top:10px;">
													<div class="healthImg2">
														<img src="{{'/images/'.$news->news_image }}">
													</div>
												</div>
												<div class="col-md-8 col-xs-8" style="padding-left:0px;">
													<div class="healthDesc2">

															<h3>{{ $news->news_title }}</h3>

														<p>September 23, 2015</p>
													</div>
												</div>
												</a>
											</div>
											@endforeach
											<!-- <div class="row">
												<button class="left_right"><i class="fa fa-angle-left"></i></button>
												<button class="left_right"><i class="fa fa-angle-right"></i></button>
											</div> -->
									</div>
								</section>
							</div>

							<!-- health sectiounun sonu -->
						</div>
						<div class="col-md-4">
						<!-- mostPopular sectioun bashlangici -->
						<section id="mostPopular">
							<div class="row" style="border-bottom:2px solid #009688;margin-left:10px;margin-top:20px;">
							<div style="height:40px;"></div>
							<div class="row">
								<div class="col-md-6">
									<h5>MOST POPULAR</h5>
								</div>
								<div class="col-md-6">
									<div class="dropdown">
										  <button class="dropdown-toggle pull-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border:none;background:none; margin-top:8px;opacity:0.5;">
										    More
										  <span class="caret"></span>
										  </button>
											  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="margin-top:40px;">
											    <li><a href="#">All</a></li>
											    <li><a href="#">World</a></li>
											    <li><a href="#">Fashion</a></li>
											    <li><a href="#">Photography</a></li>
											    <li><a href="#">Tech</a></li>
											    <li><a href="#">Sport</a></li>
											  </ul>
									</div>
								</div>
							</div>
							</div>
							<div class="height"></div>
							<div class="mostPopular">
								<div class="row">
									<div class="col-md-4 col-xs-2">
										<div class="mostImg">
											<img src="images/img15.jpg">
										</div>
									</div>
									<div class="col-md-8 col-xs-8">
										<div class="mostTitle">
											<a href="#">
												<h5>George Boateng: Keeping Ron Vlaar was Paul Lambert masterstroke</h5>
											</a>
											<div class="row">
												<button>Sport</button>
												<span>September 23, 2015</span>
											</div>
										</div>
									</div>
								</div>
									<div class="height2"></div>
								<div class="row">
									<div class="col-md-4 col-xs-2">
										<div class="mostImg">
											<img src="images/img16.jpg">
										</div>
									</div>
									<div class="col-md-8 col-xs-8">
										<div class="mostTitle">
											<a href="#">
												<h5>Gigabyte GeForce GTX 950 Review: Pricing Is Everything</h5>
											</a>
											<div class="row">
												<button>Tech</button>
												<span>September 23, 2015</span>
											</div>
										</div>
									</div>
								</div>
									<div class="height2"></div>
								<div class="row">
									<div class="col-md-4 col-xs-2">
										<div class="mostImg">
											<img src="images/img5.jpg">
										</div>
									</div>
									<div class="col-md-8 col-xs-8">
										<div class="mostTitle">
											<a href="#">
												<h5>Fashion Week Parties: Night 4</h5>
											</a>
											<div class="row">
												<button>Fashion</button>
												<span>September 23, 2015</span>
											</div>
										</div>
									</div>
								</div>
									<div class="height2"></div>
								<div class="row">
									<div class="col-md-4 col-xs-2">
										<div class="mostImg">
											<img src="images/img1.jpg">
										</div>
									</div>
									<div class="col-md-8 col-xs-8">
										<div class="mostTitle">
											<a href="#">
												<h5>Celebrity make-up artist Gary Cockerill shows you beauty trick</h5>
											</a>
											<div class="row">
												<button>Photography</button>
												<span>September 23, 2015</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<button class="left_right"><i class="fa fa-angle-left"></i></button>
								<button class="left_right"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</section>
					<!-- mostPopular sectionun sonu -->
					</div>
				</div>
			</section>
		<!-- Travel sectionun sonu -->

		<!-- center sectionun bashlangici -->
			<section id="center">
				<div class="container-fluid">
					<div class="container">
						<div class="row text-center">
						<div class="height"></div>
							<div class="col-md-2 col-xs-6 col-md-offset-1">
								<a href="#">
									<h5><i class="fa fa-star"></i>  FASHION</h5>
								</a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#">
									<h5><i class="fa fa-futbol-o"></i>  SPORT</h5>
								</a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#">
									<h5><i class="fa fa-play"></i>  MUSIC</h5>
								</a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#">
									<h5><i class="fa fa-globe"></i>  WORLD</h5>
								</a>
							</div>
							<div class="col-md-2 col-xs-12">
								<a href="#">
									<h5><i class="fa fa-glass"></i>  LIFESTYLE</h5>
								</a>
							</div>
						</div>
						<div class="fashion">
							<div class="row">
							<div class="height2"></div>
							@foreach($cat->find(5)->xeber()->orderBy('id','desc')->take(3)->get() as $news)
								<div class="col-md-4 col-xs-12">
									<a href="#">
									<div class="fashionImg">
										<img src="{{ '/images/'.$news->news_image }}">
											<div class="fashionDesc">
												<button>{{ $news->category->category_name}}</button>
												<div class="fashionTitle">

														<h6>{{ $news->news_title }}</h6>

												</div>
											</div>
									</div>
									</a>
								</div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- center sectionun sonu -->

		<!-- sports sectionun bahslangici -->
			<section id="sports">
				<div class="conatiner-fluid">
					<div class="container">
					<div class="height"></div>
						<div class="row">
							<div class="col-md-8 col-xs-12">
								<div class="row margin" style="border-bottom:2px solid #66bb6a;">
									<h5>SPORTS NEWS</h5>
								</div>
								@foreach($cat->find(11)->xeber()->orderBy('id','desc')->take(5)->get() as $news)
									<div class="row">
										<div class="col-md-4 col-xs-4">
											<div class="sportsImg">
												<a href="#">
													<img src="{{'/images/'.$news->news_image}}">
												</a>
											</div>
										</div>
										<div class="col-md-8 col-xs-8 padding">
											<div class="sportsDesc">
												<a href="#">
													<h5> {{ $news->news_title }} </h5>
												</a>
												<button>{{$news->category->category_name}}  </button>
												<p><span>{{ $news->user->name}}</span>-  September 23, 2015</p>
												<h6> {!! substr(($news->news_text),0,250) !!}) </h6>
											</div>
										</div>
									</div>
								@endforeach

							</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<!-- recipes sectiounun bashlangici -->
									<!-- <section id="recipes">
										<div class="row margin"  style="border-bottom:2px solid #66bb6a;">
											<h5>RECIPES</h5>
										</div>
										<div class="row">
											<div class="recipesImg">
												<img src="images/img31.jpg">
													<div class="recipesBtn">
														<button>Recipes</button>
													</div>
											</div>
											<div class="recipesDesc">
												<a href="#">
													<h5>Easy breakfast! 4 healthy smoothie bowl recipes to start</h5>
												</a>
												<p><span>David Lee</span>-  September 23, 2015</p>
												<h6>All right. Well, take care yourself. I guess that's what you're best, presence old master? A tremor in the Force. The last time felt...</h6>
												<h4>THE BEST PARISIAN VITAMIN SALAD</h4>
											</div>
										</div>
										<div class="row">
											<button class="left_right"><i class="fa fa-angle-left"></i></button>
											<button class="left_right"><i class="fa fa-angle-right"></i></button>
										</div>
									</section> -->
								<!-- recipes sectionun sonu -->
							</div>



						</div>
					</div>
				</div>
			</section>
		<!-- sports sectionun sonu -->

		<!-- watch now sectionun bashlangici -->
			<section id="watchNow">
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="height"></div>
							<div class="col-md-12">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/5vEYvK03SCE?list=RD5vEYvK03SCE" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
		<!-- watch now sectionun sonu -->

		<!-- Latest articles sectionun bashlangici -->
		<section id="latestArticles">
			<div class="container-fluid">
				<div class="container">
				<div class="height"></div>
					<div class="row">
						<div class="col-md-8">
							<div class="row" style="border-bottom:2px solid #009688; margin:0px;">
								<h5>LATEST ARTICLES</h5>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img32.jpg">
										<div class="latestBtn">
											<button>Photography</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Celebrity make-up artist Gary Cockerill shows
											you beauty trick
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img33.jpg">
										<div class="latestBtn">
											<button>Health</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Summer Sports That Torch Serious Calories
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img34.jpg">
										<div class="latestBtn">
											<button>Health</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>The Workout That Burns More Calories Than Running
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img35.jpg">
										<div class="latestBtn">
											<button>Tech</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Gigabyte GeForce GTX 950 Review: Pricing Is Everything
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img36.jpg">
										<div class="latestBtn">
											<button>World</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Georgian soldier helped in attack near US base in Afghanistan
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img37.jpg">
										<div class="latestBtn">
											<button>Arts</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>A Thomas Hart Benton Mural, Repurposed as a Writing Desk
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img38.jpg">
										<div class="latestBtn">
											<button>Arts</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Making Times Square’s Pedestrian Plazas Work
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img39.jpg">
										<div class="latestBtn">
											<button>Arts</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>How the Guggenheim Keeps Its Galleries Immaculate
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img40.jpg">
										<div class="latestBtn">
											<button>Arts</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Joan Young Moderates a Conversation about Singapore
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="latestImg">
										<img src="images/img42.jpg">
										<div class="latestBtn">
											<button>Music</button>
										</div>
									</div>
									<div class="latestDesc">
										<a href="#">
											<h5>Man United skipper again boosted for first goal
											</h5>
										</a>
										<p><span>David Lee </span>- September 24, 2015</p>
									</div>
								</div>
							</div>
								<div class="row">
									<nav aria-label="Page navigation">
										<ul class="pagination">
										    <li><a href="#">1</a></li>
										    <li><a href="#">2</a></li>
										    <li><a href="#">3</a></li>
										    <li><a href="#" style="border:none;">...</a></li>
										    <li><a href="#">6</a></li>
										    <li>
										      <a href="#" aria-label="Next">
										        <span aria-hidden="true">&raquo;</span>
										      </a>
										    </li>
										  </ul>
									</nav>
								</div>
						</div>
						<div class="col-md-4">
							<!-- must read sectionun bashlangici -->
							<div class="row">
								<section id="mustRead">
									<div class="row" style="border-bottom:2px solid #009688; margin:0px;">
										<h5>MUST READ</h5>
									</div>
									<div class="col-md-12 col-xs-12" style="padding-left:0px;">
										<a href="#">
											<h5>George Boateng: Keeping Ron Vlaar was Paul Lambert masterstroke</h5>
										</a>
										<div class="row" style="margin-left:0px;">
											<button>Sport</button>
											<p><span>David Lee </span>- September 24, 2015</p>
										</div>
									</div>
									<div class="col-md-12 col-xs-12" style="padding-left:0px;">
										<a href="#">
											<h5>Gigabyte GeForce GTX 950 Review: Pricing Is Everything</h5>
										</a>
										<div class="row" style="margin-left:0px;">
											<button>Tech</button>
											<p><span>David Lee </span>- September 24, 2015</p>
										</div>
									</div>
									<div class="col-md-12 col-xs-12" style="padding-left:0px;">
										<a href="#">
											<h5>Fashion Week Parties: Night 4</h5>
										</a>
										<div class="row" style="margin-left:0px;">
											<button>Fashion</button>
											<p><span>David Lee </span>- September 24, 2015</p>
										</div>
									</div>
									<div class="col-md-12 col-xs-12" style="padding-left:0px;">
										<a href="#">
											<h5>Celebrity make-up artist Gary Cockerill shows you beauty trick</h5>
										</a>
										<div class="row" style="margin-left:0px;">
											<button>Photography</button>
											<p><span>David Lee </span>- September 24, 2015</p>
										</div>
									</div>
								</section>
							</div>
							<!-- must read sectionun sonu -->

							<!-- CATEGORIES sectionun bashlangici -->
							<div class="row">
								<section id="categories">
									<div class="row" style="border-bottom:2px solid #009688; margin:0px;">
										<h5>CATEGORIES</h5>
									</div>
									<div class="row">
										<ul>
											<li><a href="#">Arts</a></li>
											<li><a href="#">Fashion</a></li>
											<li><a href="#">Featured</a></li>
											<li><a href="#">Health</a></li>
											<li><a href="#">Music</a></li>
											<li><a href="#">Photography</a></li>
											<li><a href="#">Recipes</a></li>
											<li><a href="#">Sport</a></li>
											<li><a href="#">Tech</a></li>
											<li><a href="#">Travel</a></li>
											<li><a href="#">World</a></li>
										</ul>
									</div>
								</section>
							</div>
							<!-- CATEGORIES sectionun sonu -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest articles sectionun sonu -->


	</section> <!-- Mahammad -->
@stop

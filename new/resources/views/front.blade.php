@php
	 Request::segment(1) == ('ka') ? 	$Lang='ka' : ''; 
	 Request::segment(1) == ('en') ? 	$Lang='en' : ''; 
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Psolution</title>
	<meta charset="UTF-8">
	<link href="{{asset('front\img\logos\logo-shortcut.png')}}" rel="shortcut icon">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link href="{{asset('front\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\icomoon.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\swiper.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\slider.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\animate.css')}}" rel="stylesheet">
	<link href="{{asset('front\css\switcher.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('front\css\default.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('front\css\styles.css')}}" id="colors" rel="stylesheet" type="text/css">
	<link href="{{asset('https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">
</head>
<body>
	<div id="preloader">
		<div class="row loader">
			<div class="loader-icon"></div>
		</div>
	</div>
	<div class="hidden-sm-down" id="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-12">					
					<div class="top-bar-info" id="home">
						<ul>
							<li><i class="fa fa-phone"></i><a href="tel:+995599340740">(+995) 599 340 740</a></li>
							<li></li>
							<li><i class="fa fa-envelope"></i><a href="mailto:g.lomidze@procurements.ge">g.lomidze@procurements.ge</a></li>
							<li></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<ul class="social-icons hidden-md-down">
						<li>
							<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-youtube"></i></a>
						</li> 
					<li class="nav-item p_hide">
                        <a href="{{ url('ka') }}" style="padding-right: 4px;">ქარ </a>
                    </li>
					<li><a href="{{ url('en') }}" style="padding-left: 4px;">ENG</a>
					</li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<header>
		<nav class="container navigation" id="navigation4">
			<div class="nav-header">
				<a class="nav-brand" href="#"><img alt="logo" class="main-logo" id="main_logo" src="front/img/logos/logo.png"></a>
			</div>
			<div class="nav-menus-wrapper">
				<ul class="nav-menu align-to-right">
					<li>
						<a href="#home">
							@if ($Lang=='ka')
							მთავარი
							@endif
							@if ($Lang=='en')						
							Home 
							@endif
							
						</a>		
					</li>
					<li>
						<a href="#about">
							@if ($Lang=='ka')
							ჩვენ შესახებ
							@endif
							@if ($Lang=='en')						
							About Us 
							@endif
						</a>
					</li>
					<li>
						<a href="#direction">
							@if ($Lang=='ka')
							მიმართულება
							@endif
							@if ($Lang=='en')						
							advantages 
							@endif	
						</a>
					</li>
					<li>
						<a href="#advantages">
							@if ($Lang=='ka')
							უპირატესობები
							@endif
							@if ($Lang=='en')						
							Bitrix 
							@endif	
						</a>
					</li>
					<li>
						<a href="#team">
							@if ($Lang=='ka')
							გუნდი
							@endif
							@if ($Lang=='en')						
							team 
							@endif	
						</a>
					</li>
					<li >
						<a href="#contact">
							@if ($Lang=='ka')
							კონტაქტი
							@endif
							@if ($Lang=='en')						
							contact 
							@endif	
						</a>
					</li>					
				</ul>
			</div>
		</nav>
	</header>
	<div class="swiper-main-slider-fade swiper-container">
		<div class="swiper-wrapper">
			@foreach($sliders as $slider)
			<div class="swiper-slide" style="background-image:url(sliders/{{$slider->image}});">
				<div class="container">
					<div class="slider-content left-holder">
						<h2 class="animated fadeInDown">
							@if ($Lang=='ka')
								{!! $slider->title_ka !!} 
							@endif
							@if ($Lang=='en')						
							{!! $slider->title_en !!} 
							@endif
						</h2>
						<div class="row">
						</div>
					</div>
				</div>
			</div>
			@endforeach


			
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>
	<div class="section-clients">
		<div class="container" id="about">
			<div class="owl-carousel owl-theme clients" id="clients">
				@foreach($partners as $partner)
				<div class="item"> <a href="{{$partner->link}}"><img alt="partner-image" src="partners/{{$partner->image}}"></a></div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="section-block-bg" style="background-image: url(front/img/bg/bg11.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-12 offset-md-5">
					@foreach($abouts as $about)

					<div class="section-heading">
						<h4>
							@if ($Lang=='ka')
								{{$about->title_ka}}
							@endif
							@if ($Lang=='en')						
							{{$about->title_en}}
							@endif

						</h4>
						<div class="section-heading-line-left"></div>
						<div class="text-content-big mt-10">
							@if ($Lang=='ka')
							{!! $about->text_ka !!}		
							@endif
							@if ($Lang=='en')						
							{!! $about->text_en !!}		
							@endif
							<img src="front/img/content/stik.png">
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="section-block" id="direction">
		<div class="container">
			<div class="section-heading center-holder">
				<span>დისტანციური აუთსორს შესყიდვების სერვისი (ROPS)</span>
				<h3>ძირითადი მიმართულებები</h3>
				<div class="section-heading-line"></div>
			</div>
			<div class="row mt-60">
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class="icon-target"></i>
							</div>
							<div class="feature-flex-square-content">								
								<p>ნებისმიერი შესყიდვის ობიექტის (საქონელი, მომსახურება, სამშენებლო სამუშაო) ტექნიკური პარამეტრების განსაზღვრა</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class="icon-search"></i>
							</div>
							<div class="feature-flex-square-content">								
								<p>ბაზრის კვლევის წინამოსამზადებელი სამუშაოების ჩატარება, დოკუმენტაციის მომზადება და პოტენციური მომწოდებლების მოძიება</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class="icon-file"></i>
							</div>
							<div class="feature-flex-square-content">
								
								<p>ხელშეკრულების პირობების შესრულების მონიტორინგი და შესყიდვის პროცესში საჭირო სხვადასხვა პროცედურების წარმართვა</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class=""><img src="front/img/win.png"></i>
							</div>
							<div class="feature-flex-square-content">							
								<p>გამარჯვებულის გამოვლენა და მასთან სხვადასხვა პირობების დაზუსტება</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class=""><img src="front/img/gamotstileba.png"></i>
							</div>
							<div class="feature-flex-square-content">
								<p>ხელშეკრულების მომზადება გამარჯვებულ პრეტენდენტთან და შეკვეთის მიცემა</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class=""><img src="front/img/logistic.png"></i>
							</div>
							<div class="feature-flex-square-content">
								<p>იმპორტის შემთხევაში საუკეთესო პირობის მქონე ლოჯისტიკური სერვისის მოძიება</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class=""><img src="front/img/sabajo.png"></i>
							</div>
							<div class="feature-flex-square-content">
								<p>საჭიროების შემთხევავაში საქონლის ტრანსპორტირების და საბაჟო პროცედურების ორგანიზება</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class=""><img src="front/img/look.png"></i>
							</div>
							<div class="feature-flex-square-content">
								<p>საქონლის მიღება და პირველადი გარეგანი დათვალიერება</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="feature-flex-square">
						<div class="clearfix">
							<div class="feature-flex-square-icon">
								<i class=""><img src="front/img/market.png"></i>
							</div>
							<div class="feature-flex-square-content" id="advantages">
								<p>ბაზრის კვლევის ორგანიზება, მიღებული წინადადებების შეფასება</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-block-bg section-md" style="background-image: url(front/img/bg/bg5.jpg);">
		<div class="container">
			@foreach($advantages as $advantage)

			<div class="row">
				<div class="col-md-6 col-sm-6 col-12">
					<div class="pr-30-md">
						<div class="section-heading white-color mt-30">
							
							<h2><strong>
							@if ($Lang=='ka')
								{{$advantage->title_ka}}
							@endif
							@if ($Lang=='en')						
								{{$advantage->title_en}}
							@endif
							</strong></h2>
							
							<div class="section-heading-line-left"></div>
						</div>
						<div class="text-content white-color mt-25">
							@if ($Lang=='ka')
								{!! $advantage->content_ka !!}
							@endif
							@if ($Lang=='en')						
							{!! $advantage->content_en !!}
							@endif
						</div>

						<div class="mt-20">
						
						<div aria-multiselectable="true" class="panel-group mt-40" id="accordion2" role="tablist">
						<div class="panel panel-grey accordion">
							<div class="panel-heading accordion-heading" id="acc1" role="tab">
								<h4 class="panel-title accordion-title"><a aria-controls="ac_col1" aria-expanded="true" data-parent="#accordion2" data-toggle="collapse" href="#ac_col1" role="button">
								@if ($Lang=='ka')
									{{$advantage->point1_ka}}
								@endif
								@if ($Lang=='en')						
									{{$advantage->point1_en}}
								@endif
							</a></h4>
							</div>							
						</div>
						<div class="panel panel-grey accordion">
							<div class="panel-heading accordion-heading" id="acc2" role="tab">
								<h4 class="panel-title accordion-title"><a aria-controls="ac_col2" aria-expanded="false" class="collapsed" data-parent="#accordion2" data-toggle="collapse" href="#ac_col2" role="button">
									@if ($Lang=='ka')
										{{$advantage->point2_ka}}
									@endif
									@if ($Lang=='en')						
										{{$advantage->point2_en}}
									@endif	
								</a></h4>
							</div>							
						</div>
						<div class="panel panel-grey accordion">
							<div class="panel-heading accordion-heading" id="acc3" role="tab">
								<h4 class="panel-title accordion-title"><a aria-controls="ac_col3" aria-expanded="false" class="collapsed" data-parent="#accordion2" data-toggle="collapse" href="#ac_col3" role="button">
								@if ($Lang=='ka')
									{{$advantage->point3_ka}}
								@endif
								@if ($Lang=='en')						
									{{$advantage->point3_en}}
								@endif	
								</a></h4>
							</div>
							
						</div>
					    </div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-box">
								<i class="<?php  echo $advantage->icon1; ?>"></i>
								<h4>	
								@if ($Lang=='ka')
									{{$advantage->txt1_ka}}
								@endif
								@if ($Lang=='en')						
									{{$advantage->txt1_en}}
								@endif								
                               </h4>
								<p></p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-box">
								<i class="<?php  echo $advantage->icon2; ?>"></i>
								<h4>	
									@if ($Lang=='ka')
										{{$advantage->txt2_ka}}
									@endif
									@if ($Lang=='en')						
										{{$advantage->txt2_en}}
									@endif								
								</h4>
								<p></p>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-box">
								<i class="<?php  echo $advantage->icon3; ?>"></i>
								<h4>	
									@if ($Lang=='ka')
										{{$advantage->txt3_ka}}
									@endif
									@if ($Lang=='en')						
										{{$advantage->txt3_en}}
									@endif								
								</h4>
								<br>
								<p></p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-box">
							    <i class="<?php  echo $advantage->icon4; ?>"></i>								
								<h4>	
									@if ($Lang=='ka')
										{{$advantage->txt4_ka}}
									@endif
									@if ($Lang=='en')						
										{{$advantage->txt4_en}}
									@endif								
								</h4>
								<p></p>
							</div>
						</div>
					</div>
				</div>				
			</div>
			@endforeach

		</div>
	</div>
	<div class="section-block" id="bitrix">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-12"><img alt="img" class="rounded-border shadow-primary" src="front/img/content/about2.png"></div>
				<div class="col-md-6 col-sm-6 col-12">
					<div class="pl-30-md">
						<div class="section-heading">
							<h4>რა არის Bitrix ? </h4>
						</div>
						<div class="section-heading-line-left"></div>
						<div class="text-content-big mt-20">
							<p>ჩვენთან ურთიერთობა მარტივი და თანამედროვე. ჩვენ გთავაზობთ ROPS Bitrix ის სისტემით მუშაობას. ეს არის სამუშაო ინტერფეისი, რომელიც შეიქმნა 2012 წელს კომპანიებში ეფექტური მართვისა და კომუნიკაციისთვის. ამ ეტაპზე ბიტრიქსში ჩართულია უკვე: </p>
						</div>
						<div class="row mt-20">
							<div class="col-md-6">
								<ul class="primary-list">
									<li><i class="fa fa-caret-right"></i>6 000 000 მეტი კომპანია</li>
									<li><i class="fa fa-caret-right"></i>80-ზე მეტი ქვეყნიდან</li>
								</ul>
							</div>							
						</div>
						<div class="text-content-big mt-20">
							<p>Bitrix -ის დანერგვით  თავიდან აიცილებთ წარმოშობილ საკომუნიკაციო სირთულეებს, დაზოგავთ დროს და გააუმჯობესებთ მომსახურების ხარისხს.</p>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-block-bg" style="background-image: url(front/img/bg/bg15.jpg);">
		<div class="container">		
			<div class="row">
					<div class="section-heading">						
						<h3>Bitrix-ის ძირითადი ფუნქციები</h3>						
					</div>									
			<div class="row">										
					<div class="col-md-6 col-sm-6 col-12">
						<div class="section-heading mt-40">
							<h6>არის უნიკალური პლათფორმა:</h6>
							<div class="section-heading-line-left"></div>
						</div>
						<ul class="primary-list mt-40">
							<li><i class="fa fa-check-square"></i>პროექტებისთვის სამართავად</li>
							<li><i class="fa fa-check-square"></i>ფაილების მიმოცვლისათვის</li>
							<li><i class="fa fa-check-square"></i>მიმოწერისთვის</li>
							<li><i class="fa fa-check-square"></i>დავალებებისა და ქვედავალებების გასაცემად</li>
							<li><i class="fa fa-check-square"></i>კონტაქტებისთვის</li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6 col-12">
						<div class="section-heading mt-40">
							<h6>ასრულებს მენეჯმენტის ფუნქციას:</h6>
							<div class="section-heading-line-left"></div>
						</div>
						<ul class="primary-list mt-40">
							<li><i class="fa fa-check-square"></i>დაგეგმვა</li>
							<li><i class="fa fa-check-square"></i>ორგანიზება</li>
							<li><i class="fa fa-check-square"></i>ბრძანება</li>
							<li><i class="fa fa-check-square"></i>კოორდინირება</li>
							<li><i class="fa fa-check-square"></i>კონტროლი</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="section-block" id="prices">
		<div class="container">
		<div class="section-heading center-holder">
				<span>დისტანციური აუთსორს შესყიდვების სერვისი (ROPS)</span>
				<h2>სერვისის ტარიფები</h2>	</br>			
			</div>				
			<div class="project-single">
				<div class="project-single-img"><img alt="img" class="rounded-border shadow-primary" src="front/img/bg/single.jpg"></div>
				<div class="project-single-text">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-12">							
							<p>ჩვენი სამუშაო მოდელი დამოკიდებულია მხოლოდ საკომისიოზე, რომელსაც კომპანია იხდის წინასწარ შეთანხმებული პირობებით.</p>															
								<blockquote class="blockquote"><p>კონტრაქტის პერიოდი - ერთჯერადი ან მინ 12 თვე</p></blockquote>
								<blockquote class="blockquote"><p>შესასყიდ პროდუქციაზე ექსკლუზიური პირობა კონტრაქტის ვადის ფარგლებში</p></blockquote>
								<blockquote class="blockquote"><p>ტარიფი : სავარაუდო ზღვრებია 3-10%</p></blockquote>
								<blockquote class="blockquote"><p>ტარიფი შესაძლებელია დადგენილი იქნას, როგორც ცალკეულ შესყიდვაზე ასევე მოლაპარაკება განხორციელდეს ყოველთვიურ ფიქსირებულ გადასახადზე</p></blockquote>
								<blockquote class="blockquote"><p>ხელშეკრულების გაფორმების შემთხვევაში შესაძლებელია ლიოალობის და ბონუს სისტემების პროგრამაში ჩართვა, გადახდილი მომსახურების ღირებულების 25%-მდე ოდენობით, შემსყიდველთან წინასწარი შეთანხმებით</p></blockquote>
							
						</div>						
					</div>	
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="section-block-bg" style="background-image: url('front/img/bg/bg13.jpg')" id="team">
		<div class="container">
			<div class="section-heading center-holder">				
				<h3>ჩვენი გუნდი</h3>
				<div class="section-heading-line"></div>
				<p>ჩვენ ვართ შედეგებზე ორიენტირებული გუნდი. ჩვენი მიზანია ვიყოთ თქვენი პარტნიორები და მოგიტანოთ სარგებელი</br> ყოველი კონკრეტული შესყიდვისას საუკეთესო გადაწყვეტილებების შემოთავაზებით. </p>
				<span>Procurements Solutions = Right Solutions</span>
			</div>
			<div class="row mt-50">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="team-box">
						<div class="team-img"><img alt="img" src="front/img/team/team1.jpg"></div>
						<div class="team-info">							
							<h4>გივი ლომიძე</h4>
							<p>შესყიდვების სპეციალისტი/ მმართველი პარტნიორი</p>
						</div>
						<div class="team-social-icons">
							<ul>
								<li>
									<a href="https://www.linkedin.com/in/givilomidze/" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="team-box">
						<div class="team-img"><img alt="img" src="front/img/team/team2.jpg"></div>
						<div class="team-info">
							<h4>ლაშა ლოლაძე</h4>
							<p>საგადასახადო აუდიტორი/ დირექტორი</p>
						</div>						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="team-box">
						<div class="team-img"><img alt="img" src="front/img/team/team3.jpg"></div>
						<div class="team-info">							
							<h4>ზუკა თუშიშვილი</h4>
							<p>ლოჯისტიკის სპეციალისტი/ მოწვეული სპეციალისტი</p>
						</div>						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="team-box">
						<div class="team-img"><img alt="img" src="front/img/team/team4.jpg"></div>
						<div class="team-info">							
							<h4>ლევან გაგუა</h4>
							<p>შესყიდვების სპეციალისტი/ მოწვეული სპეციალისტი</p>
						</div>
						<div class="team-social-icons">
							<ul>
								<li>
									<a href="https://www.linkedin.com/in/levan-gagua-662a1a95/" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="contact" class="section-block ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-7 col-sm-7 col-12 ">
                    <div class="section-heading mt-15 ">
                        <h4>გაქვთ შეკითხვა?</h4>
						<div class="section-heading-line-left "></div>
						<div class="title-box-2">
							@if (count($errors) > 0)
							  <div class="alert alert-danger">
							   <button type="button" class="close" data-dismiss="alert">×</button>
							   <ul>
								@foreach ($errors->all() as $error)
								 <li>{{ $error }}</li>
								@endforeach
							   </ul>
							  </div>
							 @endif
							 @if ($message = Session::get('success'))
							 <div class="alert alert-success alert-block">
							  <button type="button" class="close" data-dismiss="alert">×</button>
									 <strong>{{ $message }}</strong>
							 </div>
							 @endif

						  </div>
                    </div>
                    <div class="contact-form-box mt-30 ">
                        <form class="contact-form "  method="post" action="{{url('sendmessage')}}">
							{{ csrf_field() }}

                            <div class="row ">
                                <div class="col-md-12 ">
                                    <input name="title" placeholder="წერილის სათაური " type="text ">
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 ">
                                    <input name="name" placeholder="სახელი " type="text ">
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 ">
                                    <input name="email" placeholder="ელ-ფოსტა " type="email ">
                                </div>
                                <div class="col-md-12 ">
                                    <textarea name="message" placeholder="ტექსტი "></textarea>
                                </div>
                                <div class="col-md-12 mb-30 ">
                                    <div class="center-holder ">
                                        <button  type="submit" name="send"  value="Send" >გაგზავნა</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-12 ">
                    <div class="contact-info-box ">
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 col-12 ">
                                <div class="contact-info-section ">
                                    <div class="row for-d-inline">
                                        <div class="col-md-4 col-sm-4 col-4 center-holder ">
                                            <i class="fa fa-phone "></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-8 ">
                                            <h4>დაგვიკავშირდით</h4>
                                            <p><a href="tel:+995599340740">(+995) 599 340 740</a></p>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 ">
                                <div class="contact-info-section ">
                                    <div class="row ">
                                        <div class="col-md-4 col-sm-4 col-4 center-holder ">
                                            <i class="fa fa-envelope-open "></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-8 ">
                                            <h4>მოგვწერეთ</h4>
                                            <p><a href="mailto:g.lomidze@procurements.ge">g.lomidze@procurements.ge</a></p>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 ">
                                <div class="contact-info-section ">
                                    <div class="row ">
                                        <div class="col-md-4 col-sm-4 col-4 center-holder ">
                                            <i class="fa fa-globe "></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-8 ">
                                            <h4>გამოგვყევით</h4>
                                            <p><a href="https://www.facebook.com/ProcurementSolutionsGeorgia" target="_blank ">Facebook</a></p>
                                            <p><a href="https://www.linkedin.com/company/procurement-solutions-%E2%80%A2-%E1%83%9E%E1%83%A0%E1%83%9D%E1%83%A5%E1%83%A3%E1%83%A0%E1%83%9B%E1%83%94%E1%83%9C%E1%83%A2-%E1%83%A1%E1%83%9D%E1%83%9A%E1%83%A3%E1%83%A8%E1%83%94%E1%83%9C%E1%83%A1/" target="_blank ">Linkedin</a></p>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 ">
                                <div class="contact-info-section ">
                                    <div class="row ">
                                        <div class="col-md-4 col-sm-4 col-4 center-holder ">
                                            <i class="fa fa-clock-o "></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-8 ">
                                            <h4>სამუშაო საათები</h4>
                                            <p>ორშ-პარ 09:00 - 18:00</p>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container ">
            <div class="footer-bar ">
                <p><a href="http://greencat.agency/ " target="_blank "><span class="primary-color ">Green Cat Agency</span></a> © 2020. ქოფირაითი დაცულია. </p>
            </div>
        </div>
    </footer>
	
	
	<a class="scroll-to-top" href="#"><i aria-hidden="true" class="fa fa-angle-up"></i></a>
	<script src="{{asset('front\js\jquery.min.js')}}">
	</script>
	<script src="{{asset('front\js\popper.min.js')}}">
	</script>
	<script src="{{asset('front\js\popper.min.js')}}">
	</script>
	<script src="{{asset('front\js\bootstrap.min.js')}}">
	</script>
	<script src="{{asset('front\js\owl.carousel.js')}}">
	</script>
	<script src="{{asset('front\js\navigation.js')}}">
	</script>
	<script src="{{asset('front\js\navigation.fixed.js')}}">
	</script>
	<script src="{{asset('front\js\wow.min.js')}}">
	</script>
	<script src="{{asset('front\js\jquery.counterup.min.js')}}">
	</script>
	<script src="{{asset('front\js\waypoints.min.js')}}">
	</script>
	<script src="{{asset('front\js\tabs.min.js')}}">
	</script>
	<script src="{{asset('front\js\jquery.mb.YTPlayer.min.js')}}">
	</script>
	<script src="{{asset('front\js\swiper.min.js')}}">
	</script>
	<script src="{{asset('front\js\isotope.pkgd.min.js')}}">
	</script>
	<script src="{{asset('front\js\switcher.js')}}">
	</script>
	<script src="{{asset('front\js\modernizr.js')}}">
	</script>
	<script src="{{asset('front\js\map.js')}}">
	</script>
	<script src="{{asset('front\js\main.js')}}">
	</script>
	
	<script src="{{asset('front\js\bs.js')}}"></script>
	<script src="{{asset('front\js\scroll.js')}}"></script>
</body>


</html>
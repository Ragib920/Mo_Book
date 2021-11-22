@extends('web_layouts.app')
@section('title','Mo Book | online event management ')

@section('content')

 <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1> <span id="js-rotating">TEMPLATE, SERVICES, SOLUTIONS</span></h1>
                            <p class="p-heading p-large">Aria is a top consultancy company specializing in business growth using online marketing and conversion optimization tactics</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>We Offer Some Of The Best Business Growth Services In Town</h2>
                        <p>Launching a new company or developing the market position of an existing one can be quite an overwhelming processs at times.</p>
                        <p class="testimonial-text">"Our mission here at Aira is to get you through those tough moments relying on our team's expertise in starting and growing companies."</p>
                        <div class="testimonial-author">Louise Donovan - CEO</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="web_frontend/images/intro-office.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div  id="services" class="cards-1">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 ">
                    <div class="section-title text-center">SERVICES</div>
                    <h2 class="text-center">Choose The Service Package<br> That Suits Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Environment Analysis</h4>
                            <p>The starting point of any success story is knowing your current position in the business environment</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Development Planning</h4>
                            <p>After completing the environmental analysis the next stage is to design and  plan your development strategy</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Execution & Evaluation</h4>
                            <p>In this phase you will focus on executing the actions plan and evaluating the results after each marketing campaign</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Projects -->
	<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">PROJECTS</div>
                    <h2>Projects That We're Proud Of</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->


             <div class="row">
                <div class="col-lg-12">
                    <div class="button-group filters-button-group d-flex justify-content-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class=" button" style="text-decoration: none" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="button" style="text-decoration: none" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="button" style="text-decoration: none" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        {{-- Home  --}}
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-1.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Off The Ground Off The Ground</h3>
                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Environment and competition</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Designing the marketing plan</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$199</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-2.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Accelerated Growth</h3>
                                                <p>Use this service pack to give your company the necessary impulse to become an industry leader</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Business strategy planning</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Taking the planned actions</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$299</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-3.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Market Domination</h3>
                                                <p>You already are a reference point in your industry now you need to learn about acquisitions</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Maintaining the leader status</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Acquisitions the right way</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$299</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of cards-2 -->
                            <!-- end of services -->
                        </div>
                        {{-- Profile  --}}
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-1.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Off The Ground Off The Ground</h3>
                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Environment and competition</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Designing the marketing plan</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$199</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-2.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Accelerated Growth</h3>
                                                <p>Use this service pack to give your company the necessary impulse to become an industry leader</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Business strategy planning</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Taking the planned actions</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$299</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-3.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Market Domination</h3>
                                                <p>You already are a reference point in your industry now you need to learn about acquisitions</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Maintaining the leader status</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Acquisitions the right way</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$299</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of cards-2 -->
                            <!-- end of services -->
                        </div>
                        {{-- Contact  --}}
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-1.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Off The Ground Off The Ground</h3>
                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Environment and competition</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Designing the marketing plan</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$199</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-2.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Accelerated Growth</h3>
                                                <p>Use this service pack to give your company the necessary impulse to become an industry leader</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Business strategy planning</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Taking the planned actions</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$299</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->

                                        <!-- Card -->
                                        <div class="card">
                                            <div class="card-image">
                                                <img class="img-fluid" src="web_frontend/images/services-3.jpg" alt="alternative">
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">Market Domination</h3>
                                                <p>You already are a reference point in your industry now you need to learn about acquisitions</p>
                                                <ul class="list-unstyled li-space-lg">
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Maintaining the leader status</div>
                                                    </li>
                                                    <li class="media">
                                                        <i class="fas fa-square"></i>
                                                        <div class="media-body">Acquisitions the right way</div>
                                                    </li>
                                                </ul>
                                                <p class="price">Starting at <span>$299</span></p>
                                            </div>
                                            <div class="button-container">
                                                <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a>
                                            </div> <!-- end of button-container -->
                                        </div>
                                        <!-- end of card -->
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of cards-2 -->
                            <!-- end of services -->
                        </div>
                    </div>
                </div>
            </div>



		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Online Banking</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic Industry</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-3.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BoomBap Audio</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-4.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Van Moose</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="web_frontend/images/project-8.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->


    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="web_frontend/images/about.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We're Passionate About Delivering Growth Services</h2>
                        <p>Our goal is to provide the right business growth services at the appropriate time so companies can benefit from the created momentum and thrive for a long period of time</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend has direct positive impact</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will become an important partner of our company</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="231">1</div>
                                <div class="counter-info">Happy<br>Users</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="121">1</div>
                                <div class="counter-info">Issues<br>Solved</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="159">1</div>
                                <div class="counter-info">Good<br>Reviews</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>22nd Innovative Street, San Francisco, CA 94043, US</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 126</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 128</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">office@aria.com</a></li>
                        </ul>
                        <h3>Follow Aria On Social Media</h3>

                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

@endsection

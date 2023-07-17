<section class="main-slider">
    <div class="banner-carousel">
        <!-- Swiper -->
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                <div class="auto-container">
                    <div class="content clearfix">
                        <div class="title">Welcome our Medical Care Center</div>
                        <h2>Take Care of Your Health</h2>
                        <div class="text">We're always available for our Patients with emergent problems. You
                            can easily reach us 24/7 via the phone number below:</div>
                        <div class="btn-box clearfix">
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Our
                                    Services</span></a>
                            <a href="contact.html" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>555–123–2323</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <div class="title">Welcome our Medical Care Center</div>
                        <h2>Take Care of Your Health</h2>
                        <div class="text">We're always available for our Patients with emergent problems. You
                            can easily reach us 24/7 via the phone number below:</div>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Our
                                    Services</span></a>
                            <a href="contact.html" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>555–123–2323</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <div class="title">Welcome our Medical Care Center</div>
                        <h2>Take Care of Your Health</h2>
                        <div class="text">We're always available for our Patients with emergent problems. You
                            can easily reach us 24/7 via the phone number below:</div>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Our
                                    Services</span></a>
                            <a href="contact.html" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>555–123–2323</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- End Main Slider -->



<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Latest News & Articals</h2>
            <div class="separator style-three"></div>
        </div>
        <div class="row clearfix">

            <!-- News Block -->
            @foreach($posts as $post)
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <div class="category">Artical</div>
                        <a href="blog-detail.html"><img src="{{ $post->image_url }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">{{ $post->content }}</a></li>
                            <li><a href="#">{{ $post->created_at }}</a></li>
                         
                        </ul>
                        <h3><a href="#">{{ $post->title }}</a></h3>
                        <div class="text">{{ $post->category_id }}</div>
                        <a href="{{$post->url}}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    {{ $posts->links('layouts.main') }}
</section>
<!-- End News Section -->

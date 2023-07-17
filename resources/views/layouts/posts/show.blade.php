@extends('layouts.front')

@section('body')
<div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>


            <!--Sidebar Page Container-->
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->

                        <div class="content-side col-lg-8 col-md-12 col-sm-12">

                                <div class="news-detail">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{$post->image_url}}" alt="" />
                                        </div>
                                        <div class="lower-content">
                                            <div class="content">
                                            
                                                <ul class="post-meta">
                                                    <li>{{$post->created_at}}</li>
                                                    <li>Post By: {{$post->user->name}}</li>
                                                </ul>
                                                <h3>{{$post->title}}</h3>
                                                <div class="text">
                                                    <p>{{$post->excerpt}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            <!-- Comment Form -->
                            <div class="comment-form">

                                <div class="group-title">
                                    <h2>Leave a Reply</h2>
                                </div>

                                <!-- Comment Form -->
                                <div class="comment-form">
                                    <!-- Comment Form -->
                                    <form method="post" action="blog.html">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Full Name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="subject" placeholder="Subject" required>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn comment-btn" type="submit" name="submit-form">Post
                                                    Comments</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                                <!--End Faq Form -->

                            </div>



                        </div>

                        <!--Sidebar Side-->
                        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                            <aside class="sidebar">
                                <!--Category Blog-->
                                <div class="sidebar-widget categories-blog">
                                    <div class="sidebar-title">
                                        <h2>Best Categories</h2>
                                        <div class="separator"></div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Body Surgery <span>05</span></a></li>
                                        <li><a href="#">Dental Care <span>12</span></a></li>
                                        <li><a href="#">Eye Care <span>35</span></a></li>
                                        <li><a href="#">Blood Cancer <span>25</span></a></li>
                                        <li><a href="#">Neurology Sargery <span>65</span></a></li>
                                        <li><a href="#">Health Care <span>12</span></a></li>
                                    </ul>
                                </div>

                            </aside>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                                    required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>

                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Logistics</a></li>
                        <li><a href="#">Freedom</a></li>
                    </ul>

                </div>

            </div>
        </div>

        <!-- Color Palate / Color Switcher -->
        <div class="color-palate">
            <div class="color-trigger">
                <i class="fas fa-cog"></i>
            </div>
            <div class="color-palate-head">
                <h6>Choose Your Color</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                    <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                    <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                    <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                    <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                    <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                    <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                    <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
                </div>
            </div>

            <ul class="rtl-version option-box">
                <li class="rtl">RTL Version</li>
                <li>LTR Version</li>
            </ul>

            <a href="#" class="purchase-btn">Purchase now $17</a>

            <div class="palate-foo">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used only for
                    demonstation purposes.</span>
            </div>

        </div>
@endsection

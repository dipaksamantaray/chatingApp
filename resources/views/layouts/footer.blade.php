{{-- <section class="theme-bg call_action_wrap-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call_action_wrap">
                    <div class="call_action_wrap-head">
                        <h3>Do You Have Questions ?</h3>
                        <span>We'll help you to grow your career and growth.</span>
                    </div>
                    <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- ============================ Call To Action End ================================== -->

<!-- ============================ Footer Start ================================== -->
<style>
    .cbtn {
        position: fixed;
        bottom: 0px;
        right: 0px;
        background-color: aqua;
        border-radius: 50px;
        width: 10%;
        height: 5%;
        border: none
    }
</style>
<footer class="dark-footer skin-dark-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5">
                    <div class="footer_widget">
                        {{-- <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" /> --}}
                        <h2 style="color:red">TRADE LINE</h2>
                        <h4 class="extream mb-3">Do you need help with<br>anything?</h4>
                        <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every
                            month</p>
                        <div class="foot-news-last">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button type="button"
                                        class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 ml-auto">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">Layouts</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Home Page</a></li>
                                    <li><a href="#">About Page</a></li>
                                    <li><a href="#">Service Page</a></li>
                                    <li><a href="#">Property Page</a></li>
                                    <li><a href="#">Contact Page</a></li>
                                    <li><a href="#">Single Blog</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">All Sections</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Headers<span class="new">New</span></a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Attractive<span class="new">New</span></a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Footers</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Changelog<span class="update">Update</span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">© <?php $year = date('Y');
                    echo $year; ?> Trade Line.</p>
                </div>
            </div>
        </div>
    </div>
    <a class=" btn cbtn" href="{{ url('chart/create') }}">Chat
        Here</a>

</footer>

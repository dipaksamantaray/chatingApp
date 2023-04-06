<div class="header header-light head-shadow">
    <div class="container">
        @php
        $userprofile=App\User::where('id',Auth::user()->id)->first();
        @endphp
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    {{-- <img src="assets/img/logo.png" class="logo" alt="" /> --}}
                    <h2>Trade Line🤖</h2>

                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
                                <span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu">

                    <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="home-2.html">Home 2</a></li>
                            <li><a href="home-3.html">Home 3</a></li>
                            <li><a href="home-4.html">Home 4</a></li>
                            <li><a href="home-5.html">Home 5</a></li>
                            <li><a href="home-6.html">Home 6</a></li>
                            <li><a href="home-7.html">Home 7</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Courses<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="#">Search Courses in Grid<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="grid-layout-with-sidebar.html">Grid Layout Style 1</a></li>
                                    <li><a href="grid-layout-with-sidebar-2.html">Grid Layout Style 2</a></li>
                                    <li><a href="grid-layout-with-sidebar-3.html">Grid Layout Style 3</a></li>
                                    <li><a href="grid-layout-with-sidebar-4.html">Grid Layout Style 4</a></li>
                                    <li><a href="grid-layout-with-sidebar-5.html">Grid Layout Style 5</a></li>
                                    <li><a href="grid-layout-full.html">Grid Full Width</a></li>
                                    <li><a href="grid-layout-full-2.html">Grid Full Width 2</a></li>
                                    <li><a href="grid-layout-full-3.html">Grid Full Width 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Search Courses in List<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="list-layout-with-sidebar.html">List Layout Style 1</a></li>
                                    <li><a href="list-layout-with-full.html">List Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Courses Detail<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="course-detail.html">Course Detail 01</a></li>
                                    <li><a href="course-detail-2.html">Course Detail 02</a></li>
                                    <li><a href="course-detail-3.html">Course Detail 03</a></li>
                                    <li><a href="course-detail-4.html">Course Detail 04</a></li>
                                </ul>
                            </li>

                            <li><a href="explore-category.html">Explore Category</a></li>
                            <li><a href="find-instructor.html">Find Instructor</a></li>
                            <li><a href="instructor-detail.html">Instructor Detail</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Pages<span class="submenu-indicator"></span></a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="#">Shop Pages<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="shop-with-sidebar.html">Shop Sidebar Left</a></li>
                                    <li><a href="shop-with-right-sidebar.html">Shop Sidebar Right</a></li>
                                    <li><a href="list-shop-with-sidebar.html">Shop List Style</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="product-detail.html">Product Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Say Hello</a></li>
                            <li><a href="blogs.html">Blog Style</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="component.html">Elements</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="forgot.html">Forgot</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('order/create') }}">Order Form</a></li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">

                    <li class="active">
                        <a href="#">
                            {{ Auth::user()->name }}<span class="submenu-indicator"></span>
                        </a>
                        <ul class="nav-dropdown nav-submenu">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-{{Auth::user()->id}}">Account Management</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#password">Password ManageMent</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>

                    {{-- <li class="add-listing theme-bg">
                        <a href="signup.html" class="text-white">Get Started</a>
                    </li> --}}
                </ul>
            </div>



            <!-- User profile Modal -->
            <div class="modal fade" id="exampleModal-{{Auth::user()->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Profile Update</h5>
                        </div>
                        <form action="{{url('/update-profile')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <input type="hidden" value="{{$userprofile->id}}" name="profileid">
                                <label for="">Name</label>
                                <input type="text" value="{{$userprofile->name}}" name="name" class="form-control">
                                <label for="">Email</label>
                                <input type="text" value="{{$userprofile->email}}" name="email" class="form-control">
                                <label for="">Mobile</label>
                                <input type="text" value="{{$userprofile->mobile}}" name="mobile" class="form-control">
                                <label for="">Address</label>
                                <input type="text" value="{{$userprofile->address}}" name="address" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!--  Password Modal -->
            
            <div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class=" bg-drak" >
                            
                        </div>
                        <form action="{{url('/change-password',$userprofile->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body ">
                                <div class="container-fluid">
                                    
                                     
                                   <h3><strong class="text-warning">Change Password</strong></h3>



                                        <div class="mb-3">
                                            <label for="new_password" class="form-label ">New Password</label>
                                            <input type="password"  class="form-control @error('password') is-invalid @enderror" id="password" id="new_password" name="password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="mb-3">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password"  class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" name="confirm_password">

                                                @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>

                                   
                                </div>

                            </div>
                            <div class="modal-footer " >
                                <button type="button" id="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </nav>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        @error('password')
        $('#password').modal('show');
        @enderror

        @error('confirm_password')
        $('#password').modal('show');
        @enderror
       
     

    });
</script>
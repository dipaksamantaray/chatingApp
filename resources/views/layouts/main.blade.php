<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Trade Line</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    {{-- for  boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    {{-- edn boostrap --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        @include('layouts.header')
        <!-- End Navigation -->
        <div class="clearfix"></div>

        <div class="mt-5">
            @yield('content')

        </div>

        @include('layouts.footer')
        <!-- ============================ Footer End ================================== -->



        <!-- Log In Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-xl login-pop-form" role="document">
                <div class="modal-content overli" id="loginmodal">
                    <div class="modal-header">
                        <h5 class="modal-title">Login Your Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <form>

                                <div class="form-group">
                                    <label>User Name</label>
                                    <div class="input-with-icon">
                                        <input type="text" class="form-control" placeholder="User or email">
                                        <i class="ti-user"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-with-icon">
                                        <input type="password" class="form-control" placeholder="*******">
                                        <i class="ti-unlock"></i>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-xl-4 col-lg-4 col-4">
                                        <input id="admin" class="checkbox-custom" name="admin" type="checkbox">
                                        <label for="admin" class="checkbox-custom-label">Admin</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4">
                                        <input id="student" class="checkbox-custom" name="student" type="checkbox"
                                            checked>
                                        <label for="student" class="checkbox-custom-label">Student</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-4">
                                        <input id="instructor" class="checkbox-custom" name="instructor"
                                            type="checkbox">
                                        <label for="instructor" class="checkbox-custom-label">Tutors</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-md full-width theme-bg text-white">Login</button>
                                </div>

                                <div class="rcs_log_125 pt-2 pb-3">
                                    <span>Or Login with Social Info</span>
                                </div>
                                <div class="rcs_log_126 full">
                                    <ul class="social_log_45 row">
                                        <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);"
                                                class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
                                        <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);"
                                                class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
                                        <li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);"
                                                class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
                                    </ul>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="crs_log__footer d-flex justify-content-between mt-0">
                        <div class="fhg_45">
                            <p class="musrt">Don't have account? <a href="signup.html" class="theme-cl">SignUp</a>
                            </p>
                        </div>
                        <div class="fhg_45">
                            <p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    {{-- for bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- end boostrap --}}
    @yield('script')


</body>

</html>

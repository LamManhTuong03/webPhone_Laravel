<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 07:11:00 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ef9e733f3a.js" crossorigin="anonymous"></script>

    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/ratio.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/remixicon.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/vector-map.css')}}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendors/slick.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
</head>

<body>

<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="">
                        <img class="img-fluid main-logo" src="{{asset('admin/assets/images/logo/1.png')}}" alt="logo">
                        <img class="img-fluid white-logo" src="{{asset('admin/assets/images/logo/1-white.png')}}" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="{{route('route_admin_index')}}}">
                        <img src="{{asset('admin/assets/images/logo/1.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="mode">
                            <i class="fa-solid fa-moon"></i>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="{{asset('admin/assets/images/users/4.jpg')}}" alt="">
                            <div class="user-name-hide media-body">
                                @php $user = \App\Models\Admin\User::find(\Illuminate\Support\Facades\Auth::user()->id) @endphp
                                <span>{{$user->name}}</span>
                                <p class="mb-0 font-roboto">
                                    {{$user->role == 1 ? "Admin" : ""}}
                                    <i class="fa-solid fa-user-tie"></i>
                                </p>

                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="{{route('route_admin_editUsers',['id'=>\Illuminate\Support\Facades\Auth::user()->id])}}">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Settings</span>
                                </a>
                            </li>

{{--                        Logout here--}}
                            <li>
                                <a onclick="return confirm('Are you sure you want to log out?')" href="{{route('route_admin_logout')}}">
                                    <i data-feather="log-out"></i>
                                    <span>Log out</span>
                                </a>
                            </li>
{{--                        End logout--}}

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="{{route('route_admin_index')}}" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="{{asset('admin/assets/images/logo/full-white.png')}}" alt="logo">
                    </a>
                </div>

                <div class="logo-icon-wrapper">
                    <a href="{{route('route_admin_index')}}">
                        <img class="img-fluid main-logo main-white" src="{{asset('admin/assets/images/logo/logo.png')}}" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="{{asset('admin/assets/images/logo/logo-white.png')}}" alt="logo">
                    </a>
                </div>

                <nav class="sidebar-main">
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('route_admin_index')}}">
                                    <i class="fa-solid fa-database"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-brands fa-product-hunt"></i>
                                    <span>Product</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_products')}}">Prodcts</a>
                                    </li>

                                    <li>
                                        <a href="{{route('route_admin_addProducts')}}">Add New Products</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <span>Category</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_categories')}}">Category List</a>
                                    </li>

                                    <li>
                                        <a href="{{route('route_admin_addCategories')}}">Add New Category</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-photo-film"></i>
                                    <span>Banner</span>
                                </a>

                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_banners')}}">Banner</a>
                                    </li>

                                    <li>
                                        <a href="{{route('route_admin_addBanners')}}">Add Banner</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-mattress-pillow"></i>
                                    <span>Attributes</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_attributes')}}">Attributes</a>
                                    </li>

                                    <li>
                                        <a href="{{route('route_admin_addAttributes')}}">Add Attributes</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-mattress-pillow"></i>
                                    <span>ProductsAttributes</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_productsAttributes')}}">ProductsAttributes</a>
                                    </li>

                                    <li>
                                        <a href="{{route('route_admin_addProductsAttributes')}}">Add ProductsAttributes</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-users"></i>
                                    <span>Users</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_users')}}">All users</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-photo-film"></i>
                                    <span>Orders</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_order')}}">Order List</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('route_admin_review')}}">
                                    <i class="fa-solid fa-comment-dots"></i>
                                    <span>Product Review</span>
                                </a>
                            </li>

{{--                            <li class="sidebar-list">--}}
{{--                                <a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">--}}
{{--                                    <i class="fa-solid fa-headset"></i>--}}
{{--                                    <span>Support Ticket</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Settings</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{route('route_admin_editUsers',['id'=>\Illuminate\Support\Facades\Auth::user()->id])}}">Profile Setting</a>
                                    </li>
                                </ul>
                            </li>

{{--                            <li class="sidebar-list">--}}
{{--                                <a class="sidebar-link sidebar-title link-nav" href="reports.html">--}}
{{--                                    <i class="ri-file-chart-line"></i>--}}
{{--                                    <span>Reports</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li class="sidebar-list">--}}
{{--                                <a class="sidebar-link sidebar-title link-nav" href="list-page.html">--}}
{{--                                    <i class="ri-list-check"></i>--}}
{{--                                    <span>List Page</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>

{{--                    <div class="right-arrow" id="right-arrow">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </div>--}}
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->


{{--    Content here--}}
        <div>
            <div style="margin-left: 300px; margin-top: 100px">
                @include('templates.error')
            </div>

            @yield("content")


        </div>
{{--    end content--}}

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer En -->

    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                <p>Are you sure you want to log out?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="{{asset('admin/assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js -->
<script src="{{asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- scrollbar simplebar js -->
<script src="{{asset('admin/assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('admin/assets/js/scrollbar/custom.js')}}"></script>

<!-- Sidebar jquery -->
<script src="{{asset('admin/assets/js/config.js')}}"></script>

<!-- tooltip init js -->
<script src="{{asset('admin/assets/js/tooltip-init.js')}}"></script>

<!-- Plugins JS -->
<script src="{{asset('admin/assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('admin/assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('admin/assets/js/notify/index.js')}}"></script>

<!-- Apexchar js -->
<script src="{{asset('admin/assets/js/chart/apex-chart/apex-chart1.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('admin/assets/js/chart/apex-chart/chart-custom1.js')}}"></script>


<!-- slick slider js -->
<script src="{{asset('admin/assets/js/slick.min.js')}}"></script>
<script src="{{asset('admin/assets/js/custom-slick.js')}}"></script>

<!-- customizer js -->
<script src="{{asset('admin/assets/js/customizer.js')}}"></script>

<!-- ratio js -->
<script src="{{asset('admin/assets/js/ratio.js')}}"></script>

<!-- sidebar effect -->
<script src="{{asset('admin/assets/js/sidebareffect.js')}}"></script>

<!-- Theme js -->
<script src="{{asset('admin/assets/js/script.js')}}"></script>


<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('libs/input-mask/jquery.input-mask.js')}}"></script>
@yield('script')

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 07:11:18 GMT -->
</html>

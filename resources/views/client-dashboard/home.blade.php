@extends('layouts.metronic-theme')
@section('content')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="../../demo1/dist/index.html">
                    <img alt="Logo" src="assets/media/logos/logo-1-dark.svg" class="h-25px logo" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside toggler-->
                <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                    <span class="svg-icon svg-icon-1 rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
                            <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside toggler-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        
                          
                            
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/index.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Home</span>
                                    </a>
                                </div>
                    
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->
           
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="../../demo1/dist/index.html" class="d-lg-none">
                            <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <!--begin::Menu wrapper-->
                            <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                <!--begin::Menu-->
                                <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                    






                                    
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::Search-->
                            
                            
                            
                            <!--begin::User menu-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="assets/media/avatars/300-1.jpg" alt="user" />
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->firstname.' '.Auth::user()->lastname}}
                                                {{-- <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span> --}}
                                            
                                            </div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <div class="menu-item px-5 my-1">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn menu-link px-5">Sign Out</button>
                                        </form>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                   
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    {{-- <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../../demo1/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">Notifications</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div> --}}
                                    <!--end::Menu item-->
                                    
                                    
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                            <!--begin::Header menu toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
                                            <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Toolbar-->
                <div class="toolbar" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                            <!--begin::Title-->
                            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Secondary button-->
                            
                            <!--end::Secondary button-->
                            <!--begin::Primary button-->
                            <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-primary">Add New Led</a>
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-xl-10">
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                                <!--begin::Card widget 4-->
                                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Currency-->
                                                <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                                <!--end::Currency-->
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">69,700</span>
                                                <!--end::Amount-->
                                                <!--begin::Badge-->
                                                <span class="badge badge-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%</span>
                                                <!--end::Badge-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">Expected Earnings</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                        <!--begin::Chart-->
                                        <div class="d-flex flex-center me-5 pt-2">
                                            <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Labels-->
                                        <div class="d-flex flex-column content-justify-center w-100">
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-bold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
                                                <!--end::Label-->
                                                <!--begin::Stats-->
                                                <div class="fw-boldest text-gray-700 text-xxl-end">$7,660</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-bold align-items-center my-3">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
                                                <!--end::Label-->
                                                <!--begin::Stats-->
                                                <div class="fw-boldest text-gray-700 text-xxl-end">$2,820</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-bold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                                <!--end::Label-->
                                                <!--begin::Stats-->
                                                <div class="fw-boldest text-gray-700 text-xxl-end">$45,257</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Labels-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 4-->
                                <!--begin::Card widget 5-->
                                <div class="card card-flush h-md-50 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">1,836</span>
                                                <!--end::Amount-->
                                                <!--begin::Badge-->
                                                <span class="badge badge-danger fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%</span>
                                                <!--end::Badge-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">Orders This Month</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end pt-0">
                                        <!--begin::Progress-->
                                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                <span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
                                                <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                            </div>
                                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                                <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 5-->
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                                <!--begin::Card widget 6-->
                                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Currency-->
                                                <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                                <!--end::Currency-->
                                                <!--begin::Amount-->
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">2,420</span>
                                                <!--end::Amount-->
                                                <!--begin::Badge-->
                                                <span class="badge badge-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6%</span>
                                                <!--end::Badge-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">Average Daily Sales</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end px-0 pb-0">
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 6-->
                                <!--begin::Card widget 7-->
                                <div class="card card-flush h-md-50 mb-xl-10">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5">
                                        <!--begin::Title-->
                                        <div class="card-title d-flex flex-column">
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">6.3k</span>
                                            <!--end::Amount-->
                                            <!--begin::Subtitle-->
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                                        <!--begin::Title-->
                                        <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
                                        <!--end::Title-->
                                        <!--begin::Users group-->
                                        <div class="symbol-group symbol-hover flex-nowrap">
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
                                            </a>
                                        </div>
                                        <!--end::Users group-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card widget 7-->
                            </div>
                            <!--begin::Col-->
                            <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                                <!--begin::Chart widget 3-->
                                <div class="card card-flush overflow-hidden h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header py-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Sales This Months</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                        <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                        <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                        <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                        <!--begin::Statistics-->
                                        <div class="px-9 mb-5">
                                            <!--begin::Statistics-->
                                            <div class="d-flex mb-2">
                                                <span class="fs-4 fw-bold text-gray-400 me-1">$</span>
                                                <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">14,094</span>
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-bold text-gray-400">Another $48,346 to Goal</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 3-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-xl-10">
                                <!--begin::Tables widget 2-->
                                <div class="card h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header align-items-center border-0">
                                        <!--begin::Title-->
                                        <h3 class="fw-bolder text-gray-900 m-0">Recent Orders</h3>
                                        <!--end::Title-->
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Nav-->
                                        <ul class="nav nav-pills nav-pills-custom mb-3">
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon">
                                                        <img alt="" src="assets/media/svg/products-categories/t-shirt.svg" class="" />
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">T-shirt</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon">
                                                        <img alt="" src="assets/media/svg/products-categories/gaming.svg" class="" />
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">Gaming</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon">
                                                        <img alt="" src="assets/media/svg/products-categories/watch.svg" class="" />
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Watch</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon">
                                                        <img alt="" src="assets/media/svg/products-categories/gloves.svg" class="nav-icon" />
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Gloves</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon">
                                                        <img alt="" src="assets/media/svg/products-categories/shoes.svg" class="nav-icon" />
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Shoes</span>
                                                    <!--end::Subtitle-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Nav-->
                                        <!--begin::Tab Content-->
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                                <th class="ps-0 w-50px">ITEM</th>
                                                                <th class="min-w-140px"></th>
                                                                <th class="text-end min-w-140px">QTY</th>
                                                                <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                                <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$72.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$126.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/215.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1321</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$45.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/209.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$84.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$168.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                                <th class="ps-0 w-50px">ITEM</th>
                                                                <th class="min-w-140px"></th>
                                                                <th class="text-end min-w-140px">QTY</th>
                                                                <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                                <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/197.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$32.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$312.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/178.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-3122</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$62.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/22.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1142</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$74.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$139.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                                <th class="ps-0 w-50px">ITEM</th>
                                                                <th class="min-w-140px"></th>
                                                                <th class="text-end min-w-140px">QTY</th>
                                                                <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                                <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/1.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1324</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$43.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$231.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/24.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-5314</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$71.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/71.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-4222</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$23.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$213.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                                <th class="ps-0 w-50px">ITEM</th>
                                                                <th class="min-w-140px"></th>
                                                                <th class="text-end min-w-140px">QTY</th>
                                                                <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                                <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/41.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 2635</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$65.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$163.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/63.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2745</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$73.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/59.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-5173</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$54.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$173.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                                <th class="ps-0 w-50px">ITEM</th>
                                                                <th class="min-w-140px"></th>
                                                                <th class="text-end min-w-140px">QTY</th>
                                                                <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                                <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/10.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2163</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$287.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/96.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2162</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$51.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <img src="assets/media/stock/ecommerce/13.gif" class="w-50px ms-n1" alt="" />
                                                                </td>
                                                                <td class="ps-0">
                                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1537</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$27.00</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span class="text-gray-800 fw-bolder d-block fs-6">$167.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end: Card Body-->
                                </div>
                                <!--end::Tables widget 2-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6 mb-5 mb-xl-10">
                                <!--begin::Chart widget 4-->
                                <div class="card card-flush overflow-hidden h-md-100">
                                    <!--begin::Header-->
                                    <div class="card-header py-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Discounted Product Sales</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                        <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                        <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                        <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                    <!--begin::Menu item-->
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                        <!--begin::Info-->
                                        <div class="px-9 mb-5">
                                            <!--begin::Statistics-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Currency-->
                                                <span class="fs-4 fw-bold text-gray-400 align-self-start me-1">$</span>
                                                <!--end::Currency-->
                                                <!--begin::Value-->
                                                <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">3,706</span>
                                                <!--end::Value-->
                                                <!--begin::Label-->
                                                <span class="badge badge-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->4.5%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-bold text-gray-400">Total Discounted Sales This Month</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4 mb-xl-10">
                                <!--begin::Engage widget 1-->
                                <div class="card h-md-100">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column flex-center">
                                        <!--begin::Heading-->
                                        <div class="mb-2">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
                                            <br />new
                                            <span class="fw-boldest">eCommerce App ?</span></h1>
                                            <!--end::Title-->
                                            <!--begin::Illustration-->
                                            <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12" style="background-image:url('assets/media/svg/illustrations/easy/2.svg')"></div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Links-->
                                        <div class="text-center">
                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-primary me-2" href="../../demo1/dist/apps/ecommerce/sales/listing.html">View App</a>
                                            <!--end::Link-->
                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">New Product</a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Links-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Engage widget 1-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-8 mb-5 mb-xl-10">
                                <!--begin::Table Widget 4-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Product Orders</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 57 orders per day</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Cateogry</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="a">Category A</option>
                                                        <option value="b">Category A</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="Shipped">Shipped</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Pending">Pending</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <div class="position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="text-end min-w-100px">Created</th>
                                                    <th class="text-end min-w-125px">Customer</th>
                                                    <th class="text-end min-w-100px">Total</th>
                                                    <th class="text-end min-w-100px">Profit</th>
                                                    <th class="text-end min-w-50px">Status</th>
                                                    <th class="text-end"></th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bolder text-gray-600">
                                                <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                                    <td colspan="2">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                                <img src="" data-kt-src-path="assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
                                                            </a>
                                                            <div class="d-flex flex-column text-muted">
                                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder" data-kt-table-widget-4="template_name">Product name</a>
                                                                <div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7">Cost</div>
                                                        <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_cost">1</div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7">Qty</div>
                                                        <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_qty">1</div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7">Total</div>
                                                        <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_total">name</div>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="text-gray-800 fs-7 me-3">On hand</div>
                                                        <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_stock">32</div>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                                    </td>
                                                    <td class="text-end">7 min ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                                    </td>
                                                    <td class="text-end">$630.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$86.70</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                                    </td>
                                                    <td class="text-end">52 min ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                                    </td>
                                                    <td class="text-end">$25.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$4.20</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                                    </td>
                                                    <td class="text-end">1 hour ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                                    </td>
                                                    <td class="text-end">$1,630.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$203.90</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                                    </td>
                                                    <td class="text-end">3 hour ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                                    </td>
                                                    <td class="text-end">$119.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$12.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                                    </td>
                                                    <td class="text-end">2 day ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                                    </td>
                                                    <td class="text-end">$660.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$52.26</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                                    </td>
                                                    <td class="text-end">2 day ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                                    </td>
                                                    <td class="text-end">$290.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$29.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                                    </td>
                                                    <td class="text-end">7 min ago</td>
                                                    <td class="text-end">
                                                        <a href="" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                                    </td>
                                                    <td class="text-end">$590.00</td>
                                                    <td class="text-end">
                                                        <span class="text-gray-800 fw-bolder">$50.00</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                            <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4">
                                <!--begin::List widget 5-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Product Delivery</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">1M Products Shipped so far</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order Details</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Scroll-->
                                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                            <!--begin::Item-->
                                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Elephant 1802</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <!--begin::Menu-->
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Jason Bourne</a></span>
                                                    <!--end::Name-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success">Delivered</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/209.gif" class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <!--begin::Menu-->
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Marie Durant</a></span>
                                                    <!--end::Name-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-primary">Shipping</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/214.gif" class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Yellow Stone</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <!--begin::Menu-->
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Dan Wilson</a></span>
                                                    <!--end::Name-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger">Confirmed</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/211.gif" class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Elephant 1802</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <!--begin::Menu-->
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Lebron Wayde</a></span>
                                                    <!--end::Name-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success">Delivered</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/215.gif" class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <!--begin::Menu-->
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Ana Simmons</a></span>
                                                    <!--end::Name-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-primary">Shipping</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-stack mb-3">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-3">
                                                        <!--begin::Icon-->
                                                        <img src="assets/media/stock/ecommerce/192.gif" class="w-50px ms-n1 me-1" alt="" />
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Yellow Stone</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <!--begin::Menu-->
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <!--begin::Menu item-->
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Customer-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Name-->
                                                    <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Kevin Leonard</a></span>
                                                    <!--end::Name-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger">Confirmed</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Customer-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List widget 5-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-8">
                                <!--begin::Table Widget 5-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">Stock Report</span>
                                            <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Cateogry</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="a">Category A</option>
                                                        <option value="b">Category B</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bolder">
                                                    <!--begin::Label-->
                                                    <div class="text-muted fs-7 me-2">Status</div>
                                                    <!--end::Label-->
                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected="selected">Show All</option>
                                                        <option value="In Stock">In Stock</option>
                                                        <option value="Out of Stock">Out of Stock</option>
                                                        <option value="Low Stock">Low Stock</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Search-->
                                                <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Item</th>
                                                    <th class="text-end pe-3 min-w-100px">Product ID</th>
                                                    <th class="text-end pe-3 min-w-150px">Date Added</th>
                                                    <th class="text-end pe-3 min-w-100px">Price</th>
                                                    <th class="text-end pe-3 min-w-50px">Status</th>
                                                    <th class="text-end pe-0 min-w-25px">Qty</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bolder text-gray-600">
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Macbook Air M1</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XGY-356</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">02 Apr, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,230</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="58">
                                                        <span class="text-dark fw-bolder">58 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Surface Laptop 4</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#YHD-047</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">01 Apr, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="0">
                                                        <span class="text-dark fw-bolder">0 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Logitech MX 250</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#SRR-678</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">24 Mar, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$64</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="290">
                                                        <span class="text-dark fw-bolder">290 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">AudioEngine HD3</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#PXF-578</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">24 Mar, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="46">
                                                        <span class="text-dark fw-bolder">46 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">HP Hyper LTR</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#PXF-778</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">16 Jan, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$4500</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="78">
                                                        <span class="text-dark fw-bolder">78 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XGY-356</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">22 Dec, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="8">
                                                        <span class="text-dark fw-bolder">8 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                                <tr>
                                                    <!--begin::Item-->
                                                    <td>
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
                                                    </td>
                                                    <!--end::Item-->
                                                    <!--begin::Product ID-->
                                                    <td class="text-end">#XVR-425</td>
                                                    <!--end::Product ID-->
                                                    <!--begin::Date added-->
                                                    <td class="text-end">27 Dec, 2022</td>
                                                    <!--end::Date added-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">$1,060</td>
                                                    <!--end::Price-->
                                                    <!--begin::Status-->
                                                    <td class="text-end">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Qty-->
                                                    <td class="text-end" data-order="124">
                                                        <span class="text-dark fw-bolder">124 PCS</span>
                                                    </td>
                                                    <!--end::Qty-->
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 5-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1">2022©</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
                <!--begin::Timeline items-->
                <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
                                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting with customer</a>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">Application Design</span>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Progress-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">In Progress</span>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Action-->
                                    <a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project Delivery Preparation</a>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">CRM System Development</span>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Progress-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">Completed</span>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Action-->
                                    <a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="black" />
                                        <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::Timeline heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="black" />
                                        <path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                        <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">1.9mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">18kb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">20mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Task
                                <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
                                <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
                                        <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">New case
                                <a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="black" />
                                            <path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!</h4>
                                            <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                        <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                        <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">New order
                                <a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                </div>
                <!--end::Timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
            <span class="svg-icon svg-icon-3 svg-icon-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon--></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
                        <a href="https://keenthemes.com">Keenthemes.com</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->
                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-paperclip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-upload fs-3"></i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--end::Main-->
<!--begin::Engage drawers-->
<!--begin::Demos drawer-->
<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bolder text-gray-700">Explore</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Demos drawer-->
<!--begin::Help drawer-->

<!--end::Help drawer-->
<!--end::Engage drawers-->
<!--begin::Engage toolbar-->

<!--end::Engage toolbar-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>
                    <div class="text-muted fw-bold fs-5">If you need more info, please check
                    <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
                                            <div class="fw-bold opacity-50">Best for startups</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
                                            <div class="fw-bold opacity-50">Best for 100+ team size</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
                                            <span class="badge badge-light-success ms-2 fs-7">Most popular</span></h2>
                                            <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
                                            <div class="fw-bold opacity-50">Requet a custom license</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 10+ team size and new startup</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 100+ team size and grown company</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Browse Users</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                    <a href="#" class="link-primary fw-bolder">Users Directory</a>.</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mb-15">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Smith
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">smith@kpmg.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody Macy
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max Smith
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">max@kt.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean Bean
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian Cox
                                    <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela Collins
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">mik@pex.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis Mitcham
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia Wild
                                    <span class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil Owen
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan Wilson
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Bold
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana Crown
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-5">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert Doe
                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex justify-content-between">
                    <!--begin::Label-->
                    <div class="fw-bold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>
                    <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-bold mb-5">Recently searched:</h3>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                            <div class="fw-bold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                            <div class="fw-bold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                            <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-bold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                    <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                    <!--end::Heading-->
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                    <div class="fw-bold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                    <div class="fw-bold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                    <div class="fw-bold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                    <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                    <div class="fw-bold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                    <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                    <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-bold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection
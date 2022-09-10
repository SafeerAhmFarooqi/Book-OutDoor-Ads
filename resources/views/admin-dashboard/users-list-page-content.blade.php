<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        @include('common.validation')
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
                    </div>
                    <!--end::Search-->
                    <!--begin::Export buttons-->
                    <div id="kt_ecommerce_report_views_export" class="d-none"></div>
                    <!--end::Export buttons-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Daterangepicker-->
                    {{-- <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_views_daterangepicker" /> --}}
                    <!--end::Daterangepicker-->
                    <!--begin::Filter-->
                    {{-- <div class="w-150px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
                            <option></option>
                            <option value="all">All</option>
                            <option value="rating-5">5 Stars</option>
                            <option value="rating-4">4 Stars</option>
                            <option value="rating-3">3 Stars</option>
                            <option value="rating-2">2 Stars</option>
                            <option value="rating-1">1 Stars</option>
                        </select>
                        <!--end::Select2-->
                    </div> --}}

                    {{-- <div class="w-150px">
                        <!--begin::Select2-->
                        <a href="{{route('client.led.add')}}" class="btn btn-primary">Add New Led</a>
                        <!--end::Select2-->
                    </div> --}}
                    <!--end::Filter-->
                    <!--begin::Export dropdown-->
                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
                            <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
                            <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Export Report</button>
                    <!--begin::Menu-->
                    <div id="kt_ecommerce_report_views_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Export dropdown-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                           <th class="text-start min-w-40px">  Id</th>
                            <th class="min-w-450px">Name</th> 
                            <th class="text-start min-w-100px">Status</th>  
                            <th class="text-start min-w-100px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                        <!--begin::Table row-->
                        @foreach ($users as $user)
                        <tr>
                            <!--begin::Product=-->
                            <td class="text-start pe-0">
                                <span class="fw-bolder">{{$user->id}}</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin::Thumbnail-->
                                    <a href="{{route('client.led.edit',$user->id)}}" class="symbol symbol-50px">
                                        <span class="symbol-label" style="background-image:url();"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="{{route('client.led.edit',$user->id)}}" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{$user->firstname.' '.$user->lastname}}<br>

                                        <span style="font-size:10px">{{$user->email}}</span><br>
                                        <span style="font-size:10px">{{$user->phone}}</span><br>
                                        <span style="font-size:10px">{{$user->address}}</span><br>
                                        <span style="font-size:10px">{{$user->created_at->format('F d, Y')}}</span><br>


                                        </a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                     
                            
                            <!--end::Price=-->
                            <!--begin::Viewed=-->
                            <td class="text-start pe-0">
                                <span>{{$user->status?'Enabled' : 'Disabled'}}</span>
                            </td>
                            
                           
                            <td class="text-end pe-0">
                                <div class="rating justify-content-end">
                                    {{-- <a class="btn btn-primary" href="{{route('client.led.edit',$user->id)}}">Edit</a> --}}
                                <form action="{{route('admin.users.list.delete')}}" method="post">
                                    @csrf
                                  <button type="submit" class="btn btn-danger" name="user_id" value="{{$user->id}}" style="border:none !important;background:none !important;padding:0">    <img src="{{asset('assets/newtheme2023/images/deleteicon.png')}}" style="width:35px" title="Delete Users" >  </button>
                                </form>
                                <form action="{{route('admin.users.list.order')}}" method="post">
                                    @csrf
                                  <button type="submit" class="btn btn-primary" name="user_id" value="{{$user->id}}" style="border:none !important;background:none !important;padding:0"> <img src="{{asset('assets/newtheme2023/images/orders.png')}}" style="width:35px" title="View Orders" > </button>
                                </form>
                                <form action="{{route('admin.users.list.enable')}}" method="post">
                                    @csrf
                                  <button type="submit" class="btn btn-primary" name="user_id" value="{{$user->id}}" style="border:none !important;background:none !important;padding:0"><img src="{{asset('assets/newtheme2023/images/enableicon.png')}}" style="width:35px" title="Enable Account" > </button>
                                </form>
                                <form action="{{route('admin.users.list.disable')}}" method="post">
                                    @csrf
                                  <button type="submit" class="btn btn-danger" name="user_id" value="{{$user->id}}" style="border:none !important;background:none !important;padding:0"><img src="{{asset('assets/newtheme2023/images/disableicon.png')}}" style="width:35px" title="Disable Account" ></button>
                                </form>
                                </div>
                                
                            </td>
                            <!--end::Percent=-->
                        </tr>
                        @endforeach
                        
                        <!--end::Table row-->
                        <!--begin::Table row-->
                        
                        <!--end::Table row-->
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Container-->
</div>

@section('pageScripts')
<script src="{{asset('assets/Metronic-Theme/js/custom/apps/ecommerce/reports/views/views.js')}}"></script>
@endsection
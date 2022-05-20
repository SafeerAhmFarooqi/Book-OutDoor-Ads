<div class="post d-flex flex-column-fluid" id="kt_post">
    
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
   @endif
  
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
                        <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    {{-- <div class="w-100 mw-150px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                            <option></option>
                            <option value="all">All</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <!--end::Select2-->
                    </div> --}}
                    <!--begin::Add product-->
                    <a href="{{route('client.led.add')}}" class="btn btn-primary">Add New Led</a>
                    <!--end::Add product-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="text-end min-w-70px">Sr No.</th>
                            <th class="min-w-200px">Led Title</th>
                            <th class="text-end min-w-100px">Id</th>
                            <th class="text-end min-w-70px">Description</th>
                            <th class="text-end min-w-100px">Price</th>
                            <th class="text-end min-w-100px">Location</th>
                            <th class="text-end min-w-100px">Tax</th>
                            <th class="text-end min-w-100px">Added Date</th>
                            <th class="text-end min-w-70px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        <!--begin::Table row-->
                        @foreach ($leds as $led)
                        <tr>
                            <!--begin::Checkbox-->

                            <td class="text-center pe-0">
                                <span class="fw-bolder">{{++$srNo}}</span>
                            </td>

                          
                            <!--end::Checkbox-->
                            <!--begin::Category=-->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin::Thumbnail-->
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                        <span class="symbol-label" style="background-image:url({{'storage/'.($led->images->first())->path}});"></span>
                                    </a>
                                    <!--end::Thumbnail-->
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{$led->title}}</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <!--end::Category=-->
                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder">{{$led->id}}</span>
                            </td>
                            <!--end::SKU=-->
                            <!--begin::Qty=-->
                            <td class="text-end pe-0" data-order="45">
                                <span class="fw-bolder ms-3">{{$led->description}}</span>
                            </td>
                            <!--end::Qty=-->
                            <!--begin::Price=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder text-dark">{{$led->price}}</span>
                            </td>
                            <!--end::Price=-->
                            <!--begin::Rating-->
                            <td class="text-end pe-0" data-order="45">
                                <span class="fw-bolder ms-3">{{$led->location}}</span>
                            </td>
                            <!--end::Rating-->
                            <!--begin::Status=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder text-dark">{{$led->tax}}</span>
                            </td>
                            
                            <td class="text-end">
                                <span class="fw-bolder">{{$led->created_at->format('F d, Y')}}</span>
                            </td>
                            <!--end::Status=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$led->id}}" data-bs-whatever="{{$led->id}}">Delete</a>
                                    </div>

                                    
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        <div class="modal fade" id="exampleModal_{{$led->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Led : {{$led->title}}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger delete" role="alert">
                                         Do you really want to delete Led Id No : {{$led->id}}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <form action="{{route('client.led.view.delete')}}" method="post">
                                      @csrf
                                    <button type="submit" class="btn btn-danger" name="led_id" value="{{$led->id}}">Delete</button>
                                  </form>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                           
                    </tbody>
                    <!--end::Table body-->
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
<script src="{{asset('assets/Metronic-Theme/js/custom/apps/ecommerce/catalog/products.js')}}"></script>
@endsection
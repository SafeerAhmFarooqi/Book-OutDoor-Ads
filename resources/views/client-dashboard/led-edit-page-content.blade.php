<div class="container">
    <div class="container">
       @include('common.validation')
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Edit Led</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" action="{{route('client.led.edit.store',$led->id)}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Title</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="Title" value="{{old('title')?old('title') : $led->title}}" />
                                @error('title')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                           
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Description</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                {{-- <input type="text"  class="form-control form-control-lg form-control-solid"   /> --}}
                                <textarea id="tinymce1" class="form-control form-control-lg form-control-solid" name="description" value="{{old('description')?old('description') : $led->description}}" placeholder="Description">{{old('description')?old('description') : $led->description}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Location</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="location" class="form-control form-control-lg form-control-solid" placeholder="Location" value="{{old('location')?old('location') : $led->location}}" id="myAddress"/>
                                @error('location')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Price</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="price" class="form-control form-control-lg form-control-solid" placeholder="Price" value="{{old('price')?old('price') : $led->price}}" />
                                @error('price')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tax</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="tax" class="form-control form-control-lg form-control-solid" placeholder="Tax" value="{{old('tax')?old('tax') : $led->tax}}" />
                                @error('tax')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Estimated Views</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="estviews" class="form-control form-control-lg form-control-solid" placeholder="Estimated Views" value="{{old('estviews')?old('estviews') : $led->estviews}}" />
                                @error('estviews')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Add Led Images</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="file" name="images[]" class="form-control form-control-lg form-control-solid" multiple/> 
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                    @if (str_contains($error, 'images'))
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                    @endif   
                                    @endforeach
                                @endif
                            </div>
                            <!--end::Col-->
                        </div>
                      
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="{{route('dashboard')}}" class="btn btn-light btn-active-light-primary me-2">Back</a>
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    
    
    
    
    
        <div class="row">
            <div class="col">
                <!--begin::List Widget 7-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-4">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder text-dark">Led Images</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Total Number of Images : {{count($led->images)}}</span>
                        </h3>
                      
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3">
                        <!--begin::Item-->
                        @if (count($led->images)>0)
                            @foreach ($led->images as $image)
                            <div class="d-flex align-items-sm-center mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                    <div class="symbol-label" style="background-image:url({{asset('storage/'.($image)->path)}});"></div>
                                    
                                    
                                    {{-- style="background-image:url({{'storage/'.($led->images->first())->path}});" --}}
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6" data-bs-toggle="modal" data-bs-target="#kt_modal_{{$image->id}}">View Image</a>
                                        <span class="text-muted fw-bold d-block pt-1">Size: 87KB</span>
                                    </div>
                                    <span class="badge badge-light-success fs-8 fw-bolder my-2"><form action="{{route('client.led.delete.image')}}" method="post">@csrf<button type="submit" class="btn btn-sm btn-danger" name="imageId" value="{{$image->id}}">Delete</button></form></span>
                                </div>
                                <!--end::Title-->
                            </div>

                            <div class="modal bg-white fade" tabindex="-1" id="kt_modal_{{$image->id}}">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Image Preview</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="container">
                        <img src="{{asset('storage/'.($image)->path)}}" style="width: 100%;" alt="">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
                            @endforeach
                        @else
                            <h1>No Image Found</h1>
                        @endif
                       

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 7-->
            </div>
            
        </div>
    
    
    
    
    </div>




    
</div>
@section('pageScripts')
<script src="{{asset('assets/Metronic-Theme/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script>
    
    var options1 = {selector: "#tinymce1",
//     width: 600,
//   height: 300,
  plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
    'table emoticons template paste help'
  ],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons | help',
  
  menubar: 'favs file edit view insert format tools table help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                        };

                        var options2 = {selector: "#tinymce2",
//     width: 600,
//   height: 300,
  plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
    'table emoticons template paste help'
  ],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons | help',
  
  menubar: 'favs file edit view insert format tools table help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                        };

                        var options3 = {selector: "#tinymce3",
//     width: 600,
//   height: 300,
  plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
    'table emoticons template paste help'
  ],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons | help',
  
  menubar: 'favs file edit view insert format tools table help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                        };
                        
    if (KTApp.isDarkMode()) {
        options1["skin"] = "oxide-dark";
        options1["content_css"] = "dark";
        options2["skin"] = "oxide-dark";
        options2["content_css"] = "dark";
        options3["skin"] = "oxide-dark";
        options3["content_css"] = "dark";
    }
    tinymce.init(options1);
    tinymce.init(options2);
    tinymce.init(options3);
    
    </script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'myAddress';
    
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode']
               
            });
        
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
            });
        });
</script>
@endsection
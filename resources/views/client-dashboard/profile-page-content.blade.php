<div class="container">
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <a href="{{route('client.profile.edit')}}" class="btn btn-primary align-self-center">Edit Profile</a>
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">First Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{Auth::user()->firstname}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Last Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{Auth::user()->lastname}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{Auth::user()->email}}</span>
                </div>
                <!--end::Col-->
            </div>

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Company</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{Auth::user()->company}}</span>
                </div>
                <!--end::Col-->
            </div>

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Address</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{Auth::user()->address}}</span>
                </div>
                <!--end::Col-->
            </div>

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Phone</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{Auth::user()->phone}}</span>
                </div>
                <!--end::Col-->
            </div>

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bold text-muted">Postal Code</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{Auth::user()->postal_code}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            
            <!--end::Notice-->
        </div>
        <!--end::Card body-->
    </div>
</div>

@extends('layouts.metronic-theme')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">

                    @include('admin-dashboard.aside-bar')

    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    @include('admin-dashboard.topbar')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    {{-- @include('admin-dashboard.toolbar') --}}

    <div class="post d-flex flex-column-fluid" id="kt_post">

                    @include('admin-dashboard.billing-status-page-content')

    </div>
    </div>

                    @include('admin-dashboard.footer')

    </div>
    </div>
</div>
@endsection
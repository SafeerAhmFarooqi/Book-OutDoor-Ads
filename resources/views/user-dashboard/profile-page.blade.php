@extends('layouts.metronic-theme')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">

                    @include('user-dashboard.aside-bar')

    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    @include('user-dashboard.topbar')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    @include('user-dashboard.toolbar')

    <div class="post d-flex flex-column-fluid" id="kt_post">

                    @include('user-dashboard.profile-page-content')

    </div>
    </div>

                    @include('user-dashboard.footer')

    </div>
    </div>
</div>
@endsection
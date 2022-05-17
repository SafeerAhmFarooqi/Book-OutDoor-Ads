<meta charset="utf-8">
<!-- Primary Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="title" content="{{ config('app.name') }}">
<meta name="author" content="Safeer Ahmed Farooqi">

<link rel="preconnect" href="https://fonts.gstatic.com">


<title>{{ config('app.title') }} - {{ $headTitle ?? '' }}</title>

<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->

<link href="{{ asset('assets/Metronic-Theme/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{ asset('assets/Metronic-Theme/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/Metronic-Theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->

@yield('Styles')
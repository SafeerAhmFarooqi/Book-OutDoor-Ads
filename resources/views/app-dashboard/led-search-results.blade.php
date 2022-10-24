
@extends('layouts.led-theme')

@section('content')
<livewire:led-search-results :find="$find" :location="$location" />
    
<!-- end listing -->
@endsection

<style type="text/css">
	footer{
		display: none !important;
	}
</style>
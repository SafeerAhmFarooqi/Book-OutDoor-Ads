
@extends('layouts.led-theme')

@section('content')
<livewire:led-search-results :find="$find" :location="$location" />
    
<!-- end listing -->
@endsection


@extends('layouts.led-theme')

@section('content')
 

  <div class="site-section">
    <livewire:list-cities-leds :selectedId="$id" />
</div>

    
@endsection

 
 
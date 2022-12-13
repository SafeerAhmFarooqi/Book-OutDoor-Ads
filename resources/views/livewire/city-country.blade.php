<div>
    <div class="row mb-6" >
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Country</span>
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Location of Led"></i>
        </label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8 fv-row" wire:ignore>
            <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Wähle ein Country..." class="form-select form-select-solid form-select-lg fw-bold" id="select2-dropdown-country">
                <option value="">Wähle ein Country...</option>
                @foreach ($countries as $country)
                <option data-kt-flag="flags/afghanistan.svg" value="{{$country->id}}">{{$country->country}}</option>                                        
                @endforeach

                {{-- <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option> --}}
            </select>
            @error('country')
            <div class="alert alert-danger">
                    {{$message}}
            </div>
            @enderror
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-6" >
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-bold fs-6">
            <span class="required">Stadt</span>
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Location of Led"></i>
        </label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8 fv-row" wire:ignore>
            <select name="city" aria-label="Select a City" data-control="select2" data-placeholder="Wählen Sie eine Stadt aus ..." class="form-select form-select-solid form-select-lg fw-bold" id="select2-dropdown-city">
                <option value="">Wählen Sie eine Stadt aus...</option>
                @foreach ($cities as $city)
                <option data-kt-flag="flags/afghanistan.svg" value="{{$city->id}}">{{$city->city}}</option>                                        
                @endforeach

                {{-- <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option> --}}
            </select>
            @error('city')
            <div class="alert alert-danger">
                    {{$message}}
            </div>
            @enderror
        </div>
        <!--end::Col-->
    </div>
</div>

@section('pageScripts2')
<script>
    $(document).ready(function () {
        $('#select2-dropdown-country').on('change', function (e) {
            var data = $('#select2-dropdown-country').select2("val");
            @this.set('selectedCountry', data);
            @this.set('selectedCity', '');
           
        });

        $('#select2-dropdown-city').on('change', function (e) {
            var data = $('#select2-dropdown-city').select2("val");
            @this.set('selectedCity', data);
        });
      

        window.addEventListener('getFields', event => {
            var options = [];
            var cities = event.detail.name;
            if (cities.length==0) {
                $("#select2-dropdown-city").empty().select2({
                    data: options
                });
            } else {
                options.push({
                    text: '',
                    id: ''
                });
                $.each( cities, function( index, value ){

                options.push({
                    text: value.city,
                    id: value.id
                });
                });
                // $("#select2-dropdown-city").empty().select2({
                //         data: options
                //     });
                $('#select2-dropdown-city').select2({data: options});
            }
            
        });
     
       
    });
  </script>
@endsection

@if(session()->has('success'))
<div class="alert alert-success">
    check 1
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger" id="alert-this">
    {{ session()->get('error') }}
</div>
<script>
    setTimeout(function() { 
        document.getElementById("alert-this").style.display = 'none';
}, 5000); 
   </script>
@endif
@if(session()->has('status'))
<div class="alert alert-success">
    check 3
    {{ session()->get('status') }}
</div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        check 4
        {{ session()->get('message') }}
    </div>
   @endif

@if (count($errors) > 0)
     @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            check 5
                {{ $error }}
        </div>
     @endforeach
@endif


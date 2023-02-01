@if(session()->has('success'))
<div class="alert alert-success" id="alert-this-1">
    {{ session()->get('success') }}
</div>
<script>
    setTimeout(function() { 
        document.getElementById("alert-this-1").style.display = 'none';
}, 50000); 
   </script>
@endif
@if(session()->has('error'))
<div class="alert alert-danger" id="alert-this-2">
    {{ session()->get('error') }}
</div>
<script>
    setTimeout(function() { 
        document.getElementById("alert-this-2").style.display = 'none';
}, 50000); 
   </script>
@endif
@if(session()->has('status'))
<div class="alert alert-success" id="alert-this-3">
    {{ session()->get('status') }}
</div>
<script>
    setTimeout(function() { 
        document.getElementById("alert-this-3").style.display = 'none';
}, 50000); 
   </script>
@endif

@if(session()->has('message'))
    <div class="alert alert-success" role="alert" id="alert-this-4">
        {{ session()->get('message') }}
    </div>
    <script>
        setTimeout(function() { 
            document.getElementById("alert-this-4").style.display = 'none';
    }, 50000); 
       </script>
   @endif

@if (count($errors) > 0)
     @foreach ($errors->all() as $error)
        <div class="alert alert-danger" id="alert-loop-{{$loop->iteration}}">
                {{ $error }}
        </div>
        <script>
            setTimeout(function() { 
                document.getElementById("alert-loop-{{$loop->iteration}}").style.display = 'none';
        }, 50000); 
           </script>
     @endforeach
@endif


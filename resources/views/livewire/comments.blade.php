<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div wire:poll>
    @if ($comments->count()>0)
    <div class="well well-lg" style="background:none">
        @foreach ($comments as $comment)
        <div style="margin-bottom: 20px;">
            <h4 class="media-heading text-uppercase reviews col-sm-6" style="float:left"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/800px-Circle-icons-profile.svg.png" style="width:50px;"> {{($comment->user->firstname??'').' '.($comment->user->lastname??'')}}</h4>
            <h4 class="media-heading text-uppercase reviews col-sm-6" style="float:left;text-align: right;font-size: 12px;"><span class="fa fa-clock-o"></span> {{$comment->created_at->diffForHumans()}}</h4>
    
            <div class="clearfix"></div>
    
          
            <p class="media-comment" style="padding-left: 55px !important;">
              {{$comment->comment}}
            </p>
        </div>
        @endforeach
      

       
       
        
    </div> 
    @else
        <h6>This led Has no Comments Yet.</h6>
    @endif
 
</div>














    <div>
      @include('common.validation')
    </div>
    <div class="row" style="background:#fff;margin:5px;">
        <form wire:submit.prevent="submit" style="width:100%;padding:20px">
        
        <div class="form-group">
        <label for="comment"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comment:</font></font></label>
        <textarea class="form-control" rows="5" wire:model="comment" ></textarea>
        @error('comment')
        <div class="alert alert-danger">
                {{$message}}
        </div>
        @enderror    
    </div>
        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            <button type="submit" class="form-control" style="width: 100px;
            padding: 1px;
            background: #333;
            color: #fff;">Comment</button>
        </font></font>
        
                        </form>
        
                        <!-- end new post comment here -->
        </div>
</div>

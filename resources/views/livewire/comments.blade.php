<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div>
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif
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

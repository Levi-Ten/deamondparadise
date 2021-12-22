@include('admin.headEdit')
<div class="container w-50 mt-3">
    <a type="button" class="btn btn-secondary" href="{{ route('news.index') }}">Back to all news</a>

    <form method="POST"
          enctype="multipart/form-data"
          @if(isset($news))
          action="{{ route('news.update', $news) }}"
          @else
          action="{{ route('news.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($price)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
               <label for="title">maximum number of characters 50</label>
                <input 
                name="title"
                value="{{ old('title', isset($news) ? $news->title : null)}}"
                maxlength="50"
               
                type="text" class="form-control" placeholder="title news" aria-label="name" required>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <label for="description">write you news</label>
                <textarea cols="30" rows="10"
                       name="description"
                       type="text" class="form-control" placeholder="description news" aria-label="name" required>
                       {{ old('description', isset($news) ? $news->description : null) }}
                    </textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <input type="file" name="image" 
                preview-target-id="preview_1"
                class="mt-4">
        <div class="row mt-1">
       <div class="icon_wrapper"><div id="preview_1"></div></div>
            
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">create</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset("js/admin.js") }}"></script>
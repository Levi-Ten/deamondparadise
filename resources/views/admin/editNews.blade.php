@include('admin.headEdit')
<div class="container w-50">
    <a type="button" class="btn btn-secondary mt-5" href="{{ route('news.index') }}">Back to all news</a>
    <form method="POST"
          enctype="multipart/form-data"
          @if(isset($news))
          action="{{ route('news.update', $news->id) }}"
          @else
          action="{{ route('news.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($news)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input
                name="title"
                maxlength="50"
                value="{{ old('title', isset($news->id) ? $news->title : null) }}"
                type="text" class="form-control" placeholder="title news" aria-label="name" required>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <textarea cols="30" rows="10"
                       name="description"
                       type="text" class="form-control" placeholder="description" aria-label="name" required>
                       {{ old('description', isset($news->id) ? $news->description : null) }}

                    </textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
        <input name="image"

               preview-target-id="preview_1"
               type="file">
               <img id="blah" src="#" alt="" />
        <div class="icon_wrapper"><div id="preview_1"></div></div>
               @error('image')
               <div class="alert alert-danger">{{ $message }}</div>
           @enderror
               <img src="{{ asset('public/images/' . $news->image) }}">
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">create</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset("public/js/admin.js") }}"></script>

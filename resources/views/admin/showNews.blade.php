<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowNews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="p-3">
@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('news.index') }}">Back to all news</a>
    <div class="card mt-3 w-50">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$news->id}}</li>
            <li class="list-group-item">Title: {{$news->title}}</li>
            <li class="list-group-item">News: {{$news->description}}</li>
            <li class="list-group-item">Image: {{$news->image}}
                <img 
                src="{{ asset('images/' . $news->image) }}" 
                alt=""
                class="w-25"><br>
            </li>
            <li class="list-group-item">Created: {{$news->created_at->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">Updated: {{$news->updated_at->format('d/m/y H:i:s')}}</li>
        </ul>
    </div>
    <form method="POST" class="mt-3" action="{{ route('news.destroy', $news) }}">
        <a type="button" class="btn btn-warning" href="{{ route('news.edit', $news) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
    </form>
</div>
</body>
</html> 


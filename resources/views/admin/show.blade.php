<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="p-3">
    @section('content')
        <a type="button" class="btn btn-secondary" href="{{ route('prices.index') }}">Back to all services</a>
        <div class="card mt-3" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Id: {{$price->id}}</li>
                <li class="list-group-item">Service: {{$price->service}}</li>
                <li class="list-group-item">Price: {{$price->discounted_price ?: $price->price}}</li>
                <li class="list-group-item">Created: {{$price->created_at->format('d/m/y H:i:s')}}</li>
                @if($price->updated_at != null)
                    <li class="list-group-item">Updated: {{$price->updated_at->format('d/m/y H:i:s')}}</li>
                @endif
            </ul>
        </div>
        <form method="POST" class="mt-3" action="{{ route('prices.destroy', $price) }}">
            <a type="button" class="btn btn-warning" href="{{ route('prices.edit', $price) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"
                    onclick="return confirm('Are you sure you want to delete this entry?')">Delete
            </button>
        </form>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

@section('title', isset($price) ? 'Update '.$price->service : 'Create user')

{{-- @section('content') --}}
<div class="container w-50">
    <a type="button" class="btn btn-secondary" href="{{ route('prices.index') }}">Back to all services</a>
    <form method="POST"
          @if(isset($price))
          action="{{ route('prices.update', $price) }}"
          @else
          action="{{ route('prices.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($price)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="service"
                       value="{{ old('name', isset($price) ? $price->service : null) }}"
                       type="text" class="form-control" placeholder="service" aria-label="name">
                @error('service')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="price"
                       value="{{ old('name', isset($price->discounted_price) ? $price->discounted_price : (isset($price->price) ? $price->price :null)) }}"
                       type="text" class="form-control" placeholder="price" aria-label="email">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input name="discount"
                       value="{{ old('discount', isset($price->discounts_sum) ? $price->discounts_sum : null) }}"
                       type="text" class="form-control" placeholder="discount" aria-label="discount">
                @error('discount')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </div>
    </form>
</div>
{{-- @endsection --}}
</body>
</html>

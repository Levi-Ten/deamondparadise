<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('multiple.discount') }}" method="POST">
    @csrf
    <select multiple="multiple" name="services[]" id="services">
        @foreach($services as $key => $service)
            {{--            <option value="{{ $service->id }}" {{ $service->discounts_sum > 99 ? 'disabled' : '' }}>{{ $service->service }} | {{ $service->price }}$--}}
            <option value="{{ $service->id }}">{{ $service->service }} | {{ $service->price }}$
                | {{ $service->discounts_sum }} % || {{ $service->discounted_price }}$
            </option>
        @endforeach
    </select>

    <select name="discount" id="discount">
        @foreach($discounts as $discount)
            <option value="{{ $discount->id }}">{{ $discount->discount }}</option>
        @endforeach
    </select>
    <button type="submit">apply</button>
</form>
</body>
</html>

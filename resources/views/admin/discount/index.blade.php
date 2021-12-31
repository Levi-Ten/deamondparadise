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

@foreach($prices as $price)
    <h3>{{ $price->service }}</h3>
    {{ $price->price }} -
    {{--    @foreach($price->discounts as $discount)--}}
    <strong> {{ $price->discounts_sum_discount }} %</strong>
    {{--    @endforeach--}}
    <hr>
@endforeach
</body>
</html>

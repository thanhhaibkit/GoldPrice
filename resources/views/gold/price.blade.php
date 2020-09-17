<!DOCTYPE html>
<html>
    <h1>Giá Vàng</h1>
</html>

<body>
    <div>
        @if ($goldPrice)
            @include('gold._priceTable')
        @endif
    </div>
</body>

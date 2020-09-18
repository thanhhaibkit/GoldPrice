<!DOCTYPE html>
<html>
    <h1>Giá Vàng</h1>
</html>

<body>
    <div>
        @if ($goldPrice)
            @include('gold._priceTable')
        @else
            <p>Đang cập nhật</p>
        @endif
    </div>
</body>

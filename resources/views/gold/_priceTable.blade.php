
<table border="1">
    <thead>
        <tr>
            <th colspan="3">
                <p>{{ $goldPrice->attributes()->updated }}</p>
                <p>(Đơn vị: {{ $goldPrice->attributes()->unit }})</p>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>LOẠI VÀNG</td>
            <td>MUA VÀO</td>
            <td>BÁN RA</td>
        </tr>
        @foreach ($goldPrice->city as $city)
        <tr>
            <td colspan="3">{{ $city->attributes()->name }}</td>
        </tr>
        @foreach ($city->item as $item)
        <tr>
            <td>{{ $item->attributes()->type }}</td>
            <td>{{ $item->attributes()->buy }}</td>
            <td>{{ $item->attributes()->sell }}</td>
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>

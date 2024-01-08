<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test view engine</title>
</head>
<body>
    {{--    
        + sử dụng biến {{ }} trong template blade: 
        {{ "" }} có tác dụng in xuất dữ liệu có dạng thô
    --}}
    <p> truyền biến vào template engine: {{"$param"}} </p>
    <p> in dữ liệu dưới dạng thô {{ '<h1> tên Khang In Đậm </h1>' }}</p>


    {{-- 
        + sử dụng {!! "" !!}   
        dạng này cho xuất dữ liệt có dạng appen HTML
    --}}
    {!! "<p> xuất dữ liệu dùng dưới dạng {!}</p>" !!}


    {{-- 
        + vòng lặp for
        cú pháp:
            @for (điều kiện)
                câu lệnh nếu thỏa đk
            @endfor
    --}}
    @for($i = 0; $i < 10; $i++)
        <p> giá trị của i là {{ $i }} </p>
    @endfor

    {{-- 
        + vòng lặp foreach
        cú pháp:
            @foreach(điều kiện)
                câu lệnh nếu thỏa đk
            @endforeach
    --}}
</body>
</html>
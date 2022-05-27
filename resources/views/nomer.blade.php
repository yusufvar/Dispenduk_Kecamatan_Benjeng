<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="w-screen h-screen flex justify-center items-center bg-gray-100">
        <div class="bg-white w-50 h-50 p-5 flex flex-col items-center rounded shadow">
            <span>Nomer Antri Anda</span>
            <div class="text-2xl font-bold">{{$nomer??'666666'}}</div>

        </div>
    </div>
</body>

</html>

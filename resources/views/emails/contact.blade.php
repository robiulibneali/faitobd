{{--<x-mail::message>--}}
{{--# Introduction--}}

{{--The body of your message.--}}

{{--<x-mail::button :url="''">--}}
{{--Button Text--}}
{{--</x-mail::button>--}}

{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
{{--</x-mail::message>--}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faitoinfo@gmail.com</title>
</head>
<body>
    <span>{{ $data['name'] }} </span><span>send you this</span><span>{{ $data['message'] }} </span><span>from this</span><span>{{ $data['email'] }}</span><span>for faito.co.bd</span>
</body>
</html>

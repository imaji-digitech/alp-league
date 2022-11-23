<!DOCTYPE html>
<html lang="en" style="margin: 0;padding: 0">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @page {
            margin: 100px 25px;
        }

        div.solid {
            border-style: solid;
        }

    </style>
</head>
<body style="padding: 30px 0 0 10px;margin: 0;">

@php($village="")
@foreach($school as $index=>$sc)
    <div class="solid" style="font-size: 24px; width: 45%; margin: 5px; padding: 5px; display: inline-block">
        email : <br> <b>{{ $sc->user->email }}</b> <br>
        password : <br> <b>alpleague2022</b>
    </div>
@endforeach

</body>
</html>

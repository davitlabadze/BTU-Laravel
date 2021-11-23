<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav{
            transform:translate(90%,50%);
            background:rgb(241, 241, 241);
            width: 600px;
            height: 250px;
            text-align:center;
            border-radius: 10px;
            border:2px solid green;
        }
        li{
            margin-top: 20px;
            list-style-type: none;
            color:red;
        }
        h1{
            padding-top: 20px;
        }
        p{
            font-size:20px;
            width: 900px;
            text-align:center;
            transform: translate(50%,5%);
        }
        .post{
            text-align:center;
            margin-top:10%;
            font-size:40px;
            display: relative;
        }
        a{
            text-decoration: none;
        }
        .decor{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>

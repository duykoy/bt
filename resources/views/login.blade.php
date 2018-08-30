<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        .content{
            padding: 0px 575px 10px;
            margin: auto;
        }
        .menu{
            padding:0 20px;

        }
        .button{
            padding-top: 10px;

        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="content"><h1>Đăng nhập</h1></div>
<form action="{{route('dangnhap')}}" method="post">
    {{csrf_field()}}
    <div class="container">
        <div>
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <div class="button">
            <button type="submit" class="btn btn-primary">Dang nhap</button>
        </div>
    </div>

</form>
</body>
</html>
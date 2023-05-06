<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .login-div {
            border: 1px #000 solid;
            height: 10em;
            width: 15em;
            margin: 0 auto;
            margin-top: 10em;
            padding: 5em;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-div">
        <form action="/account/login/send-request" method="post">
            {{ csrf_field() }}
            <div>
                <label for="username">Username</label><br/>
                <input name="username" id="username" type="text" />
            </div>
            <div>
                <label for="username">Password</label><br/>
                <input name="password" id="password" type="password" />
            </div><br/><br/>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
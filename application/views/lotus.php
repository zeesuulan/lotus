<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lotus</title>
    <?=setCSS(array("bootstrap.min.css", "main.css"))?>
</head>

<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <h1>Lotus</h1>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <form class="form" id="loginForm">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="用户名">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="密码">
                </div>
                <button type="submit" class="btn btn-default">登录</button>
            </form>
        </div>
    </div>
</body>
<?=setJS(array("jquery.min.js", "bootstrap.min.js", "index.js"))?>
</html>

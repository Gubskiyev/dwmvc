
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Destroyed World</title>
    <style type="text/css">

        body, html {margin:0; padding:0; height: 100%;}
        body {background: url('/img/mainBg.png') 0 0 repeat; font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4;}
        .top {min-width: 600px; height: 40%; background: #f4efe9 url('/img/mainImgTop.png') 50% 100% no-repeat;}
        .bottom {min-width: 600px; height: 60%;  background: url('/img/mainImgBottom.png') 50% 0 no-repeat;}
        .contents {text-align: center; padding-top: 210px;}
        .cell0 {display: inline-block; background: #dbd0bf; text-align: left; line-height: 1.6; padding: 6px 12px; vertical-align: middle;}
        .cell0 a {color: #5f4d3a; display: block; padding-left: 20px; padding-right: 0px; background: url('/img/bull.png') 10px 9px no-repeat;}
        .cell0 a:hover {background-color: #f4efe9}

        .cell1 {display: inline-block; padding: 0 30px; line-height: .8; font-weight: bold; letter-spacing: 2px; font-size: 40px; color: #fff; font-family: "Courier New", Courier, mono; text-shadow: 2px 2px 0px #A59685; vertical-align: middle;}
        .cell1 span {font-size: 28px;}
        .cell1 small {font-size: 100%; letter-spacing: -3px;}

        .cell2 {display: inline-block; width: 120px;  vertical-align: middle;}
        .cell2 input {width: 100%; height: 19px; padding:0 2px; margin: 1px 0; background: #DBD0BF; border: 1px solid #9A8978; border-radius: 2px; color: #5F4D3A; font-size: 12px; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box;}
        .cell2 input.submit {color: #594D40; background: #DACEB8;}

    </style>
</head>
<body>
<div class="top">&nbsp;</div>
<div class="bottom">
    <div class="contents">
        <div class="cell0 menu">
            <a href="/user/register/">Регистрация</a>
            <a href="/help/">Помощь</a>
        </div>
        <div class="cell1 name">
            <span>Destroyed</span><br>
            WORLD
        </div>
        <div class="cell2">
            <form method="post" action="/user/login/">
                <input type="text" name="login"><br>
                <input type="password" name="pass"><br>
                <input type="submit" name="auth" value="Вход" class="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>
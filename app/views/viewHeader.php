<?php if(!isset($_COOKIE['login'])) { ?>
<div class="main">
    <div class="header">
        <div class="img">
            <div class="name">
                <span>Destroyed</span>
                <br>
                WORLD
            </div>

            <div class="right">
                <div class="info">
                    Сейчас: <?=date("H:i")?> MSK<br>
                    <a href="/user/online/">Игроки онлайн</a>: <br>
                </div>

                <ul class="menu">
                    <li><a href="/user/register/">Регистрация</a></li>
                    <li><a href="/user/login/">Авторизация</a></li>
                    <li><a href="/help/">Помощь</a></li>
                </ul>
            </div>

            <div class=line>&nbsp;</div>
        </div>
    </div>
    <?php }else { ?>
    <div class="main">
        <div class="header">
            <div class="img">
                <div class="name">
                    <span>Destroyed</span>
                    <br>
                    WORLD
                </div>

                <div class="right">
                    <div class="info">
                        Сейчас: <?=date("H:i")?> MSK<br>
                        <a href="/user/online/">Игроки онлайн</a><br>
                    </div>

                    <ul class="menu">
                        <li><a href="/user/" class="current">Персонаж</a></li>
                        <lI><a href="/inventory/" >Рюкзак</a></lI>
                        <li><a href="/mail/" >Почта</a></li>
                        <li><a href="/forum/" >Форум</a></li>
                        <li><a href="/shop/" >Магазин</a></li>
                        <li><a href="/map/" >Карта</a></li>
                        <li><a href="/help/" >Помощь</a></li>
                        <li><a href="/battles/" >Бои</a></li>
                    </ul>
                </div>

                <div class=line>&nbsp;</div>
            </div>
        </div>

    <?php } ?>

<!--<?php if(isset($_COOKIE['login'])) { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Destroyed World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/user/">Персонаж
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mail/">Почта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/map/">Карта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/battle/">Бои</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forum/">Форум</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php }else { ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Destroyed World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/user/login/">Вход в игру
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/register/">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forum/">Форум</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Об игре</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<?php } ?>
-->
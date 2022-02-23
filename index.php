<?php 

$isAuth = true;
$isAdmin = true;
$title = 'Количество новостей';
$numberNews = 3;

?>


<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>Show-to-me</title>
    <link rel="stylesheet" href="css/bootstrap_5.css" />
    <link rel="stylesheet" href="css/zeroing.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header-flex">
                    <a href="/"><img class="logo" alt="logo" src="/img/logo.svg"></a>
                    <nav class="menu-wrapper">
                        <div class="menu cur-point">Сериалы</div>
                        <div class="menu cur-point active">Новости</div>
                    </nav>
                    <?php if ($isAuth): ?>
                    <div class="login-flex cur-point">
                        <div class="login-img"><img class="logo" alt="logo" src="/img/login.svg"></div>
                        <div class="login-title cur-point">Login</div>
                    </div>
                    <?php else: ?>
                    <div class="login-flex cur-point" @click="goTo('/authorization')" v-else>
                        <div class="login-img"><img class="logo" alt="logo" src="/img/anonim.svg"></div>
                        <div class="login-title cur-point">Войти</div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </header>
        <section class="main">
            <div class="container flex">
                <div class="main_flex">
                    <section class="sidebar">
                        <nav class="menu-wrapper_sidebar">
                            <div class="menu_item">
                                <div class="box">
                                    <div class="sidebar__img"><img src="/img/icon/my_series.png" alt="alt">
                                    </div>
                                    <div class="sidebar__text">Мои сериалы</div>
                                </div>
                            </div>
                            <div class="menu_item">
                                <div class="box">
                                    <div class="sidebar__img"><img src="/img/icon/profile.png" alt="alt">
                                    </div>
                                    <div class="sidebar__text">Профиль</div>
                                </div>
                            </div>
                            <div class="menu_item">
                                <div class="box">
                                    <div class="sidebar__img"><img src="/img/icon/calendar.png" alt="alt">
                                    </div>
                                    <div class="sidebar__text">Календарь</div>
                                </div>
                            </div>
                            <div class="menu_item">
                                <div class="box">
                                    <div class="sidebar__img"><img src="/img/icon/favorites.png" alt="alt">
                                    </div>
                                    <div class="sidebar__text">Избранное</div>
                                </div>
                            </div>
                        </nav>
                    </section>
                    <section class="content flex_cont">
                        <div class="container flex tile-s1">
                            <div>
                                <div class="title">Новости</div>
                                <?php if ($isAdmin): ?>
                                <div class="flex-c">
                                    <button class="btm_form">Создать новость</button>
                                </div>
                                <?php endif; ?>
                                <div class="title-2"><?php echo "$title: $numberNews" ?></div>
                                <div class="flex_news">
                                    <div class="flex-grow">
                                        <div class="news-card">
                                            <div class="img-title-news"><img
                                                    src="https://media.myshows.me/news/1920/1/e8/1e833e43c93ea052689c6b32fabfc166.jpg"
                                                    alt=""></div>
                                            <div class="text">
                                                <div class="tile-news">Netflix подтвердил, что у «Игры в кальмара» будет
                                                    второй сезон</div>
                                                <div class="foreword-news">22.02.2022</div>
                                                <div class="foreword-news">Более того, директор сервиса утверждает, что
                                                    вселенная сериала только начинается.</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="news-card">
                                            <div class="img-title-news"><img
                                                    src="https://media.myshows.me/news/normal/8/76/87653cc4fb554a3ef08ac2c54910abf5.jpg"
                                                    alt=""></div>
                                            <div class="text">
                                                <div class="tile-news">Вышел напряженный трейлер второй части финала «Ходячих мертвецов»</div>
                                                <div class="foreword-news">22.02.2022</div>
                                                <div class="foreword-news">Премьера — уже 13 февраля.</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="news-card">
                                            <div class="img-title-news"><img
                                                    src="https://media.myshows.me/news/normal/b/10/b101b6aff2511af3515aa3b344e9557b.jpg"
                                                    alt=""></div>
                                            <div class="text">
                                                <div class="tile-news">HBO Max выпустил трейлер второго сезона «Воспитанных волками» Ридли Скотта</div>
                                                <div class="foreword-news">22.02.2022</div>
                                                <div class="foreword-news">Премьера продолжения фантастической драмы состоится 3 февраля.</div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="footer__flex">
                    <a href="/"><img class="logo" alt="logo" src="/img/logo.svg"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
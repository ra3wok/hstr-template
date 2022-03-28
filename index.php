<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Title</title>
    <meta name="description" content="Валидный шаблон 2022" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="#" />
    <link rel='stylesheet' href='css/main.css' type='text/css' media='all' />
</head>

<body>

<div class="hstr-site">


    <header class="hstr-header">
        <div class="wrapper">
            <div class="hstr-site-branding">

                <div class="hstr-site-branding__title"><a href="#" rel="home">HSTR</a></div>

                <div class="hstr-site-branding__description">Одностраничный 2-х колоночный шаблон</div>

            </div><!-- .hstr-site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="site-menu-toggle" aria-controls="primary-menu" aria-expanded="false" >Меню</button>
                <div class="menu-header-menu-container">
                    <ul id="primary-menu" class="main-menu">
                        <li class="menu-item"><a href="" >Главная</a></li>
                        <li class="menu-item"><a href="#page1" >Кнопки</a></li>
                        <li class="menu-item"><a href="#page2" >Одна колонка</a></li>
                        <li class="menu-item"><a href="#contacts" >Контакты</a></li>
                    </ul></div>		</nav><!-- #site-navigation -->
        </div>
    </header><!-- /header -->



    <div class="hstr-content" id="page0">


        <div class="wrapper">

            <main class="hstr-main">



                <h1>О шаблоне</h1>

                <p>Этот двух-колоночный одностраничный шаблон построен по технологии flex. Имеет "резиновый" дизайн. Использует jQuery3.  Может служить как база для создания сайта.
                А также как площадка для тестирования различных дизайнерских решений.
                </p>







            </main><!-- #main -->

        <aside class="hstr-aside">
            <section id="text-4" class="widget widget_text">

                <h3>Фикс блок</h3>
                <div class="textwidget" style="border: 1px solid #aaa; height: 320px; color: #aaa;">Widget</div>



            </section>

        </aside><!-- #secondary -->
        </div>
    </div> <!-- #content -->


    <!-- page1 -->
    <div class="hstr-content" id="page1"  style="display: none;">
        <div class="wrapper">
            <main class="hstr-main">


                <p><a href="#" class="hstr-button">Кнопка</a></p>




                <nav class="navigation pagination" role="navigation" >
                    <div class="screen-reader-text">Навигация по записям</div>
                    <div class="nav-links">
                        <span class="hstr-button current">1</span>
                        <a class="hstr-button" href="">2</a>
                        <a class="next page-numbers" href="">-></a></div>
                </nav>
            </main>
            <aside class="hstr-aside">
                <section id="text-4" class="widget widget_text">
                    <h3>Фикс блок</h3>
                    <div class="textwidget" style="border: 1px solid #aaa; height: 320px; color: #aaa;">Widget</div>
                </section>

            </aside><!-- #secondary -->
        </div>
    </div> <!-- /page1 -->

    <!-- page2 -->
    <div class="hstr-content" id="page2"  style="display: none;">
        <div class="wrapper">
            <main class="hstr-main">
                For the purpose of calculating an intrinsic size of the box (e.g. the box’s min-content size), a content-based minimum size causes the box’s size in that axis to become indefinite (even if e.g. its width property specifies a definite size). Note this means that percentages calculated against this size will behave as auto.
            </main>
        </div>
    </div> <!-- /page2 -->

    <!-- page3 -->
    <div class="hstr-content" id="page3"  style="display: none;">
        <div class="wrapper">
            <main class="hstr-main">

            <h2>Отправить сообщение:</h2>

            <form action="" method="post" id="commentform" class="comment-form" novalidate="">
                <p class="comment-form-comment">
                    <textarea id="comment" name="comment" cols="100" rows="8" aria-required="true" required="required" ></textarea>
                </p>

                <div class="comments-3fields">
                    <p class="comment-form-author">
                        <input id="author" name="author" placeholder="Имя *" type="text" value="" />
                    </p>
                    <p class="comment-form-email">
                        <input id="email" name="email" placeholder="Е-майл (не публикуется) *" type="text" value="" >
                    </p>
                    <p class="comment-form-url">
                        <input id="url" name="url" placeholder="Профиль соц сети" type="text" value="" >
                    </p>
                </div>

                <br class="clear">

                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                    <label for="wp-comment-cookies-consent">Сохранить имя, e-mail и адрес сайта в браузере для последующих моих комментариев</label>
                </p>
                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Отправить"> <input type="hidden" name="comment_post_ID" value="429" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                </p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="03ae14fa7d"></p><p style="display: none;"></p><input type="hidden" id="ak_js" name="ak_js" value="1648219011520"></form>

            </main>
            <aside class="hstr-aside">
            </aside><!-- #secondary -->
        </div>
    </div> <!-- /page3 -->


<footer class="hstr-footer">
    <div class="wrapper">
        <div class="site-info">
            <?php echo "&#169; " . date('Y').", "; ?> <a href="#" >HSTR шаблон</a>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<script type="text/javascript" src="js/jQuery3.js"></script>
<script type="text/javascript" src="js/base.js"></script>
</body>
</html>

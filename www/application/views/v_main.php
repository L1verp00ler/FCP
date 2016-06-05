<!DOCTYPE html>
<html lang="ru">
<body>

<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
       Multiple lines will require custom code not provided by Bootstrap. -->

    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="row">
            <div class="col-xs-6 col-md-2"><img src="images/6.jpg"/></div>
            <div class="col-xs-12 col-md-10">
                <h1>Футбольный клуб «Палех»</h1>
                <p>Актуальная информация об игроках и тренерах, новости и фоторепортаж матчей</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- Новости ВКонтакте -->
            <h2>Новости и результаты матчей</h2>
            <div class="container-fluid">
                <div class="row">
                    <div id="vk_post_-26669476_1234"></div>
                    <script type="text/javascript">  (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//vk.com/js/api/openapi.js?121";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'vk_openapi_js'));
                        (function () {
                            if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post("vk_post_-26669476_1234", -26669476, 1234, 'yolGpp1AFRTVmKIBN9C7egLjcv0', {width: 350})) setTimeout(arguments.callee, 50);
                        }());</script>
                    <div id="vk_post_-26669476_1207"></div>
                    <script type="text/javascript">  (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//vk.com/js/api/openapi.js?121";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'vk_openapi_js'));
                        (function () {
                            if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post("vk_post_-26669476_1207", -26669476, 1207, 'jKTxu5_6P9NPwLh64P5v2SSJWZE', {width: 350})) setTimeout(arguments.callee, 50);
                        }());</script>
                    <div id="vk_post_-26669476_1146"></div>
                    <script type="text/javascript">  (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//vk.com/js/api/openapi.js?121";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'vk_openapi_js'));
                        (function () {
                            if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post("vk_post_-26669476_1146", -26669476, 1146, 'HT_JhfLBD6ksbRvtp2w4f7G2A7s', {width: 350})) setTimeout(arguments.callee, 50);
                        }());</script>
                    <div id="vk_post_-26669476_918"></div>
                    <script type="text/javascript">  (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//vk.com/js/api/openapi.js?121";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'vk_openapi_js'));
                        (function () {
                            if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post("vk_post_-26669476_918", -26669476, 918, 'DnchISwG13C3hxHHrhyAgV6_a_s', {width: 350})) setTimeout(arguments.callee, 50);
                        }());</script>
                </div>
            </div>
            <!-- Новости ВКонтакте -->
        </div>

        <div class="col-md-8">
            <!-- Слайдер изображений -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slider/1.jpg" alt="...">
                    </div>

                    <div class="item">
                        <img src="images/slider/2.jpg" alt="...">
                    </div>

                    <div class="item">
                        <img src="images/slider/3.jpg" alt="...">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!-- Слайдер изображений -->
            <div class="row">
                <div class="col-lg-6">
                    <h2>Лучший игрок команды</h2>
                    <img src="images/4.jpg"/>
                </div>
                <div class="col-lg-6">
                    <h2>Лучшее фото сезона</h2>
                    <img src="images/5.jpg"/>
                </div>
            </div>
        </div>
    </div>
    <!-- Example row of columns -->
    <br>
    <div class="jumbotron">
        <h3>Сайт разработал <a href='/men'>Семён Иванов</a></h3>
    </div>

</div> <!-- /container -->

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

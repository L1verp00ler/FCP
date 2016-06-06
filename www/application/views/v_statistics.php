<link href="/css/dashboard.css" rel="stylesheet">
<div class="container-fluid">
    <!--div class="starter-template"-->
    <div class="row">
        <div class="col-sm-6 col-md-12 main">
            <br>
            <h1 class="page-header" style="text-align: center">Статистика</h1>
            <div class="jumbotron">
                <div class="row" style="border-bottom: 2px dotted #03498B">
                    <h2>Результаты игр в сезоне:</h2>
                    <p>Победы: 3  Ничьи: 1 Поражения: 1</p>
                </div>
                <div class="row" style="border-bottom: 2px dotted #03498B">
                    <h2>Гвардейцы (время на поле за сезон):</h2>
                    <p>1. №1  Антонов Евгений (вр) - 450 мин</p>
                    <p>2. №11 Власов Роман (защ) - 415 мин</p>
                    <p>3. №9 Иванов Семен (пзщ) - 413 мин</p>
                </div>
                <div class="row" style="border-bottom: 2px dotted #03498B">
                    <h2>Лучшие бомбардиры команды</h2>
                    <p>1. №19  Якубов Николай (пзщ) - 3 гола</p>
                    <p>2. №11 Власов Роман (защ) - 2 гола</p>
                    <p>3. №13 Суровцев Герман (нап) - 2 гола</p>
                </div>
                <div class="row" style="border-bottom: 2px dotted #03498B">
                    <h2>Рекордсмены по кол-ву карточек:</h2>
                    <p>1. №11 Власов Роман (защ) - 3 жк</p>
                    <p>2. №5  Батуро Алексей (защ) - 3 жк</p>
                    <p>3. №7 Курбатов Илья (пзщ) - 2 жк</p>
                </div>

                <?php
                /*
                $query = "SELECT * FROM comments WHERE news_id =" . $_GET['id'];
                $result = mysql_query($query);
                while ($data = mysql_fetch_assoc($result)) {
                    $comments[] = $data;
                }
                foreach ($comments as $comment){ ?>
                    <div class="row">
                        <h3><?php echo "From User" . $comment['user_id'] . ":";?></h3>
                        <p><?php echo $comment['comment_text'];?></p>
                    </div>
                    <br>
                    <?php
                }
                */
                ?>

            </div>




            <? if (isset($_GET['info'])) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Игрок успешно удален!
                </div>
            <? } ?>

            <!--
            <div class="table-responsive">
                <table class="table table-striped text-left">
                    <tr>
                        <th class='thd'> Номер</th>
                        <th class='thd'> Фамилия</th>
                        <th class='thd'> Имя</th>
                        <th class='thd'> Амплуа</th>
                        <th class='thd'> Возраст</th>
                    </tr>

                    <?
                    /*
                    foreach ($players as $player) {
                    echo "<tr>";
                    //echo "<td><input id='radio' type='radio' class='radio' name='radio' value='" . $personal['id'] . "'>
                    //		  <input id='name2' type='hidden' name='name2' value='" . $personal['name'] . " " . $personal['familiya'] . "'></td> ";
                    echo "<td class = 'tdm'> " . $player['player_id'] . " </td>";
                    echo "<td class = 'tdm'> " . $player['lastname'] . " </td>";
                    echo "<td class = 'tdm'> " . $player['firstname'] . " </td>";
                    echo "<td class = 'tdm'> " . $player['position_name'] . " </td>";
                    echo "<td class = 'tdm'> " . $player['age'] . " </td>";
                    echo "</tr>";
                    }
                    */
                    ?>
                </table>
            </div>
            -->
        </div>
    </div> <!-- endrow-->
    <!--/div-->
</div><!-- /.container -->


</body>
</html>

<link href="/css/dashboard.css" rel="stylesheet">
<div class="container-fluid">
    <!--div class="starter-template"-->
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <form action="" method="GET" name="testform" id="testform">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="/players">Состав команды</a></li>
                </ul>
                <? if ($session['role'] == 2) { ?>
                    <ul class="nav nav-sidebar">
                        <li><a href="/newplayer">Создать</a></li>
                    </ul>
                <? } ?>
                <? if ($session['role'] == 2) { ?>
                    <ul class="nav nav-sidebar">
                        <li><a href="#" onclick="del_d();">Удалить</a></li>
                    </ul>
                <? } ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <br>
            <h1 class="page-header">Состав команды</h1>
            <? if (isset($_GET['message'])) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Не удалось добавить нового игрока! В полях ввода были использованы недопустимые символы!
                </div>
            <? } ?>
            <? if (isset($_GET['info'])) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Игрок успешно удален!
                </div>
            <? } ?>

            <?php
            $result1 = mysql_query("SELECT * FROM players AS pl LEFT JOIN positions AS pos
            ON pl.position_id = pos.position_id WHERE pl.position_id = 1") or die(mysql_error());
            $result2 = mysql_query("SELECT * FROM players AS pl LEFT JOIN positions AS pos
            ON pl.position_id = pos.position_id WHERE pl.position_id = 2") or die(mysql_error());
            $result3 = mysql_query("SELECT * FROM players AS pl LEFT JOIN positions AS pos
            ON pl.position_id = pos.position_id WHERE pl.position_id = 3") or die(mysql_error());
            $result4 = mysql_query("SELECT * FROM players AS pl LEFT JOIN positions AS pos
            ON pl.position_id = pos.position_id WHERE pl.position_id = 4") or die(mysql_error());
            $players = [];
            $goalkeepers = [];
            $defenders = [];
            $midfielders = [];
            $forwards = [];
            while ($data1 = mysql_fetch_assoc($result1)) {
                $players[] = $data1;
            }
            while ($data2 = mysql_fetch_assoc($result2)) {
                $players[] = $data2;
            }
            while ($data3 = mysql_fetch_assoc($result3)) {
                $players[] = $data3;
            }
            while ($data4 = mysql_fetch_assoc($result4)) {
                $players[] = $data4;
            }

            //var_dump($players);
            //exit;
            ?>

            <div class="table-responsive">
                <table class="table table-striped text-left">
                    <tr>
                        <th></th>
                        <th class='thd'> Номер</th>
                        <th class='thd'> Фамилия</th>
                        <th class='thd'> Имя</th>
                        <th class='thd'> Амплуа</th>
                        <th class='thd'> Возраст</th>
                    </tr>

                    <?
                    foreach ($players as $player) {
                        echo "<tr>";
                        echo "<td><input id='radio' type='radio' class='radio' name='radio' value='" . $player['player_id'] . "'>
                        		  <input id='name2' type='hidden' name='name2' value='" . $player['firstname'] . " " . $player['lastname'] . "'></td> ";
                        echo "<td class = 'tdm'> " . $player['player_id'] . " </td>";
                        echo "<td class = 'tdm'> " . $player['lastname'] . " </td>";
                        echo "<td class = 'tdm'> " . $player['firstname'] . " </td>";
                        echo "<td class = 'tdm'> " . $player['position_name'] . " </td>";
                        echo "<td class = 'tdm'> " . $player['age'] . " </td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

        </div>
    </div> <!-- endrow-->
    <!--/div-->
</div><!-- /.container -->

<? if ($session['role'] == 2) { ?>
    <script>
        function del_d() {
            var radio = new Array();
            var name = new Array();
            radio = document.getElementsByName('radio');
            name = document.getElementsByName('name2');
            var tmp = 0;
            for (i = 0; i < radio.length; i++) {
                if (radio[i].checked) {
                    var p = confirm("Вы действительно хотите удалить игрока: " + name[i].value);
                    if (p) {
                        //alert(radio[i].value);
                        window.location.replace('/players/del/' + radio[i].value);
                    }
                    tmp = 1;
                }
            }
            if (tmp == 0) alert('Вы никого не выбрали!');
        }
    </script>
<? } ?>


</body>
</html>


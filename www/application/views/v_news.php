<!--
<link href="/css/signin.css" rel="stylesheet">
<div class="container">
-->

<?php
//$result = mysql_query("SELECT * FROM personal") or die(mysql_error());
//$data = mysql_fetch_array($result);
?>

<!--
    <table align="center" border="4" cellspacing="50" cellpadding="50"
           style="border-color: #4F0889; background-color: #79F1F8; color: #F46512">
        <tr>
            <th colspan="3">
                <h1 align="center">Состав команды ФК Палех на сезон 2015 года</h1>
            </th>
        </tr>
-->
<?
/*
do {
    printf('
                    <tr>
                        <td width="200" height="50" valign="middle"  align="center">
                            <h3> %s %s </h3>
                        </td>
                        <td width="200" height="50" valign="middle"  align="center">
                            <h3> %s  <h3>
                        </td>
                        <td width="200" height="50" valign="middle"  align="center">
                            <h3> %s  <h3>
                        </td>
                    </tr>
                    ', $data["familiya"], $data["name"], $data["position"], $data["stag"]);
} while ($data = mysql_fetch_array($result));
*/
?>
<!--
    </table>

</div>
-->

<link href="/css/dashboard.css" rel="stylesheet">
<div class="container-fluid">
    <!--div class="starter-template"-->
    <div class="row">
        <div class="col-sm-6 col-md-12 main">
            <br>
            <h1 class="page-header" style="text-align: center">Состав команды</h1>
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
                        <th class='thd'> Номер</th>
                        <th class='thd'> Фамилия</th>
                        <th class='thd'> Имя</th>
                        <th class='thd'> Амплуа</th>
                        <th class='thd'> Возраст</th>
                    </tr>

                    <?
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
                    ?>
                </table>
                </form>
            </div>
        </div>
    </div> <!-- endrow-->
    <!--/div-->
</div><!-- /.container -->


</body>
</html>

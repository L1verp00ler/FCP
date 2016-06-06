<link href="/css/dashboard.css" rel="stylesheet">
<div class="container-fluid">
    <!--div class="starter-template"-->
    <div class="row">
        <div class="col-sm-6 col-md-12 main">
            <br>
            <h1 class="page-header" style="text-align: center">Новости</h1>
            <? if (isset($_GET['info'])) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Игрок успешно удален!
                </div>
            <? } ?>

            <?php
            if (isset($_GET['id'])) {
                $query = "SELECT * FROM news WHERE news_id =" . $_GET['id'];
                $result = mysql_query($query);
                while ($data = mysql_fetch_assoc($result)) {
                    $news = $data;
                }
                //var_dump($news);
                ?>
                <div class="jumbotron">
                    <div class="row" style="border-bottom: 2px dotted #03498B">
                        <h2><?php echo $news['title'];?></h2>
                        <p><?php echo $news['text'];?></p>
                    </div>
                    <div class="row">
                        <h2>Комментарии пользователей:</h2>
                    </div>
                    <?php
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
                    ?>
                </div>
            <?php
            } else {
                ?>

                <?php
                $result = mysql_query("SELECT * FROM news");
                while ($data = mysql_fetch_assoc($result)) {
                    $news_array[] = $data;
                }
                //var_dump($news);
                //exit;
                ?>

                <?
                foreach ($news_array as $news) {
                    ?>
                    <div class="jumbotron">
                        <div class="row">
                            <a href="/news?id=<?= $news['news_id'] ?>"><h2><?php echo $news['title']; ?></h2></a>
                            <p><?php echo $news['text']; ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

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

<link href="/css/dashboard.css" rel="stylesheet">
<link type="text/css" href="/js/jquery.lightbox.css" rel="stylesheet"/>
<div class="container">
    <div class="row">
        <br>
        <h1 class="page-header">Новый игрок</h1>
        <div class="col-md-8">
            <br>
            <?php echo form_open('/newplayer/login_validation', 'class="form-horizontal"', 'method="POST"'); ?>
            <?php echo validation_errors('<p class="error">', '</p>'); ?>
            <div class="form-group">
                <label for="player_id" class="col-sm-3 control-label">Игровой номер*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="player_id" name="player_id"
                           value="<?php echo set_value('player_id'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Фамилия*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname" name="lastname"
                           value="<?php echo set_value('lastname'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">Имя*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="firstname"
                           value="<?php echo set_value('firstname'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="age" class="col-sm-3 control-label">Возраст*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="age" name="age"
                           value="<?php echo set_value('age'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="position_id" class="col-sm-3 control-label">Амплуа*</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="position_id" name="position_id"
                           value="<?php echo set_value('position_id'); ?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-info">Добавить</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div><!-- /.container -->

</body>
</html>
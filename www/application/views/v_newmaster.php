 <link href="/css/dashboard.css" rel="stylesheet">
 <link type="text/css" href="/js/jquery.lightbox.css" rel="stylesheet" /> 
<div class="container">
    <div class="row">
	<br>
	<h1 class="page-header">Новый игрок</h1>	
		<div class="col-md-8">
		<br>
			<?php echo form_open('/newmaster/login_validation', 'class="form-horizontal"', 'method="POST"'); ?>
	        <?php echo validation_errors('<p class="error">', '</p>');?>
				<div class="form-group">
					<label for="familiya" class="col-sm-3 control-label">Фамилия*</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" id="familiya" name="familiya" value="<?php echo set_value('familiya'); ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-3 control-label">Имя*</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="stag" class="col-sm-3 control-label">Возраст*</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" id="stag" name="stag" value="<?php echo set_value('stag'); ?>" required>
					</div>
				</div>
							
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
					  <button type="submit" class="btn btn-info">Регистрация</button>
					</div>
				</div>
			<?php echo form_close();?>
		</div>
		
    </div>
</div><!-- /.container -->
   
</body>
</html>
 <link href="/css/dashboard.css" rel="stylesheet">
<div class="container-fluid">
    <!--div class="starter-template"-->
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
			<form action="" method="GET" name="testform" id="testform">
			  <ul class="nav nav-sidebar">
				<li class="active"><a href="/users" >Клиенты</a></li>
			  </ul>
			  <? if($session['role'] == 2){?>
			  <ul class="nav nav-sidebar">
				<li><a href="/reg">Создать</a></li>
			  </ul>
			  <? }?>
			 <?// if($session['role'] == 2){?>
			  <ul class="nav nav-sidebar">				
				<li><a href="#" onclick="del_p();">Удалить</a></li>
			  </ul>
			  <?//}?>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">			
			  <br>
			<h1 class="page-header">Клиенты</h1>
				<? if (isset($_GET['info'])) { ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						Клиент успешно удален!
					</div>
				<? } ?>
				<div class="table-responsive">			
					<table class="table table-striped text-left">
					  <tr>
						<th></th>
						<th class = 'thd'> Фамилия </th>
						<th class = 'thd'> Имя </th>
						<th class = 'thd'> Email </th>
						<th class = 'thd'> Пароль </th>
					  </tr>
					  
					  <?
					  foreach($users as $user)
					  {
						
						echo "<tr> ";
						echo "<td><input id='radio' type='radio' class='radio' name='radio' value='".$user['id']."'>
								  <input id='name2' type='hidden' name='name2' value='".$user['name']." ".$user['familiya']."'></td> ";
						echo "<td class = 'tdm'> " . $user['familiya'] . " </td>";
						echo "<td class = 'tdm'> " . $user['name'] . " </td>";
						echo "<td class = 'tdm'> " . $user['email'] . " </td>";
						echo "<td class = 'tdm'> " . $user['password'] . " </td>";
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

<?// if($session['role'] == 2){?>
	<script>
	function del_p(){
		var radio=new Array();
		var name=new Array();
		radio = document.getElementsByName('radio');
		name = document.getElementsByName('name2');
		var tmp = 0;
		for (i=0;i<radio.length;i++){
			if(radio[i].checked) {
				var p = confirm("Вы действительно хотите удалить игрока: " + name[i].value);
				if(p){
					//alert(radio[i].value);
					window.location.replace('/users/del/'+radio[i].value);
				}
				tmp = 1;
			}
		}
		if(tmp == 0) alert('Вы никого не выбрали!');
	}
	</script>
<?//}?>


</body>
</html>


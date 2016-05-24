<link href="/css/signin.css" rel="stylesheet">
	<div class="container">
			
			<?php
				$result = mysql_query("SELECT * FROM personal") or die(mysql_error());
				$data = mysql_fetch_array($result);
			?>
			
			<table align="center" border="4" cellspacing="50" cellpadding="50" style="border-color: #4F0889; background-color: #79F1F8; color: #F46512">
				<tr>
					<th colspan="3" >
						<h1 align="center" >Состав команды ФК Палех на сезон 2015 года</h1>
					</th>
				</tr>
				<?
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
							',$data["familiya"],$data["name"],$data["position"],$data["stag"]);
					}
					while ($data = mysql_fetch_array($result));
				?>
			</table>
			
	</div>
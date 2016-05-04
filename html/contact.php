
			
			
			
			
			
			<div id="holder">
			
			
			
			<?php
			$q = $connection-> query("select * from users where id =".$user->id." and gender='p'");
			if($r = $q->fetch_object()){
			?>
			
				<div class="pagetitle">
					<h2>Cвяжитесь с нами</h2>
				</div>
				
				
				
				
				
				
				
				
				
				<div id="content">
					
					
					
					
					<div id="wide" class="contact">
						
		<h3>ЭКОНОМ ТАКСИ АЛМАТЫ СЛУЖБА ВЫЗОВА ТАКСИ! ВЫЗОВ ТАКСИ ПО НОМЕРУ: 8(727)245-47-47</h3>
						
						<p>ТАКСИ В АЭРОПОРТ АЛМАТЫ С ЦЕНТРА ГОРОДА ОТ - 1200 тенге!
ТАКСИ ПО ГОРОДУ ОТ 400 тенге!</p>						
			
						<div class="clear sep"></div>
			
						
						<form action="to_contact.php" method="post">
						
							<fieldset class="left">
								
							
								<p><label>Your telephone:</label> <br />
								<input type="text" class="text" name="tel" /></p>
							
								
							</fieldset>
							
							<fieldset class="right">
								<p><label>Your message:</label> <br />
								<textarea name="mes"></textarea></p>
								
								<p><input type="submit" class="submit" value="Отправить"></p>
							</fieldset>
							
						</form>
						<h1 style="color:green;">
		
		<?php 

			if(isset($_GET['success'])&&$_GET['success']==1){
				echo "Успешно отправлено :)";
			}

		?>

	</h1>	
						
					</div>		
					
					
					
					
					
					
					
					
				</div>		
			
			
			<?php
			}else{
			?>
			<div class="pagetitle">
					<h2>Уведомлении</h2>
				</div>
				
				
				
				
				
				
				
				
				
				<div id="content">
					
					
					
					
					<div id="wide" class="contact">
						
											
			
						<div class="clear sep"></div>
			
						<?php
						$q1 = $connection->query("select * from message");
						while($r1 = $q1->fetch_object()){
							$q2 = $connection->query("select * from users where id=".$r1->uid);
							if($r2 = $q2->fetch_object()){
						?>
						
						<b>Имя: </b><?php echo $r2->login;?><br>
						<b>Телефон: </b><?php echo $r1->telephone;?><br>
						<b>e-mail: </b><?php echo $r2->email;?><br>
						<b>Сообщение: </b><?php echo $r1->message;?><br><br>
						<div class="clear sep"></div>
						<?php
							}
						}
							?>
					</div>		
					
					
					
					
					
					
					
					
				</div>		
			
			<?php
			}
			?>
			</div>		
			
			
			
			
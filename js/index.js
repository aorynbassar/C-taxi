$(document).ready(function(){

			$("#reg").click(function(){

				loadData();				

			});


		});
		
		function validateForm() {
			
			var login = document.forms["myForm"]["login"].value;
			var email = document.forms["myForm"]["email"].value;
			var password = document.forms["myForm"]["password"].value;
		
			if (login.length < 3) {
				alert("Short login");
				return false;
			}
			
			if(!email.includes("@mail.ru")){
				alert("Write correct email");
				return false;
			}
			
			if(password.length < 6){
				alert("Short password");
				return false;
			}
		}

		function loadData(){
			
			$("#box").html("<div align='center'><form name='myForm' onsubmit='return validateForm()' action='reg.php' method = 'post'><div class='insta'>Registration</div><br><input type = 'text' name = 'login' placeholder='Логин' style='background:#F8F8F8; border-style: solid; border-width: 1px; border-color:#F0F0F0; width:200px; height:30px;' required><br><br><input type = 'text' name = 'email' placeholder='Электронная почта' style='background:#F8F8F8; border-style: solid; border-width: 1px; border-color:#F0F0F0; width:200px; height:30px;' required><br><br><input type='password' name='password' placeholder='Пароль' style='background:#F8F8F8; border-style: solid; border-width: 1px; border-color:#F0F0F0; width:200px; height:30px;' required><br><br><input type='radio' name='gender' value='p'>Посажир</input><input type='radio' name='gender' value='d'>Водитель</input><br><br><button type = 'submit' class='btn'>Вперед</button></form></div>");

		}

		

		

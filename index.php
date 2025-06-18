<?php
    session_start();
    if(isset($_SESSION['fez_login'])&& $_SESSION['fez_login']==true){
        header("location: main.php");
		}
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    				

        <div class="container">
</div>
        <div class="row">
</div>
		<div class="container pg-empty-placeholder text-center float-none" style="width: 508px; height: 339px; margin-top: 320px;">
		<div class="color-overlay">
    					<video autoplay loop muted>
        				<source src="video.mp4" type="video/mp4">
						</video>
						</div>
            <div class="row">
				
				<form action="validar.php" method="POST" class="text-left float-none col-lg-12" style="width: 519px; height: 356px;">
				
                    <div class="form-group">
                        <label for="inputEmail">Endereço E-mail</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="E-mail" required autofocus/>
                        <h6 id="emailHelp" class="form-text">(Nunca compartilharemos os seus dados com terceiros)</h6>
                    </div>
                    <div class="form-group mt-5">
                        <label for="inputPassword">Palavra-Passe</label>
                        <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Palavra-Passe" required/>
                    </div>
                    <div class="form-check mt-4">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"/>
                            Remember Me
                        </label>
                    </div>
					<button type="submit" class="btn btn btn-light pr-4 pl-4 mb-3 mt-4" style="text-align: center; text-transform: capitalize; font-variant: normal; font-size: 18px;">Validar</button>
					
						
				</form>
				
			</div>
		</div>
		

        <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/js/popper.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		
    </body>
</html>
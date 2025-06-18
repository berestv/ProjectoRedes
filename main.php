<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" style="background-image: url('background2.png'); color: #ffffff;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Space Explorer</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" font-family: Aldrich; href="main.php">Space<span>Explorer</span></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
                <li class="nav-item active">                      
</li>                 
                <li class="nav-item">                      
</li>                 
                <li class="nav-item"> 
</li>                 
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                    Opções                                </a> 
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                        <a class="dropdown-item" href="https://pt.wikipedia.org/wiki/Estrela">Estrelas</a> 
                        <a class="dropdown-item" href="https://pt.wikipedia.org/wiki/Galaxia">Galáxias</a> 
                        <a class="dropdown-item" href="https://pt.wikipedia.org/wiki/Planeta">Planetas</a> 
                        <a class="dropdown-item" href="https://www.star-registration.com/">Comprar uma Estrela</a> 
                    </div>                     
                </li>                 
            </ul>

                
				<a href="logout.php" role="button">
					<?php echo "".$_SESSION['email'];?>
                </a>

            <form class="form-inline my-2 my-lg-0">                                   
</form>
        </nav>
        <div class="container" style="text-transform: uppercase; text-align: center; width: 1980px; height: 60px;">
            <div class="title-box">
</div>
            <h1 style="float: center; clear: center; width: 1100px; height: 100px; font-size: 65px; bottom: 0px; right: 0px; left: 0px; top: 0px; vertical-align: middle; text-align: center;">Space Explorer</h1>
            <h2 class="text-center" style="text-transform: uppercase; font-variant: small-caps; font-family: Aldrich; font-size: 19px; line-height: 63px;">Todas as informações sobre o nosso universo</h2>
            <p class="author text-center" style="text-transform: none; font-variant: normal; font-family: Aldrich; font-size: 19px; line-height: 49px;">&copy Bernardo Esteves</p>
            <div class="row" style="width: 1162px;">
                <div class="col-md-10 offset-md-1">
                    <div class="row inf-row">
                        <div class="col-md-4">
                            <h3>Estrelas</h3>
                            <p>Visualize e aprenda mais sobre alguns dos objetos celestes mais interessantes e importantes do nosso universo</p>
                            <p><a role="button" class="btn btn-outline-light" href="https://pt.wikipedia.org/wiki/Estrela" style="font-variant: normal; text-transform: capitalize;">Saber Mais</a></p> 
                        </div>
                        <div class="col-md-4"> 
                            <h3>Galáxias</h3>
                            <p>Visualize e aprenda mais sobre alguns dos aglomerados de matéria espacial existentes no espaço</p>
                            <p>  <a role="button" class="btn btn-outline-light mt-4" href="https://pt.wikipedia.org/wiki/Galaxia" style="font-variant: normal; text-transform: capitalize;">Saber Mais</a></p>
                        </div>
                        <div class="col-md-4">
                            <h3>Planetas</h3>
                            <p>Visualize e aprenda mais sobre os corpos celestes que orbitam estrelas do nosso universo</p>
                            <p></p>
                            <a role="button" class="btn btn-outline-light mt-4" href="https://pt.wikipedia.org/wiki/Planeta" style="font-variant: normal; text-transform: capitalize;">Saber Mais</a> 
                        </div>
                    </div>                     
                </div>
                <div class="row pg-empty-placeholder"></div>
            </div>
        </div>
        <div class="col-md-4 col-lg-12 pb-4" style="background-image: linear-gradient(to right, rgb(0, 0, 0) 0%, rgba(0, 0, 0, 0.38) 63%); background-repeat: repeat; text-transform: uppercase; text-align: center; font-variant: normal; background-position: center center; background-attachment: scroll; margin-top: 525px; margin-bottom: 26px;">
            <h3 style="padding-top: 20px; border-top: 1px solid #ffffff;">Compre uma estrela</h3> 
            <p>O presente perfeito para qualquer ocasião, um pedaço de história do nosso uiniverso</p>
            <p>Uma grande e luminosa esfera de plasma a milhões de anos luz de distância, visível de qualquer lugar na terra!</p>
            <a role="button" class="btn btn-light" href="https://www.star-registration.com/" style="font-variant: normal; text-transform: capitalize;">Mais Informações</a>
        </div>
        <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

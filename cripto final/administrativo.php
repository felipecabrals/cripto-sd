<?php
	session_start();
	if ( $_SESSION['usuarioNiveisAcessoId'] == 1)
	{
		// Exibe a tela HTML
	}
	else{ 
		header("Location: index.php"); // direciona para login (index.php)
	}
?>

<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Encriptação</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" style="color: #fff">Seja Bem Vindo ao Cripto</a>
        <form class="form-inline">
            <a href="sair.php" class="btn btn-outline-success my-2 my-sm-0">Sair</a>
        </form>
    </nav>

    <div class="row">
        <div class="container title">
            <div align="center">
                <h2>
                    CRIPTO
                </h2>
            </div>
        </div>
    </div>
        
        <div class="row" >
            <div class="container" >
               <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div>
                            <div id="encript">
                                <h3>Encriptar</h3>
                                <p>Escolha um arquivo para encriptar</p>
                                <input type="file" id="cript-input" /><br/><br/>
                                <a id="download-cript" class="disabled"><button type="button" id="encriptado-button" class="btn btn-dark ">Download Encriptado</button></a>
                            </div>
                        </div>
                    </div>

                </br>
               <div class="col-md-4">
                        <div>
                            <div >
                                <h3 >Decriptar</h3>
                                <p >Escolha um arquivo já encriptado para decriptação</p>
                                <input type="file" id="decript-input" /><br/><br/>
                                <a id="download-decript" class="disabled"><button type="button" id="decriptado-button" class="btn btn-warning">Download Descriptografado</button></a>
                            </div>
                        </div>
                    </div>
                <div class="col-md-2"></div>
               </div>
            </div>

    </div>

        
    

    <script src="js/aes.js"></script>
    <script src="js/encript.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>

</html>
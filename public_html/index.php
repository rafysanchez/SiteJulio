
<?php
//echo "2";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $email = test_input($_POST["email"]);
  
  // CREATE THE EMAIL
  $headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
  $headers	.= "From: $name <$email>\n";
  $recipient	= "rafysanchez@hotmail.com";
  $subject	= "Contato do Site JCP.";
  $message	= "contato vindo do site JCP";

  // SEND THE EMAIL
  $envio = mail($recipient, $subject, $message, $headers);
  if($envio)
    echo "<h1>Obrigado pelo Contato !</h1>";
  else
    echo "<h3> A mensagem não pode ser enviada </h3>";


  // REDIRECT TO THE THANKS PAGE
  //header("location: thanks.php");
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Transporte Executivo SP com segurança, tranfer, BLINDADOS, SP">
  <meta name="author" content="portalsoftwares ltda- sao paulo-brasil-11999235591">
  <meta property='busca:title' content='Transporte Executivo SP' />
  <meta name="keywords" content="Transporte Executivo SP, Carro de noivas,Carro para noivas,Transfer,Executivos,Placa para casamento,Motorista Particular,Viagens,
   Aluguel de carro para noivas,motorista para casamento,motorista,eventos, Transporte para executivos, Transporte,Executivo, Chevrolet,Ford, especial,carros, 
   Van, Limosine,Viagens,Vip, sedã, Ferrari, Azera, segurança, portalsoftwares, carro de aluguel, carro blindado, motorista, motorista executivo, 
   carro executivo, tranporte de executivos, aluguel de vans, locaçao de aans, locação carro blindado, aluguel carro blindado, aluguel blindado, 
   blindado com motorista, carro executivo, aluguel carro executivo, aluguel carro passeio, micro-onibus, microonibus, onibus, fretamento onibus, 
   eventos, onibus para eventos, vans para eventos,Aluguel de carros com motorista, Aluguel de carros com motorista SP, Executivo Transporte, 
   Motorista Executivo SP, Taxi Executivo, Taxi luxo SP, Transporte, Transporte Executivo SP, Transporte executivo, Traslado, Traslado SP, 
   Turismo, Turismo SP, transporte executivo, aluguel de vans, alugar van, empresa de vans, locadora de vans, carros executivos, van com motorista , Allianz Parque"
  />

  <meta name="siteinfo" content="robots.txt" />
  <meta name="revisit-after" content="1 weeks" />
  <meta name="robots" content="index, follow" />
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
  <meta name="format-detection" content="telephone=no">
  <link rel="canonical" href="http://www.jcpvipexecutivo.com" />
  <link rel="index" title="Alugar carros para Transporte de Executivos | href=" http://www.http://www.jcpvipexecutivo.com/ " /> 
    <meta name="google-site-verification " content="TuE_dGrwSsw3gAZJhnRnCXkcjK09xHUHLP7CgjBmSQ0 " />
    <meta name="application-name " content="www.jcpvipexecutivo.com "/>
	<link rel="alternate " href="http://www.jcpvipexecutivo.com " hreflang="pt-br " /> 
<title>Transporte Executivo SP- Transporte VIP SP- Executive Transfer - Allianz Parque Partner</title>


<link rel="stylesheet " href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css ">
<title>Transporte Executivo SP- Transporte VIP SP- Executive Transfer - Allianz Parque Partner</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css " rel="stylesheet ">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i
    " rel="stylesheet ">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i " rel="stylesheet ">
    <link href="vendor/font-awesome/css/font-awesome.min.css " rel="stylesheet ">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css " rel="stylesheet ">

<style>
body{
    height:100%;
}

.banner{
    height:100%;
    background: url('img/julioFundo.jpeg') center center no-repeat;
    background-size:contain;
}
</style>

    
  </head>

  <body>
    <div class="banner ">
    <div class="overlay "></div>
<!--     <video playsinline="playsinline " autoplay="autoplay " muted="muted " loop="loop ">
      <source src="mp4/bg.mp4 " type="video/mp4 ">
    </video> -->

    <div class="masthead ">
      <div class="masthead-bg "></div>
      <div class="container h-100 ">
        <div class="row h-100 ">
          <div class="col-12 my-auto ">
            <div class="masthead-content text-white py-5 py-md-0 ">
              <h1 class="mb-3 ">Online Breve!</h1>
              <p class="mb-5 ">Estamos dando duro para terminar este site. Nosso propósito é abri-lo em
                <strong>Setembro 2018</strong>! Preencha seu email para atualizações</p>
				<p> <strong>Nosso número: 11-98148-4809</strong> </p>
              <div class="input-group input-group-newsletter ">
                <form method="POST" action=""> 
                  <input type="email " class="form-control " placeholder="Enter email... " aria-label="Enter email...
    " aria-describedby="basic-addon " name="email">
                  <div class="input-group-append ">
                  <input class="btn btn-secondary " type="submit" name="submit" value="Me avise!"> 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons ">
      <ul class="list-unstyled text-center mb-0 ">
        <li class="list-unstyled-item ">
          <a href="# ">
            <i class="fa fa-twitter "></i>
          </a>
        </li>
        <li class="list-unstyled-item ">
          <a href="# ">
            <i class="fa fa-facebook "></i>
          </a>
        </li>
        <li class="list-unstyled-item ">
          <a href="# ">
            <i class="fa fa-instagram "></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js "></script>

  </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test d'éligibilité au don de sang</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
	<script src="https://kit.fontawesome.com/6bc05cacdd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/test.css">
</head>
<body>
	<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="img/lr12.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Groupe-sanguin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Faire-un-don</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Conseil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">About-Us</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary ms-lg-3" style="font-size: 15px;">Rejoignez-nous</a>
                </div>
            </div>
        </nav><!-- //NAVBAR -->
    <section>
	    <div class="contaiiner">
	        <div class="phone">
                <header>
                    <div class="blood-drop"></div>
                </header>
                <h1>Donate blood</h1>
                
                    <p id="p" style="font-family: 'Urbanist', sans-serif;">
                       Avant de vous inscrire comme donneur de sang<br>La plupart des gens peuvent donner du sang, mais parfois il n'est pas possible d'être un donneur de sang.<br>
                       Veuillez répondre aux cinq questions suivantes afin que nous puissions vous indiquer si le don de sang vous convient.
                       Vos réponses ne sont en aucun cas enregistrées<br>Ces questions ne s'appliquent que si vous souhaitez vous inscrire en tant que nouveau donneur de sang.
                    </p>
                
                
                <form>
                <h3>1. Vous avez entre 18 et 65 ans ?</h3>
                <p class="radio">
                    <input type="radio" id="yes" name="age">
                    <label for="f-option">Yes</label>
        
                    <input type="radio" id="no" name="age">
                    <label for="s-option">No</label>
                </p>
                   
                <h3>2. Pesez-vous actuellement moins de 50 kg?</h3>
                <p class="radio">
                    <input type="radio" id="up" name="kg">
                    <label for="f-option">Yes</label>
            
                    <input type="radio" id="lees" name="kg">
                    <label for="s-option">No</label>
                </p>
               
                <h3>3. Avez-vous atteintes de maladies génétiques du sang.?</h3>
                <p class="radio">
                    <input type="radio" id="mount" name="prd">
                    <label for="f-option">Yes</label>
            
                    <input type="radio" id="try" name="prd">
                    <label for="s-option">No</label>
                </p>
                <h3>4. Avez-vous atteintes de maladies chroniques, telles que le diabète, l'hypertension artérielle?</h3>
                <p class="radio">
                    <input type="radio" id="all" name="jan">
                    <label for="f-option">Yes</label>
            
                    <input type="radio" id="as" name="jan">
                    <label for="s-option">No</label>
                </p>
              
                <h3>5. Avez-vous déjà eu un cancer autre que le carcinome basocellulaire ou le carcinome cervical insitu (CIN) ?</h3>
                <p class="radio">
                    <input type="radio" id="main" name="cancer">
                    <label for="f-option">Yes</label>
            
                    <input type="radio" id="fain" name="cancer">
                    <label for="s-option">No</label>
                </p>
                <a class="submit" id="btn" onclick="setTimeout()">Result!</a>
                </form>
		    </div>
        </div>
    </section>
<section id="about-us">
	<footer class="footer">
		<div class="contaiiiner">
		  <div class="row">
			<div class="footer-col">
			  <h4><img src="img/lr122.png" width="130px" class="logo"></h4>
              <p>Bienvenue sur notre Site Web, Ici vous pouvez donner du sang et trouver des donneurs de sang avec des informations et des conseils sur le don de sang et quelques statiques pour le don de sang dans notre pays.</p>
		 </div>
			<div class="footer-col">
			  <h4>Liens utiles</h4>
			  <ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="index.php">Information</a></li>
				<li><a href="index.php">Groupe-sanguin</a></li>
				<li><a href="index.php">Faire-un-don</a></li>
				<li><a href="index.php">Conseil</a></li>
			  </ul>
			</div>
			<div class="footer-col">
			  <h4>Liens utiles</h4>
			  <ul>
				<li><a href="test.php">Test</a></li>
				<li><a href="test.php">Nouveau donneur</a></li>   
			  </ul>
			</div>
			<div class="footer-col">
			  <h4>S'abonner</h4>
			  <div class="social-links">
                <a><i class="fab fa-youtube" style="font-size: 15px;"></i></a>
				<a><i class="fab fa-facebook-f" style="font-size: 15px;"></i></a>
				<a><i class="fab fa-twitter" style="font-size: 15px;"></i></a>
				<a><i class="fab fa-instagram" style="font-size: 15px;"></i></a>
			  </div>
			</div>
		  </div>
		</div>
		<hr>
		<p class="copyright">All Rights Reserved © by <a>AYMAN NAKRACHI</a></p>
	 </footer>
</section>
  <script>
    document.getElementById("btn").addEventListener("click",f1);
        function f1(){
            var n=document.getElementById('yes').value+"/n"
            +document.getElementById('lees').value+"/n"
            +document.getElementById('try').value+"/n"
            +document.getElementById('as').value+"/n"
            +document.getElementById('fain').value+"/n"
          if(document.getElementById('yes').checked && 
            document.getElementById('lees').checked &&
            document.getElementById('try').checked &&
            document.getElementById('as').checked &&
            document.getElementById('fain').checked
            ){
      
      
          const ok = window.location.href="insc.php";
              
      
              swal({
      title: "Bien!",
      text: "Merci de répondre. Vous devriez être éligible pour faire un don, alors continuez à vous inscrire.",
      icon: "success",
      button: ok
      });        
      }
          else{
              const cancel= window.location.href="index.php";
              swal({
      title: "ooops!!",
      text: "Merci. Sur la base des réponses que vous avez fournies, nous vous conseillons de ne pas vous inscrire comme donneur de sang!",
      icon: "warning",
      button: cancel
      
      });
      }
          }
        
      
  </script>
</body>
</html>
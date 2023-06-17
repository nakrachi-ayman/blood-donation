<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau donneur</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://kit.fontawesome.com/6bc05cacdd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/insc.css">
</head>
<body>
	<?php require("cnx.php");?>
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
                    <a class="btn btn-primary ms-lg-3" style="font-size:15px;">Rejoignez-nous</a>
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
                <h3>Et faire la différence</h3>
                <p>Pourquoi attendre pour sauver une vie ? Les excuses ne sauvent jamais des vies, le don de sang le fait. Chaque goutte aidera. Inscrivez-vous pour obtenir plus d'informations et peut-être vous engager à donner du sang.</p>
	                <form class="w-80 needs-validation" action='insert.php' method='POST'>
                        <div class="input-group was-validated">
                    
                            <input type="text" name="nom" class="form-control"  placeholder=" " id="nom"  required>
					        <label for="text">Nom</label>
			        
				    
                        </div>
				
                        <div class="input-group was-validated">
                    
                            <input type="text" name="prenom" class="form-control" placeholder=" "  id="prenom" required>
					        <label for="text">Prenom</label>
			        
                        </div>
				
		                <div class="input-group was-validated">
                    
                            <input type="email" name="email" class="form-control"  pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,3}" placeholder=" " id="email" required>
					        <label for="email">Email</label>
			        
                        </div>
				        <div class="input-group was-validated">
                    
                            <input type="tel" name="tel" class="form-control"  pattern="[0-9]{10}" placeholder=" " id="tel" required>
					        <label for="tel">Télephone</label>
			        
                        </div>
				        <div class="input-group was-validated">
			                <label for="text">Ville</label>
			                <select  name="ville" class="form-control" id="ville"  required>
						        <option></option>
						        <option value="Agadir">Agadir</option>
						        <option value="Al Hoceima">Al Hoceima</option>
						        <option value="Azilal">Azilal</option>
						        <option value="Beni Mellal">Beni Mellal</option>
						        <option value="Ben Slimane">Ben Slimane</option>
						        <option value="Boulemane">Boulemane</option>
						        <option value="Casablanca">Casablanca</option>
						        <option value="Chaouen">Chaouen</option>
						        <option value="El Jadida">El Jadida</option>
						        <option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
						        <option value="Er Rachidia">Er Rachidia</option>
						        <option value="Essaouira">Essaouira</option>
						        <option value="Fes">Fes</option>
						        <option value="Figuig">Figuig</option>
						        <option value="Guelmim">Guelmim</option>
						        <option value="Ifrane">Ifrane</option>
						        <option value="Kenitra">Kenitra</option>
						        <option value="Khemisset">Khemisset</option>
						        <option value="Khenifra">Khenifra</option>
						        <option value="Khouribga">Khouribga</option>
						        <option value="Laayoune">Laayoune</option>
						        <option value="Larache">Larache</option>
						        <option value="Marrakech">Marrakech</option>
						        <option value="Meknes">Meknes</option>
						        <option value="Nador">Nador</option>
						        <option value="Ouarzazate">Ouarzazate</option>
						        <option value="Oujda">Oujda</option>
						        <option value="Rabat-Sale">Rabat-Sale</option>
						        <option value="Safi">Safi</option>
						        <option value="Settat">Settat</option>
						        <option value="Sidi Kacem">Sidi Kacem</option>
						        <option value="Tangier">Tangier</option>
						        <option value="Tan-Tan">Tan-Tan</option>
						        <option value="Taounate">Taounate</option>
						        <option value="Taroudannt">Taroudannt</option>
						        <option value="Tata">Tata</option>
						        <option value="Taza">Taza</option>
						        <option value="Tetouan">Tetouan</option>
						        <option value="Tiznit">Tiznit</option>
					        </select>
		                </div>

		                <div class="input-group was-validated">
			                <label for="text">Type de sang</label>
			                <select name="tb" class="form-control" id="tb"  required>
				                <option></option>
				                <option>O<sup>+</sup></option>
				                <option>O<sup>-</sup></option>
				                <option>A<sup>+</sup></option>
				                <option>A<sup>-</sup></option>
				                <option>B<sup>+</sup></option>
				                <option>B<sup>-</sup></option>
				                <option>AB<sup>+</sup></option>
				                <option>AB<sup>-</sup></option>
			                </select>
			        
		                </div>
				
		                <div class="input-group was-validated">
			                <label for="time">Temps d'appel</label>
			                <select name="time" class="form-control" id="time"  required>
				                <option></option>
				                <option>24H</option>
				                <option>8H-12H</option>
				                <option>12H-18H</option>
				                <option>18H-00H</option>
			                </select>
		                </div>
		                <button class="btn" id="btn" name="btn" type="submit">Nouveau donneur</button>
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
</body>
</html>
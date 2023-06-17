<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6bc05cacdd.js" crossorigin="anonymous"></script>
    <title>Marocain Donateur</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" >
                <img class="logo" src="img/lr12.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#Accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Information">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Groupe-sanguin">Groupe-sanguin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Faire-un-don">Faire-un-don</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Conseil">Conseil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About-Us</a>
                    </li>
                </ul>
                <a class="btn btn-primary ms-lg-3" style="font-size:15px ;">Rejoignez-nous</a>
            </div>
        </div>
    </nav><!-- //NAVBAR -->
    
    <section id="Accueil"> 
    <!-- HERO -->
    <div class="hero vh-120 d-flex ">
        <div class="container">
            <div class="text-center" id="form">
                <br><br><br><br>
                <form  method="POST" id="loginform">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <select name="ville-n" class="form-select" id="ville-n"  required>
                                <option >Select votre ville</option>
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
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <select name="tb-n" id="tb-n" class="form-select" required>
                                <option>Select votre type de sang</option>
                                <option value="o+">O<sup>+</sup></option>
                                <option value="o-">O<sup>-</sup></option>
                                <option value="a+">A<sup>+</sup></option>
                                <option value="a-">A<sup>-</sup></option>
                                <option value="b+">B<sup>+</sup></option>
                                <option value="b-">B<sup>-</sup></option>
                                <option value="ab-">AB<sup>+</sup></option>
                                <option value="ab-">AB<sup>-</sup></option>
                            </select>
                        </div>
                    </div>    
                        <br>
                        <input style="font-family: 'Courier New', Courier, monospace;" type="submit" class="btn btn-primary" name="btn" id="serch" value="Rechercher" disabled> 
                    </form>
                </div>
                <br>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <table id="tableau" class="table sticky table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-primary">Nom</th>
                                <th scope="col" class="text-primary">Prenom</th>
                                <th scope="col" class="text-primary">Ville</th>
                                <th scope="col" class="text-primary">Type de sang</th>
                                <th scope="col" class="text-primary">Télephone</th>
                                <th scope="col" class="text-primary">Temps d'appel</th>
                            </tr>
                        </thead>
                            <tr>
                                <?php
                                include_once('cnx.php');
                                if (isset($_POST["btn"])){  
                                    $ville=$_POST['ville-n'];
                                    $tb=$_POST['tb-n'];
                                    $sql = "SELECT * FROM donor where ville='$ville' and tb='$tb'";
                                    $result = $conn->query($sql);
        
                                    if ($result) {
                                        while($row = $result->fetch()){?>
                                            <tbody>
                                                <tr>
                                                <td data-label="nom"><?php echo $row['firstname'];?></td>
                                                <td data-label="prenom"><?php echo $row['lastname'];?></td>
                                                <td data-label="ville"><?php echo $row['ville'];?></td>
                                                <td data-label="blood type"><?php echo $row['tb'];?></td>
                                                <td data-label="tele"><?php echo $row['tel'];?></td>
                                                <td data-label="time call"><?php echo $row['time'];?></td>
                                                </tr>
                                            </tbody>
                            </tr>
                            <?php
                                }; 
                                }
                                }
        
                            ?>
                    </table>
                </div>
        </div>
    </div><!-- //HERO -->

</section>
    <section id="Information">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <h6 class="text-primary text-center">Information</h6>
                    <h1 class="text-center" style="text-transform: uppercase;">Nos informations</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service card-effect bounceInUp">
                        <div class="card">
                            <img class="card-img-top rounded" src="img/sang.jpg" style="height:275px;" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title text-center text-success">DEFINITION DU SANG:</h4>
                              <p class="card-text text-center">Liquide rouge, visqueux, qui circule dans les vaisseaux,
                                à travers tout l'organisme, où il joue des rôles
                                essentiels et multiples.
                                Le sang est composé à 55% de plasma et à
                                45% de cellules, globules rouges,
                                globules blancs et plaquettes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service card-effect bounceInUp">
                        <div class="card">
                            <img class="card-img-top rounded" src="img/donner.jpg" style="height:275px ;"  alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title text-center text-success">DEFINITION DU DON DU SANG:</h4>
                              <p class="card-text text-center">Le don du sang:<br> est une pratique qui consiste
                                à se faire prélever une partie de son sang,
                                ou de ses produits comme le plasma et
                                les plaquettes sanguines,afin de l'utiliser
                                pour des transfusions médicales.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service card-effect bounceInUp">
                        <div class="card">
                            <img class="card-img-top rounded" src="img/blood1.jpg" style="height:275px ;" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title text-center text-success">TYPE DE DON DU SANG:</h4>
                              <p class="card-text text-center">Sang total :<br>
                                c'est le type de don de sang le plus courant ;
                                Il comprend tous les composants du sang
                                (globules rouges, plasma et plaquettes).
                                •Plaquettes.
                                •Plasma.
                                •Des globules rouges.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row mb-5">
                <div class="col-lg-12">
                    <br><br><br>
                    <h1 class="text-primary text-center">IMPORTANCE DU DON DU SANG</h1>
                    <br>
                    <p class="text-center" style="font-size: 17px;">La transfusion sanguine fait partie des opérations qui contribuent à sauver des vies; Il est donné dans de tels cas:<br>
                        • Lorsque des complications surviennent chez les femmes enceintes, telles que des saignements avant, pendant ou après l'accouchement.
                        <br>• Pour les patients pendant les opérations chirurgicales telles que les opérations cardiaques, les vaisseaux sanguins, la chirurgie de transplantation d'organes et autres.
                        <br>• Pour les personnes atteintes de maladies du sang.
                        <br>• Pour les personnes blessées dans des accidents.
                        <br>• des patients atteints du cancer.
                    </p>
                </div>
            </div>   
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iconbox text-center " style="font-size: 30px;">
                        <i class="fa-solid fa-person-dress text-danger"  aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Femmes avec<br>
                        complication<br>
                        de grossesse. 
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iconbox text-center "  style="border-radius: 50%; font-size: 30px;">
                        <i class="fa-solid fa-child text-danger" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Enfants souffrant<br>
                        d'anémie sévère due<br>
                        à la malnutrition. 
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iconbox text-center"  style="border-radius: 50%; font-size: 30px;">
                        <i class="fa-solid fa-user-injured text-danger" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Personnes souffrant<br>
                        de troubles graves<br>
                        suite à des catastrophes.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iconbox text-center"  style="border-radius: 50%; font-size:30px;">
                        <i class="fa-solid fa-bed-pulse text-danger" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Procédures médicales<br>
                        complexes et patients<br>
                        atteints de cancer. 
                    </p>
                </div>
            </div>  
        </div>
    </section>
    <section id="Groupe-sanguin">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h1 class="text-danger text-center">GROUPE SANGUIN</h1>
                    <br>
                    <p class="text-center">
                        Un groupe sanguin est une classification reposant sur la présence ou l'absence de substances antigéniques héritées à la surface des globules rouges (hématies). Ces antigènes peuvent être des protéines, des glucides, des glycoprotéines ou des glycolipides, selon le système de groupe sanguin, et certains de ces antigènes sont également présents à la surface d'autres types de cellules de différents tissus.
                        Les divers groupes sanguins sont regroupés en systèmes. Appartient à un même système de groupes sanguins l'ensemble des épitopes ou phénotypes résultant de l'action des divers allèles d'un même gène ou de gènes étroitement liés.
                    </p>
                </div>
            </div>   
            <div class ="card" style="background-color: transparent;">
                <div class ="row">
                    <div class ="col-md-4">
                        <img src = "img/bld1.jpeg" style="height: 250px;" class = "img-fluid rounded">
                    </div>
                    <div class ="col-md-8">
                        <h2 class ="card-title mt-3 text-danger text-center">COMPABILITÉ DES GROUPES SANGUINS</h2>
                        <p class="text-center">
                            Avant de procéder à une transfusion, il est primordial qu’il y ait compatibilité entre le groupe sanguin du donneur et celui du receveur. Si l'on transfuse au malade un composant sanguin d'un groupe non compatible, son système immunitaire va reconnaître la présence de substances qui lui sont étrangères, appelées « antigènes ». Une incompatibilité peut entraîner le rejet du composant sanguin et une aggravation de l'état du malade. Des tests de compatibilité sont réalisés à l'hôpital avant chaque transfusion.
                        </p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-center">
                       <img src="img/bt-a.png" style="height:200px ; width: 150px;" class="img-fluid"> 
                    </div>
                    <h4 class="text-danger text-center">Groupe A :</h4>
                    <p class="text-center">La surface des globules rouges contient<br>
                        l'antigène A et le plasma contient des<br>
                        anticorps anti-B. L'anticorps anti-B<br>
                        attaquerait les cellules sanguines<br>
                        contenant l'antigène B
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-center">
                       <img src="img/bt-b.png" style="height:200px ; width: 150px;" class="img-fluid"> 
                    </div>
                    <h4 class="text-danger text-center">Groupe B :</h4>
                    <p class="text-center">La surface des globules rouges contient<br>
                        l'antigène B et le plasma contient des<br>
                        anticorps anti-A. L'anticorps anti-A<br>
                        attaquerait les cellules sanguines<br>
                        qui contiennent l'antigène A..
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-center">
                       <img src="img/bt-o.png" style="height:200px ; width: 150px;" class="img-fluid"> 
                    </div>
                    <h4 class="text-danger text-center">Groupe O :</h4>
                    <p class="text-center">Le plasma contient à la fois des anticorps<br>
                        anti-A et anti-B, mais la surface des<br>
                        globules rouges ne contient aucun antigène
                        A ou B. n'importe groupe<br>
                        sanguin peut recevoir ce type 
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="text-center">
                       <img src="img/bt-ab.png" style="height:200px ; width: 150px;" class="img-fluid"> 
                    </div>
                    <h4 class="text-danger text-center">Groupe AB :</h4>
                    <p class="text-center">Les globules rouges possèdentà la fois
                        les <br>antigènesA et B,mais le plasma ne<br>
                        contient pas d'anticorps anti-A ou<br> anti-B.
                        type AB recevoirn'importe<br> quel groupe sanguin ABO.
                    </p>
                </div>
            </div>    
            <div id="content">
                <h3>Select the donor blood type:</h3>
                    <div id="blood_selector" style="background-color: transparent;">
                        <div>O−</div>
                        <div>O+</div>
                        <div>A−</div>
                        <div>A+</div>
                        <div>B−</div>
                        <div>B+</div>
                        <div>AB−</div>
                        <div>AB+</div>
                    </div>
                    <div id="blood_content">
                      
                      <div class="main_bag">
                        <div class="blood"></div>
                      </div>
                    </div>
                    <div id="center_via_c">
                      <div class="center_via">
                        <div class="blood_via"></div>
                      </div>
                    </div>
                    <div id="humans">
                      <div class="human left">
                        <div class="scribble"><span class="blood_type">O−</span>
                          <div class="head"></div>
                          <div class="body"></div>
                        </div>
                        <div class="via"></div>
                        <div class="blood_via"></div>
                      </div>
                      <div class="human right">
                        <div class="scribble"><span class="blood_type">O+</span>
                          <div class="head"></div>
                          <div class="body"></div>
                        </div>
                        <div class="via"></div>
                        <div class="blood_via"></div>
                      </div>
                      <div class="human left">
                        <div class="scribble"><span class="blood_type">A−</span>
                          <div class="head"></div>
                          <div class="body"></div>
                        </div>
                        <div class="via"></div>
                        <div class="blood_via"></div>
                      </div>
                      <div class="human right">
                        <div class="scribble"><span class="blood_type">A+</span>
                          <div class="head"></div>
                          <div class="body"></div>
                        </div>
                        <div class="via"></div>
                        <div class="blood_via"></div>
                      </div>
                      <div class="human left">
                    <div class="scribble"><span class="blood_type">B−</span>
                      <div class="head"></div>
                      <div class="body"></div>
                    </div>
                    <div class="via"></div>
                    <div class="blood_via"></div>
                  </div>
                  <div class="human right">
                    <div class="scribble"><span class="blood_type">B+</span>
                      <div class="head"></div>
                      <div class="body"></div>
                    </div>
                    <div class="via"></div>
                    <div class="blood_via"></div>
                  </div>
                  <div class="human left">
                    <div class="scribble"><span class="blood_type">AB−</span>
                      <div class="head"></div>
                      <div class="body"></div>
                    </div>
                    <div class="via"></div>
                    <div class="blood_via"></div>
                  </div>
                  <div class="human right">
                    <div class="scribble"><span class="blood_type">AB+</span>
                      <div class="head"></div>
                      <div class="body"></div>
                    </div>
                    <div class="via"></div>
                    <div class="blood_via"></div>
                  </div>
                </div>
              </div>
        </div>  
    </section>
    <section id="Faire-un-don">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="pricing card-effect text-center">
                        <i class="fa-solid fa-clipboard-check text-primary" style="font-size:30px ;"></i>
                        <h2 class="text-primary" style="text-transform: uppercase;">Les conditions</h2>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le donneur doit être en bonne santé et ne souffrir d'aucune maladie infectieuse</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le donneur doit avoir entre 18 et 65 ans.</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le poids du donneur ne doit pas être inférieur à 50 kg.</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le pourcentage d'hémoglobine pour les hommes devrait être de 14 à 17 g et pour les femmes de 12 à 14 g.</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le pouls doit être compris entre 50 et 100 par minute.</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>La température ne doit pas dépasser 37 degrés Celsius.Que la tension artérielle moyenne est inférieure à 120/80 mm Hg.</a>
                            </li>
                        </ul>
                        <a class="btn btn-success" href="test.php"><i class="fa-solid fa-clipboard-list"></i>  Test</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="pricing card-effect text-center">
                        <i class="fa-solid fa-heart-circle-bolt text-primary" style="font-size:30px ;"></i>
                        <h2 class="text-primary" style="text-transform: uppercase;">Les avantage</h2>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Augmenter l'activité de la moelle osseuse pour produire de nouvelles cellules sanguines (globules rouges, globules blancs)</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Augmenter l'activité de la circulation sanguine.</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le don de sang aide à réduire le fer dans le sang, car il est considéré comme l'une des causes des maladies cardiaques.</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Susceptibles de souffrir de maladies circulatoires</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Susceptibles de souffrir de maladies de leucémie..</a>
                            </li>
                            <li>
                                <i class='bx bxs-check-circle text-success'></i>
                                <a>Le don de sang est également bénéfique pour votre bien-être mental et émotionnel</a>
                            </li>
                            
                            
                        </ul>
                        <a class="btn btn-success" href="test.php"><i class="fa-solid fa-clipboard-list"></i> Test</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="pricing card-effect text-center">
                        <i class="fa-solid fa-circle-info text-primary" style="font-size:30px ;"></i>
                        <h2 class="text-primary" style="text-transform: uppercase;">Non éligible</h2>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li>
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <a>Moins de 18 ans.</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <a>Personnes atteintes de maladies infectieuses telles que (SIDA, hépatite B et C, syphilis, paludisme)</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <a>Les personnes atteintes de maladies génétiques du sang.</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <a>Personnes souffrant d'anémie sévère.</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <a>Les personnes atteintes de maladies chroniques, telles que le diabète, l'hypertension artérielle, le cancer.</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-xmark text-danger"></i>
                                <a>Avoir eu de piercing ou de tatouages dans les 4 derniers mois précédant le don.</a>
                            </li>
                            
                        </ul>
                        <a class="btn btn-success" href="test.php"><i class="fa-solid fa-clipboard-list"></i> Test</a>
                    </div>
                </div>
            </div>
            <div class="row">    
                <div id="text" class ="col-lg-12 col-md-12 col-sm-12">
                    <br><br>
                    <h2 class ="card-title mt-3 text-danger text-center">UNE GOUT DU SANG EGAL UNE VIE.</h2>
                    <h4 class ="card-title mt-3 text-danger text-center">FAITES UN DON S'IL VOUS PLAIT.</h4>
                    <p class="text-center">
                        "Peu de votre sang peut donnerde nombreuses années
                        de vie a QUELQU'UN."<br>
                        "Ne refusez jamais de donner du sang si vous pouvez,
                        comme vous peut être le prochain nécessiteux."
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 center">
                    <div  class="embed-responsive embed-responsive-16by9">
                        <video id="vedio" class=" embed-responsive-item " style="border-radius: 20px;" poster="img/Blood-Donation-1.jpg" controls >
                            <source src="project-fr.mp4"  type="video/mp4"/>
                        </video>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="bd">
                    <a class="botn" onclick="setTimeout()">
                        <i class="fa-solid fa-heart-circle-plus"></i>
                        <span class="text text-center">
                            Nouveau donneur
                        </span>
                        <span class="loading-animate"></span>
                    </a>
            </div>
        </div>            
    </section>
    
    <section id="Conseil">
        <div class ="profile-area">
            <div class ="container">
                <div class ="row">
                    <div class ="col-lg-6 col-md-12 col-sm-12">
                        <div class ="card text-center" id="card">
                            <div class ="img1">
                                <img src="img/lab.jpg">
                            </div>
                            <div class ="circle">
                                <span><i class="fa-solid fa-notes-medical"></i></span>
                            </div>
                            <div class ="main-text">
                                <h2 class="text-success">Conseils avant le don de sang :</h2>
                                <ul class="list-unstyled mb-4">
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>Assurez-vous d’être en forme : ne donnez pas lorsque vous vous sentez fatigué(e), ressentez une gêne ou une douleur.</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>Evitez de venir à jeun : optez pour un petit-déjeuner ou un déjeuner équilibré.</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>Hydratez-vous régulièrement : n’hésitez pas à boire de l’eau ou des jus de fruits avant et après le don.</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>Evitez les boissons alcoolisées dans les heures qui précèdent le don.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class ="col-lg-6 col-md-12 col-sm-12 ">
                        <div class ="card text-center" id="card">
                            <div class ="img1">
                                <img src="img/lab.jpg">
                            </div>
                            <div class ="circle">
                                <span><i class="fa-solid fa-notes-medical"></i></span>
                            </div>
                            <div class ="main-text">
                                <h2 class="text-success">Conseils après le don de sang :</h2>
                                <ul class="list-unstyled mb-4">
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>Après le don, reposez-vous et prenez une collation, et après 10-15 minutes, vous pouvez quitter le lieu du don</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>Évitez toute activité physique intense ou soulever des objets lourds pendant 5 heures après le don.</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a>En cas de vertige, il est recommandé de s'allonger sur le dos, les pieds surélevés.</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-check-circle text-success'></i>
                                        <a> Buvez beaucoup de liquides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="banner-container">
                    <div class="banner">
                        <div class="doc">
                            <img src="img/docteur.png" alt="">
                        </div>
                        <div class="content">
                            <h6>Etre un</h6>
                            <h5>super-héros et</h5>
                            <h4>donner du sang</h4>
                            <br>
                            <a href="test.php" class="btn">Donate</a>
                        </div>
                        <div class="logo">
                            <img src="img/lr122.png" alt="">
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="banner-container">
                    <div class="banner">
                        <div class="doc">
                            <img src="img/docteur.png" alt="">
                        </div>
                        
                        <div class="content">
                            <i class="fa-solid fa-person"></i>
                            <span class="text-white">=</span>
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person"></i>
                            <p></p>
                            <h5 style="font-size: 19px;">1 Litre peut toucher</h5>
                            <h6> 3 vies</h6>
                            <br>
                            <a href="test.php" class="btn">Donate</a>
                        </div>
                        <div class="logo">
                            <img src="img/lr122.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>              
    </section>
    <section id="about-us">
        <footer class="footer">
            <div class="contaiiner">
              <div class="roaw">
                <div class="footer-col">
                  <h4><img src="img/lr122.png" width="130px" class="logo"></h4>
                       <p>Bienvenue sur notre Site Web, Ici vous pouvez donner du sang et trouver des donneurs de sang avec des informations et des conseils sur le don de sang et quelques statiques pour le don de sang dans notre pays.</p>
             </div>
                <div class="footer-col">
                  <h4>Liens utiles</h4>
                  <ul>
                    <li><a href="#Accueil">Accueil</a></li>
                    <li><a href="#Information">Information</a></li>
                    <li><a href="#Groupe-sanguin">Groupe-sanguin</a></li>
                    <li><a href="#Faire-un-don">Faire-un-don</a></li>
                    <li><a href="#Quantité">Conseil</a></li>
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
                    <a><i class="fab fa-youtube"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <p class="copyright">All Rights Reserved © by <a>AYMAN NAKRACHI</a></p>
         </footer>
    </section>
    <script>
        document.querySelector('.botn').addEventListener('click', (evt) => {
        evt.target.classList.add('loading')
        setTimeout(function(href){
        evt.target.classList.remove('loading')
        ,window.location.href="test.php";
    },   2000);
  
})
    </script>
    <script>
        var ville=document.getElementById('ville-n');
        var  tb=document.getElementById('tb-n');
        var  btn=document.getElementById('serch');
        var opt=ville.options[ville.selectedIndex].value;
        var opt2=tb.options[tb.selectedIndex].value;
            if(opt && opt2){
                btn.removeAttribute('disabled');
            }
            else{
                btn.setAttribute('disabled');
            }
       
    </script>
    <script src="js/groupe-sanguin.js"></script>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
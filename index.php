<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Style.css">
    
    <title>Application PetsCare</title>
</head>
<body>
 <!--<div class="container-fluid arrierePlan" ></div>
    <div class="container"></div>!-->
  <script src="js/bootstrap.js"></script> 

    <header>   
        <div> 
            <h2>Bienvenu dans votre Applications <span>PetsCare</span> </h2>
         </div> 
    </header>
    
    <div class="formulaire">
        <form action="login.php"
         method="post" >
            <h4>Authentification</h4>
            <hr>
            <div class="contenu">
            <div>
            <label>Email</label>
            <input type="email" name="mail" required />
            </div>
            <div>
            <label>Mot de passe </label>
            <input type="password" name="password" required />
            </div>
            <div>
            <input class="boutton"  name="envoi" type="submit" value="Se connecter" />
            <p>vous avez pas de compte? <a href="#">S'inscrire</a></p>
            </div>
        </div>
    </form>
    </div>  
</body>
</html>
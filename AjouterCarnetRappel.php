<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Style.css">
    
    <title>Application PetsCare</title>
</head>
<body>
  <!--  <div class="container-fluid arrierePlan" ></div>!-->
<script src="js/bootstrap.js"></script> 

    <header>   
        <div> 
            <h2>Ajouter un nouveau carnet</h2>
         </div> 
    </header>
    
    <div class="formulaire">
        <form action="ajouterCarnetDB.php"
         method="post" >
         <div>
            <div>
            <label>Id client</label>
            <input type="number" name="id_client" required />
            </div>
            <div>
            <label>Nom de l'animal</label>
            <input type="text" name="nom_animal" required />
            </div>
            <div>
            <label>Catégorie</label>
            <input type="text" name="categorie_animal" required />
            </div>
            <div>
            <label>Date de naissance</label>
            <input type="date" name="date_naissance" required />
            </div>
            <div>
            <label>Date de vaccination</label>
            <input type="date" name="date_vaccination" required />
            </div>
            <label>Date de rappel</label>
            <input type="date" name="date_rappel" required />
            </div>
            <div>
            <input class="boutton"  name="creerCarnet" type="submit" value="Ajouter" />
            </div>
        </div>
    </form>
    </div>  
</body>
</html>
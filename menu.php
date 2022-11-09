<?php 
session_start();

    if(!isset($_SESSION["id"])){
        $menu = [
    
            "index.php" => "Acceuil",
            "connexion.php" => "Se connecter",
            "inscription.php" => "S'inscrire"
        
        ];
        
    }else{
        $menu = [
            "index.php" => "Acceuil",
            "formulaireVoiture.php" => "Enregistrer ma voiture",
            "formulaireAnnonce.php" => "Créer une annonce",
            "deconnexion.php" => "Se déconnecter"
        ];
        
    }



function afficherMenu($menu)
{
    "<nav>
    <img src='img/VentaCar.png' width='300px' alt=''>
    <ul>";
    foreach ($menu as $key => $value) {
        echo '<li><a href="'.$key.'">'.$value.'</a> </li>';
    }
    '</ul>
    </nav>';
}
?>

<style>
    li{
        list-style: none;
    }
  
</style>
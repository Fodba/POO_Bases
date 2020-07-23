<?php
setlocale(LC_TIME, "fr_FR");
// date_default_timezone_set("Europe/Paris");
require_once "./test/unit_tests/classes/Employe.class.php";
require_once "./test/unit_tests/classes/Agence.class.php";

$employe = new Employe();
$dateTemoin = "18/07/2015";
$employe->setDateEmbauche($dateTemoin);

function getListEmploye(){
    $employes = [];
    for ($i=0; $i < 12; $i++) { 
        $emp = new Employe();
        $emp->setNom("Nom ".$i);
        $emp->setPrenom("Prenom ".$i);
        $emp->setDateEmbauche("12/08/2020");
        $emp->setFonction("Fonction ".$i);
        $emp->setSalaire("Salaire ".$i);
        $emp->setService("Service ".$i);
        
        // echo $emp->getNom()."<br>";
        // var_dump(count($employes));
        array_push($employes,$emp);
    }
    // var_dump($employes);
    return $employes;
}

function getListAgence(){
    $agences = [];
    $agences[0] = new Agence();
    $agences[0]->setNom("Agence Resto");
    $agences[0]->setAdresse("adresse 1");
    $agences[0]->setCodePostal("80000");
    $agences[0]->setVille("Ville 1");
    $agences[0]->setModeRestauration(true);
    $agences[1] = new Agence();
    $agences[1]->setNom("Agence Ticket Resto");
    $agences[1]->setAdresse("adresse 2");
    $agences[1]->setCodePostal("80000");
    $agences[1]->setVille("Ville 2");
    $agences[1]->setModeRestauration(false);
    return $agences;
}
// function getListAgence(){
    //     $agences = [];
    //     for ($i=0; $i < 6; $i++) { 
        //         $agence = new Agence();
        //         $agence->setNom("Nom ".$i);
        //         $agence->setAdresse("adresse ".$i);
        //         $agence->setCodePostal("80000");
        //         $agence->setVille("Ville ".$i);
        //         if($i%2==0)
        //         $agence->setModeRestauration(true);
        //         else
        //         $agence->setModeRestauration(false);
        
        //         array_push($agences,$agence);
        //     }
        
        //     return $agences;
        // }
        
        function attribueAgence($employes,$agences){
            for ($i=0; $i < count($employes); $i++) {
                // echo $i."<br>";
                if($i%2==0) {
                    $j=0;
                    // $employes[$i]->setAgence($agences[0]);
                }
                else{
                    $j=1;
                    // echo $j;
                }
                $employes[$i]->setAgence($agences[$j]);
            }
            // echo "<br>";
        }
        
        $agences = getListAgence();
        $employes = getListEmploye();
        attribueAgence($employes,$agences);
        
        echo "<br>Anciennete: ".$employe->getAnciennete()."<br>";
        
        for ($i=0; $i < count($employes); $i++) { 
            if($employes[$i]->getAgence()->getModeRestauration())
            echo "Restauration agence<br>";
            else
            echo "Ticket Restos<br>";
            echo $i."//".$employes[$i]->isChequeVacance()."<br>";
        }
        ?>
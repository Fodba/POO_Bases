<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
spl_autoload_register(function($class) 
{
    require_once "test/unit_tests/classes/".$class.".class.php";
});


function getListEmploye(){
    $employes = [];
    for ($i=0; $i < 5; $i++) { 
        $emp = new Employe(true);
        array_push($employes,$emp);
    }
    return $employes;
}

$employes = getListEmploye();
?>

<div class='question'>
<h2>Question 2</h2>
<?php
for ($i=0; $i < count($employes); $i++) { 
    echo "<h3>".$employes[$i]->getPrenom()." ".$employes[$i]->getNom()."</h3>";
    echo "<div>Employé embauché le ".$employes[$i]->getDateEmbauche()->format("d/m/Y")."</div>";
    echo "<div>Son ancienneté est de ".$employes[$i]->getAnciennete()." ans</div>";
}
?>
</div>

<div class='question'>
<h2>Question 3</h2>
<?php
for ($i=0; $i < count($employes); $i++) { 
    echo "<h3>".$employes[$i]->getPrenom()." ".$employes[$i]->getNom()."</h3>";
    echo "<div>Son salaire est de ".$employes[$i]->getSalaire()."K€</div>";
    echo "<div>Sa prime se monte à ".$employes[$i]->calculerPrime()."K€</div>";
}
?>

</div>
</body>

</html>
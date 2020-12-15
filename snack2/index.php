<!-- PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];






// cerco il punto e la chiocciola nella email
if(strpos($email, '.') !== false && strpos($email, '@') !== false && (strlen($name)>3) !== false && is_numeric($age)) {
    // se ci sono entrambi, stampo "OK"
    echo "Accesso riuscito";
} else {
    // altrimenti, stampo "KO"
    echo "accesso negato";
}





 ?>

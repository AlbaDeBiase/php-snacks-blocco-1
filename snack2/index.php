<!-- PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// query string
// leggo i parametri get
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];






//verifico che il nome sia maggiore di 3 caratteri, cerco il punto e la chiocciola nella email , verifico che age sia un numero
if(strpos($email, '.') !== false && strpos($email, '@') !== false && (strlen($name)>3) !== false && is_numeric($age)!== false && $age> 0) {
    // se ci sono tutti, stampo "Accesso riuscito"
    echo "Accesso riuscito";
} else {
    // altrimenti, stampo "accesso negato"
    echo "accesso negato";
}





 ?>

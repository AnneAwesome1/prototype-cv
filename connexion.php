
<?php

// $servername = 'localhost';
// $username = 'kebedjis-anne';
// $password = '98FFX4ga5_@dM%%G';
// $dbname = 'kebedjis-anne';



// try {
//     $connexion = new PDO("mysql:host=$servername;dbname=$dbname;port=3306;charset=utf8", $username, $password);
//     $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {

//     echo 'Echec de connexion : ' . $e->getMessage();
// }



$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'compétences';

try {

    $connexion = new PDO("mysql:host=$servername;dbname=$dbname;port=3306;charset=utf8", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo 'Echec de connexion : ' . $e->getMessage();
}

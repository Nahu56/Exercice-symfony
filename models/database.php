<?php

/**
 * Initialisation de la connexion à la base de données
 *
 * @author Fabien Bellanger
 * @return PDO|bool
 */
function initDatabase(): ?PDO
{
    try
    {
        $host     = 'mvc-mysql';
        $username = 'lpweb';
        $password = 'lpweb';
        $name     = 'lpweb_mvc';
    
        return new PDO("mysql:host=$host;dbname=$name", $username, $password);
    }
    catch (PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage() . '<br/>';
        
        return false;
    }
}

function requeteposts($dbh){
    $stmt = $dbh->prepare("SELECT * FROM posts");
    $stmt->execute();
    
    $result = $stmt->fetchAll();

    return $result;
}
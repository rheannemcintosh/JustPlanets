<?php
    require 'vendor/autoload.php';

    use Database\Connection as Connection;
    use Database\CreateDB as CreateDB;
    // use Includes\Database\CreateTables as CreateTables;

    //$db = new CreateTable((new Connection())->connect());
    $db = new CreateDB((new Connection())->connect());
    //$db->connect();
    // create new 
    $db->createTables();
    // get the table list
    //$tables = $db->getTableList();
?>
    <h1>JustPlanets</h1>
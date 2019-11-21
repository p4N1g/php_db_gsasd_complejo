<?php    
    $dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("databaseuser");
    $dbpwd = getenv("databasepassword");
    $dbname = getenv("databasename");
    // conectar al servidor de BD
    $conex = mysql_connect($dbhost,$dbuser,$dbpwd);
    // controlar conexión
    if (!$conex) {
        header("Location: errorPage.php?MSG=NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db($dbname,$conex);
    // controlar selección de Base de Datos
    if (!$selDB) {
        header("Location: errorPage.php?MSG=NO se pudo SELECCIONAR la Base de Datos");
    } // endif
?>
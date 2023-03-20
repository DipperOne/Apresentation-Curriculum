<?php
    // $conn = pg_connect("
    //     host        =   localhost
    //     dbname      =   postgres
    //     user        =   postgres
    //     password    =   
    // ");

    // if (!$conn) {
    //     echo "Não foi possível conectar ao banco de dados: " . pg_last_error($conn);
    //     exit;
    // }

    $host = "localhost";
    $dbname = "postgres";
    $user = "postgres";
    $password = "";

    try {
        $pdo = new PDO("pgsql:host = $host; dbname = $dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conectado!";
    } catch(PDOException $e) {
        echo "Erro ao conectar " . $e->getMessage();
    }

    
?>

<?php

    try {
        $pdo = new pdo("mysql://localhost:3306/WEb2", "Lucas", "El15122019");
        
        }
    catch (PDOException  $erro) {
        echo $erro->getMessage();
    }



?>
<?php

    require_once "./backend/dao/UsuarioDAO.php";


    $usuarioDAO = new UsuarioDAO();

    // print_r($usuarioDAO->getById(2));

    echo $usuarioDAO->getById(2);
?>
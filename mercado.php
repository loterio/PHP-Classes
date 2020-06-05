<?php

    require("diagrama.class.php");
    
    // SETUP
    $novoCliente = new Cliente();
    $novoCliente->nome = "fabio";
    $novoCliente->idade = 18;    
    $novoCliente->email = "fabio@gmail.com";
    $novoCliente->senha = "12345";
    $novoCliente->endereco = "Tokyo";
    //var_dump($novoCliente);
    //$novoCliente->altDados();

    $outroCliente = new Cliente();
    $outroCliente->nome = "ex";
    $outroCliente->idade = 88;
    $outroCliente->email = "exex@gmail.com";
    $outroCliente->senha = "hahha";
    $outroCliente->endereco = "Indaiatuba";
    //var_dump($outroCliente);
    //$outroCliente->altDados();

    $ped = new Pedido();
    $ped->geraCod();

?>
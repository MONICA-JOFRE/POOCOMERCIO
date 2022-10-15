<?php
  /* require_once ('autoload.php'); */
require_once ('Cliente.php');
require_once ('Proveedor.php');
require_once ('Usuario.php');
require_once ('Factura.php');
require_once ('Producto.php');
require_once ('Persona.php');
require_once ('Comercio.php');
require_once ('Pedido.php');
    $comercio = new Comercio();

    $c1 = new Cliente('Juan','2494553655','23-285460239','inscripto');
    $c2 = new Cliente('Maria','2494323688','22-33456897','monotributo');
    $c3 = new Cliente('Rocio','2494665842','27-33222845','inscripto');
    $c4 = new Cliente('Vanesa','2494558841','26-32752098','monotributo');
    
    
    $comercio->agregarCliente($c1);
    $comercio->agregarCliente($c2);
    $comercio->agregarCliente($c3);
    $comercio->agregarCliente($c4);
    

    $p1 = new Proveedor('Pedro','2494553699','Coca-cola');
    $p2 = new Proveedor('Mario','2494323677','Pepsico');
    $p3 = new Proveedor('Gabriel','2494665855','Felfort');
    $p4 = new Proveedor('Patricio','2494558822','Arcor');
    

    $comercio->agregarProveedor($p1);
    $comercio->agregarProveedor($p2);
    $comercio->agregarProveedor($p3);
    $comercio->agregarProveedor($p4);

    $pr1 = new Producto('Gaseosa','Coca-cola 2.5','300');
    $pr2 = new Producto('Gaseosa','Pepsico 1.5','220');
    $pr3 = new Producto('Dos corazones','Felfort','200');
    $pr4 = new Producto('Mermelada','Arcor','250');
    

    $comercio->agregarProducto($pr1);
    $comercio->agregarProducto($pr2);
    $comercio->agregarProducto($pr3);
    $comercio->agregarProducto($pr4);

    $u1 = new Usuario('Jose Rosales','2494313236','123456');
    $u2 = new Usuario('Marcela Gonzales','2494586674','986532');
    $u3 = new Usuario('Alejandra Casares','2494787451','121212');

    $comercio->agregarUsuario($u1);
    $comercio->agregarUsuario($u2);
    $comercio->agregarUsuario($u3);

    $comercio->grabar('comercio.json');
 
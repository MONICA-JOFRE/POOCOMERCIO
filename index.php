<?php
require_once 'autoload.php';

$productos = [];
function agregarProducto(&$lista){
    
    echo ("Ingrese nombre del producto:");
    $nombre = trim(fgets(STDIN));
    echo ("Ingrese marca del producto:");
    $marca = trim(fgets(STDIN));
    echo ("Ingrese cuantos productos entraron:");
    $cantidad = trim(fgets(STDIN));
    echo ("Ingrese precio del producto:");
    $precio = trim(fgets(STDIN));
    $c = new Producto($nombre,$marca,$cantidad,$precio);
   
    $c->setNombre($nombre);
    $c->setMarca($marca);
    $c->setCantidad ($cantidad);
    $c->setPrecio($precio);
   
    $lista[]= $c;
 
}

function listarProductos($lista){
    echo("LISTA DE PRODUCTOS");
    echo("\n");
    echo("-Nombre-Marca-cantidad-Precio");
    echo("\n");
    foreach ($lista as $producto){
        
        echo ($producto->getNombre());
        echo (" ");
        echo ($producto->getMarca());
        echo (" ");
        echo ($producto->getCantidad());
        echo (" ");
        echo ($producto->getPrecio());
        echo ("\n");
       
    }
}

function modificarProductos($productos){
    echo("MODIFICACION DE PRODUCTOS");
    echo("\n");
    foreach ($productos as $producto){
        
        echo ($producto->getNombre());
        echo (" ");
        echo ($producto->getMarca());
        echo (" ");
        echo ($producto->getCantidad());
        echo (" ");
        echo ($producto->getPrecio());
        echo ("\n");
       
    }
}
function ventaProductos($productos){
    echo("VENTA DE PRODUCTOS");
    echo("\n");
    foreach ($productos as $producto){
        
        echo ($producto->getNombre());
        echo (" ");
        echo ($producto->getMarca());
        echo (" ");
        echo ($producto->getCantidad());
        echo (" ");
        echo ($producto->getPrecio());
        echo ("\n");
       
    }
}



$opcion = 0;
while ($opcion != 5) {
    mostrarMenu();
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 1: {
           agregarProducto($productos);
            };
            break;
        case 2: {
            
            listarProductos($productos);
            };
            break;
        case 3: {
             modificarProducto($productos);
            };
            break;
        case 4: {
            ventaProducto($productos);
            };
            break;
        case 5: {
                echo ("Salio del sistema");
            };
            break;
    }
    echo ("\n");
 }



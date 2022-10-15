<?php
//require_once 'autoload.php';
include_once('Cliente.php');
include_once('Proveedor.php');
include_once('Usuario.php');
include_once('Factura.php');
include_once('Producto.php');
include_once('Persona.php');
include_once('Pedido.php');
include_once('Comercio.php');
include_once('index.php');
include_once('menu.php');

function agregarProducto(){
    $c = new Producto();
    
    echo ("Ingrese nombre del producto:");
    $nombre = trim(fgets(STDIN));
    echo ("Ingrese marca del producto:");
    $marca = trim(fgets(STDIN));
    //echo ("Ingrese cuantos productos entraron:");
    //$cantidad = trim(fgets(STDIN));
    echo ("Ingrese precio del producto:");
    $precio = trim(fgets(STDIN));
    
    $c->setNombre($nombre);
    $c->setMarca($marca);
    //$c->setCantidad ($cantidad);
    $c->setPrecio($precio);
    

    return $c;
}

function listarProductos($productos){
    echo("LISTA DE PRODUCTOS");
    echo("\n");
    foreach ($productos as $producto){
        
        echo ($producto->getNombre());
        echo (" ");
        echo ($producto->getMarca());
        echo (" ");
        //echo ($producto->getCantidad());
        //echo (" ");
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
        //echo ($producto->getCantidad());
        //echo (" ");
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
        //echo ($producto->getCantidad());
        //echo (" ");
        echo ($producto->getPrecio());
        echo ("\n");
       
    }
}

$productos = [];

$opcion = 0;
while ($opcion != 5) {
    mostrarMenu();
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 1: {
            $productos[] = agregarProducto();
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



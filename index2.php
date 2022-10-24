<?php
require_once 'autoload.php';


$c = new Comercio();
function agregarProducto(&$comercio){
    
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
   
    $comercio->agregarProducto($c);
 
}

function listarProductos($comercio){
    echo("LISTA DE PRODUCTOS");
    echo("\n");
    echo("-Nombre-Marca-cantidad-Precio");
    echo("\n");
    foreach ($comercio->getProductos() as $producto){
        
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
while ($opcion != 7) {
    mostrarMenu();
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 1: {
           agregarProducto($c);
            };
            break;
        case 2: {
            
            listarProductos($c);
            };
            break;
        case 3: {
             modificarProducto($c);
            };
            break;
        case 4: {
            ventaProducto($c);
            };
            break;
            case 5: {
                $c->grabar('archivo.json');
            };
            break;
            case 6: {
                $c->leer('archivo.json');
            };
            break;
    
        case 7: {
                echo ("Salio del sistema");
            };
            break;
    }
    echo ("\n");
 }



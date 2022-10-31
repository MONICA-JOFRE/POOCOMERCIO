<?php
require_once 'autoload.php';


$c = new Comercio();
function agregarProducto( $comercio){
    
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

function modificarProductos($c){
    echo("MODIFICACION DE PRODUCTOS");
    echo("\n");
    $this->producto->set("id",$producto);
    $datos = this->producto->view();
    return $datos;
   /*  foreach ($productos as $producto){
        
        echo ($producto->getNombre());
        echo (" ");
        echo ($producto->getMarca());
        echo (" ");
        echo ($producto->getCantidad());
        echo (" ");
        echo ($producto->getPrecio());
        echo ("\n");
       
    } */
}
function ventaProductos($productos){
    echo("VENTA DE PRODUCTOS");
    echo("\n");
    foreach ($productos as $producto){
        echo ($producto->getId ());
        echo (" ");
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

function agregarCliente( $comercio){
    
    echo ("Ingrese nombre del Cliente:");
    $nombre = trim(fgets(STDIN));
    echo ("Ingrese el telefono del Cliente:");
    $telefono = trim(fgets(STDIN));
    echo ("Ingrese el cuit del Cliente:");
    $cuil = trim(fgets(STDIN));
    echo ("Ingrese la condicion ante el iva:");
    $resp = trim(fgets(STDIN));
    $c = new Cliente($nombre, $telefono, $cuil, $resp);

    $comercio->agregarCliente($c);
 
}

function listarClientes($comercio){
    echo("LISTA DE CLIENTES");
    echo("\n");
    echo("-Nombre-Telefono-Cuil-Resp");
    echo("\n");
    foreach ($comercio->getClientes() as $cliente){
        
        echo ($cliente->getNombre());
        echo (" ");
        echo ($cliente->getTelefono());
        echo (" ");
        echo ($cliente->getCuil());
        echo (" ");
        echo ($cliente->getResp());
        echo ("\n");
       }
}

function modificarCliente($c){
    echo("MODIFICACION DE Cliente");
    echo("\n");
    $this->cliente->set("id",$cliente);
    $datos = this->$cliente->view();
    return $datos;
   /*  foreach ($clientes as $cliente){
        
        echo ($cliente->getNombre());
        echo (" ");
        echo ($cliente->getMarca());
        echo (" ");
        echo ($cliente->getCantidad());
        echo (" ");
        echo ($cliente->getPrecio());
        echo ("\n");
       
    } */
}
function eliminarCliente($cliente){
    echo("Eliminar cliente");
    echo("\n");
    foreach ($clientes as $cliente){
        
        echo ($cliente->getNombre());
        echo (" ");
        echo ($cliente->getMarca());
        echo (" ");
        echo ($cliente->getCantidad());
        echo (" ");
        echo ($cliente->getPrecio());
        echo ("\n");
       
    }
}
menuOpciones($c);


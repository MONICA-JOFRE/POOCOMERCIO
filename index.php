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
    echo ("Ingrese id a modificar:");
    $id = trim(fgets(STDIN));
    $comercio -> modificarProducto($id);

}
function eliminarProducto($comercio){

    echo ("Ingrese id a eliminar:");
    $id = trim(fgets(STDIN));
    $comercio -> eliminarProducto($id);
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
        echo ($cliente->getTelefono());
        echo (" ");
        echo ($cliente->getCuil());
        echo (" ");
        echo ($cliente->getResp());
        echo ("\n");
       
    }
}

function agregarUsuario( $comercio){
    
    echo ("Ingrese nombre del Usuario:");
    $nombre = trim(fgets(STDIN));
    echo ("Ingrese el telefono del Usuario:");
    $telefono = trim(fgets(STDIN));
    echo ("Ingrese el clave del Usuario:");
    $clave = trim(fgets(STDIN));
    
    $c = new Usuario($nombre, $telefono, $clave);

    $comercio->agregarUsuario($c);
 
}

function listarUsuario($comercio){
    echo("LISTA DE Usuarios");
    echo("\n");
    echo("-Nombre-Telefono-Clave");
    echo("\n");
    foreach ($comercio->getUsuarios() as $usuario){
        
        echo ($usuario->getNombre());
        echo (" ");
        echo ($usuario->getTelefono());
        echo (" ");
        echo ($usuario->getClave());
        echo (" ");
       }
}

function modificarUsuario($c){
    echo("MODIFICACION DE Usuario");
    echo("\n");

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
function eliminarUsuario($usuario){
    echo("Eliminar usuario");
    echo("\n");
    foreach ($usuarios as $usuario){
        
        echo ($usuario->getNombre());
        echo (" ");
        echo ($usuario->getMarca());
        echo (" ");
        echo ($usuario->getClave());
        echo (" ");    
       
    }
}

function agregarProveedor( $comercio){
    
    echo ("Ingrese nombre del Proveedor:");
    $nombre = trim(fgets(STDIN));
    echo ("Ingrese el telefono del Proveedor:");
    $telefono = trim(fgets(STDIN));
    echo ("Ingrese la empresa del Proveedor:");
    $empresa = trim(fgets(STDIN));
    
    $c = new Proveedor($nombre, $telefono, $empresa);

    $comercio->agregarProveedor($c);
 
}

function listarProveedor($comercio){
    echo("LISTA DE Proveedor");
    echo("\n");
    echo("-Nombre-Telefono-Empresa");
    echo("\n");
    foreach ($comercio->getProveedor() as $proveedor){
        
        echo ($proveedor->getNombre());
        echo (" ");
        echo ($proveedor->getTelefono());
        echo (" ");
        echo ($proveedor->getClave());
        echo (" ");
       }
}

function modificarProveedor($c){
    echo("MODIFICACION DE proveedor");
    echo("\n");

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
function eliminarProveedor($proveedor){
    echo("Eliminar proveedor");
    echo("\n");
    foreach ($proveedores as $proveedor){
        
        echo ($proveedor->getNombre());
        echo (" ");
        echo ($proveedor->getMarca());
        echo (" ");
        echo ($proveedor->getEmpresa());
        echo (" ");    
       
    }
}

function agregarFactura( $comercio){
    echo ("Ingrese su id de usuario:");
    $id = trim(fgets(STDIN));
    echo ("Ingrese la fecha de la Factura:");
    $fecha = trim(fgets(STDIN));
    echo ("Ingrese el cuit del Cliente:");
    $cuil = trim(fgets(STDIN));
    echo ("Ingrese la cantidad de es producto:");
    $cantidad = trim(fgets(STDIN));
    echo ("¿Desea agregar otro producto?:");
    $agregarProducto = trim(fgets(STDIN));
    $c = new Factura($nombre, $telefono, $cuil, $resp);

    $comercio->agregarFactura($c); 
 
}

function listarFactura($comercio){
    /* echo("LISTA DE Facturas");
    echo("\n");
    echo("-Nombre-Telefono-Cuil-Resp");
    echo("\n");
    foreach ($comercio->getFacturas() as $Factura){
        
        echo ($Factura->getNombre());
        echo (" ");
        echo ($Factura->getTelefono());
        echo (" ");
        echo ($Factura->getCuil());
        echo (" ");
        echo ($Factura->getResp());
        echo ("\n");
       } */
}

function modificarFactura($c){
   /*  echo("MODIFICACION DE Factura");
    echo("\n");
    */ 
}
function eliminarFactura($factura){
    /* echo("Eliminar cliente");
    echo("\n");
    foreach ($clientes as $cliente){
        
        echo ($cliente->getNombre());
        echo (" ");
        echo ($cliente->getTelefono());
        echo (" ");
        echo ($cliente->getCuil());
        echo (" ");
        echo ($cliente->getResp());
        echo ("\n");
       
    } */
}
function agregarPedido( $comercio){
    
    /* echo ("Ingrese nombre del Cliente:");
    $nombre = trim(fgets(STDIN));
    echo ("Ingrese el telefono del Cliente:");
    $telefono = trim(fgets(STDIN));
    echo ("Ingrese el cuit del Cliente:");
    $cuil = trim(fgets(STDIN));
    echo ("Ingrese la condicion ante el iva:");
    $resp = trim(fgets(STDIN));
    $c = new Cliente($nombre, $telefono, $cuil, $resp);

    $comercio->agregarCliente($c); */
 
}

function listarPedido($comercio){
    /* echo("LISTA DE CLIENTES");
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
       } */
}

function modificarPedido($c){
   /*  echo("MODIFICACION DE Cliente");

}
function eliminarPedido($pedido){
    /* echo("Eliminar cliente");

    } */
}

menuOpciones($c);


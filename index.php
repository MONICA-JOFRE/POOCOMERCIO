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
    echo("Id-Nombre-Marca-cantidad-Precio");
    echo("\n");
    foreach ($comercio->getProductos() as $producto){
        
        echo ($producto->getId());
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

function mostrarProducto(&$p){


    echo (" 0 - salir\n");
    echo (" 1 - Nombre:". $p->getNombre()."\n");
    echo (" 2 - Marca:". $p->getMarca()."\n");
    echo (" 3 - Cantidad:". $p->getCantidad()."\n");
    echo (" 4 - Precio:". $p->getPrecio()."\n");

   
    echo ("Ingrese opcion a modificar:");
    $id = trim(fgets(STDIN)); 

    switch ($id) {

        case '1':
            echo("ingrese nombre:");
            $dato = trim(fgets(STDIN));
           $p->setNombre($dato);
            break;
        case '2':
            echo("ingrese Marca:");
           $dato = trim(fgets(STDIN));
           $p->setMarca($dato);
            break;
        case '3':
            echo("ingrese cantidad:");
            $dato = trim(fgets(STDIN));
           $p->setCantidad($dato);
        
            break;
        case '4':
            echo("ingrese precio:");
            $dato = trim(fgets(STDIN));
           $p->setPrecio($dato);
            break;
        
        default:
        echo ("Salio del sistema");
            break;
    }
    return $p;
}

function modificarProducto($c){
    echo("MODIFICACION DE PRODUCTOS");
    echo("\n");
    echo ("Ingrese id a modificar:");
    $id = trim(fgets(STDIN)); 
    $p = $c->getProducto($id);
    
    if ($p){
        $n = mostrarProducto($p);
        $c ->modificarProducto($id,$n);

      }else {
        echo("Producto no encontrado");
    }
    
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
    echo("Id-Nombre-Telefono-Cuil-Resp");
    echo("\n");
    foreach ($comercio->getClientes() as $cliente){
        
        echo ($cliente->getId());
        echo (" ");
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

function mostrarCliente(&$p){
  
    echo (" 0 - salir\n");
    echo (" 1 - Nombre:". $p->getNombre()."\n");
    echo (" 2 - Telefono:". $p->getTelefono()."\n");
    echo (" 3 - Cuil:". $p->getCuil()."\n");
    echo (" 4 - Condicion ante el iva:". $p->getResp()."\n");

    echo ("Ingrese opcion a modificar:");
    $id = trim(fgets(STDIN)); 
    
    switch ($id) {

        case '1':
            echo("ingrese nombre:");
            $dato = trim(fgets(STDIN));
           $p->setNombre($dato);
            break;
        case '2':
            echo("ingrese Telefono:");
           $dato = trim(fgets(STDIN));
           $p->setTelefono($dato);
            break;
        case '3':
            echo("ingrese cuil:");
            $dato = trim(fgets(STDIN));
           $p->setCuil($dato);
        
            break;
        case '4':
            echo("Condicion ante el iva:");
            $dato = trim(fgets(STDIN));
           $p->setResp($dato);
            break;
        
        default:
        echo ("Salio del sistema");
            break;
    }
    return $p;
}

function modificarCliente($c){
    echo("MODIFICAR DATOS DEL CLIENTE");
    echo("\n");
    echo ("Ingrese id a modificar:");
    $id = trim(fgets(STDIN)); 
    $p = $c->getCliente($id);
    
    if ($p){
        $n = mostrarCliente($p);
        $c ->modificarCliente($id,$n);
        
      }else {
        echo("Cliente no encontrado");
    }
}
function eliminarCliente($comercio){
    echo("Eliminar cliente");
    echo("\n");
    echo ("Ingrese id a eliminar:");
    $id = trim(fgets(STDIN));
    $comercio -> eliminarCliente($id);
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

function listarUsuarios($comercio){
    echo("LISTA DE Usuarios");
    echo("\n");
    echo("-Nombre-Telefono-Clave");
    echo("\n");
    foreach ($comercio->getUsuarios() as $usuario){
        
        echo ($usuario->getId());
        echo (" ");
        echo ($usuario->getNombre());
        echo (" ");
        echo ($usuario->getTelefono());
        echo (" ");
        echo ($usuario->getClave());
        echo (" ");
       }
}


function mostrarUsuario(&$p){
  
    echo (" 0 - salir\n");
    echo (" 1 - Nombre:". $p->getNombre()."\n");
    echo (" 2 - Telefono:". $p->getTelefono()."\n");
    echo (" 3 - Clave:". $p->getClave()."\n");
    
    echo ("Ingrese opcion a modificar:");
    $id = trim(fgets(STDIN));
    switch ($id) {

        case '1':
            echo("ingrese nombre:");
            $dato = trim(fgets(STDIN));
           $p->setNombre($dato);
            break;
        case '2':
            echo("ingrese Telefono:");
           $dato = trim(fgets(STDIN));
           $p->setTelefono($dato);
            break;
        case '3':
            echo("ingrese clave:");
            $dato = trim(fgets(STDIN));
           $p->setClave($dato);
        
            break;
        
        default:
        echo ("Salio del sistema");
            break;
    }
    return $p;
}

function modificarUsuario($c){
    echo("MODIFICAR DATOS DEL Usuario");
    echo("\n");
    echo ("Ingrese id a modificar:");
    $id = trim(fgets(STDIN)); 
    $p = $c->getUsuario($id);
    
    if ($p){
        $n = mostrarUsuario($p);
        $c ->modificarUsuario($id,$n);

      }else {
        echo("Usuario no encontrado");
    }
}
function eliminarUsuario($usuario){
    echo("Eliminar usuario");
    echo("\n");
    echo ("Ingrese id a eliminar:");
    $id = trim(fgets(STDIN));
    $comercio -> eliminarUsuario($id);
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

function listarProveedores($comercio){
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

function mostrarProveedor(&$c){
    echo("MODIFICAR proveedor");
    echo("\n");

    echo (" 0 - salir\n");
    echo (" 1 - Nombre:". $p->getNombre()."\n");
    echo (" 2 - Telefono:". $p->getTelefono()."\n");
    echo (" 3 - Cuil:". $p->getEmpresa()."\n");

    echo ("Ingrese opcion a modificar:");
    $id = trim(fgets(STDIN)); 

    switch ($id) {

        case '1':
            echo("ingrese nombre:");
            $dato = trim(fgets(STDIN));
            $p->setNombre($dato);
            break;
        case '2':
            echo("ingrese Telefono:");
            $dato = trim(fgets(STDIN));
            $p->setTelefono($dato);
            break;
        case '3':
            echo("ingrese la empresa:");
            $dato = trim(fgets(STDIN));
            $p->setEmpresa($dato);
        
            break;
        
        default:
        echo ("Salio del sistema");
            break;
    }
    return $p;
}
    
function modificarProveedor($c){
    echo("MODIFICAR DATOS DEL Proveedor");
    echo("\n");
    echo ("Ingrese id a modificar:");
    $id = trim(fgets(STDIN)); 
    $p = $c->getProveedor($id);
    
    if ($p){
        $n = mostrarProveedor($p);
        $c ->modificarProveedor($id,$n);
        
        }else {
        echo("Proveedor no encontrado");
    }
}
function eliminarProveedor($proveedor){
    echo("Eliminar proveedor");
    echo("\n");
    echo ("Ingrese id a eliminar:");
    $id = trim(fgets(STDIN));
    $comercio -> eliminarProveedor($id);
}

function agregarFactura( $comercio){
   
    echo ("Ingrese la fecha de la Factura:");
    $fecha = trim(fgets(STDIN));
    echo ("Ingrese su id de usuario:");
    $usuario = trim(fgets(STDIN));
    echo ("Ingrese el ID del Cliente:");
    $cliente = trim(fgets(STDIN));
    echo ("agregar producto:");
    $producto = trim(fgets(STDIN));
    echo ("Ingrese producto:");
    $cantidad = trim(fgets(STDIN));
    echo ("total:");
    $total = trim(fgets(STDIN));
    $c = new Factura($fecha,$usuario,$cliente,$producto,$cantidad,$total);

    $comercio->agregarFactura($c); 
 
}

function listarFacturas($comercio){
    echo("LISTA DE Facturas");
    echo("\n");
    echo("fecha-usuario-cliente-producto-cantidad-total");
    echo("\n");
    foreach ($comercio->getFacturas() as $factura){
        echo ($factura->getFecha());
        echo ("\n");
        echo ($factura->getUsuario());
        echo (" ");
        echo ($factura->getgetCliente());
        echo (" ");
        echo ($factura->getProducto());
        echo (" ");
        echo ($factura->getCantidad());
        echo (" ");
        echo ($factura->getTotal());
        echo ("\n");
       } 
}

function mostrarFactura(&$c){
    echo("MODIFICAR Factura");
    echo("\n");
    echo (" 0 - salir\n");
    echo (" 1 - Fecha:". $p->getFecha()."\n");
    echo (" 2 - id Usuario:". $p->getUsuario()."\n");
    echo (" 3 - id Cliente:". $p->getCliente()."\n");
    echo (" 4 - id Producto:". $p->getProducto()."\n");
    echo (" 5 - Cantidad:". $p->getCantidad()."\n");
    echo (" 6 - Total:". $p->getTotal()."\n");

    echo ("Ingrese opcion a modificar:");
    $id = trim(fgets(STDIN)); 
    switch ($id) {
        case '1':
            echo("ingrese la Fecha:");
            $dato = trim(fgets(STDIN));
            $p->setFecha($dato);
            break;
        case '2':
            echo("ingrese el id Usuario:");
            $dato = trim(fgets(STDIN));
            $p->setUsuario($dato);
            break;
        case '3':
            echo("ingrese la Cliente:");
            $dato = trim(fgets(STDIN));
            $p->setCliente($dato);
            break;
        case '4':
            echo("ingrese el id del Producto:");
            $dato = trim(fgets(STDIN));
            $p->setProducto($dato);
            break;
        case '5':
            echo("ingrese la Cantidad:");
            $dato = trim(fgets(STDIN));
            $p->setCantidad($dato);
            break;
        case '6':
            echo("ingrese el Total:");
            $dato = trim(fgets(STDIN));
            $p->setTotal($dato);
            break;
        
        default:
        echo ("Salio del sistema");
            break;
    }
    return $p;
}
        
function modificarFactura($c){
    echo("MODIFICAR DATOS DE LA FACTURA");
    echo("\n");
    echo ("Ingrese id a modificar:");
    $id = trim(fgets(STDIN)); 
    $p = $c->getFactura($id);
    
    if ($p){
        $n = mostrarFactura($p);
        $c ->modificarFactura($id,$n);
        
        }else {
        echo("factura no encontrada");
    }
}  

function eliminarFactura($factura){
    echo("Eliminar Factura");
    echo("\n");
    echo ("Ingrese id a eliminar:");
    $id = trim(fgets(STDIN));
    $comercio -> eliminarFactura($id);
}
function agregarPedido( $comercio){
    
    echo ("Ingrese la fecha del pedido:");
    $fecha = trim(fgets(STDIN));
    echo ("Ingrese su id del proveedor:");
    $proveedor = trim(fgets(STDIN));
    echo ("Ingrese el ID del Usuario:");
    $usuario = trim(fgets(STDIN));
    echo ("agregar producto:");
    $producto = trim(fgets(STDIN));
    echo ("Ingrese producto:");
    $cantidad = trim(fgets(STDIN));
    echo ("total:");
    $total = trim(fgets(STDIN));
    $c = new Factura($fecha,$proveedor,$usuario,$producto,$cantidad,$total);

    $comercio->agregarFactura($c); 
 
}

function listarPedidos($comercio){
    echo("fecha-proveedor-usuario-producto-cantidad-total");
    echo("\n");
    foreach ($comercio->getPedidos() as $pedido){
        echo ($pedido->getFecha());
        echo ("\n");
        echo ($pedido->getProveedor());
        echo (" ");
        echo ($pedido->getgetUsuario());
        echo (" ");
        echo ($pedido->getProducto());
        echo (" ");
        echo ($pedido->getCantidad());
        echo (" ");
        echo ($pedido->getTotal());
        echo ("\n");
       } 
}
function mostrarPedido(&$c){
    echo("MODIFICAR Factura");
    echo("\n");
    echo (" 0 - salir\n");
    echo (" 1 - Fecha:". $p->getFecha()."\n");
    echo (" 2 - id Usuario:". $p->getUsuario()."\n");
    echo (" 3 - id Cliente:". $p->getCliente()."\n");
    echo (" 4 - id Producto:". $p->getProducto()."\n");
    echo (" 5 - Cantidad:". $p->getCantidad()."\n");
    echo (" 6 - Total:". $p->getTotal()."\n");

    echo ("Ingrese opcion a modificar:");
    $id = trim(fgets(STDIN)); 
    switch ($id) {
        case '1':
            echo("ingrese la Fecha:");
            $dato = trim(fgets(STDIN));
            $p->setFecha($dato);
            break;
        case '2':
            echo("ingrese el id del Proveedor:");
            $dato = trim(fgets(STDIN));
            $p->setProveedor($dato);
            break;
        case '3':
            echo("ingrese el id Usuario:");
            $dato = trim(fgets(STDIN));
            $p->setUsuario($dato);
            break;
        
        case '4':
            echo("ingrese el id del Producto:");
            $dato = trim(fgets(STDIN));
            $p->setProducto($dato);
            break;
        case '5':
            echo("ingrese la Cantidad:");
            $dato = trim(fgets(STDIN));
            $p->setCantidad($dato);
            break;
        case '6':
            echo("ingrese el Total:");
            $dato = trim(fgets(STDIN));
            $p->setTotal($dato);
            break;
        
        default:
        echo ("Salio del sistema");
            break;
    }
    return $p;
}
function modificarPedido($c){
   echo("MODIFICAR PEDIDO");
   echo ("Ingrese id a modificar:");
   $id = trim(fgets(STDIN)); 
   $p = $c->getPedido($id);
   
   if ($p){
       $n = mostrarPedido($p);
       $c ->modificarPedido($id,$n);
       
       }else {
       echo("Pedido no encontrado");
   }

}
function eliminarPedido($pedido){

  echo ("Ingrese id a eliminar:");
  $id = trim(fgets(STDIN));
  $comercio -> eliminarPedido($id);
}

menuOpciones($c);

?>
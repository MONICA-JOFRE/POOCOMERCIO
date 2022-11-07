<?php
require_once ('autoload.php');
function menuPrincipal(){
    echo ("***Menu Principal***\n");
    echo ("\n");
    echo ("1 - Producto\n");
    echo ("2 - Cliente\n");
    echo ("3 - Usuario\n");
    echo ("4 - Proveedor\n");
    echo ("5 - Factura\n");
    echo ("6 - Pedido\n");
    echo ("7 - Salir\n");
    
    echo ("\nElija la opcion donde desee entrar:");

}
function menuOpciones($c){
    $opcion = 0;
    while ($opcion != 7) {
        menuPrincipal();
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1: {
                menuProducto($c);
                };
                break;
            case 2: {
                
                menuCliente($c);
                };
                break;
            case 3: {
                menuUsuario($c);
                };
                break;
            case 4: {
                menuProveedor($c);
                };
                break;
                case 5: {
                menuFactura($c);
                };
                break;
                case 6: {
                menuPedido($c);
                };
                break;
        
            case 7: {
                    echo ("Salio del sistema");
                };
                break;
        }
        echo ("\n");
     }   
} 

function mostrarMenu() {
      
        echo ("1 - Cargar \n");
        echo ("2 - Listar \n");
        echo ("3 - Modificar \n");
        echo ("4 - Borrar \n");
        echo ("5 - grabar a disco\n");
        echo ("6 - recuperar de disco\n");
        echo ("7 - Salir\n");

        echo ("\nElija una opcion:");
}

function menuProducto($c){
    $opcion = 0;
    while ($opcion != 7) {
        echo ("***Menu de opciones Productos***\n");
        echo ("\n");
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
                eliminarProducto($c);
                };
                break;
                case 5: {
                    $c->grabar('archivo.json');
                };
                break;
                case 6: {
                    $c = new Comercio();
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
}

function menuCliente($c){
    $opcion = 0;
    while ($opcion != 7) {
        echo ("***Menu de opciones cliente***\n");
        echo ("\n");
        mostrarMenu();
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1: {
               agregarCliente($c);
                };
                break;
            case 2: {
                
                listarClientes($c);
                };
                break;
            case 3: {
                 modificarCliente($c);
                 $c->grabar('archivo.json');
                };
                break;
            case 4: {
                eliminarCliente($c);
                };
                break;
                case 5: {
                    $c->grabar('archivo.json');
                };
                break;
                case 6: {
                    $c = new Comercio();
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
    
} 

function menuUsuario($c){
    $opcion = 0;
    while ($opcion != 7) {
        echo ("***Menu de opciones Usuario***\n");
        echo ("\n");
        mostrarMenu();
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1: {
               agregarUsuario($c);
                };
                break;
            case 2: {
                
                listarUsuarios($c);
                };
                break;
            case 3: {
                 modificarUsuario($c);
                };
                break;
            case 4: {
                eliminar($c);
                };
                break;
                case 5: {
                    $c->grabar('archivo.json');
                };
                break;
                case 6: {
                    $c = new Comercio();
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
    
} 

    
function menuProveedor($c){
    $opcion = 0;
    while ($opcion != 7) {
        echo ("***Menu de opciones Proveedor***\n");
        echo ("\n");
        mostrarMenu();
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1: {
               agregarProveedor($c);
                };
                break;
            case 2: {
                
                listarProveedores($c);
                };
                break;
            case 3: {
                 modificarProveedor($c);
                };
                break;
            case 4: {
                eliminar($c);
                };
                break;
                case 5: {
                    $c->grabar('archivo.json');
                };
                break;
                case 6: {
                    $c = new Comercio();
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
}
function menuFactura($c){
    $opcion = 0;
    while ($opcion != 7) {
        echo ("***Menu de Factura***\n");
        echo ("\n");
        mostrarMenu();
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1: {
               agregarFactura($c);
                };
                break;
            case 2: {
                
                listarFacturas($c);
                };
                break;
            case 3: {
                 modificarFacturas($c);
                };
                break;
            case 4: {
                eliminar($c);
                };
                break;
                case 5: {
                    $c->grabar('archivo.json');
                };
                break;
                case 6: {
                    $c = new Comercio();
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
}
function menuPedido($c){
    $opcion = 0;
    while ($opcion != 7) {
        echo ("***Menu de Pedido***\n");
        echo ("\n");
        mostrarMenu();
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1: {
               agregarPedido($c);
                };
                break;
            case 2: {
                
                listarPedidos($c);
                };
                break;
            case 3: {
                 modificarPedidos($c);
                };
                break;
            case 4: {
                eliminar($c);
                };
                break;
                case 5: {
                    $c->grabar('archivo.json');
                };
                break;
                case 6: {
                    $c = new Comercio();
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
}
<?php
require_once ('autoload.php');
/* require_once ('Proveedor.php');
require_once ('Usuario.php');
require_once ('Factura.php');
require_once ('Producto.php');
require_once ('Persona.php');  */

    class Comercio {
        protected $clientes = [];
        protected $proveedores = [];
        protected $usuarios = [];
        protected $factura = [];
        protected $pedido = [];
        protected $productos = [];

        function agregarCliente($cliente) {
            $this->clientes[] = $cliente;
        } 
        function getProductos(){
            return $this->productos;
        }

        function agregarProveedor($proveedor) {
            $this->proveedores[] = $proveedor;
        }
        function agregarProducto($producto) {
            $this->productos[] = $producto;
        }
        function agregarUsuario($usuario) {
            $this->usuarios[] = $usuario;
        }
        function agregarFactura($factura) {
            $this->facturas[] = $factura;
        } 
        function agregarPedido($pedido) {
            $this->pedidos[] = $pedido;
        } 
        
        function getJSON() {
            $jsonCliente = [];
            foreach ($this->clientes as $cliente) {
                $jsonCliente[] = json_encode($cliente);
            }
            $jsonCliente = '"clientes" : ['.implode(',', $jsonCliente).']';

            $jsonProveedor = [];
            foreach ($this->proveedores as $proveedor) {
                $jsonProveedor[] = json_encode($proveedor);
            }
            $jsonProveedor = '"proveedores" : ['.implode(',', $jsonProveedor).']';
            
            $jsonProducto = [];
            foreach ($this->productos as $producto) {
                $jsonProducto[] = json_encode($producto);
            }
            $jsonProducto = '"productos" : ['.implode(',', $jsonProducto).']';
            
            $jsonFactura = [];
            foreach ($this->facturas as $factura) {
                $jsonFactura[] = json_encode($factura);
            }
            $jsonFactura = '"facturas" : ['.implode(',', $jsonFactura).']';
            
            $jsonPedido = [];
            foreach ($this->pedidos as $pedido) {
                $jsonPedido[] = json_encode($pedido);
            }
            $jsonPedido = '"pedidos" : ['.implode(',', $jsonPedido).']';

            $jsonUsuario = [];
            foreach ($this->usuarios as $usuario) {
                $jsonUsuario[] = json_encode($usuario);
            }
            $jsonUsuario = '"usuarios" : ['.implode(',', $jsonUsuario).']';

            return '{'. $jsonCliente . ',' . $jsonProveedor . ',' . $jsonProducto . ',' . $jsonUsuario . ',' . $jsonFactura . ',' . $jsonPedido .'}';
        }

        function setJSON($datos) {
            $jsonDatos = json_decode($datos);

          $clientes = $jsonDatos->clientes;
            foreach ($clientes as $cliente) {
                $nuevoCliente = new Cliente($cliente->nombre, $cliente->telefono, $cliente->cuit, $cliente->resp);
                $this->agregarCliente($nuevoCliente);
            } 
           
           $proveedores = $jsonDatos->proveedores;
            foreach ($proveedores as $proveedor) {
                $nuevoProveedor = new Proveedor($proveedor->nombre, $proveedor->telefono, $proveedor->empresa);
                $this->agregarProveedor($nuevoProveedor);
            }
            $facturas = $jsonDatos->facturas;
            foreach ($facturas as $factura) {
                $nuevoFactura = new Factura($factura->fecha,$factura->total);
                $this->agregarFactura($nuevoFactura);
            } 
           
            $productos = $jsonDatos->productos;
            foreach ($productos as $producto) {
                $nuevoProducto = new Producto($producto->nombre,$producto->marca,$producto->cantidad,$producto->precio);
                $this->agregarProducto($nuevoProducto);
            }
            $usuarios = $jsonDatos->usuarios;
            foreach ($usuarios as $usuario) {
                $nuevoUsuario = new Usuario($usuario->nombre, $usuario->telefono, $usuario->clave);
                $this->agregarUsuario($nuevoUsuario);
            }
        

            $pedidos = $jsonDatos->pedidos;
            foreach ($pedidos as $pedido) {
                $nuevoPedido = new Pedido($pedido>fecha);
                $this->agregarPedido($nuevoPedido);
            } 
       }

        function grabar($nombreArchivo){
            $datos = $this->getJSON();
            file_put_contents($nombreArchivo, $datos);
        }

        function leer($nombreArchivo) {
            $datos = file_get_contents($nombreArchivo);
            $this->setJSON($datos);

        }
      
    
}

    //['a', '1234', 'equry']   -----> implode(',', ['a', '1234', 'equry']) = 'a,1234,equry'
<?php
require_once ('autoload.php');

class Comercio {
    protected $clientes = [];
    protected $proveedores = [];
    protected $usuarios = [];
    protected $productos = [];
    protected $facturas = [];
    protected $pedidos = [];

    function getClientes(){
        return $this->clientes;
    }
    function getProveedores(){
        return $this->proveedores;
    }
    function getUsuarios(){
        return $this->usuarios;
    }
    function getProductos(){
        return $this->productos;
    }
    function getPedidos(){
      return $this->pedidos;
    }
    function getFacturas(){
        return $this->facturas;
    }
    function getProducto($id){
      $i = $this->buscarProducto($id);
      if($i){
        return $this->productos[$i];
      }
      return null;
    }
    function getCliente($id){
        $i = $this->buscarCliente($id);
        if($i){
          return $this->clientes[$i];
        }
        return null;
      }
    function getUsuario($id){
    $i = $this->buscarUsuario($id);
    if($i){
        return $this->usuarios[$i];
    }
    return null;
    }
    function getProveedor($id){
    $i = $this->buscarProveedor($id);
    if($i){
        return $this->proveedores[$i];
    }
    return null;
    }
    function getFactura($id){
      $i = $this->buscarFactura($id);
      if($i){
          return $this->facturas[$i];
      }
      return null;
      }
      function getPedido($id){
      $i = $this->buscarPedido($id);
      if($i){
          return $this->pedidos[$i];
      }
      return null;
      }
    function agregarCliente($cliente) {
        $this->clientes[] = $cliente;
    } 
    function agregarProveedor($proveedor) {
        $this->proveedores[] = $proveedor;
    }
    function agregarUsuario($usuario) {
        $this->usuarios[] = $usuario;
    }
    function agregarProducto($producto) {
        $this->productos[] = $producto;
    }
    function agregarFactura($factura) {
        $this->facturas[] = $factura;
    } 
    function agregarPedido($pedido) {
        $this->pedidos[] = $pedido;
    } 
    
    function buscarProducto($id){
        for ($i = 0; $i < count ($this->productos);$i++){
          $producto = $this->productos[$i];
            if ($producto->getId()==$id){
              return $i;
          }
        }
        return null;
    }
    function modificarProducto($id,$n){//$n es la posicion
        $i = $this->buscarProducto($id);
        if ($i){
             $this->productos[$i]= $n;
          }
          else{
            echo "producto no encontrado";
          }
    }
    function buscarCliente($id){
        for ($i = 0; $i < count ($this->clientes);$i++){
          $cliente = $this->clientes[$i];
            if ($cliente->getId()==$id){
              return $i;
          }
        }
        return null;
    }
    function modificarCliente($id,$n){//$n es la posicion
        $i = $this->buscarCliente($id);
        if ($i){
             $this->clientes[$i]= $n;
          }
    }
    function buscarUsuario($id){
        for ($i = 0; $i < count ($this->usuarios);$i++){
          $usuario = $this->usuarios[$i];
            if ($usuario->getId()==$id){
              return $i;
          }
        }
        return null;
    }
    function modificarUsuario($id,$n){//$n es la posicion
        $i = $this->buscarUsuario($id);
        if ($i){
             $this->usuarios[$i]= $n;
          }
    }
    function buscarProveedor($id){
      for ($i = 0; $i < count ($this->proveedores);$i++){
        $proveedor = $this->proveedores[$i];
          if ($proveedor->getId()==$id){
            return $i;
        }
      }
      return null;
  }
  function modificarProveedor($id,$n){//$n es la posicion
      $i = $this->buscarProveedor($id);
      if ($i){
           $this->proveedores[$i]= $n;
        }
  }
  function buscarFactura($id){
    for ($i = 0; $i < count ($this->facturas);$i++){
      $factura = $this->facturas[$i];
        if ($factura->getId()==$id){
          return $i;
      }
    }
    return null;
}
function modificarFactura($id,$n){//$n es la posicion
    $i = $this->buscarFactura($id);
    if ($i){
         $this->facturas[$i]= $n;
      }
}  
    
    function eliminarProducto($id){
        for ($i = 0; $i < count ($this->productos);$i++){
          $producto = $this->productos[$i];
            if ($producto->getId()==$id){
              unset($this->productos[$i]);
          }
        }
    }
    function eliminarCliente($id){
        for ($i = 0; $i < count ($this->clientes);$i++){
          $cliente = $this->clientes[$i];
            if ($cliente->getId()==$id){
              unset($this->clientes[$i]);
          }
        }
    }
    function eliminarUsuario($id){
        for ($i = 0; $i < count ($this->usuarios);$i++){
          $usuario = $this->usuarios[$i];
            if ($usuario->getId()==$id){
              unset($this->usuarios[$i]);
          }
        }
    }
    function eliminarProveedor($id){
        for ($i = 0; $i < count ($this->proveedores);$i++){
          $proveedor = $this->proveedores[$i];
            if ($proveedor->getId()==$id){
              unset($this->proveedores[$i]);
          }
        }
    }
    function eliminarFacura($id){
        for ($i = 0; $i < count ($this->facturas);$i++){
          $factura = $this->facturas[$i];
            if ($factura->getId()==$id){
              unset($this->facturas[$i]);
          }
        }
    }
    function eliminarPedido($id){
        for ($i = 0; $i < count ($this->pedidos);$i++){
          $pedido = $this->pedidos[$i];
            if ($pedido->getId()==$id){
              unset($this->pedidos[$i]);
          }
        }
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
        
        $jsonUsuario = [];
        foreach ($this->usuarios as $usuario) {
            $jsonUsuario[] = json_encode($usuario);
        }
        $jsonUsuario = '"usuarios" : ['.implode(',', $jsonUsuario).']';

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
 
        return '{'. $jsonCliente . ',' . $jsonProveedor . ','  . $jsonUsuario . ',' . $jsonProducto . ',' . $jsonFactura . ',' . $jsonPedido .'}';
    }

    function setJSON($datos) {
        $jsonDatos = json_decode($datos);

        $clientes = $jsonDatos->clientes;
        foreach ($clientes as $cliente) {
            $nuevoCliente = new Cliente($cliente->nombre, $cliente->telefono, $cliente->cuil, $cliente->resp);
            $this->agregarCliente($nuevoCliente);
        } 
        
        $proveedores = $jsonDatos->proveedores;
        foreach ($proveedores as $proveedor) {
            $nuevoProveedor = new Proveedor($proveedor->nombre, $proveedor->telefono, $proveedor->empresa);
            $this->agregarProveedor($nuevoProveedor);
        }

        $usuarios = $jsonDatos->usuarios;
        foreach ($usuarios as $usuario) {
            $nuevoUsuario = new Usuario($usuario->nombre, $usuario->telefono, $usuario->clave);
            $this->agregarUsuario($nuevoUsuario);
        }

        $productos = $jsonDatos->productos;
        foreach ($productos as $producto) {
            $nuevoProducto = new Producto($producto->nombre,$producto->marca,$producto->cantidad,$producto->precio);
            $this->agregarProducto($nuevoProducto);
        }

        $facturas = $jsonDatos->facturas;
        foreach ($facturas as $factura) {
            $nuevoFactura = new Factura($factura->fecha,$factura->total);
            $this->agregarFactura($nuevoFactura);
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


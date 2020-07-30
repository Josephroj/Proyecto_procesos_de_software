<?php
class Producto extends Eloquent
{
	protected $table = 'productos';
	protected $primaryKey="id";

		public function Marca()
	{
		return $this->belongsTo("Marca","idmarca");
	}

	public void Registrarproducto( $idMarca,$idCtegoria)
	{
		protected $table = 'productos';
		protected $primaryKey="id";
		$Registrarproducto=DB::table('productos')
		Registrarproducto = productos(call Registrarproducto(" + ddlMarca + "," ddlCategoria" ));
		productos.Registrarproducto("INSERT INTO PRODUCTO VALUES (idcategoria" + "," + "idmarca");
	}
		
		public void Guardarproducto( $idMarca,$idCtegoria)
	{
		protected $table = 'productos';
		protected $primaryKey="id";
		$Guardarproducto=DB::table('productos')
		Guardarproducto = productos(call Guardarproducto("  ddlMarca" + " ddlCategoria", + "nombre",+ "color" + "preciounitario" + " stock", " descripcion" ));
		productos.Guardarproducto("INSERT INTO PRODUCTO VALUES ('productos.nombre','productos.preciounitario','productos.ruta_imagen','productos.color','productos.descripcion','marca.nombremarca','categoria.nombre','productos.id',"productos.stock"");
		productos.Guardarproducto("INSERT INTO ruta_imagen VALUES " producto);
	}
	
		public void Actualizarproducto( $idMarca,$idCtegoria)
	{
		protected $table = 'productos';
		protected $primaryKey="id";
		$Actualizarproducto=DB::table('productos')
		Actualizarproducto = productos(call Actualizarproducto("  ddlMarca" + " ddlCategoria", + "nombre",+ "color" + "preciounitario" + " stock", " descripcion" ));
		productos.Actualizarproducto("UPDATE PRODUCTO VALUES ('productos.nombre','productos.preciounitario','productos.ruta_imagen','productos.color','productos.descripcion','marca.nombremarca','categoria.nombre','productos.id',"productos.stock"");
		productos.Actualizarproducto("UPDATE ruta_imagen VALUES " producto);
	}

		public void Obtenerproducto($idproducto)
	{
		protected $table = 'productos';
		protected $primaryKey="id";
		$Obtenerproducto=DB::table('productos')
		Obtenerproducto = productos(call Obtenerproducto("  ddlMarca" + " ddlCategoria", + "nombre",+ "color" + "preciounitario" + " stock", " descripcion" ));
		productos.Obtenerproducto("SELECT PRODUCTO VALUES ('productos.nombre','productos.preciounitario','productos.ruta_imagen','productos.color','productos.descripcion','marca.nombremarca','categoria.nombre','productos.id',"productos.stock"");
		where('productos.id','=', $idproducto)

	}

	public void Eliminarproducto( $idproducto)
	{
		protected $table = 'productos';
		protected $primaryKey="id";
		$Eliminarproducto=DB::table('productos')
		Eliminarproducto = productos(call Eliminarproducto("idproducto";
		productos.Eliminarproducto("delete from  producto where idproducto ");
	}
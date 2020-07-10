<?php
class Producto extends Eloquent
{
	protected $table = 'productos';
	protected $primaryKey="id";

		public function Marca()
	{
		return $this->belongsTo("Marca","idmarca");
	}
}
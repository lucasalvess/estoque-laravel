<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
        // $this->call(UsersTableSeeder::class);
		$this->call('CategoriaTableSeeder');
	}
}


class CategoriaTableSeeder extends Seeder
{
	
	public function run(){
		Categoria::create(['nome'=>'Eletrodomestico']);
		Categoria::create(['nome'=>'Eletroeletronico']);
		Categoria::create(['nome'=>'Móvel']);
	}
}

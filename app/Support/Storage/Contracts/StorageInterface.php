<?php

namespace App\Support\Storage\Contracts;

interface StorageInterface
{
	public function set($index, $value);
	public function get($index);
	public function all();
	public function exists($index);
	public function remove($index);
	public function clear();
}

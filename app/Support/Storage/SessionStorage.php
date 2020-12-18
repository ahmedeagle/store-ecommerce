<?php

namespace App\Support\Storage;

use App\Support\Storage\Contracts\StorageInterface;

use Session;

class SessionStorage implements StorageInterface
{
	/**
	 * The bucket beeing used.
	 *
	 * @var String
	 */
	protected $bucket;

	/**
	 * Set the bucket name that should be used.
	 *
	 * @param String $bucket
	 */
	public function __construct($bucket = 'default')
	{
		if(! Session::has($bucket)) {
			Session::put($bucket, []);
		}

		$this->bucket = $bucket;
	}

	/**
	 * Put the product inside the bucket.
	 *
	 * @param Integer $index
	 * @param array   $value
	 */
	public function set($index, $value)
	{
		return Session::put("{$this->bucket}.{$index}", $value);
	}

    /**
     * Get the product from the bucket.
     *
     * @param $index
     *
     * @return mixed|null
     */
	public function get($index)
	{
		if (! $this->exists($index)) {
			return null;
		}

		return Session::get("{$this->bucket}.{$index}");
	}

    /**
     * Check if the product index exists in the bucket.
     *
     * @param $index
     *
     * @return mixed
     */
	public function exists($index)
	{
		return Session::has("{$this->bucket}.{$index}");
	}

	/**
	 * Get all products inside the bucket.
	 *
	 */
	public function all()
	{
		return Session::get("{$this->bucket}");
	}

	/**
	 * Remove a product from the bucket.
	 *
	 * @param Integer $index
	 */
	public function remove($index)
	{
		if ($this->exists($index)) {
			Session::forget("{$this->bucket}.{$index}");
		}
	}

	/**
	 * Clear the entire bucket.
	 */
	public function clear()
	{
		Session::forget($this->bucket);
	}
}

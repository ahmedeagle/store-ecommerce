<?php

namespace App\Exceptions;

use Exception;

class QuantityExceededException extends Exception
{
	/**
	 * The message that will be shown if the exception has been thrown.
	 *
	 * @var Message
	 */
	public $message = 'You have added the maximum stock for this item';
}

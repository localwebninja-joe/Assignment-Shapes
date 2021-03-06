<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Square implements ShapeInterface {

	protected $side;

	/**
	 * Square constructor.
	 *
	 * @param int $side
	 */
	public function __construct($side)
	{
		$this->side = $side;
	}

	/**
	 * Get the area x ^2
	 *
	 * @return int
	 */
	public function area()
	{
		return pow($this->side, 2);
	}

	/**
	 * Get the perimeter
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 4 * $this->side;
	}

}

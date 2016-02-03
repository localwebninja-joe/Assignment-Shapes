<?php

namespace Shapes;

include_once('ThreeDShapeInterface.php');

class Cube implements ThreeDShapeInterface {

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
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		return 6 * pow($this->side, 2);
	}

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume()
	{
		return pow($this->side, 3);
	}

}

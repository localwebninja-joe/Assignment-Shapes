<?php

namespace Shapes;

include_once('ThreeDShapeInterface.php');

class Sphere implements ThreeDShapeInterface {

	protected $radius;

	/**
	 * Square constructor.
	 *
	 * @param int $radius
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}
	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		return 6 * pow($this->radius, 2);
	}

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume()
	{
		return (4/3) * pi() * pow($this->radius, 3);
	}

}

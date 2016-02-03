<?php

namespace Shapes;

interface ThreeDShapeInterface {

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area();

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume();

}

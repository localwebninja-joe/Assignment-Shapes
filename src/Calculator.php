<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{	
		foreach ($shapes as $index => $shape) {
			$total[] = $shape->area();
		}
		return array_sum($total);
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		foreach ($shapes as $index => $shape) {
			if(method_exists($shape, 'volume')) {
			    $total[] = $shape->volume();
			}
		}
		return array_sum($total);
	}

}

<?php

namespace ValueFormatters;

/**
 * Basic (dummy) localizer.
 *
 * @see \ValueParsers\NumberUnlocalizer
 *
 * @since 0.3
 *
 * @licence GNU GPL v2+
 * @author Daniel Kinzler
 */
class BasicNumberLocalizer implements NumberLocalizer {

	/**
	 * @see NumberLocalizer::localizeNumber
	 *
	 * Returns PHP's default representation of the given number.
	 *
	 * @param string|int|float $number
	 *
	 * @return string
	 */
	public function localizeNumber( $number ) {
		return "$number";
	}

}

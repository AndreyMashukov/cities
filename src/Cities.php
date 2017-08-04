<?php

namespace AdService;

class Cities
    {

	/**
	 * Cities
	 *
	 * @var Array
	 */
	private $_cities = [];


	/**
	 * Prepare class to work
	 *
	 * @param string $path Path to file
	 *
	 * @return void
	 */

	public function __construct(string $path)
	    {
		$array = explode("\n", file_get_contents($path));

		foreach ($array as $city)
		    {
			$city   = trim($city);
			$symbol = mb_strtoupper(mb_substr($city, 0, 1));
			if (isset($cities[$symbol]) === true)
			    {
				$cities[$symbol][] = $city;
			    }
			else
			    {
				$cities[$symbol] = [$city];
			    } //end if

		    } //end foreach

		$this->_cities = $cities;;
	    } //end __construct()


	/**
	 * Get all cities
	 *
	 * @return array Cities
	 */

	public function all():array
	    {
		return $this->_cities;
	    } //end all()


	/**
	 * Get cities by symbol
	 *
	 * @param string $symbol Symbol
	 *
	 * @return array cities
	 */

	public function symbol(string $symbol):array
	    {
		if (isset($this->_cities[$symbol]) === true)
		    {
			return $this->_cities[$symbol];
		    }
		else
		    {
			return [];
		    } //end if

	    } //end symbol()


    } //end class

?>

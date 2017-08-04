<?php

namespace Tests;

use \AdService\Cities;
use \PHPUnit\Framework\TestCase;

 /**
  * @runTestsInSeparateProcesses
  */

class CitiesTest extends TestCase
    {

	/**
	 * Should return array with cities sorted by symbols
	 *
	 * @return void
	 */

	public function testShouldReturnArrayWithCitiesSortedBySymbols()
	    {
		$cities = new Cities(__DIR__ . "/datasets/cities.txt");

		$expected = [
		    "А" => ["Армавир", "Архангельск"],
		    "И" => ["Иркутск", "Ижевск"],
		    "Х" => ["Хабаровск"],
		];

		$this->assertEquals($expected, $cities->all());
	    } //end testShouldReturnArrayWithCitiesSortedBySymbols()


	/**
	 * Should return cities array by symbol
	 *
	 * @return void
	 */

	public function testShouldReturnCitiesArrayBySymbol()
	    {
		$cities = new Cities(__DIR__ . "/datasets/cities.txt");

		$expected = [
		    "А" => ["Армавир", "Архангельск"],
		    "И" => ["Иркутск", "Ижевск"],
		    "Х" => ["Хабаровск"],
		];

		$this->assertEquals($expected["А"], $cities->symbol("А"));
		$this->assertEquals($expected["И"], $cities->symbol("И"));
		$this->assertEquals($expected["Х"], $cities->symbol("Х"));
	    } //end testShouldReturnCitiesArrayBySymbol()


    } //end class

?>

<?php

use \PHPUnit\Framework\TestCase;

// Not the most elegant way but since I was a bit short of time, this will do the trick.
require __DIR__ . "/../autoloader.php";

class Day6Test extends TestCase
{
    public function testSolutionOne()
    {
        $solutionPartOne = (new Day6())->solvePartOne();
        $this->assertEquals(417916, $solutionPartOne);
    }

    public function testSolutionTwo()
    {
        $solutionPartTwo = (new Day6())->solvePartTwo();
        $this->assertEquals(523, $solutionPartTwo);
    }
}

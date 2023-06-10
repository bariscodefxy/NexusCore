<?php

use NexusCore\Core\TerrainGen\FlatlandGenerator;
use NexusCore\Core\World\Chunk;
use NexusCore\API\Coordinates3D;
use NexusCore\API\Coordinates2D;
use PHPUnit\Framework\TestCase;

class FlatlandGeneratorTest extends TestCase {
	public function testCanGenerateLayers() {
		$chunk1pos = new Coordinates3D(0,0);
		$generator = new FlatlandGenerator();

		$chunk = $generator->generateChunk($chunk1pos);

		$c = new Coordinates3D(0,20,0);
		$blockid = $chunk->getBlockID($c);
		$this->assertEquals($blockid, 0x00, "Expects block to be air at y-level 20");

		$c = new Coordinates3D(0,0,0);
		$blockid = $chunk->getBlockID($c);
		$this->assertEquals($blockid, 0x03, "Expects block to be dirt at y-level 0");


		$c = new Coordinates3D(0,9,0);
		$blockid = $chunk->getBlockID($c);
		$this->assertEquals($blockid, 0x02, "Expects block to be grass at y-level 9");
	}
}


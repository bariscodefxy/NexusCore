<?php

use NexusCore\Core\World\World;
use NexusCore\API\BlockProvider;
use NexusCore\API\Coordinates3D;
use NexusCore\API\Coordinates2D;
use PHPUnit\Framework\TestCase;

class WorldTest extends TestCase {
	public function testWorldGeneration() {
		$chunkCoordinates = new Coordinates2D(0,0);
		$blockCoordinates = new Coordinates3D(0,20,0);

		$BlockProvider = new BlockProvider();

		$world = new World("testworld", $BlockProvider);

		$this->assertEquals($world->worldname, "testworld", "Expects world name to be testworld");

		$chunk = $world->generateChunk($chunkCoordinates);

		$this->assertEquals($chunk->getBlockID($blockCoordinates), 0x00, "Expects block to be air in the chunk");
	}
}

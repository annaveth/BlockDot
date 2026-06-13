<?php
/**
 * Tests for BlockDot
 */

use PHPUnit\Framework\TestCase;
use Blockdot\Blockdot;

class BlockdotTest extends TestCase {
    private Blockdot $instance;

    protected function setUp(): void {
        $this->instance = new Blockdot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockdot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

<?php
/**
 * Tests for NodeAxionix
 */

use PHPUnit\Framework\TestCase;
use Nodeaxionix\Nodeaxionix;

class NodeaxionixTest extends TestCase {
    private Nodeaxionix $instance;

    protected function setUp(): void {
        $this->instance = new Nodeaxionix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeaxionix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

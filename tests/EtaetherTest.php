<?php
/**
 * Tests for EtaEther
 */

use PHPUnit\Framework\TestCase;
use Etaether\Etaether;

class EtaetherTest extends TestCase {
    private Etaether $instance;

    protected function setUp(): void {
        $this->instance = new Etaether(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etaether::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

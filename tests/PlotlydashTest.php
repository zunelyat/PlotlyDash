<?php
/**
 * Tests for PlotlyDash
 */

use PHPUnit\Framework\TestCase;
use Plotlydash\Plotlydash;

class PlotlydashTest extends TestCase {
    private Plotlydash $instance;

    protected function setUp(): void {
        $this->instance = new Plotlydash(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Plotlydash::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\AccessLogComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\AccessLogComponent Test Case
 */
class AccessLogComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\AccessLogComponent
     */
    protected $AccessLog;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->AccessLog = new AccessLogComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AccessLog);

        parent::tearDown();
    }
}

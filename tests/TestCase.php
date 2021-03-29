<?php

namespace Sfneal\Observables\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

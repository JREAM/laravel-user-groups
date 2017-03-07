<?php

namespace Jream\UserGroups\Tests\Models;
use Jream\UserGroups\Tests\TestCase;

abstract class ModelsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

}

<?php

namespace mibexx\AppGenerator\Test\Integration\DependencyInjection;


use mibexx\AppGenerator\DependencyInjection\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testGetSetService()
    {
        $facade = new Facade();
        $facade->setService("unit.Test", function () { return "testValue"; });
        $this->assertEquals("testValue", $facade->getService("unit.Test"));
    }

    /**
     * @expectedException \mibexx\AppGenerator\DependencyInjection\Exception\ServiceNotFound
     */
    public function testFailGetService()
    {
        $facade = new Facade();
        $facade->getService("unit.Fail");
    }
}
<?php

namespace mibexx\AppGenerator\Test\Unit\DependencyInjection\Simple;


use mibexx\AppGenerator\DependencyInjection\Simple\SimpleDiContainer;
use PHPUnit\Framework\TestCase;

class SimpleDiContainerTest extends TestCase
{
    public function testSetGet()
    {
        $simpleDi = new SimpleDiContainer();
        $simpleDi->set("unit.Test", function() { return 'testVal'; });
        $this->assertEquals('testVal', $simpleDi->get('unit.Test'));
    }

    /**
     * @expectedException mibexx\AppGenerator\DependencyInjection\Exception\ServiceNotFound
     */
    public function testGetException()
    {
        $simpleDi = new SimpleDiContainer();
        $simpleDi->get('not.Exist');
    }
}
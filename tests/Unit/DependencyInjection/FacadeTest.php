<?php

namespace mibexx\AppGenerator\Test\Unit\DependencyInjection;


use mibexx\AppGenerator\DependencyInjection\DiContainer;
use mibexx\AppGenerator\DependencyInjection\DiFactory;
use mibexx\AppGenerator\DependencyInjection\DiFactoryInterface;
use mibexx\AppGenerator\DependencyInjection\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testGetDi()
    {
        $diFacade = new Facade();
        $this->assertInstanceOf(DiContainer::class, $diFacade->getDi());
    }

    public function testGetSetFactory()
    {
        $diFacade = new Facade();
        $this->assertInstanceOf(DiFactory::class, $diFacade->getFactory());

        $diFactoryTest = $this->getMockBuilder(DiFactoryInterface::class)
                              ->setMethods(["get"])
                              ->getMock();

        $diFacade->setFactory($diFactoryTest);
        $this->assertEquals($diFactoryTest, $diFacade->getFactory());
    }
}
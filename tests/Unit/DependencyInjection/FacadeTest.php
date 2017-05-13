<?php

namespace mibexx\AppGenerator\Test\Unit\DependencyInjection;


use mibexx\AppGenerator\DependencyInjection\DiContainer;
use mibexx\AppGenerator\DependencyInjection\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testGetDi()
    {
        $diFacade = new Facade();
        $this->assertInstanceOf(DiContainer::class, $diFacade->getDi());
    }
}
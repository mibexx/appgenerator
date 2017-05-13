<?php

namespace mibexx\AppGenerator\Test\Unit\DependencyInjection;


use mibexx\AppGenerator\DependencyInjection\DiContainer;
use mibexx\AppGenerator\DependencyInjection\DiFactory;
use PHPUnit\Framework\TestCase;

class DiFactoryTest extends TestCase
{
    public function testGet()
    {
        $diFactory = new DiFactory();
        $this->assertInstanceOf(DiContainer::class, $diFactory->get());
    }
}
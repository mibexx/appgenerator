<?php

namespace mibexx\AppGenerator\DependencyInjection;


class Facade
{
    /**
     * @var DiFactoryInterface
     */
    private $factory;

    /**
     * Facade constructor.
     * @param DiFactoryInterface $factory
     */
    public function __construct()
    {
        $this->factory = new DiFactory();
    }

    /**
     * @return DiFactoryInterface
     */
    public function getFactory(): DiFactoryInterface
    {
        return $this->factory;
    }

    /**
     * @param DiFactoryInterface $factory
     */
    public function setFactory(DiFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return DiContainer
     */
    public function getDi()
    {
        return $this->getFactory()->get();
    }
}
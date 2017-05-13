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
    public function __construct(DiFactoryInterface $factory = null)
    {
        if ($factory === null) {
            $factory = new DiFactory();
        }
        $this->factory = $factory;
    }

    /**
     * @return DiContainer
     */
    public function getDi()
    {
        return $this->factory->get();
    }
}
<?php

namespace mibexx\AppGenerator\DependencyInjection;


class Facade implements DiFacadeInterface
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
     * @param $name
     * @param callable $service
     * @return null
     */
    public function setService($name, callable $service)
    {
        $this->getFactory()->get()->set($name, $service);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getService($name)
    {
        return $this->getFactory()->get()->get($name);
    }

    /**
     * @return DiFactoryInterface
     */
    private function getFactory()
    {
        return $this->factory;
    }
}
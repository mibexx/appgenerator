<?php

namespace mibexx\AppGenerator\DependencyInjection;


interface DiGetter
{
    /**
     * @param $name
     * @return mixed
     */
    public function get($name);
}
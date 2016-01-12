<?php

namespace DP\Elements;

use DP\Contracts\FormElement;

abstract class AbstractField
{
    /**
     * @var FormElement[]
     */
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function setClass($class)
    {
        $this->attributes['class'] = $class;

        return $this;
    }

    public function getClass()
    {
        return $this->attributes['class'] ?? null;
    }
}
<?php

namespace DP\Elements;

use DP\Contracts\FormElement;

class Input implements FormElement
{
    protected $attributes = [];

    public function __construct(array $attributes = array())
    {
        $this->attributes = $attributes;
    }

    public function setType($type)
    {
        $this->attributes['type'] = $type;

        return $this;
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

    public function getType()
    {
        return $this->attributes['type'] ?? null;
    }

    public function setValue($value)
    {
        $this->attributes['value'] = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->attributes['value'] ?? null;
    }

    public function render()
    {
        echo '<input ';
        foreach($this->attributes as $attrName => $attrValue) {
            echo "{$attrName}=\"{$attrValue}\" ";
        }
        echo "/>\n";
    }
}
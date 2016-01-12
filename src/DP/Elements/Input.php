<?php

namespace DP\Elements;

use DP\Contracts\FormElement;

class Input extends AbstractField implements FormElement
{
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
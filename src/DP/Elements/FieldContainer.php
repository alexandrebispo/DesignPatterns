<?php

namespace DP\Elements;

use DP\Contracts\FormElement;

abstract class FieldContainer
{
    /**
     * @var FormElement[]
     */
    protected $fields;

    public function addField(FormElement $field)
    {
        $this->fields[] = $field;

        return $this;
    }
}
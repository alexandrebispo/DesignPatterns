<?php

namespace DP\Elements;

use DP\Contracts\FormElement;

class Fieldset extends FieldContainer implements FormElement
{
    protected $legend;

    public function __construct($legend = null)
    {
        $this->legend = $legend;
    }

    public function setLegend($legend)
    {
        $this->legend = $legend;

        return $this;
    }

    public function render()
    {
        echo '<fieldset><legend>'. $this->legend .'</legend>';
        foreach($this->fields as $field) {
            $field->render();
        }
        echo '</fieldset>';
    }
}
<?php

namespace DP\Elements;

use DP\Contracts\FormElement;

class Label extends AbstractField implements FormElement
{
    protected $text;
    protected $for;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return Label
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * @param string $for
     * @return Label
     */
    public function setFor($for)
    {
        $this->for = $for;

        return $this;
    }

    public function render()
    {
        echo '<label for="'. $this->getFor() .'" class="'. $this->getClass() .'">'. $this->getText() .'</label>';
    }
}
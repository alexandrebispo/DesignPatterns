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
        return $this->attributes['text'] ?? null;
    }

    /**
     * @param string $text
     * @return Label
     */
    public function setText($text)
    {
        $this->attributes['text'] = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getFor()
    {
        return $this->attributes['for'] ?? null;
    }

    /**
     * @param string $for
     * @return Label
     */
    public function setFor($for)
    {
        $this->attributes['for'] = $for;

        return $this;
    }

    public function render()
    {
        echo '<label for="'. $this->getFor() .'" class="'. $this->getClass() .'">'. $this->getText() .'</label>';
    }
}
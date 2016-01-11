<?php

namespace DP;

use DP\Contracts\FormElement;

class Form implements FormElement
{
    protected $method = "POST";
    protected $action = "/";

    /**
     * @var FormElement[]
     */
    protected $fields = [];

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return Form
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return Form
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @param FormElement $field
     * @return $this
     */
    public function addField(FormElement $field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * @return FormElement[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Prints an HTML form
     *
     */
    public function render()
    {
        echo '<form method="'. $this->method .'" action="'. $this->action .'">';
        foreach ($this->fields as $field) {
            $field->render();
        }
        echo'</form>';
    }
}
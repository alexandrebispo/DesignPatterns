<?php

namespace DP;

use DP\Contracts\{FormElement, FormInterface};
use DP\Elements\FieldContainer;

class Form extends FieldContainer implements FormElement, FormInterface
{
    protected $validator;

    /**
     * Form constructor.
     * @param Validator $validator
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

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
     * @param string $fieldName
     * @param array $fieldAttributes
     * @return bool|FormElement
     */
    public function createField($fieldName, $fieldAttributes = [])
    {
        $namespace = "DP\\Elements\\";
        $classname = $namespace . ucfirst(strtolower($fieldName));
        if(class_exists($classname)) {
            return new $classname($fieldAttributes);
        }

        return false;
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

    /**
     * @return Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

}
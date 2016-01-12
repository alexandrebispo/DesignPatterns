<?php

namespace DP\Contracts;

interface FormInterface
{
    public function createField($fieldName, $fieldAttributes = []);
}
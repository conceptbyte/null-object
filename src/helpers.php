<?php

if (!function_exists('no')) {
    /**
     * Create a null object
     *
     * @return static
     */
    function no() {
        return \ConceptByte\NullObject\NullObject::create();
    }
}
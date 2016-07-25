<?php

namespace ConceptByte\NullObject;

class NullObject extends \SimpleXMLElement
{

    /**
     * Named constructor to create the class
     *
     * @return static
     */
    public static function create()
    {
        return new static('<stupid></stupid>');
    }

    /**
     * Handles casting to a string
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }

    /**
     * Suppress function calls
     *
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        // Silence is golden
    }

    /**
     * Suppress static method calls
     *
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        // Silence is golden
    }

    /**
     * Suppress method calls
     *
     * @param \child $name
     * @return \SimpleXMLElement[]|void
     */
    public function __get($name)
    {
        // Silence is golden
    }
}
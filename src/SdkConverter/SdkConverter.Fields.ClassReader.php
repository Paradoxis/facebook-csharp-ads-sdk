<?php

/**
 * Namespace
 * @copyright (c) 2014 - 2016 | Paradoxis
 */
namespace SdkConverter\Fields;

/**
 * Use classes
 */
use \SdkConverter\Converter;
use \SdkConverter\AbstractClassReader;

/**
 * Class ClassReader
 * @package SdkConverter\Fields
 * @author  Paradoxis <luke@paradoxis.nl>
 */
class ClassReader extends AbstractClassReader
{
    /**
     * Get the output directory path
     * @return string
     */
    public function getOutputLocation()
    {
        return __DIR__.Converter::OUTPUT_DIR_FIELDS;
    }

    /**
     * Get the output directory path
     * @return string
     */
    public function getOutputFileLocation()
    {
        return __DIR__.Converter::OUTPUT_DIR_FIELDS."{$this->getClassName()}.cs";
    }

    /**
     * Get the template file path
     * @return string
     */
    public function getTemplateLocation()
    {
        return __DIR__.'/SdkConverter.Fields.ClassTemplate.php';
    }

    /**
     * Get all methods as a MethodReader array
     * @return array
     */
    public function getConstants()
    {
        return $constants = $this->reflection->getConstants();
    }
}
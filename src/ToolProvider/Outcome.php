<?php

namespace IMSGlobal\LTI\ToolProvider;

/**
 * Class to represent an outcome
 *
 * @author  Stephen P Vickers <svickers@imsglobal.org>
 * @copyright  IMS Global Learning Consortium Inc
 * @date  2016
 * @version 3.0.2
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class Outcome
{
/**
 * Text Data Type
 */
    const DATA_TYPE_TEXT = 'text';

/**
 * Url Data Type
 */
    const DATA_TYPE_URL = 'url';

/**
 * Language value.
 *
 * @var string $language
 */
    public $language = null;
/**
 * Outcome status value.
 *
 * @var string $status
 */
    public $status = null;
/**
 * Outcome date value.
 *
 * @var string $date
 */
    public $date = null;
/**
 * Outcome type value.
 *
 * @var string $type
 */
    public $type = null;
/**
 * Outcome data source value.
 *
 * @var string $dataSource
 */
    public $dataSource = null;

/**
 * Outcome value.
 *
 * @var string $value
 */
    private $value = null;

/**
 * Data value.
 *
 * @var string $data
 */
    private $data = null;

/**
 * Data Type value.
 *
 * @var string $dataType
 */
    private $dataType = null;

/**
 * Class constructor.
 *
 * @param string $value     Outcome value (optional, default is none)
 */
    public function __construct($value = null, $data = null)
    {

        $this->value = $value;
        $this->language = 'en-US';
        $this->date = gmdate('Y-m-d\TH:i:s\Z', time());
        $this->type = 'decimal';
        $this->data = $data;
        $this->dataType = self::DATA_TYPE_TEXT;

    }

/**
 * Get the outcome value.
 *
 * @return string Outcome value
 */
    public function getValue()
    {

        return $this->value;

    }

/**
 * Set the outcome value.
 *
 * @param string $value  Outcome value
 */
    public function setValue($value)
    {

        $this->value = $value;

    }

/**
 * Get the data value.
 *
 * @return string Data value
 */
    public function getData()
    {

        return $this->data;

    }

/**
 * Set the data value.
 *
 * @param string $data  Data value
 */
    public function setData($data)
    {

        $this->data = $data;

    }
/**
 * Get the dataType value.
 *
 * @return string DataType value
 */
    public function getDataType()
    {

        return $this->dataType;

    }

/**
 * Set the dataType value.
 *
 * @param string $dataType  DataType value
 */
    public function setDataType($dataType)
    {

        $this->dataType = $dataType;

    }

}

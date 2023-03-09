<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_evaluation_slice.proto

namespace Google\Cloud\AIPlatform\V1\ModelEvaluationSlice\Slice\SliceSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Single value that supports strings and floats.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpec.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $string_value
     *           String type.
     *     @type float $float_value
     *           Float type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelEvaluationSlice::initOnce();
        parent::__construct($data);
    }

    /**
     * String type.
     *
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * String type.
     *
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Float type.
     *
     * Generated from protobuf field <code>float float_value = 2;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(2);
    }

    public function hasFloatValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Float type.
     *
     * Generated from protobuf field <code>float float_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}


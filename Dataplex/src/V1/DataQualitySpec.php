<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataQualityScan related setting.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualitySpec</code>
 */
class DataQualitySpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of rules to evaluate against a data source. At least one rule is
     * required.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityRule rules = 1;</code>
     */
    private $rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataplex\V1\DataQualityRule>|\Google\Protobuf\Internal\RepeatedField $rules
     *           The list of rules to evaluate against a data source. At least one rule is
     *           required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of rules to evaluate against a data source. At least one rule is
     * required.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityRule rules = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * The list of rules to evaluate against a data source. At least one rule is
     * required.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataQualityRule rules = 1;</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataQualityRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataQualityRule::class);
        $this->rules = $arr;

        return $this;
    }

}

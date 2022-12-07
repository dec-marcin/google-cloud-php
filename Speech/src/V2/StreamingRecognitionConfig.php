<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides configuration information for the StreamingRecognize request.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.StreamingRecognitionConfig</code>
 */
class StreamingRecognitionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Features and audio metadata to use for the Automatic Speech
     * Recognition. This field in combination with the
     * [config_mask][google.cloud.speech.v2.StreamingRecognitionConfig.config_mask]
     * field can be used to override parts of the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the Recognizer resource.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $config = null;
    /**
     * The list of fields in
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] that
     * override the values in the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the recognizer during this recognition request. If no mask is provided,
     * all non-default valued fields in
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] override
     * the values in the recognizer for this recognition request. If a mask is
     * provided, only the fields listed in the mask override the config in the
     * recognizer for this recognition request. If a wildcard (`*`) is provided,
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config]
     * completely overrides and replaces the config in the recognizer for this
     * recognition request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask config_mask = 3;</code>
     */
    private $config_mask = null;
    /**
     * Speech recognition features to enable specific to streaming audio
     * recognition requests.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.StreamingRecognitionFeatures streaming_features = 2;</code>
     */
    private $streaming_features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V2\RecognitionConfig $config
     *           Required. Features and audio metadata to use for the Automatic Speech
     *           Recognition. This field in combination with the
     *           [config_mask][google.cloud.speech.v2.StreamingRecognitionConfig.config_mask]
     *           field can be used to override parts of the
     *           [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     *           of the Recognizer resource.
     *     @type \Google\Protobuf\FieldMask $config_mask
     *           The list of fields in
     *           [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] that
     *           override the values in the
     *           [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     *           of the recognizer during this recognition request. If no mask is provided,
     *           all non-default valued fields in
     *           [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] override
     *           the values in the recognizer for this recognition request. If a mask is
     *           provided, only the fields listed in the mask override the config in the
     *           recognizer for this recognition request. If a wildcard (`*`) is provided,
     *           [config][google.cloud.speech.v2.StreamingRecognitionConfig.config]
     *           completely overrides and replaces the config in the recognizer for this
     *           recognition request.
     *     @type \Google\Cloud\Speech\V2\StreamingRecognitionFeatures $streaming_features
     *           Speech recognition features to enable specific to streaming audio
     *           recognition requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Features and audio metadata to use for the Automatic Speech
     * Recognition. This field in combination with the
     * [config_mask][google.cloud.speech.v2.StreamingRecognitionConfig.config_mask]
     * field can be used to override parts of the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the Recognizer resource.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V2\RecognitionConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Required. Features and audio metadata to use for the Automatic Speech
     * Recognition. This field in combination with the
     * [config_mask][google.cloud.speech.v2.StreamingRecognitionConfig.config_mask]
     * field can be used to override parts of the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the Recognizer resource.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V2\RecognitionConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\RecognitionConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * The list of fields in
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] that
     * override the values in the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the recognizer during this recognition request. If no mask is provided,
     * all non-default valued fields in
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] override
     * the values in the recognizer for this recognition request. If a mask is
     * provided, only the fields listed in the mask override the config in the
     * recognizer for this recognition request. If a wildcard (`*`) is provided,
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config]
     * completely overrides and replaces the config in the recognizer for this
     * recognition request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask config_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getConfigMask()
    {
        return $this->config_mask;
    }

    public function hasConfigMask()
    {
        return isset($this->config_mask);
    }

    public function clearConfigMask()
    {
        unset($this->config_mask);
    }

    /**
     * The list of fields in
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] that
     * override the values in the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the recognizer during this recognition request. If no mask is provided,
     * all non-default valued fields in
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config] override
     * the values in the recognizer for this recognition request. If a mask is
     * provided, only the fields listed in the mask override the config in the
     * recognizer for this recognition request. If a wildcard (`*`) is provided,
     * [config][google.cloud.speech.v2.StreamingRecognitionConfig.config]
     * completely overrides and replaces the config in the recognizer for this
     * recognition request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask config_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setConfigMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->config_mask = $var;

        return $this;
    }

    /**
     * Speech recognition features to enable specific to streaming audio
     * recognition requests.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.StreamingRecognitionFeatures streaming_features = 2;</code>
     * @return \Google\Cloud\Speech\V2\StreamingRecognitionFeatures|null
     */
    public function getStreamingFeatures()
    {
        return $this->streaming_features;
    }

    public function hasStreamingFeatures()
    {
        return isset($this->streaming_features);
    }

    public function clearStreamingFeatures()
    {
        unset($this->streaming_features);
    }

    /**
     * Speech recognition features to enable specific to streaming audio
     * recognition requests.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.StreamingRecognitionFeatures streaming_features = 2;</code>
     * @param \Google\Cloud\Speech\V2\StreamingRecognitionFeatures $var
     * @return $this
     */
    public function setStreamingFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\StreamingRecognitionFeatures::class);
        $this->streaming_features = $var;

        return $this;
    }

}

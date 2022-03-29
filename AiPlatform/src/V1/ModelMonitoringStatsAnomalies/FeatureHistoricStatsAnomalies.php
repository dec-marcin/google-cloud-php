<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto

namespace Google\Cloud\AIPlatform\V1\ModelMonitoringStatsAnomalies;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Historical Stats (and Anomalies) for a specific Feature.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies.FeatureHistoricStatsAnomalies</code>
 */
class FeatureHistoricStatsAnomalies extends \Google\Protobuf\Internal\Message
{
    /**
     * Display Name of the Feature.
     *
     * Generated from protobuf field <code>string feature_display_name = 1;</code>
     */
    private $feature_display_name = '';
    /**
     * Threshold for anomaly detection.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ThresholdConfig threshold = 3;</code>
     */
    private $threshold = null;
    /**
     * Stats calculated for the Training Dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureStatsAnomaly training_stats = 4;</code>
     */
    private $training_stats = null;
    /**
     * A list of historical stats generated by different time window's
     * Prediction Dataset.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureStatsAnomaly prediction_stats = 5;</code>
     */
    private $prediction_stats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $feature_display_name
     *           Display Name of the Feature.
     *     @type \Google\Cloud\AIPlatform\V1\ThresholdConfig $threshold
     *           Threshold for anomaly detection.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly $training_stats
     *           Stats calculated for the Training Dataset.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly[]|\Google\Protobuf\Internal\RepeatedField $prediction_stats
     *           A list of historical stats generated by different time window's
     *           Prediction Dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelDeploymentMonitoringJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Display Name of the Feature.
     *
     * Generated from protobuf field <code>string feature_display_name = 1;</code>
     * @return string
     */
    public function getFeatureDisplayName()
    {
        return $this->feature_display_name;
    }

    /**
     * Display Name of the Feature.
     *
     * Generated from protobuf field <code>string feature_display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFeatureDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->feature_display_name = $var;

        return $this;
    }

    /**
     * Threshold for anomaly detection.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ThresholdConfig threshold = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\ThresholdConfig|null
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    public function hasThreshold()
    {
        return isset($this->threshold);
    }

    public function clearThreshold()
    {
        unset($this->threshold);
    }

    /**
     * Threshold for anomaly detection.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ThresholdConfig threshold = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\ThresholdConfig $var
     * @return $this
     */
    public function setThreshold($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ThresholdConfig::class);
        $this->threshold = $var;

        return $this;
    }

    /**
     * Stats calculated for the Training Dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureStatsAnomaly training_stats = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly|null
     */
    public function getTrainingStats()
    {
        return $this->training_stats;
    }

    public function hasTrainingStats()
    {
        return isset($this->training_stats);
    }

    public function clearTrainingStats()
    {
        unset($this->training_stats);
    }

    /**
     * Stats calculated for the Training Dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureStatsAnomaly training_stats = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly $var
     * @return $this
     */
    public function setTrainingStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly::class);
        $this->training_stats = $var;

        return $this;
    }

    /**
     * A list of historical stats generated by different time window's
     * Prediction Dataset.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureStatsAnomaly prediction_stats = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPredictionStats()
    {
        return $this->prediction_stats;
    }

    /**
     * A list of historical stats generated by different time window's
     * Prediction Dataset.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureStatsAnomaly prediction_stats = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPredictionStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FeatureStatsAnomaly::class);
        $this->prediction_stats = $arr;

        return $this;
    }

}


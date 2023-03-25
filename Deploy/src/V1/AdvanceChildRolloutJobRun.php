<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AdvanceChildRolloutJobRun contains information specific to a
 * advanceChildRollout `JobRun`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AdvanceChildRolloutJobRun</code>
 */
class AdvanceChildRolloutJobRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the `ChildRollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string rollout = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $rollout = '';
    /**
     * Output only. the ID of the ChildRollout's Phase.
     *
     * Generated from protobuf field <code>string rollout_phase_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $rollout_phase_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rollout
     *           Output only. Name of the `ChildRollout`. Format is projects/{project}/
     *           locations/{location}/deliveryPipelines/{deliveryPipeline}/
     *           releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *     @type string $rollout_phase_id
     *           Output only. the ID of the ChildRollout's Phase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the `ChildRollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string rollout = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    /**
     * Output only. Name of the `ChildRollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string rollout = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout = $var;

        return $this;
    }

    /**
     * Output only. the ID of the ChildRollout's Phase.
     *
     * Generated from protobuf field <code>string rollout_phase_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRolloutPhaseId()
    {
        return $this->rollout_phase_id;
    }

    /**
     * Output only. the ID of the ChildRollout's Phase.
     *
     * Generated from protobuf field <code>string rollout_phase_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRolloutPhaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout_phase_id = $var;

        return $this;
    }

}

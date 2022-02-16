<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A selector that chooses target cluster for jobs based on metadata.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ClusterSelector</code>
 */
class ClusterSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The zone where workflow process executes. This parameter does not
     * affect the selection of the cluster.
     * If unspecified, the zone of the first cluster matching the selector
     * is used.
     *
     * Generated from protobuf field <code>string zone = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $zone = '';
    /**
     * Required. The cluster labels. Cluster must have all labels
     * to match.
     *
     * Generated from protobuf field <code>map<string, string> cluster_labels = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $zone
     *           Optional. The zone where workflow process executes. This parameter does not
     *           affect the selection of the cluster.
     *           If unspecified, the zone of the first cluster matching the selector
     *           is used.
     *     @type array|\Google\Protobuf\Internal\MapField $cluster_labels
     *           Required. The cluster labels. Cluster must have all labels
     *           to match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The zone where workflow process executes. This parameter does not
     * affect the selection of the cluster.
     * If unspecified, the zone of the first cluster matching the selector
     * is used.
     *
     * Generated from protobuf field <code>string zone = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Optional. The zone where workflow process executes. This parameter does not
     * affect the selection of the cluster.
     * If unspecified, the zone of the first cluster matching the selector
     * is used.
     *
     * Generated from protobuf field <code>string zone = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Required. The cluster labels. Cluster must have all labels
     * to match.
     *
     * Generated from protobuf field <code>map<string, string> cluster_labels = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getClusterLabels()
    {
        return $this->cluster_labels;
    }

    /**
     * Required. The cluster labels. Cluster must have all labels
     * to match.
     *
     * Generated from protobuf field <code>map<string, string> cluster_labels = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setClusterLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->cluster_labels = $arr;

        return $this;
    }

}


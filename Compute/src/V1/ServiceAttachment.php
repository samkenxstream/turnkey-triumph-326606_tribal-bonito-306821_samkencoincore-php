<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a ServiceAttachment resource. A service attachment represents a service that a producer has exposed. It encapsulates the load balancer which fronts the service runs and a list of NAT IP ranges that the producers uses to represent the consumers connecting to the service. next tag = 20
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ServiceAttachment</code>
 */
class ServiceAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] An array of connections for all the consumers connected to this service attachment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAttachmentConnectedEndpoint connected_endpoints = 72223688;</code>
     */
    private $connected_endpoints;
    /**
     * The connection preference of service attachment. The value can be set to ACCEPT_AUTOMATIC. An ACCEPT_AUTOMATIC service attachment is one that always accepts the connection from consumer forwarding rules.
     * Check the ConnectionPreference enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string connection_preference = 285818076;</code>
     */
    private $connection_preference = null;
    /**
     * Projects that are allowed to connect to this service attachment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAttachmentConsumerProjectLimit consumer_accept_lists = 402725703;</code>
     */
    private $consumer_accept_lists;
    /**
     * Projects that are not allowed to connect to this service attachment. The project can be specified using its id or number.
     *
     * Generated from protobuf field <code>repeated string consumer_reject_lists = 204033182;</code>
     */
    private $consumer_reject_lists;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * If specified, the domain name will be used during the integration between the PSC connected endpoints and the Cloud DNS. For example, this is a valid domain name: "p.mycompany.com.". Current max number of domain names supported is 1.
     *
     * Generated from protobuf field <code>repeated string domain_names = 6450189;</code>
     */
    private $domain_names;
    /**
     * If true, enable the proxy protocol which is for supplying client TCP/IP address data in TCP connections that traverse proxies on their way to destination servers.
     *
     * Generated from protobuf field <code>optional bool enable_proxy_protocol = 363791237;</code>
     */
    private $enable_proxy_protocol = null;
    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a ServiceAttachment. An up-to-date fingerprint must be provided in order to patch/update the ServiceAttachment; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the ServiceAttachment.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#serviceAttachment for service attachments.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * An array of URLs where each entry is the URL of a subnet provided by the service producer to use for NAT in this service attachment.
     *
     * Generated from protobuf field <code>repeated string nat_subnets = 374785944;</code>
     */
    private $nat_subnets;
    /**
     * The URL of a forwarding rule with loadBalancingScheme INTERNAL* that is serving the endpoint identified by this service attachment.
     *
     * Generated from protobuf field <code>optional string producer_forwarding_rule = 247927889;</code>
     */
    private $producer_forwarding_rule = null;
    /**
     * [Output Only] An 128-bit global unique ID of the PSC service attachment.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Uint128 psc_service_attachment_id = 527695214;</code>
     */
    private $psc_service_attachment_id = null;
    /**
     * [Output Only] URL of the region where the service attachment resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * The URL of a service serving the endpoint identified by this service attachment.
     *
     * Generated from protobuf field <code>optional string target_service = 1293831;</code>
     */
    private $target_service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\ServiceAttachmentConnectedEndpoint[]|\Google\Protobuf\Internal\RepeatedField $connected_endpoints
     *           [Output Only] An array of connections for all the consumers connected to this service attachment.
     *     @type string $connection_preference
     *           The connection preference of service attachment. The value can be set to ACCEPT_AUTOMATIC. An ACCEPT_AUTOMATIC service attachment is one that always accepts the connection from consumer forwarding rules.
     *           Check the ConnectionPreference enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\ServiceAttachmentConsumerProjectLimit[]|\Google\Protobuf\Internal\RepeatedField $consumer_accept_lists
     *           Projects that are allowed to connect to this service attachment.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $consumer_reject_lists
     *           Projects that are not allowed to connect to this service attachment. The project can be specified using its id or number.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $domain_names
     *           If specified, the domain name will be used during the integration between the PSC connected endpoints and the Cloud DNS. For example, this is a valid domain name: "p.mycompany.com.". Current max number of domain names supported is 1.
     *     @type bool $enable_proxy_protocol
     *           If true, enable the proxy protocol which is for supplying client TCP/IP address data in TCP connections that traverse proxies on their way to destination servers.
     *     @type string $fingerprint
     *           Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a ServiceAttachment. An up-to-date fingerprint must be provided in order to patch/update the ServiceAttachment; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the ServiceAttachment.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#serviceAttachment for service attachments.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $nat_subnets
     *           An array of URLs where each entry is the URL of a subnet provided by the service producer to use for NAT in this service attachment.
     *     @type string $producer_forwarding_rule
     *           The URL of a forwarding rule with loadBalancingScheme INTERNAL* that is serving the endpoint identified by this service attachment.
     *     @type \Google\Cloud\Compute\V1\Uint128 $psc_service_attachment_id
     *           [Output Only] An 128-bit global unique ID of the PSC service attachment.
     *     @type string $region
     *           [Output Only] URL of the region where the service attachment resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $target_service
     *           The URL of a service serving the endpoint identified by this service attachment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] An array of connections for all the consumers connected to this service attachment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAttachmentConnectedEndpoint connected_endpoints = 72223688;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnectedEndpoints()
    {
        return $this->connected_endpoints;
    }

    /**
     * [Output Only] An array of connections for all the consumers connected to this service attachment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAttachmentConnectedEndpoint connected_endpoints = 72223688;</code>
     * @param \Google\Cloud\Compute\V1\ServiceAttachmentConnectedEndpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnectedEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ServiceAttachmentConnectedEndpoint::class);
        $this->connected_endpoints = $arr;

        return $this;
    }

    /**
     * The connection preference of service attachment. The value can be set to ACCEPT_AUTOMATIC. An ACCEPT_AUTOMATIC service attachment is one that always accepts the connection from consumer forwarding rules.
     * Check the ConnectionPreference enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string connection_preference = 285818076;</code>
     * @return string
     */
    public function getConnectionPreference()
    {
        return isset($this->connection_preference) ? $this->connection_preference : '';
    }

    public function hasConnectionPreference()
    {
        return isset($this->connection_preference);
    }

    public function clearConnectionPreference()
    {
        unset($this->connection_preference);
    }

    /**
     * The connection preference of service attachment. The value can be set to ACCEPT_AUTOMATIC. An ACCEPT_AUTOMATIC service attachment is one that always accepts the connection from consumer forwarding rules.
     * Check the ConnectionPreference enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string connection_preference = 285818076;</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionPreference($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection_preference = $var;

        return $this;
    }

    /**
     * Projects that are allowed to connect to this service attachment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAttachmentConsumerProjectLimit consumer_accept_lists = 402725703;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumerAcceptLists()
    {
        return $this->consumer_accept_lists;
    }

    /**
     * Projects that are allowed to connect to this service attachment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAttachmentConsumerProjectLimit consumer_accept_lists = 402725703;</code>
     * @param \Google\Cloud\Compute\V1\ServiceAttachmentConsumerProjectLimit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumerAcceptLists($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ServiceAttachmentConsumerProjectLimit::class);
        $this->consumer_accept_lists = $arr;

        return $this;
    }

    /**
     * Projects that are not allowed to connect to this service attachment. The project can be specified using its id or number.
     *
     * Generated from protobuf field <code>repeated string consumer_reject_lists = 204033182;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumerRejectLists()
    {
        return $this->consumer_reject_lists;
    }

    /**
     * Projects that are not allowed to connect to this service attachment. The project can be specified using its id or number.
     *
     * Generated from protobuf field <code>repeated string consumer_reject_lists = 204033182;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumerRejectLists($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->consumer_reject_lists = $arr;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * If specified, the domain name will be used during the integration between the PSC connected endpoints and the Cloud DNS. For example, this is a valid domain name: "p.mycompany.com.". Current max number of domain names supported is 1.
     *
     * Generated from protobuf field <code>repeated string domain_names = 6450189;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainNames()
    {
        return $this->domain_names;
    }

    /**
     * If specified, the domain name will be used during the integration between the PSC connected endpoints and the Cloud DNS. For example, this is a valid domain name: "p.mycompany.com.". Current max number of domain names supported is 1.
     *
     * Generated from protobuf field <code>repeated string domain_names = 6450189;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->domain_names = $arr;

        return $this;
    }

    /**
     * If true, enable the proxy protocol which is for supplying client TCP/IP address data in TCP connections that traverse proxies on their way to destination servers.
     *
     * Generated from protobuf field <code>optional bool enable_proxy_protocol = 363791237;</code>
     * @return bool
     */
    public function getEnableProxyProtocol()
    {
        return isset($this->enable_proxy_protocol) ? $this->enable_proxy_protocol : false;
    }

    public function hasEnableProxyProtocol()
    {
        return isset($this->enable_proxy_protocol);
    }

    public function clearEnableProxyProtocol()
    {
        unset($this->enable_proxy_protocol);
    }

    /**
     * If true, enable the proxy protocol which is for supplying client TCP/IP address data in TCP connections that traverse proxies on their way to destination servers.
     *
     * Generated from protobuf field <code>optional bool enable_proxy_protocol = 363791237;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableProxyProtocol($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_proxy_protocol = $var;

        return $this;
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a ServiceAttachment. An up-to-date fingerprint must be provided in order to patch/update the ServiceAttachment; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the ServiceAttachment.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a ServiceAttachment. An up-to-date fingerprint must be provided in order to patch/update the ServiceAttachment; otherwise, the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve the ServiceAttachment.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource type. The server generates this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#serviceAttachment for service attachments.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#serviceAttachment for service attachments.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * An array of URLs where each entry is the URL of a subnet provided by the service producer to use for NAT in this service attachment.
     *
     * Generated from protobuf field <code>repeated string nat_subnets = 374785944;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNatSubnets()
    {
        return $this->nat_subnets;
    }

    /**
     * An array of URLs where each entry is the URL of a subnet provided by the service producer to use for NAT in this service attachment.
     *
     * Generated from protobuf field <code>repeated string nat_subnets = 374785944;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNatSubnets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->nat_subnets = $arr;

        return $this;
    }

    /**
     * The URL of a forwarding rule with loadBalancingScheme INTERNAL* that is serving the endpoint identified by this service attachment.
     *
     * Generated from protobuf field <code>optional string producer_forwarding_rule = 247927889;</code>
     * @return string
     */
    public function getProducerForwardingRule()
    {
        return isset($this->producer_forwarding_rule) ? $this->producer_forwarding_rule : '';
    }

    public function hasProducerForwardingRule()
    {
        return isset($this->producer_forwarding_rule);
    }

    public function clearProducerForwardingRule()
    {
        unset($this->producer_forwarding_rule);
    }

    /**
     * The URL of a forwarding rule with loadBalancingScheme INTERNAL* that is serving the endpoint identified by this service attachment.
     *
     * Generated from protobuf field <code>optional string producer_forwarding_rule = 247927889;</code>
     * @param string $var
     * @return $this
     */
    public function setProducerForwardingRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->producer_forwarding_rule = $var;

        return $this;
    }

    /**
     * [Output Only] An 128-bit global unique ID of the PSC service attachment.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Uint128 psc_service_attachment_id = 527695214;</code>
     * @return \Google\Cloud\Compute\V1\Uint128|null
     */
    public function getPscServiceAttachmentId()
    {
        return $this->psc_service_attachment_id;
    }

    public function hasPscServiceAttachmentId()
    {
        return isset($this->psc_service_attachment_id);
    }

    public function clearPscServiceAttachmentId()
    {
        unset($this->psc_service_attachment_id);
    }

    /**
     * [Output Only] An 128-bit global unique ID of the PSC service attachment.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Uint128 psc_service_attachment_id = 527695214;</code>
     * @param \Google\Cloud\Compute\V1\Uint128 $var
     * @return $this
     */
    public function setPscServiceAttachmentId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Uint128::class);
        $this->psc_service_attachment_id = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the service attachment resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where the service attachment resides. This field applies only to the region resource. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * The URL of a service serving the endpoint identified by this service attachment.
     *
     * Generated from protobuf field <code>optional string target_service = 1293831;</code>
     * @return string
     */
    public function getTargetService()
    {
        return isset($this->target_service) ? $this->target_service : '';
    }

    public function hasTargetService()
    {
        return isset($this->target_service);
    }

    public function clearTargetService()
    {
        unset($this->target_service);
    }

    /**
     * The URL of a service serving the endpoint identified by this service attachment.
     *
     * Generated from protobuf field <code>optional string target_service = 1293831;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetService($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_service = $var;

        return $this;
    }

}


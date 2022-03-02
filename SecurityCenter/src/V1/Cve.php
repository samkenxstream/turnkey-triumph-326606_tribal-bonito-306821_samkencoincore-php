<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/vulnerability.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CVE stands for Common Vulnerabilities and Exposures.
 * More information: https://cve.mitre.org
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Cve</code>
 */
class Cve extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Additional information about the CVE.
     * e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Reference references = 2;</code>
     */
    private $references;
    /**
     * Describe Common Vulnerability Scoring System specified at
     * https://www.first.org/cvss/v3.1/specification-document
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Cvssv3 cvssv3 = 3;</code>
     */
    private $cvssv3 = null;
    /**
     * Whether upstream fix is available for the CVE.
     *
     * Generated from protobuf field <code>bool upstream_fix_available = 4;</code>
     */
    private $upstream_fix_available = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *     @type \Google\Cloud\SecurityCenter\V1\Reference[]|\Google\Protobuf\Internal\RepeatedField $references
     *           Additional information about the CVE.
     *           e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *     @type \Google\Cloud\SecurityCenter\V1\Cvssv3 $cvssv3
     *           Describe Common Vulnerability Scoring System specified at
     *           https://www.first.org/cvss/v3.1/specification-document
     *     @type bool $upstream_fix_available
     *           Whether upstream fix is available for the CVE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Vulnerability::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Additional information about the CVE.
     * e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Reference references = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Additional information about the CVE.
     * e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Reference references = 2;</code>
     * @param \Google\Cloud\SecurityCenter\V1\Reference[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\Reference::class);
        $this->references = $arr;

        return $this;
    }

    /**
     * Describe Common Vulnerability Scoring System specified at
     * https://www.first.org/cvss/v3.1/specification-document
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Cvssv3 cvssv3 = 3;</code>
     * @return \Google\Cloud\SecurityCenter\V1\Cvssv3|null
     */
    public function getCvssv3()
    {
        return $this->cvssv3;
    }

    public function hasCvssv3()
    {
        return isset($this->cvssv3);
    }

    public function clearCvssv3()
    {
        unset($this->cvssv3);
    }

    /**
     * Describe Common Vulnerability Scoring System specified at
     * https://www.first.org/cvss/v3.1/specification-document
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Cvssv3 cvssv3 = 3;</code>
     * @param \Google\Cloud\SecurityCenter\V1\Cvssv3 $var
     * @return $this
     */
    public function setCvssv3($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\Cvssv3::class);
        $this->cvssv3 = $var;

        return $this;
    }

    /**
     * Whether upstream fix is available for the CVE.
     *
     * Generated from protobuf field <code>bool upstream_fix_available = 4;</code>
     * @return bool
     */
    public function getUpstreamFixAvailable()
    {
        return $this->upstream_fix_available;
    }

    /**
     * Whether upstream fix is available for the CVE.
     *
     * Generated from protobuf field <code>bool upstream_fix_available = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpstreamFixAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->upstream_fix_available = $var;

        return $this;
    }

}


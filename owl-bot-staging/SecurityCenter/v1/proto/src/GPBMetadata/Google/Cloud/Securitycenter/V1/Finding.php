<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/finding.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class Finding
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Access::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\ExternalSystem::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Indicator::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\MitreAttack::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecurityMarks::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Vulnerability::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/securitycenter/v1/finding.protogoogle.cloud.securitycenter.v1google/api/resource.proto+google/cloud/securitycenter/v1/access.proto4google/cloud/securitycenter/v1/external_system.proto.google/cloud/securitycenter/v1/indicator.proto1google/cloud/securitycenter/v1/mitre_attack.proto3google/cloud/securitycenter/v1/security_marks.proto2google/cloud/securitycenter/v1/vulnerability.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Finding
name (	
parent (	
resource_name (	<
state (2-.google.cloud.securitycenter.v1.Finding.State
category (	
external_uri (	X
source_properties (2=.google.cloud.securitycenter.v1.Finding.SourcePropertiesEntryJ
security_marks (2-.google.cloud.securitycenter.v1.SecurityMarksB�A.

event_time	 (2.google.protobuf.Timestamp/
create_time
 (2.google.protobuf.TimestampB
severity (20.google.cloud.securitycenter.v1.Finding.Severity
canonical_name (	:
mute (2,.google.cloud.securitycenter.v1.Finding.MuteK
finding_class (24.google.cloud.securitycenter.v1.Finding.FindingClass<
	indicator (2).google.cloud.securitycenter.v1.IndicatorD
vulnerability (2-.google.cloud.securitycenter.v1.Vulnerability9
mute_update_time (2.google.protobuf.TimestampB�A[
external_systems (2<.google.cloud.securitycenter.v1.Finding.ExternalSystemsEntryB�AA
mitre_attack (2+.google.cloud.securitycenter.v1.MitreAttack6
access (2&.google.cloud.securitycenter.v1.Access
mute_initiator (	O
SourcePropertiesEntry
key (	%
value (2.google.protobuf.Value:8f
ExternalSystemsEntry
key (	=
value (2..google.cloud.securitycenter.v1.ExternalSystem:8"8
State
STATE_UNSPECIFIED 

ACTIVE
INACTIVE"Q
Severity
SEVERITY_UNSPECIFIED 
CRITICAL
HIGH

MEDIUM
LOW"C
Mute
MUTE_UNSPECIFIED 	
MUTED
UNMUTED
	UNDEFINED"�
FindingClass
FINDING_CLASS_UNSPECIFIED 

THREAT
VULNERABILITY
MISCONFIGURATION
OBSERVATION
	SCC_ERROR:��A�
%securitycenter.googleapis.com/Finding@organizations/{organization}/sources/{source}/findings/{finding}4folders/{folder}/sources/{source}/findings/{finding}6projects/{project}/sources/{source}/findings/{finding}B�
"com.google.cloud.securitycenter.v1PZLgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1;securitycenter�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


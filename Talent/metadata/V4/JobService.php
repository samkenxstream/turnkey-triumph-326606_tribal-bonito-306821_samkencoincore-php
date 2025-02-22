<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4;

class JobService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Filters::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Histogram::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4\Job::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�1
(google/cloud/talent/v4/job_service.protogoogle.cloud.talent.v4google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/cloud/talent/v4/common.proto$google/cloud/talent/v4/filters.proto&google/cloud/talent/v4/histogram.proto google/cloud/talent/v4/job.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"r
CreateJobRequest/
parent (	B�A�Ajobs.googleapis.com/Job-
job (2.google.cloud.talent.v4.JobB�A">
GetJobRequest-
name (	B�A�A
jobs.googleapis.com/Job"r
UpdateJobRequest-
job (2.google.cloud.talent.v4.JobB�A/
update_mask (2.google.protobuf.FieldMask"A
DeleteJobRequest-
name (	B�A�A
jobs.googleapis.com/Job"�
ListJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job
filter (	B�A

page_token (	
	page_size (1
job_view (2.google.cloud.talent.v4.JobView"�
ListJobsResponse)
jobs (2.google.cloud.talent.v4.Job
next_page_token (	:
metadata (2(.google.cloud.talent.v4.ResponseMetadata"�
SearchJobsRequest/
parent (	B�A�Ajobs.googleapis.com/JobI
search_mode (24.google.cloud.talent.v4.SearchJobsRequest.SearchModeF
request_metadata (2\'.google.cloud.talent.v4.RequestMetadataB�A3
	job_query (2 .google.cloud.talent.v4.JobQuery
enable_broadening (A
histogram_queries (2&.google.cloud.talent.v4.HistogramQuery1
job_view (2.google.cloud.talent.v4.JobView
offset	 (
max_page_size
 (

page_token (	
order_by (	]
diversification_level (2>.google.cloud.talent.v4.SearchJobsRequest.DiversificationLevelX
custom_ranking_info (2;.google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo!
disable_keyword_match (BV
keyword_match_mode (2:.google.cloud.talent.v4.SearchJobsRequest.KeywordMatchMode�
CustomRankingInfoj
importance_level (2K.google.cloud.talent.v4.SearchJobsRequest.CustomRankingInfo.ImportanceLevelB�A
ranking_expression (	B�A"s
ImportanceLevel 
IMPORTANCE_LEVEL_UNSPECIFIED 
NONE
LOW
MILD

MEDIUM
HIGH
EXTREME"R

SearchMode
SEARCH_MODE_UNSPECIFIED 

JOB_SEARCH
FEATURED_JOB_SEARCH"�
DiversificationLevel%
!DIVERSIFICATION_LEVEL_UNSPECIFIED 
DISABLED

SIMPLE
ONE_PER_COMPANY
TWO_PER_COMPANY"
DIVERSIFY_BY_LOOSER_SIMILARITY"�
KeywordMatchMode"
KEYWORD_MATCH_MODE_UNSPECIFIED 
KEYWORD_MATCH_DISABLED
KEYWORD_MATCH_ALL
KEYWORD_MATCH_TITLE_ONLY"�
SearchJobsResponseM
matching_jobs (26.google.cloud.talent.v4.SearchJobsResponse.MatchingJobM
histogram_query_results (2,.google.cloud.talent.v4.HistogramQueryResult
next_page_token (	:
location_filters (2 .google.cloud.talent.v4.Location

total_size (:
metadata (2(.google.cloud.talent.v4.ResponseMetadata"
broadened_query_jobs_count (D
spell_correction	 (2*.google.cloud.talent.v4.SpellingCorrection�
MatchingJob(
job (2.google.cloud.talent.v4.Job
job_summary (	
job_title_snippet (	
search_text_snippet (	L
commute_info (26.google.cloud.talent.v4.SearchJobsResponse.CommuteInfoy
CommuteInfo6
job_location (2 .google.cloud.talent.v4.Location2
travel_duration (2.google.protobuf.Duration"y
BatchCreateJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job.
jobs (2.google.cloud.talent.v4.JobB�A"�
BatchUpdateJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job.
jobs (2.google.cloud.talent.v4.JobB�A/
update_mask (2.google.protobuf.FieldMask"y
BatchDeleteJobsRequest2
parent (	B"�A�A
jobs.googleapis.com/Tenant+
names (	B�A
jobs.googleapis.com/Job"Y
	JobResult(
job (2.google.cloud.talent.v4.Job"
status (2.google.rpc.Status"Q
BatchCreateJobsResponse6
job_results (2!.google.cloud.talent.v4.JobResult"Q
BatchUpdateJobsResponse6
job_results (2!.google.cloud.talent.v4.JobResult"Q
BatchDeleteJobsResponse6
job_results (2!.google.cloud.talent.v4.JobResult*v
JobView
JOB_VIEW_UNSPECIFIED 
JOB_VIEW_ID_ONLY
JOB_VIEW_MINIMAL
JOB_VIEW_SMALL
JOB_VIEW_FULL2�

JobService�
	CreateJob(.google.cloud.talent.v4.CreateJobRequest.google.cloud.talent.v4.Job"@���-"&/v4/{parent=projects/*/tenants/*}/jobs:job�A
parent,job�
BatchCreateJobs..google.cloud.talent.v4.BatchCreateJobsRequest.google.longrunning.Operation"���7"2/v4/{parent=projects/*/tenants/*}/jobs:batchCreate:*�Aparent,jobs�A1
BatchCreateJobsResponseBatchOperationMetadata�
GetJob%.google.cloud.talent.v4.GetJobRequest.google.cloud.talent.v4.Job"5���(&/v4/{name=projects/*/tenants/*/jobs/*}�Aname�
	UpdateJob(.google.cloud.talent.v4.UpdateJobRequest.google.cloud.talent.v4.Job"I���12*/v4/{job.name=projects/*/tenants/*/jobs/*}:job�Ajob,update_mask�
BatchUpdateJobs..google.cloud.talent.v4.BatchUpdateJobsRequest.google.longrunning.Operation"���7"2/v4/{parent=projects/*/tenants/*}/jobs:batchUpdate:*�Aparent,jobs�A1
BatchUpdateJobsResponseBatchOperationMetadata�
	DeleteJob(.google.cloud.talent.v4.DeleteJobRequest.google.protobuf.Empty"5���(*&/v4/{name=projects/*/tenants/*/jobs/*}�Aname�
BatchDeleteJobs..google.cloud.talent.v4.BatchDeleteJobsRequest.google.longrunning.Operation"����7"2/v4/{parent=projects/*/tenants/*}/jobs:batchDelete:*�Aparent,names�A1
BatchDeleteJobsResponseBatchOperationMetadata�
ListJobs\'.google.cloud.talent.v4.ListJobsRequest(.google.cloud.talent.v4.ListJobsResponse">���(&/v4/{parent=projects/*/tenants/*}/jobs�Aparent,filter�

SearchJobs).google.cloud.talent.v4.SearchJobsRequest*.google.cloud.talent.v4.SearchJobsResponse"8���2"-/v4/{parent=projects/*/tenants/*}/jobs:search:*�
SearchJobsForAlert).google.cloud.talent.v4.SearchJobsRequest*.google.cloud.talent.v4.SearchJobsResponse"@���:"5/v4/{parent=projects/*/tenants/*}/jobs:searchForAlert:*l�Ajobs.googleapis.com�AShttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/jobsBi
com.google.cloud.talent.v4BJobServiceProtoPZ2cloud.google.com/go/talent/apiv4/talentpb;talentpb�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}


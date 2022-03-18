<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the result of annotation for the message.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.MessageAnnotation</code>
 */
class MessageAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The collection of annotated message parts ordered by their
     * position in the message. You can recover the annotated message by
     * concatenating [AnnotatedMessagePart.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.AnnotatedMessagePart parts = 1;</code>
     */
    private $parts;
    /**
     * Indicates whether the text message contains entities.
     *
     * Generated from protobuf field <code>bool contain_entities = 2;</code>
     */
    protected $contain_entities = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\AnnotatedMessagePart[]|\Google\Protobuf\Internal\RepeatedField $parts
     *           The collection of annotated message parts ordered by their
     *           position in the message. You can recover the annotated message by
     *           concatenating [AnnotatedMessagePart.text].
     *     @type bool $contain_entities
     *           Indicates whether the text message contains entities.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The collection of annotated message parts ordered by their
     * position in the message. You can recover the annotated message by
     * concatenating [AnnotatedMessagePart.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.AnnotatedMessagePart parts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * The collection of annotated message parts ordered by their
     * position in the message. You can recover the annotated message by
     * concatenating [AnnotatedMessagePart.text].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.AnnotatedMessagePart parts = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\AnnotatedMessagePart[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\AnnotatedMessagePart::class);
        $this->parts = $arr;

        return $this;
    }

    /**
     * Indicates whether the text message contains entities.
     *
     * Generated from protobuf field <code>bool contain_entities = 2;</code>
     * @return bool
     */
    public function getContainEntities()
    {
        return $this->contain_entities;
    }

    /**
     * Indicates whether the text message contains entities.
     *
     * Generated from protobuf field <code>bool contain_entities = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setContainEntities($var)
    {
        GPBUtil::checkBool($var);
        $this->contain_entities = $var;

        return $this;
    }

}


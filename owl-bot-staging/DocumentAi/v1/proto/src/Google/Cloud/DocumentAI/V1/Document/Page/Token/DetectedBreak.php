<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detected break at the end of a [Token][google.cloud.documentai.v1.Document.Page.Token].
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Token.DetectedBreak</code>
 */
class DetectedBreak extends \Google\Protobuf\Internal\Message
{
    /**
     * Detected break type.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak.Type type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Detected break type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Detected break type.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Detected break type.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Page.Token.DetectedBreak.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\Document\Page\Token\DetectedBreak\Type::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DetectedBreak::class, \Google\Cloud\DocumentAI\V1\Document_Page_Token_DetectedBreak::class);


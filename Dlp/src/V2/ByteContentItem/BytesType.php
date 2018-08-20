<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\ByteContentItem;

/**
 * Protobuf type <code>google.privacy.dlp.v2.ByteContentItem.BytesType</code>
 */
class BytesType
{
    /**
     * Generated from protobuf enum <code>BYTES_TYPE_UNSPECIFIED = 0;</code>
     */
    const BYTES_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>IMAGE = 6;</code>
     */
    const IMAGE = 6;
    /**
     * Generated from protobuf enum <code>IMAGE_JPEG = 1;</code>
     */
    const IMAGE_JPEG = 1;
    /**
     * Generated from protobuf enum <code>IMAGE_BMP = 2;</code>
     */
    const IMAGE_BMP = 2;
    /**
     * Generated from protobuf enum <code>IMAGE_PNG = 3;</code>
     */
    const IMAGE_PNG = 3;
    /**
     * Generated from protobuf enum <code>IMAGE_SVG = 4;</code>
     */
    const IMAGE_SVG = 4;
    /**
     * Generated from protobuf enum <code>TEXT_UTF8 = 5;</code>
     */
    const TEXT_UTF8 = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BytesType::class, \Google\Cloud\Dlp\V2\ByteContentItem_BytesType::class);

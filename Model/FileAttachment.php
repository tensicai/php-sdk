<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\FileAttachmentDefault;

final class FileAttachment implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use FileAttachmentDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private string|null $content = null;
    private string|null $uploadId = null;
    private string|null $mimeType = null;

    public function name(): string
    {
        return $this->name;
    }

    public function content(): string|null
    {
        return $this->content;
    }

    public function uploadId(): string|null
    {
        return $this->uploadId;
    }

    public function mimeType(): string|null
    {
        return $this->mimeType;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'name' => 'name',
            'content' => 'content',
            'upload_id' => 'uploadId',
            'mime_type' => 'mimeType',
        ];
    }

// phpcs:enable
}

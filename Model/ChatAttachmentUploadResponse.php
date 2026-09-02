<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ChatAttachmentUploadResponseDefault;

final class ChatAttachmentUploadResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChatAttachmentUploadResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $uploadId;
    private string $name;
    private int $size;
    private string|null $mimeType = null;
    private string $expiresAt;

    public function uploadId(): string
    {
        return $this->uploadId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function mimeType(): string|null
    {
        return $this->mimeType;
    }

    public function expiresAt(): string
    {
        return $this->expiresAt;
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
            'upload_id' => 'uploadId',
            'name' => 'name',
            'size' => 'size',
            'mime_type' => 'mimeType',
            'expires_at' => 'expiresAt',
        ];
    }

// phpcs:enable
}

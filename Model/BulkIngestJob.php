<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\BulkIngestJobDefault;

final class BulkIngestJob implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use BulkIngestJobDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $projectId;
    private string $filename;
    private string|null $mimeType = null;
    private int|null $sizeBytes = null;
    private string|null $method = null;
    private string $status;
    private string|null $errorMessage = null;
    private int|null $documentsCount = null;
    private int|null $chunksCount = null;
    private string|null $createdAt = null;
    private string|null $startedAt = null;
    private string|null $completedAt = null;

    public function id(): int
    {
        return $this->id;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function filename(): string
    {
        return $this->filename;
    }

    public function mimeType(): string|null
    {
        return $this->mimeType;
    }

    public function sizeBytes(): int|null
    {
        return $this->sizeBytes;
    }

    public function method(): string|null
    {
        return $this->method;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function errorMessage(): string|null
    {
        return $this->errorMessage;
    }

    public function documentsCount(): int|null
    {
        return $this->documentsCount;
    }

    public function chunksCount(): int|null
    {
        return $this->chunksCount;
    }

    public function createdAt(): string|null
    {
        return $this->createdAt;
    }

    public function startedAt(): string|null
    {
        return $this->startedAt;
    }

    public function completedAt(): string|null
    {
        return $this->completedAt;
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
            'id' => 'id',
            'project_id' => 'projectId',
            'filename' => 'filename',
            'mime_type' => 'mimeType',
            'size_bytes' => 'sizeBytes',
            'method' => 'method',
            'status' => 'status',
            'error_message' => 'errorMessage',
            'documents_count' => 'documentsCount',
            'chunks_count' => 'chunksCount',
            'created_at' => 'createdAt',
            'started_at' => 'startedAt',
            'completed_at' => 'completedAt',
        ];
    }

// phpcs:enable
}

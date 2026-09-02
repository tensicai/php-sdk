<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ReembedJobModelDefault;

final class ReembedJobModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ReembedJobModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $projectId;
    private string $status;
    private string|null $oldEmbedding = null;
    private string $newEmbedding;
    private int|null $chunksTotal = null;
    private int|null $chunksDone = 0;
    private string|null $errorMessage = null;
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

    public function status(): string
    {
        return $this->status;
    }

    public function oldEmbedding(): string|null
    {
        return $this->oldEmbedding;
    }

    public function newEmbedding(): string
    {
        return $this->newEmbedding;
    }

    public function chunksTotal(): int|null
    {
        return $this->chunksTotal;
    }

    public function chunksDone(): int|null
    {
        return $this->chunksDone;
    }

    public function errorMessage(): string|null
    {
        return $this->errorMessage;
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
            'status' => 'status',
            'old_embedding' => 'oldEmbedding',
            'new_embedding' => 'newEmbedding',
            'chunks_total' => 'chunksTotal',
            'chunks_done' => 'chunksDone',
            'error_message' => 'errorMessage',
            'created_at' => 'createdAt',
            'started_at' => 'startedAt',
            'completed_at' => 'completedAt',
        ];
    }

// phpcs:enable
}

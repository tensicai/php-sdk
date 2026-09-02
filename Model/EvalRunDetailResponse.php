<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\EvalRunDetailResponseDefault;

final class EvalRunDetailResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalRunDetailResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $datasetId;
    private int $projectId;
    private int|null $promptVersionId = null;
    private int|null $promptVersion = null;
    private string $status;
    /** @var array<string>|null */
    private array|null $metrics = [];
    /** @var array<mixed>|null */
    private array|null $summary = null;
    private DateTimeValue|null $startedAt = null;
    private DateTimeValue|null $completedAt = null;
    private DateTimeValue|null $createdAt = null;
    private string|null $error = null;
    /** @var array<EvalResultResponse>|null */
    private array|null $results = [];

    public function id(): int
    {
        return $this->id;
    }

    public function datasetId(): int
    {
        return $this->datasetId;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function promptVersionId(): int|null
    {
        return $this->promptVersionId;
    }

    public function promptVersion(): int|null
    {
        return $this->promptVersion;
    }

    public function status(): string
    {
        return $this->status;
    }

    /** @return array<string>|null */
    public function metrics(): array|null
    {
        return $this->metrics;
    }

    /** @return array<mixed>|null */
    public function summary(): array|null
    {
        return $this->summary;
    }

    public function startedAt(): DateTimeValue|null
    {
        return $this->startedAt;
    }

    public function completedAt(): DateTimeValue|null
    {
        return $this->completedAt;
    }

    public function createdAt(): DateTimeValue|null
    {
        return $this->createdAt;
    }

    public function error(): string|null
    {
        return $this->error;
    }

    /** @return array<EvalResultResponse>|null */
    public function results(): array|null
    {
        return $this->results;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'metrics' => 'string',
            'summary' => 'mixed',
            'results' => EvalResultResponse::class,
        ];
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
            'dataset_id' => 'datasetId',
            'project_id' => 'projectId',
            'prompt_version_id' => 'promptVersionId',
            'prompt_version' => 'promptVersion',
            'status' => 'status',
            'metrics' => 'metrics',
            'summary' => 'summary',
            'started_at' => 'startedAt',
            'completed_at' => 'completedAt',
            'created_at' => 'createdAt',
            'error' => 'error',
            'results' => 'results',
        ];
    }

// phpcs:enable
}

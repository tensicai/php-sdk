<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\EvalDatasetDetailResponseDefault;

final class EvalDatasetDetailResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalDatasetDetailResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string|null $description = null;
    private int $projectId;
    private int|null $testCaseCount = 0;
    private DateTimeValue|null $createdAt = null;
    private DateTimeValue|null $updatedAt = null;
    /** @var array<EvalTestCaseResponse>|null */
    private array|null $testCases = [];

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function testCaseCount(): int|null
    {
        return $this->testCaseCount;
    }

    public function createdAt(): DateTimeValue|null
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTimeValue|null
    {
        return $this->updatedAt;
    }

    /** @return array<EvalTestCaseResponse>|null */
    public function testCases(): array|null
    {
        return $this->testCases;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'testCases' => EvalTestCaseResponse::class,
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
            'name' => 'name',
            'description' => 'description',
            'project_id' => 'projectId',
            'test_case_count' => 'testCaseCount',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
            'test_cases' => 'testCases',
        ];
    }

// phpcs:enable
}

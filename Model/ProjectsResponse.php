<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectsResponseDefault;

final class ProjectsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<ProjectResponse> */
    private array $projects;
    private int $total;
    private int $start;
    private int $end;

    /** @return array<ProjectResponse> */
    public function projects(): array
    {
        return $this->projects;
    }

    public function total(): int
    {
        return $this->total;
    }

    public function start(): int
    {
        return $this->start;
    }

    public function end(): int
    {
        return $this->end;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'projects' => ProjectResponse::class,
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
            'projects' => 'projects',
            'total' => 'total',
            'start' => 'start',
            'end' => 'end',
        ];
    }

// phpcs:enable
}

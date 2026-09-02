<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetProjectsQueryDefault;

final class GetProjectsQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetProjectsQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $filter = '';
    private int|null $start = 0;
    private int|null $end = 10000;

    public function filter(): string|null
    {
        return $this->filter;
    }

    public function start(): int|null
    {
        return $this->start;
    }

    public function end(): int|null
    {
        return $this->end;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'start' => 100000,
            'end' => 100000,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'filter' => 'filter',
            'start' => 'start',
            'end' => 'end',
        ];
    }

// phpcs:enable
}

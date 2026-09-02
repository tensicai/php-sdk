<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetProjectsProjectIDGuardsEventsQueryDefault;

final class GetProjectsProjectIDGuardsEventsQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetProjectsProjectIDGuardsEventsQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $phase = null;
    private int|null $start = 0;
    private string|null $action = null;
    private int|null $end = 20;

    public function phase(): string|null
    {
        return $this->phase;
    }

    public function start(): int|null
    {
        return $this->start;
    }

    public function action(): string|null
    {
        return $this->action;
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
            'phase' => 'phase',
            'start' => 'start',
            'action' => 'action',
            'end' => 'end',
        ];
    }

// phpcs:enable
}

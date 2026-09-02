<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetProjectsProjectIDConversationsQueryDefault;

final class GetProjectsProjectIDConversationsQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetProjectsProjectIDConversationsQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $q = null;
    private int|null $start = 0;
    private int|null $days = 30;
    private int|null $end = 25;
    private string|null $status = null;

    public function q(): string|null
    {
        return $this->q;
    }

    public function start(): int|null
    {
        return $this->start;
    }

    public function days(): int|null
    {
        return $this->days;
    }

    public function end(): int|null
    {
        return $this->end;
    }

    public function status(): string|null
    {
        return $this->status;
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
            'days' => 365,
            'end' => 100000,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'q' => 'q',
            'start' => 'start',
            'days' => 'days',
            'end' => 'end',
            'status' => 'status',
        ];
    }

// phpcs:enable
}

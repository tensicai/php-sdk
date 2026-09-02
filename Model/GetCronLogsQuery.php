<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\GetCronLogsQueryDefault;

final class GetCronLogsQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetCronLogsQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $start = 0;
    private int|null $end = 50;
    private string|null $job = null;
    private string|null $status = null;

    public function start(): int|null
    {
        return $this->start;
    }

    public function end(): int|null
    {
        return $this->end;
    }

    public function job(): string|null
    {
        return $this->job;
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
            'start' => 1000000,
            'end' => 1000000,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'start' => 'start',
            'end' => 'end',
            'job' => 'job',
            'status' => 'status',
        ];
    }

// phpcs:enable
}

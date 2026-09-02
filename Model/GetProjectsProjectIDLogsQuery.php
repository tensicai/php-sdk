<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\GetProjectsProjectIDLogsQueryDefault;

final class GetProjectsProjectIDLogsQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetProjectsProjectIDLogsQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $q = null;
    private int|null $start = 0;
    private int|null $end = 10;
    private DateTimeValue|null $dateTo = null;
    private string|null $status = null;
    private DateTimeValue|null $dateFrom = null;
    private string|null $chatId = null;
    private bool|null $hasError = null;

    public function q(): string|null
    {
        return $this->q;
    }

    public function start(): int|null
    {
        return $this->start;
    }

    public function end(): int|null
    {
        return $this->end;
    }

    public function dateTo(): DateTimeValue|null
    {
        return $this->dateTo;
    }

    public function status(): string|null
    {
        return $this->status;
    }

    public function dateFrom(): DateTimeValue|null
    {
        return $this->dateFrom;
    }

    public function chatId(): string|null
    {
        return $this->chatId;
    }

    public function hasError(): bool|null
    {
        return $this->hasError;
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
            'q' => 'q',
            'start' => 'start',
            'end' => 'end',
            'date_to' => 'dateTo',
            'status' => 'status',
            'date_from' => 'dateFrom',
            'chat_id' => 'chatId',
            'has_error' => 'hasError',
        ];
    }

// phpcs:enable
}

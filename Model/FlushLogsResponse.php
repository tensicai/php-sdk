<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\FlushLogsResponseDefault;

final class FlushLogsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use FlushLogsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $deleted;
    private int $retrievalEventsDeleted;

    public function deleted(): int
    {
        return $this->deleted;
    }

    public function retrievalEventsDeleted(): int
    {
        return $this->retrievalEventsDeleted;
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
            'deleted' => 'deleted',
            'retrieval_events_deleted' => 'retrievalEventsDeleted',
        ];
    }

// phpcs:enable
}

<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\GuardDailyEntryDefault;

final class GuardDailyEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GuardDailyEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private DateTimeValue|null $date = null;
    private int $checks;
    private int $blocks;
    private int $warns;

    public function date(): DateTimeValue|null
    {
        return $this->date;
    }

    public function checks(): int
    {
        return $this->checks;
    }

    public function blocks(): int
    {
        return $this->blocks;
    }

    public function warns(): int
    {
        return $this->warns;
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
            'date' => 'date',
            'checks' => 'checks',
            'blocks' => 'blocks',
            'warns' => 'warns',
        ];
    }

// phpcs:enable
}

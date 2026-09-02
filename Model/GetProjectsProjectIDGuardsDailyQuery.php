<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\GetProjectsProjectIDGuardsDailyQueryDefault;

final class GetProjectsProjectIDGuardsDailyQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetProjectsProjectIDGuardsDailyQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $month = null;
    private int|null $year = null;

    public function month(): int|null
    {
        return $this->month;
    }

    public function year(): int|null
    {
        return $this->year;
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
            'month' => 12,
            'year' => 2100,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'month' => 'month',
            'year' => 'year',
        ];
    }

// phpcs:enable
}

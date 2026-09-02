<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetProjectsProjectIDRoutinesRoutineIDHistoryQueryDefault;

final class GetProjectsProjectIDRoutinesRoutineIDHistoryQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetProjectsProjectIDRoutinesRoutineIDHistoryQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $limit = 50;

    public function limit(): int|null
    {
        return $this->limit;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['limit' => 500];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['limit' => 'limit'];
    }

// phpcs:enable
}

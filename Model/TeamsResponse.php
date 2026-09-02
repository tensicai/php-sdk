<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\TeamsResponseDefault;

final class TeamsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<TeamModel> */
    private array $teams;
    private int|null $total = null;

    /** @return array<TeamModel> */
    public function teams(): array
    {
        return $this->teams;
    }

    public function total(): int|null
    {
        return $this->total;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'teams' => TeamModel::class,
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
            'teams' => 'teams',
            'total' => 'total',
        ];
    }

// phpcs:enable
}

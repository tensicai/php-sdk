<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetLlmsQueryDefault;

final class GetLlmsQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetLlmsQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $offset = 0;
    private int|null $limit = 1000;

    public function offset(): int|null
    {
        return $this->offset;
    }

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
        return ['limit' => 5000];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'offset' => 'offset',
            'limit' => 'limit',
        ];
    }

// phpcs:enable
}

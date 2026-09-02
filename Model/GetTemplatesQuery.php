<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetTemplatesQueryDefault;

final class GetTemplatesQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetTemplatesQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $projectType = null;
    private int|null $offset = 0;
    private int|null $limit = 1000;

    public function projectType(): string|null
    {
        return $this->projectType;
    }

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
            'project_type' => 'projectType',
            'offset' => 'offset',
            'limit' => 'limit',
        ];
    }

// phpcs:enable
}

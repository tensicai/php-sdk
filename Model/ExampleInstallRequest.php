<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ExampleInstallRequestDefault;

final class ExampleInstallRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ExampleInstallRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $teamId;
    private string|null $namePrefix = null;
    private string|null $llm = null;
    private string|null $embeddings = null;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function namePrefix(): string|null
    {
        return $this->namePrefix;
    }

    public function llm(): string|null
    {
        return $this->llm;
    }

    public function embeddings(): string|null
    {
        return $this->embeddings;
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
            'team_id' => 'teamId',
            'name_prefix' => 'namePrefix',
            'llm' => 'llm',
            'embeddings' => 'embeddings',
        ];
    }

// phpcs:enable
}

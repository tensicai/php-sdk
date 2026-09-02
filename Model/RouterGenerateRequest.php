<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\RouterGenerateRequestDefault;

final class RouterGenerateRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use RouterGenerateRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $description;
    private string|null $mode = 'replace';
    /** @var array<mixed>|null */
    private array|null $flow = null;

    public function description(): string
    {
        return $this->description;
    }

    public function mode(): string|null
    {
        return $this->mode;
    }

    /** @return array<mixed>|null */
    public function flow(): array|null
    {
        return $this->flow;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['flow' => 'mixed'];
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
            'description' => 'description',
            'mode' => 'mode',
            'flow' => 'flow',
        ];
    }

// phpcs:enable
}

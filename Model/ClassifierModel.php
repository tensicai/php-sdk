<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ClassifierModelDefault;

final class ClassifierModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ClassifierModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $sequence;
    /** @var array<string> */
    private array $labels;
    private string|null $model = null;

    public function sequence(): string
    {
        return $this->sequence;
    }

    /** @return array<string> */
    public function labels(): array
    {
        return $this->labels;
    }

    public function model(): string|null
    {
        return $this->model;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['labels' => 'string'];
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
            'sequence' => 'sequence',
            'labels' => 'labels',
            'model' => 'model',
        ];
    }

// phpcs:enable
}

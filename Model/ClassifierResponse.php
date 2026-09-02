<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ClassifierResponseDefault;

final class ClassifierResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ClassifierResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $sequence;
    /** @var array<string> */
    private array $labels;
    /** @var array<float> */
    private array $scores;
    private string $model;

    public function sequence(): string
    {
        return $this->sequence;
    }

    /** @return array<string> */
    public function labels(): array
    {
        return $this->labels;
    }

    /** @return array<float> */
    public function scores(): array
    {
        return $this->scores;
    }

    public function model(): string
    {
        return $this->model;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'labels' => 'string',
            'scores' => 'float',
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
            'sequence' => 'sequence',
            'labels' => 'labels',
            'scores' => 'scores',
            'model' => 'model',
        ];
    }

// phpcs:enable
}

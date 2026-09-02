<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\EvalDatasetCreateDefault;

final class EvalDatasetCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalDatasetCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private string|null $description = null;
    /** @var array<EvalTestCaseCreate>|null */
    private array|null $testCases = null;

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    /** @return array<EvalTestCaseCreate>|null */
    public function testCases(): array|null
    {
        return $this->testCases;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'testCases' => EvalTestCaseCreate::class,
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
            'name' => 'name',
            'description' => 'description',
            'test_cases' => 'testCases',
        ];
    }

// phpcs:enable
}

<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\EvalTestCaseUpdateDefault;

final class EvalTestCaseUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalTestCaseUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $question = null;
    private string|null $expectedAnswer = null;
    /** @var array<string>|null */
    private array|null $context = null;

    public function question(): string|null
    {
        return $this->question;
    }

    public function expectedAnswer(): string|null
    {
        return $this->expectedAnswer;
    }

    /** @return array<string>|null */
    public function context(): array|null
    {
        return $this->context;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['context' => 'string'];
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
            'question' => 'question',
            'expected_answer' => 'expectedAnswer',
            'context' => 'context',
        ];
    }

// phpcs:enable
}

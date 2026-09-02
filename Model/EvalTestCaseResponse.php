<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\EvalTestCaseResponseDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class EvalTestCaseResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalTestCaseResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $question;
    private string|null $expectedAnswer = null;
    /** @var array<string>|null */
    private array|null $context = null;
    private DateTimeValue|null $createdAt = null;

    public function id(): int
    {
        return $this->id;
    }

    public function question(): string
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

    public function createdAt(): DateTimeValue|null
    {
        return $this->createdAt;
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
            'id' => 'id',
            'question' => 'question',
            'expected_answer' => 'expectedAnswer',
            'context' => 'context',
            'created_at' => 'createdAt',
        ];
    }

// phpcs:enable
}

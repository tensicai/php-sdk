<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\EvalResultResponseDefault;

final class EvalResultResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EvalResultResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $testCaseId;
    private string|null $question = null;
    private string|null $expectedAnswer = null;
    private string|null $actualAnswer = null;
    private string $metricName;
    private float|null $score = null;
    private string|null $reason = null;
    private bool|null $passed = false;
    private int|null $latencyMs = null;
    private mixed $toolTrace = null;
    private int|null $inputTokens = null;
    private int|null $outputTokens = null;
    private string|null $stopReason = null;

    public function id(): int
    {
        return $this->id;
    }

    public function testCaseId(): int
    {
        return $this->testCaseId;
    }

    public function question(): string|null
    {
        return $this->question;
    }

    public function expectedAnswer(): string|null
    {
        return $this->expectedAnswer;
    }

    public function actualAnswer(): string|null
    {
        return $this->actualAnswer;
    }

    public function metricName(): string
    {
        return $this->metricName;
    }

    public function score(): float|null
    {
        return $this->score;
    }

    public function reason(): string|null
    {
        return $this->reason;
    }

    public function passed(): bool|null
    {
        return $this->passed;
    }

    public function latencyMs(): int|null
    {
        return $this->latencyMs;
    }

    public function toolTrace(): mixed
    {
        return $this->toolTrace;
    }

    public function inputTokens(): int|null
    {
        return $this->inputTokens;
    }

    public function outputTokens(): int|null
    {
        return $this->outputTokens;
    }

    public function stopReason(): string|null
    {
        return $this->stopReason;
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
            'id' => 'id',
            'test_case_id' => 'testCaseId',
            'question' => 'question',
            'expected_answer' => 'expectedAnswer',
            'actual_answer' => 'actualAnswer',
            'metric_name' => 'metricName',
            'score' => 'score',
            'reason' => 'reason',
            'passed' => 'passed',
            'latency_ms' => 'latencyMs',
            'tool_trace' => 'toolTrace',
            'input_tokens' => 'inputTokens',
            'output_tokens' => 'outputTokens',
            'stop_reason' => 'stopReason',
        ];
    }

// phpcs:enable
}

<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ConversationAnalyticsResponseDefault;

final class ConversationAnalyticsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationAnalyticsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private ConversationAnalyticsSummary $summary;
    /** @var array<ConversationDailyPoint> */
    private array $daily;
    /** @var array<ConversationHourlyPoint> */
    private array $hourly;
    /** @var array<ConversationTopUser> */
    private array $topUsers;
    /** @var array<ConversationStatusBucket> */
    private array $statusBreakdown;
    /** @var array<ConversationLatencyBucket> */
    private array $latencyBuckets;
    /** @var array<ConversationLLMBucket> */
    private array $llmBreakdown;

    public function summary(): ConversationAnalyticsSummary
    {
        return $this->summary;
    }

    /** @return array<ConversationDailyPoint> */
    public function daily(): array
    {
        return $this->daily;
    }

    /** @return array<ConversationHourlyPoint> */
    public function hourly(): array
    {
        return $this->hourly;
    }

    /** @return array<ConversationTopUser> */
    public function topUsers(): array
    {
        return $this->topUsers;
    }

    /** @return array<ConversationStatusBucket> */
    public function statusBreakdown(): array
    {
        return $this->statusBreakdown;
    }

    /** @return array<ConversationLatencyBucket> */
    public function latencyBuckets(): array
    {
        return $this->latencyBuckets;
    }

    /** @return array<ConversationLLMBucket> */
    public function llmBreakdown(): array
    {
        return $this->llmBreakdown;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'daily' => ConversationDailyPoint::class,
            'hourly' => ConversationHourlyPoint::class,
            'topUsers' => ConversationTopUser::class,
            'statusBreakdown' => ConversationStatusBucket::class,
            'latencyBuckets' => ConversationLatencyBucket::class,
            'llmBreakdown' => ConversationLLMBucket::class,
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
            'summary' => 'summary',
            'daily' => 'daily',
            'hourly' => 'hourly',
            'top_users' => 'topUsers',
            'status_breakdown' => 'statusBreakdown',
            'latency_buckets' => 'latencyBuckets',
            'llm_breakdown' => 'llmBreakdown',
        ];
    }

// phpcs:enable
}

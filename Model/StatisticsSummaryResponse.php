<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\StatisticsSummaryResponseDefault;

final class StatisticsSummaryResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use StatisticsSummaryResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $totalTokens = 0;
    private float|null $totalCost = 0;
    private int|null $avgLatencyMs = 0;
    private int|null $totalProjects = 0;
    private int|null $totalUsers = 0;
    private int|null $totalTeams = 0;

    public function totalTokens(): int|null
    {
        return $this->totalTokens;
    }

    public function totalCost(): float|null
    {
        return $this->totalCost;
    }

    public function avgLatencyMs(): int|null
    {
        return $this->avgLatencyMs;
    }

    public function totalProjects(): int|null
    {
        return $this->totalProjects;
    }

    public function totalUsers(): int|null
    {
        return $this->totalUsers;
    }

    public function totalTeams(): int|null
    {
        return $this->totalTeams;
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
            'total_tokens' => 'totalTokens',
            'total_cost' => 'totalCost',
            'avg_latency_ms' => 'avgLatencyMs',
            'total_projects' => 'totalProjects',
            'total_users' => 'totalUsers',
            'total_teams' => 'totalTeams',
        ];
    }

// phpcs:enable
}

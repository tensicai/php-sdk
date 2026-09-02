<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\UserActivityResponseDefault;

final class UserActivityResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserActivityResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private UserActivitySummary $summary;
    /** @var array<UserActivityDaily> */
    private array $daily;
    /** @var array<UserActivityProject> */
    private array $topProjects;
    /** @var array<UserActivityHourly> */
    private array $hourly;

    public function summary(): UserActivitySummary
    {
        return $this->summary;
    }

    /** @return array<UserActivityDaily> */
    public function daily(): array
    {
        return $this->daily;
    }

    /** @return array<UserActivityProject> */
    public function topProjects(): array
    {
        return $this->topProjects;
    }

    /** @return array<UserActivityHourly> */
    public function hourly(): array
    {
        return $this->hourly;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'daily' => UserActivityDaily::class,
            'topProjects' => UserActivityProject::class,
            'hourly' => UserActivityHourly::class,
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
            'top_projects' => 'topProjects',
            'hourly' => 'hourly',
        ];
    }

// phpcs:enable
}

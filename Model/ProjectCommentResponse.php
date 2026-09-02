<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\ProjectCommentResponseDefault;

final class ProjectCommentResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectCommentResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $projectId;
    private string $username;
    private string $content;
    private DateTimeValue $createdAt;
    private DateTimeValue $updatedAt;

    public function id(): int
    {
        return $this->id;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function createdAt(): DateTimeValue
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTimeValue
    {
        return $this->updatedAt;
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
            'project_id' => 'projectId',
            'username' => 'username',
            'content' => 'content',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
        ];
    }

// phpcs:enable
}

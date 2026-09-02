<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\ProjectCommentUpdate;

class PatchProjectsProjectIDCommentsCommentID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/projects/{projectID}/comments/{commentID}';
    private int $projectID;
    private int $commentID;
    private ProjectCommentUpdate $body;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function commentID(): int
    {
        return $this->commentID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'commentID' => $this->commentID,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'commentID' => 'commentID',
        ];
    }
}

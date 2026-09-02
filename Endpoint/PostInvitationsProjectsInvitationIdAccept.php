<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class PostInvitationsProjectsInvitationIdAccept implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/invitations/projects/{invitation_id}/accept';
    private int $invitationId;

    public function invitationId(): int
    {
        return $this->invitationId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'invitation_id' => $this->invitationId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['invitation_id' => 'invitationId'];
    }
}

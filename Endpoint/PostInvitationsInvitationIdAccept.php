<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class PostInvitationsInvitationIdAccept implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/invitations/{invitation_id}/accept';
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

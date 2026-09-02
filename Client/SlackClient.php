<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\PostProjectsProjectIDSlackTest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class SlackClient extends AbstractClient implements SlackClientInterface
{
    /**
     * Test Slack Connection
     *
     * Confirm the Slack bot token and bind the workspace.  Always 200 with &#x60;{ok: bool, ...}&#x60; — a failure carries its reason in the body rather than a status code, so the UI renders one result card instead of branching. &#x60;warnings&#x60; is the half that actually helps an operator: it names the missing piece for a project that will otherwise sit silently unconnected.
     */
    #[EndpointAttribute(PostProjectsProjectIDSlackTest::class)]
    public function postProjectsProjectIDSlackTest(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDSlackTest::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }
}

<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface SlackClientInterface
{
    public const string TAG = 'Slack';

    /**
     * Test Slack Connection
     *
     * Confirm the Slack bot token and bind the workspace.  Always 200 with &#x60;{ok: bool, ...}&#x60; — a failure carries its reason in the body rather than a status code, so the UI renders one result card instead of branching. &#x60;warnings&#x60; is the half that actually helps an operator: it names the missing piece for a project that will otherwise sit silently unconnected.
     */
    public function postProjectsProjectIDSlackTest(
        int $projectID,
    ): mixed;
}

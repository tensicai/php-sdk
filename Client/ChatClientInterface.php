<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\ChatAttachmentUploadResponse;
use TeamBlue\TensicAI\SDK\Model\ChatModel;
use TeamBlue\TensicAI\SDK\Model\ChatResponse;
use TeamBlue\TensicAI\SDK\Model\ChatStopRequest;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAssetsTokenQuery;
use TeamBlue\TensicAI\SDK\Model\QuestionResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ChatClientInterface
{
    public const string TAG = 'Chat';

    /**
     * Get Project Asset
     *
     * Serve a cached chat asset — an inline image OR a downloadable artifact the agent wrote to /artifacts/ — from the Redis-backed blob cache (24h TTL).  Project-scoped + login-gated: the auth dep confirms the caller can access this project, and we re-check the asset&#39;s stored project_id. &#x60;&lt;img src&gt;&#x60; and &#x60;&lt;a href&gt;&#x60; clicks carry the JWT cookie, so same-origin requests authorize without an Authorization header. Stateless by design — the bytes live in Redis, never re-read from the (possibly remote, possibly reaped) sandbox.
     */
    public function getProjectsProjectIDAssetsToken(
        int $projectID,
        string $token,
        GetProjectsProjectIDAssetsTokenQuery|null $query = null,
    ): mixed;

    /**
     * Upload Chat Attachment
     *
     * Stage a large chat attachment in object storage; returns an &#x60;upload_id&#x60; to reference from a chat body&#39;s &#x60;files[]&#x60; instead of base64 content.
     */
    public function postProjectsProjectIDAttachments(
        int $projectID,
    ): ChatAttachmentUploadResponse;

    /**
     * Chat Query
     *
     * Send a chat message to a project with conversation history.
     */
    public function postProjectsProjectIDChat(
        int $projectID,
        ChatModel $body,
    ): ChatResponse;

    /**
     * Chat Stop
     *
     * Cancel an in-flight streaming chat by chat_id.  Producer-side agent task is detached from the HTTP request so client AbortController alone can&#39;t stop it (see &#x60;tensic/chat_resume.py&#x60;).
     */
    public function postProjectsProjectIDChatStop(
        int $projectID,
        ChatStopRequest $body,
    ): mixed;

    /**
     * Question Query Endpoint
     *
     * **Deprecated** — forwards to &#x60;/chat&#x60; with an ephemeral chat_id.  Accepts the same body as &#x60;/chat&#x60; (ChatModel). The response shape is preserved (&#x60;type: \&quot;question\&quot;&#x60;) for backwards compatibility.
     */
    public function postProjectsProjectIDQuestion(
        int $projectID,
        ChatModel $body,
    ): QuestionResponse;
}

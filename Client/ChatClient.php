<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDAssetsToken;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDAttachments;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDChat;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDChatStop;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDQuestion;
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
 */
class ChatClient extends AbstractClient implements ChatClientInterface
{
    /**
     * Get Project Asset
     *
     * Serve a cached chat asset — an inline image OR a downloadable artifact the agent wrote to /artifacts/ — from the Redis-backed blob cache (24h TTL).  Project-scoped + login-gated: the auth dep confirms the caller can access this project, and we re-check the asset&#39;s stored project_id. &#x60;&lt;img src&gt;&#x60; and &#x60;&lt;a href&gt;&#x60; clicks carry the JWT cookie, so same-origin requests authorize without an Authorization header. Stateless by design — the bytes live in Redis, never re-read from the (possibly remote, possibly reaped) sandbox.
     */
    #[EndpointAttribute(GetProjectsProjectIDAssetsToken::class)]
    public function getProjectsProjectIDAssetsToken(
        int $projectID,
        string $token,
        GetProjectsProjectIDAssetsTokenQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDAssetsToken::fromRecordData(
                [
                    'projectID' => $projectID,
                    'token' => $token,
                    'query' => $query,
                ],
            ),
        );

        return $response;
    }

    /**
     * Upload Chat Attachment
     *
     * Stage a large chat attachment in object storage; returns an &#x60;upload_id&#x60; to reference from a chat body&#39;s &#x60;files[]&#x60; instead of base64 content.
     */
    #[EndpointAttribute(PostProjectsProjectIDAttachments::class)]
    public function postProjectsProjectIDAttachments(
        int $projectID,
    ): ChatAttachmentUploadResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDAttachments::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return ChatAttachmentUploadResponse::fromArray($response);
    }

    /**
     * Chat Query
     *
     * Send a chat message to a project with conversation history.
     */
    #[EndpointAttribute(PostProjectsProjectIDChat::class)]
    public function postProjectsProjectIDChat(
        int $projectID,
        ChatModel $body,
    ): ChatResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDChat::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return ChatResponse::fromArray($response);
    }

    /**
     * Chat Stop
     *
     * Cancel an in-flight streaming chat by chat_id.  Producer-side agent task is detached from the HTTP request so client AbortController alone can&#39;t stop it (see &#x60;tensic/chat_resume.py&#x60;).
     */
    #[EndpointAttribute(PostProjectsProjectIDChatStop::class)]
    public function postProjectsProjectIDChatStop(
        int $projectID,
        ChatStopRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDChatStop::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Question Query Endpoint
     *
     * **Deprecated** — forwards to &#x60;/chat&#x60; with an ephemeral chat_id.  Accepts the same body as &#x60;/chat&#x60; (ChatModel). The response shape is preserved (&#x60;type: \&quot;question\&quot;&#x60;) for backwards compatibility.
     */
    #[EndpointAttribute(PostProjectsProjectIDQuestion::class)]
    public function postProjectsProjectIDQuestion(
        int $projectID,
        ChatModel $body,
    ): QuestionResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDQuestion::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return QuestionResponse::fromArray($response);
    }
}

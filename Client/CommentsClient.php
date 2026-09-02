<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\DeleteProjectsProjectIDCommentsCommentID;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDComments;
use TensicAI\SDK\Endpoint\PatchProjectsProjectIDCommentsCommentID;
use TensicAI\SDK\Endpoint\PostProjectsProjectIDComments;
use TensicAI\SDK\Model\CommentCreatedResponse;
use TensicAI\SDK\Model\GetProjectsProjectIDCommentsQuery;
use TensicAI\SDK\Model\MessageResponse;
use TensicAI\SDK\Model\PageProjectCommentResponse;
use TensicAI\SDK\Model\ProjectCommentCreate;
use TensicAI\SDK\Model\ProjectCommentUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class CommentsClient extends AbstractClient implements CommentsClientInterface
{
    /**
     * Delete Project Comment
     *
     * Delete a comment (owner or admin only).
     */
    #[EndpointAttribute(DeleteProjectsProjectIDCommentsCommentID::class)]
    public function deleteProjectsProjectIDCommentsCommentID(
        int $projectID,
        int $commentID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDCommentsCommentID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'commentID' => $commentID,
                ],
            ),
        );
    }

    /**
     * List Project Comments
     *
     * List comments for a project (newest first), paginated.
     */
    #[EndpointAttribute(GetProjectsProjectIDComments::class)]
    public function getProjectsProjectIDComments(
        int $projectID,
        GetProjectsProjectIDCommentsQuery|null $query = null,
    ): PageProjectCommentResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDComments::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return PageProjectCommentResponse::fromArray($response);
    }

    /**
     * Update Project Comment
     *
     * Edit a comment (owner or admin only).
     */
    #[EndpointAttribute(PatchProjectsProjectIDCommentsCommentID::class)]
    public function patchProjectsProjectIDCommentsCommentID(
        int $projectID,
        int $commentID,
        ProjectCommentUpdate $body,
    ): MessageResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDCommentsCommentID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'commentID' => $commentID,
                    'body' => $body,
                ],
            ),
        );

        return MessageResponse::fromArray($response);
    }

    /**
     * Create Project Comment
     *
     * Add a comment to a project.
     */
    #[EndpointAttribute(PostProjectsProjectIDComments::class)]
    public function postProjectsProjectIDComments(
        int $projectID,
        ProjectCommentCreate $body,
    ): CommentCreatedResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDComments::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return CommentCreatedResponse::fromArray($response);
    }
}

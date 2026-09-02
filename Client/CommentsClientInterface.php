<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

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
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface CommentsClientInterface
{
    public const string TAG = 'Comments';

    /**
     * Delete Project Comment
     *
     * Delete a comment (owner or admin only).
     */
    public function deleteProjectsProjectIDCommentsCommentID(
        int $projectID,
        int $commentID,
    ): mixed;

    /**
     * List Project Comments
     *
     * List comments for a project (newest first), paginated.
     */
    public function getProjectsProjectIDComments(
        int $projectID,
        GetProjectsProjectIDCommentsQuery|null $query = null,
    ): PageProjectCommentResponse;

    /**
     * Update Project Comment
     *
     * Edit a comment (owner or admin only).
     */
    public function patchProjectsProjectIDCommentsCommentID(
        int $projectID,
        int $commentID,
        ProjectCommentUpdate $body,
    ): MessageResponse;

    /**
     * Create Project Comment
     *
     * Add a comment to a project.
     */
    public function postProjectsProjectIDComments(
        int $projectID,
        ProjectCommentCreate $body,
    ): CommentCreatedResponse;
}

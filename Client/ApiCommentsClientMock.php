<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDCommentsQuery;
use TeamBlue\TensicAI\SDK\Model\ProjectCommentCreate;
use TeamBlue\TensicAI\SDK\Model\ProjectCommentUpdate;

use function func_get_args;

final class ApiCommentsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<CommentsClientInterface> */
    public function mockInterface(): string
    {
        return CommentsClientInterface::class;
    }

    /** @see CommentsClient::deleteProjectsProjectIDCommentsCommentID() */
    public function deleteProjectsProjectIDCommentsCommentID(
        int $projectID,
        int $commentID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDCommentsCommentID', ...func_get_args());

        return $this;
    }

    /** @see CommentsClient::getProjectsProjectIDComments() */
    public function getProjectsProjectIDComments(
        int $projectID,
        GetProjectsProjectIDCommentsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDComments', ...func_get_args());

        return $this;
    }

    /** @see CommentsClient::patchProjectsProjectIDCommentsCommentID() */
    public function patchProjectsProjectIDCommentsCommentID(
        int $projectID,
        int $commentID,
        ProjectCommentUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDCommentsCommentID', ...func_get_args());

        return $this;
    }

    /** @see CommentsClient::postProjectsProjectIDComments() */
    public function postProjectsProjectIDComments(
        int $projectID,
        ProjectCommentCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDComments', ...func_get_args());

        return $this;
    }
}

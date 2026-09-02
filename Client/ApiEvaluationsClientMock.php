<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\EvalDatasetCreate;
use TeamBlue\TensicAI\SDK\Model\EvalDatasetUpdate;
use TeamBlue\TensicAI\SDK\Model\EvalRunCreate;
use TeamBlue\TensicAI\SDK\Model\EvalTestCaseCreate;
use TeamBlue\TensicAI\SDK\Model\EvalTestCaseUpdate;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDEvalsDatasetsQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDEvalsRunsQuery;

use function func_get_args;

final class ApiEvaluationsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<EvaluationsClientInterface> */
    public function mockInterface(): string
    {
        return EvaluationsClientInterface::class;
    }

    /** @see EvaluationsClient::deleteProjectsProjectIDEvalsDatasetsDatasetID() */
    public function deleteProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDEvalsDatasetsDatasetID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::deleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID() */
    public function deleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID(
        int $projectID,
        int $datasetID,
        int $caseID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::deleteProjectsProjectIDEvalsRunsRunID() */
    public function deleteProjectsProjectIDEvalsRunsRunID(
        int $projectID,
        int $runID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDEvalsRunsRunID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::getProjectsProjectIDEvalsDatasets() */
    public function getProjectsProjectIDEvalsDatasets(
        int $projectID,
        GetProjectsProjectIDEvalsDatasetsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDEvalsDatasets', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::getProjectsProjectIDEvalsDatasetsDatasetID() */
    public function getProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
    ): self {
        ($this->persister)('getProjectsProjectIDEvalsDatasetsDatasetID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::getProjectsProjectIDEvalsRuns() */
    public function getProjectsProjectIDEvalsRuns(
        int $projectID,
        GetProjectsProjectIDEvalsRunsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDEvalsRuns', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::getProjectsProjectIDEvalsRunsRunID() */
    public function getProjectsProjectIDEvalsRunsRunID(
        int $projectID,
        int $runID,
    ): self {
        ($this->persister)('getProjectsProjectIDEvalsRunsRunID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::patchProjectsProjectIDEvalsDatasetsDatasetID() */
    public function patchProjectsProjectIDEvalsDatasetsDatasetID(
        int $projectID,
        int $datasetID,
        EvalDatasetUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDEvalsDatasetsDatasetID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::patchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID() */
    public function patchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID(
        int $projectID,
        int $datasetID,
        int $caseID,
        EvalTestCaseUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::postProjectsProjectIDEvalsDatasets() */
    public function postProjectsProjectIDEvalsDatasets(
        int $projectID,
        EvalDatasetCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDEvalsDatasets', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::postProjectsProjectIDEvalsDatasetsDatasetIDCases() */
    public function postProjectsProjectIDEvalsDatasetsDatasetIDCases(
        int $projectID,
        int $datasetID,
        EvalTestCaseCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDEvalsDatasetsDatasetIDCases', ...func_get_args());

        return $this;
    }

    /** @see EvaluationsClient::postProjectsProjectIDEvalsRuns() */
    public function postProjectsProjectIDEvalsRuns(
        int $projectID,
        EvalRunCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDEvalsRuns', ...func_get_args());

        return $this;
    }
}

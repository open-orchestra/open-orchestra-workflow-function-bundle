<?php

namespace OpenOrchestra\WorkflowFunction\Repository;

use Doctrine\Common\Collections\Collection;

/**
 * Interface WorkflowFunctionRepositoryInterface
 */
interface WorkflowFunctionRepositoryInterface
{
    /**
     * @return Collection
     */
    public function findAllWorkflowFunction();

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function find($id);
}

<?php

namespace Kanboard\Filter;

use Kanboard\Core\Filter\FilterInterface;
use Kanboard\Model\TaskModel;

/**
 * Class TaskEpicFilter
 *
 * @package Kanboard\Filter
 */
class TaskEpicFilter extends BaseComparisonFilter implements FilterInterface
{
    /**
     * Get search attribute
     *
     * @access public
     * @return string[]
     */
    public function getAttributes()
    {
        return array('epic');
    }

    /**
     * Apply filter
     *
     * @access public
     * @return FilterInterface
     */
    public function apply()
    {
        $this->applyComparisonFilter(TaskModel::TABLE.'.epic');
        return $this;
    }
}

<?php

namespace Owner\TestModul\Model\ResourceModel\CarResource;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Owner\TestModul\Model\CarModel;
use Owner\TestModul\Model\ResourceModel\CarResource as CarResourceModel;

/**
 * Class Collection
 */
class Collection extends AbstractCollection
{
    /**
     * {@inheritdoc}
     */
    protected $_idFieldName = CarModel::ENTITY_ID;

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(
            CarModel::class,
            CarResourceModel::class
        );
    }
}

<?php

namespace Owner\TestModul\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Owner\TestModul\Model\CarModel;

/**
 * Class CarResource
 */
class CarResource extends AbstractDb
{
    const CAR_TABLE = 'my_new_way_table';

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(
            self::CAR_TABLE,
            CarModel::ENTITY_ID
        );
    }
}

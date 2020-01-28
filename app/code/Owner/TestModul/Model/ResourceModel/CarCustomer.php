<?php

namespace Owner\TestModul\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Owner\TestModul\Model\CarCustomerModel;

/**
 * Class CarCustomer
 */
class CarCustomer extends AbstractDb
{
    const CAR_CUSTOMER_TABLE = 'my_old_fashioned_table';

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(
            self::CAR_CUSTOMER_TABLE,
            CarCustomerModel::ENTITY_ID
        );
    }

    public function _beforeDelete(\Magento\Framework\Model\AbstractModel $object)
    {
        //my custom logic
        return parent::_beforeDelete($object);
    }
}

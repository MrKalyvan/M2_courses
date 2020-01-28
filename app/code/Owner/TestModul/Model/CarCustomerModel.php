<?php

namespace Owner\TestModul\Model;

use Magento\Framework\Model\AbstractModel;
use Owner\TestModul\Api\Data\CarCustomerInterface;
use Owner\TestModul\Model\ResourceModel\CarCustomer as CarResourceModel;

/**
 * Class CarCustomerModel
 */
class CarCustomerModel extends AbstractModel implements CarCustomerInterface
{
    /**
     * {@inheritdoc}
     */
    public function _construct()
    {
        $this->_init(CarResourceModel::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * {@inheritdoc}
     */
    public function getSomeId()
    {
        return (int)$this->getData(self::SOME_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        return $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail(string $email): CarCustomerInterface
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * {@inheritdoc}
     */
    public function setSomeId(int $someId): CarCustomerInterface
    {
        return $this->setData(self::SOME_ID, $someId);
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string $name): CarCustomerInterface
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt): CarCustomerInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt->format('Y-m-d H:i:s'));
    }
}
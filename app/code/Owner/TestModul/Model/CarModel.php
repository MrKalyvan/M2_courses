<?php

namespace Owner\TestModul\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Tests\NamingConvention\true\string;
use Owner\TestModul\Api\Data\CarInterface;
use Owner\TestModul\Model\ResourceModel\CarResource as CarResourceModel;

/**
 * Class CarModel
 */
class CarModel extends AbstractModel implements CarInterface
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
    public function getUserId()
    {
        return $this->getData(self::USER_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function getCarId()
    {
        return (int)$this->getData(self::CAR_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
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
    public function getPrice()
    {
        return $this->getData(self::PRICE);
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
    public function setUserId(int $userId): CarInterface
    {
        return $this->setData(self::USER_ID, $userId);
    }

    /**
     * {@inheritdoc}
     */
    public function setCarId(int $carId): CarInterface
    {
        return $this->setData(self::CAR_ID, $carId);
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription(string $description): CarInterface
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt): CarInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt->format('Y-m-d H:i:s'));
    }

    /**
     * {@inheritdoc}
     */
    public function setPrice(float $price): CarInterface
    {
        return $this->setData(self::PRICE, $price);
    }
}

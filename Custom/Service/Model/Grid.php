<?php

/**
 * Grid Grid Model.
 * @package   Custom_Service
 * @author    ClaudioC
 */
namespace Custom\Service\Model;

use Custom\Service\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'custom_service_log';

    /**
     * @var string
     */
    protected $_cacheTag = 'custom_service_log';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'custom_service_log';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Custom\Service\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     *
     * @return varchar
     */
    public function getSku()
    {
        return $this->getData(self::SKU);
    }

    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->getData(self::QUANTITY);
    }

    public function setQuantity($quantity)
    {
        return $this->setData(self::QUANTITY, $quantity);
    }

    /**
     *
     * @return varchar
     */
    public function getErrorMessage()
    {
        return $this->getData(self::ERROR_MESSAGE);
    }

    public function setErrorMessage($errorMessage)
    {
        return $this->setData(self::ERROR_MESSAGE, $errorMessage);
    }

    /**
     *
     * @return varchar
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}

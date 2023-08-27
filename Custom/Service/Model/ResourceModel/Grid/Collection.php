<?php

/**
 * Grid Grid Collection.
 *

 * @package   Custom_Service
 * @author    ClaudioC


 */
namespace Custom\Service\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Custom\Service\Model\Grid',
            'Custom\Service\Model\ResourceModel\Grid'
        );
    }
}

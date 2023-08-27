<?php
namespace Custom\Service\Block\Adminhtml\Product\Edit\Button;

use Magento\Customer\Block\Adminhtml\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
class Update extends GenericButton implements ButtonProviderInterface
{
      public function getButtonData()
      {
            return [
                'label' => __('Sync with WMS'),
                'class' => 'action-secondary',
                'id' => 'sync-wms',
                'on_click' => "#",
                'sort_order' => 100
            ];
      }
}
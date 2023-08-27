<?php

namespace Custom\Service\Controller\Adminhtml\Quantity;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Get extends Action implements HttpPostActionInterface
{
      protected $_logger;
      private $gridFactory;
      public function __construct(
          Context $context,
          JsonFactory $resultJsonFactory,
          \Custom\Service\Model\GridFactory $gridFactory,
          \Psr\Log\LoggerInterface $logger
      )
      {
            parent::__construct($context);
            $this->resultJsonFactory = $resultJsonFactory;
            $this->gridFactory = $gridFactory;
            $this->_logger = $logger;
      }

      public function execute()
      {
            $params = $this->getRequest()->getParams();
            $resultJson = $this->resultJsonFactory->create();
            $logData = $this->gridFactory->create();
            try {
                  $quantity = $this->getQuantityBySky(); // real behaviour we need to pass the product sku to the service
                  $message = 'New quantity set: ' . $quantity;
                  $errorMessage = null;
                  $error = 0;
                  $this->_logger->info(__('SERVICE Quantity set: '.$quantity));
            } catch (\Exception $e) {
                  $quantity = 0;
                  $message = 'Something went wrong. please try again later or contact the contact technical support.';
                  $errorMessage = "ERROR SERVICE - ".$e->getMessage();
                  $error = 1;
                  $this->_logger->debug($e->getMessage());
            }

            $logData->setSku($params['sku']);
            $logData->setQuantity($quantity);
            $logData->setStatus($error);
            $logData->setErrorMessage($errorMessage);
            $logData->save();

            return $resultJson->setData([
              'messages' => $message,
              'quantity' => $quantity,
              'error' => $error
          ]);
      }

      private function getQuantityBySky()
      {
            $quantity = rand ( 0,2000);
            if ($this->check($quantity)){
                  return $quantity;
            }
            throw new \Exception('There is an error with this service.');
      }
      private function check($number): bool
      {
            if($number % 2 == 0){
                  return true;
            }
            return false;
      }
}
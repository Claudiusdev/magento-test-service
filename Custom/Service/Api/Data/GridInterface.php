<?php
/**
 * Grid GridInterface.

 * @package   Custom_Service
 * @author    ClaudioC
 */

namespace Custom\Service\Api\Data;

interface GridInterface
{
      public const ENTITY_ID = 'entity_id';
      public const SKU = 'sku';
      public const STATUS = 'status';
      public const QUANTITY = 'quantity';
      public const ERROR_MESSAGE = 'error_message';
      public const CREATED_AT = 'created_at';

   /**
    * Get EntityId.
    *
    * @return int
    */
    public function getEntityId();

   /**
    * Set EntityId.
    */
    public function setEntityId($entityId);

   /**
    * Get Sku.
    *
    * @return string|null
    */
    public function getSku();

   /**
    * Set Sku.
    */
    public function setSku($sku);

   /**
    * Get Status.
    *
    * @return string|null
    */
    public function getStatus();

   /**
    * Set Status.
    */
    public function setStatus($status);

   /**
    * Get quantity.
    *
    * @return string|null
    */
    public function getQuantity();

   /**
    * Set Quantity.
    */
    public function setQuantity($quantity);

   /**
    *
    * @return string|null
    */
    public function getErrorMessage();

   /**
    * Set ErrorMessage.
    */
    public function setErrorMessage($errorMessage);

   /**
    * Get CreatedAt.
    *
    * @return string|null
    */
    public function getCreatedAt();

   /**
    * Set CreatedAt.
    */
    public function setCreatedAt($createdAt);
}

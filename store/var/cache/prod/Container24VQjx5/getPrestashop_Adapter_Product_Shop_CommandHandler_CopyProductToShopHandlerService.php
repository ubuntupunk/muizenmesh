<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.shop.command_handler.copy_product_to_shop_handler' shared service.

return $this->services['prestashop.adapter.product.shop.command_handler.copy_product_to_shop_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Shop\CommandHandler\CopyProductToShopHandler(($this->services['prestashop.adapter.product.update.product_shop_updater'] ?? $this->load('getPrestashop_Adapter_Product_Update_ProductShopUpdaterService.php')));
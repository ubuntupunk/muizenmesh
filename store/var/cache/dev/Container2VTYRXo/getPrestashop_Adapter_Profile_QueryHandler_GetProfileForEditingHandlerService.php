<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.profile.query_handler.get_profile_for_editing_handler' shared service.

return $this->services['prestashop.adapter.profile.query_handler.get_profile_for_editing_handler'] = new \PrestaShop\PrestaShop\Adapter\Profile\QueryHandler\GetProfileForEditingHandler(($this->services['prestashop.core.image.parser.image_tag_source_parser'] ?? ($this->services['prestashop.core.image.parser.image_tag_source_parser'] = new \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParser())), (\dirname(__DIR__, 4).'/img/pr/'));

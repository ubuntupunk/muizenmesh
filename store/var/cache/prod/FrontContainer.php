<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShop\\Module\\Psgdpr\\Repository\\ConsentRepository' => 'getConsentRepositoryService',
            'PrestaShop\\Module\\Psgdpr\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PrestaShop\\Module\\Psgdpr\\Repository\\LoggerRepository' => 'getLoggerRepositoryService',
            'PrestaShop\\Module\\Psgdpr\\Service\\ExportService' => 'getExportServiceService',
            'PrestaShop\\Module\\Psgdpr\\Service\\Export\\ExportFactory' => 'getExportFactoryService',
            'PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToCsv' => 'getExportToCsvService',
            'PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToJson' => 'getExportToJsonService',
            'PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToPdf' => 'getExportToPdfService',
            'PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\FrontResponderFactory' => 'getFrontResponderFactoryService',
            'PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\Strategy\\FrontResponderForCsv' => 'getFrontResponderForCsvService',
            'PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\Strategy\\FrontResponderForPdf' => 'getFrontResponderForPdfService',
            'PrestaShop\\Module\\Psgdpr\\Service\\LoggerService' => 'getLoggerServiceService',
            'PrestaShop\\PrestaShop\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\PrestaShop\\Adapter\\LegacyContext' => 'getLegacyContextService',
            'PrestaShop\\PrestaShop\\Adapter\\Tools' => 'getToolsService',
            'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository' => 'getRepositoryService',
            'Psgdpr' => 'getPsgdprService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration2Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
        ];
        $this->aliases = [
            'PrestaShop\\PrestaShop\\Core\\Currency\\CurrencyDataProviderInterface' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'PrestaShop\\PrestaShop\\Core\\Localization\\LocaleInterface' => 'prestashop.core.localization.locale.context_locale',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.adapter.context_state_manager' => 'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager',
            'prestashop.adapter.data_provider.currency' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'prestashop.adapter.legacy.configuration' => 'PrestaShop\\PrestaShop\\Adapter\\Configuration',
            'prestashop.adapter.legacy.context' => 'PrestaShop\\PrestaShop\\Adapter\\LegacyContext',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
            'prestashop.core.localization.locale.repository' => 'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            '.service_locator.zH65KBq' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Connection $defaultConnection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\CacheAdapterFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_entity_manager.validator_loader' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'messenger.middleware.doctrine_close_connection' => true,
            'messenger.middleware.doctrine_open_transaction_logger' => true,
            'messenger.middleware.doctrine_ping_connection' => true,
            'messenger.middleware.doctrine_transaction' => true,
            'messenger.transport.doctrine.factory' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Repository\ConsentRepository' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Repository\ConsentRepository
     */
    protected function getConsentRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Repository\\ConsentRepository'] = new \PrestaShop\Module\Psgdpr\Repository\ConsentRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Repository\CustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Repository\\CustomerRepository'] = new \PrestaShop\Module\Psgdpr\Repository\CustomerRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Repository\LoggerRepository' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Repository\LoggerRepository
     */
    protected function getLoggerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Repository\\LoggerRepository'] = new \PrestaShop\Module\Psgdpr\Repository\LoggerRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\ExportService' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\ExportService
     */
    protected function getExportServiceService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\ExportService'] = new \PrestaShop\Module\Psgdpr\Service\ExportService(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext(), ($this->services['Psgdpr'] ?? $this->getPsgdprService())->getTranslator());
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\Export\ExportFactory' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\Export\ExportFactory
     */
    protected function getExportFactoryService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\ExportFactory'] = new \PrestaShop\Module\Psgdpr\Service\Export\ExportFactory(new RewindableGenerator(function () {
            yield 0 => ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToCsv'] ?? $this->getExportToCsvService());
            yield 1 => ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToPdf'] ?? $this->getExportToPdfService());
            yield 2 => ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToJson'] ?? $this->getExportToJsonService());
        }, 3));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToCsv' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToCsv
     */
    protected function getExportToCsvService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToCsv'] = new \PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToCsv(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext(), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] ?? $this->getLoggerServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToJson' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToJson
     */
    protected function getExportToJsonService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToJson'] = new \PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToJson(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext(), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] ?? $this->getLoggerServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToPdf' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToPdf
     */
    protected function getExportToPdfService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\Strategy\\ExportToPdf'] = new \PrestaShop\Module\Psgdpr\Service\Export\Strategy\ExportToPdf(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext(), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] ?? $this->getLoggerServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\FrontResponder\FrontResponderFactory' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\FrontResponder\FrontResponderFactory
     */
    protected function getFrontResponderFactoryService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\FrontResponderFactory'] = new \PrestaShop\Module\Psgdpr\Service\FrontResponder\FrontResponderFactory(new RewindableGenerator(function () {
            yield 0 => ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\Strategy\\FrontResponderForCsv'] ?? $this->getFrontResponderForCsvService());
            yield 1 => ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\Strategy\\FrontResponderForPdf'] ?? $this->getFrontResponderForPdfService());
        }, 2));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\FrontResponder\Strategy\FrontResponderForCsv' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\FrontResponder\Strategy\FrontResponderForCsv
     */
    protected function getFrontResponderForCsvService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\Strategy\\FrontResponderForCsv'] = new \PrestaShop\Module\Psgdpr\Service\FrontResponder\Strategy\FrontResponderForCsv(($this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\ExportFactory'] ?? $this->getExportFactoryService()), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] ?? $this->getLoggerServiceService()), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\ExportService'] ?? $this->getExportServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\FrontResponder\Strategy\FrontResponderForPdf' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\FrontResponder\Strategy\FrontResponderForPdf
     */
    protected function getFrontResponderForPdfService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\FrontResponder\\Strategy\\FrontResponderForPdf'] = new \PrestaShop\Module\Psgdpr\Service\FrontResponder\Strategy\FrontResponderForPdf(($this->services['PrestaShop\\Module\\Psgdpr\\Service\\Export\\ExportFactory'] ?? $this->getExportFactoryService()), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] ?? $this->getLoggerServiceService()), ($this->services['PrestaShop\\Module\\Psgdpr\\Service\\ExportService'] ?? $this->getExportServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\Psgdpr\Service\LoggerService' shared service.
     *
     * @return \PrestaShop\Module\Psgdpr\Service\LoggerService
     */
    protected function getLoggerServiceService()
    {
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] = new \PrestaShop\Module\Psgdpr\Service\LoggerService(($this->services['PrestaShop\\Module\\Psgdpr\\Repository\\LoggerRepository'] ?? $this->getLoggerRepositoryService()), ($this->services['PrestaShop\\Module\\Psgdpr\\Repository\\CustomerRepository'] ?? $this->getCustomerRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\ContextStateManager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getContextStateManagerService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop) ? (($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\LegacyContext' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getLegacyContextService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Core\Localization\Locale\Repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getRepositoryService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
    }

    /**
     * Gets the public 'Psgdpr' shared service.
     *
     * @return \Psgdpr
     */
    protected function getPsgdprService()
    {
        return $this->services['Psgdpr'] = \Module::getInstanceByName('psgdpr');
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the public 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getArrayService()
    {
        return $this->services['array'] = (new \PrestaShopBundle\DependencyInjection\CacheAdapterFactory())->getCacheAdapter('array');
    }

    /**
     * Gets the public 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'const' => ['privates', 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor', 'getRuntimeConstEnvVarProcessorService', false],
        ], [
            'const' => '?',
        ]);
    }

    /**
     * Gets the public 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the public 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => '', 'dbname' => 'sexthera_prestamuiz', 'user' => 'sexthera_prestamuiz', 'password' => '#,r@ZQlEY^71', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = ($this->services['array'] ?? $this->getArrayService());
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $d = ($this->services['annotation_reader'] ?? ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader()));
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/productcomments/src/Entity']);
        $e->addExcludePaths([0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/productcomments/src/Entity/index.php']);
        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/psgdpr/src/Entity']);
        $f->addExcludePaths([0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/psgdpr/src/Entity/index.php']);

        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $c->addDriver($e, 'PrestaShop\\Module\\ProductComment\\Entity');
        $c->addDriver($f, 'PrestaShop\\Module\\Psgdpr\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCache($b);
        $a->setQueryCache($b);
        $a->setResultCache($b);
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir('/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');
        $a->addEntityNamespace('Modulepsgdpr', 'PrestaShop\\Module\\Psgdpr\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false);
    }

    /**
     * Gets the public 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('/home/sexthera/public_html/muizenmesh.co.za/store', '/home/sexthera/public_html/muizenmesh.co.za/store/modules/');
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_CircuitBreaker_CacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false)))->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['prestashop.core.circuit_breaker.cache'] ?? $this->getPrestashop_Core_CircuitBreaker_CacheService()));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(($this->services['prestashop.core.circuit_breaker.doctrine_cache'] ?? $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(($this->services['prestashop.core.filter.front_end_object.product_collection'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ($this->services['prestashop.core.filter.front_end_object.cart'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_CartService()), 'customer' => ($this->services['prestashop.core.filter.front_end_object.customer'] ?? ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())), 'shop' => ($this->services['prestashop.core.filter.front_end_object.shop'] ?? ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())), 'configuration' => ($this->services['prestashop.core.filter.front_end_object.configuration'] ?? ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter()))]);
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.product'] ?? ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.search_result_product'] ?? ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//localization'))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProviderService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ($this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? $this->getRepositoryService())->getLocale(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     *
     * @deprecated The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        @trigger_error('The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the public 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('/home/sexthera/public_html/muizenmesh.co.za/store', '/home/sexthera/public_html/muizenmesh.co.za/store/modules/'))));
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->privates['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the public 'prestashop.adapter.tools' alias.
     *
     * @return object The "PrestaShop\PrestaShop\Adapter\Tools" service.
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        @trigger_error('The "prestashop.adapter.tools" service alias is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->get('PrestaShop\\PrestaShop\\Adapter\\Tools');
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'database_host' => '127.0.0.1',
            'database_port' => '',
            'database_name' => 'sexthera_prestamuiz',
            'database_user' => 'sexthera_prestamuiz',
            'database_password' => '#,r@ZQlEY^71',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'b8j51Ggafsh5xP3EPZP7PUG9pa8GryIm82pBsnYni1EZzAhtBkdhmA1dSin0vNX0',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2023-03-30',
            'locale' => 'en-US',
            'use_debug_toolbar' => true,
            'cookie_key' => '7EKohrQI2m2EJrZhRMxqgreNo5YpSfOTi1IxzARX8Le4ULMKOFm9P4MCa9rI7JMR',
            'cookie_iv' => 'ItCE76ik01oz5AghDPSINbkyfmqkDxhO',
            'new_cookie_key' => 'def000007ea18e022c8ac7debacd3ec1b001e3389e901d041a5cfffc986b3134ea5a736ab3caaa723e9f87e0a7a22b855fa5d995da454e4727fe7992f62c2c65cbe81f07',
            'api_public_key' => '-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1un5OSk3dxu8rHUb6vhS'."\n".'JF4hd7xN/4wZZ6nAPohkZ2slgTCEoflyefYPC2nX9hUb1zQrA4s096Ep6m2Ux7Mb'."\n".'gZcNI5f628A+II79lFG50z7z2dYQvLiXZSGj8QRofWYZpY5/RJeOP+mRoo2FMrn9'."\n".'jXwmoXw4vA9lygpGg1OE1zGxY2FwHULcyccISV4fDndac1477QEj19s9OvsU7i2l'."\n".'FBa4J4gsN8HEkYLLtnKNyXCBcXLp5CCglthcQHF86DDNx49jg887qDvRaPgxsEt+'."\n".'5Uq1Yrixmamc+UGGJtqewdAcNH+ktBSY7NWQNh36wEMmOztfOO23N+HiLgdFKFup'."\n".'JQIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'',
            'api_private_key' => '-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDW6fk5KTd3G7ys'."\n".'dRvq+FIkXiF3vE3/jBlnqcA+iGRnayWBMISh+XJ59g8Ladf2FRvXNCsDizT3oSnq'."\n".'bZTHsxuBlw0jl/rbwD4gjv2UUbnTPvPZ1hC8uJdlIaPxBGh9Zhmljn9El44/6ZGi'."\n".'jYUyuf2NfCahfDi8D2XKCkaDU4TXMbFjYXAdQtzJxwhJXh8Od1pzXjvtASPX2z06'."\n".'+xTuLaUUFrgniCw3wcSRgsu2co3JcIFxcunkIKCW2FxAcXzoMM3Hj2ODzzuoO9Fo'."\n".'+DGwS37lSrViuLGZqZz5QYYm2p7B0Bw0f6S0FJjs1ZA2HfrAQyY7O1847bc34eIu'."\n".'B0UoW6klAgMBAAECggEALV2SWDiVFrVqLFVEIWNto3OjSO0c4dam/jTc+dY8q3/4'."\n".'mL6vIKnROmFwZ45eIfnuuIywj7zw31zLxkp/X3A1XDOQeHT6ZSy9cI3+hTKDMU5W'."\n".'lyMSwWONwbFKM/QkQmQtAb+Eqev8AQ3CyjdpaH3OQfF1Dh10tG3jpLRqkgotPmdB'."\n".'6F9ZqOe3i280BZjCxz8ErtE/EjClkaHyEJQ1VH4/lgG0omi52B6Pf4JveBSOTl6P'."\n".'EihUFAuoYEkQkPal6aTNQpt6fyz16nBwgzxfwMH3GM8JpB1CWt+gp9W/96X3nABC'."\n".'lN/i25FGK6VNjMh9Rry7kOBSKHjXKk3Q7ql1Nu6b+QKBgQDvhVGfOYqtwXRdQmGX'."\n".'Bv4O3bic6azHJEBn95n7LqyFb9+EO4qAL6jCMNZSOviUkDB77FT3KE7jbARX+y5N'."\n".'JzuN6EmJ2nhiEtKm5b5QVgc5gBHcusFlCvJEBtDysmloDuChoMrppHa7KmoffL6B'."\n".'6Z6s2RWHwb0juGfOmWlmbdkROwKBgQDls0Ev4+EI5ACD7f1zHkahJ8PJXPk/T21Q'."\n".'56A0a2NKt3ldhO3dKmYSXWGMMzHoSvZFPQg4Ao0AyT4ShNxRnNwaUVMnTAJoyZa1'."\n".'RSS6p+tgB0maiBVhNO37umYRmNMVIZk770K+ed7l6/R3mz7wW+EXYy+q0Qg93z3D'."\n".'jjTpRO6JHwKBgEcw0gTIXo6sfECn1UfFXUff4NpKnf8GqFn+fvbodYCnssCjzdOx'."\n".'1q/5Qgpo2q+Vd8Oth8d6ZJA178iSsL1f1tSj4Q+nLra/r3rJuFo6Z6VQin6Xx5mX'."\n".'ulA70mkAXFIAcgW4O/db2aphve8j7Z/BZ1cqorqZ+/Sc/8WpVWmLZsQ3AoGBAJ0O'."\n".'yzS+oOEeXQfYU6NCAVMxyFpH2xkh6wIVzmHpR5QQDckXGjlOQ0qtVQSzAJ3vm6JO'."\n".'D++UNuthrrKk66xWD91i2/OTslYJ+KVraKjEJlmbwgUKpWu48DxeAGppz3K0bX0g'."\n".'pMduty0JADhEC233tNnz9OTcVsFPgoDTHHSfsGZLAoGBAOPqvBi4GY8em+jhvo0j'."\n".'NFhtIx+n0OZpxnyHLAGwQl2bPqCp+783xQyh0V9XSMiKGyagAmd6u6g+0xLsbhHr'."\n".'5Itudbu9RalLOxDXv6F0AON8sgT7h2GlfnnkOGD61fwQJiN6A6j3yM4q28iGf9Qc'."\n".'ZRhK/+1J8rVf5lDjVelmuR5x'."\n".'-----END PRIVATE KEY-----'."\n".'',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/home/sexthera/public_html/muizenmesh.co.za/store/app',
            'kernel.project_dir' => '/home/sexthera/public_html/muizenmesh.co.za/store',
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.environment' => 'prod',
            'kernel.cache_dir' => '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod/',
            'kernel.active_modules' => [
                0 => 'ps_linklist',
                1 => 'blockreassurance',
                2 => 'blockwishlist',
                3 => 'psgdpr',
                4 => 'ps_contactinfo',
                5 => 'ps_languageselector',
                6 => 'ps_currencyselector',
                7 => 'ps_customersignin',
                8 => 'ps_shoppingcart',
                9 => 'ps_mainmenu',
                10 => 'ps_searchbar',
                11 => 'ps_imageslider',
                12 => 'ps_featuredproducts',
                13 => 'ps_customtext',
                14 => 'ps_specials',
                15 => 'ps_newproducts',
                16 => 'ps_bestsellers',
                17 => 'ps_emailsubscription',
                18 => 'ps_socialfollow',
                19 => 'ps_customeraccountlinks',
                20 => 'productcomments',
                21 => 'ps_categorytree',
                22 => 'contactform',
                23 => 'ps_sharebuttons',
                24 => 'ps_supplierlist',
                25 => 'statspersonalinfos',
                26 => 'gsitemap',
                27 => 'statscheckup',
                28 => 'statsregistrations',
                29 => 'gridhtml',
                30 => 'statscatalog',
                31 => 'ps_dataprivacy',
                32 => 'statssales',
                33 => 'statsproduct',
                34 => 'statsnewsletter',
                35 => 'ps_categoryproducts',
                36 => 'ps_emailalerts',
                37 => 'ps_distributionapiclient',
                38 => 'dashtrends',
                39 => 'ps_crossselling',
                40 => 'statsdata',
                41 => 'statsstock',
                42 => 'statsbestproducts',
                43 => 'ps_themecusto',
                44 => 'statsforecast',
                45 => 'statsbestsuppliers',
                46 => 'ps_wirepayment',
                47 => 'statsbestcategories',
                48 => 'statssearch',
                49 => 'pagesnotfound',
                50 => 'ps_googleanalytics',
                51 => 'dashproducts',
                52 => 'dashgoals',
                53 => 'statsbestmanufacturers',
                54 => 'statscarrier',
                55 => 'statsbestvouchers',
                56 => 'ps_viewedproduct',
                57 => 'dashactivity',
                58 => 'ps_brandlist',
                59 => 'statsbestcustomers',
                60 => 'graphnvd3',
                61 => 'ps_facetedsearch',
                62 => 'autoupgrade',
                63 => 'paypal',
                64 => 'ozow',
                65 => 'dhlexpresscommerce',
                66 => 'ps_faviconnotificationbo',
                67 => 'welcome',
                68 => 'ps_emailsmanager',
                69 => 'gamification',
                70 => 'ps_mbo',
                71 => 'ps_searchbarjqauto',
                72 => 'ps_eft',
                73 => 'payfast',
            ],
            'ps_cache_dir' => '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}

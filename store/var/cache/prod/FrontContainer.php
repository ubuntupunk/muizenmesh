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
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler' => 'getDeleteUserShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler' => 'getLinkShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler' => 'getMigrateAndLinkV4ShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler' => 'getUnlinkShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler' => 'getUpdateUserShopHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler' => 'getUpgradeModuleHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler' => 'getUpgradeModuleMultiHandlerService',
            'PrestaShop\\Module\\PsAccounts\\Account\\LinkShop' => 'getLinkShopService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession' => 'getOwnerSessionService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession' => 'getShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession' => 'getShopSession2Service',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Link' => 'getLinkService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient' => 'getAccountsClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\IndirectChannelClient' => 'getIndirectChannelClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient' => 'getServicesBillingClientService',
            'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus' => 'getCommandBusService',
            'PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory' => 'getCircuitBreakerFactoryService',
            'PrestaShop\\Module\\PsAccounts\\Installer\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware' => 'getOauth2MiddlewareService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client' => 'getOauth2ClientService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession' => 'getPrestaShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider' => 'getRsaKeysProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider' => 'getShopProvider2Service',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository' => 'getShopTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService' => 'getAnalyticsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\SentryService' => 'getSentryServiceService',
            'PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient' => 'getCollectorApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient' => 'getLiveSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient' => 'getSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder' => 'getCarrierBuilderService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator' => 'getCategoryDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator' => 'getCurrencyDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator' => 'getCustomPriceDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator' => 'getCustomerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator' => 'getEmployeeDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator' => 'getImageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator' => 'getImageTypeDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator' => 'getLanguageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator' => 'getManufacturerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator' => 'getPayloadDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator' => 'getProductDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator' => 'getProductSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator' => 'getStockDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator' => 'getStoreDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator' => 'getSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator' => 'getTranslationDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator' => 'getWishlistDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter' => 'getArrayFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter' => 'getJsonFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider' => 'getCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider' => 'getCartDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider' => 'getCartRuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider' => 'getCategoryDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider' => 'getCustomPriceDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider' => 'getCustomProductCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider' => 'getCustomerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider' => 'getEmployeeDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider' => 'getGoogleTaxonomyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider' => 'getImageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider' => 'getImageTypeDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider' => 'getLanguageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider' => 'getManufacturerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider' => 'getModuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider' => 'getOrderDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider' => 'getProductSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider' => 'getStockDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider' => 'getStoreDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider' => 'getSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider' => 'getTranslationDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider' => 'getWishlistDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository' => 'getBundleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository' => 'getCartProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository' => 'getCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository' => 'getConfigurationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository' => 'getCustomPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository' => 'getDeletedObjectsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository' => 'getEmployeeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository' => 'getEventbusSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository' => 'getGoogleTaxonomyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository' => 'getImageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository' => 'getImageTypeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository' => 'getIncrementalSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository' => 'getLiveSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository' => 'getModuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository' => 'getOrderCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository' => 'getOrderDetailsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository' => 'getProductCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository' => 'getProductSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository' => 'getSpecificPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository' => 'getStockMvtRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository' => 'getStockRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository' => 'getStoreRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository' => 'getSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository' => 'getThemeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository' => 'getTranslationRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository' => 'getWishlistProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository' => 'getWishlistRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService' => 'getApiAuthorizationServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CacheService' => 'getCacheServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CompressionService' => 'getCompressionServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService' => 'getDeletedObjectsServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PresenterService' => 'getPresenterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyService' => 'getProxyServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService' => 'getPsAccountsAdapterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService' => 'getSpecificPriceServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService' => 'getSynchronizationServiceService',
            'PrestaShop\\Module\\Psgdpr\\Repository\\ConsentRepository' => 'getConsentRepositoryService',
            'PrestaShop\\Module\\Psgdpr\\Repository\\CustomerRepository' => 'getCustomerRepository2Service',
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
            'PrestaShop\\PrestaShop\\Adapter\\Configuration' => 'getConfiguration2Service',
            'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider' => 'getCurrencyDataProvider2Service',
            'PrestaShop\\PrestaShop\\Adapter\\LegacyContext' => 'getLegacyContextService',
            'PrestaShop\\PrestaShop\\Adapter\\Tools' => 'getToolsService',
            'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository' => 'getRepositoryService',
            'Psgdpr' => 'getPsgdprService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration3Service',
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
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
            'ps_eventbus' => 'getPsEventbusService',
            'ps_eventbus.context' => 'getPsEventbus_ContextService',
            'ps_eventbus.controller' => 'getPsEventbus_ControllerService',
            'ps_eventbus.cookie' => 'getPsEventbus_CookieService',
            'ps_eventbus.currency' => 'getPsEventbus_CurrencyService',
            'ps_eventbus.db' => 'getPsEventbus_DbService',
            'ps_eventbus.helper.module' => 'getPsEventbus_Helper_ModuleService',
            'ps_eventbus.language' => 'getPsEventbus_LanguageService',
            'ps_eventbus.link' => 'getPsEventbus_LinkService',
            'ps_eventbus.shop' => 'getPsEventbus_ShopService',
            'ps_eventbus.smarty' => 'getPsEventbus_SmartyService',
            'qapla.module.qaplapudo.cache.cache_file' => 'getQapla_Module_Qaplapudo_Cache_CacheFileService',
            'qapla.module.qaplapudo.cache.symfony_filesystem_adapter' => 'getQapla_Module_Qaplapudo_Cache_SymfonyFilesystemAdapterService',
            'qapla.module.qaplapudo.provider.cart_pudo_provider' => 'getQapla_Module_Qaplapudo_Provider_CartPudoProviderService',
            'qapla.module.qaplapudo.qaplaapi.http_client' => 'getQapla_Module_Qaplapudo_Qaplaapi_HttpClientService',
            'qapla.module.qaplapudo.qaplaapi.pudo.pudo_provider' => 'getQapla_Module_Qaplapudo_Qaplaapi_Pudo_PudoProviderService',
            'qapla.module.qaplapudo.qaplaapi.pudo.pudo_provider_cached' => 'getQapla_Module_Qaplapudo_Qaplaapi_Pudo_PudoProviderCachedService',
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
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => true,
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
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler
     */
    protected function getDeleteUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\DeleteUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\DeleteUserShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler
     */
    protected function getLinkShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\LinkShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\LinkShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler
     */
    protected function getMigrateAndLinkV4ShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\MigrateAndLinkV4ShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\MigrateAndLinkV4ShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler
     */
    protected function getUnlinkShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UnlinkShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UnlinkShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler
     */
    protected function getUpdateUserShopHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpdateUserShopHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpdateUserShopHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler
     */
    protected function getUpgradeModuleHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] ?? ($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10))), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler
     */
    protected function getUpgradeModuleMultiHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\CommandHandler\\UpgradeModuleMultiHandler'] = new \PrestaShop\Module\PsAccounts\Account\CommandHandler\UpgradeModuleMultiHandler(($this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] ?? $this->getCommandBusService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\LinkShop' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\LinkShop
     */
    protected function getLinkShopService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] = new \PrestaShop\Module\PsAccounts\Account\LinkShop(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession
     */
    protected function getOwnerSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\Firebase\OwnerSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] ?? $this->getShopSession2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession
     */
    protected function getShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\Firebase\ShopSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] ?? $this->getShopSession2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Account\Session\ShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Account\Session\ShopSession
     */
    protected function getShopSession2Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\ShopSession'] = new \PrestaShop\Module\PsAccounts\Account\Session\ShopSession(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] ?? $this->getShopProviderService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] ?? $this->getCommandBusService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration(($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Link' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\AccountsClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient
     */
    protected function getAccountsClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/', NULL, 10);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\IndirectChannelClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\IndirectChannelClient
     */
    protected function getIndirectChannelClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\IndirectChannelClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\IndirectChannelClient('https://indirect-channel-api.prestashop.net');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient
     */
    protected function getServicesBillingClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProvider2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Context\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] = new \PrestaShop\Module\PsAccounts\Context\ShopContext(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Cqrs\CommandBus' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Cqrs\CommandBus
     */
    protected function getCommandBusService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Cqrs\\CommandBus'] = new \PrestaShop\Module\PsAccounts\Cqrs\CommandBus(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory
     */
    protected function getCircuitBreakerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Factory\\CircuitBreakerFactory'] = new \PrestaShop\Module\PsAccounts\Factory\CircuitBreakerFactory(($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] ?? $this->getConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Installer\Installer' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware
     */
    protected function getOauth2MiddlewareService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Middleware\\Oauth2Middleware'] = new \PrestaShop\Module\PsAccounts\Middleware\Oauth2Middleware(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPsAccountsPresenterService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client
     */
    protected function getOauth2ClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client'] = new \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession
     */
    protected function getPrestaShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession'] = \PrestaShop\Module\PsAccounts\Factory\PrestaShopSessionFactory::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\ShopProvider'] = \PrestaShop\Module\PsAccounts\Provider\OAuth2\ShopProvider::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider
     */
    protected function getRsaKeysProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] = new \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\ShopProvider
     */
    protected function getShopProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] ?? $this->getConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository
     */
    protected function getShopTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\ShopSession'] ?? $this->getShopSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getUserTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Account\\Session\\Firebase\\OwnerSession'] ?? $this->getOwnerSessionService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\AnalyticsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\AnalyticsService
     */
    protected function getAnalyticsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] = new \PrestaShop\Module\PsAccounts\Service\AnalyticsService('pEJGnRxw47CU01efFjMyl1S7YcxshLxl', ($this->services['ps_accounts.logger'] ?? $this->getPsAccounts_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsAccountsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPsAccountsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] = new \PrestaShop\Module\PsAccounts\Service\PsAccountsService(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsBillingService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPsBillingServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService'] = new \PrestaShop\Module\PsAccounts\Service\PsBillingService(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] ?? $this->getServicesBillingClientService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\SentryService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\SentryService
     */
    protected function getSentryServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\SentryService'] = new \PrestaShop\Module\PsAccounts\Service\SentryService('https://cd2a5f089edb6d6efe742c0cbe004106@o298402.ingest.us.sentry.io/5354585', 'production', ($this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] ?? $this->getLinkShopService()), ($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\CollectorApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\CollectorApiClient
     */
    protected function getCollectorApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] = new \PrestaShop\Module\PsEventbus\Api\CollectorApiClient('https://eventbus-proxy.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient
     */
    protected function getLiveSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient('https://api.cloudsync.prestashop.com/live-sync/v1', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\SyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\SyncApiClient
     */
    protected function getSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\SyncApiClient('https://eventbus-sync.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Builder\CarrierBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder
     */
    protected function getCarrierBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] ?? $this->getCountryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] ?? $this->getTaxRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator
     */
    protected function getCategoryDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator
     */
    protected function getCurrencyDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator
     */
    protected function getCustomPriceDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] ?? $this->getSpecificPriceServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator
     */
    protected function getCustomerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator
     */
    protected function getEmployeeDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ImageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator
     */
    protected function getImageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator
     */
    protected function getImageTypeDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator
     */
    protected function getLanguageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator
     */
    protected function getManufacturerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator
     */
    protected function getPayloadDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator
     */
    protected function getProductDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator
     */
    protected function getProductSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StockDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StockDecorator
     */
    protected function getStockDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StoreDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator
     */
    protected function getStoreDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator
     */
    protected function getSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator
     */
    protected function getTranslationDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator
     */
    protected function getWishlistDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter
     */
    protected function getArrayFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\JsonFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter
     */
    protected function getJsonFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler(($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()), 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714', 'production');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider
     */
    protected function getCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] ?? $this->getCarrierBuilderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartDataProvider
     */
    protected function getCartDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] ?? $this->getCartProductRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider
     */
    protected function getCartRuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartRuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartRuleDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider
     */
    protected function getCategoryDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider
     */
    protected function getCustomPriceDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] ?? $this->getCustomPriceRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] ?? $this->getCustomPriceDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider
     */
    protected function getCustomProductCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] ?? $this->getProductCarrierRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider
     */
    protected function getCustomerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] ?? $this->getCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider
     */
    protected function getEmployeeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\EmployeeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\EmployeeDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] ?? $this->getEmployeeRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\EmployeeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\EmployeeDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider
     */
    protected function getGoogleTaxonomyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository())), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ImageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ImageDataProvider
     */
    protected function getImageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ImageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ImageDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider
     */
    protected function getImageTypeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ImageTypeDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ImageTypeDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ImageTypeDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ImageTypeDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider
     */
    protected function getLanguageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider
     */
    protected function getManufacturerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] ?? $this->getManufacturerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider
     */
    protected function getModuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider
     */
    protected function getOrderDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] ?? $this->getOrderDetailsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] ?? $this->getProductDecoratorService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] ?? $this->getProductSupplierDataProviderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider
     */
    protected function getProductSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StockDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StockDataProvider
     */
    protected function getStockDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StockDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] ?? $this->getStockRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator())), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StoreDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider
     */
    protected function getStoreDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] ?? $this->getStoreRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider
     */
    protected function getSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] ?? $this->getSupplierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider
     */
    protected function getTranslationDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\TranslationDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\TranslationDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository'] ?? $this->getTranslationRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\TranslationDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\TranslationDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider
     */
    protected function getWishlistDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] ?? $this->getWishlistRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator())), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\BundleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\BundleRepository
     */
    protected function getBundleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CarrierRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartProductRepository
     */
    protected function getCartProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartProductRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository
     */
    protected function getCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CategoryRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CountryRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository
     */
    protected function getCustomPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomerRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository
     */
    protected function getDeletedObjectsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository(($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EmployeeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EmployeeRepository
     */
    protected function getEmployeeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EmployeeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EmployeeRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository
     */
    protected function getEventbusSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository
     */
    protected function getGoogleTaxonomyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageRepository
     */
    protected function getImageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository
     */
    protected function getImageTypeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageTypeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageTypeRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository
     */
    protected function getIncrementalSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository
     */
    protected function getLiveSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ModuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ModuleRepository
     */
    protected function getModuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository
     */
    protected function getOrderCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository
     */
    protected function getOrderDetailsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository
     */
    protected function getProductCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository
     */
    protected function getProductSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] ?? $this->getPsAccountsAdapterServiceService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()), 'https://eventbus-sync.psessentials.net', 'https://api.cloudsync.prestashop.com/live-sync/v1', 'https://eventbus-proxy.psessentials.net');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository
     */
    protected function getSpecificPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockMvtRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository
     */
    protected function getStockMvtRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockRepository
     */
    protected function getStockRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StoreRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StoreRepository
     */
    protected function getStoreRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StoreRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SupplierRepository
     */
    protected function getSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SupplierRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TaxRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ThemeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ThemeRepository
     */
    protected function getThemeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ThemeRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TranslationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TranslationRepository
     */
    protected function getTranslationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TranslationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TranslationRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository
     */
    protected function getWishlistProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistRepository
     */
    protected function getWishlistRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService
     */
    protected function getApiAuthorizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] ?? $this->getSyncApiClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CacheService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CacheService
     */
    protected function getCacheServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CacheService'] = new \PrestaShop\Module\PsEventbus\Service\CacheService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CompressionService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CompressionService
     */
    protected function getCompressionServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CompressionService'] = new \PrestaShop\Module\PsEventbus\Service\CompressionService(($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\DeletedObjectsService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService
     */
    protected function getDeletedObjectsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] ?? $this->getDeletedObjectsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PresenterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PresenterService
     */
    protected function getPresenterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PresenterService'] = new \PrestaShop\Module\PsEventbus\Service\PresenterService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ProxyService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ProxyService
     */
    protected function getProxyServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] = new \PrestaShop\Module\PsEventbus\Service\ProxyService(($this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] ?? $this->getCollectorApiClientService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService
     */
    protected function getPsAccountsAdapterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] = new \PrestaShop\Module\PsEventbus\Service\PsAccountsAdapterService(($this->services['ps_eventbus.helper.module'] ?? ($this->services['ps_eventbus.helper.module'] = new \PrestaShop\Module\PsEventbus\Helper\ModuleHelper())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SpecificPriceService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SpecificPriceService
     */
    protected function getSpecificPriceServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] = new \PrestaShop\Module\PsEventbus\Service\SpecificPriceService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SynchronizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SynchronizationService
     */
    protected function getSynchronizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService'] = new \PrestaShop\Module\PsEventbus\Service\SynchronizationService(($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] ?? $this->getIncrementalSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LiveSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LiveSyncRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] ?? $this->getDeletedObjectsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] ?? $this->getPayloadDecoratorService()));
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
    protected function getCustomerRepository2Service()
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
        return $this->services['PrestaShop\\Module\\Psgdpr\\Service\\LoggerService'] = new \PrestaShop\Module\Psgdpr\Service\LoggerService(($this->services['PrestaShop\\Module\\Psgdpr\\Repository\\LoggerRepository'] ?? $this->getLoggerRepositoryService()), ($this->services['PrestaShop\\Module\\Psgdpr\\Repository\\CustomerRepository'] ?? $this->getCustomerRepository2Service()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
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
    protected function getCurrencyDataProvider2Service()
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
    protected function getConfiguration3Service()
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
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/psgdpr/src/Entity']);
        $e->addExcludePaths([0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/psgdpr/src/Entity/index.php']);
        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/ps_accounts/src/Entity']);
        $f->addExcludePaths([0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/ps_accounts/src/Entity/index.php']);
        $g = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/productcomments/src/Entity']);
        $g->addExcludePaths([0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/productcomments/src/Entity/index.php']);
        $h = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/supdropshipping/src/Entity']);
        $h->addExcludePaths([0 => '/home/sexthera/public_html/muizenmesh.co.za/store/modules/supdropshipping/src/Entity/index.php']);

        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($d, [0 => '/home/sexthera/public_html/muizenmesh.co.za/store/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $c->addDriver($e, 'PrestaShop\\Module\\Psgdpr\\Entity');
        $c->addDriver($f, 'PrestaShop\\Module\\PsAccounts\\Entity');
        $c->addDriver($g, 'PrestaShop\\Module\\ProductComment\\Entity');
        $c->addDriver($h, 'supdropshipping\\Entity');

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
        $a->addEntityNamespace('Modulepsgdpr', 'PrestaShop\\Module\\Psgdpr\\Entity');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');
        $a->addEntityNamespace('Modulesupdropshipping', 'supdropshipping\\Entity');

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
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProvider2Service()));

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
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProvider2Service()));
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
     * Gets the public 'ps_accounts.context' shared service.
     *
     * @return \Context
     */
    protected function getPsAccounts_ContextService()
    {
        return $this->services['ps_accounts.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'ps_accounts.logger' shared service.
     *
     * @return \Monolog\Logger
     */
    protected function getPsAccounts_LoggerService()
    {
        return $this->services['ps_accounts.logger'] = \PrestaShop\Module\PsAccounts\Factory\PsAccountsLogger::create();
    }

    /**
     * Gets the public 'ps_accounts.module' shared service.
     *
     * @return \Ps_accounts
     */
    protected function getPsAccounts_ModuleService()
    {
        return $this->services['ps_accounts.module'] = \Module::getInstanceByName('ps_accounts');
    }

    /**
     * Gets the public 'ps_eventbus' shared service.
     *
     * @return \Ps_eventbus
     */
    protected function getPsEventbusService()
    {
        return $this->services['ps_eventbus'] = \Module::getInstanceByName('ps_eventbus');
    }

    /**
     * Gets the public 'ps_eventbus.context' shared service.
     *
     * @return \Context
     */
    protected function getPsEventbus_ContextService()
    {
        return $this->services['ps_eventbus.context'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_eventbus.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsEventbus_ControllerService()
    {
        return $this->services['ps_eventbus.controller'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_eventbus.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsEventbus_CookieService()
    {
        return $this->services['ps_eventbus.cookie'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_eventbus.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsEventbus_CurrencyService()
    {
        return $this->services['ps_eventbus.currency'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_eventbus.db' shared service.
     *
     * @return \Db
     */
    protected function getPsEventbus_DbService()
    {
        return $this->services['ps_eventbus.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_eventbus.helper.module' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Helper\ModuleHelper
     */
    protected function getPsEventbus_Helper_ModuleService()
    {
        return $this->services['ps_eventbus.helper.module'] = new \PrestaShop\Module\PsEventbus\Helper\ModuleHelper();
    }

    /**
     * Gets the public 'ps_eventbus.language' shared service.
     *
     * @return \Language
     */
    protected function getPsEventbus_LanguageService()
    {
        return $this->services['ps_eventbus.language'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_eventbus.link' shared service.
     *
     * @return \Link
     */
    protected function getPsEventbus_LinkService()
    {
        return $this->services['ps_eventbus.link'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_eventbus.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsEventbus_ShopService()
    {
        return $this->services['ps_eventbus.shop'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_eventbus.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsEventbus_SmartyService()
    {
        return $this->services['ps_eventbus.smarty'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'qapla.module.qaplapudo.cache.cache_file' shared service.
     *
     * @return \Qapla\Module\Qaplapudo\Cache\CacheFile
     */
    protected function getQapla_Module_Qaplapudo_Cache_CacheFileService()
    {
        return $this->services['qapla.module.qaplapudo.cache.cache_file'] = new \Qapla\Module\Qaplapudo\Cache\CacheFile('', 0, '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//qapla');
    }

    /**
     * Gets the public 'qapla.module.qaplapudo.cache.symfony_filesystem_adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getQapla_Module_Qaplapudo_Cache_SymfonyFilesystemAdapterService()
    {
        return $this->services['qapla.module.qaplapudo.cache.symfony_filesystem_adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//qapla');
    }

    /**
     * Gets the public 'qapla.module.qaplapudo.provider.cart_pudo_provider' shared service.
     *
     * @return \Qapla\Module\Qaplapudo\Provider\CartPudoProvider
     */
    protected function getQapla_Module_Qaplapudo_Provider_CartPudoProviderService()
    {
        return $this->services['qapla.module.qaplapudo.provider.cart_pudo_provider'] = new \Qapla\Module\Qaplapudo\Provider\CartPudoProvider();
    }

    /**
     * Gets the public 'qapla.module.qaplapudo.qaplaapi.http_client' shared service.
     *
     * @return \Qapla\Module\Qaplapudo\QaplaApi\HttpClient
     */
    protected function getQapla_Module_Qaplapudo_Qaplaapi_HttpClientService()
    {
        return $this->services['qapla.module.qaplapudo.qaplaapi.http_client'] = new \Qapla\Module\Qaplapudo\QaplaApi\HttpClient(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("QAPLAPUDO_PRIVATEKEY", ""));
    }

    /**
     * Gets the public 'qapla.module.qaplapudo.qaplaapi.pudo.pudo_provider' shared service.
     *
     * @return \Qapla\Module\Qaplapudo\QaplaApi\Pudo\PudoProvider
     */
    protected function getQapla_Module_Qaplapudo_Qaplaapi_Pudo_PudoProviderService()
    {
        return $this->services['qapla.module.qaplapudo.qaplaapi.pudo.pudo_provider'] = new \Qapla\Module\Qaplapudo\QaplaApi\Pudo\PudoProvider(($this->services['qapla.module.qaplapudo.qaplaapi.http_client'] ?? $this->getQapla_Module_Qaplapudo_Qaplaapi_HttpClientService()));
    }

    /**
     * Gets the public 'qapla.module.qaplapudo.qaplaapi.pudo.pudo_provider_cached' shared service.
     *
     * @return \Qapla\Module\Qaplapudo\QaplaApi\Pudo\PudoProviderCached
     */
    protected function getQapla_Module_Qaplapudo_Qaplaapi_Pudo_PudoProviderCachedService()
    {
        return $this->services['qapla.module.qaplapudo.qaplaapi.pudo.pudo_provider_cached'] = new \Qapla\Module\Qaplapudo\QaplaApi\Pudo\PudoProviderCached(($this->services['qapla.module.qaplapudo.qaplaapi.http_client'] ?? $this->getQapla_Module_Qaplapudo_Qaplaapi_HttpClientService()), ($this->services['qapla.module.qaplapudo.cache.cache_file'] ?? ($this->services['qapla.module.qaplapudo.cache.cache_file'] = new \Qapla\Module\Qaplapudo\Cache\CacheFile('', 0, '/home/sexthera/public_html/muizenmesh.co.za/store/var/cache/prod//qapla'))));
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
                74 => 'tooleamazonmarkettool',
                75 => 'qaplapudo',
                76 => 'ps_accounts',
                77 => 'bonaicontent',
                78 => 'cedconnectoraliexpress',
                79 => 'smartargetfacebookmessenger',
                80 => 'smartargetwhatsapp',
                81 => 'smartargetsocialfollowbar',
                82 => 'supdropshipping',
                83 => 'fraudlabspro',
                84 => 'ps_eventbus',
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
            'ps_eventbus.proxy_api_url' => 'https://eventbus-proxy.psessentials.net',
            'ps_eventbus.sync_api_url' => 'https://eventbus-sync.psessentials.net',
            'ps_eventbus.live_sync_api_url' => 'https://api.cloudsync.prestashop.com/live-sync/v1',
            'ps_eventbus.sentry_dsn' => 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714',
            'ps_eventbus.sentry_env' => 'production',
            'ps_accounts.environment' => 'production',
            'ps_accounts.accounts_api_url' => 'https://accounts-api.distribution.prestashop.net/',
            'ps_accounts.accounts_ui_url' => 'https://accounts.distribution.prestashop.net',
            'ps_accounts.sso_api_url' => 'https://auth.prestashop.com/api/v1/',
            'ps_accounts.sso_account_url' => 'https://auth.prestashop.com/login',
            'ps_accounts.sso_resend_verification_email_url' => 'https://auth.prestashop.com/account/send-verification-email',
            'ps_accounts.billing_api_url' => 'https://billing-api.distribution.prestashop.net/',
            'ps_accounts.indirect_channel_api_url' => 'https://indirect-channel-api.prestashop.net',
            'ps_accounts.sentry_credentials' => 'https://cd2a5f089edb6d6efe742c0cbe004106@o298402.ingest.us.sentry.io/5354585',
            'ps_accounts.segment_write_key' => 'pEJGnRxw47CU01efFjMyl1S7YcxshLxl',
            'ps_accounts.check_api_ssl_cert' => true,
            'ps_accounts.verify_account_tokens' => true,
            'ps_accounts.accounts_vue_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@3/dist/psaccountsVue.umd.min.js',
            'ps_accounts.accounts_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@5',
            'ps_accounts.svc_accounts_ui_url' => 'https://accounts.psessentials.net',
            'ps_accounts.oauth2_url' => 'https://oauth.prestashop.com',
            'ps_accounts.testimonials_url' => 'https://assets.prestashop3.com/dst/accounts/assets/testimonials.json',
        ];
    }
}

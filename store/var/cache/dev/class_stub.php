<?php

class AttributeGroup extends AttributeGroupCore {};
abstract class Db extends DbCore {};
class DbPDO extends DbPDOCore {};
class DbQuery extends DbQueryCore {};
class DbMySQLi extends DbMySQLiCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbar extends TreeToolbarCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class Supplier extends SupplierCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CartChecksum extends CartChecksumCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class Address extends AddressCore {};
class Dispatcher extends DispatcherCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class CMSRole extends CMSRoleCore {};
class Category extends CategoryCore {};
class CartRule extends CartRuleCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Cart extends CartCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class GroupLang extends GroupLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class ContactLang extends ContactLangCore {};
class GenderLang extends GenderLangCore {};
class CategoryLang extends CategoryLangCore {};
class AttributeLang extends AttributeLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class RiskLang extends RiskLangCore {};
class ProfileLang extends ProfileLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class CarrierLang extends CarrierLangCore {};
class ThemeLang extends ThemeLangCore {};
class DataLang extends DataLangCore {};
class MetaLang extends MetaLangCore {};
class TabLang extends TabLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class FeatureLang extends FeatureLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class Feature extends FeatureCore {};
class Search extends SearchCore {};
class Tag extends TagCore {};
class CustomerThread extends CustomerThreadCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
class Link extends LinkCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderDetail extends OrderDetailCore {};
class Order extends OrderCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderSlip extends OrderSlipCore {};
class OrderMessage extends OrderMessageCore {};
class OrderReturn extends OrderReturnCore {};
class OrderState extends OrderStateCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderCartRule extends OrderCartRuleCore {};
class FeatureFlag extends FeatureFlagCore {};
class ImageManager extends ImageManagerCore {};
class StockMvt extends StockMvtCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class Warehouse extends WarehouseCore {};
class Stock extends StockCore {};
class StockMvtReason extends StockMvtReasonCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrder extends SupplyOrderCore {};
class StockAvailable extends StockAvailableCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class Translate extends TranslateCore {};
class Manufacturer extends ManufacturerCore {};
class CustomizationField extends CustomizationFieldCore {};
class Access extends AccessCore {};
class Alias extends AliasCore {};
class AddressFormat extends AddressFormatCore {};
class Meta extends MetaCore {};
class ProductAssembler extends ProductAssemblerCore {};
abstract class ObjectModel extends ObjectModelCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxCalculator extends TaxCalculatorCore {};
class Tax extends TaxCore {};
class TaxRule extends TaxRuleCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class Risk extends RiskCore {};
class Attachment extends AttachmentCore {};
class CMSCategory extends CMSCategoryCore {};
class Uploader extends UploaderCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Hook extends HookCore {};
class Message extends MessageCore {};
class PhpEncryption extends PhpEncryptionCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerForm extends CustomerFormCore {};
class FormField extends FormFieldCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class FeatureValue extends FeatureValueCore {};
class Customer extends CustomerCore {};
class Guest extends GuestCore {};
class Country extends CountryCore {};
class Media extends MediaCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class LocalizationPack extends LocalizationPackCore {};
class Gender extends GenderCore {};
class CssMinifier extends CssMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class JavascriptManager extends JavascriptManagerCore {};
class CccReducer extends CccReducerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CustomerMessage extends CustomerMessageCore {};
class SmartyCustom extends SmartyCustomCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class GroupReduction extends GroupReductionCore {};
class Customization extends CustomizationCore {};
class ProductAttribute extends ProductAttributeCore {};
class EmployeeSession extends EmployeeSessionCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class Employee extends EmployeeCore {};
class ImageType extends ImageTypeCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class AddressChecksum extends AddressChecksumCore {};
class Product extends ProductCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Currency extends CurrencyCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class Language extends LanguageCore {};
class CSV extends CSVCore {};
class Cookie extends CookieCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class CustomerSession extends CustomerSessionCore {};
class Page extends PageCore {};
class ProductSale extends ProductSaleCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class State extends StateCore {};
class Carrier extends CarrierCore {};
class Pack extends PackCore {};
class ProductDownload extends ProductDownloadCore {};
class Image extends ImageCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class FileUploader extends FileUploaderCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Store extends StoreCore {};
class Mail extends MailCore {};
class Connection extends ConnectionCore {};
class Tools extends ToolsCore {};
class Group extends GroupCore {};
class Chart extends ChartCore {};
class SupplierAddress extends SupplierAddressCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Notification extends NotificationCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class Zone extends ZoneCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class PDFGenerator extends PDFGeneratorCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class Upgrader extends UpgraderCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class Controller extends ControllerCore {};
class CMS extends CMSCore {};
class Curve extends CurveCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheApc extends CacheApcCore {};
class CacheMemcached extends CacheMemcachedCore {};
abstract class Cache extends CacheCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperShop extends HelperShopCore {};
class HelperView extends HelperViewCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperForm extends HelperFormCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperKpi extends HelperKpiCore {};
class Helper extends HelperCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperList extends HelperListCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class Validate extends ValidateCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Context extends ContextCore {};
class RequestSql extends RequestSqlCore {};
class CustomerAddress extends CustomerAddressCore {};
class SearchEngine extends SearchEngineCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class ProductSupplier extends ProductSupplierCore {};
class SpecificPrice extends SpecificPriceCore {};
class Configuration extends ConfigurationCore {};
class LinkProxy extends LinkProxyCore {};
class Delivery extends DeliveryCore {};
class Combination extends CombinationCore {};
class Contact extends ContactCore {};
class QuickAccess extends QuickAccessCore {};
class Profile extends ProfileCore {};
class DateRange extends DateRangeCore {};
class Tab extends TabCore {};

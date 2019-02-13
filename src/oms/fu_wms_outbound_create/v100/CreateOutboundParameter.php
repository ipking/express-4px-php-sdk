<?php
/**
 * 创建出库委托的参数
 */

namespace express_4px\oms\fu_wms_outbound_create\v100;

use express_4px\oms\data_type\outbound\ConsignmentTypeEnum;
use express_4px\oms\data_type\outbound\IcustomsServiceEnum;
use express_4px\oms\data_type\outbound\InsureServicesEnum;
use express_4px\oms\data_type\outbound\OcustomsServiceEnum;
use express_4px\oms\data_type\outbound\OdaEnum;
use express_4px\oms\data_type\outbound\SalesPlatformEnum;
use express_4px\oms\fu_wms_outbound_create\v100\data_type\ConsignmentDesc;
use express_4px\oms\fu_wms_outbound_create\v100\data_type\ConsignmentSku;
use express_4px\oms\fu_wms_outbound_create\v100\data_type\IdentityInfo;
use express_4px\oms\fu_wms_outbound_create\v100\data_type\LogisticsServiceInfo;
use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户操作账号
 * @property String ref_no  客户参考号
 * @property String from_warehouse_code 出库仓库代码（详细参考公共服务，获取仓库代码）
 * @property String consignment_type    委托类型
 * @property Object logistics_service_info  物流服务信息
 * @property String shipping_no 物流单号。特殊物流产品或特殊客户支持传入;系统不接收非指定客户或物流产品传入。
 * @property String shippinglabel   服务商标签。特殊物流产品或特殊客户支持传入;系统不接收非指定客户或物流产品传入。*注：只支持PDF格式文件，文件需要转换成Base64编码格式，只支持Base64字符串格式。单个标签文件最大支持1MB。
 * @property String invoice 发票标签。特殊物流产品或特殊客户支持传入;系统不接收非指定客户或物流产品传入。*注：只支持PDF格式文件，文件需要转换成Base64编码格式，只支持Base64字符串格式。单个标签文件最大支持1MB。
 * @property String msds    MSDS标签。特殊物流产品或特殊客户支持传入;系统不接收非指定客户或物流产品传入。*注：只支持PDF格式文件，文件需要转换成Base64编码格式，只支持Base64字符串格式。单个标签文件最大支持1MB。
 * @property String oda ODA委托单走货标识。可选值：Y(只接收非ODA单)；N(默认都接单)；默认为N。
 * @property String sales_platform  销售平台。 可选值： AE(速卖通); WS(Wish); EB(eBay); AM(亚马逊); TM(天猫国际); JD(京东)
 * @property String seller_id   卖家ID
 * @property String sales_no    销售/平台交易号
 * @property String insure_services 保险服务； 可选值： 8Y(平邮保价); 5Y(挂号-快递保价); 6P(0.6%保险)。*注：如果选择保险服务后，insure_value（投保金额）必填。如果选择8Y(平邮保价)或5Y(挂号-快递保价)，投保金额必须在1.00到100.00之间。如果选择6P(0.6%保险），投保金额必须在200.00到9999999.00之间。
 * @property String currency    投保金额币别，采用国际ISO标准。可选值：USD(美元)
 * @property Double insure_value    投保金额，精确到2位小数。*注：如果选择保险服务后，insure_value（投保金额）必填。如果选择8Y(平邮保价)或5Y(挂号-快递保价)，投保金额必须在1.00到100.00之间。如果选择6P(0.6%保险），投保金额必须在200.00到9999999.00之间。
 * @property String remark  备注。客户填写的出库委托备注信息
 * @property Object oconsignment_desc   出库委托收件人信息。*注：如果国家是CN（中国），state（省）、city（市）、district（区）必须填写。其他国家state（州）或city（城市）必须填写一个。
 * @property Object identity_info   收件人证件信息
 * @property ConsignmentSku[] oconsignment_sku  出库委托SKU集合。注：单次最大支持100种SKU种类创建，如超出请分批创建。
 * @property String icustoms_service    进口报关类型;
 * @property String ocustoms_service    出口报关类型;      
 */
class CreateOutboundParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'customer_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'from_warehouse_code'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'consignment_type'       => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,ConsignmentTypeEnum::class],
			'logistics_service_info' => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED,LogisticsServiceInfo::class],
			'shipping_no'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shippinglabel'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'invoice'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'msds'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'oda'                    => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,OdaEnum::class],
			'sales_platform'         => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,SalesPlatformEnum::class],
			'seller_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sales_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_services'        => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,InsureServicesEnum::class],
			'currency'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_value'           => [self::PARAM_TYPE_NUM, self::PARAM_OPTIONAL],
			'remark'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'oconsignment_desc'      => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED,ConsignmentDesc::class],
			'identity_info'          => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,IdentityInfo::class],
			'oconsignment_sku'       => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED,ConsignmentSku::class],
			'icustoms_service'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL,IcustomsServiceEnum::class],
			'ocustoms_service'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL,OcustomsServiceEnum::class],
		));
	}
}
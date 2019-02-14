<?php
/**
 * 创建入库委托的参数
 */

namespace express_4px\oms\fu_wms_inbound_create\v100;

use express_4px\oms\data_type\inbound\IcustomsServiceEnum;
use express_4px\oms\data_type\inbound\IsPickupEnum;
use express_4px\oms\data_type\inbound\OcustomsServiceEnum;
use express_4px\oms\data_type\inbound\TransportTypeEnum;
use express_4px\oms\fu_wms_inbound_create\v100\data_type\ConsignmentSku;
use express_4px\oms\fu_wms_inbound_create\v100\data_type\LogisticsServiceInfo;
use express_4px\oms\fu_wms_inbound_create\v100\data_type\SupplierAddress;
use express_4px\oms\OmsParameter;

/**
 * @property String customer_code   客户操作账号。如果客户存在多个操作帐号，客户必须指定一个操作帐号传入。
 * @property String ref_no  客户参考号
 * @property String is_pickup   是否上门提货；可选值：Y (上门提货) ；N （送货到仓）。 
 * @property String from_warehouse_code 到货仓库代码（详细参考公共服务，获取仓库代码）
 * @property String to_warehouse_code   入库上架仓库代码（详细参考公共服务，获取仓库代码）
 * @property String transport_type  到仓运输类型。
 * @property String tracking_no 到仓运输快递单号（如果委托类型是4PX承运，运输类型选择的是快递，则需要填写快递单号）
 * @property String license_plate   陆运卡车车牌号（如果委托类型是4PX承运，运输类型选择的是陆运，则需要填写陆运卡车车牌号）
 * @property Object supplier_address    工厂仓库出货地址/供应商仓库发货地址。上门提货地址或送货到仓地址，请根据参数（is_pickup）选择是否上门提货类型选择进行填写。
 * @property Double total_volume    总体积(单位：m³ 立方米 )，精确到3位小数，如：150.336
 * @property Double total_weight    总重量(单位：kg 千克 )，精确到3位小数，如：250.335
 * @property Object logistics_service_info  物流服务信息
 * @property String ocustoms_service    出口报关类型; 可选值：D1(一般贸易出口退税)； D2(一般贸易出口不退税)； D5(非一般贸易)； D6(手册报关)
 * @property String icustoms_service    进口报关类型; 可选值：D3(客户自有税号清关)； D4(非客户自有税号清关)
 * @property String currency    投保金额币别，采用国际ISO标准。可选值：USD(美元)。如：USD。
 * @property Double insure_value    投保金额，精确到2位小数。如：52344.13。*注：如果选择保险服务后，insure_value（投保金额）必填。如果选择8Y(平邮保价)或5Y(挂号-快递保价)，投保金额必须在1.00到100.00之间。如果选择6P(0.6%保险），投保金额必须在200.00到9999999.00之间。
 * @property String remark  备注。客户填写的入库委托备注信息。
 * @property array iconsignment_sku SKU集合信息
 */
class CreateInboundParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'customer_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'is_pickup'              => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,IsPickupEnum::class],
			'from_warehouse_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'to_warehouse_code'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'transport_type'         => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,TransportTypeEnum::class],
			'tracking_no'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'license_plate'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'supplier_address'       => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED,SupplierAddress::class],
			'total_volume'           => [self::PARAM_TYPE_NUMBER, self::PARAM_REQUIRED],
			'total_weight'           => [self::PARAM_TYPE_NUMBER, self::PARAM_REQUIRED],
			'logistics_service_info' => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED,LogisticsServiceInfo::class],
			'ocustoms_service'       => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,OcustomsServiceEnum::class],
			'icustoms_service'       => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,IcustomsServiceEnum::class],
			'currency'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_value'           => [self::PARAM_TYPE_NUMBER, self::PARAM_OPTIONAL],
			'remark'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'iconsignment_sku'       => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED,ConsignmentSku::class],
		));
	}
}
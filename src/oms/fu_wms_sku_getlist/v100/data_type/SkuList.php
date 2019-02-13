<?php

namespace express_4px\oms\fu_wms_sku_getlist\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property string sku_id	SKU ID ,数字条码，系统自动生成。如：9020003123
 * @property string sku_code	SKU编码
 * @property string product_code	商品条码（UPC、EAN、JAN…）
 * @property string declare_product_code	申报产品代码
 * @property string sku_name	SKU名称
 * @property string specification	商品的规格型号说明；例如：红色、50cm*65cm*50cm
 * @property string uom	计量单位 (请参考基础数据-计量单位)
 * @property string wrapping	商品包装，商品包装的属性。 如 : H (硬包装)；S (软包装）
 * @property string appearance	商品外观,如果包装形态是硬包装，需要选择包装的外观。 如 : SS (正方体)；RS (长方体)；CS (圆锥体)；TS (三角形)；LS (L形)；OS (其它)；DS (圆柱体)；
 * @property string characteristic	商品特性。  
 * @property string weight	单个产品(加包装)的重量(单位: g 克)，如15。
 * @property string length	长或直径 (单位: cm 厘米) 根据外观来决定代表 长 还是 直径，精确到3位小数，如15.335。
 * @property string width	宽 (单位: cm 厘米)，精确到3位小数，如15.335。
 * @property string height	高 (单位: cm 厘米)，精确到3位小数，如15.335。
 * @property string logistics_package	自带物流包装。 如 : Y（是）;N （否）
 * @property string package_material	包装材质。 如 :WO (木质);PA (纸质);PL (塑料);ME (金属);OT (其他)
 * @property string sn_rule_code	SN码规则编码。 如 : 01 (15位数字);02 (18位数字);03 (12位字符)
 * @property string expired_date	是否有效期管理。 如 : Y（是）;N （否）。注：选择Y后，必须在入库预报进行商品有效期的设置
 * @property string sales_link	销售链接，商品对外销售的链接
 * @property string include_batch	是否批次管理。如 : Y（是）;N （否）。必须在入库预报进行批次的设置
 * @property string include_battery	是否带电。如 : Y（是）;N （否）。 注：如果选择带电，电池类型、电池配置、电池功率、电池功率、电池数量、电池资料为TRUE项
 * @property string battery_config	电池配置。 如 : EB (配套);PB (纯电);IB (内置);NB (其他)
 * @property string battery_type	电池类型。 如: LI (锂电池);NI (镍氢电池);DR (干电池);BU (纽扣电池);OT (其他）
 * @property string battery_power	电池功率，商品带有电池的功率
 * @property string battery_number	电池数量，商品带有电池的数量，数字类型，如15。
 * @property string battery_resource	电池资料，商品电池的资料URL信息
 * @property string picture_url	4PX图片地址.(绝对地址,格式:http://host/image_path); url所对应的图片必须要属于当前用户。
 * @property string remark	商品备注
 * @property string customer_code	客户操作账号
 */
class SkuList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_id'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'product_code'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'declare_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_name'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'specification'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'uom'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'wrapping'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'appearance'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'characteristic'       => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'weight'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'length'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'width'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'height'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_package'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'package_material'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sn_rule_code'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expired_date'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sales_link'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'include_batch'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'include_battery'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'battery_config'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'battery_type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'battery_power'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'battery_number'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'battery_resource'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'picture_url'          => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'remark'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'customer_code'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}


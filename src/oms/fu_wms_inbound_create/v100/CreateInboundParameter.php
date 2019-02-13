<?php
/**
 * 创建入库委托的参数
 */

namespace express_4px\oms\fu_wms_inbound_create\v100;

use express_4px\oms\data_type\sku\AppearanceEnum;
use express_4px\oms\data_type\sku\BatteryConfigEnum;
use express_4px\oms\data_type\sku\BatteryTypeEnum;
use express_4px\oms\data_type\sku\ExpiredDateEnum;
use express_4px\oms\data_type\sku\IncludeBatchEnum;
use express_4px\oms\data_type\sku\IncludeBatteryEnum;
use express_4px\oms\data_type\sku\LogisticsPackageEnum;
use express_4px\oms\data_type\sku\PackageMaterialEnum;
use express_4px\oms\data_type\sku\ReleaseFlagEnum;
use express_4px\oms\data_type\sku\SnRuleCodeEnum;
use express_4px\oms\data_type\sku\WrappingEnum;
use express_4px\oms\OmsParameter;

/**
 * @property string sku_code SKU编码(只允许字母、数字，-，_，#，*，/，&，+，?，.，(，)，@) 注：同一客户SKU编码信息不能重复，SKU编码长度必须大于3个字符，字母只支持大写保存。
 * @property string product_code 商品条码（UPC、EAN、JAN…）
 * @property string declare_product_code 申报产品代码（创建SKU货品时，可以填写已经创建的申报产品代码，系统会把当前SKU自动关联申报产品。创建申报产品）
 * @property string sku_name SKU名称(只允许字母、数字；字母支持大小写)，SKU名称长度必须大于3个字符。
 * @property string specification 商品的规格型号说明；例如：红色、50cm*65cm*50cm
 * @property string uom 计量单位 (请参考公共服务基础数据-计量单位)
 * @property string wrapping 商品包装，商品包装的属性； 可选值 : H (硬包装)；S (软包装）。*注：如果包装形态是硬包装，则appearance （商品外观）必填。
 * @property string appearance 商品外观。 可选值 : SS (正方体)；RS (长方体)；CS (圆锥体)；TS (三角形)；LS (L形)；OS (其它)；DS (圆柱体)。*注：如果包装形态是硬包装，则appearance （商品外观）必填。
 * @property string characteristic 商品特性
 * @property Number weight 单个产品(加包装)的重量(单位: g 克)。
 * @property Double length 长或直径 (单位: cm 厘米) 根据外观来决定代表 长 还是 直径，精确到3位小数。
 * @property Double width 宽 (单位: cm 厘米)，精确到3位小数。
 * @property Double height 高 (单位: cm 厘米)，精确到3位小数。
 * @property string logistics_package 自带物流包装。 可选值 : Y（是）；N （否）
 * @property string package_material 包装材质。 可选值 :WO (木质)；PA (纸质)；PL (塑料)；ME (金属)；OT (其他)
 * @property string sn_rule_code SN码规则编码。 可选值 : 01 (15位数字)；02 (18位数字)；03 (12位字符)。如果SKU无SN码管理则为空。
 * @property string expired_date 是否有效期管理。 可选值 : Y（是）；N （否）。*注：选择Y后，必须在入库预报进行商品有效期的设置
 * @property string sales_link 销售链接，商品对外销售的链接
 * @property string include_batch 是否批次管理。可选值 : Y（是）;N （否）。*注：选择Y后，必须在入库预报进行批次的设置
 * @property string include_battery 是否带电。可选值 :  Y（是）;N （否）。  * 注：如果选择Y（是）带电，电池类型、电池配置、电池功率、电池功率、电池数量、电池资料为必填项
 * @property string battery_config 电池配置。 可选值 : EB (配套)；PB (纯电)；IB (内置)；NB (其他)
 * @property string battery_type 电池类型。 可选值 : LI (锂电池)；NI (镍氢电池)；DR (干电池)；BU (纽扣电池)；OT (其他）
 * @property string battery_power 电池功率，商品带有电池的功率
 * @property Number battery_number 电池数量，商品带有电池的数量，如2。
 * @property string battery_resource 电池资料，商品电池的资料URL信息。上传文件资料限定格式，可选值：rar和zip。
 * @property string picture_url 图片地址.(绝对地址,格式:http://host/image_path); url所对应的图片必须要属于当前用户。注：图片路径必须有效，如图片路径有问题导致下载失败会影响入库下单审核失败。
 * @property string remark 商品备注
 * @property string release_flag 自动审核标识(默认：Y自动审核)。可选值 : Y (自动审核)；N(不审核)；
 * @property string customer_code 客户操作账号。如果客户存在操作账号管理，则SKU创建成功后，返回SKU_ID为空，如果客户不存在操作账号管理，则返回SKU_ID信息。
 */
class CreateInboundParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'             => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'product_code'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'declare_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_name'             => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'specification'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'uom'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'wrapping'             => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,WrappingEnum::class],
			'appearance'           => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,AppearanceEnum::class],
			'characteristic'       => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'weight'               => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'length'               => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'width'                => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'height'               => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'logistics_package'    => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,LogisticsPackageEnum::class],
			'package_material'     => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED,PackageMaterialEnum::class],
			'sn_rule_code'         => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,SnRuleCodeEnum::class],
			'expired_date'         => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,ExpiredDateEnum::class],
			'sales_link'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'include_batch'        => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,IncludeBatchEnum::class],
			'include_battery'      => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,IncludeBatteryEnum::class],
			'battery_config'       => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,BatteryConfigEnum::class],
			'battery_type'         => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,BatteryTypeEnum::class],
			'battery_power'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'battery_number'       => [self::PARAM_TYPE_NUM, self::PARAM_OPTIONAL],
			'battery_resource'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'picture_url'          => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED, self::PARAM_TYPE_STRING],
			'remark'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'release_flag'         => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,ReleaseFlagEnum::class],
			'customer_code'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
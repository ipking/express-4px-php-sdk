<?php
/**
 * SKU信息
 */

namespace express_4px\oms\fu_wms_sku_create\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property string $sku SKU
 * @property string $name 名称
 * @property string $ename 英文名称
 * @property string $description 描述
 * @property string $length 长
 * @property string $width 宽
 * @property string $height 高
 * @property string $weight_net 净重
 * @property string $weight_rough 毛重
 * @property string $clearance_name 报关名称
 * @property string $clearance_code 报关code
 * @property string $clearance_price 报关价格
 * @property string $clearance_rate 报关税率
 * @property string $barcode_type 条码类型(海外仓条码,FBA条码,FBC条码)
 * @property string $status 产品状态(待发布,已发布,已下架)
 * @property string $package_type 产品包装类型(自带包装,不带包装)
 * @property string $battery_type 电池类型(不带电池,内置电池,外置电池,纯电池)
 * @property string $catetegory_code 类别code
 */
class Sku extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku'             => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'name'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'ename'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'description'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'length'          => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'width'           => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'height'          => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'weight_net'      => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'weight_rough'    => [self::PARAM_TYPE_NUM, self::PARAM_REQUIRED],
			'clearance_name'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'clearance_code'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'clearance_price' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'clearance_rate'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'barcode_type'    => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, BarcodeTypeEnum::class],
			'status'          => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'package_type'    => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, PackageTypeEnum::class],
			'battery_type'    => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, BatteryTypeEnum::class],
			'catetegory_code'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
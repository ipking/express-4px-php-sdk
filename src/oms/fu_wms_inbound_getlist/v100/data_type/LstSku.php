<?php

namespace express_4px\oms\fu_wms_inbound_getlist\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property string box_no  箱序号。如：1001
 * @property string box_barcode 箱条码号。4PX系统生成唯一条码。对应箱条码需要打印在箱上。
 * @property string sku_id  SKU数字条码。4PX系统针对SKU生成的唯一条码。
 * @property string sku_code    SKU编码。当前箱对应的SKU信息。如：TEST001
 * @property string plan_qty    SKU预报数量，当前箱内SKU的预报数量。
 * @property string received_qty    实际收货数量，当前箱内SKU的实际收货数量。
 * @property string exception_qty   异常收货数量，当前箱内SKU的异常收货数量。
 * @property string expired_date    SKU失效日期;当前入库委托SKU的有效期。*注：返回时间值格式为long类型，接收到值后需要对long类型值进行转换。
 * @property string batch_no    SKU批次号。当前入库委托SKU的批次号。
 * @property string weight  收货SKU重量（单位：g）。单个SKU重量；如：1234
 * @property string volume  收货体积(单位：cm³)。单个SKU体积，精确到3位小数；如：124.45
 * @property string length  收货长（单位：cm）。单个SKU长，精确到3位小数；如：1234.45
 * @property string width   收货宽（单位：cm）。单个SKU宽，精确到3位小数；如：1234.45
 * @property string height  收货高（单位：cm）。单个SKU高，精确到3位小数；如：1234.45
 * @property string product_code    商品条码（UPC、EAN、JAN…） 
 * @property string logistics_package   是否自带物流包装
 */
class LstSku extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'box_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'box_barcode'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'plan_qty'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'received_qty'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'exception_qty'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expired_date'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'batch_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'weight'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'volume'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'length'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'width'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'height'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'product_code'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_package'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}


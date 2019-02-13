<?php
/**
 * 获取SKU列表的参数
 */

namespace express_4px\oms\fu_wms_sku_getlist\v100;

use express_4px\oms\fu_wms_sku_create\v100\data_type\AppearanceEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\BatteryConfigEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\BatteryTypeEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\ExpiredDateEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\IncludeBatchEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\IncludeBatteryEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\LogisticsPackageEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\PackageMaterialEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\ReleaseFlagEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\SnRuleCodeEnum;
use express_4px\oms\fu_wms_sku_create\v100\data_type\WrappingEnum;
use express_4px\oms\OmsParameter;

/**
 * @property string lstsku SKU编号。*注：最大支持100个SKU查询
 * @property string customer_code  客户操作帐号。如果客户存在操作账号，则可以指定客户操作账号进行查询，如果不传入，则查询返回所有操作账号下SKU信息。
 */
class GetSkuListParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'lstsku'        => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED, self::PARAM_TYPE_STRING],
			'customer_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
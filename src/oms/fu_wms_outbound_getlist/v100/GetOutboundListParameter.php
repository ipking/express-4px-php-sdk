<?php
/**
 * 批量查询出库委托的参数
 */

namespace express_4px\oms\fu_wms_outbound_getlist\v100;


use express_4px\oms\OmsParameter;

/**
 * @property string ref_no  客户参考号。如：REF234234223
 * @property string consignment_no  出库委托单号。如：OC9002781804180098
 * @property string 4px_tracking_no 4PX跟踪号。4PX唯一跟踪号。可用于在4PX轨迹系统查询。
 * @property string status  出库委托状态。可选值：N（草稿）；S（出库中）；P（已下架）；C（已出库）；X（已取消）；D（已删除）；E（异常）
 * @property string sku_code    SKU编码。如：TEST0090
 * @property string from_warehouse_code 发货仓库代码。详细参考公共服务，获取仓库代码
 * @property string logistics_product_code  物流产品代码。详细参考基础数据-获取物流产品代码
 * @property string seller_id   卖家ID
 * @property string sales_platform  销售平台可选值：AE(速卖通);WS(Wish);EB(eBay);AM(亚马逊);TM(天猫国际);JD(京东)
 * @property string sales_no    销售/平台交易号
 * @property string shipping_no 物流单号
 * @property string country 国家二字码，详细参考国际二字码。如：CN（中国）
 * @property string create_time_start   创建时间-开始 ,时间默认为当天。 *注：最大支持一个月（30天）数据进行查询。时间格式：传入时间值需要转换为long类型格式。
 * @property string create_time_end 创建时间-结束 ,时间默认为当天。 *注：最大支持一个月（30天）数据进行查询。时间格式：传入时间值需要转换为long类型格式。
 * @property string complete_time_start 发货时间-开始 ,时间默认为当天。  *注：最大支持一个月（30天）数据进行查询。时间格式：传入时间值需要转换为long类型格式。
 * @property string complete_time_end   发货时间-结束  ,时间默认为当天。*注：最大支持一个月（30天）数据进行查询。时间格式：传入时间值需要转换为long类型格式。
 * @property Number page_no 页码。默认为第1页。如：1。
 * @property Number page_size   每页记录数。默认记录数为：50。如：50。*注：单次查询最大支持500条，可小于500进行查询。
 * @property string customer_code   客户操作帐号。如果客户存在操作账号，则可以指定客户操作账号进行查询，如果不传入，则查询返回所有操作账号下出库委托信息。
 */
class GetOutboundListParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'ref_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'consignment_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'4px_tracking_no'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sku_code'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'from_warehouse_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sales_platform'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sales_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_no'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'country'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time_start'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time_end'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'complete_time_start'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'complete_time_end'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'page_no'                => [self::PARAM_TYPE_NUMBER, self::PARAM_OPTIONAL],
			'page_size'              => [self::PARAM_TYPE_NUMBER, self::PARAM_OPTIONAL],
			'customer_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
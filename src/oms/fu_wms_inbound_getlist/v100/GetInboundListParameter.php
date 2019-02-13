<?php
/**
 * 批量查询入库委托的参数
 */

namespace express_4px\oms\fu_wms_inbound_getlist\v100;

use express_4px\oms\data_type\inbound\StatusEnum;
use express_4px\oms\OmsParameter;

/**
 * @property string consignment_no  入库委托单号 。如：IC9002781804101123
 * @property string ref_no  入库委托参考号
 * @property string warehouse_code  仓库代码（详细参考公共服务，获取仓库代码）
 * @property string create_time_start   入库委托创建开始时间（*注：时间格式：传入时间值需要转换为long类型格式。）。最大支持3个月数据查询。
 * @property string create_time_end 入库委托创建结束时间（*注：时间格式：传入时间值需要转换为long类型格式。）。最大支持3个月数据查询。
 * @property string logistics_product_code  物流产品代码。详细参考基础数据-获取物流产品代码。
 * @property string status  入库委托状态。可选值：N（草稿）;S（待审批）;A（已审批）;B（预约中）;F（预约确认）;R（预约拒绝）;G（收货中）;V（已收货）;K（已查验）;H（已出库）;P（上架中）;C（已上架）;E（异常）;X（已取消）;D（已删除）
 * @property string page_no 页码。默认为第1页。如：1。
 * @property string page_size   每页记录数。默认记录数为：20。如：10。*注：单次查询最大支持100条，可小于100进行查询。
 * @property string customer_code   客户操作帐号。如果客户存在操作账号，则可以指定客户操作账号进行查询，如果不传入，则查询返回所有操作账号下入库委托信息。
 * @property string 4px_tracking_no 4PX跟踪号；入库委托创建成功后返回。4PX唯一单号；可跟进跟踪号在4PX轨迹系统查询轨迹信息。如：9082324423
 */
class GetInboundListParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warehouse_code'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time_start'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'create_time_end'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'logistics_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                 => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,StatusEnum::class],
			'page_no'                => [self::PARAM_TYPE_NUM, self::PARAM_OPTIONAL],
			'page_size'              => [self::PARAM_TYPE_NUM, self::PARAM_OPTIONAL],
			'customer_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'4px_tracking_no'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
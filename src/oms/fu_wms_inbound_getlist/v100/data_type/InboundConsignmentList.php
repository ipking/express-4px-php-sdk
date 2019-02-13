<?php

namespace express_4px\oms\fu_wms_inbound_getlist\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property string consignment_no  入库委托号，系统生成。如：IC900278180410099
 * @property string customer_code   客户操作账号
 * @property string ref_no  入库委托参考号
 * @property string to_warehouse_code   入库上架仓库代码（详细参考公共服务，获取仓库代码）
 * @property string status  入库委托状态。如：N（草稿）;S（待审批）;A（已审批）;B（预约中）;F（预约确认）;R（预约拒绝）;G（收货中）;V（已收货）;K（已查验）;H（已出库）;P（上架中）;C（已上架）;E（异常）;X（已取消）;D（已删除）
 * @property string total_volume    总体积（单位：立方米），精确到3位小数，如：150.336
 * @property string total_weight    总重量(单位：kg 千克 )，精确到3位小数，如：250.33
 * @property string transport_type  运输方式类型
 * @property string 4px_tracking_no 4PX跟踪号；入库委托创建成功后返回。4PX唯一单号；可跟进跟踪号在4PX轨迹系统查询轨迹信息。如：9082324423
 * @property string logistics_product_code  物流产品代码。详细参考基础数据-获取物流产品代码
 * @property string customs_service 单独报关。如：N(否);YRR (单独报关且退税); YNR(单独报关不退税); 默认为N。
 * @property string signature_service   签名服务。如：Y(选择签名服务)；N(不选择签名服务)；默认为N。
 * @property string shipping_no 柜箱号/物流单号。4PX运输物流单号。
 * @property string insure_services 保险服务
 * @property string currency    投保金额币别，采用国际ISO标准。如：USD(美元)。
 * @property string insure_value    投保金额，精确到2位小数。如：52344.12
 * @property string remark  备注。客户填写的入库委托备注信息。
 * @property string ocustoms_type   出口报关类型。如：D1(一般贸易出口退税)；D2(一般贸易出口不退税)；D5(非一般贸易)；D6(手册报关)
 * @property string icustoms_type   进口报关类型。如：D3(客户自有税号清关)；D4(非客户自有税号清关)
 * @property LstSku[] lstsku  入库委托SKU集合信息
 */
class InboundConsignmentList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'customer_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'to_warehouse_code'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total_volume'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total_weight'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'transport_type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'4px_tracking_no'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'customs_service'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'signature_service'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_no'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_services'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_value'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'remark'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ocustoms_type'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'icustoms_type'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'lstsku'                 => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,LstSku::class],
		));
	}
}


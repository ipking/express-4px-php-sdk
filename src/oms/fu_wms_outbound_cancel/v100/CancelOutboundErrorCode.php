<?php

namespace express_4px\oms\fu_wms_outbound_cancel\v100;

class CancelOutboundErrorCode{
	const ERR_OUTBOUND_CONSIGNMENT_CANCEL_TYPE_EMPTY= 'ERR_OUTBOUND_CONSIGNMENT_CANCEL_TYPE_EMPTY';
	const ERR_REMARK_LENGTH_BEYOND= 'ERR_REMARK_LENGTH_BEYOND';
	const ERR_OUTBOUND_CONSIGNMENT_CSMNO_OR_REFNO_EMPTY= 'ERR_OUTBOUND_CONSIGNMENT_CSMNO_OR_REFNO_EMPTY';
	const ERR_CONSIGNMENT_NO_LENGTH_BEYOND= 'ERR_CONSIGNMENT_NO_LENGTH_BEYOND';
	const ERR_REF_NO_LENGTH_BEYOND= 'ERR_REF_NO_LENGTH_BEYOND';
	const ERR_OUTBOUND_CONSIGNMENT_CANCEL_TYPE_NOT_EXIST= 'ERR_OUTBOUND_CONSIGNMENT_CANCEL_TYPE_NOT_EXIST';
	const ERR_OUTBOUND_CONSIGNMENT_SHIPPED= 'ERR_OUTBOUND_CONSIGNMENT_SHIPPED';
	const ERR_OUTBOUND_CONSIGNMENT_REPEAT_CANCEL= 'ERR_OUTBOUND_CONSIGNMENT_REPEAT_CANCEL';
	
	static $codeMessageMap = array(
		self::ERR_OUTBOUND_CONSIGNMENT_CANCEL_TYPE_EMPTY     => '出库委托[取消原因类型]不能为空',
		self::ERR_REMARK_LENGTH_BEYOND                       => '备注信息长度超出200',
		self::ERR_OUTBOUND_CONSIGNMENT_CSMNO_OR_REFNO_EMPTY  => '委托单号和参考号不能全为空',
		self::ERR_CONSIGNMENT_NO_LENGTH_BEYOND               => '委托单号长度过长,最大长度：20',
		self::ERR_REF_NO_LENGTH_BEYOND                       => '参考号长度过长,最大长度：80',
		self::ERR_OUTBOUND_CONSIGNMENT_CANCEL_TYPE_NOT_EXIST => '取消原因类型错误，可选值：AP RO OS BC CF OT',
		self::ERR_OUTBOUND_CONSIGNMENT_SHIPPED               => '出库委托已经签出，不能操作',
		self::ERR_OUTBOUND_CONSIGNMENT_REPEAT_CANCEL         => '出库委托 重复取消',
	);
	
}
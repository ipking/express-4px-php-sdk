<?php

namespace express_4px\oms\fu_wms_outbound_create\v100\data_type;

use express_4px\oms\data_type\outbound\FBAItemLabelSignEnum;
use express_4px\oms\OmsParameter;

/**
 * @property String fba_box_code    FBA箱唛编码
 * @property String im_code 客户SKU编码
 * @property String fba_im_quantity FBA商品数量
 * @property String fba_im_code FBA商品编码
 * @property String fba_item_label_sign 是否贴FBA商品标签标识。可选值：Y（贴FBA标签）;N（不贴FBA标签）;
 * @property String fba_label_quantity  FBA商品编码标签打印数量
 */
class ConsignmentFBA extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'fba_box_code'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'im_code'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'fba_im_quantity'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'fba_im_code'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'fba_item_label_sign' => [self::PARAM_TYPE_ENUM, self::PARAM_OPTIONAL,FBAItemLabelSignEnum::class],
			'fba_label_quantity'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}


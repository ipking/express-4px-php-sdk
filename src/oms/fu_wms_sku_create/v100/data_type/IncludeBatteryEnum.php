<?php

/**
 * 是否带电。可选值 :  Y（是）;N （否）。  * 注：如果选择Y（是）带电，电池类型、电池配置、电池功率、电池功率、电池数量、电池资料为必填项
 */
namespace express_4px\oms\fu_wms_sku_create\v100\data_type;

class IncludeBatteryEnum
{
	const INCLUDE_BATTERY_Y = 'Y';
	const INCLUDE_BATTERY_N = 'N';
}
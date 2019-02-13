<?php

namespace express_4px\oms\fu_wms_sku_create\v100;

class CreateSkuErrorCode{
	const ERR_SKU_REPEAT = 'ERR_SKU_REPEAT';
	const ERR_ACCOUNT_UNSHARED_CANNOT_CREATE_SKU = 'ERR_ACCOUNT_UNSHARED_CANNOT_CREATE_SKU';
	const ERR_SKU_CODE_EMPTY = 'ERR_SKU_CODE_EMPTY';
	const ERR_SKU_CODE_ILLEGAL = 'ERR_SKU_CODE_ILLEGAL';
	const ERR_SKU_NAME_EMPTY = 'ERR_SKU_NAME_EMPTY';
	const ERR_SKU_NAME_ILLEGAL = 'ERR_SKU_NAME_ILLEGAL';
	const ERR_SKU_WRAPPING_EMPTY = 'ERR_SKU_WRAPPING_EMPTY';
	const ERR_SKU_WARRPING_ILLEGAL = 'ERR_SKU_WARRPING_ILLEGAL';
	const ERR_SKU_APPEARANCE_EMPTY = 'ERR_SKU_APPEARANCE_EMPTY';
	const ERR_SKU_APPEARANCE_ILLEGAL = 'ERR_SKU_APPEARANCE_ILLEGAL';
	const ERR_SKU_CHARACTERISTIC_ILLEGAL = 'ERR_SKU_CHARACTERISTIC_ILLEGAL';
	const ERR_SKU_UOM_EMPTY = 'ERR_SKU_UOM_EMPTY';
	const ERR_SKU_UOM_ILLEGAL = 'ERR_SKU_UOM_ILLEGAL';
	const ERR_SKU_WEIGHT_EMPTY = 'ERR_SKU_WEIGHT_EMPTY';
	const ERR_SKU_WEIGHT_ILLEGAL = 'ERR_SKU_WEIGHT_ILLEGAL';
	const ERR_SKU_LENGTH_EMPTY = 'ERR_SKU_LENGTH_EMPTY';
	const ERR_SKU_LENGTH_ILLEGAL = 'ERR_SKU_LENGTH_ILLEGAL';
	const ERR_SKU_HEIGHT_EMPTY = 'ERR_SKU_HEIGHT_EMPTY';
	const ERR_SKU_HEIGHT_ILLEGAL = 'ERR_SKU_HEIGHT_ILLEGAL';
	const ERR_SKU_WIDTH_EMPTY = 'ERR_SKU_WIDTH_EMPTY';
	const ERR_SKU_WIDTH_ILLEGAL = 'ERR_SKU_WIDTH_ILLEGAL';
	const ERR_SKU_VOLUME_EMPTY = 'ERR_SKU_VOLUME_EMPTY';
	const ERR_SKU_VOLUME_TOO_LARGE = 'ERR_SKU_VOLUME_TOO_LARGE';
	const ERR_SKU_LOGISTICS_PACKAGE_ILLEGAL = 'ERR_SKU_LOGISTICS_PACKAGE_ILLEGAL';
	const ERR_SKU_PACKAGE_MATERIAL_EMPTY = 'ERR_SKU_PACKAGE_MATERIAL_EMPTY';
	const ERR_SKU_PACKAGE_MATERIAL_ILLEGAL = 'ERR_SKU_PACKAGE_MATERIAL_ILLEGAL';
	
	static $codeMessageMap = array(
		self::ERR_SKU_REPEAT                         => 'SKU已存在',
		self::ERR_ACCOUNT_UNSHARED_CANNOT_CREATE_SKU => '账号类型为VAT独享SKU，主账号不能创建SKU',
		self::ERR_SKU_CODE_EMPTY                     => 'SKU CODE 不能为空',
		self::ERR_SKU_CODE_ILLEGAL                   => 'SKU CODE 不合法',
		self::ERR_SKU_NAME_EMPTY                     => 'SKU NAME 不能为空',
		self::ERR_SKU_NAME_ILLEGAL                   => 'SKU NAME 不合法',
		self::ERR_SKU_WRAPPING_EMPTY                 => 'SKU 包装 不能为空',
		self::ERR_SKU_WARRPING_ILLEGAL               => 'SKU 包装不合法',
		self::ERR_SKU_APPEARANCE_EMPTY               => 'SKU包装为硬包装时，SKU外观不能为空',
		self::ERR_SKU_APPEARANCE_ILLEGAL             => 'SKU包装为硬包装时，SKU外观值不合法',
		self::ERR_SKU_CHARACTERISTIC_ILLEGAL         => 'SKU特性值不合法',
		self::ERR_SKU_UOM_EMPTY                      => 'SKU uom 不能为空',
		self::ERR_SKU_UOM_ILLEGAL                    => 'SKU UOM 值不合法',
		self::ERR_SKU_WEIGHT_EMPTY                   => 'SKU 重量 不能为空',
		self::ERR_SKU_WEIGHT_ILLEGAL                 => 'SKU 重量 值不合法',
		self::ERR_SKU_LENGTH_EMPTY                   => 'SKU 长 不能为空',
		self::ERR_SKU_LENGTH_ILLEGAL                 => 'SKU 长 值不合法',
		self::ERR_SKU_HEIGHT_EMPTY                   => 'SKU 高 不能为空',
		self::ERR_SKU_HEIGHT_ILLEGAL                 => 'SKU 高 值不合法',
		self::ERR_SKU_WIDTH_EMPTY                    => 'SKU 宽 不能为空',
		self::ERR_SKU_WIDTH_ILLEGAL                  => 'SKU 宽 值不合法',
		self::ERR_SKU_VOLUME_EMPTY                   => 'SKU 体积 不能为空',
		self::ERR_SKU_VOLUME_TOO_LARGE               => 'SKU 体积不能超过999999.999',
		self::ERR_SKU_LOGISTICS_PACKAGE_ILLEGAL      => '自带物流包装 值不合法',
		self::ERR_SKU_PACKAGE_MATERIAL_EMPTY         => '包装材质不能为空',
		self::ERR_SKU_PACKAGE_MATERIAL_ILLEGAL       => '包装材质 值不合法',
	);
	
}
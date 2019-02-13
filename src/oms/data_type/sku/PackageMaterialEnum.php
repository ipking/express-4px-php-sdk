<?php

/**
 * 包装材质。
 * 可选值 :
 * WO (木质)；
 * PA (纸质)；
 * PL (塑料)；
 * ME (金属)；
 * OT (其他)
 */
namespace express_4px\oms\data_type\sku;

class PackageMaterialEnum
{
	const PACKAGE_MATERIAL_WO = 'WO';
	const PACKAGE_MATERIAL_PA = 'PA';
	const PACKAGE_MATERIAL_PL = 'PL';
	const PACKAGE_MATERIAL_ME = 'ME';
	const PACKAGE_MATERIAL_OT = 'OT';
	
	static $map = array(
		self::PACKAGE_MATERIAL_WO  => '木质',
		self::PACKAGE_MATERIAL_PA  => '纸质',
		self::PACKAGE_MATERIAL_PL  => '塑料',
		self::PACKAGE_MATERIAL_ME  => '金属',
		self::PACKAGE_MATERIAL_OT  => '其他',
	);
}
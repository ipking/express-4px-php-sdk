<?php

namespace express_4px\oms\data_type\basis_declare;

/**
 * 申报产品证书类型。
 * 可选值：
 * UL:(UL认证);
 * CE:(CE认证);
 * RCM:(RCM认证);
 * USB:(USB认证);
 * LVD:(LVD检测报告);
 * TGA:(TGA认证);
 * HDM:(HDMI认证);
 * EMC:(EMC检测报告);
 * SGS:(SGS检测报告);
 * BI:(蓝牙认证);
 * ROH:(ROHS检测报告);
 * ICI:(IC认证);
 * EPA:(EPA认证);
 * EN7:(EN71);
 * CPS:(CPSC认证);
 * CSA:(CSA认证);
 * EN6:(EN62115);
 * DOT:(DOT认证);
 * ERP:(ERP认证);
 * BP:(滴珠证明);
 * MC:(医药证明);
 * FDA:(FDA认证);
 * PS:(产品合格声明);
 * MSD:(MSDS);
 * PSE:(PSE认证);
 * UN3:(UN38.3);
 * TEL:(TELEC认证);
 * IC:(成分证明);
 * JAT:(JATE认证);
 * BA:(品牌授权书);
 * E:(其他);
 */

class CertificateTypeEnum
{
	const CERTIFICATE_TYPE_UL = 'UL';
	const CERTIFICATE_TYPE_CE = 'CE';
	const CERTIFICATE_TYPE_RCM = 'RCM';
	const CERTIFICATE_TYPE_USB = 'USB';
	const CERTIFICATE_TYPE_LVD = 'LVD';
	const CERTIFICATE_TYPE_TGA = 'TGA';
	const CERTIFICATE_TYPE_HDM = 'HDM';
	const CERTIFICATE_TYPE_EMC = 'EMC';
	const CERTIFICATE_TYPE_SGS = 'SGS';
	const CERTIFICATE_TYPE_BI = 'BI';
	const CERTIFICATE_TYPE_ROH = 'ROH';
	const CERTIFICATE_TYPE_ICI = 'ICI';
	const CERTIFICATE_TYPE_EPA = 'EPA';
	const CERTIFICATE_TYPE_EN7 = 'EN7';
	const CERTIFICATE_TYPE_CPS = 'CPS';
	const CERTIFICATE_TYPE_CSA = 'CSA';
	const CERTIFICATE_TYPE_EN6 = 'EN6';
	const CERTIFICATE_TYPE_DOT = 'DOT';
	const CERTIFICATE_TYPE_ERP = 'ERP';
	const CERTIFICATE_TYPE_BP = 'BP';
	const CERTIFICATE_TYPE_MC = 'MC';
	const CERTIFICATE_TYPE_FDA = 'FDA';
	const CERTIFICATE_TYPE_PS = 'PS';
	const CERTIFICATE_TYPE_MSD = 'MSD';
	const CERTIFICATE_TYPE_PSE = 'PSE';
	const CERTIFICATE_TYPE_UN3 = 'UN3';
	const CERTIFICATE_TYPE_TEL = 'TEL';
	const CERTIFICATE_TYPE_IC = 'IC';
	
	static $map = array(
		self::CERTIFICATE_TYPE_UL  => 'UL认证',
		self::CERTIFICATE_TYPE_CE  => 'CE认证',
		self::CERTIFICATE_TYPE_RCM => 'RCM认证',
		self::CERTIFICATE_TYPE_USB => 'USB认证',
		self::CERTIFICATE_TYPE_LVD => 'LVD检测报告',
		self::CERTIFICATE_TYPE_TGA => 'TGA认证',
		self::CERTIFICATE_TYPE_HDM => 'HDMI认证',
		self::CERTIFICATE_TYPE_EMC => 'EMC检测报告',
		self::CERTIFICATE_TYPE_SGS => 'SGS检测报告',
		self::CERTIFICATE_TYPE_BI  => '蓝牙认证',
		self::CERTIFICATE_TYPE_ROH => 'ROHS检测报告',
		self::CERTIFICATE_TYPE_ICI => 'IC认证',
		self::CERTIFICATE_TYPE_EPA => 'EPA认证',
		self::CERTIFICATE_TYPE_EN7 => 'EN71',
		self::CERTIFICATE_TYPE_CPS => 'CPSC认证',
		self::CERTIFICATE_TYPE_CSA => 'CSA认证',
		self::CERTIFICATE_TYPE_EN6 => 'EN62115',
		self::CERTIFICATE_TYPE_DOT => 'DOT认证',
		self::CERTIFICATE_TYPE_ERP => 'ERP认证',
		self::CERTIFICATE_TYPE_BP  => '滴珠证明',
		self::CERTIFICATE_TYPE_MC  => '医药证明',
		self::CERTIFICATE_TYPE_FDA => 'FDA认证',
		self::CERTIFICATE_TYPE_PS  => '产品合格声明',
		self::CERTIFICATE_TYPE_MSD => 'MSDS',
		self::CERTIFICATE_TYPE_PSE => 'PSE认证',
		self::CERTIFICATE_TYPE_UN3 => 'UN38.3',
		self::CERTIFICATE_TYPE_TEL => 'TELEC认证',
		self::CERTIFICATE_TYPE_IC  => '成分证明',
	);
}
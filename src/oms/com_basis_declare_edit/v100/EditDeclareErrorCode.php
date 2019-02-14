<?php

namespace express_4px\oms\com_basis_declare_edit\v100;

class EditDeclareErrorCode{
	const ERR_DECLARE_GOODS_CODE_EMPTY= 'ERR_DECLARE_GOODS_CODE_EMPTY';
	const ERR_DECLARE_GOODS_CODE_LENGTH_GT_20= 'ERR_DECLARE_GOODS_CODE_LENGTH_GT_20';
	const ERR_DECLARE_GOODS_GROUP_ID_EMPTY= 'ERR_DECLARE_GOODS_GROUP_ID_EMPTY';
	const ERR_DECLARE_GOODS_GROUP_ID_LENGTH_GT_10= 'ERR_DECLARE_GOODS_GROUP_ID_LENGTH_GT_10';
	const ERR_DECLARE_GOODS_PURPOSE_EMPTY= 'ERR_DECLARE_GOODS_PURPOSE_EMPTY';
	const ERR_DECLARE_GOODS_USES_LENGTH_GT_500= 'ERR_DECLARE_GOODS_USES_LENGTH_GT_500';
	const ERR_DECLARE_GOODS_SPECIFICATION_EMPTY= 'ERR_DECLARE_GOODS_SPECIFICATION_EMPTY';
	const ERR_DECLARE_GOODS_SPEC_LENGTH_GT_500= 'ERR_DECLARE_GOODS_SPEC_LENGTH_GT_500';
	const ERR_DECLARE_GOODS_MODEL_LENGTH_GT_100= 'ERR_DECLARE_GOODS_MODEL_LENGTH_GT_100';
	const ERR_DECLARE_GOODS_MATERIAL_EMPTY= 'ERR_DECLARE_GOODS_MATERIAL_EMPTY';
	const ERR_DECLARE_GOODS_MATERIAL_LENGTH_GT_500= 'ERR_DECLARE_GOODS_MATERIAL_LENGTH_GT_500';
	const ERR_DECLARE_GOODS_ORIGIN_COUNTRY_EMPTY= 'ERR_DECLARE_GOODS_ORIGIN_COUNTRY_EMPTY';
	const ERR_DECLARE_GOODS_ORIGIN_COUNTRY_LENGTH_GT_2= 'ERR_DECLARE_GOODS_ORIGIN_COUNTRY_LENGTH_GT_2';
	const ERR_SUB_ACCOUNT_CANNOT_OPERATE_DECLAREGOODS= 'ERR_SUB_ACCOUNT_CANNOT_OPERATE_DECLAREGOODS';
	const ERR_DECLARE_GOODS_COUNTRY_EMPTY= 'ERR_DECLARE_GOODS_COUNTRY_EMPTY';
	const ERR_DECLARE_GOODS_COUNTRY_CODE_EMPTY= 'ERR_DECLARE_GOODS_COUNTRY_CODE_EMPTY';
	const ERR_DECLARE_GOODS_DECLARE_COUNTRY_LENGTH_GT_2= 'ERR_DECLARE_GOODS_DECLARE_COUNTRY_LENGTH_GT_2';
	const ERR_DECLARE_GOODS_COUNTRY_DECLAREVALUE_EMPTY= 'ERR_DECLARE_GOODS_COUNTRY_DECLAREVALUE_EMPTY';
	const ERR_DECLARE_GOODS_COUNTRY_DECLAREVALUE_ILLEGAL= 'ERR_DECLARE_GOODS_COUNTRY_DECLAREVALUE_ILLEGAL';
	const ERR_DECLARE_GOODS_BRAND_EMPTY= 'ERR_DECLARE_GOODS_BRAND_EMPTY';
	const ERR_DECLARE_GOODS_BRAND_LENGTH_GT_100= 'ERR_DECLARE_GOODS_BRAND_LENGTH_GT_100';
	const ERR_DECLARE_GOODS_CERTIFICATE_NAME_NOT_FOUND= 'ERR_DECLARE_GOODS_CERTIFICATE_NAME_NOT_FOUND';
	const ERR_DECLARE_GOODS_CERTIFICATE_URL_NOT_FOUND= 'ERR_DECLARE_GOODS_CERTIFICATE_URL_NOT_FOUND';
	const ERR_DECLARE_GOODS_CERTIFICATE_URL_ILLEGAL= 'ERR_DECLARE_GOODS_CERTIFICATE_URL_ILLEGAL';
	const ERR_DECLARE_GOODS_MUST_ASSO_SKU= 'ERR_DECLARE_GOODS_MUST_ASSO_SKU';
	const ERR_DECLARE_GOODS_ORIGIN_COUNTRY_CODE_ERROR= 'ERR_DECLARE_GOODS_ORIGIN_COUNTRY_CODE_ERROR';
	const ERR_DECLARE_GOODS_COUNTRY_CODE_ERROR= 'ERR_DECLARE_GOODS_COUNTRY_CODE_ERROR';
	const ERR_DECLARE_GOODS_CERTIFICATE_TYPE_ERR= 'ERR_DECLARE_GOODS_CERTIFICATE_TYPE_ERR';
	const ERR_DECLARE_GOODS_GROUP_NOT_FOUND= 'ERR_DECLARE_GOODS_GROUP_NOT_FOUND';
	const ERR_DECLARE_GOODS_GROUP_IS_NOT_THIRD_LEVEL= 'ERR_DECLARE_GOODS_GROUP_IS_NOT_THIRD_LEVEL';
	const ERR_DECLARE_GOODS_REPEAT= 'ERR_DECLARE_GOODS_REPEAT';
	const ERR_DECLARE_GOODS_SKU_CODE_REPEAT= 'ERR_DECLARE_GOODS_SKU_CODE_REPEAT';
	const ERR_SKU_NOT_EXIST= 'ERR_SKU_NOT_EXIST';
	const ERR_SKU_STATUS_INVALID= 'ERR_SKU_STATUS_INVALID';
	const ERR_SKU_ALREADY_BINDED= 'ERR_SKU_ALREADY_BINDED';
	const ERR_DECLARE_GOODS_NOT_FOUND= 'ERR_DECLARE_GOODS_NOT_FOUND';
	const ERR_DECLARE_GOODS_FOUND_MULTI= 'ERR_DECLARE_GOODS_FOUND_MULTI';
	const ERR_DECLARE_GOODS_STATUS_ERR= 'ERR_DECLARE_GOODS_STATUS_ERR';
	
	static $codeMessageMap = array(
		self::ERR_DECLARE_GOODS_CODE_EMPTY                   => '申报产品代码不能为空',
		self::ERR_DECLARE_GOODS_CODE_LENGTH_GT_20            => '申报产品代码长度不能超过20',
		self::ERR_DECLARE_GOODS_GROUP_ID_EMPTY               => '申报品名类目ID不能为空',
		self::ERR_DECLARE_GOODS_GROUP_ID_LENGTH_GT_10        => '申报品名类目ID长度不能超过10',
		self::ERR_DECLARE_GOODS_PURPOSE_EMPTY                => '用途不能为空',
		self::ERR_DECLARE_GOODS_USES_LENGTH_GT_500           => '申报产品用途长度不能超过500',
		self::ERR_DECLARE_GOODS_SPECIFICATION_EMPTY          => '规格不能为空',
		self::ERR_DECLARE_GOODS_SPEC_LENGTH_GT_500           => '申报产品规格长度不能超过500',
		self::ERR_DECLARE_GOODS_MODEL_LENGTH_GT_100          => '申报产品型号长度不能超过100',
		self::ERR_DECLARE_GOODS_MATERIAL_EMPTY               => '材料不能为空',
		self::ERR_DECLARE_GOODS_MATERIAL_LENGTH_GT_500       => '申报产品材料长度不能超过500',
		self::ERR_DECLARE_GOODS_ORIGIN_COUNTRY_EMPTY         => '原产国不能为空',
		self::ERR_DECLARE_GOODS_ORIGIN_COUNTRY_LENGTH_GT_2   => '申报产品原产国长度不能超过2',
		self::ERR_SUB_ACCOUNT_CANNOT_OPERATE_DECLAREGOODS    => '子账号不可以操作申报产品',
		self::ERR_DECLARE_GOODS_COUNTRY_EMPTY                => '申报国家列表不能为空',
		self::ERR_DECLARE_GOODS_COUNTRY_CODE_EMPTY           => '申报产品清关国家报关国家二字码不能为空',
		self::ERR_DECLARE_GOODS_DECLARE_COUNTRY_LENGTH_GT_2  => '申报产品清关国家报关国家二字码长度不能超过2',
		self::ERR_DECLARE_GOODS_COUNTRY_DECLAREVALUE_EMPTY   => '申报价值不能为空',
		self::ERR_DECLARE_GOODS_COUNTRY_DECLAREVALUE_ILLEGAL => '申报价值不合法',
		self::ERR_DECLARE_GOODS_BRAND_EMPTY                  => '申报产品清关国家品牌不能为空',
		self::ERR_DECLARE_GOODS_BRAND_LENGTH_GT_100          => '申报产品清关国家品牌字段长度不能超过100',
		self::ERR_DECLARE_GOODS_CERTIFICATE_NAME_NOT_FOUND   => '申报产品清关国家资料类型为空',
		self::ERR_DECLARE_GOODS_CERTIFICATE_URL_NOT_FOUND    => '申报产品清关国家资料URL为空',
		self::ERR_DECLARE_GOODS_CERTIFICATE_URL_ILLEGAL      => '申报产品清关国家资料URL格式错误',
		self::ERR_DECLARE_GOODS_MUST_ASSO_SKU                => '申报产品必需关联SKU',
		self::ERR_DECLARE_GOODS_ORIGIN_COUNTRY_CODE_ERROR    => '原产地国家二字码错误',
		self::ERR_DECLARE_GOODS_COUNTRY_CODE_ERROR           => '申报国家二字码错误',
		self::ERR_DECLARE_GOODS_CERTIFICATE_TYPE_ERR         => '清关资料证书类型与对应清关国家允许的证书类型不匹配',
		self::ERR_DECLARE_GOODS_GROUP_NOT_FOUND              => '申报产品类目不存在',
		self::ERR_DECLARE_GOODS_GROUP_IS_NOT_THIRD_LEVEL     => '申报产品类目不是三级类目',
		self::ERR_DECLARE_GOODS_REPEAT                       => '申报产品重复',
		self::ERR_DECLARE_GOODS_SKU_CODE_REPEAT              => '申报产品SKU编码重复',
		self::ERR_SKU_NOT_EXIST                              => 'SKU不存在',
		self::ERR_SKU_STATUS_INVALID                         => 'SKU未发布',
		self::ERR_SKU_ALREADY_BINDED                         => 'SKU已绑定',
		self::ERR_DECLARE_GOODS_NOT_FOUND                    => '申报产品不存在',
		self::ERR_DECLARE_GOODS_FOUND_MULTI                  => '匹配多个申报产品',
		self::ERR_DECLARE_GOODS_STATUS_ERR                   => '申报产品状态错误',
	);
	
}
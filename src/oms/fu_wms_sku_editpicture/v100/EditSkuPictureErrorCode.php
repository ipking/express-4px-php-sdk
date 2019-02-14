<?php

namespace express_4px\oms\fu_wms_sku_editpicture\v100;

class EditSkuPictureErrorCode{
	const ERR_SKU_CODE_EMPTY= 'ERR_SKU_CODE_EMPTY';
	const ERR_COSTOMER_ID_EMPTY= 'ERR_COSTOMER_ID_EMPTY';
	const ERR_SKU_IMG_EMPTY= 'ERR_SKU_IMG_EMPTY';
	const ERR_SKU_IMAGE_LESS_4= 'ERR_SKU_IMAGE_LESS_4';
	const ERR_SKU_IMAGE_MORE_6= 'ERR_SKU_IMAGE_MORE_6';
	const ERR_SKU_PICTUR_URL_ILLEGAL= 'ERR_SKU_PICTUR_URL_ILLEGAL';
	const ERR_SKU_NOT_EXIST= 'ERR_SKU_NOT_EXIST';
	const ERR_SKU_CODE_LENGTH_ERROR= 'ERR_SKU_CODE_LENGTH_ERROR';
	
	static $codeMessageMap = array(
		self::ERR_SKU_CODE_EMPTY         => 'skuCode不能为空',
		self::ERR_COSTOMER_ID_EMPTY      => 'customerId不能为空',
		self::ERR_SKU_IMG_EMPTY          => '图片不能为空',
		self::ERR_SKU_IMAGE_LESS_4       => 'sku图片不能少于4张',
		self::ERR_SKU_IMAGE_MORE_6       => 'sku图片不能多于六张',
		self::ERR_SKU_PICTUR_URL_ILLEGAL => 'SKU 图片地址 不合法',
		self::ERR_SKU_NOT_EXIST          => 'sku不存在',
		self::ERR_SKU_CODE_LENGTH_ERROR  => 'SKU长度错误',
	);
	
}
<?php
/**
 * 修改SKU图片的参数
 */

namespace express_4px\oms\fu_wms_sku_editpicture\v100;

use express_4px\oms\OmsParameter;

/**
 * @property string sku_code    SKU编码
 * @property string picture_url 图片地址.(绝对地址,格式:http://host/image_path); url所对应的图片必须要属于当前用户。注：图片路径必须有效，如图片路径有问题导致下载失败会影响入库下单审核失败。
 * @property string customer_code   客户操作帐号
 */
class EditSkuPictureParameter extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sku_code'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'picture_url'   => [self::PARAM_TYPE_LIST, self::PARAM_REQUIRED,self::PARAM_TYPE_STRING],
			'customer_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
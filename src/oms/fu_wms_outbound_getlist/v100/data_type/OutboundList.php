<?php

namespace express_4px\oms\fu_wms_outbound_getlist\v100\data_type;

use express_4px\oms\OmsParameter;

/**
 * @property String consignment_no
 * @property String customer_code
 * @property String 4px_tracking_no
 * @property String ref_no
 * @property String from_warehouse_code
 * @property String status
 * @property String consignment_type
 * @property String logistics_product_code
 * @property String return_service
 * @property String customs_service
 * @property String signature_service
 * @property String shipping_no
 * @property String total_weight
 * @property String billing_weight
 * @property String shipping_weight
 * @property String total_volume
 * @property String billing_amount
 * @property String currency
 * @property String is_oda
 * @property String sales_platform
 * @property String seller_id
 * @property String sales_no
 * @property String insure_services
 * @property String insure_value
 * @property String audit_user
 * @property String audit_time
 * @property String create_time
 * @property String create_user
 * @property String update_time
 * @property String update_user
 * @property String complete_time
 * @property String remark
 * @property String country
 * @property String state
 * @property String city
 * @property String district
 * @property String post_code
 * @property String street
 * @property String house_number
 * @property String company
 * @property String last_name
 * @property String first_name
 * @property String phone
 * @property String email
 * @property String id_card
 * @property OutboundListSku[] outboundlist_sku
 * @property OutboundListSerialNo[] outboundlist_serial_no
 */
class OutboundList extends OmsParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'consignment_no'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'customer_code'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'4px_tracking_no'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'ref_no'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'from_warehouse_code'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'consignment_type'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistics_product_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'return_service'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'customs_service'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'signature_service'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_no'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total_weight'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'billing_weight'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_weight'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total_volume'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'billing_amount'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'is_oda'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sales_platform'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sales_no'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_services'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'insure_value'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'audit_user'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'audit_time'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_time'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'create_user'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'update_time'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'update_user'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'complete_time'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'remark'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'country'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'state'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'city'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'district'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'post_code'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'house_number'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'company'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_name'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'first_name'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'phone'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'email'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id_card'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'outboundlist_sku'       => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,OutboundListSku::class],
			'outboundlist_serial_no' => [self::PARAM_TYPE_LIST, self::PARAM_OPTIONAL,OutboundListSerialNo::class],
		));
	}
}


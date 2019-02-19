<?php

namespace express_4px\oms\fu_wms_inventory_getlog\v100\data_type;

/**
 * 出入库标识
 */
class JournalType
{
	const JOURNAL_TYPE_I = 'I';
	const JOURNAL_TYPE_O = 'O';
	
	static $map = array(
		self::JOURNAL_TYPE_I => '入库',
		self::JOURNAL_TYPE_O => '出库',
	);
}


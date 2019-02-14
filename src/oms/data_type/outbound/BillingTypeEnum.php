<?php

/**
 * 费用项。如：
 * 100(上门提货费);
 * 101(散装卸货费);
 * 102(超时费);
 * 103(压夜费);
 * 105(SKU查验费);
 * 106(更换条码费);
 * 107(更换包装费);
 * 108(拍照费);
 * 109(添加附件费);
 * 110(运费);
 * 118(报关费);
 * 119(查验费);
 * 120(商检费);
 * 121(续页费);
 * 122(关税);
 * 123(VAT税);
 * 124(关税杂费);
 * 125(关税代垫费);
 * 126(税号使用费);
 * 127(卸货费);
 * 128(仓租费);
 * 129(下架+订单操作费);
 * 130(更换包装费);
 * 131(拍照费);
 * 132(添加附件费);
 * 133(托盘费);
 * 134(库存盘点费);
 * 135(运费);
 * 136(超长费);
 * 137(超重费);
 * 138(偏远费);
 * 139(地址更改费);
 * 140(特殊操作费);
 * 141(BFPO地址费);
 * 142(重派费);
 * 143(卷状超长费);
 * 144(卷状超重费);
 * 145(非规则货物费);
 * 147(托盘费);
 * 148(超尺寸附加费);
 * 149(高风险地区费);
 * 150(限运目的地费);
 * 151(过港费);
 * 152(到付手续费);
 * 153(仓储头程杂费);
 * 154(超长超重附加费);
 * 155(超长超重燃油费);
 * 156(挂号费);
 * 157(清关使用费);
 * 158(无退税报关);
 * 159(出口退税);
 * 160(非出口退税);
 * 161(单独退税自VAT);
 * 162(DDP手续费);
 * 163(更换条码费);
 * 164(分箱费);
 * 165(销毁费);
 * 166(退货操作附加费按件);
 * 167(退货操作附加费按重量);
 * 168(退货操作费);
 * 169(入仓费);
 * 170(仓储操作附加费按件);
 * 171(仓储操作附加费按重量);
 * 172(仓储自带包装操作费);
 * 173(保险费);
 * 180(电池费);
 * 181(仓储头程杂费);
 * 182(低保-保险);
 * 183(高保-保险);
 * 184(6‰保险);
 * 185(清关费);
 * 186(提货费);
 * 187(电池费);
 * 188(提货费);
 * 189(操作手续费);
 * 190(低保-保险);
 * 191(高保-保险);
 * 192(6‰保险);
 * 193(挂号-快递保价);
 * 194(平邮保价);
 * 174(仓储入库费按票);
 * 175(仓储非自带包装操作费);
 * 175(仓储非自带包装操作费);
 * 176(包装费);
 */
namespace express_4px\oms\data_type\outbound;

class BillingTypeEnum
{
	const BILLING_TYPE_100 = '100';
	const BILLING_TYPE_101 = '101';
	const BILLING_TYPE_102 = '102';
	const BILLING_TYPE_103 = '103';
	const BILLING_TYPE_105 = '105';
	const BILLING_TYPE_106 = '106';
	const BILLING_TYPE_107 = '107';
	const BILLING_TYPE_108 = '108';
	const BILLING_TYPE_109 = '109';
	const BILLING_TYPE_110 = '110';
	const BILLING_TYPE_118 = '118';
	const BILLING_TYPE_119 = '119';
	const BILLING_TYPE_120 = '120';
	const BILLING_TYPE_121 = '121';
	const BILLING_TYPE_122 = '122';
	const BILLING_TYPE_123 = '123';
	const BILLING_TYPE_124 = '124';
	const BILLING_TYPE_125 = '125';
	const BILLING_TYPE_126 = '126';
	const BILLING_TYPE_127 = '127';
	const BILLING_TYPE_128 = '128';
	const BILLING_TYPE_129 = '129';
	const BILLING_TYPE_130 = '130';
	const BILLING_TYPE_131 = '131';
	const BILLING_TYPE_132 = '132';
	const BILLING_TYPE_133 = '133';
	const BILLING_TYPE_134 = '134';
	const BILLING_TYPE_135 = '135';
	const BILLING_TYPE_136 = '136';
	const BILLING_TYPE_137 = '137';
	const BILLING_TYPE_138 = '138';
	const BILLING_TYPE_139 = '139';
	const BILLING_TYPE_140 = '140';
	const BILLING_TYPE_141 = '141';
	const BILLING_TYPE_142 = '142';
	const BILLING_TYPE_143 = '143';
	const BILLING_TYPE_144 = '144';
	const BILLING_TYPE_145 = '145';
	const BILLING_TYPE_147 = '147';
	const BILLING_TYPE_148 = '148';
	const BILLING_TYPE_149 = '149';
	const BILLING_TYPE_150 = '150';
	const BILLING_TYPE_151 = '151';
	const BILLING_TYPE_152 = '152';
	const BILLING_TYPE_153 = '153';
	const BILLING_TYPE_154 = '154';
	const BILLING_TYPE_155 = '155';
	const BILLING_TYPE_156 = '156';
	const BILLING_TYPE_157 = '157';
	const BILLING_TYPE_158 = '158';
	const BILLING_TYPE_159 = '159';
	const BILLING_TYPE_160 = '160';
	const BILLING_TYPE_161 = '161';
	const BILLING_TYPE_162 = '162';
	const BILLING_TYPE_163 = '163';
	const BILLING_TYPE_164 = '164';
	const BILLING_TYPE_165 = '165';
	const BILLING_TYPE_166 = '166';
	const BILLING_TYPE_167 = '167';
	const BILLING_TYPE_168 = '168';
	const BILLING_TYPE_169 = '169';
	const BILLING_TYPE_170 = '170';
	const BILLING_TYPE_171 = '171';
	const BILLING_TYPE_172 = '172';
	const BILLING_TYPE_173 = '173';
	const BILLING_TYPE_180 = '180';
	const BILLING_TYPE_181 = '181';
	const BILLING_TYPE_182 = '182';
	const BILLING_TYPE_183 = '183';
	const BILLING_TYPE_184 = '184';
	const BILLING_TYPE_185 = '185';
	const BILLING_TYPE_186 = '186';
	const BILLING_TYPE_187 = '187';
	const BILLING_TYPE_188 = '188';
	const BILLING_TYPE_189 = '189';
	const BILLING_TYPE_190 = '190';
	const BILLING_TYPE_191 = '191';
	const BILLING_TYPE_192 = '192';
	const BILLING_TYPE_193 = '193';
	const BILLING_TYPE_194 = '194';
	const BILLING_TYPE_174 = '174';
	const BILLING_TYPE_175 = '175';
	const BILLING_TYPE_176 = '176';
	
	static $map = array(
		self::BILLING_TYPE_100 => '上门提货费',
		self::BILLING_TYPE_101 => '散装卸货费',
		self::BILLING_TYPE_102 => '超时费',
		self::BILLING_TYPE_103 => '压夜费',
		self::BILLING_TYPE_105 => 'SKU查验费',
		self::BILLING_TYPE_106 => '更换条码费',
		self::BILLING_TYPE_107 => '更换包装费',
		self::BILLING_TYPE_108 => '拍照费',
		self::BILLING_TYPE_109 => '添加附件费',
		self::BILLING_TYPE_110 => '运费',
		self::BILLING_TYPE_118 => '报关费',
		self::BILLING_TYPE_119 => '查验费',
		self::BILLING_TYPE_120 => '商检费',
		self::BILLING_TYPE_121 => '续页费',
		self::BILLING_TYPE_122 => '关税',
		self::BILLING_TYPE_123 => 'VAT税',
		self::BILLING_TYPE_124 => '关税杂费',
		self::BILLING_TYPE_125 => '关税代垫费',
		self::BILLING_TYPE_126 => '税号使用费',
		self::BILLING_TYPE_127 => '卸货费',
		self::BILLING_TYPE_128 => '仓租费',
		self::BILLING_TYPE_129 => '下架+订单操作费',
		self::BILLING_TYPE_130 => '更换包装费',
		self::BILLING_TYPE_131 => '拍照费',
		self::BILLING_TYPE_132 => '添加附件费',
		self::BILLING_TYPE_133 => '托盘费',
		self::BILLING_TYPE_134 => '库存盘点费',
		self::BILLING_TYPE_135 => '运费',
		self::BILLING_TYPE_136 => '超长费',
		self::BILLING_TYPE_137 => '超重费',
		self::BILLING_TYPE_138 => '偏远费',
		self::BILLING_TYPE_139 => '地址更改费',
		self::BILLING_TYPE_140 => '特殊操作费',
		self::BILLING_TYPE_141 => 'BFPO地址费',
		self::BILLING_TYPE_142 => '重派费',
		self::BILLING_TYPE_143 => '卷状超长费',
		self::BILLING_TYPE_144 => '卷状超重费',
		self::BILLING_TYPE_145 => '非规则货物费',
		self::BILLING_TYPE_147 => '托盘费',
		self::BILLING_TYPE_148 => '超尺寸附加费',
		self::BILLING_TYPE_149 => '高风险地区费',
		self::BILLING_TYPE_150 => '限运目的地费',
		self::BILLING_TYPE_151 => '过港费',
		self::BILLING_TYPE_152 => '到付手续费',
		self::BILLING_TYPE_153 => '仓储头程杂费',
		self::BILLING_TYPE_154 => '超长超重附加费',
		self::BILLING_TYPE_155 => '超长超重燃油费',
		self::BILLING_TYPE_156 => '挂号费',
		self::BILLING_TYPE_157 => '清关使用费',
		self::BILLING_TYPE_158 => '无退税报关',
		self::BILLING_TYPE_159 => '出口退税',
		self::BILLING_TYPE_160 => '非出口退税',
		self::BILLING_TYPE_161 => '单独退税自VAT',
		self::BILLING_TYPE_162 => 'DDP手续费',
		self::BILLING_TYPE_163 => '更换条码费',
		self::BILLING_TYPE_164 => '分箱费',
		self::BILLING_TYPE_165 => '销毁费',
		self::BILLING_TYPE_166 => '退货操作附加费按件',
		self::BILLING_TYPE_167 => '退货操作附加费按重量',
		self::BILLING_TYPE_168 => '退货操作费',
		self::BILLING_TYPE_169 => '入仓费',
		self::BILLING_TYPE_170 => '仓储操作附加费按件',
		self::BILLING_TYPE_171 => '仓储操作附加费按重量',
		self::BILLING_TYPE_172 => '仓储自带包装操作费',
		self::BILLING_TYPE_173 => '保险费',
		self::BILLING_TYPE_180 => '电池费',
		self::BILLING_TYPE_181 => '仓储头程杂费',
		self::BILLING_TYPE_182 => '低保-保险',
		self::BILLING_TYPE_183 => '高保-保险',
		self::BILLING_TYPE_184 => '6‰保险',
		self::BILLING_TYPE_185 => '清关费',
		self::BILLING_TYPE_186 => '提货费',
		self::BILLING_TYPE_187 => '电池费',
		self::BILLING_TYPE_188 => '提货费',
		self::BILLING_TYPE_189 => '操作手续费',
		self::BILLING_TYPE_190 => '低保-保险',
		self::BILLING_TYPE_191 => '高保-保险',
		self::BILLING_TYPE_192 => '6‰保险',
		self::BILLING_TYPE_193 => '挂号-快递保价',
		self::BILLING_TYPE_194 => '平邮保价',
		self::BILLING_TYPE_174 => '仓储入库费按票',
		self::BILLING_TYPE_175 => '仓储非自带包装操作费',
		self::BILLING_TYPE_175 => '仓储非自带包装操作费',
		self::BILLING_TYPE_176 => '包装费',
	);
}
<?php

/**
 * 入库委托状态。
 * 可选值：
 * N（草稿）;
 * S（待审批）;
 * A（已审批）;
 * B（预约中）;
 * F（预约确认）;
 * R（预约拒绝）;
 * G（收货中）;
 * V（已收货）;
 * K（已查验）;
 * H（已出库）;
 * P（上架中）;
 * C（已上架）;
 * E（异常）;
 * X（已取消）;
 * D（已删除）
 */
namespace express_4px\oms\data_type\inbound;

class StatusEnum
{
	const STATUS_N = 'N';
	const STATUS_S = 'S';
	const STATUS_A = 'A';
	const STATUS_B = 'B';
	const STATUS_F = 'F';
	const STATUS_R = 'R';
	const STATUS_G = 'G';
	const STATUS_V = 'V';
	const STATUS_K = 'K';
	const STATUS_H = 'H';
	const STATUS_P = 'P';
	const STATUS_C = 'C';
	const STATUS_E = 'E';
	const STATUS_X = 'X';
	const STATUS_D = 'D';
	
	static $map = array(
		self::STATUS_N => '草稿',
		self::STATUS_S => '待审批',
		self::STATUS_A => '已审批',
		self::STATUS_B => '预约中',
		self::STATUS_F => '预约确认',
		self::STATUS_R => '预约拒绝',
		self::STATUS_G => '收货中',
		self::STATUS_V => '已收货',
		self::STATUS_K => '已查验',
		self::STATUS_H => '已出库',
		self::STATUS_P => '上架中',
		self::STATUS_C => '已上架',
		self::STATUS_E => '异常',
		self::STATUS_X => '已取消',
		self::STATUS_D => '已删除',
	);
}
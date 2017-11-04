<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/3/17
 * Time: 10:18 PM
 */

namespace Gobgp\Flowspec;

use PHPUnit\Framework\TestCase;

class FlowspecMatchNumericPartTest extends TestCase
{


	public function testToBytes()
	{
		$part = new FlowspecMatchNumericPart(137, 1, FlowspecMatchNumericOperator::get(FlowspecMatchNumericOperator::greaterThenOrEqualTo));
		self::assertEquals([0x03, 0x89], $part->toBytes());

		$part = new FlowspecMatchNumericPart(139, 1, FlowspecMatchNumericOperator::get(FlowspecMatchNumericOperator::lessThenOrEqualTo), true);
		self::assertEquals([0x45, 0x8b], $part->toBytes());

		$part = new FlowspecMatchNumericPart(8080, 2, FlowspecMatchNumericOperator::get(FlowspecMatchNumericOperator::equalTo), false, true);
		self::assertEquals([0x91, 0x1f, 0x90], $part->toBytes());
	}

	public function testFromBytes()
	{
		$part = FlowspecMatchNumericPart::fromBytes([0x03, 0x89]);
		self::assertEquals(
			[
				137,
				1,
				FlowspecMatchNumericOperator::greaterThenOrEqualTo,
				false,
				false
			],
			[
				$part->getValue(),
				$part->getLength(),
				$part->getOperator()->getVal(),
				$part->isAnd(),
				$part->isListEnd()
			]
		);

		$part = FlowspecMatchNumericPart::fromBytes([0x45, 0x8b]);
		self::assertEquals(
			[
				139,
				1,
				FlowspecMatchNumericOperator::lessThenOrEqualTo,
				true,
				false
			],
			[
				$part->getValue(),
				$part->getLength(),
				$part->getOperator()->getVal(),
				$part->isAnd(),
				$part->isListEnd()
			]
		);

		$part = FlowspecMatchNumericPart::fromBytes([0x91, 0x1f, 0x90]);
		self::assertEquals([0x91, 0x1f, 0x90], $part->toBytes());

		self::assertEquals(
			[
				8080,
				2,
				FlowspecMatchNumericOperator::equalTo,
				false,
				true
			],
			[
				$part->getValue(),
				$part->getLength(),
				$part->getOperator()->getVal(),
				$part->isAnd(),
				$part->isListEnd()
			]
		);
	}

	public function testValueLengthValidation1()
	{
		$this->expectException(\Exception::class);
		$this->expectExceptionMessage("Value has to be between 0x00 and 0xff if length = 1");
		$part = new FlowspecMatchNumericPart(3000);
	}

	public function testValueLengthValidation2()
	{
		$this->expectException(\Exception::class);
		$this->expectExceptionMessage("Value has to be between 0x0000 and 0xffff if length = 2");
		$part = new FlowspecMatchNumericPart(3000000, 2);
	}

	public function testValueLengthValidation3()
	{
		$this->expectException(\Exception::class);
		$this->expectExceptionMessage("Value has to be between 0x00 and 0xff if length = 1");
		$part = new FlowspecMatchNumericPart(-200);
	}

}

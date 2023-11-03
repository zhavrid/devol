<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Why_trade implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'why_trade',
				'Why_trade',
				'Why_trade block',
				'templates/parts/why_trade.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Why_trade block",
					'description' => "Why_trade block"
				),
				'image',
				'custom'
			)
		);
	}
}
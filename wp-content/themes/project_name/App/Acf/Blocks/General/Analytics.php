<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Analytics implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'analytics',
				'Analytics',
				'Analytics block',
				'templates/parts/analytics.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Analytics block",
					'description' => "Analytics block"
				),
				'image',
				'custom'
			)
		);
	}
}
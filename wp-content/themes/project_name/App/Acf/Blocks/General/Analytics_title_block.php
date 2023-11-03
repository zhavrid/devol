<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Analytics_title_block implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'analytics_title_block',
				'Analytics_title_block',
				'Analytics_title_block block',
				'templates/parts/analytics_title_block.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Analytics_title_block block",
					'description' => "Analytics_title_block block"
				),
				'image',
				'custom'
			)
		);
	}
}
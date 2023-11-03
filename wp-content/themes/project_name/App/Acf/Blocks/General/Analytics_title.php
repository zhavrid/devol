<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Analytics_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'analytics_title',
				'Analytics_title',
				'Analytics_title block',
				'templates/parts/analytics_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Analytics_title block",
					'description' => "Analytics_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
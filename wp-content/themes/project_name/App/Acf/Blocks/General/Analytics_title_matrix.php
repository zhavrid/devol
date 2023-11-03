<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Analytics_title_matrix implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'analytics_title_matrix',
				'Analytics_title_matrix',
				'Analytics_title_matrix block',
				'templates/parts/analytics_title_matrix.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Analytics_title_matrix block",
					'description' => "Analytics_title_matrix block"
				),
				'image',
				'custom'
			)
		);
	}
}
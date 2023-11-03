<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Platform_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'platform_title',
				'Platform_title',
				'Platform_title block',
				'templates/parts/platform_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Platform_title block",
					'description' => "Platform_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Platform_block implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'platform_block',
				'Platform_block',
				'Platform_block block',
				'templates/parts/platform_block.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Platform_block block",
					'description' => "Platform_block block"
				),
				'image',
				'custom'
			)
		);
	}
}
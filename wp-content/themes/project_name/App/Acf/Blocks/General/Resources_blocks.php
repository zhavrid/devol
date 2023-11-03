<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Resources_blocks implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'resources_blocks',
				'Resources_blocks',
				'Resources_blocks block',
				'templates/parts/resources_blocks.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Resources_blocks block",
					'description' => "Resources_blocks block"
				),
				'image',
				'custom'
			)
		);
	}
}
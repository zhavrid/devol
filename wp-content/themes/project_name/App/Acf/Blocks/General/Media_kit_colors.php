<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Media_kit_colors implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'media_kit_colors',
				'Media_kit_colors',
				'Media_kit_colors block',
				'templates/parts/media_kit_colors.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Media_kit_colors block",
					'description' => "Media_kit_colors block"
				),
				'image',
				'custom'
			)
		);
	}
}
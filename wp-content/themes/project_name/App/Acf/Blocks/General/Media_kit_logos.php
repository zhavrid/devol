<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Media_kit_logos implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'media_kit_logos',
				'Media_kit_logos',
				'Media_kit_logos block',
				'templates/parts/media_kit_logos.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Media_kit_logos block",
					'description' => "Media_kit_logos block"
				),
				'image',
				'custom'
			)
		);
	}
}
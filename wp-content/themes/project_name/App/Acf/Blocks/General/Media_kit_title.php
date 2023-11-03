<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Media_kit_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'media_kit_title',
				'Media_kit_title',
				'Media_kit_title block',
				'templates/parts/media_kit_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Media_kit_title block",
					'description' => "Media_kit_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
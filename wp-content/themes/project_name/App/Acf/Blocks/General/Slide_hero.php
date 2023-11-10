<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Slide_hero implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'slide_hero',
				'Slide_hero',
				'Slide_hero block',
				'templates/parts/slide_hero.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Slide_hero block",
					'description' => "Slide_hero block"
				),
				'image',
				'custom'
			)
		);
	}
}
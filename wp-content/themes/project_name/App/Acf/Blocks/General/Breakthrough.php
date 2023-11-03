<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Breakthrough implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'breakthrough',
				'Breakthrough',
				'Breakthrough block',
				'templates/parts/breakthrough.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Breakthrough block",
					'description' => "Breakthrough block"
				),
				'image',
				'custom'
			)
		);
	}
}
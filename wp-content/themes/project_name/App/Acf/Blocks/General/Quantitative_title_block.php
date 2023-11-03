<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Quantitative_title_block implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'quantitative_title_block',
				'Quantitative_title_block',
				'Quantitative_title_block block',
				'templates/parts/quantitative_title_block.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Quantitative_title_block block",
					'description' => "Quantitative_title_block block"
				),
				'image',
				'custom'
			)
		);
	}
}
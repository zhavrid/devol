<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Quantitative_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'quantitative_title',
				'Quantitative_title',
				'Quantitative_title block',
				'templates/parts/quantitative_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Quantitative_title block",
					'description' => "Quantitative_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Quantitative implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'quantitative',
				'Quantitative',
				'Quantitative block',
				'templates/parts/quantitative.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Quantitative block",
					'description' => "Quantitative block"
				),
				'image',
				'custom'
			)
		);
	}
}
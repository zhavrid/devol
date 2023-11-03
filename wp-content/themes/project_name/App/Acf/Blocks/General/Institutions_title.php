<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Institutions_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'institutions_title',
				'Institutions_title',
				'Institutions_title block',
				'templates/parts/institutions_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Institutions_title block",
					'description' => "Institutions_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
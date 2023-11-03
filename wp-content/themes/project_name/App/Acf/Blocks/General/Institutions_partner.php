<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Institutions_partner implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'institutions_partner',
				'Institutions_partner',
				'Institutions_partner block',
				'templates/parts/institutions_partner.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Institutions_partner block",
					'description' => "Institutions_partner block"
				),
				'image',
				'custom'
			)
		);
	}
}
<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Institutions_partner_block implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'institutions_partner_block',
				'Institutions_partner_block',
				'Institutions_partner_block block',
				'templates/parts/institutions_partner_block.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Institutions_partner_block block",
					'description' => "Institutions_partner_block block"
				),
				'image',
				'custom'
			)
		);
	}
}
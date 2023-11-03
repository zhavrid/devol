<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Partner_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'partner_title',
				'Partner_title',
				'Partner_title block',
				'templates/parts/partner_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Partner_title block",
					'description' => "Partner_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
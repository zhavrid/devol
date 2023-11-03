<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Protocol_partner implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'protocol_partner',
				'Protocol_partner',
				'Protocol_partner block',
				'templates/parts/protocol_partner.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Protocol_partner block",
					'description' => "Protocol_partner block"
				),
				'image',
				'custom'
			)
		);
	}
}
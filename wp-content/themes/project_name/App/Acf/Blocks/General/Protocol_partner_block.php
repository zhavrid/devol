<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Protocol_partner_block implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'protocol_partner_block',
				'Protocol_partner_block',
				'Protocol_partner_block block',
				'templates/parts/protocol_partner_block.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Protocol_partner_block block",
					'description' => "Protocol_partner_block block"
				),
				'image',
				'custom'
			)
		);
	}
}
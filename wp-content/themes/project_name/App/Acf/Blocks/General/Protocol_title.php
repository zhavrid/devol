<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Protocol_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'protocol_title',
				'Protocol_title',
				'Protocol_title block',
				'templates/parts/protocol_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Protocol_title block",
					'description' => "Protocol_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
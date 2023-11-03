<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Contact_title implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'contact_title',
				'Contact_title',
				'Contact_title block',
				'templates/parts/contact_title.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Contact_title block",
					'description' => "Contact_title block"
				),
				'image',
				'custom'
			)
		);
	}
}
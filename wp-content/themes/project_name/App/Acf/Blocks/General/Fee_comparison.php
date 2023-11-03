<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Fee_comparison implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'fee_comparison',
				'Fee_comparison',
				'Fee_comparison block',
				'templates/parts/fee_comparison.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Fee_comparison block",
					'description' => "Fee_comparison block"
				),
				'image',
				'custom'
			)
		);
	}
}
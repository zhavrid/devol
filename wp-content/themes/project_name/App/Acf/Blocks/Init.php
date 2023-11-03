<?php

namespace App\Acf\Blocks;

final class Init {
	/**
	 * @var Helpers\BlockItem[]
	 */
	private static array $blocks = array(
		General\Hero::class,
		General\Breakthrough::class,
		General\Platform::class,
		General\Group::class,
		General\Privacy::class,
		General\Trade::class,
		General\Platform_block::class, 
		General\Quantitative::class,
		General\Analytics::class, 
		General\Analytics_title::class,
		General\Analytics_title_matrix::class, 
		General\Analytics_title_block::class,  
		General\Platform_title::class,  
		General\Why_trade::class,  
		General\Passively::class,  
		General\Quantitative_title::class,  
		General\Quantitative_title_block::class,  
		General\Fee_comparison::class,  
		General\Overview::class,  
		General\Partner_title::class,  
		General\Protocol_title::class,
		General\Institutions_title::class,    
		General\Refer::class,    
		General\Institutions_partner::class, 
		General\institutions_partner_block::class, 
		General\Contact::class, 
		General\Protocol_partner::class, 
		General\Protocol_partner_block::class, 
		General\Contact_title::class, 
		General\Resources::class, 
		General\Resources_blocks::class, 
		General\Media_kit_title::class, 
		General\media_kit_logos::class, 
		General\Media_kit_colors::class, 
		General\Media_kit_fonts::class, 
		General\Media_kit_illustrations::class, 
	);
	
	public function __construct()
	{
		/*
		** More info about acf bocks here: https://www.advancedcustomfields.com/resources/acf_register_block_type/
		*/
		foreach (self::$blocks as $block) {
			$block::setBlockParams();
		}
		RegisterBlock::init();
	}

}
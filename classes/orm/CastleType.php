<?php



/**
 * Skeleton subclass for representing a row from the 'castle_type' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.orm
 */
class CastleType extends BaseCastleType
{
	public function __construct() 
	{
		
	}
	
	public function init()
	{
		$this->setTotalSt(0);
		$this->setTotalSk(0);
		$this->total_bs = 0;
		$this->total_as = 0;
		$this->total_pr = 0;
		$this->total_lr = 0;
		$this->total_hk = 0;
		$this->total_ok = 0;
		
		$this->mission_st = 0;
		$this->mission_sk = 0;
		$this->mission_bs = 0;
		$this->mission_as = 0;
		$this->mission_pr = 0;
		$this->mission_lr = 0;
		
		$this->bergfried   = 10;
		$this->zeughaus    = 30;
		$this->taverne 	   = 10;
		$this->bibliothek  = 10;
		$this->wehranlage  = 20;
		$this->markt 	   =  8;
		$this->bauernhof   = 30;
		$this->holzfaeller = 30;
		$this->holzlager   = 20;
		$this->steinbruch  = 30;
		$this->steinlager  = 20;
		$this->erzmine     = 30;
		$this->erzlager    = 20;
	
		$this->langbogen			= true;
		$this->dreifelderwirtschaft = true;
		$this->kummet 				= true;
		$this->vorratskeller 		= true;
		$this->steigbuegel 			= true;
		$this->waffenschmied 		= true;
		$this->ruestungsschmied 	= true;
		$this->bierpruefer 			= true;
		$this->schwertschmied 		= true;
		$this->eisenhaertung 		= true;
		$this->armbrust 			= true;
		$this->giftpfeile 			= true;
		$this->pferdezucht 			= true;
		$this->waffenherstellung 	= true;
		$this->pferdepanzerung 		= true;
		$this->schubkarren 			= true;
		$this->brandpfeile 			= true;
		$this->hufschmied 			= true;
		$this->umgebungskarte 		= true;
		$this->zisterne 			= true;
	
	}
	
	public function initBoolean()
	{
		$this->setLangbogen(false);
		$this->setDreifelderwirtschaft(false);
		$this->setKummet(false);
		$this->setVorratskeller(false);
		$this->setSteigbuegel 			(false);
		$this->setWaffenschmied 		(false);
		$this->setRuestungsschmied 	(false);
		$this->setBierpruefer 			(false);
		$this->setSchwertschmied 		(false);
		$this->setEisenhaertung 		(false);
		$this->setArmbrust 			(false);
		$this->setGiftpfeile 			(false);
		$this->setPferdezucht 			(false);
		$this->setWaffenherstellung 	(false);
		$this->setPferdepanzerung 		(false);
		$this->setSchubkarren 			(false);
		$this->setBrandpfeile 			(false);
		$this->setHufschmied 			(false);
		$this->setUmgebungskarte 		(false);
		$this->setZisterne 			(false);
	
	}
}

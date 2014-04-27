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
		$this->setTotalSt(0);
		$this->setTotalSk(0);
		$this->setTotalBs(0);
		$this->setTotalAs(0);
		$this->setTotalPr(0);
		$this->setTotalLr(0);
		$this->setTotalHk(0);
		$this->setTotalOk(0);
		
		$this->setMissionSt(0);
		$this->setMissionSk(0);
		$this->setMissionBs(0);
		$this->setMissionAs(0);
		$this->setMissionPr(0);
		$this->setMissionLr(0);
		
		$this->setBergfried(10);
		$this->setZeughaus(30);
		$this->setTaverne(10);
		$this->setBibliothek(10);
		$this->setWehranlage(20);
		$this->setMarkt(8);
		$this->setBauernhof(30);
		$this->setHolzfaeller(30);
		$this->setHolzlager(20);
		$this->setSteinbruch(30);
		$this->setSteinlager(20);
		$this->setErzmine(30);
		$this->setErzlager(20);
		
		$this->setLangbogen(true);
		$this->setDreifelderwirtschaft(true);
		$this->setKummet(true);
		$this->setVorratskeller(true);
		$this->setSteigbuegel(true);
		$this->setWaffenschmied(true);
		$this->setRuestungsschmied(true);
		$this->setBierpruefer(true);
		$this->setSchwertschmied(true);
		$this->setEisenhaertung(true);
		$this->setArmbrust(true);
		$this->setGiftpfeile(true);
		$this->setPferdezucht(true);
		$this->setWaffenherstellung(true);
		$this->setPferdepanzerung(true);
		$this->setSchubkarren(true);
		$this->setBrandpfeile(true);
		$this->setHufschmied(true);
		$this->setUmgebungskarte(true);
		$this->setZisterne(true);
		
		$this->setMaxPopulation(4066);
		$this->setFreePopulation(4066);
	}
	
	public function setBoolean($postData)
	{
		if(!isset($postData['Langbogen'])) { 			$this->setLangbogen(false); }
		if(!isset($postData['Dreifelderwirtschaft'])) { $this->setDreifelderwirtschaft(false); }
		if(!isset($postData['Kummet'])) { 				$this->setKummet(false); }
		if(!isset($postData['Vorratskeller'])) { 		$this->setVorratskeller(false); }
		if(!isset($postData['Steigbuegel'])) { 			$this->setSteigbuegel(false); }
		if(!isset($postData['Waffenschmied'])) { 		$this->setWaffenschmied(false); }
		if(!isset($postData['Ruestungsschmied'])) { 	$this->setRuestungsschmied(false); }
		if(!isset($postData['Bierpruefer'])) { 			$this->setBierpruefer(false); }
		if(!isset($postData['Schwertschmied'])) {	 	$this->setSchwertschmied(false); }
		if(!isset($postData['Eisenhaertung'])) { 		$this->setEisenhaertung(false); }
		if(!isset($postData['Armbrust'])) { 			$this->setArmbrust(false); }
		if(!isset($postData['Giftpfeile'])) { 			$this->setGiftpfeile(false); }
		if(!isset($postData['Pferdezucht'])) { 			$this->setPferdezucht(false); }
		if(!isset($postData['Waffenherstellung'])) { 	$this->setWaffenherstellung(false); }
		if(!isset($postData['Pferdepanzerung'])) { 		$this->setPferdepanzerung(false); }
		if(!isset($postData['Schubkarren'])) { 			$this->setSchubkarren(false); }
		if(!isset($postData['Brandpfeile'])) { 			$this->setBrandpfeile(false); }
		if(!isset($postData['Hufschmied'])) { 			$this->setHufschmied(false); }
		if(!isset($postData['Umgebungskarte'])) { 		$this->setUmgebungskarte(false); }
		if(!isset($postData['Zisterne'])) { 			$this->setZisterne(false); }
		
	}
	
}

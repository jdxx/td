<?php



/**
 * Skeleton subclass for representing a row from the 'target' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.orm
 */
class Target extends BaseTarget
{
	public function __construct()
	{
		$this->setStartTime(false);
		$this->setUseMissionTroops(false);
		$this->setFilterCastlesOff(true);
		$this->setFilterCastlesDef(false);
		$this->setFilterCastlesMix(false);
		$this->setFilterTroopsMarker(true);
		$this->setFilterTroopsOff(true);
		$this->setFilterTroopsDef(false);
		
		$this->setSort('time');
		
		$this->setTargetSilver(0);
		$this->setTargetSk(0);
		$this->setTargetBs(0);
		$this->setTargetLr(0);
		
		$this->setTotalSilver(0);
		$this->setTotalSt(0);
		$this->setTotalSk(0);
		$this->setTotalBs(0);
		$this->setTotalAs(0);
		$this->setTotalPr(0);
		$this->setTotalLr(0);
	}
	
	public function setBoolean($postData)
	{
// 		if(isset($postData['StartTime'])) { 		$this->setStartTime(true); } 		else { $this->setStartTime(false); };
// 		if(isset($postData['UseMissionTroops'])) {  $this->setUseMissionTroops(true); } else { $this->setUseMissionTroops(false); };
// 		if(isset($postData['FilterCastlesOff'])) { 	$this->setFilterCastlesOff(true); }	else { $this->setFilterCastlesOff(false); };
// 		if(isset($postData['FilterCastlesDef'])) { 	$this->setFilterCastlesDef(true); }	else { $this->setFilterCastlesDef(false); };
// 		if(isset($postData['FilterCastlesMix'])) { 	$this->setFilterCastlesMix(true); }	else { $this->setFilterCastlesMix(false); };
// 		if(isset($postData['FilterTroopsMarker'])) {$this->setFilterTroopsMarker(true); } else { $this->setFilterTroopsMarker(false); };
// 		if(isset($postData['FilterTroopsOff']))  {  $this->setFilterTroopsOff(true); }  else { $this->setFilterTroopsOff(false); };
// 		if(isset($postData['FilterTroopsDef']))  {  $this->setFilterTroopsDef(true); }  else { $this->setFilterTroopsDef(false); };
	}
}

<?php



/**
 * Skeleton subclass for representing a row from the 'castle' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.orm
 */
class Castle extends BaseCastle
{
	public function __construct()
	{
		$this->setUser(0);
		$this->setCastleTypeId(0);
		$this->setCastleLocationId(0);
		$this->setX(0);
		$this->setY(0);
		$this->setSilver(0);
		$this->setCopper(0);
		$this->setCurrentSt(0);
		$this->setCurrentAs(0);
		$this->setCurrentPr(0);
		$this->setCurrentSk(0);
		$this->setCurrentBs(0);
		$this->setCurrentLr(0);
		$this->setCurrentHk(0);
		$this->setCurrentOk(0);
		$this->setMissionSt(0);
		$this->setMissionAs(0);
		$this->setMissionPr(0);
		$this->setMissionSk(0);
		$this->setMissionBs(0);
		$this->setMissionLr(0);
		$this->setUsageOff(false);
		$this->setUsageDef(false);
		$this->setMissionPriority(true);
		$this->setEnvironmentCard(true);
		$this->setAutodefX(0);
		$this->setAutodefY(0);
		$this->setPoints(0);
		$this->setOpenPopulation(0);
	}
	
}

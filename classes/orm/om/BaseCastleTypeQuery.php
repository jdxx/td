<?php


/**
 * Base class that represents a query for the 'castle_type' table.
 *
 *
 *
 * @method CastleTypeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CastleTypeQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method CastleTypeQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CastleTypeQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CastleTypeQuery orderByTotalSt($order = Criteria::ASC) Order by the total_st column
 * @method CastleTypeQuery orderByTotalAs($order = Criteria::ASC) Order by the total_as column
 * @method CastleTypeQuery orderByTotalPr($order = Criteria::ASC) Order by the total_pr column
 * @method CastleTypeQuery orderByTotalSk($order = Criteria::ASC) Order by the total_sk column
 * @method CastleTypeQuery orderByTotalBs($order = Criteria::ASC) Order by the total_bs column
 * @method CastleTypeQuery orderByTotalLr($order = Criteria::ASC) Order by the total_lr column
 * @method CastleTypeQuery orderByTotalHk($order = Criteria::ASC) Order by the total_hk column
 * @method CastleTypeQuery orderByTotalOk($order = Criteria::ASC) Order by the total_ok column
 * @method CastleTypeQuery orderByMissionSt($order = Criteria::ASC) Order by the mission_st column
 * @method CastleTypeQuery orderByMissionAs($order = Criteria::ASC) Order by the mission_as column
 * @method CastleTypeQuery orderByMissionPr($order = Criteria::ASC) Order by the mission_pr column
 * @method CastleTypeQuery orderByMissionSk($order = Criteria::ASC) Order by the mission_sk column
 * @method CastleTypeQuery orderByMissionBs($order = Criteria::ASC) Order by the mission_bs column
 * @method CastleTypeQuery orderByMissionLr($order = Criteria::ASC) Order by the mission_lr column
 * @method CastleTypeQuery orderByBergfried($order = Criteria::ASC) Order by the bergfried column
 * @method CastleTypeQuery orderByZeughaus($order = Criteria::ASC) Order by the zeughaus column
 * @method CastleTypeQuery orderByTaverne($order = Criteria::ASC) Order by the taverne column
 * @method CastleTypeQuery orderByBibliothek($order = Criteria::ASC) Order by the bibliothek column
 * @method CastleTypeQuery orderByWehranlage($order = Criteria::ASC) Order by the wehranlage column
 * @method CastleTypeQuery orderByMarkt($order = Criteria::ASC) Order by the markt column
 * @method CastleTypeQuery orderByBauernhof($order = Criteria::ASC) Order by the bauernhof column
 * @method CastleTypeQuery orderByHolzfaeller($order = Criteria::ASC) Order by the holzfaeller column
 * @method CastleTypeQuery orderByHolzlager($order = Criteria::ASC) Order by the holzlager column
 * @method CastleTypeQuery orderBySteinbruch($order = Criteria::ASC) Order by the steinbruch column
 * @method CastleTypeQuery orderBySteinlager($order = Criteria::ASC) Order by the steinlager column
 * @method CastleTypeQuery orderByErzmine($order = Criteria::ASC) Order by the erzmine column
 * @method CastleTypeQuery orderByErzlager($order = Criteria::ASC) Order by the erzlager column
 * @method CastleTypeQuery orderByLangbogen($order = Criteria::ASC) Order by the langbogen column
 * @method CastleTypeQuery orderByDreifelderwirtschaft($order = Criteria::ASC) Order by the dreifelderwirtschaft column
 * @method CastleTypeQuery orderByKummet($order = Criteria::ASC) Order by the kummet column
 * @method CastleTypeQuery orderByVorratskeller($order = Criteria::ASC) Order by the vorratskeller column
 * @method CastleTypeQuery orderBySteigbuegel($order = Criteria::ASC) Order by the steigbuegel column
 * @method CastleTypeQuery orderByWaffenschmied($order = Criteria::ASC) Order by the waffenschmied column
 * @method CastleTypeQuery orderByRuestungsschmied($order = Criteria::ASC) Order by the ruestungsschmied column
 * @method CastleTypeQuery orderByBierpruefer($order = Criteria::ASC) Order by the bierpruefer column
 * @method CastleTypeQuery orderBySchwertschmied($order = Criteria::ASC) Order by the schwertschmied column
 * @method CastleTypeQuery orderByEisenhaertung($order = Criteria::ASC) Order by the eisenhaertung column
 * @method CastleTypeQuery orderByArmbrust($order = Criteria::ASC) Order by the armbrust column
 * @method CastleTypeQuery orderByGiftpfeile($order = Criteria::ASC) Order by the giftpfeile column
 * @method CastleTypeQuery orderByPferdezucht($order = Criteria::ASC) Order by the pferdezucht column
 * @method CastleTypeQuery orderByWaffenherstellung($order = Criteria::ASC) Order by the waffenherstellung column
 * @method CastleTypeQuery orderByPferdepanzerung($order = Criteria::ASC) Order by the pferdepanzerung column
 * @method CastleTypeQuery orderBySchubkarren($order = Criteria::ASC) Order by the schubkarren column
 * @method CastleTypeQuery orderByBrandpfeile($order = Criteria::ASC) Order by the brandpfeile column
 * @method CastleTypeQuery orderByHufschmied($order = Criteria::ASC) Order by the hufschmied column
 * @method CastleTypeQuery orderByUmgebungskarte($order = Criteria::ASC) Order by the umgebungskarte column
 * @method CastleTypeQuery orderByZisterne($order = Criteria::ASC) Order by the zisterne column
 * @method CastleTypeQuery orderByMaxPopulation($order = Criteria::ASC) Order by the max_population column
 * @method CastleTypeQuery orderByFreePopulation($order = Criteria::ASC) Order by the free_population column
 * @method CastleTypeQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method CastleTypeQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method CastleTypeQuery groupById() Group by the id column
 * @method CastleTypeQuery groupByUserId() Group by the user_id column
 * @method CastleTypeQuery groupByType() Group by the type column
 * @method CastleTypeQuery groupByName() Group by the name column
 * @method CastleTypeQuery groupByTotalSt() Group by the total_st column
 * @method CastleTypeQuery groupByTotalAs() Group by the total_as column
 * @method CastleTypeQuery groupByTotalPr() Group by the total_pr column
 * @method CastleTypeQuery groupByTotalSk() Group by the total_sk column
 * @method CastleTypeQuery groupByTotalBs() Group by the total_bs column
 * @method CastleTypeQuery groupByTotalLr() Group by the total_lr column
 * @method CastleTypeQuery groupByTotalHk() Group by the total_hk column
 * @method CastleTypeQuery groupByTotalOk() Group by the total_ok column
 * @method CastleTypeQuery groupByMissionSt() Group by the mission_st column
 * @method CastleTypeQuery groupByMissionAs() Group by the mission_as column
 * @method CastleTypeQuery groupByMissionPr() Group by the mission_pr column
 * @method CastleTypeQuery groupByMissionSk() Group by the mission_sk column
 * @method CastleTypeQuery groupByMissionBs() Group by the mission_bs column
 * @method CastleTypeQuery groupByMissionLr() Group by the mission_lr column
 * @method CastleTypeQuery groupByBergfried() Group by the bergfried column
 * @method CastleTypeQuery groupByZeughaus() Group by the zeughaus column
 * @method CastleTypeQuery groupByTaverne() Group by the taverne column
 * @method CastleTypeQuery groupByBibliothek() Group by the bibliothek column
 * @method CastleTypeQuery groupByWehranlage() Group by the wehranlage column
 * @method CastleTypeQuery groupByMarkt() Group by the markt column
 * @method CastleTypeQuery groupByBauernhof() Group by the bauernhof column
 * @method CastleTypeQuery groupByHolzfaeller() Group by the holzfaeller column
 * @method CastleTypeQuery groupByHolzlager() Group by the holzlager column
 * @method CastleTypeQuery groupBySteinbruch() Group by the steinbruch column
 * @method CastleTypeQuery groupBySteinlager() Group by the steinlager column
 * @method CastleTypeQuery groupByErzmine() Group by the erzmine column
 * @method CastleTypeQuery groupByErzlager() Group by the erzlager column
 * @method CastleTypeQuery groupByLangbogen() Group by the langbogen column
 * @method CastleTypeQuery groupByDreifelderwirtschaft() Group by the dreifelderwirtschaft column
 * @method CastleTypeQuery groupByKummet() Group by the kummet column
 * @method CastleTypeQuery groupByVorratskeller() Group by the vorratskeller column
 * @method CastleTypeQuery groupBySteigbuegel() Group by the steigbuegel column
 * @method CastleTypeQuery groupByWaffenschmied() Group by the waffenschmied column
 * @method CastleTypeQuery groupByRuestungsschmied() Group by the ruestungsschmied column
 * @method CastleTypeQuery groupByBierpruefer() Group by the bierpruefer column
 * @method CastleTypeQuery groupBySchwertschmied() Group by the schwertschmied column
 * @method CastleTypeQuery groupByEisenhaertung() Group by the eisenhaertung column
 * @method CastleTypeQuery groupByArmbrust() Group by the armbrust column
 * @method CastleTypeQuery groupByGiftpfeile() Group by the giftpfeile column
 * @method CastleTypeQuery groupByPferdezucht() Group by the pferdezucht column
 * @method CastleTypeQuery groupByWaffenherstellung() Group by the waffenherstellung column
 * @method CastleTypeQuery groupByPferdepanzerung() Group by the pferdepanzerung column
 * @method CastleTypeQuery groupBySchubkarren() Group by the schubkarren column
 * @method CastleTypeQuery groupByBrandpfeile() Group by the brandpfeile column
 * @method CastleTypeQuery groupByHufschmied() Group by the hufschmied column
 * @method CastleTypeQuery groupByUmgebungskarte() Group by the umgebungskarte column
 * @method CastleTypeQuery groupByZisterne() Group by the zisterne column
 * @method CastleTypeQuery groupByMaxPopulation() Group by the max_population column
 * @method CastleTypeQuery groupByFreePopulation() Group by the free_population column
 * @method CastleTypeQuery groupByCreatedAt() Group by the created_at column
 * @method CastleTypeQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method CastleTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CastleTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CastleTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CastleTypeQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method CastleTypeQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method CastleTypeQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method CastleTypeQuery leftJoinCastle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Castle relation
 * @method CastleTypeQuery rightJoinCastle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Castle relation
 * @method CastleTypeQuery innerJoinCastle($relationAlias = null) Adds a INNER JOIN clause to the query using the Castle relation
 *
 * @method CastleType findOne(PropelPDO $con = null) Return the first CastleType matching the query
 * @method CastleType findOneOrCreate(PropelPDO $con = null) Return the first CastleType matching the query, or a new CastleType object populated from the query conditions when no match is found
 *
 * @method CastleType findOneByUserId(int $user_id) Return the first CastleType filtered by the user_id column
 * @method CastleType findOneByType(string $type) Return the first CastleType filtered by the type column
 * @method CastleType findOneByName(string $name) Return the first CastleType filtered by the name column
 * @method CastleType findOneByTotalSt(int $total_st) Return the first CastleType filtered by the total_st column
 * @method CastleType findOneByTotalAs(int $total_as) Return the first CastleType filtered by the total_as column
 * @method CastleType findOneByTotalPr(int $total_pr) Return the first CastleType filtered by the total_pr column
 * @method CastleType findOneByTotalSk(int $total_sk) Return the first CastleType filtered by the total_sk column
 * @method CastleType findOneByTotalBs(int $total_bs) Return the first CastleType filtered by the total_bs column
 * @method CastleType findOneByTotalLr(int $total_lr) Return the first CastleType filtered by the total_lr column
 * @method CastleType findOneByTotalHk(int $total_hk) Return the first CastleType filtered by the total_hk column
 * @method CastleType findOneByTotalOk(int $total_ok) Return the first CastleType filtered by the total_ok column
 * @method CastleType findOneByMissionSt(int $mission_st) Return the first CastleType filtered by the mission_st column
 * @method CastleType findOneByMissionAs(int $mission_as) Return the first CastleType filtered by the mission_as column
 * @method CastleType findOneByMissionPr(int $mission_pr) Return the first CastleType filtered by the mission_pr column
 * @method CastleType findOneByMissionSk(int $mission_sk) Return the first CastleType filtered by the mission_sk column
 * @method CastleType findOneByMissionBs(int $mission_bs) Return the first CastleType filtered by the mission_bs column
 * @method CastleType findOneByMissionLr(int $mission_lr) Return the first CastleType filtered by the mission_lr column
 * @method CastleType findOneByBergfried(int $bergfried) Return the first CastleType filtered by the bergfried column
 * @method CastleType findOneByZeughaus(int $zeughaus) Return the first CastleType filtered by the zeughaus column
 * @method CastleType findOneByTaverne(int $taverne) Return the first CastleType filtered by the taverne column
 * @method CastleType findOneByBibliothek(int $bibliothek) Return the first CastleType filtered by the bibliothek column
 * @method CastleType findOneByWehranlage(int $wehranlage) Return the first CastleType filtered by the wehranlage column
 * @method CastleType findOneByMarkt(int $markt) Return the first CastleType filtered by the markt column
 * @method CastleType findOneByBauernhof(int $bauernhof) Return the first CastleType filtered by the bauernhof column
 * @method CastleType findOneByHolzfaeller(int $holzfaeller) Return the first CastleType filtered by the holzfaeller column
 * @method CastleType findOneByHolzlager(int $holzlager) Return the first CastleType filtered by the holzlager column
 * @method CastleType findOneBySteinbruch(int $steinbruch) Return the first CastleType filtered by the steinbruch column
 * @method CastleType findOneBySteinlager(int $steinlager) Return the first CastleType filtered by the steinlager column
 * @method CastleType findOneByErzmine(int $erzmine) Return the first CastleType filtered by the erzmine column
 * @method CastleType findOneByErzlager(int $erzlager) Return the first CastleType filtered by the erzlager column
 * @method CastleType findOneByLangbogen(boolean $langbogen) Return the first CastleType filtered by the langbogen column
 * @method CastleType findOneByDreifelderwirtschaft(boolean $dreifelderwirtschaft) Return the first CastleType filtered by the dreifelderwirtschaft column
 * @method CastleType findOneByKummet(boolean $kummet) Return the first CastleType filtered by the kummet column
 * @method CastleType findOneByVorratskeller(boolean $vorratskeller) Return the first CastleType filtered by the vorratskeller column
 * @method CastleType findOneBySteigbuegel(boolean $steigbuegel) Return the first CastleType filtered by the steigbuegel column
 * @method CastleType findOneByWaffenschmied(boolean $waffenschmied) Return the first CastleType filtered by the waffenschmied column
 * @method CastleType findOneByRuestungsschmied(boolean $ruestungsschmied) Return the first CastleType filtered by the ruestungsschmied column
 * @method CastleType findOneByBierpruefer(boolean $bierpruefer) Return the first CastleType filtered by the bierpruefer column
 * @method CastleType findOneBySchwertschmied(boolean $schwertschmied) Return the first CastleType filtered by the schwertschmied column
 * @method CastleType findOneByEisenhaertung(boolean $eisenhaertung) Return the first CastleType filtered by the eisenhaertung column
 * @method CastleType findOneByArmbrust(boolean $armbrust) Return the first CastleType filtered by the armbrust column
 * @method CastleType findOneByGiftpfeile(boolean $giftpfeile) Return the first CastleType filtered by the giftpfeile column
 * @method CastleType findOneByPferdezucht(boolean $pferdezucht) Return the first CastleType filtered by the pferdezucht column
 * @method CastleType findOneByWaffenherstellung(boolean $waffenherstellung) Return the first CastleType filtered by the waffenherstellung column
 * @method CastleType findOneByPferdepanzerung(boolean $pferdepanzerung) Return the first CastleType filtered by the pferdepanzerung column
 * @method CastleType findOneBySchubkarren(boolean $schubkarren) Return the first CastleType filtered by the schubkarren column
 * @method CastleType findOneByBrandpfeile(boolean $brandpfeile) Return the first CastleType filtered by the brandpfeile column
 * @method CastleType findOneByHufschmied(boolean $hufschmied) Return the first CastleType filtered by the hufschmied column
 * @method CastleType findOneByUmgebungskarte(boolean $umgebungskarte) Return the first CastleType filtered by the umgebungskarte column
 * @method CastleType findOneByZisterne(boolean $zisterne) Return the first CastleType filtered by the zisterne column
 * @method CastleType findOneByMaxPopulation(int $max_population) Return the first CastleType filtered by the max_population column
 * @method CastleType findOneByFreePopulation(int $free_population) Return the first CastleType filtered by the free_population column
 * @method CastleType findOneByCreatedAt(string $created_at) Return the first CastleType filtered by the created_at column
 * @method CastleType findOneByUpdatedAt(string $updated_at) Return the first CastleType filtered by the updated_at column
 *
 * @method array findById(int $id) Return CastleType objects filtered by the id column
 * @method array findByUserId(int $user_id) Return CastleType objects filtered by the user_id column
 * @method array findByType(string $type) Return CastleType objects filtered by the type column
 * @method array findByName(string $name) Return CastleType objects filtered by the name column
 * @method array findByTotalSt(int $total_st) Return CastleType objects filtered by the total_st column
 * @method array findByTotalAs(int $total_as) Return CastleType objects filtered by the total_as column
 * @method array findByTotalPr(int $total_pr) Return CastleType objects filtered by the total_pr column
 * @method array findByTotalSk(int $total_sk) Return CastleType objects filtered by the total_sk column
 * @method array findByTotalBs(int $total_bs) Return CastleType objects filtered by the total_bs column
 * @method array findByTotalLr(int $total_lr) Return CastleType objects filtered by the total_lr column
 * @method array findByTotalHk(int $total_hk) Return CastleType objects filtered by the total_hk column
 * @method array findByTotalOk(int $total_ok) Return CastleType objects filtered by the total_ok column
 * @method array findByMissionSt(int $mission_st) Return CastleType objects filtered by the mission_st column
 * @method array findByMissionAs(int $mission_as) Return CastleType objects filtered by the mission_as column
 * @method array findByMissionPr(int $mission_pr) Return CastleType objects filtered by the mission_pr column
 * @method array findByMissionSk(int $mission_sk) Return CastleType objects filtered by the mission_sk column
 * @method array findByMissionBs(int $mission_bs) Return CastleType objects filtered by the mission_bs column
 * @method array findByMissionLr(int $mission_lr) Return CastleType objects filtered by the mission_lr column
 * @method array findByBergfried(int $bergfried) Return CastleType objects filtered by the bergfried column
 * @method array findByZeughaus(int $zeughaus) Return CastleType objects filtered by the zeughaus column
 * @method array findByTaverne(int $taverne) Return CastleType objects filtered by the taverne column
 * @method array findByBibliothek(int $bibliothek) Return CastleType objects filtered by the bibliothek column
 * @method array findByWehranlage(int $wehranlage) Return CastleType objects filtered by the wehranlage column
 * @method array findByMarkt(int $markt) Return CastleType objects filtered by the markt column
 * @method array findByBauernhof(int $bauernhof) Return CastleType objects filtered by the bauernhof column
 * @method array findByHolzfaeller(int $holzfaeller) Return CastleType objects filtered by the holzfaeller column
 * @method array findByHolzlager(int $holzlager) Return CastleType objects filtered by the holzlager column
 * @method array findBySteinbruch(int $steinbruch) Return CastleType objects filtered by the steinbruch column
 * @method array findBySteinlager(int $steinlager) Return CastleType objects filtered by the steinlager column
 * @method array findByErzmine(int $erzmine) Return CastleType objects filtered by the erzmine column
 * @method array findByErzlager(int $erzlager) Return CastleType objects filtered by the erzlager column
 * @method array findByLangbogen(boolean $langbogen) Return CastleType objects filtered by the langbogen column
 * @method array findByDreifelderwirtschaft(boolean $dreifelderwirtschaft) Return CastleType objects filtered by the dreifelderwirtschaft column
 * @method array findByKummet(boolean $kummet) Return CastleType objects filtered by the kummet column
 * @method array findByVorratskeller(boolean $vorratskeller) Return CastleType objects filtered by the vorratskeller column
 * @method array findBySteigbuegel(boolean $steigbuegel) Return CastleType objects filtered by the steigbuegel column
 * @method array findByWaffenschmied(boolean $waffenschmied) Return CastleType objects filtered by the waffenschmied column
 * @method array findByRuestungsschmied(boolean $ruestungsschmied) Return CastleType objects filtered by the ruestungsschmied column
 * @method array findByBierpruefer(boolean $bierpruefer) Return CastleType objects filtered by the bierpruefer column
 * @method array findBySchwertschmied(boolean $schwertschmied) Return CastleType objects filtered by the schwertschmied column
 * @method array findByEisenhaertung(boolean $eisenhaertung) Return CastleType objects filtered by the eisenhaertung column
 * @method array findByArmbrust(boolean $armbrust) Return CastleType objects filtered by the armbrust column
 * @method array findByGiftpfeile(boolean $giftpfeile) Return CastleType objects filtered by the giftpfeile column
 * @method array findByPferdezucht(boolean $pferdezucht) Return CastleType objects filtered by the pferdezucht column
 * @method array findByWaffenherstellung(boolean $waffenherstellung) Return CastleType objects filtered by the waffenherstellung column
 * @method array findByPferdepanzerung(boolean $pferdepanzerung) Return CastleType objects filtered by the pferdepanzerung column
 * @method array findBySchubkarren(boolean $schubkarren) Return CastleType objects filtered by the schubkarren column
 * @method array findByBrandpfeile(boolean $brandpfeile) Return CastleType objects filtered by the brandpfeile column
 * @method array findByHufschmied(boolean $hufschmied) Return CastleType objects filtered by the hufschmied column
 * @method array findByUmgebungskarte(boolean $umgebungskarte) Return CastleType objects filtered by the umgebungskarte column
 * @method array findByZisterne(boolean $zisterne) Return CastleType objects filtered by the zisterne column
 * @method array findByMaxPopulation(int $max_population) Return CastleType objects filtered by the max_population column
 * @method array findByFreePopulation(int $free_population) Return CastleType objects filtered by the free_population column
 * @method array findByCreatedAt(string $created_at) Return CastleType objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return CastleType objects filtered by the updated_at column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastleTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCastleTypeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'TotalDefense';
        }
        if (null === $modelName) {
            $modelName = 'CastleType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CastleTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CastleTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CastleTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CastleTypeQuery) {
            return $criteria;
        }
        $query = new CastleTypeQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CastleType|CastleType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CastleTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CastleType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CastleType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `type`, `name`, `total_st`, `total_as`, `total_pr`, `total_sk`, `total_bs`, `total_lr`, `total_hk`, `total_ok`, `mission_st`, `mission_as`, `mission_pr`, `mission_sk`, `mission_bs`, `mission_lr`, `bergfried`, `zeughaus`, `taverne`, `bibliothek`, `wehranlage`, `markt`, `bauernhof`, `holzfaeller`, `holzlager`, `steinbruch`, `steinlager`, `erzmine`, `erzlager`, `langbogen`, `dreifelderwirtschaft`, `kummet`, `vorratskeller`, `steigbuegel`, `waffenschmied`, `ruestungsschmied`, `bierpruefer`, `schwertschmied`, `eisenhaertung`, `armbrust`, `giftpfeile`, `pferdezucht`, `waffenherstellung`, `pferdepanzerung`, `schubkarren`, `brandpfeile`, `hufschmied`, `umgebungskarte`, `zisterne`, `max_population`, `free_population`, `created_at`, `updated_at` FROM `castle_type` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CastleType();
            $obj->hydrate($row);
            CastleTypePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CastleType|CastleType[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CastleType[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CastleTypePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CastleTypePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CastleTypePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CastleTypePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(CastleTypePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(CastleTypePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the total_st column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalSt(1234); // WHERE total_st = 1234
     * $query->filterByTotalSt(array(12, 34)); // WHERE total_st IN (12, 34)
     * $query->filterByTotalSt(array('min' => 12)); // WHERE total_st >= 12
     * $query->filterByTotalSt(array('max' => 12)); // WHERE total_st <= 12
     * </code>
     *
     * @param     mixed $totalSt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalSt($totalSt = null, $comparison = null)
    {
        if (is_array($totalSt)) {
            $useMinMax = false;
            if (isset($totalSt['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_ST, $totalSt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalSt['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_ST, $totalSt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_ST, $totalSt, $comparison);
    }

    /**
     * Filter the query on the total_as column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalAs(1234); // WHERE total_as = 1234
     * $query->filterByTotalAs(array(12, 34)); // WHERE total_as IN (12, 34)
     * $query->filterByTotalAs(array('min' => 12)); // WHERE total_as >= 12
     * $query->filterByTotalAs(array('max' => 12)); // WHERE total_as <= 12
     * </code>
     *
     * @param     mixed $totalAs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalAs($totalAs = null, $comparison = null)
    {
        if (is_array($totalAs)) {
            $useMinMax = false;
            if (isset($totalAs['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_AS, $totalAs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalAs['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_AS, $totalAs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_AS, $totalAs, $comparison);
    }

    /**
     * Filter the query on the total_pr column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalPr(1234); // WHERE total_pr = 1234
     * $query->filterByTotalPr(array(12, 34)); // WHERE total_pr IN (12, 34)
     * $query->filterByTotalPr(array('min' => 12)); // WHERE total_pr >= 12
     * $query->filterByTotalPr(array('max' => 12)); // WHERE total_pr <= 12
     * </code>
     *
     * @param     mixed $totalPr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalPr($totalPr = null, $comparison = null)
    {
        if (is_array($totalPr)) {
            $useMinMax = false;
            if (isset($totalPr['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_PR, $totalPr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalPr['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_PR, $totalPr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_PR, $totalPr, $comparison);
    }

    /**
     * Filter the query on the total_sk column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalSk(1234); // WHERE total_sk = 1234
     * $query->filterByTotalSk(array(12, 34)); // WHERE total_sk IN (12, 34)
     * $query->filterByTotalSk(array('min' => 12)); // WHERE total_sk >= 12
     * $query->filterByTotalSk(array('max' => 12)); // WHERE total_sk <= 12
     * </code>
     *
     * @param     mixed $totalSk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalSk($totalSk = null, $comparison = null)
    {
        if (is_array($totalSk)) {
            $useMinMax = false;
            if (isset($totalSk['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_SK, $totalSk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalSk['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_SK, $totalSk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_SK, $totalSk, $comparison);
    }

    /**
     * Filter the query on the total_bs column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalBs(1234); // WHERE total_bs = 1234
     * $query->filterByTotalBs(array(12, 34)); // WHERE total_bs IN (12, 34)
     * $query->filterByTotalBs(array('min' => 12)); // WHERE total_bs >= 12
     * $query->filterByTotalBs(array('max' => 12)); // WHERE total_bs <= 12
     * </code>
     *
     * @param     mixed $totalBs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalBs($totalBs = null, $comparison = null)
    {
        if (is_array($totalBs)) {
            $useMinMax = false;
            if (isset($totalBs['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_BS, $totalBs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalBs['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_BS, $totalBs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_BS, $totalBs, $comparison);
    }

    /**
     * Filter the query on the total_lr column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalLr(1234); // WHERE total_lr = 1234
     * $query->filterByTotalLr(array(12, 34)); // WHERE total_lr IN (12, 34)
     * $query->filterByTotalLr(array('min' => 12)); // WHERE total_lr >= 12
     * $query->filterByTotalLr(array('max' => 12)); // WHERE total_lr <= 12
     * </code>
     *
     * @param     mixed $totalLr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalLr($totalLr = null, $comparison = null)
    {
        if (is_array($totalLr)) {
            $useMinMax = false;
            if (isset($totalLr['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_LR, $totalLr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalLr['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_LR, $totalLr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_LR, $totalLr, $comparison);
    }

    /**
     * Filter the query on the total_hk column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalHk(1234); // WHERE total_hk = 1234
     * $query->filterByTotalHk(array(12, 34)); // WHERE total_hk IN (12, 34)
     * $query->filterByTotalHk(array('min' => 12)); // WHERE total_hk >= 12
     * $query->filterByTotalHk(array('max' => 12)); // WHERE total_hk <= 12
     * </code>
     *
     * @param     mixed $totalHk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalHk($totalHk = null, $comparison = null)
    {
        if (is_array($totalHk)) {
            $useMinMax = false;
            if (isset($totalHk['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_HK, $totalHk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalHk['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_HK, $totalHk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_HK, $totalHk, $comparison);
    }

    /**
     * Filter the query on the total_ok column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalOk(1234); // WHERE total_ok = 1234
     * $query->filterByTotalOk(array(12, 34)); // WHERE total_ok IN (12, 34)
     * $query->filterByTotalOk(array('min' => 12)); // WHERE total_ok >= 12
     * $query->filterByTotalOk(array('max' => 12)); // WHERE total_ok <= 12
     * </code>
     *
     * @param     mixed $totalOk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTotalOk($totalOk = null, $comparison = null)
    {
        if (is_array($totalOk)) {
            $useMinMax = false;
            if (isset($totalOk['min'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_OK, $totalOk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalOk['max'])) {
                $this->addUsingAlias(CastleTypePeer::TOTAL_OK, $totalOk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TOTAL_OK, $totalOk, $comparison);
    }

    /**
     * Filter the query on the mission_st column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionSt(1234); // WHERE mission_st = 1234
     * $query->filterByMissionSt(array(12, 34)); // WHERE mission_st IN (12, 34)
     * $query->filterByMissionSt(array('min' => 12)); // WHERE mission_st >= 12
     * $query->filterByMissionSt(array('max' => 12)); // WHERE mission_st <= 12
     * </code>
     *
     * @param     mixed $missionSt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMissionSt($missionSt = null, $comparison = null)
    {
        if (is_array($missionSt)) {
            $useMinMax = false;
            if (isset($missionSt['min'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_ST, $missionSt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionSt['max'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_ST, $missionSt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MISSION_ST, $missionSt, $comparison);
    }

    /**
     * Filter the query on the mission_as column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionAs(1234); // WHERE mission_as = 1234
     * $query->filterByMissionAs(array(12, 34)); // WHERE mission_as IN (12, 34)
     * $query->filterByMissionAs(array('min' => 12)); // WHERE mission_as >= 12
     * $query->filterByMissionAs(array('max' => 12)); // WHERE mission_as <= 12
     * </code>
     *
     * @param     mixed $missionAs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMissionAs($missionAs = null, $comparison = null)
    {
        if (is_array($missionAs)) {
            $useMinMax = false;
            if (isset($missionAs['min'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_AS, $missionAs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionAs['max'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_AS, $missionAs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MISSION_AS, $missionAs, $comparison);
    }

    /**
     * Filter the query on the mission_pr column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionPr(1234); // WHERE mission_pr = 1234
     * $query->filterByMissionPr(array(12, 34)); // WHERE mission_pr IN (12, 34)
     * $query->filterByMissionPr(array('min' => 12)); // WHERE mission_pr >= 12
     * $query->filterByMissionPr(array('max' => 12)); // WHERE mission_pr <= 12
     * </code>
     *
     * @param     mixed $missionPr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMissionPr($missionPr = null, $comparison = null)
    {
        if (is_array($missionPr)) {
            $useMinMax = false;
            if (isset($missionPr['min'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_PR, $missionPr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionPr['max'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_PR, $missionPr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MISSION_PR, $missionPr, $comparison);
    }

    /**
     * Filter the query on the mission_sk column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionSk(1234); // WHERE mission_sk = 1234
     * $query->filterByMissionSk(array(12, 34)); // WHERE mission_sk IN (12, 34)
     * $query->filterByMissionSk(array('min' => 12)); // WHERE mission_sk >= 12
     * $query->filterByMissionSk(array('max' => 12)); // WHERE mission_sk <= 12
     * </code>
     *
     * @param     mixed $missionSk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMissionSk($missionSk = null, $comparison = null)
    {
        if (is_array($missionSk)) {
            $useMinMax = false;
            if (isset($missionSk['min'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_SK, $missionSk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionSk['max'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_SK, $missionSk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MISSION_SK, $missionSk, $comparison);
    }

    /**
     * Filter the query on the mission_bs column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionBs(1234); // WHERE mission_bs = 1234
     * $query->filterByMissionBs(array(12, 34)); // WHERE mission_bs IN (12, 34)
     * $query->filterByMissionBs(array('min' => 12)); // WHERE mission_bs >= 12
     * $query->filterByMissionBs(array('max' => 12)); // WHERE mission_bs <= 12
     * </code>
     *
     * @param     mixed $missionBs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMissionBs($missionBs = null, $comparison = null)
    {
        if (is_array($missionBs)) {
            $useMinMax = false;
            if (isset($missionBs['min'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_BS, $missionBs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionBs['max'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_BS, $missionBs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MISSION_BS, $missionBs, $comparison);
    }

    /**
     * Filter the query on the mission_lr column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionLr(1234); // WHERE mission_lr = 1234
     * $query->filterByMissionLr(array(12, 34)); // WHERE mission_lr IN (12, 34)
     * $query->filterByMissionLr(array('min' => 12)); // WHERE mission_lr >= 12
     * $query->filterByMissionLr(array('max' => 12)); // WHERE mission_lr <= 12
     * </code>
     *
     * @param     mixed $missionLr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMissionLr($missionLr = null, $comparison = null)
    {
        if (is_array($missionLr)) {
            $useMinMax = false;
            if (isset($missionLr['min'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_LR, $missionLr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionLr['max'])) {
                $this->addUsingAlias(CastleTypePeer::MISSION_LR, $missionLr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MISSION_LR, $missionLr, $comparison);
    }

    /**
     * Filter the query on the bergfried column
     *
     * Example usage:
     * <code>
     * $query->filterByBergfried(1234); // WHERE bergfried = 1234
     * $query->filterByBergfried(array(12, 34)); // WHERE bergfried IN (12, 34)
     * $query->filterByBergfried(array('min' => 12)); // WHERE bergfried >= 12
     * $query->filterByBergfried(array('max' => 12)); // WHERE bergfried <= 12
     * </code>
     *
     * @param     mixed $bergfried The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByBergfried($bergfried = null, $comparison = null)
    {
        if (is_array($bergfried)) {
            $useMinMax = false;
            if (isset($bergfried['min'])) {
                $this->addUsingAlias(CastleTypePeer::BERGFRIED, $bergfried['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bergfried['max'])) {
                $this->addUsingAlias(CastleTypePeer::BERGFRIED, $bergfried['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::BERGFRIED, $bergfried, $comparison);
    }

    /**
     * Filter the query on the zeughaus column
     *
     * Example usage:
     * <code>
     * $query->filterByZeughaus(1234); // WHERE zeughaus = 1234
     * $query->filterByZeughaus(array(12, 34)); // WHERE zeughaus IN (12, 34)
     * $query->filterByZeughaus(array('min' => 12)); // WHERE zeughaus >= 12
     * $query->filterByZeughaus(array('max' => 12)); // WHERE zeughaus <= 12
     * </code>
     *
     * @param     mixed $zeughaus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByZeughaus($zeughaus = null, $comparison = null)
    {
        if (is_array($zeughaus)) {
            $useMinMax = false;
            if (isset($zeughaus['min'])) {
                $this->addUsingAlias(CastleTypePeer::ZEUGHAUS, $zeughaus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zeughaus['max'])) {
                $this->addUsingAlias(CastleTypePeer::ZEUGHAUS, $zeughaus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::ZEUGHAUS, $zeughaus, $comparison);
    }

    /**
     * Filter the query on the taverne column
     *
     * Example usage:
     * <code>
     * $query->filterByTaverne(1234); // WHERE taverne = 1234
     * $query->filterByTaverne(array(12, 34)); // WHERE taverne IN (12, 34)
     * $query->filterByTaverne(array('min' => 12)); // WHERE taverne >= 12
     * $query->filterByTaverne(array('max' => 12)); // WHERE taverne <= 12
     * </code>
     *
     * @param     mixed $taverne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByTaverne($taverne = null, $comparison = null)
    {
        if (is_array($taverne)) {
            $useMinMax = false;
            if (isset($taverne['min'])) {
                $this->addUsingAlias(CastleTypePeer::TAVERNE, $taverne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taverne['max'])) {
                $this->addUsingAlias(CastleTypePeer::TAVERNE, $taverne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::TAVERNE, $taverne, $comparison);
    }

    /**
     * Filter the query on the bibliothek column
     *
     * Example usage:
     * <code>
     * $query->filterByBibliothek(1234); // WHERE bibliothek = 1234
     * $query->filterByBibliothek(array(12, 34)); // WHERE bibliothek IN (12, 34)
     * $query->filterByBibliothek(array('min' => 12)); // WHERE bibliothek >= 12
     * $query->filterByBibliothek(array('max' => 12)); // WHERE bibliothek <= 12
     * </code>
     *
     * @param     mixed $bibliothek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByBibliothek($bibliothek = null, $comparison = null)
    {
        if (is_array($bibliothek)) {
            $useMinMax = false;
            if (isset($bibliothek['min'])) {
                $this->addUsingAlias(CastleTypePeer::BIBLIOTHEK, $bibliothek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bibliothek['max'])) {
                $this->addUsingAlias(CastleTypePeer::BIBLIOTHEK, $bibliothek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::BIBLIOTHEK, $bibliothek, $comparison);
    }

    /**
     * Filter the query on the wehranlage column
     *
     * Example usage:
     * <code>
     * $query->filterByWehranlage(1234); // WHERE wehranlage = 1234
     * $query->filterByWehranlage(array(12, 34)); // WHERE wehranlage IN (12, 34)
     * $query->filterByWehranlage(array('min' => 12)); // WHERE wehranlage >= 12
     * $query->filterByWehranlage(array('max' => 12)); // WHERE wehranlage <= 12
     * </code>
     *
     * @param     mixed $wehranlage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByWehranlage($wehranlage = null, $comparison = null)
    {
        if (is_array($wehranlage)) {
            $useMinMax = false;
            if (isset($wehranlage['min'])) {
                $this->addUsingAlias(CastleTypePeer::WEHRANLAGE, $wehranlage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wehranlage['max'])) {
                $this->addUsingAlias(CastleTypePeer::WEHRANLAGE, $wehranlage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::WEHRANLAGE, $wehranlage, $comparison);
    }

    /**
     * Filter the query on the markt column
     *
     * Example usage:
     * <code>
     * $query->filterByMarkt(1234); // WHERE markt = 1234
     * $query->filterByMarkt(array(12, 34)); // WHERE markt IN (12, 34)
     * $query->filterByMarkt(array('min' => 12)); // WHERE markt >= 12
     * $query->filterByMarkt(array('max' => 12)); // WHERE markt <= 12
     * </code>
     *
     * @param     mixed $markt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMarkt($markt = null, $comparison = null)
    {
        if (is_array($markt)) {
            $useMinMax = false;
            if (isset($markt['min'])) {
                $this->addUsingAlias(CastleTypePeer::MARKT, $markt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($markt['max'])) {
                $this->addUsingAlias(CastleTypePeer::MARKT, $markt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MARKT, $markt, $comparison);
    }

    /**
     * Filter the query on the bauernhof column
     *
     * Example usage:
     * <code>
     * $query->filterByBauernhof(1234); // WHERE bauernhof = 1234
     * $query->filterByBauernhof(array(12, 34)); // WHERE bauernhof IN (12, 34)
     * $query->filterByBauernhof(array('min' => 12)); // WHERE bauernhof >= 12
     * $query->filterByBauernhof(array('max' => 12)); // WHERE bauernhof <= 12
     * </code>
     *
     * @param     mixed $bauernhof The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByBauernhof($bauernhof = null, $comparison = null)
    {
        if (is_array($bauernhof)) {
            $useMinMax = false;
            if (isset($bauernhof['min'])) {
                $this->addUsingAlias(CastleTypePeer::BAUERNHOF, $bauernhof['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bauernhof['max'])) {
                $this->addUsingAlias(CastleTypePeer::BAUERNHOF, $bauernhof['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::BAUERNHOF, $bauernhof, $comparison);
    }

    /**
     * Filter the query on the holzfaeller column
     *
     * Example usage:
     * <code>
     * $query->filterByHolzfaeller(1234); // WHERE holzfaeller = 1234
     * $query->filterByHolzfaeller(array(12, 34)); // WHERE holzfaeller IN (12, 34)
     * $query->filterByHolzfaeller(array('min' => 12)); // WHERE holzfaeller >= 12
     * $query->filterByHolzfaeller(array('max' => 12)); // WHERE holzfaeller <= 12
     * </code>
     *
     * @param     mixed $holzfaeller The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByHolzfaeller($holzfaeller = null, $comparison = null)
    {
        if (is_array($holzfaeller)) {
            $useMinMax = false;
            if (isset($holzfaeller['min'])) {
                $this->addUsingAlias(CastleTypePeer::HOLZFAELLER, $holzfaeller['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($holzfaeller['max'])) {
                $this->addUsingAlias(CastleTypePeer::HOLZFAELLER, $holzfaeller['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::HOLZFAELLER, $holzfaeller, $comparison);
    }

    /**
     * Filter the query on the holzlager column
     *
     * Example usage:
     * <code>
     * $query->filterByHolzlager(1234); // WHERE holzlager = 1234
     * $query->filterByHolzlager(array(12, 34)); // WHERE holzlager IN (12, 34)
     * $query->filterByHolzlager(array('min' => 12)); // WHERE holzlager >= 12
     * $query->filterByHolzlager(array('max' => 12)); // WHERE holzlager <= 12
     * </code>
     *
     * @param     mixed $holzlager The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByHolzlager($holzlager = null, $comparison = null)
    {
        if (is_array($holzlager)) {
            $useMinMax = false;
            if (isset($holzlager['min'])) {
                $this->addUsingAlias(CastleTypePeer::HOLZLAGER, $holzlager['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($holzlager['max'])) {
                $this->addUsingAlias(CastleTypePeer::HOLZLAGER, $holzlager['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::HOLZLAGER, $holzlager, $comparison);
    }

    /**
     * Filter the query on the steinbruch column
     *
     * Example usage:
     * <code>
     * $query->filterBySteinbruch(1234); // WHERE steinbruch = 1234
     * $query->filterBySteinbruch(array(12, 34)); // WHERE steinbruch IN (12, 34)
     * $query->filterBySteinbruch(array('min' => 12)); // WHERE steinbruch >= 12
     * $query->filterBySteinbruch(array('max' => 12)); // WHERE steinbruch <= 12
     * </code>
     *
     * @param     mixed $steinbruch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterBySteinbruch($steinbruch = null, $comparison = null)
    {
        if (is_array($steinbruch)) {
            $useMinMax = false;
            if (isset($steinbruch['min'])) {
                $this->addUsingAlias(CastleTypePeer::STEINBRUCH, $steinbruch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($steinbruch['max'])) {
                $this->addUsingAlias(CastleTypePeer::STEINBRUCH, $steinbruch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::STEINBRUCH, $steinbruch, $comparison);
    }

    /**
     * Filter the query on the steinlager column
     *
     * Example usage:
     * <code>
     * $query->filterBySteinlager(1234); // WHERE steinlager = 1234
     * $query->filterBySteinlager(array(12, 34)); // WHERE steinlager IN (12, 34)
     * $query->filterBySteinlager(array('min' => 12)); // WHERE steinlager >= 12
     * $query->filterBySteinlager(array('max' => 12)); // WHERE steinlager <= 12
     * </code>
     *
     * @param     mixed $steinlager The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterBySteinlager($steinlager = null, $comparison = null)
    {
        if (is_array($steinlager)) {
            $useMinMax = false;
            if (isset($steinlager['min'])) {
                $this->addUsingAlias(CastleTypePeer::STEINLAGER, $steinlager['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($steinlager['max'])) {
                $this->addUsingAlias(CastleTypePeer::STEINLAGER, $steinlager['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::STEINLAGER, $steinlager, $comparison);
    }

    /**
     * Filter the query on the erzmine column
     *
     * Example usage:
     * <code>
     * $query->filterByErzmine(1234); // WHERE erzmine = 1234
     * $query->filterByErzmine(array(12, 34)); // WHERE erzmine IN (12, 34)
     * $query->filterByErzmine(array('min' => 12)); // WHERE erzmine >= 12
     * $query->filterByErzmine(array('max' => 12)); // WHERE erzmine <= 12
     * </code>
     *
     * @param     mixed $erzmine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByErzmine($erzmine = null, $comparison = null)
    {
        if (is_array($erzmine)) {
            $useMinMax = false;
            if (isset($erzmine['min'])) {
                $this->addUsingAlias(CastleTypePeer::ERZMINE, $erzmine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($erzmine['max'])) {
                $this->addUsingAlias(CastleTypePeer::ERZMINE, $erzmine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::ERZMINE, $erzmine, $comparison);
    }

    /**
     * Filter the query on the erzlager column
     *
     * Example usage:
     * <code>
     * $query->filterByErzlager(1234); // WHERE erzlager = 1234
     * $query->filterByErzlager(array(12, 34)); // WHERE erzlager IN (12, 34)
     * $query->filterByErzlager(array('min' => 12)); // WHERE erzlager >= 12
     * $query->filterByErzlager(array('max' => 12)); // WHERE erzlager <= 12
     * </code>
     *
     * @param     mixed $erzlager The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByErzlager($erzlager = null, $comparison = null)
    {
        if (is_array($erzlager)) {
            $useMinMax = false;
            if (isset($erzlager['min'])) {
                $this->addUsingAlias(CastleTypePeer::ERZLAGER, $erzlager['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($erzlager['max'])) {
                $this->addUsingAlias(CastleTypePeer::ERZLAGER, $erzlager['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::ERZLAGER, $erzlager, $comparison);
    }

    /**
     * Filter the query on the langbogen column
     *
     * Example usage:
     * <code>
     * $query->filterByLangbogen(true); // WHERE langbogen = true
     * $query->filterByLangbogen('yes'); // WHERE langbogen = true
     * </code>
     *
     * @param     boolean|string $langbogen The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByLangbogen($langbogen = null, $comparison = null)
    {
        if (is_string($langbogen)) {
            $langbogen = in_array(strtolower($langbogen), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::LANGBOGEN, $langbogen, $comparison);
    }

    /**
     * Filter the query on the dreifelderwirtschaft column
     *
     * Example usage:
     * <code>
     * $query->filterByDreifelderwirtschaft(true); // WHERE dreifelderwirtschaft = true
     * $query->filterByDreifelderwirtschaft('yes'); // WHERE dreifelderwirtschaft = true
     * </code>
     *
     * @param     boolean|string $dreifelderwirtschaft The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByDreifelderwirtschaft($dreifelderwirtschaft = null, $comparison = null)
    {
        if (is_string($dreifelderwirtschaft)) {
            $dreifelderwirtschaft = in_array(strtolower($dreifelderwirtschaft), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::DREIFELDERWIRTSCHAFT, $dreifelderwirtschaft, $comparison);
    }

    /**
     * Filter the query on the kummet column
     *
     * Example usage:
     * <code>
     * $query->filterByKummet(true); // WHERE kummet = true
     * $query->filterByKummet('yes'); // WHERE kummet = true
     * </code>
     *
     * @param     boolean|string $kummet The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByKummet($kummet = null, $comparison = null)
    {
        if (is_string($kummet)) {
            $kummet = in_array(strtolower($kummet), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::KUMMET, $kummet, $comparison);
    }

    /**
     * Filter the query on the vorratskeller column
     *
     * Example usage:
     * <code>
     * $query->filterByVorratskeller(true); // WHERE vorratskeller = true
     * $query->filterByVorratskeller('yes'); // WHERE vorratskeller = true
     * </code>
     *
     * @param     boolean|string $vorratskeller The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByVorratskeller($vorratskeller = null, $comparison = null)
    {
        if (is_string($vorratskeller)) {
            $vorratskeller = in_array(strtolower($vorratskeller), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::VORRATSKELLER, $vorratskeller, $comparison);
    }

    /**
     * Filter the query on the steigbuegel column
     *
     * Example usage:
     * <code>
     * $query->filterBySteigbuegel(true); // WHERE steigbuegel = true
     * $query->filterBySteigbuegel('yes'); // WHERE steigbuegel = true
     * </code>
     *
     * @param     boolean|string $steigbuegel The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterBySteigbuegel($steigbuegel = null, $comparison = null)
    {
        if (is_string($steigbuegel)) {
            $steigbuegel = in_array(strtolower($steigbuegel), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::STEIGBUEGEL, $steigbuegel, $comparison);
    }

    /**
     * Filter the query on the waffenschmied column
     *
     * Example usage:
     * <code>
     * $query->filterByWaffenschmied(true); // WHERE waffenschmied = true
     * $query->filterByWaffenschmied('yes'); // WHERE waffenschmied = true
     * </code>
     *
     * @param     boolean|string $waffenschmied The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByWaffenschmied($waffenschmied = null, $comparison = null)
    {
        if (is_string($waffenschmied)) {
            $waffenschmied = in_array(strtolower($waffenschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::WAFFENSCHMIED, $waffenschmied, $comparison);
    }

    /**
     * Filter the query on the ruestungsschmied column
     *
     * Example usage:
     * <code>
     * $query->filterByRuestungsschmied(true); // WHERE ruestungsschmied = true
     * $query->filterByRuestungsschmied('yes'); // WHERE ruestungsschmied = true
     * </code>
     *
     * @param     boolean|string $ruestungsschmied The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByRuestungsschmied($ruestungsschmied = null, $comparison = null)
    {
        if (is_string($ruestungsschmied)) {
            $ruestungsschmied = in_array(strtolower($ruestungsschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::RUESTUNGSSCHMIED, $ruestungsschmied, $comparison);
    }

    /**
     * Filter the query on the bierpruefer column
     *
     * Example usage:
     * <code>
     * $query->filterByBierpruefer(true); // WHERE bierpruefer = true
     * $query->filterByBierpruefer('yes'); // WHERE bierpruefer = true
     * </code>
     *
     * @param     boolean|string $bierpruefer The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByBierpruefer($bierpruefer = null, $comparison = null)
    {
        if (is_string($bierpruefer)) {
            $bierpruefer = in_array(strtolower($bierpruefer), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::BIERPRUEFER, $bierpruefer, $comparison);
    }

    /**
     * Filter the query on the schwertschmied column
     *
     * Example usage:
     * <code>
     * $query->filterBySchwertschmied(true); // WHERE schwertschmied = true
     * $query->filterBySchwertschmied('yes'); // WHERE schwertschmied = true
     * </code>
     *
     * @param     boolean|string $schwertschmied The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterBySchwertschmied($schwertschmied = null, $comparison = null)
    {
        if (is_string($schwertschmied)) {
            $schwertschmied = in_array(strtolower($schwertschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::SCHWERTSCHMIED, $schwertschmied, $comparison);
    }

    /**
     * Filter the query on the eisenhaertung column
     *
     * Example usage:
     * <code>
     * $query->filterByEisenhaertung(true); // WHERE eisenhaertung = true
     * $query->filterByEisenhaertung('yes'); // WHERE eisenhaertung = true
     * </code>
     *
     * @param     boolean|string $eisenhaertung The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByEisenhaertung($eisenhaertung = null, $comparison = null)
    {
        if (is_string($eisenhaertung)) {
            $eisenhaertung = in_array(strtolower($eisenhaertung), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::EISENHAERTUNG, $eisenhaertung, $comparison);
    }

    /**
     * Filter the query on the armbrust column
     *
     * Example usage:
     * <code>
     * $query->filterByArmbrust(true); // WHERE armbrust = true
     * $query->filterByArmbrust('yes'); // WHERE armbrust = true
     * </code>
     *
     * @param     boolean|string $armbrust The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByArmbrust($armbrust = null, $comparison = null)
    {
        if (is_string($armbrust)) {
            $armbrust = in_array(strtolower($armbrust), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::ARMBRUST, $armbrust, $comparison);
    }

    /**
     * Filter the query on the giftpfeile column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftpfeile(true); // WHERE giftpfeile = true
     * $query->filterByGiftpfeile('yes'); // WHERE giftpfeile = true
     * </code>
     *
     * @param     boolean|string $giftpfeile The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByGiftpfeile($giftpfeile = null, $comparison = null)
    {
        if (is_string($giftpfeile)) {
            $giftpfeile = in_array(strtolower($giftpfeile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::GIFTPFEILE, $giftpfeile, $comparison);
    }

    /**
     * Filter the query on the pferdezucht column
     *
     * Example usage:
     * <code>
     * $query->filterByPferdezucht(true); // WHERE pferdezucht = true
     * $query->filterByPferdezucht('yes'); // WHERE pferdezucht = true
     * </code>
     *
     * @param     boolean|string $pferdezucht The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByPferdezucht($pferdezucht = null, $comparison = null)
    {
        if (is_string($pferdezucht)) {
            $pferdezucht = in_array(strtolower($pferdezucht), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::PFERDEZUCHT, $pferdezucht, $comparison);
    }

    /**
     * Filter the query on the waffenherstellung column
     *
     * Example usage:
     * <code>
     * $query->filterByWaffenherstellung(true); // WHERE waffenherstellung = true
     * $query->filterByWaffenherstellung('yes'); // WHERE waffenherstellung = true
     * </code>
     *
     * @param     boolean|string $waffenherstellung The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByWaffenherstellung($waffenherstellung = null, $comparison = null)
    {
        if (is_string($waffenherstellung)) {
            $waffenherstellung = in_array(strtolower($waffenherstellung), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::WAFFENHERSTELLUNG, $waffenherstellung, $comparison);
    }

    /**
     * Filter the query on the pferdepanzerung column
     *
     * Example usage:
     * <code>
     * $query->filterByPferdepanzerung(true); // WHERE pferdepanzerung = true
     * $query->filterByPferdepanzerung('yes'); // WHERE pferdepanzerung = true
     * </code>
     *
     * @param     boolean|string $pferdepanzerung The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByPferdepanzerung($pferdepanzerung = null, $comparison = null)
    {
        if (is_string($pferdepanzerung)) {
            $pferdepanzerung = in_array(strtolower($pferdepanzerung), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::PFERDEPANZERUNG, $pferdepanzerung, $comparison);
    }

    /**
     * Filter the query on the schubkarren column
     *
     * Example usage:
     * <code>
     * $query->filterBySchubkarren(true); // WHERE schubkarren = true
     * $query->filterBySchubkarren('yes'); // WHERE schubkarren = true
     * </code>
     *
     * @param     boolean|string $schubkarren The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterBySchubkarren($schubkarren = null, $comparison = null)
    {
        if (is_string($schubkarren)) {
            $schubkarren = in_array(strtolower($schubkarren), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::SCHUBKARREN, $schubkarren, $comparison);
    }

    /**
     * Filter the query on the brandpfeile column
     *
     * Example usage:
     * <code>
     * $query->filterByBrandpfeile(true); // WHERE brandpfeile = true
     * $query->filterByBrandpfeile('yes'); // WHERE brandpfeile = true
     * </code>
     *
     * @param     boolean|string $brandpfeile The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByBrandpfeile($brandpfeile = null, $comparison = null)
    {
        if (is_string($brandpfeile)) {
            $brandpfeile = in_array(strtolower($brandpfeile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::BRANDPFEILE, $brandpfeile, $comparison);
    }

    /**
     * Filter the query on the hufschmied column
     *
     * Example usage:
     * <code>
     * $query->filterByHufschmied(true); // WHERE hufschmied = true
     * $query->filterByHufschmied('yes'); // WHERE hufschmied = true
     * </code>
     *
     * @param     boolean|string $hufschmied The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByHufschmied($hufschmied = null, $comparison = null)
    {
        if (is_string($hufschmied)) {
            $hufschmied = in_array(strtolower($hufschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::HUFSCHMIED, $hufschmied, $comparison);
    }

    /**
     * Filter the query on the umgebungskarte column
     *
     * Example usage:
     * <code>
     * $query->filterByUmgebungskarte(true); // WHERE umgebungskarte = true
     * $query->filterByUmgebungskarte('yes'); // WHERE umgebungskarte = true
     * </code>
     *
     * @param     boolean|string $umgebungskarte The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByUmgebungskarte($umgebungskarte = null, $comparison = null)
    {
        if (is_string($umgebungskarte)) {
            $umgebungskarte = in_array(strtolower($umgebungskarte), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::UMGEBUNGSKARTE, $umgebungskarte, $comparison);
    }

    /**
     * Filter the query on the zisterne column
     *
     * Example usage:
     * <code>
     * $query->filterByZisterne(true); // WHERE zisterne = true
     * $query->filterByZisterne('yes'); // WHERE zisterne = true
     * </code>
     *
     * @param     boolean|string $zisterne The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByZisterne($zisterne = null, $comparison = null)
    {
        if (is_string($zisterne)) {
            $zisterne = in_array(strtolower($zisterne), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastleTypePeer::ZISTERNE, $zisterne, $comparison);
    }

    /**
     * Filter the query on the max_population column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxPopulation(1234); // WHERE max_population = 1234
     * $query->filterByMaxPopulation(array(12, 34)); // WHERE max_population IN (12, 34)
     * $query->filterByMaxPopulation(array('min' => 12)); // WHERE max_population >= 12
     * $query->filterByMaxPopulation(array('max' => 12)); // WHERE max_population <= 12
     * </code>
     *
     * @param     mixed $maxPopulation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByMaxPopulation($maxPopulation = null, $comparison = null)
    {
        if (is_array($maxPopulation)) {
            $useMinMax = false;
            if (isset($maxPopulation['min'])) {
                $this->addUsingAlias(CastleTypePeer::MAX_POPULATION, $maxPopulation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxPopulation['max'])) {
                $this->addUsingAlias(CastleTypePeer::MAX_POPULATION, $maxPopulation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::MAX_POPULATION, $maxPopulation, $comparison);
    }

    /**
     * Filter the query on the free_population column
     *
     * Example usage:
     * <code>
     * $query->filterByFreePopulation(1234); // WHERE free_population = 1234
     * $query->filterByFreePopulation(array(12, 34)); // WHERE free_population IN (12, 34)
     * $query->filterByFreePopulation(array('min' => 12)); // WHERE free_population >= 12
     * $query->filterByFreePopulation(array('max' => 12)); // WHERE free_population <= 12
     * </code>
     *
     * @param     mixed $freePopulation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByFreePopulation($freePopulation = null, $comparison = null)
    {
        if (is_array($freePopulation)) {
            $useMinMax = false;
            if (isset($freePopulation['min'])) {
                $this->addUsingAlias(CastleTypePeer::FREE_POPULATION, $freePopulation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freePopulation['max'])) {
                $this->addUsingAlias(CastleTypePeer::FREE_POPULATION, $freePopulation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::FREE_POPULATION, $freePopulation, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CastleTypePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CastleTypePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CastleTypePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CastleTypePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleTypePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(CastleTypePeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastleTypePeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Filter the query by a related Castle object
     *
     * @param   Castle|PropelObjectCollection $castle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastle($castle, $comparison = null)
    {
        if ($castle instanceof Castle) {
            return $this
                ->addUsingAlias(CastleTypePeer::ID, $castle->getCastleTypeId(), $comparison);
        } elseif ($castle instanceof PropelObjectCollection) {
            return $this
                ->useCastleQuery()
                ->filterByPrimaryKeys($castle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCastle() only accepts arguments of type Castle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Castle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function joinCastle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Castle');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Castle');
        }

        return $this;
    }

    /**
     * Use the Castle relation Castle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CastleQuery A secondary query class using the current class as primary query
     */
    public function useCastleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCastle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Castle', 'CastleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CastleType $castleType Object to remove from the list of results
     *
     * @return CastleTypeQuery The current query, for fluid interface
     */
    public function prune($castleType = null)
    {
        if ($castleType) {
            $this->addUsingAlias(CastleTypePeer::ID, $castleType->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     CastleTypeQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(CastleTypePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     CastleTypeQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(CastleTypePeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     CastleTypeQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(CastleTypePeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     CastleTypeQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(CastleTypePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     CastleTypeQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(CastleTypePeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     CastleTypeQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(CastleTypePeer::CREATED_AT);
    }
}

<?php


/**
 * Base class that represents a query for the 'buildings' table.
 *
 *
 *
 * @method BuildingsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method BuildingsQuery orderByBergfried($order = Criteria::ASC) Order by the bergfried column
 * @method BuildingsQuery orderByZeughaus($order = Criteria::ASC) Order by the zeughaus column
 * @method BuildingsQuery orderByTaverne($order = Criteria::ASC) Order by the taverne column
 * @method BuildingsQuery orderByBibliothek($order = Criteria::ASC) Order by the bibliothek column
 * @method BuildingsQuery orderByWehranlage($order = Criteria::ASC) Order by the wehranlage column
 * @method BuildingsQuery orderByMarkt($order = Criteria::ASC) Order by the markt column
 * @method BuildingsQuery orderByBauernhof($order = Criteria::ASC) Order by the bauernhof column
 * @method BuildingsQuery orderByHolzfaeller($order = Criteria::ASC) Order by the holzfaeller column
 * @method BuildingsQuery orderByHolzlager($order = Criteria::ASC) Order by the holzlager column
 * @method BuildingsQuery orderBySteinbruch($order = Criteria::ASC) Order by the steinbruch column
 * @method BuildingsQuery orderBySteinlager($order = Criteria::ASC) Order by the steinlager column
 * @method BuildingsQuery orderByErzmine($order = Criteria::ASC) Order by the erzmine column
 * @method BuildingsQuery orderByErzlager($order = Criteria::ASC) Order by the erzlager column
 * @method BuildingsQuery orderByLangbogen($order = Criteria::ASC) Order by the langbogen column
 * @method BuildingsQuery orderByDreifelderwirtschaft($order = Criteria::ASC) Order by the dreifelderwirtschaft column
 * @method BuildingsQuery orderByKummet($order = Criteria::ASC) Order by the kummet column
 * @method BuildingsQuery orderByVorratskeller($order = Criteria::ASC) Order by the vorratskeller column
 * @method BuildingsQuery orderBySteigbuegel($order = Criteria::ASC) Order by the steigbuegel column
 * @method BuildingsQuery orderByWaffenschmied($order = Criteria::ASC) Order by the waffenschmied column
 * @method BuildingsQuery orderByRuestungsschmied($order = Criteria::ASC) Order by the ruestungsschmied column
 * @method BuildingsQuery orderByBierpruefer($order = Criteria::ASC) Order by the bierpruefer column
 * @method BuildingsQuery orderBySchwertschmied($order = Criteria::ASC) Order by the schwertschmied column
 * @method BuildingsQuery orderByEisenhaertung($order = Criteria::ASC) Order by the eisenhaertung column
 * @method BuildingsQuery orderByArmbrust($order = Criteria::ASC) Order by the armbrust column
 * @method BuildingsQuery orderByGiftpfeile($order = Criteria::ASC) Order by the giftpfeile column
 * @method BuildingsQuery orderByPferdezucht($order = Criteria::ASC) Order by the pferdezucht column
 * @method BuildingsQuery orderByWaffenherstellung($order = Criteria::ASC) Order by the waffenherstellung column
 * @method BuildingsQuery orderByPferdepanzerung($order = Criteria::ASC) Order by the pferdepanzerung column
 * @method BuildingsQuery orderBySchubkarren($order = Criteria::ASC) Order by the schubkarren column
 * @method BuildingsQuery orderByBrandpfeile($order = Criteria::ASC) Order by the brandpfeile column
 * @method BuildingsQuery orderByHufschmied($order = Criteria::ASC) Order by the hufschmied column
 * @method BuildingsQuery orderByUmgebungskarte($order = Criteria::ASC) Order by the umgebungskarte column
 * @method BuildingsQuery orderByZisterne($order = Criteria::ASC) Order by the zisterne column
 *
 * @method BuildingsQuery groupById() Group by the id column
 * @method BuildingsQuery groupByBergfried() Group by the bergfried column
 * @method BuildingsQuery groupByZeughaus() Group by the zeughaus column
 * @method BuildingsQuery groupByTaverne() Group by the taverne column
 * @method BuildingsQuery groupByBibliothek() Group by the bibliothek column
 * @method BuildingsQuery groupByWehranlage() Group by the wehranlage column
 * @method BuildingsQuery groupByMarkt() Group by the markt column
 * @method BuildingsQuery groupByBauernhof() Group by the bauernhof column
 * @method BuildingsQuery groupByHolzfaeller() Group by the holzfaeller column
 * @method BuildingsQuery groupByHolzlager() Group by the holzlager column
 * @method BuildingsQuery groupBySteinbruch() Group by the steinbruch column
 * @method BuildingsQuery groupBySteinlager() Group by the steinlager column
 * @method BuildingsQuery groupByErzmine() Group by the erzmine column
 * @method BuildingsQuery groupByErzlager() Group by the erzlager column
 * @method BuildingsQuery groupByLangbogen() Group by the langbogen column
 * @method BuildingsQuery groupByDreifelderwirtschaft() Group by the dreifelderwirtschaft column
 * @method BuildingsQuery groupByKummet() Group by the kummet column
 * @method BuildingsQuery groupByVorratskeller() Group by the vorratskeller column
 * @method BuildingsQuery groupBySteigbuegel() Group by the steigbuegel column
 * @method BuildingsQuery groupByWaffenschmied() Group by the waffenschmied column
 * @method BuildingsQuery groupByRuestungsschmied() Group by the ruestungsschmied column
 * @method BuildingsQuery groupByBierpruefer() Group by the bierpruefer column
 * @method BuildingsQuery groupBySchwertschmied() Group by the schwertschmied column
 * @method BuildingsQuery groupByEisenhaertung() Group by the eisenhaertung column
 * @method BuildingsQuery groupByArmbrust() Group by the armbrust column
 * @method BuildingsQuery groupByGiftpfeile() Group by the giftpfeile column
 * @method BuildingsQuery groupByPferdezucht() Group by the pferdezucht column
 * @method BuildingsQuery groupByWaffenherstellung() Group by the waffenherstellung column
 * @method BuildingsQuery groupByPferdepanzerung() Group by the pferdepanzerung column
 * @method BuildingsQuery groupBySchubkarren() Group by the schubkarren column
 * @method BuildingsQuery groupByBrandpfeile() Group by the brandpfeile column
 * @method BuildingsQuery groupByHufschmied() Group by the hufschmied column
 * @method BuildingsQuery groupByUmgebungskarte() Group by the umgebungskarte column
 * @method BuildingsQuery groupByZisterne() Group by the zisterne column
 *
 * @method BuildingsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BuildingsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BuildingsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Buildings findOne(PropelPDO $con = null) Return the first Buildings matching the query
 * @method Buildings findOneOrCreate(PropelPDO $con = null) Return the first Buildings matching the query, or a new Buildings object populated from the query conditions when no match is found
 *
 * @method Buildings findOneByBergfried(int $bergfried) Return the first Buildings filtered by the bergfried column
 * @method Buildings findOneByZeughaus(int $zeughaus) Return the first Buildings filtered by the zeughaus column
 * @method Buildings findOneByTaverne(int $taverne) Return the first Buildings filtered by the taverne column
 * @method Buildings findOneByBibliothek(int $bibliothek) Return the first Buildings filtered by the bibliothek column
 * @method Buildings findOneByWehranlage(int $wehranlage) Return the first Buildings filtered by the wehranlage column
 * @method Buildings findOneByMarkt(int $markt) Return the first Buildings filtered by the markt column
 * @method Buildings findOneByBauernhof(int $bauernhof) Return the first Buildings filtered by the bauernhof column
 * @method Buildings findOneByHolzfaeller(int $holzfaeller) Return the first Buildings filtered by the holzfaeller column
 * @method Buildings findOneByHolzlager(int $holzlager) Return the first Buildings filtered by the holzlager column
 * @method Buildings findOneBySteinbruch(int $steinbruch) Return the first Buildings filtered by the steinbruch column
 * @method Buildings findOneBySteinlager(int $steinlager) Return the first Buildings filtered by the steinlager column
 * @method Buildings findOneByErzmine(int $erzmine) Return the first Buildings filtered by the erzmine column
 * @method Buildings findOneByErzlager(int $erzlager) Return the first Buildings filtered by the erzlager column
 * @method Buildings findOneByLangbogen(boolean $langbogen) Return the first Buildings filtered by the langbogen column
 * @method Buildings findOneByDreifelderwirtschaft(boolean $dreifelderwirtschaft) Return the first Buildings filtered by the dreifelderwirtschaft column
 * @method Buildings findOneByKummet(boolean $kummet) Return the first Buildings filtered by the kummet column
 * @method Buildings findOneByVorratskeller(boolean $vorratskeller) Return the first Buildings filtered by the vorratskeller column
 * @method Buildings findOneBySteigbuegel(boolean $steigbuegel) Return the first Buildings filtered by the steigbuegel column
 * @method Buildings findOneByWaffenschmied(boolean $waffenschmied) Return the first Buildings filtered by the waffenschmied column
 * @method Buildings findOneByRuestungsschmied(boolean $ruestungsschmied) Return the first Buildings filtered by the ruestungsschmied column
 * @method Buildings findOneByBierpruefer(boolean $bierpruefer) Return the first Buildings filtered by the bierpruefer column
 * @method Buildings findOneBySchwertschmied(boolean $schwertschmied) Return the first Buildings filtered by the schwertschmied column
 * @method Buildings findOneByEisenhaertung(boolean $eisenhaertung) Return the first Buildings filtered by the eisenhaertung column
 * @method Buildings findOneByArmbrust(boolean $armbrust) Return the first Buildings filtered by the armbrust column
 * @method Buildings findOneByGiftpfeile(boolean $giftpfeile) Return the first Buildings filtered by the giftpfeile column
 * @method Buildings findOneByPferdezucht(boolean $pferdezucht) Return the first Buildings filtered by the pferdezucht column
 * @method Buildings findOneByWaffenherstellung(boolean $waffenherstellung) Return the first Buildings filtered by the waffenherstellung column
 * @method Buildings findOneByPferdepanzerung(boolean $pferdepanzerung) Return the first Buildings filtered by the pferdepanzerung column
 * @method Buildings findOneBySchubkarren(boolean $schubkarren) Return the first Buildings filtered by the schubkarren column
 * @method Buildings findOneByBrandpfeile(boolean $brandpfeile) Return the first Buildings filtered by the brandpfeile column
 * @method Buildings findOneByHufschmied(boolean $hufschmied) Return the first Buildings filtered by the hufschmied column
 * @method Buildings findOneByUmgebungskarte(boolean $umgebungskarte) Return the first Buildings filtered by the umgebungskarte column
 * @method Buildings findOneByZisterne(boolean $zisterne) Return the first Buildings filtered by the zisterne column
 *
 * @method array findById(int $id) Return Buildings objects filtered by the id column
 * @method array findByBergfried(int $bergfried) Return Buildings objects filtered by the bergfried column
 * @method array findByZeughaus(int $zeughaus) Return Buildings objects filtered by the zeughaus column
 * @method array findByTaverne(int $taverne) Return Buildings objects filtered by the taverne column
 * @method array findByBibliothek(int $bibliothek) Return Buildings objects filtered by the bibliothek column
 * @method array findByWehranlage(int $wehranlage) Return Buildings objects filtered by the wehranlage column
 * @method array findByMarkt(int $markt) Return Buildings objects filtered by the markt column
 * @method array findByBauernhof(int $bauernhof) Return Buildings objects filtered by the bauernhof column
 * @method array findByHolzfaeller(int $holzfaeller) Return Buildings objects filtered by the holzfaeller column
 * @method array findByHolzlager(int $holzlager) Return Buildings objects filtered by the holzlager column
 * @method array findBySteinbruch(int $steinbruch) Return Buildings objects filtered by the steinbruch column
 * @method array findBySteinlager(int $steinlager) Return Buildings objects filtered by the steinlager column
 * @method array findByErzmine(int $erzmine) Return Buildings objects filtered by the erzmine column
 * @method array findByErzlager(int $erzlager) Return Buildings objects filtered by the erzlager column
 * @method array findByLangbogen(boolean $langbogen) Return Buildings objects filtered by the langbogen column
 * @method array findByDreifelderwirtschaft(boolean $dreifelderwirtschaft) Return Buildings objects filtered by the dreifelderwirtschaft column
 * @method array findByKummet(boolean $kummet) Return Buildings objects filtered by the kummet column
 * @method array findByVorratskeller(boolean $vorratskeller) Return Buildings objects filtered by the vorratskeller column
 * @method array findBySteigbuegel(boolean $steigbuegel) Return Buildings objects filtered by the steigbuegel column
 * @method array findByWaffenschmied(boolean $waffenschmied) Return Buildings objects filtered by the waffenschmied column
 * @method array findByRuestungsschmied(boolean $ruestungsschmied) Return Buildings objects filtered by the ruestungsschmied column
 * @method array findByBierpruefer(boolean $bierpruefer) Return Buildings objects filtered by the bierpruefer column
 * @method array findBySchwertschmied(boolean $schwertschmied) Return Buildings objects filtered by the schwertschmied column
 * @method array findByEisenhaertung(boolean $eisenhaertung) Return Buildings objects filtered by the eisenhaertung column
 * @method array findByArmbrust(boolean $armbrust) Return Buildings objects filtered by the armbrust column
 * @method array findByGiftpfeile(boolean $giftpfeile) Return Buildings objects filtered by the giftpfeile column
 * @method array findByPferdezucht(boolean $pferdezucht) Return Buildings objects filtered by the pferdezucht column
 * @method array findByWaffenherstellung(boolean $waffenherstellung) Return Buildings objects filtered by the waffenherstellung column
 * @method array findByPferdepanzerung(boolean $pferdepanzerung) Return Buildings objects filtered by the pferdepanzerung column
 * @method array findBySchubkarren(boolean $schubkarren) Return Buildings objects filtered by the schubkarren column
 * @method array findByBrandpfeile(boolean $brandpfeile) Return Buildings objects filtered by the brandpfeile column
 * @method array findByHufschmied(boolean $hufschmied) Return Buildings objects filtered by the hufschmied column
 * @method array findByUmgebungskarte(boolean $umgebungskarte) Return Buildings objects filtered by the umgebungskarte column
 * @method array findByZisterne(boolean $zisterne) Return Buildings objects filtered by the zisterne column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseBuildingsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBuildingsQuery object.
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
            $modelName = 'Buildings';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BuildingsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BuildingsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BuildingsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BuildingsQuery) {
            return $criteria;
        }
        $query = new BuildingsQuery(null, null, $modelAlias);

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
     * @return   Buildings|Buildings[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BuildingsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Buildings A model object, or null if the key is not found
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
     * @return                 Buildings A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `bergfried`, `zeughaus`, `taverne`, `bibliothek`, `wehranlage`, `markt`, `bauernhof`, `holzfaeller`, `holzlager`, `steinbruch`, `steinlager`, `erzmine`, `erzlager`, `langbogen`, `dreifelderwirtschaft`, `kummet`, `vorratskeller`, `steigbuegel`, `waffenschmied`, `ruestungsschmied`, `bierpruefer`, `schwertschmied`, `eisenhaertung`, `armbrust`, `giftpfeile`, `pferdezucht`, `waffenherstellung`, `pferdepanzerung`, `schubkarren`, `brandpfeile`, `hufschmied`, `umgebungskarte`, `zisterne` FROM `buildings` WHERE `id` = :p0';
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
            $obj = new Buildings();
            $obj->hydrate($row);
            BuildingsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Buildings|Buildings[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Buildings[]|mixed the list of results, formatted by the current formatter
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BuildingsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BuildingsPeer::ID, $keys, Criteria::IN);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BuildingsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BuildingsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::ID, $id, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByBergfried($bergfried = null, $comparison = null)
    {
        if (is_array($bergfried)) {
            $useMinMax = false;
            if (isset($bergfried['min'])) {
                $this->addUsingAlias(BuildingsPeer::BERGFRIED, $bergfried['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bergfried['max'])) {
                $this->addUsingAlias(BuildingsPeer::BERGFRIED, $bergfried['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::BERGFRIED, $bergfried, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByZeughaus($zeughaus = null, $comparison = null)
    {
        if (is_array($zeughaus)) {
            $useMinMax = false;
            if (isset($zeughaus['min'])) {
                $this->addUsingAlias(BuildingsPeer::ZEUGHAUS, $zeughaus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zeughaus['max'])) {
                $this->addUsingAlias(BuildingsPeer::ZEUGHAUS, $zeughaus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::ZEUGHAUS, $zeughaus, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByTaverne($taverne = null, $comparison = null)
    {
        if (is_array($taverne)) {
            $useMinMax = false;
            if (isset($taverne['min'])) {
                $this->addUsingAlias(BuildingsPeer::TAVERNE, $taverne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taverne['max'])) {
                $this->addUsingAlias(BuildingsPeer::TAVERNE, $taverne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::TAVERNE, $taverne, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByBibliothek($bibliothek = null, $comparison = null)
    {
        if (is_array($bibliothek)) {
            $useMinMax = false;
            if (isset($bibliothek['min'])) {
                $this->addUsingAlias(BuildingsPeer::BIBLIOTHEK, $bibliothek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bibliothek['max'])) {
                $this->addUsingAlias(BuildingsPeer::BIBLIOTHEK, $bibliothek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::BIBLIOTHEK, $bibliothek, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByWehranlage($wehranlage = null, $comparison = null)
    {
        if (is_array($wehranlage)) {
            $useMinMax = false;
            if (isset($wehranlage['min'])) {
                $this->addUsingAlias(BuildingsPeer::WEHRANLAGE, $wehranlage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wehranlage['max'])) {
                $this->addUsingAlias(BuildingsPeer::WEHRANLAGE, $wehranlage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::WEHRANLAGE, $wehranlage, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByMarkt($markt = null, $comparison = null)
    {
        if (is_array($markt)) {
            $useMinMax = false;
            if (isset($markt['min'])) {
                $this->addUsingAlias(BuildingsPeer::MARKT, $markt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($markt['max'])) {
                $this->addUsingAlias(BuildingsPeer::MARKT, $markt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::MARKT, $markt, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByBauernhof($bauernhof = null, $comparison = null)
    {
        if (is_array($bauernhof)) {
            $useMinMax = false;
            if (isset($bauernhof['min'])) {
                $this->addUsingAlias(BuildingsPeer::BAUERNHOF, $bauernhof['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bauernhof['max'])) {
                $this->addUsingAlias(BuildingsPeer::BAUERNHOF, $bauernhof['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::BAUERNHOF, $bauernhof, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByHolzfaeller($holzfaeller = null, $comparison = null)
    {
        if (is_array($holzfaeller)) {
            $useMinMax = false;
            if (isset($holzfaeller['min'])) {
                $this->addUsingAlias(BuildingsPeer::HOLZFAELLER, $holzfaeller['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($holzfaeller['max'])) {
                $this->addUsingAlias(BuildingsPeer::HOLZFAELLER, $holzfaeller['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::HOLZFAELLER, $holzfaeller, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByHolzlager($holzlager = null, $comparison = null)
    {
        if (is_array($holzlager)) {
            $useMinMax = false;
            if (isset($holzlager['min'])) {
                $this->addUsingAlias(BuildingsPeer::HOLZLAGER, $holzlager['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($holzlager['max'])) {
                $this->addUsingAlias(BuildingsPeer::HOLZLAGER, $holzlager['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::HOLZLAGER, $holzlager, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterBySteinbruch($steinbruch = null, $comparison = null)
    {
        if (is_array($steinbruch)) {
            $useMinMax = false;
            if (isset($steinbruch['min'])) {
                $this->addUsingAlias(BuildingsPeer::STEINBRUCH, $steinbruch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($steinbruch['max'])) {
                $this->addUsingAlias(BuildingsPeer::STEINBRUCH, $steinbruch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::STEINBRUCH, $steinbruch, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterBySteinlager($steinlager = null, $comparison = null)
    {
        if (is_array($steinlager)) {
            $useMinMax = false;
            if (isset($steinlager['min'])) {
                $this->addUsingAlias(BuildingsPeer::STEINLAGER, $steinlager['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($steinlager['max'])) {
                $this->addUsingAlias(BuildingsPeer::STEINLAGER, $steinlager['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::STEINLAGER, $steinlager, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByErzmine($erzmine = null, $comparison = null)
    {
        if (is_array($erzmine)) {
            $useMinMax = false;
            if (isset($erzmine['min'])) {
                $this->addUsingAlias(BuildingsPeer::ERZMINE, $erzmine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($erzmine['max'])) {
                $this->addUsingAlias(BuildingsPeer::ERZMINE, $erzmine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::ERZMINE, $erzmine, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByErzlager($erzlager = null, $comparison = null)
    {
        if (is_array($erzlager)) {
            $useMinMax = false;
            if (isset($erzlager['min'])) {
                $this->addUsingAlias(BuildingsPeer::ERZLAGER, $erzlager['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($erzlager['max'])) {
                $this->addUsingAlias(BuildingsPeer::ERZLAGER, $erzlager['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BuildingsPeer::ERZLAGER, $erzlager, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByLangbogen($langbogen = null, $comparison = null)
    {
        if (is_string($langbogen)) {
            $langbogen = in_array(strtolower($langbogen), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::LANGBOGEN, $langbogen, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByDreifelderwirtschaft($dreifelderwirtschaft = null, $comparison = null)
    {
        if (is_string($dreifelderwirtschaft)) {
            $dreifelderwirtschaft = in_array(strtolower($dreifelderwirtschaft), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::DREIFELDERWIRTSCHAFT, $dreifelderwirtschaft, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByKummet($kummet = null, $comparison = null)
    {
        if (is_string($kummet)) {
            $kummet = in_array(strtolower($kummet), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::KUMMET, $kummet, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByVorratskeller($vorratskeller = null, $comparison = null)
    {
        if (is_string($vorratskeller)) {
            $vorratskeller = in_array(strtolower($vorratskeller), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::VORRATSKELLER, $vorratskeller, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterBySteigbuegel($steigbuegel = null, $comparison = null)
    {
        if (is_string($steigbuegel)) {
            $steigbuegel = in_array(strtolower($steigbuegel), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::STEIGBUEGEL, $steigbuegel, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByWaffenschmied($waffenschmied = null, $comparison = null)
    {
        if (is_string($waffenschmied)) {
            $waffenschmied = in_array(strtolower($waffenschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::WAFFENSCHMIED, $waffenschmied, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByRuestungsschmied($ruestungsschmied = null, $comparison = null)
    {
        if (is_string($ruestungsschmied)) {
            $ruestungsschmied = in_array(strtolower($ruestungsschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::RUESTUNGSSCHMIED, $ruestungsschmied, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByBierpruefer($bierpruefer = null, $comparison = null)
    {
        if (is_string($bierpruefer)) {
            $bierpruefer = in_array(strtolower($bierpruefer), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::BIERPRUEFER, $bierpruefer, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterBySchwertschmied($schwertschmied = null, $comparison = null)
    {
        if (is_string($schwertschmied)) {
            $schwertschmied = in_array(strtolower($schwertschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::SCHWERTSCHMIED, $schwertschmied, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByEisenhaertung($eisenhaertung = null, $comparison = null)
    {
        if (is_string($eisenhaertung)) {
            $eisenhaertung = in_array(strtolower($eisenhaertung), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::EISENHAERTUNG, $eisenhaertung, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByArmbrust($armbrust = null, $comparison = null)
    {
        if (is_string($armbrust)) {
            $armbrust = in_array(strtolower($armbrust), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::ARMBRUST, $armbrust, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByGiftpfeile($giftpfeile = null, $comparison = null)
    {
        if (is_string($giftpfeile)) {
            $giftpfeile = in_array(strtolower($giftpfeile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::GIFTPFEILE, $giftpfeile, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByPferdezucht($pferdezucht = null, $comparison = null)
    {
        if (is_string($pferdezucht)) {
            $pferdezucht = in_array(strtolower($pferdezucht), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::PFERDEZUCHT, $pferdezucht, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByWaffenherstellung($waffenherstellung = null, $comparison = null)
    {
        if (is_string($waffenherstellung)) {
            $waffenherstellung = in_array(strtolower($waffenherstellung), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::WAFFENHERSTELLUNG, $waffenherstellung, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByPferdepanzerung($pferdepanzerung = null, $comparison = null)
    {
        if (is_string($pferdepanzerung)) {
            $pferdepanzerung = in_array(strtolower($pferdepanzerung), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::PFERDEPANZERUNG, $pferdepanzerung, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterBySchubkarren($schubkarren = null, $comparison = null)
    {
        if (is_string($schubkarren)) {
            $schubkarren = in_array(strtolower($schubkarren), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::SCHUBKARREN, $schubkarren, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByBrandpfeile($brandpfeile = null, $comparison = null)
    {
        if (is_string($brandpfeile)) {
            $brandpfeile = in_array(strtolower($brandpfeile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::BRANDPFEILE, $brandpfeile, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByHufschmied($hufschmied = null, $comparison = null)
    {
        if (is_string($hufschmied)) {
            $hufschmied = in_array(strtolower($hufschmied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::HUFSCHMIED, $hufschmied, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByUmgebungskarte($umgebungskarte = null, $comparison = null)
    {
        if (is_string($umgebungskarte)) {
            $umgebungskarte = in_array(strtolower($umgebungskarte), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::UMGEBUNGSKARTE, $umgebungskarte, $comparison);
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
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function filterByZisterne($zisterne = null, $comparison = null)
    {
        if (is_string($zisterne)) {
            $zisterne = in_array(strtolower($zisterne), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BuildingsPeer::ZISTERNE, $zisterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Buildings $buildings Object to remove from the list of results
     *
     * @return BuildingsQuery The current query, for fluid interface
     */
    public function prune($buildings = null)
    {
        if ($buildings) {
            $this->addUsingAlias(BuildingsPeer::ID, $buildings->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}

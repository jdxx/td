<?php


/**
 * Base class that represents a query for the 'castles' table.
 *
 *
 *
 * @method CastlesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CastlesQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CastlesQuery orderBySilver($order = Criteria::ASC) Order by the silver column
 * @method CastlesQuery orderByCopper($order = Criteria::ASC) Order by the copper column
 * @method CastlesQuery orderBySt($order = Criteria::ASC) Order by the st column
 * @method CastlesQuery orderByAsx($order = Criteria::ASC) Order by the asx column
 * @method CastlesQuery orderByPr($order = Criteria::ASC) Order by the pr column
 * @method CastlesQuery orderBySk($order = Criteria::ASC) Order by the sk column
 * @method CastlesQuery orderByBs($order = Criteria::ASC) Order by the bs column
 * @method CastlesQuery orderByLr($order = Criteria::ASC) Order by the lr column
 * @method CastlesQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CastlesQuery orderByX($order = Criteria::ASC) Order by the X column
 * @method CastlesQuery orderByY($order = Criteria::ASC) Order by the Y column
 * @method CastlesQuery orderByServer($order = Criteria::ASC) Order by the server column
 * @method CastlesQuery orderByCastleGroupsId($order = Criteria::ASC) Order by the castle_groups_id column
 *
 * @method CastlesQuery groupById() Group by the id column
 * @method CastlesQuery groupByName() Group by the name column
 * @method CastlesQuery groupBySilver() Group by the silver column
 * @method CastlesQuery groupByCopper() Group by the copper column
 * @method CastlesQuery groupBySt() Group by the st column
 * @method CastlesQuery groupByAsx() Group by the asx column
 * @method CastlesQuery groupByPr() Group by the pr column
 * @method CastlesQuery groupBySk() Group by the sk column
 * @method CastlesQuery groupByBs() Group by the bs column
 * @method CastlesQuery groupByLr() Group by the lr column
 * @method CastlesQuery groupByType() Group by the type column
 * @method CastlesQuery groupByX() Group by the X column
 * @method CastlesQuery groupByY() Group by the Y column
 * @method CastlesQuery groupByServer() Group by the server column
 * @method CastlesQuery groupByCastleGroupsId() Group by the castle_groups_id column
 *
 * @method CastlesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CastlesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CastlesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CastlesQuery leftJoinCastleGroups($relationAlias = null) Adds a LEFT JOIN clause to the query using the CastleGroups relation
 * @method CastlesQuery rightJoinCastleGroups($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CastleGroups relation
 * @method CastlesQuery innerJoinCastleGroups($relationAlias = null) Adds a INNER JOIN clause to the query using the CastleGroups relation
 *
 * @method CastlesQuery leftJoinCastlesUnderAttack($relationAlias = null) Adds a LEFT JOIN clause to the query using the CastlesUnderAttack relation
 * @method CastlesQuery rightJoinCastlesUnderAttack($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CastlesUnderAttack relation
 * @method CastlesQuery innerJoinCastlesUnderAttack($relationAlias = null) Adds a INNER JOIN clause to the query using the CastlesUnderAttack relation
 *
 * @method Castles findOne(PropelPDO $con = null) Return the first Castles matching the query
 * @method Castles findOneOrCreate(PropelPDO $con = null) Return the first Castles matching the query, or a new Castles object populated from the query conditions when no match is found
 *
 * @method Castles findOneByName(string $name) Return the first Castles filtered by the name column
 * @method Castles findOneBySilver(int $silver) Return the first Castles filtered by the silver column
 * @method Castles findOneByCopper(int $copper) Return the first Castles filtered by the copper column
 * @method Castles findOneBySt(int $st) Return the first Castles filtered by the st column
 * @method Castles findOneByAsx(int $asx) Return the first Castles filtered by the asx column
 * @method Castles findOneByPr(int $pr) Return the first Castles filtered by the pr column
 * @method Castles findOneBySk(int $sk) Return the first Castles filtered by the sk column
 * @method Castles findOneByBs(int $bs) Return the first Castles filtered by the bs column
 * @method Castles findOneByLr(int $lr) Return the first Castles filtered by the lr column
 * @method Castles findOneByType(string $type) Return the first Castles filtered by the type column
 * @method Castles findOneByX(int $X) Return the first Castles filtered by the X column
 * @method Castles findOneByY(int $Y) Return the first Castles filtered by the Y column
 * @method Castles findOneByServer(int $server) Return the first Castles filtered by the server column
 * @method Castles findOneByCastleGroupsId(int $castle_groups_id) Return the first Castles filtered by the castle_groups_id column
 *
 * @method array findById(string $id) Return Castles objects filtered by the id column
 * @method array findByName(string $name) Return Castles objects filtered by the name column
 * @method array findBySilver(int $silver) Return Castles objects filtered by the silver column
 * @method array findByCopper(int $copper) Return Castles objects filtered by the copper column
 * @method array findBySt(int $st) Return Castles objects filtered by the st column
 * @method array findByAsx(int $asx) Return Castles objects filtered by the asx column
 * @method array findByPr(int $pr) Return Castles objects filtered by the pr column
 * @method array findBySk(int $sk) Return Castles objects filtered by the sk column
 * @method array findByBs(int $bs) Return Castles objects filtered by the bs column
 * @method array findByLr(int $lr) Return Castles objects filtered by the lr column
 * @method array findByType(string $type) Return Castles objects filtered by the type column
 * @method array findByX(int $X) Return Castles objects filtered by the X column
 * @method array findByY(int $Y) Return Castles objects filtered by the Y column
 * @method array findByServer(int $server) Return Castles objects filtered by the server column
 * @method array findByCastleGroupsId(int $castle_groups_id) Return Castles objects filtered by the castle_groups_id column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastlesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCastlesQuery object.
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
            $modelName = 'Castles';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CastlesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CastlesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CastlesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CastlesQuery) {
            return $criteria;
        }
        $query = new CastlesQuery(null, null, $modelAlias);

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
     * @return   Castles|Castles[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CastlesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CastlesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Castles A model object, or null if the key is not found
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
     * @return                 Castles A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `silver`, `copper`, `st`, `asx`, `pr`, `sk`, `bs`, `lr`, `type`, `X`, `Y`, `server`, `castle_groups_id` FROM `castles` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Castles();
            $obj->hydrate($row);
            CastlesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Castles|Castles[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Castles[]|mixed the list of results, formatted by the current formatter
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
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CastlesPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CastlesPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CastlesPeer::ID, $id, $comparison);
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
     * @return CastlesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CastlesPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the silver column
     *
     * Example usage:
     * <code>
     * $query->filterBySilver(1234); // WHERE silver = 1234
     * $query->filterBySilver(array(12, 34)); // WHERE silver IN (12, 34)
     * $query->filterBySilver(array('min' => 12)); // WHERE silver >= 12
     * $query->filterBySilver(array('max' => 12)); // WHERE silver <= 12
     * </code>
     *
     * @param     mixed $silver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterBySilver($silver = null, $comparison = null)
    {
        if (is_array($silver)) {
            $useMinMax = false;
            if (isset($silver['min'])) {
                $this->addUsingAlias(CastlesPeer::SILVER, $silver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($silver['max'])) {
                $this->addUsingAlias(CastlesPeer::SILVER, $silver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::SILVER, $silver, $comparison);
    }

    /**
     * Filter the query on the copper column
     *
     * Example usage:
     * <code>
     * $query->filterByCopper(1234); // WHERE copper = 1234
     * $query->filterByCopper(array(12, 34)); // WHERE copper IN (12, 34)
     * $query->filterByCopper(array('min' => 12)); // WHERE copper >= 12
     * $query->filterByCopper(array('max' => 12)); // WHERE copper <= 12
     * </code>
     *
     * @param     mixed $copper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByCopper($copper = null, $comparison = null)
    {
        if (is_array($copper)) {
            $useMinMax = false;
            if (isset($copper['min'])) {
                $this->addUsingAlias(CastlesPeer::COPPER, $copper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($copper['max'])) {
                $this->addUsingAlias(CastlesPeer::COPPER, $copper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::COPPER, $copper, $comparison);
    }

    /**
     * Filter the query on the st column
     *
     * Example usage:
     * <code>
     * $query->filterBySt(1234); // WHERE st = 1234
     * $query->filterBySt(array(12, 34)); // WHERE st IN (12, 34)
     * $query->filterBySt(array('min' => 12)); // WHERE st >= 12
     * $query->filterBySt(array('max' => 12)); // WHERE st <= 12
     * </code>
     *
     * @param     mixed $st The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterBySt($st = null, $comparison = null)
    {
        if (is_array($st)) {
            $useMinMax = false;
            if (isset($st['min'])) {
                $this->addUsingAlias(CastlesPeer::ST, $st['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($st['max'])) {
                $this->addUsingAlias(CastlesPeer::ST, $st['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::ST, $st, $comparison);
    }

    /**
     * Filter the query on the asx column
     *
     * Example usage:
     * <code>
     * $query->filterByAsx(1234); // WHERE asx = 1234
     * $query->filterByAsx(array(12, 34)); // WHERE asx IN (12, 34)
     * $query->filterByAsx(array('min' => 12)); // WHERE asx >= 12
     * $query->filterByAsx(array('max' => 12)); // WHERE asx <= 12
     * </code>
     *
     * @param     mixed $asx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByAsx($asx = null, $comparison = null)
    {
        if (is_array($asx)) {
            $useMinMax = false;
            if (isset($asx['min'])) {
                $this->addUsingAlias(CastlesPeer::ASX, $asx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asx['max'])) {
                $this->addUsingAlias(CastlesPeer::ASX, $asx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::ASX, $asx, $comparison);
    }

    /**
     * Filter the query on the pr column
     *
     * Example usage:
     * <code>
     * $query->filterByPr(1234); // WHERE pr = 1234
     * $query->filterByPr(array(12, 34)); // WHERE pr IN (12, 34)
     * $query->filterByPr(array('min' => 12)); // WHERE pr >= 12
     * $query->filterByPr(array('max' => 12)); // WHERE pr <= 12
     * </code>
     *
     * @param     mixed $pr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByPr($pr = null, $comparison = null)
    {
        if (is_array($pr)) {
            $useMinMax = false;
            if (isset($pr['min'])) {
                $this->addUsingAlias(CastlesPeer::PR, $pr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pr['max'])) {
                $this->addUsingAlias(CastlesPeer::PR, $pr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::PR, $pr, $comparison);
    }

    /**
     * Filter the query on the sk column
     *
     * Example usage:
     * <code>
     * $query->filterBySk(1234); // WHERE sk = 1234
     * $query->filterBySk(array(12, 34)); // WHERE sk IN (12, 34)
     * $query->filterBySk(array('min' => 12)); // WHERE sk >= 12
     * $query->filterBySk(array('max' => 12)); // WHERE sk <= 12
     * </code>
     *
     * @param     mixed $sk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterBySk($sk = null, $comparison = null)
    {
        if (is_array($sk)) {
            $useMinMax = false;
            if (isset($sk['min'])) {
                $this->addUsingAlias(CastlesPeer::SK, $sk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sk['max'])) {
                $this->addUsingAlias(CastlesPeer::SK, $sk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::SK, $sk, $comparison);
    }

    /**
     * Filter the query on the bs column
     *
     * Example usage:
     * <code>
     * $query->filterByBs(1234); // WHERE bs = 1234
     * $query->filterByBs(array(12, 34)); // WHERE bs IN (12, 34)
     * $query->filterByBs(array('min' => 12)); // WHERE bs >= 12
     * $query->filterByBs(array('max' => 12)); // WHERE bs <= 12
     * </code>
     *
     * @param     mixed $bs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByBs($bs = null, $comparison = null)
    {
        if (is_array($bs)) {
            $useMinMax = false;
            if (isset($bs['min'])) {
                $this->addUsingAlias(CastlesPeer::BS, $bs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bs['max'])) {
                $this->addUsingAlias(CastlesPeer::BS, $bs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::BS, $bs, $comparison);
    }

    /**
     * Filter the query on the lr column
     *
     * Example usage:
     * <code>
     * $query->filterByLr(1234); // WHERE lr = 1234
     * $query->filterByLr(array(12, 34)); // WHERE lr IN (12, 34)
     * $query->filterByLr(array('min' => 12)); // WHERE lr >= 12
     * $query->filterByLr(array('max' => 12)); // WHERE lr <= 12
     * </code>
     *
     * @param     mixed $lr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByLr($lr = null, $comparison = null)
    {
        if (is_array($lr)) {
            $useMinMax = false;
            if (isset($lr['min'])) {
                $this->addUsingAlias(CastlesPeer::LR, $lr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lr['max'])) {
                $this->addUsingAlias(CastlesPeer::LR, $lr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::LR, $lr, $comparison);
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
     * @return CastlesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CastlesPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the X column
     *
     * Example usage:
     * <code>
     * $query->filterByX(1234); // WHERE X = 1234
     * $query->filterByX(array(12, 34)); // WHERE X IN (12, 34)
     * $query->filterByX(array('min' => 12)); // WHERE X >= 12
     * $query->filterByX(array('max' => 12)); // WHERE X <= 12
     * </code>
     *
     * @param     mixed $x The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByX($x = null, $comparison = null)
    {
        if (is_array($x)) {
            $useMinMax = false;
            if (isset($x['min'])) {
                $this->addUsingAlias(CastlesPeer::X, $x['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($x['max'])) {
                $this->addUsingAlias(CastlesPeer::X, $x['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::X, $x, $comparison);
    }

    /**
     * Filter the query on the Y column
     *
     * Example usage:
     * <code>
     * $query->filterByY(1234); // WHERE Y = 1234
     * $query->filterByY(array(12, 34)); // WHERE Y IN (12, 34)
     * $query->filterByY(array('min' => 12)); // WHERE Y >= 12
     * $query->filterByY(array('max' => 12)); // WHERE Y <= 12
     * </code>
     *
     * @param     mixed $y The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByY($y = null, $comparison = null)
    {
        if (is_array($y)) {
            $useMinMax = false;
            if (isset($y['min'])) {
                $this->addUsingAlias(CastlesPeer::Y, $y['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($y['max'])) {
                $this->addUsingAlias(CastlesPeer::Y, $y['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::Y, $y, $comparison);
    }

    /**
     * Filter the query on the server column
     *
     * Example usage:
     * <code>
     * $query->filterByServer(1234); // WHERE server = 1234
     * $query->filterByServer(array(12, 34)); // WHERE server IN (12, 34)
     * $query->filterByServer(array('min' => 12)); // WHERE server >= 12
     * $query->filterByServer(array('max' => 12)); // WHERE server <= 12
     * </code>
     *
     * @param     mixed $server The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByServer($server = null, $comparison = null)
    {
        if (is_array($server)) {
            $useMinMax = false;
            if (isset($server['min'])) {
                $this->addUsingAlias(CastlesPeer::SERVER, $server['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($server['max'])) {
                $this->addUsingAlias(CastlesPeer::SERVER, $server['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::SERVER, $server, $comparison);
    }

    /**
     * Filter the query on the castle_groups_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCastleGroupsId(1234); // WHERE castle_groups_id = 1234
     * $query->filterByCastleGroupsId(array(12, 34)); // WHERE castle_groups_id IN (12, 34)
     * $query->filterByCastleGroupsId(array('min' => 12)); // WHERE castle_groups_id >= 12
     * $query->filterByCastleGroupsId(array('max' => 12)); // WHERE castle_groups_id <= 12
     * </code>
     *
     * @see       filterByCastleGroups()
     *
     * @param     mixed $castleGroupsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function filterByCastleGroupsId($castleGroupsId = null, $comparison = null)
    {
        if (is_array($castleGroupsId)) {
            $useMinMax = false;
            if (isset($castleGroupsId['min'])) {
                $this->addUsingAlias(CastlesPeer::CASTLE_GROUPS_ID, $castleGroupsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($castleGroupsId['max'])) {
                $this->addUsingAlias(CastlesPeer::CASTLE_GROUPS_ID, $castleGroupsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesPeer::CASTLE_GROUPS_ID, $castleGroupsId, $comparison);
    }

    /**
     * Filter the query by a related CastleGroups object
     *
     * @param   CastleGroups|PropelObjectCollection $castleGroups The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastlesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastleGroups($castleGroups, $comparison = null)
    {
        if ($castleGroups instanceof CastleGroups) {
            return $this
                ->addUsingAlias(CastlesPeer::CASTLE_GROUPS_ID, $castleGroups->getId(), $comparison);
        } elseif ($castleGroups instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastlesPeer::CASTLE_GROUPS_ID, $castleGroups->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCastleGroups() only accepts arguments of type CastleGroups or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CastleGroups relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function joinCastleGroups($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CastleGroups');

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
            $this->addJoinObject($join, 'CastleGroups');
        }

        return $this;
    }

    /**
     * Use the CastleGroups relation CastleGroups object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CastleGroupsQuery A secondary query class using the current class as primary query
     */
    public function useCastleGroupsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCastleGroups($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CastleGroups', 'CastleGroupsQuery');
    }

    /**
     * Filter the query by a related CastlesUnderAttack object
     *
     * @param   CastlesUnderAttack|PropelObjectCollection $castlesUnderAttack  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastlesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastlesUnderAttack($castlesUnderAttack, $comparison = null)
    {
        if ($castlesUnderAttack instanceof CastlesUnderAttack) {
            return $this
                ->addUsingAlias(CastlesPeer::ID, $castlesUnderAttack->getCastlesId(), $comparison);
        } elseif ($castlesUnderAttack instanceof PropelObjectCollection) {
            return $this
                ->useCastlesUnderAttackQuery()
                ->filterByPrimaryKeys($castlesUnderAttack->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCastlesUnderAttack() only accepts arguments of type CastlesUnderAttack or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CastlesUnderAttack relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function joinCastlesUnderAttack($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CastlesUnderAttack');

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
            $this->addJoinObject($join, 'CastlesUnderAttack');
        }

        return $this;
    }

    /**
     * Use the CastlesUnderAttack relation CastlesUnderAttack object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CastlesUnderAttackQuery A secondary query class using the current class as primary query
     */
    public function useCastlesUnderAttackQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCastlesUnderAttack($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CastlesUnderAttack', 'CastlesUnderAttackQuery');
    }

    /**
     * Filter the query by a related Attack object
     * using the castles_under_attack table as cross reference
     *
     * @param   Attack $attack the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CastlesQuery The current query, for fluid interface
     */
    public function filterByAttack($attack, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useCastlesUnderAttackQuery()
            ->filterByAttack($attack, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   Castles $castles Object to remove from the list of results
     *
     * @return CastlesQuery The current query, for fluid interface
     */
    public function prune($castles = null)
    {
        if ($castles) {
            $this->addUsingAlias(CastlesPeer::ID, $castles->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}

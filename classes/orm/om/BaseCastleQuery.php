<?php


/**
 * Base class that represents a query for the 'castle' table.
 *
 *
 *
 * @method CastleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CastleQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method CastleQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CastleQuery orderByCastleTypeId($order = Criteria::ASC) Order by the castle_type_id column
 * @method CastleQuery orderByCastleLocationId($order = Criteria::ASC) Order by the castle_location_id column
 * @method CastleQuery orderByCoordinates($order = Criteria::ASC) Order by the coordinates column
 * @method CastleQuery orderByX($order = Criteria::ASC) Order by the X column
 * @method CastleQuery orderByY($order = Criteria::ASC) Order by the Y column
 * @method CastleQuery orderBySilver($order = Criteria::ASC) Order by the silver column
 * @method CastleQuery orderByCopper($order = Criteria::ASC) Order by the copper column
 * @method CastleQuery orderByCurrentSt($order = Criteria::ASC) Order by the current_st column
 * @method CastleQuery orderByCurrentAs($order = Criteria::ASC) Order by the current_as column
 * @method CastleQuery orderByCurrentPr($order = Criteria::ASC) Order by the current_pr column
 * @method CastleQuery orderByCurrentSk($order = Criteria::ASC) Order by the current_sk column
 * @method CastleQuery orderByCurrentBs($order = Criteria::ASC) Order by the current_bs column
 * @method CastleQuery orderByCurrentLr($order = Criteria::ASC) Order by the current_lr column
 * @method CastleQuery orderByCurrentHk($order = Criteria::ASC) Order by the current_hk column
 * @method CastleQuery orderByCurrentOk($order = Criteria::ASC) Order by the current_ok column
 * @method CastleQuery orderByMissionSt($order = Criteria::ASC) Order by the mission_st column
 * @method CastleQuery orderByMissionAs($order = Criteria::ASC) Order by the mission_as column
 * @method CastleQuery orderByMissionPr($order = Criteria::ASC) Order by the mission_pr column
 * @method CastleQuery orderByMissionSk($order = Criteria::ASC) Order by the mission_sk column
 * @method CastleQuery orderByMissionBs($order = Criteria::ASC) Order by the mission_bs column
 * @method CastleQuery orderByMissionLr($order = Criteria::ASC) Order by the mission_lr column
 * @method CastleQuery orderByUsageOff($order = Criteria::ASC) Order by the usage_off column
 * @method CastleQuery orderByUsageDef($order = Criteria::ASC) Order by the usage_def column
 * @method CastleQuery orderByMissionPriority($order = Criteria::ASC) Order by the mission_priority column
 * @method CastleQuery orderByEnvironmentCard($order = Criteria::ASC) Order by the environment_card column
 * @method CastleQuery orderByAutodefCoordinates($order = Criteria::ASC) Order by the autodef_coordinates column
 * @method CastleQuery orderByAutodefX($order = Criteria::ASC) Order by the autodef_X column
 * @method CastleQuery orderByAutodefY($order = Criteria::ASC) Order by the autodef_Y column
 * @method CastleQuery orderByPoints($order = Criteria::ASC) Order by the points column
 * @method CastleQuery orderByFreePopulation($order = Criteria::ASC) Order by the free_population column
 * @method CastleQuery orderByLastImport($order = Criteria::ASC) Order by the last_import column
 * @method CastleQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method CastleQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method CastleQuery groupById() Group by the id column
 * @method CastleQuery groupByUserId() Group by the user_id column
 * @method CastleQuery groupByName() Group by the name column
 * @method CastleQuery groupByCastleTypeId() Group by the castle_type_id column
 * @method CastleQuery groupByCastleLocationId() Group by the castle_location_id column
 * @method CastleQuery groupByCoordinates() Group by the coordinates column
 * @method CastleQuery groupByX() Group by the X column
 * @method CastleQuery groupByY() Group by the Y column
 * @method CastleQuery groupBySilver() Group by the silver column
 * @method CastleQuery groupByCopper() Group by the copper column
 * @method CastleQuery groupByCurrentSt() Group by the current_st column
 * @method CastleQuery groupByCurrentAs() Group by the current_as column
 * @method CastleQuery groupByCurrentPr() Group by the current_pr column
 * @method CastleQuery groupByCurrentSk() Group by the current_sk column
 * @method CastleQuery groupByCurrentBs() Group by the current_bs column
 * @method CastleQuery groupByCurrentLr() Group by the current_lr column
 * @method CastleQuery groupByCurrentHk() Group by the current_hk column
 * @method CastleQuery groupByCurrentOk() Group by the current_ok column
 * @method CastleQuery groupByMissionSt() Group by the mission_st column
 * @method CastleQuery groupByMissionAs() Group by the mission_as column
 * @method CastleQuery groupByMissionPr() Group by the mission_pr column
 * @method CastleQuery groupByMissionSk() Group by the mission_sk column
 * @method CastleQuery groupByMissionBs() Group by the mission_bs column
 * @method CastleQuery groupByMissionLr() Group by the mission_lr column
 * @method CastleQuery groupByUsageOff() Group by the usage_off column
 * @method CastleQuery groupByUsageDef() Group by the usage_def column
 * @method CastleQuery groupByMissionPriority() Group by the mission_priority column
 * @method CastleQuery groupByEnvironmentCard() Group by the environment_card column
 * @method CastleQuery groupByAutodefCoordinates() Group by the autodef_coordinates column
 * @method CastleQuery groupByAutodefX() Group by the autodef_X column
 * @method CastleQuery groupByAutodefY() Group by the autodef_Y column
 * @method CastleQuery groupByPoints() Group by the points column
 * @method CastleQuery groupByFreePopulation() Group by the free_population column
 * @method CastleQuery groupByLastImport() Group by the last_import column
 * @method CastleQuery groupByCreatedAt() Group by the created_at column
 * @method CastleQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method CastleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CastleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CastleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CastleQuery leftJoinCastleType($relationAlias = null) Adds a LEFT JOIN clause to the query using the CastleType relation
 * @method CastleQuery rightJoinCastleType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CastleType relation
 * @method CastleQuery innerJoinCastleType($relationAlias = null) Adds a INNER JOIN clause to the query using the CastleType relation
 *
 * @method CastleQuery leftJoinCastleLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CastleLocation relation
 * @method CastleQuery rightJoinCastleLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CastleLocation relation
 * @method CastleQuery innerJoinCastleLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the CastleLocation relation
 *
 * @method CastleQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method CastleQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method CastleQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method CastleQuery leftJoinAttack2castle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attack2castle relation
 * @method CastleQuery rightJoinAttack2castle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attack2castle relation
 * @method CastleQuery innerJoinAttack2castle($relationAlias = null) Adds a INNER JOIN clause to the query using the Attack2castle relation
 *
 * @method Castle findOne(PropelPDO $con = null) Return the first Castle matching the query
 * @method Castle findOneOrCreate(PropelPDO $con = null) Return the first Castle matching the query, or a new Castle object populated from the query conditions when no match is found
 *
 * @method Castle findOneByUserId(int $user_id) Return the first Castle filtered by the user_id column
 * @method Castle findOneByName(string $name) Return the first Castle filtered by the name column
 * @method Castle findOneByCastleTypeId(int $castle_type_id) Return the first Castle filtered by the castle_type_id column
 * @method Castle findOneByCastleLocationId(int $castle_location_id) Return the first Castle filtered by the castle_location_id column
 * @method Castle findOneByCoordinates(string $coordinates) Return the first Castle filtered by the coordinates column
 * @method Castle findOneByX(int $X) Return the first Castle filtered by the X column
 * @method Castle findOneByY(int $Y) Return the first Castle filtered by the Y column
 * @method Castle findOneBySilver(int $silver) Return the first Castle filtered by the silver column
 * @method Castle findOneByCopper(int $copper) Return the first Castle filtered by the copper column
 * @method Castle findOneByCurrentSt(int $current_st) Return the first Castle filtered by the current_st column
 * @method Castle findOneByCurrentAs(int $current_as) Return the first Castle filtered by the current_as column
 * @method Castle findOneByCurrentPr(int $current_pr) Return the first Castle filtered by the current_pr column
 * @method Castle findOneByCurrentSk(int $current_sk) Return the first Castle filtered by the current_sk column
 * @method Castle findOneByCurrentBs(int $current_bs) Return the first Castle filtered by the current_bs column
 * @method Castle findOneByCurrentLr(int $current_lr) Return the first Castle filtered by the current_lr column
 * @method Castle findOneByCurrentHk(int $current_hk) Return the first Castle filtered by the current_hk column
 * @method Castle findOneByCurrentOk(int $current_ok) Return the first Castle filtered by the current_ok column
 * @method Castle findOneByMissionSt(int $mission_st) Return the first Castle filtered by the mission_st column
 * @method Castle findOneByMissionAs(int $mission_as) Return the first Castle filtered by the mission_as column
 * @method Castle findOneByMissionPr(int $mission_pr) Return the first Castle filtered by the mission_pr column
 * @method Castle findOneByMissionSk(int $mission_sk) Return the first Castle filtered by the mission_sk column
 * @method Castle findOneByMissionBs(int $mission_bs) Return the first Castle filtered by the mission_bs column
 * @method Castle findOneByMissionLr(int $mission_lr) Return the first Castle filtered by the mission_lr column
 * @method Castle findOneByUsageOff(boolean $usage_off) Return the first Castle filtered by the usage_off column
 * @method Castle findOneByUsageDef(boolean $usage_def) Return the first Castle filtered by the usage_def column
 * @method Castle findOneByMissionPriority(boolean $mission_priority) Return the first Castle filtered by the mission_priority column
 * @method Castle findOneByEnvironmentCard(boolean $environment_card) Return the first Castle filtered by the environment_card column
 * @method Castle findOneByAutodefCoordinates(string $autodef_coordinates) Return the first Castle filtered by the autodef_coordinates column
 * @method Castle findOneByAutodefX(int $autodef_X) Return the first Castle filtered by the autodef_X column
 * @method Castle findOneByAutodefY(int $autodef_Y) Return the first Castle filtered by the autodef_Y column
 * @method Castle findOneByPoints(int $points) Return the first Castle filtered by the points column
 * @method Castle findOneByFreePopulation(int $free_population) Return the first Castle filtered by the free_population column
 * @method Castle findOneByLastImport(string $last_import) Return the first Castle filtered by the last_import column
 * @method Castle findOneByCreatedAt(string $created_at) Return the first Castle filtered by the created_at column
 * @method Castle findOneByUpdatedAt(string $updated_at) Return the first Castle filtered by the updated_at column
 *
 * @method array findById(int $id) Return Castle objects filtered by the id column
 * @method array findByUserId(int $user_id) Return Castle objects filtered by the user_id column
 * @method array findByName(string $name) Return Castle objects filtered by the name column
 * @method array findByCastleTypeId(int $castle_type_id) Return Castle objects filtered by the castle_type_id column
 * @method array findByCastleLocationId(int $castle_location_id) Return Castle objects filtered by the castle_location_id column
 * @method array findByCoordinates(string $coordinates) Return Castle objects filtered by the coordinates column
 * @method array findByX(int $X) Return Castle objects filtered by the X column
 * @method array findByY(int $Y) Return Castle objects filtered by the Y column
 * @method array findBySilver(int $silver) Return Castle objects filtered by the silver column
 * @method array findByCopper(int $copper) Return Castle objects filtered by the copper column
 * @method array findByCurrentSt(int $current_st) Return Castle objects filtered by the current_st column
 * @method array findByCurrentAs(int $current_as) Return Castle objects filtered by the current_as column
 * @method array findByCurrentPr(int $current_pr) Return Castle objects filtered by the current_pr column
 * @method array findByCurrentSk(int $current_sk) Return Castle objects filtered by the current_sk column
 * @method array findByCurrentBs(int $current_bs) Return Castle objects filtered by the current_bs column
 * @method array findByCurrentLr(int $current_lr) Return Castle objects filtered by the current_lr column
 * @method array findByCurrentHk(int $current_hk) Return Castle objects filtered by the current_hk column
 * @method array findByCurrentOk(int $current_ok) Return Castle objects filtered by the current_ok column
 * @method array findByMissionSt(int $mission_st) Return Castle objects filtered by the mission_st column
 * @method array findByMissionAs(int $mission_as) Return Castle objects filtered by the mission_as column
 * @method array findByMissionPr(int $mission_pr) Return Castle objects filtered by the mission_pr column
 * @method array findByMissionSk(int $mission_sk) Return Castle objects filtered by the mission_sk column
 * @method array findByMissionBs(int $mission_bs) Return Castle objects filtered by the mission_bs column
 * @method array findByMissionLr(int $mission_lr) Return Castle objects filtered by the mission_lr column
 * @method array findByUsageOff(boolean $usage_off) Return Castle objects filtered by the usage_off column
 * @method array findByUsageDef(boolean $usage_def) Return Castle objects filtered by the usage_def column
 * @method array findByMissionPriority(boolean $mission_priority) Return Castle objects filtered by the mission_priority column
 * @method array findByEnvironmentCard(boolean $environment_card) Return Castle objects filtered by the environment_card column
 * @method array findByAutodefCoordinates(string $autodef_coordinates) Return Castle objects filtered by the autodef_coordinates column
 * @method array findByAutodefX(int $autodef_X) Return Castle objects filtered by the autodef_X column
 * @method array findByAutodefY(int $autodef_Y) Return Castle objects filtered by the autodef_Y column
 * @method array findByPoints(int $points) Return Castle objects filtered by the points column
 * @method array findByFreePopulation(int $free_population) Return Castle objects filtered by the free_population column
 * @method array findByLastImport(string $last_import) Return Castle objects filtered by the last_import column
 * @method array findByCreatedAt(string $created_at) Return Castle objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Castle objects filtered by the updated_at column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCastleQuery object.
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
            $modelName = 'Castle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CastleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CastleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CastleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CastleQuery) {
            return $criteria;
        }
        $query = new CastleQuery(null, null, $modelAlias);

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
     * @return   Castle|Castle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CastlePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Castle A model object, or null if the key is not found
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
     * @return                 Castle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `name`, `castle_type_id`, `castle_location_id`, `coordinates`, `X`, `Y`, `silver`, `copper`, `current_st`, `current_as`, `current_pr`, `current_sk`, `current_bs`, `current_lr`, `current_hk`, `current_ok`, `mission_st`, `mission_as`, `mission_pr`, `mission_sk`, `mission_bs`, `mission_lr`, `usage_off`, `usage_def`, `mission_priority`, `environment_card`, `autodef_coordinates`, `autodef_X`, `autodef_Y`, `points`, `free_population`, `last_import`, `created_at`, `updated_at` FROM `castle` WHERE `id` = :p0';
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
            $obj = new Castle();
            $obj->hydrate($row);
            CastlePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Castle|Castle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Castle[]|mixed the list of results, formatted by the current formatter
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CastlePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CastlePeer::ID, $keys, Criteria::IN);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CastlePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CastlePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::ID, $id, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(CastlePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(CastlePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::USER_ID, $userId, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CastlePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the castle_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCastleTypeId(1234); // WHERE castle_type_id = 1234
     * $query->filterByCastleTypeId(array(12, 34)); // WHERE castle_type_id IN (12, 34)
     * $query->filterByCastleTypeId(array('min' => 12)); // WHERE castle_type_id >= 12
     * $query->filterByCastleTypeId(array('max' => 12)); // WHERE castle_type_id <= 12
     * </code>
     *
     * @see       filterByCastleType()
     *
     * @param     mixed $castleTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCastleTypeId($castleTypeId = null, $comparison = null)
    {
        if (is_array($castleTypeId)) {
            $useMinMax = false;
            if (isset($castleTypeId['min'])) {
                $this->addUsingAlias(CastlePeer::CASTLE_TYPE_ID, $castleTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($castleTypeId['max'])) {
                $this->addUsingAlias(CastlePeer::CASTLE_TYPE_ID, $castleTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CASTLE_TYPE_ID, $castleTypeId, $comparison);
    }

    /**
     * Filter the query on the castle_location_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCastleLocationId(1234); // WHERE castle_location_id = 1234
     * $query->filterByCastleLocationId(array(12, 34)); // WHERE castle_location_id IN (12, 34)
     * $query->filterByCastleLocationId(array('min' => 12)); // WHERE castle_location_id >= 12
     * $query->filterByCastleLocationId(array('max' => 12)); // WHERE castle_location_id <= 12
     * </code>
     *
     * @see       filterByCastleLocation()
     *
     * @param     mixed $castleLocationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCastleLocationId($castleLocationId = null, $comparison = null)
    {
        if (is_array($castleLocationId)) {
            $useMinMax = false;
            if (isset($castleLocationId['min'])) {
                $this->addUsingAlias(CastlePeer::CASTLE_LOCATION_ID, $castleLocationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($castleLocationId['max'])) {
                $this->addUsingAlias(CastlePeer::CASTLE_LOCATION_ID, $castleLocationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CASTLE_LOCATION_ID, $castleLocationId, $comparison);
    }

    /**
     * Filter the query on the coordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByCoordinates('fooValue');   // WHERE coordinates = 'fooValue'
     * $query->filterByCoordinates('%fooValue%'); // WHERE coordinates LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coordinates The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCoordinates($coordinates = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coordinates)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coordinates)) {
                $coordinates = str_replace('*', '%', $coordinates);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CastlePeer::COORDINATES, $coordinates, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByX($x = null, $comparison = null)
    {
        if (is_array($x)) {
            $useMinMax = false;
            if (isset($x['min'])) {
                $this->addUsingAlias(CastlePeer::X, $x['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($x['max'])) {
                $this->addUsingAlias(CastlePeer::X, $x['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::X, $x, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByY($y = null, $comparison = null)
    {
        if (is_array($y)) {
            $useMinMax = false;
            if (isset($y['min'])) {
                $this->addUsingAlias(CastlePeer::Y, $y['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($y['max'])) {
                $this->addUsingAlias(CastlePeer::Y, $y['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::Y, $y, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterBySilver($silver = null, $comparison = null)
    {
        if (is_array($silver)) {
            $useMinMax = false;
            if (isset($silver['min'])) {
                $this->addUsingAlias(CastlePeer::SILVER, $silver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($silver['max'])) {
                $this->addUsingAlias(CastlePeer::SILVER, $silver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::SILVER, $silver, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCopper($copper = null, $comparison = null)
    {
        if (is_array($copper)) {
            $useMinMax = false;
            if (isset($copper['min'])) {
                $this->addUsingAlias(CastlePeer::COPPER, $copper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($copper['max'])) {
                $this->addUsingAlias(CastlePeer::COPPER, $copper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::COPPER, $copper, $comparison);
    }

    /**
     * Filter the query on the current_st column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentSt(1234); // WHERE current_st = 1234
     * $query->filterByCurrentSt(array(12, 34)); // WHERE current_st IN (12, 34)
     * $query->filterByCurrentSt(array('min' => 12)); // WHERE current_st >= 12
     * $query->filterByCurrentSt(array('max' => 12)); // WHERE current_st <= 12
     * </code>
     *
     * @param     mixed $currentSt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentSt($currentSt = null, $comparison = null)
    {
        if (is_array($currentSt)) {
            $useMinMax = false;
            if (isset($currentSt['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_ST, $currentSt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentSt['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_ST, $currentSt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_ST, $currentSt, $comparison);
    }

    /**
     * Filter the query on the current_as column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentAs(1234); // WHERE current_as = 1234
     * $query->filterByCurrentAs(array(12, 34)); // WHERE current_as IN (12, 34)
     * $query->filterByCurrentAs(array('min' => 12)); // WHERE current_as >= 12
     * $query->filterByCurrentAs(array('max' => 12)); // WHERE current_as <= 12
     * </code>
     *
     * @param     mixed $currentAs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentAs($currentAs = null, $comparison = null)
    {
        if (is_array($currentAs)) {
            $useMinMax = false;
            if (isset($currentAs['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_AS, $currentAs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentAs['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_AS, $currentAs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_AS, $currentAs, $comparison);
    }

    /**
     * Filter the query on the current_pr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentPr(1234); // WHERE current_pr = 1234
     * $query->filterByCurrentPr(array(12, 34)); // WHERE current_pr IN (12, 34)
     * $query->filterByCurrentPr(array('min' => 12)); // WHERE current_pr >= 12
     * $query->filterByCurrentPr(array('max' => 12)); // WHERE current_pr <= 12
     * </code>
     *
     * @param     mixed $currentPr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentPr($currentPr = null, $comparison = null)
    {
        if (is_array($currentPr)) {
            $useMinMax = false;
            if (isset($currentPr['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_PR, $currentPr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentPr['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_PR, $currentPr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_PR, $currentPr, $comparison);
    }

    /**
     * Filter the query on the current_sk column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentSk(1234); // WHERE current_sk = 1234
     * $query->filterByCurrentSk(array(12, 34)); // WHERE current_sk IN (12, 34)
     * $query->filterByCurrentSk(array('min' => 12)); // WHERE current_sk >= 12
     * $query->filterByCurrentSk(array('max' => 12)); // WHERE current_sk <= 12
     * </code>
     *
     * @param     mixed $currentSk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentSk($currentSk = null, $comparison = null)
    {
        if (is_array($currentSk)) {
            $useMinMax = false;
            if (isset($currentSk['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_SK, $currentSk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentSk['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_SK, $currentSk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_SK, $currentSk, $comparison);
    }

    /**
     * Filter the query on the current_bs column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentBs(1234); // WHERE current_bs = 1234
     * $query->filterByCurrentBs(array(12, 34)); // WHERE current_bs IN (12, 34)
     * $query->filterByCurrentBs(array('min' => 12)); // WHERE current_bs >= 12
     * $query->filterByCurrentBs(array('max' => 12)); // WHERE current_bs <= 12
     * </code>
     *
     * @param     mixed $currentBs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentBs($currentBs = null, $comparison = null)
    {
        if (is_array($currentBs)) {
            $useMinMax = false;
            if (isset($currentBs['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_BS, $currentBs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentBs['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_BS, $currentBs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_BS, $currentBs, $comparison);
    }

    /**
     * Filter the query on the current_lr column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentLr(1234); // WHERE current_lr = 1234
     * $query->filterByCurrentLr(array(12, 34)); // WHERE current_lr IN (12, 34)
     * $query->filterByCurrentLr(array('min' => 12)); // WHERE current_lr >= 12
     * $query->filterByCurrentLr(array('max' => 12)); // WHERE current_lr <= 12
     * </code>
     *
     * @param     mixed $currentLr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentLr($currentLr = null, $comparison = null)
    {
        if (is_array($currentLr)) {
            $useMinMax = false;
            if (isset($currentLr['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_LR, $currentLr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentLr['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_LR, $currentLr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_LR, $currentLr, $comparison);
    }

    /**
     * Filter the query on the current_hk column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentHk(1234); // WHERE current_hk = 1234
     * $query->filterByCurrentHk(array(12, 34)); // WHERE current_hk IN (12, 34)
     * $query->filterByCurrentHk(array('min' => 12)); // WHERE current_hk >= 12
     * $query->filterByCurrentHk(array('max' => 12)); // WHERE current_hk <= 12
     * </code>
     *
     * @param     mixed $currentHk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentHk($currentHk = null, $comparison = null)
    {
        if (is_array($currentHk)) {
            $useMinMax = false;
            if (isset($currentHk['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_HK, $currentHk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentHk['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_HK, $currentHk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_HK, $currentHk, $comparison);
    }

    /**
     * Filter the query on the current_ok column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentOk(1234); // WHERE current_ok = 1234
     * $query->filterByCurrentOk(array(12, 34)); // WHERE current_ok IN (12, 34)
     * $query->filterByCurrentOk(array('min' => 12)); // WHERE current_ok >= 12
     * $query->filterByCurrentOk(array('max' => 12)); // WHERE current_ok <= 12
     * </code>
     *
     * @param     mixed $currentOk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCurrentOk($currentOk = null, $comparison = null)
    {
        if (is_array($currentOk)) {
            $useMinMax = false;
            if (isset($currentOk['min'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_OK, $currentOk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentOk['max'])) {
                $this->addUsingAlias(CastlePeer::CURRENT_OK, $currentOk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CURRENT_OK, $currentOk, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionSt($missionSt = null, $comparison = null)
    {
        if (is_array($missionSt)) {
            $useMinMax = false;
            if (isset($missionSt['min'])) {
                $this->addUsingAlias(CastlePeer::MISSION_ST, $missionSt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionSt['max'])) {
                $this->addUsingAlias(CastlePeer::MISSION_ST, $missionSt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::MISSION_ST, $missionSt, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionAs($missionAs = null, $comparison = null)
    {
        if (is_array($missionAs)) {
            $useMinMax = false;
            if (isset($missionAs['min'])) {
                $this->addUsingAlias(CastlePeer::MISSION_AS, $missionAs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionAs['max'])) {
                $this->addUsingAlias(CastlePeer::MISSION_AS, $missionAs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::MISSION_AS, $missionAs, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionPr($missionPr = null, $comparison = null)
    {
        if (is_array($missionPr)) {
            $useMinMax = false;
            if (isset($missionPr['min'])) {
                $this->addUsingAlias(CastlePeer::MISSION_PR, $missionPr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionPr['max'])) {
                $this->addUsingAlias(CastlePeer::MISSION_PR, $missionPr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::MISSION_PR, $missionPr, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionSk($missionSk = null, $comparison = null)
    {
        if (is_array($missionSk)) {
            $useMinMax = false;
            if (isset($missionSk['min'])) {
                $this->addUsingAlias(CastlePeer::MISSION_SK, $missionSk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionSk['max'])) {
                $this->addUsingAlias(CastlePeer::MISSION_SK, $missionSk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::MISSION_SK, $missionSk, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionBs($missionBs = null, $comparison = null)
    {
        if (is_array($missionBs)) {
            $useMinMax = false;
            if (isset($missionBs['min'])) {
                $this->addUsingAlias(CastlePeer::MISSION_BS, $missionBs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionBs['max'])) {
                $this->addUsingAlias(CastlePeer::MISSION_BS, $missionBs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::MISSION_BS, $missionBs, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionLr($missionLr = null, $comparison = null)
    {
        if (is_array($missionLr)) {
            $useMinMax = false;
            if (isset($missionLr['min'])) {
                $this->addUsingAlias(CastlePeer::MISSION_LR, $missionLr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($missionLr['max'])) {
                $this->addUsingAlias(CastlePeer::MISSION_LR, $missionLr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::MISSION_LR, $missionLr, $comparison);
    }

    /**
     * Filter the query on the usage_off column
     *
     * Example usage:
     * <code>
     * $query->filterByUsageOff(true); // WHERE usage_off = true
     * $query->filterByUsageOff('yes'); // WHERE usage_off = true
     * </code>
     *
     * @param     boolean|string $usageOff The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByUsageOff($usageOff = null, $comparison = null)
    {
        if (is_string($usageOff)) {
            $usageOff = in_array(strtolower($usageOff), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastlePeer::USAGE_OFF, $usageOff, $comparison);
    }

    /**
     * Filter the query on the usage_def column
     *
     * Example usage:
     * <code>
     * $query->filterByUsageDef(true); // WHERE usage_def = true
     * $query->filterByUsageDef('yes'); // WHERE usage_def = true
     * </code>
     *
     * @param     boolean|string $usageDef The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByUsageDef($usageDef = null, $comparison = null)
    {
        if (is_string($usageDef)) {
            $usageDef = in_array(strtolower($usageDef), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastlePeer::USAGE_DEF, $usageDef, $comparison);
    }

    /**
     * Filter the query on the mission_priority column
     *
     * Example usage:
     * <code>
     * $query->filterByMissionPriority(true); // WHERE mission_priority = true
     * $query->filterByMissionPriority('yes'); // WHERE mission_priority = true
     * </code>
     *
     * @param     boolean|string $missionPriority The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByMissionPriority($missionPriority = null, $comparison = null)
    {
        if (is_string($missionPriority)) {
            $missionPriority = in_array(strtolower($missionPriority), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastlePeer::MISSION_PRIORITY, $missionPriority, $comparison);
    }

    /**
     * Filter the query on the environment_card column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvironmentCard(true); // WHERE environment_card = true
     * $query->filterByEnvironmentCard('yes'); // WHERE environment_card = true
     * </code>
     *
     * @param     boolean|string $environmentCard The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByEnvironmentCard($environmentCard = null, $comparison = null)
    {
        if (is_string($environmentCard)) {
            $environmentCard = in_array(strtolower($environmentCard), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CastlePeer::ENVIRONMENT_CARD, $environmentCard, $comparison);
    }

    /**
     * Filter the query on the autodef_coordinates column
     *
     * Example usage:
     * <code>
     * $query->filterByAutodefCoordinates('fooValue');   // WHERE autodef_coordinates = 'fooValue'
     * $query->filterByAutodefCoordinates('%fooValue%'); // WHERE autodef_coordinates LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autodefCoordinates The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByAutodefCoordinates($autodefCoordinates = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autodefCoordinates)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autodefCoordinates)) {
                $autodefCoordinates = str_replace('*', '%', $autodefCoordinates);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CastlePeer::AUTODEF_COORDINATES, $autodefCoordinates, $comparison);
    }

    /**
     * Filter the query on the autodef_X column
     *
     * Example usage:
     * <code>
     * $query->filterByAutodefX(1234); // WHERE autodef_X = 1234
     * $query->filterByAutodefX(array(12, 34)); // WHERE autodef_X IN (12, 34)
     * $query->filterByAutodefX(array('min' => 12)); // WHERE autodef_X >= 12
     * $query->filterByAutodefX(array('max' => 12)); // WHERE autodef_X <= 12
     * </code>
     *
     * @param     mixed $autodefX The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByAutodefX($autodefX = null, $comparison = null)
    {
        if (is_array($autodefX)) {
            $useMinMax = false;
            if (isset($autodefX['min'])) {
                $this->addUsingAlias(CastlePeer::AUTODEF_X, $autodefX['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autodefX['max'])) {
                $this->addUsingAlias(CastlePeer::AUTODEF_X, $autodefX['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::AUTODEF_X, $autodefX, $comparison);
    }

    /**
     * Filter the query on the autodef_Y column
     *
     * Example usage:
     * <code>
     * $query->filterByAutodefY(1234); // WHERE autodef_Y = 1234
     * $query->filterByAutodefY(array(12, 34)); // WHERE autodef_Y IN (12, 34)
     * $query->filterByAutodefY(array('min' => 12)); // WHERE autodef_Y >= 12
     * $query->filterByAutodefY(array('max' => 12)); // WHERE autodef_Y <= 12
     * </code>
     *
     * @param     mixed $autodefY The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByAutodefY($autodefY = null, $comparison = null)
    {
        if (is_array($autodefY)) {
            $useMinMax = false;
            if (isset($autodefY['min'])) {
                $this->addUsingAlias(CastlePeer::AUTODEF_Y, $autodefY['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autodefY['max'])) {
                $this->addUsingAlias(CastlePeer::AUTODEF_Y, $autodefY['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::AUTODEF_Y, $autodefY, $comparison);
    }

    /**
     * Filter the query on the points column
     *
     * Example usage:
     * <code>
     * $query->filterByPoints(1234); // WHERE points = 1234
     * $query->filterByPoints(array(12, 34)); // WHERE points IN (12, 34)
     * $query->filterByPoints(array('min' => 12)); // WHERE points >= 12
     * $query->filterByPoints(array('max' => 12)); // WHERE points <= 12
     * </code>
     *
     * @param     mixed $points The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByPoints($points = null, $comparison = null)
    {
        if (is_array($points)) {
            $useMinMax = false;
            if (isset($points['min'])) {
                $this->addUsingAlias(CastlePeer::POINTS, $points['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($points['max'])) {
                $this->addUsingAlias(CastlePeer::POINTS, $points['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::POINTS, $points, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByFreePopulation($freePopulation = null, $comparison = null)
    {
        if (is_array($freePopulation)) {
            $useMinMax = false;
            if (isset($freePopulation['min'])) {
                $this->addUsingAlias(CastlePeer::FREE_POPULATION, $freePopulation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freePopulation['max'])) {
                $this->addUsingAlias(CastlePeer::FREE_POPULATION, $freePopulation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::FREE_POPULATION, $freePopulation, $comparison);
    }

    /**
     * Filter the query on the last_import column
     *
     * Example usage:
     * <code>
     * $query->filterByLastImport('2011-03-14'); // WHERE last_import = '2011-03-14'
     * $query->filterByLastImport('now'); // WHERE last_import = '2011-03-14'
     * $query->filterByLastImport(array('max' => 'yesterday')); // WHERE last_import < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastImport The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByLastImport($lastImport = null, $comparison = null)
    {
        if (is_array($lastImport)) {
            $useMinMax = false;
            if (isset($lastImport['min'])) {
                $this->addUsingAlias(CastlePeer::LAST_IMPORT, $lastImport['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastImport['max'])) {
                $this->addUsingAlias(CastlePeer::LAST_IMPORT, $lastImport['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::LAST_IMPORT, $lastImport, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CastlePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CastlePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::CREATED_AT, $createdAt, $comparison);
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
     * @return CastleQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CastlePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CastlePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related CastleType object
     *
     * @param   CastleType|PropelObjectCollection $castleType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastleType($castleType, $comparison = null)
    {
        if ($castleType instanceof CastleType) {
            return $this
                ->addUsingAlias(CastlePeer::CASTLE_TYPE_ID, $castleType->getId(), $comparison);
        } elseif ($castleType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastlePeer::CASTLE_TYPE_ID, $castleType->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCastleType() only accepts arguments of type CastleType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CastleType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function joinCastleType($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CastleType');

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
            $this->addJoinObject($join, 'CastleType');
        }

        return $this;
    }

    /**
     * Use the CastleType relation CastleType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CastleTypeQuery A secondary query class using the current class as primary query
     */
    public function useCastleTypeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCastleType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CastleType', 'CastleTypeQuery');
    }

    /**
     * Filter the query by a related CastleLocation object
     *
     * @param   CastleLocation|PropelObjectCollection $castleLocation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastleLocation($castleLocation, $comparison = null)
    {
        if ($castleLocation instanceof CastleLocation) {
            return $this
                ->addUsingAlias(CastlePeer::CASTLE_LOCATION_ID, $castleLocation->getId(), $comparison);
        } elseif ($castleLocation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastlePeer::CASTLE_LOCATION_ID, $castleLocation->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCastleLocation() only accepts arguments of type CastleLocation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CastleLocation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function joinCastleLocation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CastleLocation');

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
            $this->addJoinObject($join, 'CastleLocation');
        }

        return $this;
    }

    /**
     * Use the CastleLocation relation CastleLocation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CastleLocationQuery A secondary query class using the current class as primary query
     */
    public function useCastleLocationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCastleLocation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CastleLocation', 'CastleLocationQuery');
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(CastlePeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastlePeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CastleQuery The current query, for fluid interface
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
     * Filter the query by a related Attack2castle object
     *
     * @param   Attack2castle|PropelObjectCollection $attack2castle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAttack2castle($attack2castle, $comparison = null)
    {
        if ($attack2castle instanceof Attack2castle) {
            return $this
                ->addUsingAlias(CastlePeer::ID, $attack2castle->getCastleId(), $comparison);
        } elseif ($attack2castle instanceof PropelObjectCollection) {
            return $this
                ->useAttack2castleQuery()
                ->filterByPrimaryKeys($attack2castle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAttack2castle() only accepts arguments of type Attack2castle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Attack2castle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function joinAttack2castle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Attack2castle');

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
            $this->addJoinObject($join, 'Attack2castle');
        }

        return $this;
    }

    /**
     * Use the Attack2castle relation Attack2castle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   Attack2castleQuery A secondary query class using the current class as primary query
     */
    public function useAttack2castleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttack2castle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Attack2castle', 'Attack2castleQuery');
    }

    /**
     * Filter the query by a related Attack object
     * using the attack2castle table as cross reference
     *
     * @param   Attack $attack the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CastleQuery The current query, for fluid interface
     */
    public function filterByAttack($attack, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useAttack2castleQuery()
            ->filterByAttack($attack, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   Castle $castle Object to remove from the list of results
     *
     * @return CastleQuery The current query, for fluid interface
     */
    public function prune($castle = null)
    {
        if ($castle) {
            $this->addUsingAlias(CastlePeer::ID, $castle->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     CastleQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(CastlePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     CastleQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(CastlePeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     CastleQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(CastlePeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     CastleQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(CastlePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     CastleQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(CastlePeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     CastleQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(CastlePeer::CREATED_AT);
    }
}

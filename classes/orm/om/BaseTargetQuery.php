<?php


/**
 * Base class that represents a query for the 'target' table.
 *
 *
 *
 * @method TargetQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TargetQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method TargetQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method TargetQuery orderByCoordinates($order = Criteria::ASC) Order by the coordinates column
 * @method TargetQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method TargetQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method TargetQuery orderByStartTime($order = Criteria::ASC) Order by the start_time column
 * @method TargetQuery orderByUseMissionTroops($order = Criteria::ASC) Order by the use_mission_troops column
 * @method TargetQuery orderByFilterCastlesOff($order = Criteria::ASC) Order by the filter_Castles_Off column
 * @method TargetQuery orderByFilterCastlesDef($order = Criteria::ASC) Order by the filter_Castles_Def column
 * @method TargetQuery orderByFilterCastlesMix($order = Criteria::ASC) Order by the filter_Castles_Mix column
 * @method TargetQuery orderByFilterTroopsMarker($order = Criteria::ASC) Order by the filter_Troops_Marker column
 * @method TargetQuery orderByFilterTroopsOff($order = Criteria::ASC) Order by the filter_Troops_Off column
 * @method TargetQuery orderByFilterTroopsDef($order = Criteria::ASC) Order by the filter_Troops_Def column
 * @method TargetQuery orderBySort($order = Criteria::ASC) Order by the sort column
 * @method TargetQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method TargetQuery orderByTargetSilver($order = Criteria::ASC) Order by the target_silver column
 * @method TargetQuery orderByTargetSk($order = Criteria::ASC) Order by the target_sk column
 * @method TargetQuery orderByTargetBs($order = Criteria::ASC) Order by the target_bs column
 * @method TargetQuery orderByTargetLr($order = Criteria::ASC) Order by the target_lr column
 * @method TargetQuery orderByTotalSilver($order = Criteria::ASC) Order by the total_silver column
 * @method TargetQuery orderByTotalSt($order = Criteria::ASC) Order by the total_st column
 * @method TargetQuery orderByTotalSk($order = Criteria::ASC) Order by the total_sk column
 * @method TargetQuery orderByTotalBs($order = Criteria::ASC) Order by the total_bs column
 * @method TargetQuery orderByTotalAs($order = Criteria::ASC) Order by the total_as column
 * @method TargetQuery orderByTotalPr($order = Criteria::ASC) Order by the total_pr column
 * @method TargetQuery orderByTotalLr($order = Criteria::ASC) Order by the total_lr column
 * @method TargetQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method TargetQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method TargetQuery groupById() Group by the id column
 * @method TargetQuery groupByUserId() Group by the user_id column
 * @method TargetQuery groupByName() Group by the name column
 * @method TargetQuery groupByCoordinates() Group by the coordinates column
 * @method TargetQuery groupByDate() Group by the date column
 * @method TargetQuery groupByTime() Group by the time column
 * @method TargetQuery groupByStartTime() Group by the start_time column
 * @method TargetQuery groupByUseMissionTroops() Group by the use_mission_troops column
 * @method TargetQuery groupByFilterCastlesOff() Group by the filter_Castles_Off column
 * @method TargetQuery groupByFilterCastlesDef() Group by the filter_Castles_Def column
 * @method TargetQuery groupByFilterCastlesMix() Group by the filter_Castles_Mix column
 * @method TargetQuery groupByFilterTroopsMarker() Group by the filter_Troops_Marker column
 * @method TargetQuery groupByFilterTroopsOff() Group by the filter_Troops_Off column
 * @method TargetQuery groupByFilterTroopsDef() Group by the filter_Troops_Def column
 * @method TargetQuery groupBySort() Group by the sort column
 * @method TargetQuery groupByPriority() Group by the priority column
 * @method TargetQuery groupByTargetSilver() Group by the target_silver column
 * @method TargetQuery groupByTargetSk() Group by the target_sk column
 * @method TargetQuery groupByTargetBs() Group by the target_bs column
 * @method TargetQuery groupByTargetLr() Group by the target_lr column
 * @method TargetQuery groupByTotalSilver() Group by the total_silver column
 * @method TargetQuery groupByTotalSt() Group by the total_st column
 * @method TargetQuery groupByTotalSk() Group by the total_sk column
 * @method TargetQuery groupByTotalBs() Group by the total_bs column
 * @method TargetQuery groupByTotalAs() Group by the total_as column
 * @method TargetQuery groupByTotalPr() Group by the total_pr column
 * @method TargetQuery groupByTotalLr() Group by the total_lr column
 * @method TargetQuery groupByCreatedAt() Group by the created_at column
 * @method TargetQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method TargetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TargetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TargetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TargetQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method TargetQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method TargetQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method TargetQuery leftJoinTargetActions($relationAlias = null) Adds a LEFT JOIN clause to the query using the TargetActions relation
 * @method TargetQuery rightJoinTargetActions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TargetActions relation
 * @method TargetQuery innerJoinTargetActions($relationAlias = null) Adds a INNER JOIN clause to the query using the TargetActions relation
 *
 * @method Target findOne(PropelPDO $con = null) Return the first Target matching the query
 * @method Target findOneOrCreate(PropelPDO $con = null) Return the first Target matching the query, or a new Target object populated from the query conditions when no match is found
 *
 * @method Target findOneByUserId(int $user_id) Return the first Target filtered by the user_id column
 * @method Target findOneByName(string $name) Return the first Target filtered by the name column
 * @method Target findOneByCoordinates(string $coordinates) Return the first Target filtered by the coordinates column
 * @method Target findOneByDate(string $date) Return the first Target filtered by the date column
 * @method Target findOneByTime(string $time) Return the first Target filtered by the time column
 * @method Target findOneByStartTime(boolean $start_time) Return the first Target filtered by the start_time column
 * @method Target findOneByUseMissionTroops(boolean $use_mission_troops) Return the first Target filtered by the use_mission_troops column
 * @method Target findOneByFilterCastlesOff(boolean $filter_Castles_Off) Return the first Target filtered by the filter_Castles_Off column
 * @method Target findOneByFilterCastlesDef(boolean $filter_Castles_Def) Return the first Target filtered by the filter_Castles_Def column
 * @method Target findOneByFilterCastlesMix(boolean $filter_Castles_Mix) Return the first Target filtered by the filter_Castles_Mix column
 * @method Target findOneByFilterTroopsMarker(boolean $filter_Troops_Marker) Return the first Target filtered by the filter_Troops_Marker column
 * @method Target findOneByFilterTroopsOff(boolean $filter_Troops_Off) Return the first Target filtered by the filter_Troops_Off column
 * @method Target findOneByFilterTroopsDef(boolean $filter_Troops_Def) Return the first Target filtered by the filter_Troops_Def column
 * @method Target findOneBySort(string $sort) Return the first Target filtered by the sort column
 * @method Target findOneByPriority(string $priority) Return the first Target filtered by the priority column
 * @method Target findOneByTargetSilver(int $target_silver) Return the first Target filtered by the target_silver column
 * @method Target findOneByTargetSk(int $target_sk) Return the first Target filtered by the target_sk column
 * @method Target findOneByTargetBs(int $target_bs) Return the first Target filtered by the target_bs column
 * @method Target findOneByTargetLr(int $target_lr) Return the first Target filtered by the target_lr column
 * @method Target findOneByTotalSilver(int $total_silver) Return the first Target filtered by the total_silver column
 * @method Target findOneByTotalSt(int $total_st) Return the first Target filtered by the total_st column
 * @method Target findOneByTotalSk(int $total_sk) Return the first Target filtered by the total_sk column
 * @method Target findOneByTotalBs(int $total_bs) Return the first Target filtered by the total_bs column
 * @method Target findOneByTotalAs(int $total_as) Return the first Target filtered by the total_as column
 * @method Target findOneByTotalPr(int $total_pr) Return the first Target filtered by the total_pr column
 * @method Target findOneByTotalLr(int $total_lr) Return the first Target filtered by the total_lr column
 * @method Target findOneByCreatedAt(string $created_at) Return the first Target filtered by the created_at column
 * @method Target findOneByUpdatedAt(string $updated_at) Return the first Target filtered by the updated_at column
 *
 * @method array findById(int $id) Return Target objects filtered by the id column
 * @method array findByUserId(int $user_id) Return Target objects filtered by the user_id column
 * @method array findByName(string $name) Return Target objects filtered by the name column
 * @method array findByCoordinates(string $coordinates) Return Target objects filtered by the coordinates column
 * @method array findByDate(string $date) Return Target objects filtered by the date column
 * @method array findByTime(string $time) Return Target objects filtered by the time column
 * @method array findByStartTime(boolean $start_time) Return Target objects filtered by the start_time column
 * @method array findByUseMissionTroops(boolean $use_mission_troops) Return Target objects filtered by the use_mission_troops column
 * @method array findByFilterCastlesOff(boolean $filter_Castles_Off) Return Target objects filtered by the filter_Castles_Off column
 * @method array findByFilterCastlesDef(boolean $filter_Castles_Def) Return Target objects filtered by the filter_Castles_Def column
 * @method array findByFilterCastlesMix(boolean $filter_Castles_Mix) Return Target objects filtered by the filter_Castles_Mix column
 * @method array findByFilterTroopsMarker(boolean $filter_Troops_Marker) Return Target objects filtered by the filter_Troops_Marker column
 * @method array findByFilterTroopsOff(boolean $filter_Troops_Off) Return Target objects filtered by the filter_Troops_Off column
 * @method array findByFilterTroopsDef(boolean $filter_Troops_Def) Return Target objects filtered by the filter_Troops_Def column
 * @method array findBySort(string $sort) Return Target objects filtered by the sort column
 * @method array findByPriority(string $priority) Return Target objects filtered by the priority column
 * @method array findByTargetSilver(int $target_silver) Return Target objects filtered by the target_silver column
 * @method array findByTargetSk(int $target_sk) Return Target objects filtered by the target_sk column
 * @method array findByTargetBs(int $target_bs) Return Target objects filtered by the target_bs column
 * @method array findByTargetLr(int $target_lr) Return Target objects filtered by the target_lr column
 * @method array findByTotalSilver(int $total_silver) Return Target objects filtered by the total_silver column
 * @method array findByTotalSt(int $total_st) Return Target objects filtered by the total_st column
 * @method array findByTotalSk(int $total_sk) Return Target objects filtered by the total_sk column
 * @method array findByTotalBs(int $total_bs) Return Target objects filtered by the total_bs column
 * @method array findByTotalAs(int $total_as) Return Target objects filtered by the total_as column
 * @method array findByTotalPr(int $total_pr) Return Target objects filtered by the total_pr column
 * @method array findByTotalLr(int $total_lr) Return Target objects filtered by the total_lr column
 * @method array findByCreatedAt(string $created_at) Return Target objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Target objects filtered by the updated_at column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseTargetQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTargetQuery object.
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
            $modelName = 'Target';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TargetQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TargetQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TargetQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TargetQuery) {
            return $criteria;
        }
        $query = new TargetQuery(null, null, $modelAlias);

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
     * @return   Target|Target[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TargetPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Target A model object, or null if the key is not found
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
     * @return                 Target A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `name`, `coordinates`, `date`, `time`, `start_time`, `use_mission_troops`, `filter_Castles_Off`, `filter_Castles_Def`, `filter_Castles_Mix`, `filter_Troops_Marker`, `filter_Troops_Off`, `filter_Troops_Def`, `sort`, `priority`, `target_silver`, `target_sk`, `target_bs`, `target_lr`, `total_silver`, `total_st`, `total_sk`, `total_bs`, `total_as`, `total_pr`, `total_lr`, `created_at`, `updated_at` FROM `target` WHERE `id` = :p0';
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
            $obj = new Target();
            $obj->hydrate($row);
            TargetPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Target|Target[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Target[]|mixed the list of results, formatted by the current formatter
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TargetPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TargetPeer::ID, $keys, Criteria::IN);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TargetPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TargetPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::ID, $id, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(TargetPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(TargetPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::USER_ID, $userId, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TargetPeer::NAME, $name, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TargetPeer::COORDINATES, $coordinates, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TargetPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the time column
     *
     * Example usage:
     * <code>
     * $query->filterByTime('fooValue');   // WHERE time = 'fooValue'
     * $query->filterByTime('%fooValue%'); // WHERE time LIKE '%fooValue%'
     * </code>
     *
     * @param     string $time The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTime($time = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($time)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $time)) {
                $time = str_replace('*', '%', $time);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TargetPeer::TIME, $time, $comparison);
    }

    /**
     * Filter the query on the start_time column
     *
     * Example usage:
     * <code>
     * $query->filterByStartTime(true); // WHERE start_time = true
     * $query->filterByStartTime('yes'); // WHERE start_time = true
     * </code>
     *
     * @param     boolean|string $startTime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByStartTime($startTime = null, $comparison = null)
    {
        if (is_string($startTime)) {
            $startTime = in_array(strtolower($startTime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::START_TIME, $startTime, $comparison);
    }

    /**
     * Filter the query on the use_mission_troops column
     *
     * Example usage:
     * <code>
     * $query->filterByUseMissionTroops(true); // WHERE use_mission_troops = true
     * $query->filterByUseMissionTroops('yes'); // WHERE use_mission_troops = true
     * </code>
     *
     * @param     boolean|string $useMissionTroops The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByUseMissionTroops($useMissionTroops = null, $comparison = null)
    {
        if (is_string($useMissionTroops)) {
            $useMissionTroops = in_array(strtolower($useMissionTroops), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::USE_MISSION_TROOPS, $useMissionTroops, $comparison);
    }

    /**
     * Filter the query on the filter_Castles_Off column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterCastlesOff(true); // WHERE filter_Castles_Off = true
     * $query->filterByFilterCastlesOff('yes'); // WHERE filter_Castles_Off = true
     * </code>
     *
     * @param     boolean|string $filterCastlesOff The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByFilterCastlesOff($filterCastlesOff = null, $comparison = null)
    {
        if (is_string($filterCastlesOff)) {
            $filterCastlesOff = in_array(strtolower($filterCastlesOff), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::FILTER_CASTLES_OFF, $filterCastlesOff, $comparison);
    }

    /**
     * Filter the query on the filter_Castles_Def column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterCastlesDef(true); // WHERE filter_Castles_Def = true
     * $query->filterByFilterCastlesDef('yes'); // WHERE filter_Castles_Def = true
     * </code>
     *
     * @param     boolean|string $filterCastlesDef The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByFilterCastlesDef($filterCastlesDef = null, $comparison = null)
    {
        if (is_string($filterCastlesDef)) {
            $filterCastlesDef = in_array(strtolower($filterCastlesDef), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::FILTER_CASTLES_DEF, $filterCastlesDef, $comparison);
    }

    /**
     * Filter the query on the filter_Castles_Mix column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterCastlesMix(true); // WHERE filter_Castles_Mix = true
     * $query->filterByFilterCastlesMix('yes'); // WHERE filter_Castles_Mix = true
     * </code>
     *
     * @param     boolean|string $filterCastlesMix The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByFilterCastlesMix($filterCastlesMix = null, $comparison = null)
    {
        if (is_string($filterCastlesMix)) {
            $filterCastlesMix = in_array(strtolower($filterCastlesMix), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::FILTER_CASTLES_MIX, $filterCastlesMix, $comparison);
    }

    /**
     * Filter the query on the filter_Troops_Marker column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterTroopsMarker(true); // WHERE filter_Troops_Marker = true
     * $query->filterByFilterTroopsMarker('yes'); // WHERE filter_Troops_Marker = true
     * </code>
     *
     * @param     boolean|string $filterTroopsMarker The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByFilterTroopsMarker($filterTroopsMarker = null, $comparison = null)
    {
        if (is_string($filterTroopsMarker)) {
            $filterTroopsMarker = in_array(strtolower($filterTroopsMarker), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::FILTER_TROOPS_MARKER, $filterTroopsMarker, $comparison);
    }

    /**
     * Filter the query on the filter_Troops_Off column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterTroopsOff(true); // WHERE filter_Troops_Off = true
     * $query->filterByFilterTroopsOff('yes'); // WHERE filter_Troops_Off = true
     * </code>
     *
     * @param     boolean|string $filterTroopsOff The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByFilterTroopsOff($filterTroopsOff = null, $comparison = null)
    {
        if (is_string($filterTroopsOff)) {
            $filterTroopsOff = in_array(strtolower($filterTroopsOff), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::FILTER_TROOPS_OFF, $filterTroopsOff, $comparison);
    }

    /**
     * Filter the query on the filter_Troops_Def column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterTroopsDef(true); // WHERE filter_Troops_Def = true
     * $query->filterByFilterTroopsDef('yes'); // WHERE filter_Troops_Def = true
     * </code>
     *
     * @param     boolean|string $filterTroopsDef The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByFilterTroopsDef($filterTroopsDef = null, $comparison = null)
    {
        if (is_string($filterTroopsDef)) {
            $filterTroopsDef = in_array(strtolower($filterTroopsDef), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetPeer::FILTER_TROOPS_DEF, $filterTroopsDef, $comparison);
    }

    /**
     * Filter the query on the sort column
     *
     * Example usage:
     * <code>
     * $query->filterBySort('fooValue');   // WHERE sort = 'fooValue'
     * $query->filterBySort('%fooValue%'); // WHERE sort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sort The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterBySort($sort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sort)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sort)) {
                $sort = str_replace('*', '%', $sort);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TargetPeer::SORT, $sort, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority('fooValue');   // WHERE priority = 'fooValue'
     * $query->filterByPriority('%fooValue%'); // WHERE priority LIKE '%fooValue%'
     * </code>
     *
     * @param     string $priority The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($priority)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $priority)) {
                $priority = str_replace('*', '%', $priority);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TargetPeer::PRIORITY, $priority, $comparison);
    }

    /**
     * Filter the query on the target_silver column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetSilver(1234); // WHERE target_silver = 1234
     * $query->filterByTargetSilver(array(12, 34)); // WHERE target_silver IN (12, 34)
     * $query->filterByTargetSilver(array('min' => 12)); // WHERE target_silver >= 12
     * $query->filterByTargetSilver(array('max' => 12)); // WHERE target_silver <= 12
     * </code>
     *
     * @param     mixed $targetSilver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTargetSilver($targetSilver = null, $comparison = null)
    {
        if (is_array($targetSilver)) {
            $useMinMax = false;
            if (isset($targetSilver['min'])) {
                $this->addUsingAlias(TargetPeer::TARGET_SILVER, $targetSilver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetSilver['max'])) {
                $this->addUsingAlias(TargetPeer::TARGET_SILVER, $targetSilver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TARGET_SILVER, $targetSilver, $comparison);
    }

    /**
     * Filter the query on the target_sk column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetSk(1234); // WHERE target_sk = 1234
     * $query->filterByTargetSk(array(12, 34)); // WHERE target_sk IN (12, 34)
     * $query->filterByTargetSk(array('min' => 12)); // WHERE target_sk >= 12
     * $query->filterByTargetSk(array('max' => 12)); // WHERE target_sk <= 12
     * </code>
     *
     * @param     mixed $targetSk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTargetSk($targetSk = null, $comparison = null)
    {
        if (is_array($targetSk)) {
            $useMinMax = false;
            if (isset($targetSk['min'])) {
                $this->addUsingAlias(TargetPeer::TARGET_SK, $targetSk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetSk['max'])) {
                $this->addUsingAlias(TargetPeer::TARGET_SK, $targetSk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TARGET_SK, $targetSk, $comparison);
    }

    /**
     * Filter the query on the target_bs column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetBs(1234); // WHERE target_bs = 1234
     * $query->filterByTargetBs(array(12, 34)); // WHERE target_bs IN (12, 34)
     * $query->filterByTargetBs(array('min' => 12)); // WHERE target_bs >= 12
     * $query->filterByTargetBs(array('max' => 12)); // WHERE target_bs <= 12
     * </code>
     *
     * @param     mixed $targetBs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTargetBs($targetBs = null, $comparison = null)
    {
        if (is_array($targetBs)) {
            $useMinMax = false;
            if (isset($targetBs['min'])) {
                $this->addUsingAlias(TargetPeer::TARGET_BS, $targetBs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetBs['max'])) {
                $this->addUsingAlias(TargetPeer::TARGET_BS, $targetBs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TARGET_BS, $targetBs, $comparison);
    }

    /**
     * Filter the query on the target_lr column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetLr(1234); // WHERE target_lr = 1234
     * $query->filterByTargetLr(array(12, 34)); // WHERE target_lr IN (12, 34)
     * $query->filterByTargetLr(array('min' => 12)); // WHERE target_lr >= 12
     * $query->filterByTargetLr(array('max' => 12)); // WHERE target_lr <= 12
     * </code>
     *
     * @param     mixed $targetLr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTargetLr($targetLr = null, $comparison = null)
    {
        if (is_array($targetLr)) {
            $useMinMax = false;
            if (isset($targetLr['min'])) {
                $this->addUsingAlias(TargetPeer::TARGET_LR, $targetLr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetLr['max'])) {
                $this->addUsingAlias(TargetPeer::TARGET_LR, $targetLr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TARGET_LR, $targetLr, $comparison);
    }

    /**
     * Filter the query on the total_silver column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalSilver(1234); // WHERE total_silver = 1234
     * $query->filterByTotalSilver(array(12, 34)); // WHERE total_silver IN (12, 34)
     * $query->filterByTotalSilver(array('min' => 12)); // WHERE total_silver >= 12
     * $query->filterByTotalSilver(array('max' => 12)); // WHERE total_silver <= 12
     * </code>
     *
     * @param     mixed $totalSilver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalSilver($totalSilver = null, $comparison = null)
    {
        if (is_array($totalSilver)) {
            $useMinMax = false;
            if (isset($totalSilver['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_SILVER, $totalSilver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalSilver['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_SILVER, $totalSilver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_SILVER, $totalSilver, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalSt($totalSt = null, $comparison = null)
    {
        if (is_array($totalSt)) {
            $useMinMax = false;
            if (isset($totalSt['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_ST, $totalSt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalSt['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_ST, $totalSt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_ST, $totalSt, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalSk($totalSk = null, $comparison = null)
    {
        if (is_array($totalSk)) {
            $useMinMax = false;
            if (isset($totalSk['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_SK, $totalSk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalSk['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_SK, $totalSk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_SK, $totalSk, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalBs($totalBs = null, $comparison = null)
    {
        if (is_array($totalBs)) {
            $useMinMax = false;
            if (isset($totalBs['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_BS, $totalBs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalBs['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_BS, $totalBs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_BS, $totalBs, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalAs($totalAs = null, $comparison = null)
    {
        if (is_array($totalAs)) {
            $useMinMax = false;
            if (isset($totalAs['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_AS, $totalAs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalAs['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_AS, $totalAs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_AS, $totalAs, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalPr($totalPr = null, $comparison = null)
    {
        if (is_array($totalPr)) {
            $useMinMax = false;
            if (isset($totalPr['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_PR, $totalPr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalPr['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_PR, $totalPr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_PR, $totalPr, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByTotalLr($totalLr = null, $comparison = null)
    {
        if (is_array($totalLr)) {
            $useMinMax = false;
            if (isset($totalLr['min'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_LR, $totalLr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalLr['max'])) {
                $this->addUsingAlias(TargetPeer::TOTAL_LR, $totalLr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::TOTAL_LR, $totalLr, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(TargetPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(TargetPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return TargetQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(TargetPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(TargetPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TargetQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(TargetPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TargetPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return TargetQuery The current query, for fluid interface
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
     * Filter the query by a related TargetActions object
     *
     * @param   TargetActions|PropelObjectCollection $targetActions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TargetQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTargetActions($targetActions, $comparison = null)
    {
        if ($targetActions instanceof TargetActions) {
            return $this
                ->addUsingAlias(TargetPeer::ID, $targetActions->getTargetId(), $comparison);
        } elseif ($targetActions instanceof PropelObjectCollection) {
            return $this
                ->useTargetActionsQuery()
                ->filterByPrimaryKeys($targetActions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTargetActions() only accepts arguments of type TargetActions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TargetActions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function joinTargetActions($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TargetActions');

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
            $this->addJoinObject($join, 'TargetActions');
        }

        return $this;
    }

    /**
     * Use the TargetActions relation TargetActions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TargetActionsQuery A secondary query class using the current class as primary query
     */
    public function useTargetActionsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTargetActions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TargetActions', 'TargetActionsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Target $target Object to remove from the list of results
     *
     * @return TargetQuery The current query, for fluid interface
     */
    public function prune($target = null)
    {
        if ($target) {
            $this->addUsingAlias(TargetPeer::ID, $target->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     TargetQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(TargetPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     TargetQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(TargetPeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     TargetQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(TargetPeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     TargetQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(TargetPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     TargetQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(TargetPeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     TargetQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(TargetPeer::CREATED_AT);
    }
}

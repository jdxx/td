<?php


/**
 * Base class that represents a query for the 'target_actions' table.
 *
 *
 *
 * @method TargetActionsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TargetActionsQuery orderByTargetId($order = Criteria::ASC) Order by the target_id column
 * @method TargetActionsQuery orderByCastleId($order = Criteria::ASC) Order by the castle_id column
 * @method TargetActionsQuery orderByAttackSilver($order = Criteria::ASC) Order by the attack_silver column
 * @method TargetActionsQuery orderByAttackSt($order = Criteria::ASC) Order by the attack_st column
 * @method TargetActionsQuery orderByAttackSk($order = Criteria::ASC) Order by the attack_sk column
 * @method TargetActionsQuery orderByAttackBs($order = Criteria::ASC) Order by the attack_bs column
 * @method TargetActionsQuery orderByAttackAs($order = Criteria::ASC) Order by the attack_as column
 * @method TargetActionsQuery orderByAttackPr($order = Criteria::ASC) Order by the attack_pr column
 * @method TargetActionsQuery orderByAttackLr($order = Criteria::ASC) Order by the attack_lr column
 * @method TargetActionsQuery orderByAttackHk($order = Criteria::ASC) Order by the attack_hk column
 * @method TargetActionsQuery orderByAttackOk($order = Criteria::ASC) Order by the attack_ok column
 *
 * @method TargetActionsQuery groupById() Group by the id column
 * @method TargetActionsQuery groupByTargetId() Group by the target_id column
 * @method TargetActionsQuery groupByCastleId() Group by the castle_id column
 * @method TargetActionsQuery groupByAttackSilver() Group by the attack_silver column
 * @method TargetActionsQuery groupByAttackSt() Group by the attack_st column
 * @method TargetActionsQuery groupByAttackSk() Group by the attack_sk column
 * @method TargetActionsQuery groupByAttackBs() Group by the attack_bs column
 * @method TargetActionsQuery groupByAttackAs() Group by the attack_as column
 * @method TargetActionsQuery groupByAttackPr() Group by the attack_pr column
 * @method TargetActionsQuery groupByAttackLr() Group by the attack_lr column
 * @method TargetActionsQuery groupByAttackHk() Group by the attack_hk column
 * @method TargetActionsQuery groupByAttackOk() Group by the attack_ok column
 *
 * @method TargetActionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TargetActionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TargetActionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TargetActionsQuery leftJoinTarget($relationAlias = null) Adds a LEFT JOIN clause to the query using the Target relation
 * @method TargetActionsQuery rightJoinTarget($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Target relation
 * @method TargetActionsQuery innerJoinTarget($relationAlias = null) Adds a INNER JOIN clause to the query using the Target relation
 *
 * @method TargetActionsQuery leftJoinCastle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Castle relation
 * @method TargetActionsQuery rightJoinCastle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Castle relation
 * @method TargetActionsQuery innerJoinCastle($relationAlias = null) Adds a INNER JOIN clause to the query using the Castle relation
 *
 * @method TargetActions findOne(PropelPDO $con = null) Return the first TargetActions matching the query
 * @method TargetActions findOneOrCreate(PropelPDO $con = null) Return the first TargetActions matching the query, or a new TargetActions object populated from the query conditions when no match is found
 *
 * @method TargetActions findOneByTargetId(int $target_id) Return the first TargetActions filtered by the target_id column
 * @method TargetActions findOneByCastleId(int $castle_id) Return the first TargetActions filtered by the castle_id column
 * @method TargetActions findOneByAttackSilver(int $attack_silver) Return the first TargetActions filtered by the attack_silver column
 * @method TargetActions findOneByAttackSt(boolean $attack_st) Return the first TargetActions filtered by the attack_st column
 * @method TargetActions findOneByAttackSk(boolean $attack_sk) Return the first TargetActions filtered by the attack_sk column
 * @method TargetActions findOneByAttackBs(boolean $attack_bs) Return the first TargetActions filtered by the attack_bs column
 * @method TargetActions findOneByAttackAs(boolean $attack_as) Return the first TargetActions filtered by the attack_as column
 * @method TargetActions findOneByAttackPr(boolean $attack_pr) Return the first TargetActions filtered by the attack_pr column
 * @method TargetActions findOneByAttackLr(boolean $attack_lr) Return the first TargetActions filtered by the attack_lr column
 * @method TargetActions findOneByAttackHk(boolean $attack_hk) Return the first TargetActions filtered by the attack_hk column
 * @method TargetActions findOneByAttackOk(boolean $attack_ok) Return the first TargetActions filtered by the attack_ok column
 *
 * @method array findById(int $id) Return TargetActions objects filtered by the id column
 * @method array findByTargetId(int $target_id) Return TargetActions objects filtered by the target_id column
 * @method array findByCastleId(int $castle_id) Return TargetActions objects filtered by the castle_id column
 * @method array findByAttackSilver(int $attack_silver) Return TargetActions objects filtered by the attack_silver column
 * @method array findByAttackSt(boolean $attack_st) Return TargetActions objects filtered by the attack_st column
 * @method array findByAttackSk(boolean $attack_sk) Return TargetActions objects filtered by the attack_sk column
 * @method array findByAttackBs(boolean $attack_bs) Return TargetActions objects filtered by the attack_bs column
 * @method array findByAttackAs(boolean $attack_as) Return TargetActions objects filtered by the attack_as column
 * @method array findByAttackPr(boolean $attack_pr) Return TargetActions objects filtered by the attack_pr column
 * @method array findByAttackLr(boolean $attack_lr) Return TargetActions objects filtered by the attack_lr column
 * @method array findByAttackHk(boolean $attack_hk) Return TargetActions objects filtered by the attack_hk column
 * @method array findByAttackOk(boolean $attack_ok) Return TargetActions objects filtered by the attack_ok column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseTargetActionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTargetActionsQuery object.
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
            $modelName = 'TargetActions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TargetActionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TargetActionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TargetActionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TargetActionsQuery) {
            return $criteria;
        }
        $query = new TargetActionsQuery(null, null, $modelAlias);

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
     * @return   TargetActions|TargetActions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TargetActionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TargetActionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TargetActions A model object, or null if the key is not found
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
     * @return                 TargetActions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `target_id`, `castle_id`, `attack_silver`, `attack_st`, `attack_sk`, `attack_bs`, `attack_as`, `attack_pr`, `attack_lr`, `attack_hk`, `attack_ok` FROM `target_actions` WHERE `id` = :p0';
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
            $obj = new TargetActions();
            $obj->hydrate($row);
            TargetActionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TargetActions|TargetActions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TargetActions[]|mixed the list of results, formatted by the current formatter
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
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TargetActionsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TargetActionsPeer::ID, $keys, Criteria::IN);
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
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TargetActionsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TargetActionsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetActionsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the target_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetId(1234); // WHERE target_id = 1234
     * $query->filterByTargetId(array(12, 34)); // WHERE target_id IN (12, 34)
     * $query->filterByTargetId(array('min' => 12)); // WHERE target_id >= 12
     * $query->filterByTargetId(array('max' => 12)); // WHERE target_id <= 12
     * </code>
     *
     * @see       filterByTarget()
     *
     * @param     mixed $targetId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByTargetId($targetId = null, $comparison = null)
    {
        if (is_array($targetId)) {
            $useMinMax = false;
            if (isset($targetId['min'])) {
                $this->addUsingAlias(TargetActionsPeer::TARGET_ID, $targetId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($targetId['max'])) {
                $this->addUsingAlias(TargetActionsPeer::TARGET_ID, $targetId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetActionsPeer::TARGET_ID, $targetId, $comparison);
    }

    /**
     * Filter the query on the castle_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCastleId(1234); // WHERE castle_id = 1234
     * $query->filterByCastleId(array(12, 34)); // WHERE castle_id IN (12, 34)
     * $query->filterByCastleId(array('min' => 12)); // WHERE castle_id >= 12
     * $query->filterByCastleId(array('max' => 12)); // WHERE castle_id <= 12
     * </code>
     *
     * @see       filterByCastle()
     *
     * @param     mixed $castleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByCastleId($castleId = null, $comparison = null)
    {
        if (is_array($castleId)) {
            $useMinMax = false;
            if (isset($castleId['min'])) {
                $this->addUsingAlias(TargetActionsPeer::CASTLE_ID, $castleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($castleId['max'])) {
                $this->addUsingAlias(TargetActionsPeer::CASTLE_ID, $castleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetActionsPeer::CASTLE_ID, $castleId, $comparison);
    }

    /**
     * Filter the query on the attack_silver column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackSilver(1234); // WHERE attack_silver = 1234
     * $query->filterByAttackSilver(array(12, 34)); // WHERE attack_silver IN (12, 34)
     * $query->filterByAttackSilver(array('min' => 12)); // WHERE attack_silver >= 12
     * $query->filterByAttackSilver(array('max' => 12)); // WHERE attack_silver <= 12
     * </code>
     *
     * @param     mixed $attackSilver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackSilver($attackSilver = null, $comparison = null)
    {
        if (is_array($attackSilver)) {
            $useMinMax = false;
            if (isset($attackSilver['min'])) {
                $this->addUsingAlias(TargetActionsPeer::ATTACK_SILVER, $attackSilver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attackSilver['max'])) {
                $this->addUsingAlias(TargetActionsPeer::ATTACK_SILVER, $attackSilver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_SILVER, $attackSilver, $comparison);
    }

    /**
     * Filter the query on the attack_st column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackSt(true); // WHERE attack_st = true
     * $query->filterByAttackSt('yes'); // WHERE attack_st = true
     * </code>
     *
     * @param     boolean|string $attackSt The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackSt($attackSt = null, $comparison = null)
    {
        if (is_string($attackSt)) {
            $attackSt = in_array(strtolower($attackSt), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_ST, $attackSt, $comparison);
    }

    /**
     * Filter the query on the attack_sk column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackSk(true); // WHERE attack_sk = true
     * $query->filterByAttackSk('yes'); // WHERE attack_sk = true
     * </code>
     *
     * @param     boolean|string $attackSk The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackSk($attackSk = null, $comparison = null)
    {
        if (is_string($attackSk)) {
            $attackSk = in_array(strtolower($attackSk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_SK, $attackSk, $comparison);
    }

    /**
     * Filter the query on the attack_bs column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackBs(true); // WHERE attack_bs = true
     * $query->filterByAttackBs('yes'); // WHERE attack_bs = true
     * </code>
     *
     * @param     boolean|string $attackBs The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackBs($attackBs = null, $comparison = null)
    {
        if (is_string($attackBs)) {
            $attackBs = in_array(strtolower($attackBs), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_BS, $attackBs, $comparison);
    }

    /**
     * Filter the query on the attack_as column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackAs(true); // WHERE attack_as = true
     * $query->filterByAttackAs('yes'); // WHERE attack_as = true
     * </code>
     *
     * @param     boolean|string $attackAs The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackAs($attackAs = null, $comparison = null)
    {
        if (is_string($attackAs)) {
            $attackAs = in_array(strtolower($attackAs), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_AS, $attackAs, $comparison);
    }

    /**
     * Filter the query on the attack_pr column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackPr(true); // WHERE attack_pr = true
     * $query->filterByAttackPr('yes'); // WHERE attack_pr = true
     * </code>
     *
     * @param     boolean|string $attackPr The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackPr($attackPr = null, $comparison = null)
    {
        if (is_string($attackPr)) {
            $attackPr = in_array(strtolower($attackPr), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_PR, $attackPr, $comparison);
    }

    /**
     * Filter the query on the attack_lr column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackLr(true); // WHERE attack_lr = true
     * $query->filterByAttackLr('yes'); // WHERE attack_lr = true
     * </code>
     *
     * @param     boolean|string $attackLr The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackLr($attackLr = null, $comparison = null)
    {
        if (is_string($attackLr)) {
            $attackLr = in_array(strtolower($attackLr), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_LR, $attackLr, $comparison);
    }

    /**
     * Filter the query on the attack_hk column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackHk(true); // WHERE attack_hk = true
     * $query->filterByAttackHk('yes'); // WHERE attack_hk = true
     * </code>
     *
     * @param     boolean|string $attackHk The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackHk($attackHk = null, $comparison = null)
    {
        if (is_string($attackHk)) {
            $attackHk = in_array(strtolower($attackHk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_HK, $attackHk, $comparison);
    }

    /**
     * Filter the query on the attack_ok column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackOk(true); // WHERE attack_ok = true
     * $query->filterByAttackOk('yes'); // WHERE attack_ok = true
     * </code>
     *
     * @param     boolean|string $attackOk The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function filterByAttackOk($attackOk = null, $comparison = null)
    {
        if (is_string($attackOk)) {
            $attackOk = in_array(strtolower($attackOk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TargetActionsPeer::ATTACK_OK, $attackOk, $comparison);
    }

    /**
     * Filter the query by a related Target object
     *
     * @param   Target|PropelObjectCollection $target The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TargetActionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTarget($target, $comparison = null)
    {
        if ($target instanceof Target) {
            return $this
                ->addUsingAlias(TargetActionsPeer::TARGET_ID, $target->getId(), $comparison);
        } elseif ($target instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TargetActionsPeer::TARGET_ID, $target->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTarget() only accepts arguments of type Target or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Target relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function joinTarget($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Target');

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
            $this->addJoinObject($join, 'Target');
        }

        return $this;
    }

    /**
     * Use the Target relation Target object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TargetQuery A secondary query class using the current class as primary query
     */
    public function useTargetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTarget($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Target', 'TargetQuery');
    }

    /**
     * Filter the query by a related Castle object
     *
     * @param   Castle|PropelObjectCollection $castle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TargetActionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastle($castle, $comparison = null)
    {
        if ($castle instanceof Castle) {
            return $this
                ->addUsingAlias(TargetActionsPeer::CASTLE_ID, $castle->getId(), $comparison);
        } elseif ($castle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TargetActionsPeer::CASTLE_ID, $castle->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return TargetActionsQuery The current query, for fluid interface
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
     * @param   TargetActions $targetActions Object to remove from the list of results
     *
     * @return TargetActionsQuery The current query, for fluid interface
     */
    public function prune($targetActions = null)
    {
        if ($targetActions) {
            $this->addUsingAlias(TargetActionsPeer::ID, $targetActions->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}

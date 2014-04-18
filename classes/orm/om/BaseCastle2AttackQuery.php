<?php


/**
 * Base class that represents a query for the 'castle_2_attack' table.
 *
 *
 *
 * @method Castle2AttackQuery orderByCastleId($order = Criteria::ASC) Order by the castle_id column
 * @method Castle2AttackQuery orderByAttackId($order = Criteria::ASC) Order by the attack_id column
 *
 * @method Castle2AttackQuery groupByCastleId() Group by the castle_id column
 * @method Castle2AttackQuery groupByAttackId() Group by the attack_id column
 *
 * @method Castle2AttackQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Castle2AttackQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Castle2AttackQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Castle2AttackQuery leftJoinAttack($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attack relation
 * @method Castle2AttackQuery rightJoinAttack($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attack relation
 * @method Castle2AttackQuery innerJoinAttack($relationAlias = null) Adds a INNER JOIN clause to the query using the Attack relation
 *
 * @method Castle2AttackQuery leftJoinCastle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Castle relation
 * @method Castle2AttackQuery rightJoinCastle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Castle relation
 * @method Castle2AttackQuery innerJoinCastle($relationAlias = null) Adds a INNER JOIN clause to the query using the Castle relation
 *
 * @method Castle2Attack findOne(PropelPDO $con = null) Return the first Castle2Attack matching the query
 * @method Castle2Attack findOneOrCreate(PropelPDO $con = null) Return the first Castle2Attack matching the query, or a new Castle2Attack object populated from the query conditions when no match is found
 *
 * @method Castle2Attack findOneByCastleId(int $castle_id) Return the first Castle2Attack filtered by the castle_id column
 * @method Castle2Attack findOneByAttackId(int $attack_id) Return the first Castle2Attack filtered by the attack_id column
 *
 * @method array findByCastleId(int $castle_id) Return Castle2Attack objects filtered by the castle_id column
 * @method array findByAttackId(int $attack_id) Return Castle2Attack objects filtered by the attack_id column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastle2AttackQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCastle2AttackQuery object.
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
            $modelName = 'Castle2Attack';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Castle2AttackQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Castle2AttackQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Castle2AttackQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Castle2AttackQuery) {
            return $criteria;
        }
        $query = new Castle2AttackQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$castle_id, $attack_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Castle2Attack|Castle2Attack[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Castle2AttackPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Castle2AttackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Castle2Attack A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `castle_id`, `attack_id` FROM `castle_2_attack` WHERE `castle_id` = :p0 AND `attack_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Castle2Attack();
            $obj->hydrate($row);
            Castle2AttackPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Castle2Attack|Castle2Attack[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Castle2Attack[]|mixed the list of results, formatted by the current formatter
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
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(Castle2AttackPeer::CASTLE_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(Castle2AttackPeer::ATTACK_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(Castle2AttackPeer::CASTLE_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(Castle2AttackPeer::ATTACK_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function filterByCastleId($castleId = null, $comparison = null)
    {
        if (is_array($castleId)) {
            $useMinMax = false;
            if (isset($castleId['min'])) {
                $this->addUsingAlias(Castle2AttackPeer::CASTLE_ID, $castleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($castleId['max'])) {
                $this->addUsingAlias(Castle2AttackPeer::CASTLE_ID, $castleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Castle2AttackPeer::CASTLE_ID, $castleId, $comparison);
    }

    /**
     * Filter the query on the attack_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAttackId(1234); // WHERE attack_id = 1234
     * $query->filterByAttackId(array(12, 34)); // WHERE attack_id IN (12, 34)
     * $query->filterByAttackId(array('min' => 12)); // WHERE attack_id >= 12
     * $query->filterByAttackId(array('max' => 12)); // WHERE attack_id <= 12
     * </code>
     *
     * @see       filterByAttack()
     *
     * @param     mixed $attackId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function filterByAttackId($attackId = null, $comparison = null)
    {
        if (is_array($attackId)) {
            $useMinMax = false;
            if (isset($attackId['min'])) {
                $this->addUsingAlias(Castle2AttackPeer::ATTACK_ID, $attackId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attackId['max'])) {
                $this->addUsingAlias(Castle2AttackPeer::ATTACK_ID, $attackId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Castle2AttackPeer::ATTACK_ID, $attackId, $comparison);
    }

    /**
     * Filter the query by a related Attack object
     *
     * @param   Attack|PropelObjectCollection $attack The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 Castle2AttackQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAttack($attack, $comparison = null)
    {
        if ($attack instanceof Attack) {
            return $this
                ->addUsingAlias(Castle2AttackPeer::ATTACK_ID, $attack->getId(), $comparison);
        } elseif ($attack instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(Castle2AttackPeer::ATTACK_ID, $attack->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAttack() only accepts arguments of type Attack or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Attack relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function joinAttack($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Attack');

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
            $this->addJoinObject($join, 'Attack');
        }

        return $this;
    }

    /**
     * Use the Attack relation Attack object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AttackQuery A secondary query class using the current class as primary query
     */
    public function useAttackQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttack($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Attack', 'AttackQuery');
    }

    /**
     * Filter the query by a related Castle object
     *
     * @param   Castle|PropelObjectCollection $castle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 Castle2AttackQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastle($castle, $comparison = null)
    {
        if ($castle instanceof Castle) {
            return $this
                ->addUsingAlias(Castle2AttackPeer::CASTLE_ID, $castle->getId(), $comparison);
        } elseif ($castle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(Castle2AttackPeer::CASTLE_ID, $castle->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function joinCastle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCastleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCastle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Castle', 'CastleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Castle2Attack $castle2Attack Object to remove from the list of results
     *
     * @return Castle2AttackQuery The current query, for fluid interface
     */
    public function prune($castle2Attack = null)
    {
        if ($castle2Attack) {
            $this->addCond('pruneCond0', $this->getAliasedColName(Castle2AttackPeer::CASTLE_ID), $castle2Attack->getCastleId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(Castle2AttackPeer::ATTACK_ID), $castle2Attack->getAttackId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}

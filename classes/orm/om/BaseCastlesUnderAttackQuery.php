<?php


/**
 * Base class that represents a query for the 'castles_under_attack' table.
 *
 *
 *
 * @method CastlesUnderAttackQuery orderByCastlesId($order = Criteria::ASC) Order by the castles_id column
 * @method CastlesUnderAttackQuery orderByAttackId($order = Criteria::ASC) Order by the attack_id column
 *
 * @method CastlesUnderAttackQuery groupByCastlesId() Group by the castles_id column
 * @method CastlesUnderAttackQuery groupByAttackId() Group by the attack_id column
 *
 * @method CastlesUnderAttackQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CastlesUnderAttackQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CastlesUnderAttackQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CastlesUnderAttackQuery leftJoinAttack($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attack relation
 * @method CastlesUnderAttackQuery rightJoinAttack($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attack relation
 * @method CastlesUnderAttackQuery innerJoinAttack($relationAlias = null) Adds a INNER JOIN clause to the query using the Attack relation
 *
 * @method CastlesUnderAttackQuery leftJoinCastles($relationAlias = null) Adds a LEFT JOIN clause to the query using the Castles relation
 * @method CastlesUnderAttackQuery rightJoinCastles($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Castles relation
 * @method CastlesUnderAttackQuery innerJoinCastles($relationAlias = null) Adds a INNER JOIN clause to the query using the Castles relation
 *
 * @method CastlesUnderAttack findOne(PropelPDO $con = null) Return the first CastlesUnderAttack matching the query
 * @method CastlesUnderAttack findOneOrCreate(PropelPDO $con = null) Return the first CastlesUnderAttack matching the query, or a new CastlesUnderAttack object populated from the query conditions when no match is found
 *
 * @method CastlesUnderAttack findOneByCastlesId(string $castles_id) Return the first CastlesUnderAttack filtered by the castles_id column
 * @method CastlesUnderAttack findOneByAttackId(int $attack_id) Return the first CastlesUnderAttack filtered by the attack_id column
 *
 * @method array findByCastlesId(string $castles_id) Return CastlesUnderAttack objects filtered by the castles_id column
 * @method array findByAttackId(int $attack_id) Return CastlesUnderAttack objects filtered by the attack_id column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastlesUnderAttackQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCastlesUnderAttackQuery object.
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
            $modelName = 'CastlesUnderAttack';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CastlesUnderAttackQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CastlesUnderAttackQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CastlesUnderAttackQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CastlesUnderAttackQuery) {
            return $criteria;
        }
        $query = new CastlesUnderAttackQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$castles_id, $attack_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CastlesUnderAttack|CastlesUnderAttack[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CastlesUnderAttackPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CastlesUnderAttackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CastlesUnderAttack A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `castles_id`, `attack_id` FROM `castles_under_attack` WHERE `castles_id` = :p0 AND `attack_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CastlesUnderAttack();
            $obj->hydrate($row);
            CastlesUnderAttackPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CastlesUnderAttack|CastlesUnderAttack[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CastlesUnderAttack[]|mixed the list of results, formatted by the current formatter
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
     * @return CastlesUnderAttackQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CastlesUnderAttackPeer::CASTLES_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CastlesUnderAttackPeer::ATTACK_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CastlesUnderAttackQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CastlesUnderAttackPeer::CASTLES_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CastlesUnderAttackPeer::ATTACK_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the castles_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCastlesId('fooValue');   // WHERE castles_id = 'fooValue'
     * $query->filterByCastlesId('%fooValue%'); // WHERE castles_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $castlesId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastlesUnderAttackQuery The current query, for fluid interface
     */
    public function filterByCastlesId($castlesId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($castlesId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $castlesId)) {
                $castlesId = str_replace('*', '%', $castlesId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CastlesUnderAttackPeer::CASTLES_ID, $castlesId, $comparison);
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
     * @return CastlesUnderAttackQuery The current query, for fluid interface
     */
    public function filterByAttackId($attackId = null, $comparison = null)
    {
        if (is_array($attackId)) {
            $useMinMax = false;
            if (isset($attackId['min'])) {
                $this->addUsingAlias(CastlesUnderAttackPeer::ATTACK_ID, $attackId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attackId['max'])) {
                $this->addUsingAlias(CastlesUnderAttackPeer::ATTACK_ID, $attackId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastlesUnderAttackPeer::ATTACK_ID, $attackId, $comparison);
    }

    /**
     * Filter the query by a related Attack object
     *
     * @param   Attack|PropelObjectCollection $attack The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastlesUnderAttackQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAttack($attack, $comparison = null)
    {
        if ($attack instanceof Attack) {
            return $this
                ->addUsingAlias(CastlesUnderAttackPeer::ATTACK_ID, $attack->getId(), $comparison);
        } elseif ($attack instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastlesUnderAttackPeer::ATTACK_ID, $attack->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CastlesUnderAttackQuery The current query, for fluid interface
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
     * Filter the query by a related Castles object
     *
     * @param   Castles|PropelObjectCollection $castles The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastlesUnderAttackQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastles($castles, $comparison = null)
    {
        if ($castles instanceof Castles) {
            return $this
                ->addUsingAlias(CastlesUnderAttackPeer::CASTLES_ID, $castles->getId(), $comparison);
        } elseif ($castles instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CastlesUnderAttackPeer::CASTLES_ID, $castles->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCastles() only accepts arguments of type Castles or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Castles relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CastlesUnderAttackQuery The current query, for fluid interface
     */
    public function joinCastles($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Castles');

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
            $this->addJoinObject($join, 'Castles');
        }

        return $this;
    }

    /**
     * Use the Castles relation Castles object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CastlesQuery A secondary query class using the current class as primary query
     */
    public function useCastlesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCastles($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Castles', 'CastlesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CastlesUnderAttack $castlesUnderAttack Object to remove from the list of results
     *
     * @return CastlesUnderAttackQuery The current query, for fluid interface
     */
    public function prune($castlesUnderAttack = null)
    {
        if ($castlesUnderAttack) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CastlesUnderAttackPeer::CASTLES_ID), $castlesUnderAttack->getCastlesId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CastlesUnderAttackPeer::ATTACK_ID), $castlesUnderAttack->getAttackId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}

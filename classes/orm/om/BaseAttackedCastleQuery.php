<?php


/**
 * Base class that represents a query for the 'attacked_castle' table.
 *
 *
 *
 * @method AttackedCastleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method AttackedCastleQuery orderByCastleId($order = Criteria::ASC) Order by the castle_id column
 * @method AttackedCastleQuery orderByAttackId($order = Criteria::ASC) Order by the attack_id column
 * @method AttackedCastleQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method AttackedCastleQuery groupById() Group by the id column
 * @method AttackedCastleQuery groupByCastleId() Group by the castle_id column
 * @method AttackedCastleQuery groupByAttackId() Group by the attack_id column
 * @method AttackedCastleQuery groupByUserId() Group by the user_id column
 *
 * @method AttackedCastleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AttackedCastleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AttackedCastleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AttackedCastleQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method AttackedCastleQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method AttackedCastleQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method AttackedCastleQuery leftJoinAttack($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attack relation
 * @method AttackedCastleQuery rightJoinAttack($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attack relation
 * @method AttackedCastleQuery innerJoinAttack($relationAlias = null) Adds a INNER JOIN clause to the query using the Attack relation
 *
 * @method AttackedCastleQuery leftJoinCastle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Castle relation
 * @method AttackedCastleQuery rightJoinCastle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Castle relation
 * @method AttackedCastleQuery innerJoinCastle($relationAlias = null) Adds a INNER JOIN clause to the query using the Castle relation
 *
 * @method AttackedCastle findOne(PropelPDO $con = null) Return the first AttackedCastle matching the query
 * @method AttackedCastle findOneOrCreate(PropelPDO $con = null) Return the first AttackedCastle matching the query, or a new AttackedCastle object populated from the query conditions when no match is found
 *
 * @method AttackedCastle findOneByCastleId(int $castle_id) Return the first AttackedCastle filtered by the castle_id column
 * @method AttackedCastle findOneByAttackId(int $attack_id) Return the first AttackedCastle filtered by the attack_id column
 * @method AttackedCastle findOneByUserId(int $user_id) Return the first AttackedCastle filtered by the user_id column
 *
 * @method array findById(int $id) Return AttackedCastle objects filtered by the id column
 * @method array findByCastleId(int $castle_id) Return AttackedCastle objects filtered by the castle_id column
 * @method array findByAttackId(int $attack_id) Return AttackedCastle objects filtered by the attack_id column
 * @method array findByUserId(int $user_id) Return AttackedCastle objects filtered by the user_id column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseAttackedCastleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAttackedCastleQuery object.
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
            $modelName = 'AttackedCastle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AttackedCastleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AttackedCastleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AttackedCastleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AttackedCastleQuery) {
            return $criteria;
        }
        $query = new AttackedCastleQuery(null, null, $modelAlias);

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
     * @return   AttackedCastle|AttackedCastle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AttackedCastlePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AttackedCastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AttackedCastle A model object, or null if the key is not found
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
     * @return                 AttackedCastle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `castle_id`, `attack_id`, `user_id` FROM `attacked_castle` WHERE `id` = :p0';
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
            $obj = new AttackedCastle();
            $obj->hydrate($row);
            AttackedCastlePeer::addInstanceToPool($obj, (string) $key);
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
     * @return AttackedCastle|AttackedCastle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AttackedCastle[]|mixed the list of results, formatted by the current formatter
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
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AttackedCastlePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AttackedCastlePeer::ID, $keys, Criteria::IN);
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
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AttackedCastlePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AttackedCastlePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttackedCastlePeer::ID, $id, $comparison);
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
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function filterByCastleId($castleId = null, $comparison = null)
    {
        if (is_array($castleId)) {
            $useMinMax = false;
            if (isset($castleId['min'])) {
                $this->addUsingAlias(AttackedCastlePeer::CASTLE_ID, $castleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($castleId['max'])) {
                $this->addUsingAlias(AttackedCastlePeer::CASTLE_ID, $castleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttackedCastlePeer::CASTLE_ID, $castleId, $comparison);
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
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function filterByAttackId($attackId = null, $comparison = null)
    {
        if (is_array($attackId)) {
            $useMinMax = false;
            if (isset($attackId['min'])) {
                $this->addUsingAlias(AttackedCastlePeer::ATTACK_ID, $attackId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attackId['max'])) {
                $this->addUsingAlias(AttackedCastlePeer::ATTACK_ID, $attackId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttackedCastlePeer::ATTACK_ID, $attackId, $comparison);
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
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(AttackedCastlePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(AttackedCastlePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttackedCastlePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AttackedCastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(AttackedCastlePeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttackedCastlePeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return AttackedCastleQuery The current query, for fluid interface
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
     * Filter the query by a related Attack object
     *
     * @param   Attack|PropelObjectCollection $attack The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AttackedCastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAttack($attack, $comparison = null)
    {
        if ($attack instanceof Attack) {
            return $this
                ->addUsingAlias(AttackedCastlePeer::ATTACK_ID, $attack->getId(), $comparison);
        } elseif ($attack instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttackedCastlePeer::ATTACK_ID, $attack->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function joinAttack($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useAttackQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return                 AttackedCastleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastle($castle, $comparison = null)
    {
        if ($castle instanceof Castle) {
            return $this
                ->addUsingAlias(AttackedCastlePeer::CASTLE_ID, $castle->getId(), $comparison);
        } elseif ($castle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttackedCastlePeer::CASTLE_ID, $castle->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return AttackedCastleQuery The current query, for fluid interface
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
     * @param   AttackedCastle $attackedCastle Object to remove from the list of results
     *
     * @return AttackedCastleQuery The current query, for fluid interface
     */
    public function prune($attackedCastle = null)
    {
        if ($attackedCastle) {
            $this->addUsingAlias(AttackedCastlePeer::ID, $attackedCastle->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}

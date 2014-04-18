<?php


/**
 * Base class that represents a query for the 'castle_groups' table.
 *
 *
 *
 * @method CastleGroupsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CastleGroupsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CastleGroupsQuery orderBySort($order = Criteria::ASC) Order by the sort column
 *
 * @method CastleGroupsQuery groupById() Group by the id column
 * @method CastleGroupsQuery groupByName() Group by the name column
 * @method CastleGroupsQuery groupBySort() Group by the sort column
 *
 * @method CastleGroupsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CastleGroupsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CastleGroupsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CastleGroupsQuery leftJoinCastles($relationAlias = null) Adds a LEFT JOIN clause to the query using the Castles relation
 * @method CastleGroupsQuery rightJoinCastles($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Castles relation
 * @method CastleGroupsQuery innerJoinCastles($relationAlias = null) Adds a INNER JOIN clause to the query using the Castles relation
 *
 * @method CastleGroups findOne(PropelPDO $con = null) Return the first CastleGroups matching the query
 * @method CastleGroups findOneOrCreate(PropelPDO $con = null) Return the first CastleGroups matching the query, or a new CastleGroups object populated from the query conditions when no match is found
 *
 * @method CastleGroups findOneByName(string $name) Return the first CastleGroups filtered by the name column
 * @method CastleGroups findOneBySort(int $sort) Return the first CastleGroups filtered by the sort column
 *
 * @method array findById(int $id) Return CastleGroups objects filtered by the id column
 * @method array findByName(string $name) Return CastleGroups objects filtered by the name column
 * @method array findBySort(int $sort) Return CastleGroups objects filtered by the sort column
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastleGroupsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCastleGroupsQuery object.
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
            $modelName = 'CastleGroups';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CastleGroupsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CastleGroupsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CastleGroupsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CastleGroupsQuery) {
            return $criteria;
        }
        $query = new CastleGroupsQuery(null, null, $modelAlias);

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
     * @return   CastleGroups|CastleGroups[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CastleGroupsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CastleGroupsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CastleGroups A model object, or null if the key is not found
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
     * @return                 CastleGroups A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `sort` FROM `castle_groups` WHERE `id` = :p0';
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
            $obj = new CastleGroups();
            $obj->hydrate($row);
            CastleGroupsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CastleGroups|CastleGroups[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CastleGroups[]|mixed the list of results, formatted by the current formatter
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
     * @return CastleGroupsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CastleGroupsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CastleGroupsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CastleGroupsPeer::ID, $keys, Criteria::IN);
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
     * @return CastleGroupsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CastleGroupsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CastleGroupsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleGroupsPeer::ID, $id, $comparison);
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
     * @return CastleGroupsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CastleGroupsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the sort column
     *
     * Example usage:
     * <code>
     * $query->filterBySort(1234); // WHERE sort = 1234
     * $query->filterBySort(array(12, 34)); // WHERE sort IN (12, 34)
     * $query->filterBySort(array('min' => 12)); // WHERE sort >= 12
     * $query->filterBySort(array('max' => 12)); // WHERE sort <= 12
     * </code>
     *
     * @param     mixed $sort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CastleGroupsQuery The current query, for fluid interface
     */
    public function filterBySort($sort = null, $comparison = null)
    {
        if (is_array($sort)) {
            $useMinMax = false;
            if (isset($sort['min'])) {
                $this->addUsingAlias(CastleGroupsPeer::SORT, $sort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sort['max'])) {
                $this->addUsingAlias(CastleGroupsPeer::SORT, $sort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CastleGroupsPeer::SORT, $sort, $comparison);
    }

    /**
     * Filter the query by a related Castles object
     *
     * @param   Castles|PropelObjectCollection $castles  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CastleGroupsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCastles($castles, $comparison = null)
    {
        if ($castles instanceof Castles) {
            return $this
                ->addUsingAlias(CastleGroupsPeer::ID, $castles->getCastleGroupsId(), $comparison);
        } elseif ($castles instanceof PropelObjectCollection) {
            return $this
                ->useCastlesQuery()
                ->filterByPrimaryKeys($castles->getPrimaryKeys())
                ->endUse();
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
     * @return CastleGroupsQuery The current query, for fluid interface
     */
    public function joinCastles($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCastlesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCastles($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Castles', 'CastlesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CastleGroups $castleGroups Object to remove from the list of results
     *
     * @return CastleGroupsQuery The current query, for fluid interface
     */
    public function prune($castleGroups = null)
    {
        if ($castleGroups) {
            $this->addUsingAlias(CastleGroupsPeer::ID, $castleGroups->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}

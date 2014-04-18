<?php


/**
 * Base static class for performing query and update operations on the 'castle_location' table.
 *
 *
 *
 * @package propel.generator.orm.om
 */
abstract class BaseCastleLocationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'TotalDefense';

    /** the table name for this class */
    const TABLE_NAME = 'castle_location';

    /** the related Propel class for this table */
    const OM_CLASS = 'CastleLocation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CastleLocationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id field */
    const ID = 'castle_location.id';

    /** the column name for the user field */
    const USER = 'castle_location.user';

    /** the column name for the name field */
    const NAME = 'castle_location.name';

    /** the column name for the parent_id field */
    const PARENT_ID = 'castle_location.parent_id';

    /** the column name for the created_at field */
    const CREATED_AT = 'castle_location.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'castle_location.updated_at';

    /** the column name for the tree_left field */
    const TREE_LEFT = 'castle_location.tree_left';

    /** the column name for the tree_right field */
    const TREE_RIGHT = 'castle_location.tree_right';

    /** the column name for the tree_level field */
    const TREE_LEVEL = 'castle_location.tree_level';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CastleLocation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CastleLocation[]
     */
    public static $instances = array();


    // nested_set behavior

    /**
     * Left column for the set
     */
    const LEFT_COL = 'castle_location.tree_left';

    /**
     * Right column for the set
     */
    const RIGHT_COL = 'castle_location.tree_right';

    /**
     * Level column for the set
     */
    const LEVEL_COL = 'castle_location.tree_level';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CastleLocationPeer::$fieldNames[CastleLocationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'User', 'Name', 'ParentId', 'CreatedAt', 'UpdatedAt', 'TreeLeft', 'TreeRight', 'TreeLevel', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'user', 'name', 'parentId', 'createdAt', 'updatedAt', 'treeLeft', 'treeRight', 'treeLevel', ),
        BasePeer::TYPE_COLNAME => array (CastleLocationPeer::ID, CastleLocationPeer::USER, CastleLocationPeer::NAME, CastleLocationPeer::PARENT_ID, CastleLocationPeer::CREATED_AT, CastleLocationPeer::UPDATED_AT, CastleLocationPeer::TREE_LEFT, CastleLocationPeer::TREE_RIGHT, CastleLocationPeer::TREE_LEVEL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER', 'NAME', 'PARENT_ID', 'CREATED_AT', 'UPDATED_AT', 'TREE_LEFT', 'TREE_RIGHT', 'TREE_LEVEL', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'user', 'name', 'parent_id', 'created_at', 'updated_at', 'tree_left', 'tree_right', 'tree_level', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CastleLocationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'User' => 1, 'Name' => 2, 'ParentId' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, 'TreeLeft' => 6, 'TreeRight' => 7, 'TreeLevel' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'user' => 1, 'name' => 2, 'parentId' => 3, 'createdAt' => 4, 'updatedAt' => 5, 'treeLeft' => 6, 'treeRight' => 7, 'treeLevel' => 8, ),
        BasePeer::TYPE_COLNAME => array (CastleLocationPeer::ID => 0, CastleLocationPeer::USER => 1, CastleLocationPeer::NAME => 2, CastleLocationPeer::PARENT_ID => 3, CastleLocationPeer::CREATED_AT => 4, CastleLocationPeer::UPDATED_AT => 5, CastleLocationPeer::TREE_LEFT => 6, CastleLocationPeer::TREE_RIGHT => 7, CastleLocationPeer::TREE_LEVEL => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER' => 1, 'NAME' => 2, 'PARENT_ID' => 3, 'CREATED_AT' => 4, 'UPDATED_AT' => 5, 'TREE_LEFT' => 6, 'TREE_RIGHT' => 7, 'TREE_LEVEL' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user' => 1, 'name' => 2, 'parent_id' => 3, 'created_at' => 4, 'updated_at' => 5, 'tree_left' => 6, 'tree_right' => 7, 'tree_level' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CastleLocationPeer::getFieldNames($toType);
        $key = isset(CastleLocationPeer::$fieldKeys[$fromType][$name]) ? CastleLocationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CastleLocationPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CastleLocationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CastleLocationPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CastleLocationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CastleLocationPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CastleLocationPeer::ID);
            $criteria->addSelectColumn(CastleLocationPeer::USER);
            $criteria->addSelectColumn(CastleLocationPeer::NAME);
            $criteria->addSelectColumn(CastleLocationPeer::PARENT_ID);
            $criteria->addSelectColumn(CastleLocationPeer::CREATED_AT);
            $criteria->addSelectColumn(CastleLocationPeer::UPDATED_AT);
            $criteria->addSelectColumn(CastleLocationPeer::TREE_LEFT);
            $criteria->addSelectColumn(CastleLocationPeer::TREE_RIGHT);
            $criteria->addSelectColumn(CastleLocationPeer::TREE_LEVEL);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.parent_id');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.tree_left');
            $criteria->addSelectColumn($alias . '.tree_right');
            $criteria->addSelectColumn($alias . '.tree_level');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CastleLocationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastleLocationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CastleLocationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return CastleLocation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CastleLocationPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CastleLocationPeer::populateObjects(CastleLocationPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CastleLocationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CastleLocationPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param CastleLocation $obj A CastleLocation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CastleLocationPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CastleLocation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CastleLocation) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CastleLocation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CastleLocationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return CastleLocation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CastleLocationPeer::$instances[$key])) {
                return CastleLocationPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CastleLocationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CastleLocationPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to castle_location
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = CastleLocationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CastleLocationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CastleLocationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CastleLocationPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CastleLocation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CastleLocationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CastleLocationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CastleLocationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CastleLocationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CastleLocationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CastleLocationPeer::DATABASE_NAME)->getTable(CastleLocationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCastleLocationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCastleLocationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CastleLocationTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CastleLocationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CastleLocation or Criteria object.
     *
     * @param      mixed $values Criteria or CastleLocation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CastleLocation object
        }

        if ($criteria->containsKey(CastleLocationPeer::ID) && $criteria->keyContainsValue(CastleLocationPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CastleLocationPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CastleLocationPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CastleLocation or Criteria object.
     *
     * @param      mixed $values Criteria or CastleLocation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CastleLocationPeer::ID);
            $value = $criteria->remove(CastleLocationPeer::ID);
            if ($value) {
                $selectCriteria->add(CastleLocationPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CastleLocationPeer::TABLE_NAME);
            }

        } else { // $values is CastleLocation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CastleLocationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the castle_location table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CastleLocationPeer::TABLE_NAME, $con, CastleLocationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CastleLocationPeer::clearInstancePool();
            CastleLocationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CastleLocation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CastleLocation object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CastleLocationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CastleLocation) { // it's a model object
            // invalidate the cache for this single object
            CastleLocationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
            $criteria->add(CastleLocationPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CastleLocationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CastleLocationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CastleLocationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CastleLocation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param CastleLocation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CastleLocationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CastleLocationPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CastleLocationPeer::DATABASE_NAME, CastleLocationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CastleLocation
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CastleLocationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $criteria->add(CastleLocationPeer::ID, $pk);

        $v = CastleLocationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CastleLocation[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
            $criteria->add(CastleLocationPeer::ID, $pks, Criteria::IN);
            $objs = CastleLocationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // nested_set behavior

    /**
     * Returns the root node for a given scope
     *
     * @param      PropelPDO $con	Connection to use.
     * @return     CastleLocation			Propel object for root node
     */
    public static function retrieveRoot(PropelPDO $con = null)
    {
        $c = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $c->add(CastleLocationPeer::LEFT_COL, 1, Criteria::EQUAL);

        return CastleLocationPeer::doSelectOne($c, $con);
    }

    /**
     * Returns the whole tree node for a given scope
     *
     * @param      Criteria $criteria	Optional Criteria to filter the query
     * @param      PropelPDO $con	Connection to use.
     * @return     CastleLocation			Propel object for root node
     */
    public static function retrieveTree(Criteria $criteria = null, PropelPDO $con = null)
    {
        if ($criteria === null) {
            $criteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        }
        $criteria->addAscendingOrderByColumn(CastleLocationPeer::LEFT_COL);

        return CastleLocationPeer::doSelect($criteria, $con);
    }

    /**
     * Tests if node is valid
     *
     * @param      CastleLocation $node	Propel object for src node
     * @return     bool
     */
    public static function isValid(CastleLocation $node = null)
    {
        if (is_object($node) && $node->getRightValue() > $node->getLeftValue()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete an entire tree
     *
     * @param      PropelPDO $con	Connection to use.
     *
     * @return     int  The number of deleted nodes
     */
    public static function deleteTree(PropelPDO $con = null)
    {

        return CastleLocationPeer::doDeleteAll($con);
    }

    /**
     * Adds $delta to all L and R values that are >= $first and <= $last.
     * '$delta' can also be negative.
     *
     * @param      int $delta		Value to be shifted by, can be negative
     * @param      int $first		First node to be shifted
     * @param      int $last			Last node to be shifted (optional)
     * @param      PropelPDO $con		Connection to use.
     */
    public static function shiftRLValues($delta, $first, $last = null, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        // Shift left column values
        $whereCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $criterion = $whereCriteria->getNewCriterion(CastleLocationPeer::LEFT_COL, $first, Criteria::GREATER_EQUAL);
        if (null !== $last) {
            $criterion->addAnd($whereCriteria->getNewCriterion(CastleLocationPeer::LEFT_COL, $last, Criteria::LESS_EQUAL));
        }
        $whereCriteria->add($criterion);

        $valuesCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $valuesCriteria->add(CastleLocationPeer::LEFT_COL, array('raw' => CastleLocationPeer::LEFT_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);

        // Shift right column values
        $whereCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $criterion = $whereCriteria->getNewCriterion(CastleLocationPeer::RIGHT_COL, $first, Criteria::GREATER_EQUAL);
        if (null !== $last) {
            $criterion->addAnd($whereCriteria->getNewCriterion(CastleLocationPeer::RIGHT_COL, $last, Criteria::LESS_EQUAL));
        }
        $whereCriteria->add($criterion);

        $valuesCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $valuesCriteria->add(CastleLocationPeer::RIGHT_COL, array('raw' => CastleLocationPeer::RIGHT_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
    }

    /**
     * Adds $delta to level for nodes having left value >= $first and right value <= $last.
     * '$delta' can also be negative.
     *
     * @param      int $delta		Value to be shifted by, can be negative
     * @param      int $first		First node to be shifted
     * @param      int $last			Last node to be shifted
     * @param      PropelPDO $con		Connection to use.
     */
    public static function shiftLevel($delta, $first, $last, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleLocationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $whereCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $whereCriteria->add(CastleLocationPeer::LEFT_COL, $first, Criteria::GREATER_EQUAL);
        $whereCriteria->add(CastleLocationPeer::RIGHT_COL, $last, Criteria::LESS_EQUAL);

        $valuesCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $valuesCriteria->add(CastleLocationPeer::LEVEL_COL, array('raw' => CastleLocationPeer::LEVEL_COL . ' + ?', 'value' => $delta), Criteria::CUSTOM_EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
    }

    /**
     * Reload all already loaded nodes to sync them with updated db
     *
     * @param      CastleLocation $prune		Object to prune from the update
     * @param      PropelPDO $con		Connection to use.
     */
    public static function updateLoadedNodes($prune = null, PropelPDO $con = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            $keys = array();
            foreach (CastleLocationPeer::$instances as $obj) {
                if (!$prune || !$prune->equals($obj)) {
                    $keys[] = $obj->getPrimaryKey();
                }
            }

            if (!empty($keys)) {
                // We don't need to alter the object instance pool; we're just modifying these ones
                // already in the pool.
                $criteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
                $criteria->add(CastleLocationPeer::ID, $keys, Criteria::IN);
                $stmt = CastleLocationPeer::doSelectStmt($criteria, $con);
                while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                    $key = CastleLocationPeer::getPrimaryKeyHashFromRow($row, 0);
                    if (null !== ($object = CastleLocationPeer::getInstanceFromPool($key))) {
                        $object->setLeftValue($row[6]);
                        $object->setRightValue($row[7]);
                        $object->setLevel($row[8]);
                        $object->clearNestedSetChildren();
                    }
                }
                $stmt->closeCursor();
            }
        }
    }

    /**
     * Update the tree to allow insertion of a leaf at the specified position
     *
     * @param      int $left	left column value
     * @param      mixed $prune	Object to prune from the shift
     * @param      PropelPDO $con	Connection to use.
     */
    public static function makeRoomForLeaf($left, $prune = null, PropelPDO $con = null)
    {
        // Update database nodes
        CastleLocationPeer::shiftRLValues(2, $left, null, $con);

        // Update all loaded nodes
        CastleLocationPeer::updateLoadedNodes($prune, $con);
    }

    /**
     * Update the tree to allow insertion of a leaf at the specified position
     *
     * @param      PropelPDO $con	Connection to use.
     */
    public static function fixLevels(PropelPDO $con = null)
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(CastleLocationPeer::LEFT_COL);
        $stmt = CastleLocationPeer::doSelectStmt($c, $con);

        // set the class once to avoid overhead in the loop
        $cls = CastleLocationPeer::getOMClass(false);
        $level = null;
        // iterate over the statement
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {

            // hydrate object
            $key = CastleLocationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null === ($obj = CastleLocationPeer::getInstanceFromPool($key))) {
                $obj = new $cls();
                $obj->hydrate($row);
                CastleLocationPeer::addInstanceToPool($obj, $key);
            }

            // compute level
            // Algorithm shamelessly stolen from sfPropelActAsNestedSetBehaviorPlugin
            // Probably authored by Tristan Rivoallan
            if ($level === null) {
                $level = 0;
                $i = 0;
                $prev = array($obj->getRightValue());
            } else {
                while ($obj->getRightValue() > $prev[$i]) {
                    $i--;
                }
                $level = ++$i;
                $prev[$i] = $obj->getRightValue();
            }

            // update level in node if necessary
            if ($obj->getLevel() !== $level) {
                $obj->setLevel($level);
                $obj->save($con);
            }
        }
        $stmt->closeCursor();
    }

    /**
     * Updates all scope values for items that has negative left (<=0) values.
     *
     * @param      mixed     $scope
     * @param      PropelPDO $con	Connection to use.
     */
    public static function setNegativeScope($scope, PropelPDO $con = null)
    {
        //adjust scope value to $scope
        $whereCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $whereCriteria->add(CastleLocationPeer::LEFT_COL, 0, Criteria::LESS_EQUAL);

        $valuesCriteria = new Criteria(CastleLocationPeer::DATABASE_NAME);
        $valuesCriteria->add(CastleLocationPeer::SCOPE_COL, $scope, Criteria::EQUAL);

        BasePeer::doUpdate($whereCriteria, $valuesCriteria, $con);
    }

} // BaseCastleLocationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCastleLocationPeer::buildTableMap();


<?php


/**
 * Base static class for performing query and update operations on the 'target' table.
 *
 *
 *
 * @package propel.generator.orm.om
 */
abstract class BaseTargetPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'TotalDefense';

    /** the table name for this class */
    const TABLE_NAME = 'target';

    /** the related Propel class for this table */
    const OM_CLASS = 'Target';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TargetTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the id field */
    const ID = 'target.id';

    /** the column name for the user_id field */
    const USER_ID = 'target.user_id';

    /** the column name for the name field */
    const NAME = 'target.name';

    /** the column name for the coordinates field */
    const COORDINATES = 'target.coordinates';

    /** the column name for the date field */
    const DATE = 'target.date';

    /** the column name for the time field */
    const TIME = 'target.time';

    /** the column name for the start_time field */
    const START_TIME = 'target.start_time';

    /** the column name for the use_mission_troops field */
    const USE_MISSION_TROOPS = 'target.use_mission_troops';

    /** the column name for the filter_Castles_Off field */
    const FILTER_CASTLES_OFF = 'target.filter_Castles_Off';

    /** the column name for the filter_Castles_Def field */
    const FILTER_CASTLES_DEF = 'target.filter_Castles_Def';

    /** the column name for the filter_Castles_Mix field */
    const FILTER_CASTLES_MIX = 'target.filter_Castles_Mix';

    /** the column name for the filter_Troops_Marker field */
    const FILTER_TROOPS_MARKER = 'target.filter_Troops_Marker';

    /** the column name for the filter_Troops_Off field */
    const FILTER_TROOPS_OFF = 'target.filter_Troops_Off';

    /** the column name for the filter_Troops_Def field */
    const FILTER_TROOPS_DEF = 'target.filter_Troops_Def';

    /** the column name for the sort field */
    const SORT = 'target.sort';

    /** the column name for the priority field */
    const PRIORITY = 'target.priority';

    /** the column name for the target_silver field */
    const TARGET_SILVER = 'target.target_silver';

    /** the column name for the target_sk field */
    const TARGET_SK = 'target.target_sk';

    /** the column name for the target_bs field */
    const TARGET_BS = 'target.target_bs';

    /** the column name for the target_lr field */
    const TARGET_LR = 'target.target_lr';

    /** the column name for the total_silver field */
    const TOTAL_SILVER = 'target.total_silver';

    /** the column name for the total_st field */
    const TOTAL_ST = 'target.total_st';

    /** the column name for the total_sk field */
    const TOTAL_SK = 'target.total_sk';

    /** the column name for the total_bs field */
    const TOTAL_BS = 'target.total_bs';

    /** the column name for the total_as field */
    const TOTAL_AS = 'target.total_as';

    /** the column name for the total_pr field */
    const TOTAL_PR = 'target.total_pr';

    /** the column name for the total_lr field */
    const TOTAL_LR = 'target.total_lr';

    /** the column name for the created_at field */
    const CREATED_AT = 'target.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'target.updated_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Target objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Target[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TargetPeer::$fieldNames[TargetPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Name', 'Coordinates', 'Date', 'Time', 'StartTime', 'UseMissionTroops', 'FilterCastlesOff', 'FilterCastlesDef', 'FilterCastlesMix', 'FilterTroopsMarker', 'FilterTroopsOff', 'FilterTroopsDef', 'Sort', 'Priority', 'TargetSilver', 'TargetSk', 'TargetBs', 'TargetLr', 'TotalSilver', 'TotalSt', 'TotalSk', 'TotalBs', 'TotalAs', 'TotalPr', 'TotalLr', 'CreatedAt', 'UpdatedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userId', 'name', 'coordinates', 'date', 'time', 'startTime', 'useMissionTroops', 'filterCastlesOff', 'filterCastlesDef', 'filterCastlesMix', 'filterTroopsMarker', 'filterTroopsOff', 'filterTroopsDef', 'sort', 'priority', 'targetSilver', 'targetSk', 'targetBs', 'targetLr', 'totalSilver', 'totalSt', 'totalSk', 'totalBs', 'totalAs', 'totalPr', 'totalLr', 'createdAt', 'updatedAt', ),
        BasePeer::TYPE_COLNAME => array (TargetPeer::ID, TargetPeer::USER_ID, TargetPeer::NAME, TargetPeer::COORDINATES, TargetPeer::DATE, TargetPeer::TIME, TargetPeer::START_TIME, TargetPeer::USE_MISSION_TROOPS, TargetPeer::FILTER_CASTLES_OFF, TargetPeer::FILTER_CASTLES_DEF, TargetPeer::FILTER_CASTLES_MIX, TargetPeer::FILTER_TROOPS_MARKER, TargetPeer::FILTER_TROOPS_OFF, TargetPeer::FILTER_TROOPS_DEF, TargetPeer::SORT, TargetPeer::PRIORITY, TargetPeer::TARGET_SILVER, TargetPeer::TARGET_SK, TargetPeer::TARGET_BS, TargetPeer::TARGET_LR, TargetPeer::TOTAL_SILVER, TargetPeer::TOTAL_ST, TargetPeer::TOTAL_SK, TargetPeer::TOTAL_BS, TargetPeer::TOTAL_AS, TargetPeer::TOTAL_PR, TargetPeer::TOTAL_LR, TargetPeer::CREATED_AT, TargetPeer::UPDATED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_ID', 'NAME', 'COORDINATES', 'DATE', 'TIME', 'START_TIME', 'USE_MISSION_TROOPS', 'FILTER_CASTLES_OFF', 'FILTER_CASTLES_DEF', 'FILTER_CASTLES_MIX', 'FILTER_TROOPS_MARKER', 'FILTER_TROOPS_OFF', 'FILTER_TROOPS_DEF', 'SORT', 'PRIORITY', 'TARGET_SILVER', 'TARGET_SK', 'TARGET_BS', 'TARGET_LR', 'TOTAL_SILVER', 'TOTAL_ST', 'TOTAL_SK', 'TOTAL_BS', 'TOTAL_AS', 'TOTAL_PR', 'TOTAL_LR', 'CREATED_AT', 'UPDATED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'name', 'coordinates', 'date', 'time', 'start_time', 'use_mission_troops', 'filter_Castles_Off', 'filter_Castles_Def', 'filter_Castles_Mix', 'filter_Troops_Marker', 'filter_Troops_Off', 'filter_Troops_Def', 'sort', 'priority', 'target_silver', 'target_sk', 'target_bs', 'target_lr', 'total_silver', 'total_st', 'total_sk', 'total_bs', 'total_as', 'total_pr', 'total_lr', 'created_at', 'updated_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TargetPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Name' => 2, 'Coordinates' => 3, 'Date' => 4, 'Time' => 5, 'StartTime' => 6, 'UseMissionTroops' => 7, 'FilterCastlesOff' => 8, 'FilterCastlesDef' => 9, 'FilterCastlesMix' => 10, 'FilterTroopsMarker' => 11, 'FilterTroopsOff' => 12, 'FilterTroopsDef' => 13, 'Sort' => 14, 'Priority' => 15, 'TargetSilver' => 16, 'TargetSk' => 17, 'TargetBs' => 18, 'TargetLr' => 19, 'TotalSilver' => 20, 'TotalSt' => 21, 'TotalSk' => 22, 'TotalBs' => 23, 'TotalAs' => 24, 'TotalPr' => 25, 'TotalLr' => 26, 'CreatedAt' => 27, 'UpdatedAt' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userId' => 1, 'name' => 2, 'coordinates' => 3, 'date' => 4, 'time' => 5, 'startTime' => 6, 'useMissionTroops' => 7, 'filterCastlesOff' => 8, 'filterCastlesDef' => 9, 'filterCastlesMix' => 10, 'filterTroopsMarker' => 11, 'filterTroopsOff' => 12, 'filterTroopsDef' => 13, 'sort' => 14, 'priority' => 15, 'targetSilver' => 16, 'targetSk' => 17, 'targetBs' => 18, 'targetLr' => 19, 'totalSilver' => 20, 'totalSt' => 21, 'totalSk' => 22, 'totalBs' => 23, 'totalAs' => 24, 'totalPr' => 25, 'totalLr' => 26, 'createdAt' => 27, 'updatedAt' => 28, ),
        BasePeer::TYPE_COLNAME => array (TargetPeer::ID => 0, TargetPeer::USER_ID => 1, TargetPeer::NAME => 2, TargetPeer::COORDINATES => 3, TargetPeer::DATE => 4, TargetPeer::TIME => 5, TargetPeer::START_TIME => 6, TargetPeer::USE_MISSION_TROOPS => 7, TargetPeer::FILTER_CASTLES_OFF => 8, TargetPeer::FILTER_CASTLES_DEF => 9, TargetPeer::FILTER_CASTLES_MIX => 10, TargetPeer::FILTER_TROOPS_MARKER => 11, TargetPeer::FILTER_TROOPS_OFF => 12, TargetPeer::FILTER_TROOPS_DEF => 13, TargetPeer::SORT => 14, TargetPeer::PRIORITY => 15, TargetPeer::TARGET_SILVER => 16, TargetPeer::TARGET_SK => 17, TargetPeer::TARGET_BS => 18, TargetPeer::TARGET_LR => 19, TargetPeer::TOTAL_SILVER => 20, TargetPeer::TOTAL_ST => 21, TargetPeer::TOTAL_SK => 22, TargetPeer::TOTAL_BS => 23, TargetPeer::TOTAL_AS => 24, TargetPeer::TOTAL_PR => 25, TargetPeer::TOTAL_LR => 26, TargetPeer::CREATED_AT => 27, TargetPeer::UPDATED_AT => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_ID' => 1, 'NAME' => 2, 'COORDINATES' => 3, 'DATE' => 4, 'TIME' => 5, 'START_TIME' => 6, 'USE_MISSION_TROOPS' => 7, 'FILTER_CASTLES_OFF' => 8, 'FILTER_CASTLES_DEF' => 9, 'FILTER_CASTLES_MIX' => 10, 'FILTER_TROOPS_MARKER' => 11, 'FILTER_TROOPS_OFF' => 12, 'FILTER_TROOPS_DEF' => 13, 'SORT' => 14, 'PRIORITY' => 15, 'TARGET_SILVER' => 16, 'TARGET_SK' => 17, 'TARGET_BS' => 18, 'TARGET_LR' => 19, 'TOTAL_SILVER' => 20, 'TOTAL_ST' => 21, 'TOTAL_SK' => 22, 'TOTAL_BS' => 23, 'TOTAL_AS' => 24, 'TOTAL_PR' => 25, 'TOTAL_LR' => 26, 'CREATED_AT' => 27, 'UPDATED_AT' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'name' => 2, 'coordinates' => 3, 'date' => 4, 'time' => 5, 'start_time' => 6, 'use_mission_troops' => 7, 'filter_Castles_Off' => 8, 'filter_Castles_Def' => 9, 'filter_Castles_Mix' => 10, 'filter_Troops_Marker' => 11, 'filter_Troops_Off' => 12, 'filter_Troops_Def' => 13, 'sort' => 14, 'priority' => 15, 'target_silver' => 16, 'target_sk' => 17, 'target_bs' => 18, 'target_lr' => 19, 'total_silver' => 20, 'total_st' => 21, 'total_sk' => 22, 'total_bs' => 23, 'total_as' => 24, 'total_pr' => 25, 'total_lr' => 26, 'created_at' => 27, 'updated_at' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $toNames = TargetPeer::getFieldNames($toType);
        $key = isset(TargetPeer::$fieldKeys[$fromType][$name]) ? TargetPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TargetPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TargetPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TargetPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TargetPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TargetPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TargetPeer::ID);
            $criteria->addSelectColumn(TargetPeer::USER_ID);
            $criteria->addSelectColumn(TargetPeer::NAME);
            $criteria->addSelectColumn(TargetPeer::COORDINATES);
            $criteria->addSelectColumn(TargetPeer::DATE);
            $criteria->addSelectColumn(TargetPeer::TIME);
            $criteria->addSelectColumn(TargetPeer::START_TIME);
            $criteria->addSelectColumn(TargetPeer::USE_MISSION_TROOPS);
            $criteria->addSelectColumn(TargetPeer::FILTER_CASTLES_OFF);
            $criteria->addSelectColumn(TargetPeer::FILTER_CASTLES_DEF);
            $criteria->addSelectColumn(TargetPeer::FILTER_CASTLES_MIX);
            $criteria->addSelectColumn(TargetPeer::FILTER_TROOPS_MARKER);
            $criteria->addSelectColumn(TargetPeer::FILTER_TROOPS_OFF);
            $criteria->addSelectColumn(TargetPeer::FILTER_TROOPS_DEF);
            $criteria->addSelectColumn(TargetPeer::SORT);
            $criteria->addSelectColumn(TargetPeer::PRIORITY);
            $criteria->addSelectColumn(TargetPeer::TARGET_SILVER);
            $criteria->addSelectColumn(TargetPeer::TARGET_SK);
            $criteria->addSelectColumn(TargetPeer::TARGET_BS);
            $criteria->addSelectColumn(TargetPeer::TARGET_LR);
            $criteria->addSelectColumn(TargetPeer::TOTAL_SILVER);
            $criteria->addSelectColumn(TargetPeer::TOTAL_ST);
            $criteria->addSelectColumn(TargetPeer::TOTAL_SK);
            $criteria->addSelectColumn(TargetPeer::TOTAL_BS);
            $criteria->addSelectColumn(TargetPeer::TOTAL_AS);
            $criteria->addSelectColumn(TargetPeer::TOTAL_PR);
            $criteria->addSelectColumn(TargetPeer::TOTAL_LR);
            $criteria->addSelectColumn(TargetPeer::CREATED_AT);
            $criteria->addSelectColumn(TargetPeer::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.coordinates');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.time');
            $criteria->addSelectColumn($alias . '.start_time');
            $criteria->addSelectColumn($alias . '.use_mission_troops');
            $criteria->addSelectColumn($alias . '.filter_Castles_Off');
            $criteria->addSelectColumn($alias . '.filter_Castles_Def');
            $criteria->addSelectColumn($alias . '.filter_Castles_Mix');
            $criteria->addSelectColumn($alias . '.filter_Troops_Marker');
            $criteria->addSelectColumn($alias . '.filter_Troops_Off');
            $criteria->addSelectColumn($alias . '.filter_Troops_Def');
            $criteria->addSelectColumn($alias . '.sort');
            $criteria->addSelectColumn($alias . '.priority');
            $criteria->addSelectColumn($alias . '.target_silver');
            $criteria->addSelectColumn($alias . '.target_sk');
            $criteria->addSelectColumn($alias . '.target_bs');
            $criteria->addSelectColumn($alias . '.target_lr');
            $criteria->addSelectColumn($alias . '.total_silver');
            $criteria->addSelectColumn($alias . '.total_st');
            $criteria->addSelectColumn($alias . '.total_sk');
            $criteria->addSelectColumn($alias . '.total_bs');
            $criteria->addSelectColumn($alias . '.total_as');
            $criteria->addSelectColumn($alias . '.total_pr');
            $criteria->addSelectColumn($alias . '.total_lr');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
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
        $criteria->setPrimaryTableName(TargetPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TargetPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TargetPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Target
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TargetPeer::doSelect($critcopy, $con);
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
        return TargetPeer::populateObjects(TargetPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TargetPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TargetPeer::DATABASE_NAME);

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
     * @param Target $obj A Target object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            TargetPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Target object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Target) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Target object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TargetPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Target Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TargetPeer::$instances[$key])) {
                return TargetPeer::$instances[$key];
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
        foreach (TargetPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TargetPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to target
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
        $cls = TargetPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TargetPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TargetPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TargetPeer::addInstanceToPool($obj, $key);
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
     * @return array (Target object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TargetPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TargetPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TargetPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TargetPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TargetPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TargetPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TargetPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TargetPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TargetPeer::USER_ID, UserPeer::ID, $join_behavior);

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
     * Selects a collection of Target objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Target objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TargetPeer::DATABASE_NAME);
        }

        TargetPeer::addSelectColumns($criteria);
        $startcol = TargetPeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(TargetPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TargetPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TargetPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TargetPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TargetPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Target) to $obj2 (User)
                $obj2->addTarget($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TargetPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TargetPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TargetPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TargetPeer::USER_ID, UserPeer::ID, $join_behavior);

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
     * Selects a collection of Target objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Target objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TargetPeer::DATABASE_NAME);
        }

        TargetPeer::addSelectColumns($criteria);
        $startcol2 = TargetPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TargetPeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TargetPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TargetPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TargetPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TargetPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined User rows

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Target) to the collection in $obj2 (User)
                $obj2->addTarget($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(TargetPeer::DATABASE_NAME)->getTable(TargetPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTargetPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTargetPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TargetTableMap());
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
        return TargetPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Target or Criteria object.
     *
     * @param      mixed $values Criteria or Target object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Target object
        }

        if ($criteria->containsKey(TargetPeer::ID) && $criteria->keyContainsValue(TargetPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TargetPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TargetPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Target or Criteria object.
     *
     * @param      mixed $values Criteria or Target object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TargetPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TargetPeer::ID);
            $value = $criteria->remove(TargetPeer::ID);
            if ($value) {
                $selectCriteria->add(TargetPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TargetPeer::TABLE_NAME);
            }

        } else { // $values is Target object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TargetPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the target table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TargetPeer::TABLE_NAME, $con, TargetPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TargetPeer::clearInstancePool();
            TargetPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Target or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Target object or primary key or array of primary keys
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
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TargetPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Target) { // it's a model object
            // invalidate the cache for this single object
            TargetPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TargetPeer::DATABASE_NAME);
            $criteria->add(TargetPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TargetPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TargetPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TargetPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Target object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Target $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TargetPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TargetPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TargetPeer::DATABASE_NAME, TargetPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Target
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TargetPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TargetPeer::DATABASE_NAME);
        $criteria->add(TargetPeer::ID, $pk);

        $v = TargetPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Target[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TargetPeer::DATABASE_NAME);
            $criteria->add(TargetPeer::ID, $pks, Criteria::IN);
            $objs = TargetPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTargetPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTargetPeer::buildTableMap();


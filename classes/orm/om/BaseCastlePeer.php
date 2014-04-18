<?php


/**
 * Base static class for performing query and update operations on the 'castle' table.
 *
 *
 *
 * @package propel.generator.orm.om
 */
abstract class BaseCastlePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'TotalDefense';

    /** the table name for this class */
    const TABLE_NAME = 'castle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Castle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CastleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the id field */
    const ID = 'castle.id';

    /** the column name for the user field */
    const USER = 'castle.user';

    /** the column name for the name field */
    const NAME = 'castle.name';

    /** the column name for the castle_type_id field */
    const CASTLE_TYPE_ID = 'castle.castle_type_id';

    /** the column name for the castle_location_id field */
    const CASTLE_LOCATION_ID = 'castle.castle_location_id';

    /** the column name for the coordinates field */
    const COORDINATES = 'castle.coordinates';

    /** the column name for the X field */
    const X = 'castle.X';

    /** the column name for the Y field */
    const Y = 'castle.Y';

    /** the column name for the silver field */
    const SILVER = 'castle.silver';

    /** the column name for the copper field */
    const COPPER = 'castle.copper';

    /** the column name for the current_st field */
    const CURRENT_ST = 'castle.current_st';

    /** the column name for the current_as field */
    const CURRENT_AS = 'castle.current_as';

    /** the column name for the current_pr field */
    const CURRENT_PR = 'castle.current_pr';

    /** the column name for the current_sk field */
    const CURRENT_SK = 'castle.current_sk';

    /** the column name for the current_bs field */
    const CURRENT_BS = 'castle.current_bs';

    /** the column name for the current_lr field */
    const CURRENT_LR = 'castle.current_lr';

    /** the column name for the current_hk field */
    const CURRENT_HK = 'castle.current_hk';

    /** the column name for the current_ok field */
    const CURRENT_OK = 'castle.current_ok';

    /** the column name for the mission_st field */
    const MISSION_ST = 'castle.mission_st';

    /** the column name for the mission_as field */
    const MISSION_AS = 'castle.mission_as';

    /** the column name for the mission_pr field */
    const MISSION_PR = 'castle.mission_pr';

    /** the column name for the mission_sk field */
    const MISSION_SK = 'castle.mission_sk';

    /** the column name for the mission_bs field */
    const MISSION_BS = 'castle.mission_bs';

    /** the column name for the mission_lr field */
    const MISSION_LR = 'castle.mission_lr';

    /** the column name for the usage_off field */
    const USAGE_OFF = 'castle.usage_off';

    /** the column name for the usage_def field */
    const USAGE_DEF = 'castle.usage_def';

    /** the column name for the mission_priority field */
    const MISSION_PRIORITY = 'castle.mission_priority';

    /** the column name for the environment_card field */
    const ENVIRONMENT_CARD = 'castle.environment_card';

    /** the column name for the autodef_coordinates field */
    const AUTODEF_COORDINATES = 'castle.autodef_coordinates';

    /** the column name for the autodef_X field */
    const AUTODEF_X = 'castle.autodef_X';

    /** the column name for the autodef_Y field */
    const AUTODEF_Y = 'castle.autodef_Y';

    /** the column name for the points field */
    const POINTS = 'castle.points';

    /** the column name for the open_population field */
    const OPEN_POPULATION = 'castle.open_population';

    /** the column name for the last_import field */
    const LAST_IMPORT = 'castle.last_import';

    /** the column name for the created_at field */
    const CREATED_AT = 'castle.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'castle.updated_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Castle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Castle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CastlePeer::$fieldNames[CastlePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'User', 'Name', 'CastleTypeId', 'CastleLocationId', 'Coordinates', 'X', 'Y', 'Silver', 'Copper', 'CurrentSt', 'CurrentAs', 'CurrentPr', 'CurrentSk', 'CurrentBs', 'CurrentLr', 'CurrentHk', 'CurrentOk', 'MissionSt', 'MissionAs', 'MissionPr', 'MissionSk', 'MissionBs', 'MissionLr', 'UsageOff', 'UsageDef', 'MissionPriority', 'EnvironmentCard', 'AutodefCoordinates', 'AutodefX', 'AutodefY', 'Points', 'OpenPopulation', 'LastImport', 'CreatedAt', 'UpdatedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'user', 'name', 'castleTypeId', 'castleLocationId', 'coordinates', 'x', 'y', 'silver', 'copper', 'currentSt', 'currentAs', 'currentPr', 'currentSk', 'currentBs', 'currentLr', 'currentHk', 'currentOk', 'missionSt', 'missionAs', 'missionPr', 'missionSk', 'missionBs', 'missionLr', 'usageOff', 'usageDef', 'missionPriority', 'environmentCard', 'autodefCoordinates', 'autodefX', 'autodefY', 'points', 'openPopulation', 'lastImport', 'createdAt', 'updatedAt', ),
        BasePeer::TYPE_COLNAME => array (CastlePeer::ID, CastlePeer::USER, CastlePeer::NAME, CastlePeer::CASTLE_TYPE_ID, CastlePeer::CASTLE_LOCATION_ID, CastlePeer::COORDINATES, CastlePeer::X, CastlePeer::Y, CastlePeer::SILVER, CastlePeer::COPPER, CastlePeer::CURRENT_ST, CastlePeer::CURRENT_AS, CastlePeer::CURRENT_PR, CastlePeer::CURRENT_SK, CastlePeer::CURRENT_BS, CastlePeer::CURRENT_LR, CastlePeer::CURRENT_HK, CastlePeer::CURRENT_OK, CastlePeer::MISSION_ST, CastlePeer::MISSION_AS, CastlePeer::MISSION_PR, CastlePeer::MISSION_SK, CastlePeer::MISSION_BS, CastlePeer::MISSION_LR, CastlePeer::USAGE_OFF, CastlePeer::USAGE_DEF, CastlePeer::MISSION_PRIORITY, CastlePeer::ENVIRONMENT_CARD, CastlePeer::AUTODEF_COORDINATES, CastlePeer::AUTODEF_X, CastlePeer::AUTODEF_Y, CastlePeer::POINTS, CastlePeer::OPEN_POPULATION, CastlePeer::LAST_IMPORT, CastlePeer::CREATED_AT, CastlePeer::UPDATED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER', 'NAME', 'CASTLE_TYPE_ID', 'CASTLE_LOCATION_ID', 'COORDINATES', 'X', 'Y', 'SILVER', 'COPPER', 'CURRENT_ST', 'CURRENT_AS', 'CURRENT_PR', 'CURRENT_SK', 'CURRENT_BS', 'CURRENT_LR', 'CURRENT_HK', 'CURRENT_OK', 'MISSION_ST', 'MISSION_AS', 'MISSION_PR', 'MISSION_SK', 'MISSION_BS', 'MISSION_LR', 'USAGE_OFF', 'USAGE_DEF', 'MISSION_PRIORITY', 'ENVIRONMENT_CARD', 'AUTODEF_COORDINATES', 'AUTODEF_X', 'AUTODEF_Y', 'POINTS', 'OPEN_POPULATION', 'LAST_IMPORT', 'CREATED_AT', 'UPDATED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'user', 'name', 'castle_type_id', 'castle_location_id', 'coordinates', 'X', 'Y', 'silver', 'copper', 'current_st', 'current_as', 'current_pr', 'current_sk', 'current_bs', 'current_lr', 'current_hk', 'current_ok', 'mission_st', 'mission_as', 'mission_pr', 'mission_sk', 'mission_bs', 'mission_lr', 'usage_off', 'usage_def', 'mission_priority', 'environment_card', 'autodef_coordinates', 'autodef_X', 'autodef_Y', 'points', 'open_population', 'last_import', 'created_at', 'updated_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CastlePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'User' => 1, 'Name' => 2, 'CastleTypeId' => 3, 'CastleLocationId' => 4, 'Coordinates' => 5, 'X' => 6, 'Y' => 7, 'Silver' => 8, 'Copper' => 9, 'CurrentSt' => 10, 'CurrentAs' => 11, 'CurrentPr' => 12, 'CurrentSk' => 13, 'CurrentBs' => 14, 'CurrentLr' => 15, 'CurrentHk' => 16, 'CurrentOk' => 17, 'MissionSt' => 18, 'MissionAs' => 19, 'MissionPr' => 20, 'MissionSk' => 21, 'MissionBs' => 22, 'MissionLr' => 23, 'UsageOff' => 24, 'UsageDef' => 25, 'MissionPriority' => 26, 'EnvironmentCard' => 27, 'AutodefCoordinates' => 28, 'AutodefX' => 29, 'AutodefY' => 30, 'Points' => 31, 'OpenPopulation' => 32, 'LastImport' => 33, 'CreatedAt' => 34, 'UpdatedAt' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'user' => 1, 'name' => 2, 'castleTypeId' => 3, 'castleLocationId' => 4, 'coordinates' => 5, 'x' => 6, 'y' => 7, 'silver' => 8, 'copper' => 9, 'currentSt' => 10, 'currentAs' => 11, 'currentPr' => 12, 'currentSk' => 13, 'currentBs' => 14, 'currentLr' => 15, 'currentHk' => 16, 'currentOk' => 17, 'missionSt' => 18, 'missionAs' => 19, 'missionPr' => 20, 'missionSk' => 21, 'missionBs' => 22, 'missionLr' => 23, 'usageOff' => 24, 'usageDef' => 25, 'missionPriority' => 26, 'environmentCard' => 27, 'autodefCoordinates' => 28, 'autodefX' => 29, 'autodefY' => 30, 'points' => 31, 'openPopulation' => 32, 'lastImport' => 33, 'createdAt' => 34, 'updatedAt' => 35, ),
        BasePeer::TYPE_COLNAME => array (CastlePeer::ID => 0, CastlePeer::USER => 1, CastlePeer::NAME => 2, CastlePeer::CASTLE_TYPE_ID => 3, CastlePeer::CASTLE_LOCATION_ID => 4, CastlePeer::COORDINATES => 5, CastlePeer::X => 6, CastlePeer::Y => 7, CastlePeer::SILVER => 8, CastlePeer::COPPER => 9, CastlePeer::CURRENT_ST => 10, CastlePeer::CURRENT_AS => 11, CastlePeer::CURRENT_PR => 12, CastlePeer::CURRENT_SK => 13, CastlePeer::CURRENT_BS => 14, CastlePeer::CURRENT_LR => 15, CastlePeer::CURRENT_HK => 16, CastlePeer::CURRENT_OK => 17, CastlePeer::MISSION_ST => 18, CastlePeer::MISSION_AS => 19, CastlePeer::MISSION_PR => 20, CastlePeer::MISSION_SK => 21, CastlePeer::MISSION_BS => 22, CastlePeer::MISSION_LR => 23, CastlePeer::USAGE_OFF => 24, CastlePeer::USAGE_DEF => 25, CastlePeer::MISSION_PRIORITY => 26, CastlePeer::ENVIRONMENT_CARD => 27, CastlePeer::AUTODEF_COORDINATES => 28, CastlePeer::AUTODEF_X => 29, CastlePeer::AUTODEF_Y => 30, CastlePeer::POINTS => 31, CastlePeer::OPEN_POPULATION => 32, CastlePeer::LAST_IMPORT => 33, CastlePeer::CREATED_AT => 34, CastlePeer::UPDATED_AT => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER' => 1, 'NAME' => 2, 'CASTLE_TYPE_ID' => 3, 'CASTLE_LOCATION_ID' => 4, 'COORDINATES' => 5, 'X' => 6, 'Y' => 7, 'SILVER' => 8, 'COPPER' => 9, 'CURRENT_ST' => 10, 'CURRENT_AS' => 11, 'CURRENT_PR' => 12, 'CURRENT_SK' => 13, 'CURRENT_BS' => 14, 'CURRENT_LR' => 15, 'CURRENT_HK' => 16, 'CURRENT_OK' => 17, 'MISSION_ST' => 18, 'MISSION_AS' => 19, 'MISSION_PR' => 20, 'MISSION_SK' => 21, 'MISSION_BS' => 22, 'MISSION_LR' => 23, 'USAGE_OFF' => 24, 'USAGE_DEF' => 25, 'MISSION_PRIORITY' => 26, 'ENVIRONMENT_CARD' => 27, 'AUTODEF_COORDINATES' => 28, 'AUTODEF_X' => 29, 'AUTODEF_Y' => 30, 'POINTS' => 31, 'OPEN_POPULATION' => 32, 'LAST_IMPORT' => 33, 'CREATED_AT' => 34, 'UPDATED_AT' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user' => 1, 'name' => 2, 'castle_type_id' => 3, 'castle_location_id' => 4, 'coordinates' => 5, 'X' => 6, 'Y' => 7, 'silver' => 8, 'copper' => 9, 'current_st' => 10, 'current_as' => 11, 'current_pr' => 12, 'current_sk' => 13, 'current_bs' => 14, 'current_lr' => 15, 'current_hk' => 16, 'current_ok' => 17, 'mission_st' => 18, 'mission_as' => 19, 'mission_pr' => 20, 'mission_sk' => 21, 'mission_bs' => 22, 'mission_lr' => 23, 'usage_off' => 24, 'usage_def' => 25, 'mission_priority' => 26, 'environment_card' => 27, 'autodef_coordinates' => 28, 'autodef_X' => 29, 'autodef_Y' => 30, 'points' => 31, 'open_population' => 32, 'last_import' => 33, 'created_at' => 34, 'updated_at' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
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
        $toNames = CastlePeer::getFieldNames($toType);
        $key = isset(CastlePeer::$fieldKeys[$fromType][$name]) ? CastlePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CastlePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CastlePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CastlePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CastlePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CastlePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CastlePeer::ID);
            $criteria->addSelectColumn(CastlePeer::USER);
            $criteria->addSelectColumn(CastlePeer::NAME);
            $criteria->addSelectColumn(CastlePeer::CASTLE_TYPE_ID);
            $criteria->addSelectColumn(CastlePeer::CASTLE_LOCATION_ID);
            $criteria->addSelectColumn(CastlePeer::COORDINATES);
            $criteria->addSelectColumn(CastlePeer::X);
            $criteria->addSelectColumn(CastlePeer::Y);
            $criteria->addSelectColumn(CastlePeer::SILVER);
            $criteria->addSelectColumn(CastlePeer::COPPER);
            $criteria->addSelectColumn(CastlePeer::CURRENT_ST);
            $criteria->addSelectColumn(CastlePeer::CURRENT_AS);
            $criteria->addSelectColumn(CastlePeer::CURRENT_PR);
            $criteria->addSelectColumn(CastlePeer::CURRENT_SK);
            $criteria->addSelectColumn(CastlePeer::CURRENT_BS);
            $criteria->addSelectColumn(CastlePeer::CURRENT_LR);
            $criteria->addSelectColumn(CastlePeer::CURRENT_HK);
            $criteria->addSelectColumn(CastlePeer::CURRENT_OK);
            $criteria->addSelectColumn(CastlePeer::MISSION_ST);
            $criteria->addSelectColumn(CastlePeer::MISSION_AS);
            $criteria->addSelectColumn(CastlePeer::MISSION_PR);
            $criteria->addSelectColumn(CastlePeer::MISSION_SK);
            $criteria->addSelectColumn(CastlePeer::MISSION_BS);
            $criteria->addSelectColumn(CastlePeer::MISSION_LR);
            $criteria->addSelectColumn(CastlePeer::USAGE_OFF);
            $criteria->addSelectColumn(CastlePeer::USAGE_DEF);
            $criteria->addSelectColumn(CastlePeer::MISSION_PRIORITY);
            $criteria->addSelectColumn(CastlePeer::ENVIRONMENT_CARD);
            $criteria->addSelectColumn(CastlePeer::AUTODEF_COORDINATES);
            $criteria->addSelectColumn(CastlePeer::AUTODEF_X);
            $criteria->addSelectColumn(CastlePeer::AUTODEF_Y);
            $criteria->addSelectColumn(CastlePeer::POINTS);
            $criteria->addSelectColumn(CastlePeer::OPEN_POPULATION);
            $criteria->addSelectColumn(CastlePeer::LAST_IMPORT);
            $criteria->addSelectColumn(CastlePeer::CREATED_AT);
            $criteria->addSelectColumn(CastlePeer::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.castle_type_id');
            $criteria->addSelectColumn($alias . '.castle_location_id');
            $criteria->addSelectColumn($alias . '.coordinates');
            $criteria->addSelectColumn($alias . '.X');
            $criteria->addSelectColumn($alias . '.Y');
            $criteria->addSelectColumn($alias . '.silver');
            $criteria->addSelectColumn($alias . '.copper');
            $criteria->addSelectColumn($alias . '.current_st');
            $criteria->addSelectColumn($alias . '.current_as');
            $criteria->addSelectColumn($alias . '.current_pr');
            $criteria->addSelectColumn($alias . '.current_sk');
            $criteria->addSelectColumn($alias . '.current_bs');
            $criteria->addSelectColumn($alias . '.current_lr');
            $criteria->addSelectColumn($alias . '.current_hk');
            $criteria->addSelectColumn($alias . '.current_ok');
            $criteria->addSelectColumn($alias . '.mission_st');
            $criteria->addSelectColumn($alias . '.mission_as');
            $criteria->addSelectColumn($alias . '.mission_pr');
            $criteria->addSelectColumn($alias . '.mission_sk');
            $criteria->addSelectColumn($alias . '.mission_bs');
            $criteria->addSelectColumn($alias . '.mission_lr');
            $criteria->addSelectColumn($alias . '.usage_off');
            $criteria->addSelectColumn($alias . '.usage_def');
            $criteria->addSelectColumn($alias . '.mission_priority');
            $criteria->addSelectColumn($alias . '.environment_card');
            $criteria->addSelectColumn($alias . '.autodef_coordinates');
            $criteria->addSelectColumn($alias . '.autodef_X');
            $criteria->addSelectColumn($alias . '.autodef_Y');
            $criteria->addSelectColumn($alias . '.points');
            $criteria->addSelectColumn($alias . '.open_population');
            $criteria->addSelectColumn($alias . '.last_import');
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
        $criteria->setPrimaryTableName(CastlePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastlePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CastlePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Castle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CastlePeer::doSelect($critcopy, $con);
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
        return CastlePeer::populateObjects(CastlePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CastlePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

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
     * @param Castle $obj A Castle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CastlePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Castle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Castle) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Castle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CastlePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Castle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CastlePeer::$instances[$key])) {
                return CastlePeer::$instances[$key];
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
        foreach (CastlePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CastlePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to castle
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
        $cls = CastlePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CastlePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CastlePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CastlePeer::addInstanceToPool($obj, $key);
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
     * @return array (Castle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CastlePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CastlePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CastlePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CastlePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CastlePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CastleType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCastleType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CastlePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastlePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastlePeer::CASTLE_TYPE_ID, CastleTypePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CastleLocation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCastleLocation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CastlePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastlePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastlePeer::CASTLE_LOCATION_ID, CastleLocationPeer::ID, $join_behavior);

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
     * Selects a collection of Castle objects pre-filled with their CastleType objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Castle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCastleType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastlePeer::DATABASE_NAME);
        }

        CastlePeer::addSelectColumns($criteria);
        $startcol = CastlePeer::NUM_HYDRATE_COLUMNS;
        CastleTypePeer::addSelectColumns($criteria);

        $criteria->addJoin(CastlePeer::CASTLE_TYPE_ID, CastleTypePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastlePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastlePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CastlePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastlePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CastleTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CastleTypePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CastleTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CastleTypePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Castle) to $obj2 (CastleType)
                $obj2->addCastle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Castle objects pre-filled with their CastleLocation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Castle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCastleLocation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastlePeer::DATABASE_NAME);
        }

        CastlePeer::addSelectColumns($criteria);
        $startcol = CastlePeer::NUM_HYDRATE_COLUMNS;
        CastleLocationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CastlePeer::CASTLE_LOCATION_ID, CastleLocationPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastlePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastlePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CastlePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastlePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CastleLocationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CastleLocationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CastleLocationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CastleLocationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Castle) to $obj2 (CastleLocation)
                $obj2->addCastle($obj1);

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
        $criteria->setPrimaryTableName(CastlePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastlePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastlePeer::CASTLE_TYPE_ID, CastleTypePeer::ID, $join_behavior);

        $criteria->addJoin(CastlePeer::CASTLE_LOCATION_ID, CastleLocationPeer::ID, $join_behavior);

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
     * Selects a collection of Castle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Castle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastlePeer::DATABASE_NAME);
        }

        CastlePeer::addSelectColumns($criteria);
        $startcol2 = CastlePeer::NUM_HYDRATE_COLUMNS;

        CastleTypePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CastleTypePeer::NUM_HYDRATE_COLUMNS;

        CastleLocationPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CastleLocationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CastlePeer::CASTLE_TYPE_ID, CastleTypePeer::ID, $join_behavior);

        $criteria->addJoin(CastlePeer::CASTLE_LOCATION_ID, CastleLocationPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastlePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastlePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CastlePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastlePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CastleType rows

            $key2 = CastleTypePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CastleTypePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CastleTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CastleTypePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Castle) to the collection in $obj2 (CastleType)
                $obj2->addCastle($obj1);
            } // if joined row not null

            // Add objects for joined CastleLocation rows

            $key3 = CastleLocationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CastleLocationPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CastleLocationPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CastleLocationPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Castle) to the collection in $obj3 (CastleLocation)
                $obj3->addCastle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CastleType table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCastleType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CastlePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastlePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastlePeer::CASTLE_LOCATION_ID, CastleLocationPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CastleLocation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCastleLocation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CastlePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastlePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastlePeer::CASTLE_TYPE_ID, CastleTypePeer::ID, $join_behavior);

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
     * Selects a collection of Castle objects pre-filled with all related objects except CastleType.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Castle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCastleType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastlePeer::DATABASE_NAME);
        }

        CastlePeer::addSelectColumns($criteria);
        $startcol2 = CastlePeer::NUM_HYDRATE_COLUMNS;

        CastleLocationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CastleLocationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CastlePeer::CASTLE_LOCATION_ID, CastleLocationPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastlePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastlePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CastlePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastlePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CastleLocation rows

                $key2 = CastleLocationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CastleLocationPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CastleLocationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CastleLocationPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Castle) to the collection in $obj2 (CastleLocation)
                $obj2->addCastle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Castle objects pre-filled with all related objects except CastleLocation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Castle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCastleLocation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastlePeer::DATABASE_NAME);
        }

        CastlePeer::addSelectColumns($criteria);
        $startcol2 = CastlePeer::NUM_HYDRATE_COLUMNS;

        CastleTypePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CastleTypePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CastlePeer::CASTLE_TYPE_ID, CastleTypePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastlePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastlePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CastlePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastlePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CastleType rows

                $key2 = CastleTypePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CastleTypePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CastleTypePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CastleTypePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Castle) to the collection in $obj2 (CastleType)
                $obj2->addCastle($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(CastlePeer::DATABASE_NAME)->getTable(CastlePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCastlePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCastlePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CastleTableMap());
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
        return CastlePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Castle or Criteria object.
     *
     * @param      mixed $values Criteria or Castle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Castle object
        }

        if ($criteria->containsKey(CastlePeer::ID) && $criteria->keyContainsValue(CastlePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CastlePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Castle or Criteria object.
     *
     * @param      mixed $values Criteria or Castle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CastlePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CastlePeer::ID);
            $value = $criteria->remove(CastlePeer::ID);
            if ($value) {
                $selectCriteria->add(CastlePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CastlePeer::TABLE_NAME);
            }

        } else { // $values is Castle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the castle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CastlePeer::TABLE_NAME, $con, CastlePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CastlePeer::clearInstancePool();
            CastlePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Castle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Castle object or primary key or array of primary keys
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
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CastlePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Castle) { // it's a model object
            // invalidate the cache for this single object
            CastlePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CastlePeer::DATABASE_NAME);
            $criteria->add(CastlePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CastlePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CastlePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CastlePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Castle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Castle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CastlePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CastlePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CastlePeer::DATABASE_NAME, CastlePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Castle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CastlePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CastlePeer::DATABASE_NAME);
        $criteria->add(CastlePeer::ID, $pk);

        $v = CastlePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Castle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CastlePeer::DATABASE_NAME);
            $criteria->add(CastlePeer::ID, $pks, Criteria::IN);
            $objs = CastlePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCastlePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCastlePeer::buildTableMap();


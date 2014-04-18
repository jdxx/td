<?php


/**
 * Base static class for performing query and update operations on the 'buildings' table.
 *
 *
 *
 * @package propel.generator.orm.om
 */
abstract class BaseBuildingsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'TotalDefense';

    /** the table name for this class */
    const TABLE_NAME = 'buildings';

    /** the related Propel class for this table */
    const OM_CLASS = 'Buildings';

    /** the related TableMap class for this table */
    const TM_CLASS = 'BuildingsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 34;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 34;

    /** the column name for the id field */
    const ID = 'buildings.id';

    /** the column name for the bergfried field */
    const BERGFRIED = 'buildings.bergfried';

    /** the column name for the zeughaus field */
    const ZEUGHAUS = 'buildings.zeughaus';

    /** the column name for the taverne field */
    const TAVERNE = 'buildings.taverne';

    /** the column name for the bibliothek field */
    const BIBLIOTHEK = 'buildings.bibliothek';

    /** the column name for the wehranlage field */
    const WEHRANLAGE = 'buildings.wehranlage';

    /** the column name for the markt field */
    const MARKT = 'buildings.markt';

    /** the column name for the bauernhof field */
    const BAUERNHOF = 'buildings.bauernhof';

    /** the column name for the holzfaeller field */
    const HOLZFAELLER = 'buildings.holzfaeller';

    /** the column name for the holzlager field */
    const HOLZLAGER = 'buildings.holzlager';

    /** the column name for the steinbruch field */
    const STEINBRUCH = 'buildings.steinbruch';

    /** the column name for the steinlager field */
    const STEINLAGER = 'buildings.steinlager';

    /** the column name for the erzmine field */
    const ERZMINE = 'buildings.erzmine';

    /** the column name for the erzlager field */
    const ERZLAGER = 'buildings.erzlager';

    /** the column name for the langbogen field */
    const LANGBOGEN = 'buildings.langbogen';

    /** the column name for the dreifelderwirtschaft field */
    const DREIFELDERWIRTSCHAFT = 'buildings.dreifelderwirtschaft';

    /** the column name for the kummet field */
    const KUMMET = 'buildings.kummet';

    /** the column name for the vorratskeller field */
    const VORRATSKELLER = 'buildings.vorratskeller';

    /** the column name for the steigbuegel field */
    const STEIGBUEGEL = 'buildings.steigbuegel';

    /** the column name for the waffenschmied field */
    const WAFFENSCHMIED = 'buildings.waffenschmied';

    /** the column name for the ruestungsschmied field */
    const RUESTUNGSSCHMIED = 'buildings.ruestungsschmied';

    /** the column name for the bierpruefer field */
    const BIERPRUEFER = 'buildings.bierpruefer';

    /** the column name for the schwertschmied field */
    const SCHWERTSCHMIED = 'buildings.schwertschmied';

    /** the column name for the eisenhaertung field */
    const EISENHAERTUNG = 'buildings.eisenhaertung';

    /** the column name for the armbrust field */
    const ARMBRUST = 'buildings.armbrust';

    /** the column name for the giftpfeile field */
    const GIFTPFEILE = 'buildings.giftpfeile';

    /** the column name for the pferdezucht field */
    const PFERDEZUCHT = 'buildings.pferdezucht';

    /** the column name for the waffenherstellung field */
    const WAFFENHERSTELLUNG = 'buildings.waffenherstellung';

    /** the column name for the pferdepanzerung field */
    const PFERDEPANZERUNG = 'buildings.pferdepanzerung';

    /** the column name for the schubkarren field */
    const SCHUBKARREN = 'buildings.schubkarren';

    /** the column name for the brandpfeile field */
    const BRANDPFEILE = 'buildings.brandpfeile';

    /** the column name for the hufschmied field */
    const HUFSCHMIED = 'buildings.hufschmied';

    /** the column name for the umgebungskarte field */
    const UMGEBUNGSKARTE = 'buildings.umgebungskarte';

    /** the column name for the zisterne field */
    const ZISTERNE = 'buildings.zisterne';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Buildings objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Buildings[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. BuildingsPeer::$fieldNames[BuildingsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Bergfried', 'Zeughaus', 'Taverne', 'Bibliothek', 'Wehranlage', 'Markt', 'Bauernhof', 'Holzfaeller', 'Holzlager', 'Steinbruch', 'Steinlager', 'Erzmine', 'Erzlager', 'Langbogen', 'Dreifelderwirtschaft', 'Kummet', 'Vorratskeller', 'Steigbuegel', 'Waffenschmied', 'Ruestungsschmied', 'Bierpruefer', 'Schwertschmied', 'Eisenhaertung', 'Armbrust', 'Giftpfeile', 'Pferdezucht', 'Waffenherstellung', 'Pferdepanzerung', 'Schubkarren', 'Brandpfeile', 'Hufschmied', 'Umgebungskarte', 'Zisterne', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'bergfried', 'zeughaus', 'taverne', 'bibliothek', 'wehranlage', 'markt', 'bauernhof', 'holzfaeller', 'holzlager', 'steinbruch', 'steinlager', 'erzmine', 'erzlager', 'langbogen', 'dreifelderwirtschaft', 'kummet', 'vorratskeller', 'steigbuegel', 'waffenschmied', 'ruestungsschmied', 'bierpruefer', 'schwertschmied', 'eisenhaertung', 'armbrust', 'giftpfeile', 'pferdezucht', 'waffenherstellung', 'pferdepanzerung', 'schubkarren', 'brandpfeile', 'hufschmied', 'umgebungskarte', 'zisterne', ),
        BasePeer::TYPE_COLNAME => array (BuildingsPeer::ID, BuildingsPeer::BERGFRIED, BuildingsPeer::ZEUGHAUS, BuildingsPeer::TAVERNE, BuildingsPeer::BIBLIOTHEK, BuildingsPeer::WEHRANLAGE, BuildingsPeer::MARKT, BuildingsPeer::BAUERNHOF, BuildingsPeer::HOLZFAELLER, BuildingsPeer::HOLZLAGER, BuildingsPeer::STEINBRUCH, BuildingsPeer::STEINLAGER, BuildingsPeer::ERZMINE, BuildingsPeer::ERZLAGER, BuildingsPeer::LANGBOGEN, BuildingsPeer::DREIFELDERWIRTSCHAFT, BuildingsPeer::KUMMET, BuildingsPeer::VORRATSKELLER, BuildingsPeer::STEIGBUEGEL, BuildingsPeer::WAFFENSCHMIED, BuildingsPeer::RUESTUNGSSCHMIED, BuildingsPeer::BIERPRUEFER, BuildingsPeer::SCHWERTSCHMIED, BuildingsPeer::EISENHAERTUNG, BuildingsPeer::ARMBRUST, BuildingsPeer::GIFTPFEILE, BuildingsPeer::PFERDEZUCHT, BuildingsPeer::WAFFENHERSTELLUNG, BuildingsPeer::PFERDEPANZERUNG, BuildingsPeer::SCHUBKARREN, BuildingsPeer::BRANDPFEILE, BuildingsPeer::HUFSCHMIED, BuildingsPeer::UMGEBUNGSKARTE, BuildingsPeer::ZISTERNE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'BERGFRIED', 'ZEUGHAUS', 'TAVERNE', 'BIBLIOTHEK', 'WEHRANLAGE', 'MARKT', 'BAUERNHOF', 'HOLZFAELLER', 'HOLZLAGER', 'STEINBRUCH', 'STEINLAGER', 'ERZMINE', 'ERZLAGER', 'LANGBOGEN', 'DREIFELDERWIRTSCHAFT', 'KUMMET', 'VORRATSKELLER', 'STEIGBUEGEL', 'WAFFENSCHMIED', 'RUESTUNGSSCHMIED', 'BIERPRUEFER', 'SCHWERTSCHMIED', 'EISENHAERTUNG', 'ARMBRUST', 'GIFTPFEILE', 'PFERDEZUCHT', 'WAFFENHERSTELLUNG', 'PFERDEPANZERUNG', 'SCHUBKARREN', 'BRANDPFEILE', 'HUFSCHMIED', 'UMGEBUNGSKARTE', 'ZISTERNE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'bergfried', 'zeughaus', 'taverne', 'bibliothek', 'wehranlage', 'markt', 'bauernhof', 'holzfaeller', 'holzlager', 'steinbruch', 'steinlager', 'erzmine', 'erzlager', 'langbogen', 'dreifelderwirtschaft', 'kummet', 'vorratskeller', 'steigbuegel', 'waffenschmied', 'ruestungsschmied', 'bierpruefer', 'schwertschmied', 'eisenhaertung', 'armbrust', 'giftpfeile', 'pferdezucht', 'waffenherstellung', 'pferdepanzerung', 'schubkarren', 'brandpfeile', 'hufschmied', 'umgebungskarte', 'zisterne', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. BuildingsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Bergfried' => 1, 'Zeughaus' => 2, 'Taverne' => 3, 'Bibliothek' => 4, 'Wehranlage' => 5, 'Markt' => 6, 'Bauernhof' => 7, 'Holzfaeller' => 8, 'Holzlager' => 9, 'Steinbruch' => 10, 'Steinlager' => 11, 'Erzmine' => 12, 'Erzlager' => 13, 'Langbogen' => 14, 'Dreifelderwirtschaft' => 15, 'Kummet' => 16, 'Vorratskeller' => 17, 'Steigbuegel' => 18, 'Waffenschmied' => 19, 'Ruestungsschmied' => 20, 'Bierpruefer' => 21, 'Schwertschmied' => 22, 'Eisenhaertung' => 23, 'Armbrust' => 24, 'Giftpfeile' => 25, 'Pferdezucht' => 26, 'Waffenherstellung' => 27, 'Pferdepanzerung' => 28, 'Schubkarren' => 29, 'Brandpfeile' => 30, 'Hufschmied' => 31, 'Umgebungskarte' => 32, 'Zisterne' => 33, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'bergfried' => 1, 'zeughaus' => 2, 'taverne' => 3, 'bibliothek' => 4, 'wehranlage' => 5, 'markt' => 6, 'bauernhof' => 7, 'holzfaeller' => 8, 'holzlager' => 9, 'steinbruch' => 10, 'steinlager' => 11, 'erzmine' => 12, 'erzlager' => 13, 'langbogen' => 14, 'dreifelderwirtschaft' => 15, 'kummet' => 16, 'vorratskeller' => 17, 'steigbuegel' => 18, 'waffenschmied' => 19, 'ruestungsschmied' => 20, 'bierpruefer' => 21, 'schwertschmied' => 22, 'eisenhaertung' => 23, 'armbrust' => 24, 'giftpfeile' => 25, 'pferdezucht' => 26, 'waffenherstellung' => 27, 'pferdepanzerung' => 28, 'schubkarren' => 29, 'brandpfeile' => 30, 'hufschmied' => 31, 'umgebungskarte' => 32, 'zisterne' => 33, ),
        BasePeer::TYPE_COLNAME => array (BuildingsPeer::ID => 0, BuildingsPeer::BERGFRIED => 1, BuildingsPeer::ZEUGHAUS => 2, BuildingsPeer::TAVERNE => 3, BuildingsPeer::BIBLIOTHEK => 4, BuildingsPeer::WEHRANLAGE => 5, BuildingsPeer::MARKT => 6, BuildingsPeer::BAUERNHOF => 7, BuildingsPeer::HOLZFAELLER => 8, BuildingsPeer::HOLZLAGER => 9, BuildingsPeer::STEINBRUCH => 10, BuildingsPeer::STEINLAGER => 11, BuildingsPeer::ERZMINE => 12, BuildingsPeer::ERZLAGER => 13, BuildingsPeer::LANGBOGEN => 14, BuildingsPeer::DREIFELDERWIRTSCHAFT => 15, BuildingsPeer::KUMMET => 16, BuildingsPeer::VORRATSKELLER => 17, BuildingsPeer::STEIGBUEGEL => 18, BuildingsPeer::WAFFENSCHMIED => 19, BuildingsPeer::RUESTUNGSSCHMIED => 20, BuildingsPeer::BIERPRUEFER => 21, BuildingsPeer::SCHWERTSCHMIED => 22, BuildingsPeer::EISENHAERTUNG => 23, BuildingsPeer::ARMBRUST => 24, BuildingsPeer::GIFTPFEILE => 25, BuildingsPeer::PFERDEZUCHT => 26, BuildingsPeer::WAFFENHERSTELLUNG => 27, BuildingsPeer::PFERDEPANZERUNG => 28, BuildingsPeer::SCHUBKARREN => 29, BuildingsPeer::BRANDPFEILE => 30, BuildingsPeer::HUFSCHMIED => 31, BuildingsPeer::UMGEBUNGSKARTE => 32, BuildingsPeer::ZISTERNE => 33, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'BERGFRIED' => 1, 'ZEUGHAUS' => 2, 'TAVERNE' => 3, 'BIBLIOTHEK' => 4, 'WEHRANLAGE' => 5, 'MARKT' => 6, 'BAUERNHOF' => 7, 'HOLZFAELLER' => 8, 'HOLZLAGER' => 9, 'STEINBRUCH' => 10, 'STEINLAGER' => 11, 'ERZMINE' => 12, 'ERZLAGER' => 13, 'LANGBOGEN' => 14, 'DREIFELDERWIRTSCHAFT' => 15, 'KUMMET' => 16, 'VORRATSKELLER' => 17, 'STEIGBUEGEL' => 18, 'WAFFENSCHMIED' => 19, 'RUESTUNGSSCHMIED' => 20, 'BIERPRUEFER' => 21, 'SCHWERTSCHMIED' => 22, 'EISENHAERTUNG' => 23, 'ARMBRUST' => 24, 'GIFTPFEILE' => 25, 'PFERDEZUCHT' => 26, 'WAFFENHERSTELLUNG' => 27, 'PFERDEPANZERUNG' => 28, 'SCHUBKARREN' => 29, 'BRANDPFEILE' => 30, 'HUFSCHMIED' => 31, 'UMGEBUNGSKARTE' => 32, 'ZISTERNE' => 33, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'bergfried' => 1, 'zeughaus' => 2, 'taverne' => 3, 'bibliothek' => 4, 'wehranlage' => 5, 'markt' => 6, 'bauernhof' => 7, 'holzfaeller' => 8, 'holzlager' => 9, 'steinbruch' => 10, 'steinlager' => 11, 'erzmine' => 12, 'erzlager' => 13, 'langbogen' => 14, 'dreifelderwirtschaft' => 15, 'kummet' => 16, 'vorratskeller' => 17, 'steigbuegel' => 18, 'waffenschmied' => 19, 'ruestungsschmied' => 20, 'bierpruefer' => 21, 'schwertschmied' => 22, 'eisenhaertung' => 23, 'armbrust' => 24, 'giftpfeile' => 25, 'pferdezucht' => 26, 'waffenherstellung' => 27, 'pferdepanzerung' => 28, 'schubkarren' => 29, 'brandpfeile' => 30, 'hufschmied' => 31, 'umgebungskarte' => 32, 'zisterne' => 33, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
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
        $toNames = BuildingsPeer::getFieldNames($toType);
        $key = isset(BuildingsPeer::$fieldKeys[$fromType][$name]) ? BuildingsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(BuildingsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, BuildingsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return BuildingsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. BuildingsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(BuildingsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(BuildingsPeer::ID);
            $criteria->addSelectColumn(BuildingsPeer::BERGFRIED);
            $criteria->addSelectColumn(BuildingsPeer::ZEUGHAUS);
            $criteria->addSelectColumn(BuildingsPeer::TAVERNE);
            $criteria->addSelectColumn(BuildingsPeer::BIBLIOTHEK);
            $criteria->addSelectColumn(BuildingsPeer::WEHRANLAGE);
            $criteria->addSelectColumn(BuildingsPeer::MARKT);
            $criteria->addSelectColumn(BuildingsPeer::BAUERNHOF);
            $criteria->addSelectColumn(BuildingsPeer::HOLZFAELLER);
            $criteria->addSelectColumn(BuildingsPeer::HOLZLAGER);
            $criteria->addSelectColumn(BuildingsPeer::STEINBRUCH);
            $criteria->addSelectColumn(BuildingsPeer::STEINLAGER);
            $criteria->addSelectColumn(BuildingsPeer::ERZMINE);
            $criteria->addSelectColumn(BuildingsPeer::ERZLAGER);
            $criteria->addSelectColumn(BuildingsPeer::LANGBOGEN);
            $criteria->addSelectColumn(BuildingsPeer::DREIFELDERWIRTSCHAFT);
            $criteria->addSelectColumn(BuildingsPeer::KUMMET);
            $criteria->addSelectColumn(BuildingsPeer::VORRATSKELLER);
            $criteria->addSelectColumn(BuildingsPeer::STEIGBUEGEL);
            $criteria->addSelectColumn(BuildingsPeer::WAFFENSCHMIED);
            $criteria->addSelectColumn(BuildingsPeer::RUESTUNGSSCHMIED);
            $criteria->addSelectColumn(BuildingsPeer::BIERPRUEFER);
            $criteria->addSelectColumn(BuildingsPeer::SCHWERTSCHMIED);
            $criteria->addSelectColumn(BuildingsPeer::EISENHAERTUNG);
            $criteria->addSelectColumn(BuildingsPeer::ARMBRUST);
            $criteria->addSelectColumn(BuildingsPeer::GIFTPFEILE);
            $criteria->addSelectColumn(BuildingsPeer::PFERDEZUCHT);
            $criteria->addSelectColumn(BuildingsPeer::WAFFENHERSTELLUNG);
            $criteria->addSelectColumn(BuildingsPeer::PFERDEPANZERUNG);
            $criteria->addSelectColumn(BuildingsPeer::SCHUBKARREN);
            $criteria->addSelectColumn(BuildingsPeer::BRANDPFEILE);
            $criteria->addSelectColumn(BuildingsPeer::HUFSCHMIED);
            $criteria->addSelectColumn(BuildingsPeer::UMGEBUNGSKARTE);
            $criteria->addSelectColumn(BuildingsPeer::ZISTERNE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.bergfried');
            $criteria->addSelectColumn($alias . '.zeughaus');
            $criteria->addSelectColumn($alias . '.taverne');
            $criteria->addSelectColumn($alias . '.bibliothek');
            $criteria->addSelectColumn($alias . '.wehranlage');
            $criteria->addSelectColumn($alias . '.markt');
            $criteria->addSelectColumn($alias . '.bauernhof');
            $criteria->addSelectColumn($alias . '.holzfaeller');
            $criteria->addSelectColumn($alias . '.holzlager');
            $criteria->addSelectColumn($alias . '.steinbruch');
            $criteria->addSelectColumn($alias . '.steinlager');
            $criteria->addSelectColumn($alias . '.erzmine');
            $criteria->addSelectColumn($alias . '.erzlager');
            $criteria->addSelectColumn($alias . '.langbogen');
            $criteria->addSelectColumn($alias . '.dreifelderwirtschaft');
            $criteria->addSelectColumn($alias . '.kummet');
            $criteria->addSelectColumn($alias . '.vorratskeller');
            $criteria->addSelectColumn($alias . '.steigbuegel');
            $criteria->addSelectColumn($alias . '.waffenschmied');
            $criteria->addSelectColumn($alias . '.ruestungsschmied');
            $criteria->addSelectColumn($alias . '.bierpruefer');
            $criteria->addSelectColumn($alias . '.schwertschmied');
            $criteria->addSelectColumn($alias . '.eisenhaertung');
            $criteria->addSelectColumn($alias . '.armbrust');
            $criteria->addSelectColumn($alias . '.giftpfeile');
            $criteria->addSelectColumn($alias . '.pferdezucht');
            $criteria->addSelectColumn($alias . '.waffenherstellung');
            $criteria->addSelectColumn($alias . '.pferdepanzerung');
            $criteria->addSelectColumn($alias . '.schubkarren');
            $criteria->addSelectColumn($alias . '.brandpfeile');
            $criteria->addSelectColumn($alias . '.hufschmied');
            $criteria->addSelectColumn($alias . '.umgebungskarte');
            $criteria->addSelectColumn($alias . '.zisterne');
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
        $criteria->setPrimaryTableName(BuildingsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            BuildingsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(BuildingsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Buildings
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = BuildingsPeer::doSelect($critcopy, $con);
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
        return BuildingsPeer::populateObjects(BuildingsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            BuildingsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(BuildingsPeer::DATABASE_NAME);

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
     * @param Buildings $obj A Buildings object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            BuildingsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Buildings object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Buildings) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Buildings object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(BuildingsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Buildings Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(BuildingsPeer::$instances[$key])) {
                return BuildingsPeer::$instances[$key];
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
        foreach (BuildingsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        BuildingsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to buildings
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
        $cls = BuildingsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = BuildingsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = BuildingsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BuildingsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Buildings object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = BuildingsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = BuildingsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + BuildingsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BuildingsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            BuildingsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(BuildingsPeer::DATABASE_NAME)->getTable(BuildingsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseBuildingsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseBuildingsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \BuildingsTableMap());
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
        return BuildingsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Buildings or Criteria object.
     *
     * @param      mixed $values Criteria or Buildings object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Buildings object
        }

        if ($criteria->containsKey(BuildingsPeer::ID) && $criteria->keyContainsValue(BuildingsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BuildingsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(BuildingsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Buildings or Criteria object.
     *
     * @param      mixed $values Criteria or Buildings object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(BuildingsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(BuildingsPeer::ID);
            $value = $criteria->remove(BuildingsPeer::ID);
            if ($value) {
                $selectCriteria->add(BuildingsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BuildingsPeer::TABLE_NAME);
            }

        } else { // $values is Buildings object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(BuildingsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the buildings table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(BuildingsPeer::TABLE_NAME, $con, BuildingsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BuildingsPeer::clearInstancePool();
            BuildingsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Buildings or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Buildings object or primary key or array of primary keys
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
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            BuildingsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Buildings) { // it's a model object
            // invalidate the cache for this single object
            BuildingsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BuildingsPeer::DATABASE_NAME);
            $criteria->add(BuildingsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                BuildingsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(BuildingsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            BuildingsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Buildings object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Buildings $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(BuildingsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(BuildingsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(BuildingsPeer::DATABASE_NAME, BuildingsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Buildings
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = BuildingsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(BuildingsPeer::DATABASE_NAME);
        $criteria->add(BuildingsPeer::ID, $pk);

        $v = BuildingsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Buildings[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(BuildingsPeer::DATABASE_NAME);
            $criteria->add(BuildingsPeer::ID, $pks, Criteria::IN);
            $objs = BuildingsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseBuildingsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBuildingsPeer::buildTableMap();


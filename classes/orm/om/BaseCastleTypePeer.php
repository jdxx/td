<?php


/**
 * Base static class for performing query and update operations on the 'castle_type' table.
 *
 *
 *
 * @package propel.generator.orm.om
 */
abstract class BaseCastleTypePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'TotalDefense';

    /** the table name for this class */
    const TABLE_NAME = 'castle_type';

    /** the related Propel class for this table */
    const OM_CLASS = 'CastleType';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CastleTypeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 55;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 55;

    /** the column name for the id field */
    const ID = 'castle_type.id';

    /** the column name for the user_id field */
    const USER_ID = 'castle_type.user_id';

    /** the column name for the type field */
    const TYPE = 'castle_type.type';

    /** the column name for the name field */
    const NAME = 'castle_type.name';

    /** the column name for the total_st field */
    const TOTAL_ST = 'castle_type.total_st';

    /** the column name for the total_as field */
    const TOTAL_AS = 'castle_type.total_as';

    /** the column name for the total_pr field */
    const TOTAL_PR = 'castle_type.total_pr';

    /** the column name for the total_sk field */
    const TOTAL_SK = 'castle_type.total_sk';

    /** the column name for the total_bs field */
    const TOTAL_BS = 'castle_type.total_bs';

    /** the column name for the total_lr field */
    const TOTAL_LR = 'castle_type.total_lr';

    /** the column name for the total_hk field */
    const TOTAL_HK = 'castle_type.total_hk';

    /** the column name for the total_ok field */
    const TOTAL_OK = 'castle_type.total_ok';

    /** the column name for the mission_st field */
    const MISSION_ST = 'castle_type.mission_st';

    /** the column name for the mission_as field */
    const MISSION_AS = 'castle_type.mission_as';

    /** the column name for the mission_pr field */
    const MISSION_PR = 'castle_type.mission_pr';

    /** the column name for the mission_sk field */
    const MISSION_SK = 'castle_type.mission_sk';

    /** the column name for the mission_bs field */
    const MISSION_BS = 'castle_type.mission_bs';

    /** the column name for the mission_lr field */
    const MISSION_LR = 'castle_type.mission_lr';

    /** the column name for the bergfried field */
    const BERGFRIED = 'castle_type.bergfried';

    /** the column name for the zeughaus field */
    const ZEUGHAUS = 'castle_type.zeughaus';

    /** the column name for the taverne field */
    const TAVERNE = 'castle_type.taverne';

    /** the column name for the bibliothek field */
    const BIBLIOTHEK = 'castle_type.bibliothek';

    /** the column name for the wehranlage field */
    const WEHRANLAGE = 'castle_type.wehranlage';

    /** the column name for the markt field */
    const MARKT = 'castle_type.markt';

    /** the column name for the bauernhof field */
    const BAUERNHOF = 'castle_type.bauernhof';

    /** the column name for the holzfaeller field */
    const HOLZFAELLER = 'castle_type.holzfaeller';

    /** the column name for the holzlager field */
    const HOLZLAGER = 'castle_type.holzlager';

    /** the column name for the steinbruch field */
    const STEINBRUCH = 'castle_type.steinbruch';

    /** the column name for the steinlager field */
    const STEINLAGER = 'castle_type.steinlager';

    /** the column name for the erzmine field */
    const ERZMINE = 'castle_type.erzmine';

    /** the column name for the erzlager field */
    const ERZLAGER = 'castle_type.erzlager';

    /** the column name for the langbogen field */
    const LANGBOGEN = 'castle_type.langbogen';

    /** the column name for the dreifelderwirtschaft field */
    const DREIFELDERWIRTSCHAFT = 'castle_type.dreifelderwirtschaft';

    /** the column name for the kummet field */
    const KUMMET = 'castle_type.kummet';

    /** the column name for the vorratskeller field */
    const VORRATSKELLER = 'castle_type.vorratskeller';

    /** the column name for the steigbuegel field */
    const STEIGBUEGEL = 'castle_type.steigbuegel';

    /** the column name for the waffenschmied field */
    const WAFFENSCHMIED = 'castle_type.waffenschmied';

    /** the column name for the ruestungsschmied field */
    const RUESTUNGSSCHMIED = 'castle_type.ruestungsschmied';

    /** the column name for the bierpruefer field */
    const BIERPRUEFER = 'castle_type.bierpruefer';

    /** the column name for the schwertschmied field */
    const SCHWERTSCHMIED = 'castle_type.schwertschmied';

    /** the column name for the eisenhaertung field */
    const EISENHAERTUNG = 'castle_type.eisenhaertung';

    /** the column name for the armbrust field */
    const ARMBRUST = 'castle_type.armbrust';

    /** the column name for the giftpfeile field */
    const GIFTPFEILE = 'castle_type.giftpfeile';

    /** the column name for the pferdezucht field */
    const PFERDEZUCHT = 'castle_type.pferdezucht';

    /** the column name for the waffenherstellung field */
    const WAFFENHERSTELLUNG = 'castle_type.waffenherstellung';

    /** the column name for the pferdepanzerung field */
    const PFERDEPANZERUNG = 'castle_type.pferdepanzerung';

    /** the column name for the schubkarren field */
    const SCHUBKARREN = 'castle_type.schubkarren';

    /** the column name for the brandpfeile field */
    const BRANDPFEILE = 'castle_type.brandpfeile';

    /** the column name for the hufschmied field */
    const HUFSCHMIED = 'castle_type.hufschmied';

    /** the column name for the umgebungskarte field */
    const UMGEBUNGSKARTE = 'castle_type.umgebungskarte';

    /** the column name for the zisterne field */
    const ZISTERNE = 'castle_type.zisterne';

    /** the column name for the max_population field */
    const MAX_POPULATION = 'castle_type.max_population';

    /** the column name for the free_population field */
    const FREE_POPULATION = 'castle_type.free_population';

    /** the column name for the created_at field */
    const CREATED_AT = 'castle_type.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'castle_type.updated_at';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CastleType objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CastleType[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CastleTypePeer::$fieldNames[CastleTypePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Type', 'Name', 'TotalSt', 'TotalAs', 'TotalPr', 'TotalSk', 'TotalBs', 'TotalLr', 'TotalHk', 'TotalOk', 'MissionSt', 'MissionAs', 'MissionPr', 'MissionSk', 'MissionBs', 'MissionLr', 'Bergfried', 'Zeughaus', 'Taverne', 'Bibliothek', 'Wehranlage', 'Markt', 'Bauernhof', 'Holzfaeller', 'Holzlager', 'Steinbruch', 'Steinlager', 'Erzmine', 'Erzlager', 'Langbogen', 'Dreifelderwirtschaft', 'Kummet', 'Vorratskeller', 'Steigbuegel', 'Waffenschmied', 'Ruestungsschmied', 'Bierpruefer', 'Schwertschmied', 'Eisenhaertung', 'Armbrust', 'Giftpfeile', 'Pferdezucht', 'Waffenherstellung', 'Pferdepanzerung', 'Schubkarren', 'Brandpfeile', 'Hufschmied', 'Umgebungskarte', 'Zisterne', 'MaxPopulation', 'FreePopulation', 'CreatedAt', 'UpdatedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userId', 'type', 'name', 'totalSt', 'totalAs', 'totalPr', 'totalSk', 'totalBs', 'totalLr', 'totalHk', 'totalOk', 'missionSt', 'missionAs', 'missionPr', 'missionSk', 'missionBs', 'missionLr', 'bergfried', 'zeughaus', 'taverne', 'bibliothek', 'wehranlage', 'markt', 'bauernhof', 'holzfaeller', 'holzlager', 'steinbruch', 'steinlager', 'erzmine', 'erzlager', 'langbogen', 'dreifelderwirtschaft', 'kummet', 'vorratskeller', 'steigbuegel', 'waffenschmied', 'ruestungsschmied', 'bierpruefer', 'schwertschmied', 'eisenhaertung', 'armbrust', 'giftpfeile', 'pferdezucht', 'waffenherstellung', 'pferdepanzerung', 'schubkarren', 'brandpfeile', 'hufschmied', 'umgebungskarte', 'zisterne', 'maxPopulation', 'freePopulation', 'createdAt', 'updatedAt', ),
        BasePeer::TYPE_COLNAME => array (CastleTypePeer::ID, CastleTypePeer::USER_ID, CastleTypePeer::TYPE, CastleTypePeer::NAME, CastleTypePeer::TOTAL_ST, CastleTypePeer::TOTAL_AS, CastleTypePeer::TOTAL_PR, CastleTypePeer::TOTAL_SK, CastleTypePeer::TOTAL_BS, CastleTypePeer::TOTAL_LR, CastleTypePeer::TOTAL_HK, CastleTypePeer::TOTAL_OK, CastleTypePeer::MISSION_ST, CastleTypePeer::MISSION_AS, CastleTypePeer::MISSION_PR, CastleTypePeer::MISSION_SK, CastleTypePeer::MISSION_BS, CastleTypePeer::MISSION_LR, CastleTypePeer::BERGFRIED, CastleTypePeer::ZEUGHAUS, CastleTypePeer::TAVERNE, CastleTypePeer::BIBLIOTHEK, CastleTypePeer::WEHRANLAGE, CastleTypePeer::MARKT, CastleTypePeer::BAUERNHOF, CastleTypePeer::HOLZFAELLER, CastleTypePeer::HOLZLAGER, CastleTypePeer::STEINBRUCH, CastleTypePeer::STEINLAGER, CastleTypePeer::ERZMINE, CastleTypePeer::ERZLAGER, CastleTypePeer::LANGBOGEN, CastleTypePeer::DREIFELDERWIRTSCHAFT, CastleTypePeer::KUMMET, CastleTypePeer::VORRATSKELLER, CastleTypePeer::STEIGBUEGEL, CastleTypePeer::WAFFENSCHMIED, CastleTypePeer::RUESTUNGSSCHMIED, CastleTypePeer::BIERPRUEFER, CastleTypePeer::SCHWERTSCHMIED, CastleTypePeer::EISENHAERTUNG, CastleTypePeer::ARMBRUST, CastleTypePeer::GIFTPFEILE, CastleTypePeer::PFERDEZUCHT, CastleTypePeer::WAFFENHERSTELLUNG, CastleTypePeer::PFERDEPANZERUNG, CastleTypePeer::SCHUBKARREN, CastleTypePeer::BRANDPFEILE, CastleTypePeer::HUFSCHMIED, CastleTypePeer::UMGEBUNGSKARTE, CastleTypePeer::ZISTERNE, CastleTypePeer::MAX_POPULATION, CastleTypePeer::FREE_POPULATION, CastleTypePeer::CREATED_AT, CastleTypePeer::UPDATED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_ID', 'TYPE', 'NAME', 'TOTAL_ST', 'TOTAL_AS', 'TOTAL_PR', 'TOTAL_SK', 'TOTAL_BS', 'TOTAL_LR', 'TOTAL_HK', 'TOTAL_OK', 'MISSION_ST', 'MISSION_AS', 'MISSION_PR', 'MISSION_SK', 'MISSION_BS', 'MISSION_LR', 'BERGFRIED', 'ZEUGHAUS', 'TAVERNE', 'BIBLIOTHEK', 'WEHRANLAGE', 'MARKT', 'BAUERNHOF', 'HOLZFAELLER', 'HOLZLAGER', 'STEINBRUCH', 'STEINLAGER', 'ERZMINE', 'ERZLAGER', 'LANGBOGEN', 'DREIFELDERWIRTSCHAFT', 'KUMMET', 'VORRATSKELLER', 'STEIGBUEGEL', 'WAFFENSCHMIED', 'RUESTUNGSSCHMIED', 'BIERPRUEFER', 'SCHWERTSCHMIED', 'EISENHAERTUNG', 'ARMBRUST', 'GIFTPFEILE', 'PFERDEZUCHT', 'WAFFENHERSTELLUNG', 'PFERDEPANZERUNG', 'SCHUBKARREN', 'BRANDPFEILE', 'HUFSCHMIED', 'UMGEBUNGSKARTE', 'ZISTERNE', 'MAX_POPULATION', 'FREE_POPULATION', 'CREATED_AT', 'UPDATED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'type', 'name', 'total_st', 'total_as', 'total_pr', 'total_sk', 'total_bs', 'total_lr', 'total_hk', 'total_ok', 'mission_st', 'mission_as', 'mission_pr', 'mission_sk', 'mission_bs', 'mission_lr', 'bergfried', 'zeughaus', 'taverne', 'bibliothek', 'wehranlage', 'markt', 'bauernhof', 'holzfaeller', 'holzlager', 'steinbruch', 'steinlager', 'erzmine', 'erzlager', 'langbogen', 'dreifelderwirtschaft', 'kummet', 'vorratskeller', 'steigbuegel', 'waffenschmied', 'ruestungsschmied', 'bierpruefer', 'schwertschmied', 'eisenhaertung', 'armbrust', 'giftpfeile', 'pferdezucht', 'waffenherstellung', 'pferdepanzerung', 'schubkarren', 'brandpfeile', 'hufschmied', 'umgebungskarte', 'zisterne', 'max_population', 'free_population', 'created_at', 'updated_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CastleTypePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Type' => 2, 'Name' => 3, 'TotalSt' => 4, 'TotalAs' => 5, 'TotalPr' => 6, 'TotalSk' => 7, 'TotalBs' => 8, 'TotalLr' => 9, 'TotalHk' => 10, 'TotalOk' => 11, 'MissionSt' => 12, 'MissionAs' => 13, 'MissionPr' => 14, 'MissionSk' => 15, 'MissionBs' => 16, 'MissionLr' => 17, 'Bergfried' => 18, 'Zeughaus' => 19, 'Taverne' => 20, 'Bibliothek' => 21, 'Wehranlage' => 22, 'Markt' => 23, 'Bauernhof' => 24, 'Holzfaeller' => 25, 'Holzlager' => 26, 'Steinbruch' => 27, 'Steinlager' => 28, 'Erzmine' => 29, 'Erzlager' => 30, 'Langbogen' => 31, 'Dreifelderwirtschaft' => 32, 'Kummet' => 33, 'Vorratskeller' => 34, 'Steigbuegel' => 35, 'Waffenschmied' => 36, 'Ruestungsschmied' => 37, 'Bierpruefer' => 38, 'Schwertschmied' => 39, 'Eisenhaertung' => 40, 'Armbrust' => 41, 'Giftpfeile' => 42, 'Pferdezucht' => 43, 'Waffenherstellung' => 44, 'Pferdepanzerung' => 45, 'Schubkarren' => 46, 'Brandpfeile' => 47, 'Hufschmied' => 48, 'Umgebungskarte' => 49, 'Zisterne' => 50, 'MaxPopulation' => 51, 'FreePopulation' => 52, 'CreatedAt' => 53, 'UpdatedAt' => 54, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userId' => 1, 'type' => 2, 'name' => 3, 'totalSt' => 4, 'totalAs' => 5, 'totalPr' => 6, 'totalSk' => 7, 'totalBs' => 8, 'totalLr' => 9, 'totalHk' => 10, 'totalOk' => 11, 'missionSt' => 12, 'missionAs' => 13, 'missionPr' => 14, 'missionSk' => 15, 'missionBs' => 16, 'missionLr' => 17, 'bergfried' => 18, 'zeughaus' => 19, 'taverne' => 20, 'bibliothek' => 21, 'wehranlage' => 22, 'markt' => 23, 'bauernhof' => 24, 'holzfaeller' => 25, 'holzlager' => 26, 'steinbruch' => 27, 'steinlager' => 28, 'erzmine' => 29, 'erzlager' => 30, 'langbogen' => 31, 'dreifelderwirtschaft' => 32, 'kummet' => 33, 'vorratskeller' => 34, 'steigbuegel' => 35, 'waffenschmied' => 36, 'ruestungsschmied' => 37, 'bierpruefer' => 38, 'schwertschmied' => 39, 'eisenhaertung' => 40, 'armbrust' => 41, 'giftpfeile' => 42, 'pferdezucht' => 43, 'waffenherstellung' => 44, 'pferdepanzerung' => 45, 'schubkarren' => 46, 'brandpfeile' => 47, 'hufschmied' => 48, 'umgebungskarte' => 49, 'zisterne' => 50, 'maxPopulation' => 51, 'freePopulation' => 52, 'createdAt' => 53, 'updatedAt' => 54, ),
        BasePeer::TYPE_COLNAME => array (CastleTypePeer::ID => 0, CastleTypePeer::USER_ID => 1, CastleTypePeer::TYPE => 2, CastleTypePeer::NAME => 3, CastleTypePeer::TOTAL_ST => 4, CastleTypePeer::TOTAL_AS => 5, CastleTypePeer::TOTAL_PR => 6, CastleTypePeer::TOTAL_SK => 7, CastleTypePeer::TOTAL_BS => 8, CastleTypePeer::TOTAL_LR => 9, CastleTypePeer::TOTAL_HK => 10, CastleTypePeer::TOTAL_OK => 11, CastleTypePeer::MISSION_ST => 12, CastleTypePeer::MISSION_AS => 13, CastleTypePeer::MISSION_PR => 14, CastleTypePeer::MISSION_SK => 15, CastleTypePeer::MISSION_BS => 16, CastleTypePeer::MISSION_LR => 17, CastleTypePeer::BERGFRIED => 18, CastleTypePeer::ZEUGHAUS => 19, CastleTypePeer::TAVERNE => 20, CastleTypePeer::BIBLIOTHEK => 21, CastleTypePeer::WEHRANLAGE => 22, CastleTypePeer::MARKT => 23, CastleTypePeer::BAUERNHOF => 24, CastleTypePeer::HOLZFAELLER => 25, CastleTypePeer::HOLZLAGER => 26, CastleTypePeer::STEINBRUCH => 27, CastleTypePeer::STEINLAGER => 28, CastleTypePeer::ERZMINE => 29, CastleTypePeer::ERZLAGER => 30, CastleTypePeer::LANGBOGEN => 31, CastleTypePeer::DREIFELDERWIRTSCHAFT => 32, CastleTypePeer::KUMMET => 33, CastleTypePeer::VORRATSKELLER => 34, CastleTypePeer::STEIGBUEGEL => 35, CastleTypePeer::WAFFENSCHMIED => 36, CastleTypePeer::RUESTUNGSSCHMIED => 37, CastleTypePeer::BIERPRUEFER => 38, CastleTypePeer::SCHWERTSCHMIED => 39, CastleTypePeer::EISENHAERTUNG => 40, CastleTypePeer::ARMBRUST => 41, CastleTypePeer::GIFTPFEILE => 42, CastleTypePeer::PFERDEZUCHT => 43, CastleTypePeer::WAFFENHERSTELLUNG => 44, CastleTypePeer::PFERDEPANZERUNG => 45, CastleTypePeer::SCHUBKARREN => 46, CastleTypePeer::BRANDPFEILE => 47, CastleTypePeer::HUFSCHMIED => 48, CastleTypePeer::UMGEBUNGSKARTE => 49, CastleTypePeer::ZISTERNE => 50, CastleTypePeer::MAX_POPULATION => 51, CastleTypePeer::FREE_POPULATION => 52, CastleTypePeer::CREATED_AT => 53, CastleTypePeer::UPDATED_AT => 54, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_ID' => 1, 'TYPE' => 2, 'NAME' => 3, 'TOTAL_ST' => 4, 'TOTAL_AS' => 5, 'TOTAL_PR' => 6, 'TOTAL_SK' => 7, 'TOTAL_BS' => 8, 'TOTAL_LR' => 9, 'TOTAL_HK' => 10, 'TOTAL_OK' => 11, 'MISSION_ST' => 12, 'MISSION_AS' => 13, 'MISSION_PR' => 14, 'MISSION_SK' => 15, 'MISSION_BS' => 16, 'MISSION_LR' => 17, 'BERGFRIED' => 18, 'ZEUGHAUS' => 19, 'TAVERNE' => 20, 'BIBLIOTHEK' => 21, 'WEHRANLAGE' => 22, 'MARKT' => 23, 'BAUERNHOF' => 24, 'HOLZFAELLER' => 25, 'HOLZLAGER' => 26, 'STEINBRUCH' => 27, 'STEINLAGER' => 28, 'ERZMINE' => 29, 'ERZLAGER' => 30, 'LANGBOGEN' => 31, 'DREIFELDERWIRTSCHAFT' => 32, 'KUMMET' => 33, 'VORRATSKELLER' => 34, 'STEIGBUEGEL' => 35, 'WAFFENSCHMIED' => 36, 'RUESTUNGSSCHMIED' => 37, 'BIERPRUEFER' => 38, 'SCHWERTSCHMIED' => 39, 'EISENHAERTUNG' => 40, 'ARMBRUST' => 41, 'GIFTPFEILE' => 42, 'PFERDEZUCHT' => 43, 'WAFFENHERSTELLUNG' => 44, 'PFERDEPANZERUNG' => 45, 'SCHUBKARREN' => 46, 'BRANDPFEILE' => 47, 'HUFSCHMIED' => 48, 'UMGEBUNGSKARTE' => 49, 'ZISTERNE' => 50, 'MAX_POPULATION' => 51, 'FREE_POPULATION' => 52, 'CREATED_AT' => 53, 'UPDATED_AT' => 54, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'type' => 2, 'name' => 3, 'total_st' => 4, 'total_as' => 5, 'total_pr' => 6, 'total_sk' => 7, 'total_bs' => 8, 'total_lr' => 9, 'total_hk' => 10, 'total_ok' => 11, 'mission_st' => 12, 'mission_as' => 13, 'mission_pr' => 14, 'mission_sk' => 15, 'mission_bs' => 16, 'mission_lr' => 17, 'bergfried' => 18, 'zeughaus' => 19, 'taverne' => 20, 'bibliothek' => 21, 'wehranlage' => 22, 'markt' => 23, 'bauernhof' => 24, 'holzfaeller' => 25, 'holzlager' => 26, 'steinbruch' => 27, 'steinlager' => 28, 'erzmine' => 29, 'erzlager' => 30, 'langbogen' => 31, 'dreifelderwirtschaft' => 32, 'kummet' => 33, 'vorratskeller' => 34, 'steigbuegel' => 35, 'waffenschmied' => 36, 'ruestungsschmied' => 37, 'bierpruefer' => 38, 'schwertschmied' => 39, 'eisenhaertung' => 40, 'armbrust' => 41, 'giftpfeile' => 42, 'pferdezucht' => 43, 'waffenherstellung' => 44, 'pferdepanzerung' => 45, 'schubkarren' => 46, 'brandpfeile' => 47, 'hufschmied' => 48, 'umgebungskarte' => 49, 'zisterne' => 50, 'max_population' => 51, 'free_population' => 52, 'created_at' => 53, 'updated_at' => 54, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
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
        $toNames = CastleTypePeer::getFieldNames($toType);
        $key = isset(CastleTypePeer::$fieldKeys[$fromType][$name]) ? CastleTypePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CastleTypePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CastleTypePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CastleTypePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CastleTypePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CastleTypePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CastleTypePeer::ID);
            $criteria->addSelectColumn(CastleTypePeer::USER_ID);
            $criteria->addSelectColumn(CastleTypePeer::TYPE);
            $criteria->addSelectColumn(CastleTypePeer::NAME);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_ST);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_AS);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_PR);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_SK);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_BS);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_LR);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_HK);
            $criteria->addSelectColumn(CastleTypePeer::TOTAL_OK);
            $criteria->addSelectColumn(CastleTypePeer::MISSION_ST);
            $criteria->addSelectColumn(CastleTypePeer::MISSION_AS);
            $criteria->addSelectColumn(CastleTypePeer::MISSION_PR);
            $criteria->addSelectColumn(CastleTypePeer::MISSION_SK);
            $criteria->addSelectColumn(CastleTypePeer::MISSION_BS);
            $criteria->addSelectColumn(CastleTypePeer::MISSION_LR);
            $criteria->addSelectColumn(CastleTypePeer::BERGFRIED);
            $criteria->addSelectColumn(CastleTypePeer::ZEUGHAUS);
            $criteria->addSelectColumn(CastleTypePeer::TAVERNE);
            $criteria->addSelectColumn(CastleTypePeer::BIBLIOTHEK);
            $criteria->addSelectColumn(CastleTypePeer::WEHRANLAGE);
            $criteria->addSelectColumn(CastleTypePeer::MARKT);
            $criteria->addSelectColumn(CastleTypePeer::BAUERNHOF);
            $criteria->addSelectColumn(CastleTypePeer::HOLZFAELLER);
            $criteria->addSelectColumn(CastleTypePeer::HOLZLAGER);
            $criteria->addSelectColumn(CastleTypePeer::STEINBRUCH);
            $criteria->addSelectColumn(CastleTypePeer::STEINLAGER);
            $criteria->addSelectColumn(CastleTypePeer::ERZMINE);
            $criteria->addSelectColumn(CastleTypePeer::ERZLAGER);
            $criteria->addSelectColumn(CastleTypePeer::LANGBOGEN);
            $criteria->addSelectColumn(CastleTypePeer::DREIFELDERWIRTSCHAFT);
            $criteria->addSelectColumn(CastleTypePeer::KUMMET);
            $criteria->addSelectColumn(CastleTypePeer::VORRATSKELLER);
            $criteria->addSelectColumn(CastleTypePeer::STEIGBUEGEL);
            $criteria->addSelectColumn(CastleTypePeer::WAFFENSCHMIED);
            $criteria->addSelectColumn(CastleTypePeer::RUESTUNGSSCHMIED);
            $criteria->addSelectColumn(CastleTypePeer::BIERPRUEFER);
            $criteria->addSelectColumn(CastleTypePeer::SCHWERTSCHMIED);
            $criteria->addSelectColumn(CastleTypePeer::EISENHAERTUNG);
            $criteria->addSelectColumn(CastleTypePeer::ARMBRUST);
            $criteria->addSelectColumn(CastleTypePeer::GIFTPFEILE);
            $criteria->addSelectColumn(CastleTypePeer::PFERDEZUCHT);
            $criteria->addSelectColumn(CastleTypePeer::WAFFENHERSTELLUNG);
            $criteria->addSelectColumn(CastleTypePeer::PFERDEPANZERUNG);
            $criteria->addSelectColumn(CastleTypePeer::SCHUBKARREN);
            $criteria->addSelectColumn(CastleTypePeer::BRANDPFEILE);
            $criteria->addSelectColumn(CastleTypePeer::HUFSCHMIED);
            $criteria->addSelectColumn(CastleTypePeer::UMGEBUNGSKARTE);
            $criteria->addSelectColumn(CastleTypePeer::ZISTERNE);
            $criteria->addSelectColumn(CastleTypePeer::MAX_POPULATION);
            $criteria->addSelectColumn(CastleTypePeer::FREE_POPULATION);
            $criteria->addSelectColumn(CastleTypePeer::CREATED_AT);
            $criteria->addSelectColumn(CastleTypePeer::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.total_st');
            $criteria->addSelectColumn($alias . '.total_as');
            $criteria->addSelectColumn($alias . '.total_pr');
            $criteria->addSelectColumn($alias . '.total_sk');
            $criteria->addSelectColumn($alias . '.total_bs');
            $criteria->addSelectColumn($alias . '.total_lr');
            $criteria->addSelectColumn($alias . '.total_hk');
            $criteria->addSelectColumn($alias . '.total_ok');
            $criteria->addSelectColumn($alias . '.mission_st');
            $criteria->addSelectColumn($alias . '.mission_as');
            $criteria->addSelectColumn($alias . '.mission_pr');
            $criteria->addSelectColumn($alias . '.mission_sk');
            $criteria->addSelectColumn($alias . '.mission_bs');
            $criteria->addSelectColumn($alias . '.mission_lr');
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
            $criteria->addSelectColumn($alias . '.max_population');
            $criteria->addSelectColumn($alias . '.free_population');
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
        $criteria->setPrimaryTableName(CastleTypePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastleTypePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return CastleType
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CastleTypePeer::doSelect($critcopy, $con);
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
        return CastleTypePeer::populateObjects(CastleTypePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CastleTypePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME);

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
     * @param CastleType $obj A CastleType object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CastleTypePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CastleType object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CastleType) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CastleType object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CastleTypePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return CastleType Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CastleTypePeer::$instances[$key])) {
                return CastleTypePeer::$instances[$key];
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
        foreach (CastleTypePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CastleTypePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to castle_type
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
        $cls = CastleTypePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CastleTypePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CastleTypePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CastleTypePeer::addInstanceToPool($obj, $key);
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
     * @return array (CastleType object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CastleTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CastleTypePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CastleTypePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CastleTypePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CastleTypePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CastleTypePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastleTypePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastleTypePeer::USER_ID, UserPeer::ID, $join_behavior);

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
     * Selects a collection of CastleType objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CastleType objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastleTypePeer::DATABASE_NAME);
        }

        CastleTypePeer::addSelectColumns($criteria);
        $startcol = CastleTypePeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(CastleTypePeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastleTypePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastleTypePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CastleTypePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastleTypePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CastleType) to $obj2 (User)
                $obj2->addCastleType($obj1);

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
        $criteria->setPrimaryTableName(CastleTypePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CastleTypePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CastleTypePeer::USER_ID, UserPeer::ID, $join_behavior);

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
     * Selects a collection of CastleType objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CastleType objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CastleTypePeer::DATABASE_NAME);
        }

        CastleTypePeer::addSelectColumns($criteria);
        $startcol2 = CastleTypePeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CastleTypePeer::USER_ID, UserPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CastleTypePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CastleTypePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CastleTypePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CastleTypePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CastleType) to the collection in $obj2 (User)
                $obj2->addCastleType($obj1);
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
        return Propel::getDatabaseMap(CastleTypePeer::DATABASE_NAME)->getTable(CastleTypePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCastleTypePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCastleTypePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CastleTypeTableMap());
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
        return CastleTypePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CastleType or Criteria object.
     *
     * @param      mixed $values Criteria or CastleType object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CastleType object
        }

        if ($criteria->containsKey(CastleTypePeer::ID) && $criteria->keyContainsValue(CastleTypePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CastleTypePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CastleType or Criteria object.
     *
     * @param      mixed $values Criteria or CastleType object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CastleTypePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CastleTypePeer::ID);
            $value = $criteria->remove(CastleTypePeer::ID);
            if ($value) {
                $selectCriteria->add(CastleTypePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CastleTypePeer::TABLE_NAME);
            }

        } else { // $values is CastleType object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the castle_type table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CastleTypePeer::TABLE_NAME, $con, CastleTypePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CastleTypePeer::clearInstancePool();
            CastleTypePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CastleType or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CastleType object or primary key or array of primary keys
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
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CastleTypePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CastleType) { // it's a model object
            // invalidate the cache for this single object
            CastleTypePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CastleTypePeer::DATABASE_NAME);
            $criteria->add(CastleTypePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CastleTypePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CastleTypePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CastleTypePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CastleType object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param CastleType $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CastleTypePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CastleTypePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CastleTypePeer::DATABASE_NAME, CastleTypePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CastleType
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CastleTypePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CastleTypePeer::DATABASE_NAME);
        $criteria->add(CastleTypePeer::ID, $pk);

        $v = CastleTypePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CastleType[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CastleTypePeer::DATABASE_NAME);
            $criteria->add(CastleTypePeer::ID, $pks, Criteria::IN);
            $objs = CastleTypePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCastleTypePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCastleTypePeer::buildTableMap();


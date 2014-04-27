<?php


/**
 * Base class that represents a row from the 'castle' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CastlePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CastlePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the user field.
     * @var        int
     */
    protected $user;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the castle_type_id field.
     * @var        int
     */
    protected $castle_type_id;

    /**
     * The value for the castle_location_id field.
     * @var        int
     */
    protected $castle_location_id;

    /**
     * The value for the coordinates field.
     * @var        string
     */
    protected $coordinates;

    /**
     * The value for the x field.
     * @var        int
     */
    protected $x;

    /**
     * The value for the y field.
     * @var        int
     */
    protected $y;

    /**
     * The value for the silver field.
     * @var        int
     */
    protected $silver;

    /**
     * The value for the copper field.
     * @var        int
     */
    protected $copper;

    /**
     * The value for the current_st field.
     * @var        int
     */
    protected $current_st;

    /**
     * The value for the current_as field.
     * @var        int
     */
    protected $current_as;

    /**
     * The value for the current_pr field.
     * @var        int
     */
    protected $current_pr;

    /**
     * The value for the current_sk field.
     * @var        int
     */
    protected $current_sk;

    /**
     * The value for the current_bs field.
     * @var        int
     */
    protected $current_bs;

    /**
     * The value for the current_lr field.
     * @var        int
     */
    protected $current_lr;

    /**
     * The value for the current_hk field.
     * @var        int
     */
    protected $current_hk;

    /**
     * The value for the current_ok field.
     * @var        int
     */
    protected $current_ok;

    /**
     * The value for the mission_st field.
     * @var        int
     */
    protected $mission_st;

    /**
     * The value for the mission_as field.
     * @var        int
     */
    protected $mission_as;

    /**
     * The value for the mission_pr field.
     * @var        int
     */
    protected $mission_pr;

    /**
     * The value for the mission_sk field.
     * @var        int
     */
    protected $mission_sk;

    /**
     * The value for the mission_bs field.
     * @var        int
     */
    protected $mission_bs;

    /**
     * The value for the mission_lr field.
     * @var        int
     */
    protected $mission_lr;

    /**
     * The value for the usage_off field.
     * @var        boolean
     */
    protected $usage_off;

    /**
     * The value for the usage_def field.
     * @var        boolean
     */
    protected $usage_def;

    /**
     * The value for the mission_priority field.
     * @var        boolean
     */
    protected $mission_priority;

    /**
     * The value for the environment_card field.
     * @var        boolean
     */
    protected $environment_card;

    /**
     * The value for the autodef_coordinates field.
     * @var        string
     */
    protected $autodef_coordinates;

    /**
     * The value for the autodef_x field.
     * @var        int
     */
    protected $autodef_x;

    /**
     * The value for the autodef_y field.
     * @var        int
     */
    protected $autodef_y;

    /**
     * The value for the points field.
     * @var        int
     */
    protected $points;

    /**
     * The value for the free_population field.
     * @var        int
     */
    protected $free_population;

    /**
     * The value for the last_import field.
     * @var        string
     */
    protected $last_import;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        CastleType
     */
    protected $aCastleType;

    /**
     * @var        CastleLocation
     */
    protected $aCastleLocation;

    /**
     * @var        PropelObjectCollection|Castle2Attack[] Collection to store aggregation of Castle2Attack objects.
     */
    protected $collCastle2Attacks;
    protected $collCastle2AttacksPartial;

    /**
     * @var        PropelObjectCollection|Attack[] Collection to store aggregation of Attack objects.
     */
    protected $collAttacks;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $attacksScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $castle2AttacksScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [user] column value.
     *
     * @return int
     */
    public function getUser()
    {

        return $this->user;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [castle_type_id] column value.
     *
     * @return int
     */
    public function getCastleTypeId()
    {

        return $this->castle_type_id;
    }

    /**
     * Get the [castle_location_id] column value.
     *
     * @return int
     */
    public function getCastleLocationId()
    {

        return $this->castle_location_id;
    }

    /**
     * Get the [coordinates] column value.
     *
     * @return string
     */
    public function getCoordinates()
    {

        return $this->coordinates;
    }

    /**
     * Get the [x] column value.
     *
     * @return int
     */
    public function getX()
    {

        return $this->x;
    }

    /**
     * Get the [y] column value.
     *
     * @return int
     */
    public function getY()
    {

        return $this->y;
    }

    /**
     * Get the [silver] column value.
     *
     * @return int
     */
    public function getSilver()
    {

        return $this->silver;
    }

    /**
     * Get the [copper] column value.
     *
     * @return int
     */
    public function getCopper()
    {

        return $this->copper;
    }

    /**
     * Get the [current_st] column value.
     *
     * @return int
     */
    public function getCurrentSt()
    {

        return $this->current_st;
    }

    /**
     * Get the [current_as] column value.
     *
     * @return int
     */
    public function getCurrentAs()
    {

        return $this->current_as;
    }

    /**
     * Get the [current_pr] column value.
     *
     * @return int
     */
    public function getCurrentPr()
    {

        return $this->current_pr;
    }

    /**
     * Get the [current_sk] column value.
     *
     * @return int
     */
    public function getCurrentSk()
    {

        return $this->current_sk;
    }

    /**
     * Get the [current_bs] column value.
     *
     * @return int
     */
    public function getCurrentBs()
    {

        return $this->current_bs;
    }

    /**
     * Get the [current_lr] column value.
     *
     * @return int
     */
    public function getCurrentLr()
    {

        return $this->current_lr;
    }

    /**
     * Get the [current_hk] column value.
     *
     * @return int
     */
    public function getCurrentHk()
    {

        return $this->current_hk;
    }

    /**
     * Get the [current_ok] column value.
     *
     * @return int
     */
    public function getCurrentOk()
    {

        return $this->current_ok;
    }

    /**
     * Get the [mission_st] column value.
     *
     * @return int
     */
    public function getMissionSt()
    {

        return $this->mission_st;
    }

    /**
     * Get the [mission_as] column value.
     *
     * @return int
     */
    public function getMissionAs()
    {

        return $this->mission_as;
    }

    /**
     * Get the [mission_pr] column value.
     *
     * @return int
     */
    public function getMissionPr()
    {

        return $this->mission_pr;
    }

    /**
     * Get the [mission_sk] column value.
     *
     * @return int
     */
    public function getMissionSk()
    {

        return $this->mission_sk;
    }

    /**
     * Get the [mission_bs] column value.
     *
     * @return int
     */
    public function getMissionBs()
    {

        return $this->mission_bs;
    }

    /**
     * Get the [mission_lr] column value.
     *
     * @return int
     */
    public function getMissionLr()
    {

        return $this->mission_lr;
    }

    /**
     * Get the [usage_off] column value.
     *
     * @return boolean
     */
    public function getUsageOff()
    {

        return $this->usage_off;
    }

    /**
     * Get the [usage_def] column value.
     *
     * @return boolean
     */
    public function getUsageDef()
    {

        return $this->usage_def;
    }

    /**
     * Get the [mission_priority] column value.
     *
     * @return boolean
     */
    public function getMissionPriority()
    {

        return $this->mission_priority;
    }

    /**
     * Get the [environment_card] column value.
     *
     * @return boolean
     */
    public function getEnvironmentCard()
    {

        return $this->environment_card;
    }

    /**
     * Get the [autodef_coordinates] column value.
     *
     * @return string
     */
    public function getAutodefCoordinates()
    {

        return $this->autodef_coordinates;
    }

    /**
     * Get the [autodef_x] column value.
     *
     * @return int
     */
    public function getAutodefX()
    {

        return $this->autodef_x;
    }

    /**
     * Get the [autodef_y] column value.
     *
     * @return int
     */
    public function getAutodefY()
    {

        return $this->autodef_y;
    }

    /**
     * Get the [points] column value.
     *
     * @return int
     */
    public function getPoints()
    {

        return $this->points;
    }

    /**
     * Get the [free_population] column value.
     *
     * @return int
     */
    public function getFreePopulation()
    {

        return $this->free_population;
    }

    /**
     * Get the [optionally formatted] temporal [last_import] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastImport($format = 'Y-m-d H:i:s')
    {
        if ($this->last_import === null) {
            return null;
        }

        if ($this->last_import === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->last_import);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_import, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CastlePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setUser($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user !== $v) {
            $this->user = $v;
            $this->modifiedColumns[] = CastlePeer::USER;
        }


        return $this;
    } // setUser()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CastlePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [castle_type_id] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCastleTypeId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->castle_type_id !== $v) {
            $this->castle_type_id = $v;
            $this->modifiedColumns[] = CastlePeer::CASTLE_TYPE_ID;
        }

        if ($this->aCastleType !== null && $this->aCastleType->getId() !== $v) {
            $this->aCastleType = null;
        }


        return $this;
    } // setCastleTypeId()

    /**
     * Set the value of [castle_location_id] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCastleLocationId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->castle_location_id !== $v) {
            $this->castle_location_id = $v;
            $this->modifiedColumns[] = CastlePeer::CASTLE_LOCATION_ID;
        }

        if ($this->aCastleLocation !== null && $this->aCastleLocation->getId() !== $v) {
            $this->aCastleLocation = null;
        }


        return $this;
    } // setCastleLocationId()

    /**
     * Set the value of [coordinates] column.
     *
     * @param  string $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCoordinates($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->coordinates !== $v) {
            $this->coordinates = $v;
            $this->modifiedColumns[] = CastlePeer::COORDINATES;
        }


        return $this;
    } // setCoordinates()

    /**
     * Set the value of [x] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setX($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->x !== $v) {
            $this->x = $v;
            $this->modifiedColumns[] = CastlePeer::X;
        }


        return $this;
    } // setX()

    /**
     * Set the value of [y] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setY($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->y !== $v) {
            $this->y = $v;
            $this->modifiedColumns[] = CastlePeer::Y;
        }


        return $this;
    } // setY()

    /**
     * Set the value of [silver] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setSilver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->silver !== $v) {
            $this->silver = $v;
            $this->modifiedColumns[] = CastlePeer::SILVER;
        }


        return $this;
    } // setSilver()

    /**
     * Set the value of [copper] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCopper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->copper !== $v) {
            $this->copper = $v;
            $this->modifiedColumns[] = CastlePeer::COPPER;
        }


        return $this;
    } // setCopper()

    /**
     * Set the value of [current_st] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentSt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_st !== $v) {
            $this->current_st = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_ST;
        }


        return $this;
    } // setCurrentSt()

    /**
     * Set the value of [current_as] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentAs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_as !== $v) {
            $this->current_as = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_AS;
        }


        return $this;
    } // setCurrentAs()

    /**
     * Set the value of [current_pr] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentPr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_pr !== $v) {
            $this->current_pr = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_PR;
        }


        return $this;
    } // setCurrentPr()

    /**
     * Set the value of [current_sk] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_sk !== $v) {
            $this->current_sk = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_SK;
        }


        return $this;
    } // setCurrentSk()

    /**
     * Set the value of [current_bs] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_bs !== $v) {
            $this->current_bs = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_BS;
        }


        return $this;
    } // setCurrentBs()

    /**
     * Set the value of [current_lr] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_lr !== $v) {
            $this->current_lr = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_LR;
        }


        return $this;
    } // setCurrentLr()

    /**
     * Set the value of [current_hk] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentHk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_hk !== $v) {
            $this->current_hk = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_HK;
        }


        return $this;
    } // setCurrentHk()

    /**
     * Set the value of [current_ok] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setCurrentOk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->current_ok !== $v) {
            $this->current_ok = $v;
            $this->modifiedColumns[] = CastlePeer::CURRENT_OK;
        }


        return $this;
    } // setCurrentOk()

    /**
     * Set the value of [mission_st] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionSt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_st !== $v) {
            $this->mission_st = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_ST;
        }


        return $this;
    } // setMissionSt()

    /**
     * Set the value of [mission_as] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionAs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_as !== $v) {
            $this->mission_as = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_AS;
        }


        return $this;
    } // setMissionAs()

    /**
     * Set the value of [mission_pr] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionPr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_pr !== $v) {
            $this->mission_pr = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_PR;
        }


        return $this;
    } // setMissionPr()

    /**
     * Set the value of [mission_sk] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_sk !== $v) {
            $this->mission_sk = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_SK;
        }


        return $this;
    } // setMissionSk()

    /**
     * Set the value of [mission_bs] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_bs !== $v) {
            $this->mission_bs = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_BS;
        }


        return $this;
    } // setMissionBs()

    /**
     * Set the value of [mission_lr] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_lr !== $v) {
            $this->mission_lr = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_LR;
        }


        return $this;
    } // setMissionLr()

    /**
     * Sets the value of the [usage_off] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Castle The current object (for fluent API support)
     */
    public function setUsageOff($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->usage_off !== $v) {
            $this->usage_off = $v;
            $this->modifiedColumns[] = CastlePeer::USAGE_OFF;
        }


        return $this;
    } // setUsageOff()

    /**
     * Sets the value of the [usage_def] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Castle The current object (for fluent API support)
     */
    public function setUsageDef($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->usage_def !== $v) {
            $this->usage_def = $v;
            $this->modifiedColumns[] = CastlePeer::USAGE_DEF;
        }


        return $this;
    } // setUsageDef()

    /**
     * Sets the value of the [mission_priority] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Castle The current object (for fluent API support)
     */
    public function setMissionPriority($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->mission_priority !== $v) {
            $this->mission_priority = $v;
            $this->modifiedColumns[] = CastlePeer::MISSION_PRIORITY;
        }


        return $this;
    } // setMissionPriority()

    /**
     * Sets the value of the [environment_card] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Castle The current object (for fluent API support)
     */
    public function setEnvironmentCard($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->environment_card !== $v) {
            $this->environment_card = $v;
            $this->modifiedColumns[] = CastlePeer::ENVIRONMENT_CARD;
        }


        return $this;
    } // setEnvironmentCard()

    /**
     * Set the value of [autodef_coordinates] column.
     *
     * @param  string $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setAutodefCoordinates($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->autodef_coordinates !== $v) {
            $this->autodef_coordinates = $v;
            $this->modifiedColumns[] = CastlePeer::AUTODEF_COORDINATES;
        }


        return $this;
    } // setAutodefCoordinates()

    /**
     * Set the value of [autodef_x] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setAutodefX($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autodef_x !== $v) {
            $this->autodef_x = $v;
            $this->modifiedColumns[] = CastlePeer::AUTODEF_X;
        }


        return $this;
    } // setAutodefX()

    /**
     * Set the value of [autodef_y] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setAutodefY($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->autodef_y !== $v) {
            $this->autodef_y = $v;
            $this->modifiedColumns[] = CastlePeer::AUTODEF_Y;
        }


        return $this;
    } // setAutodefY()

    /**
     * Set the value of [points] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setPoints($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->points !== $v) {
            $this->points = $v;
            $this->modifiedColumns[] = CastlePeer::POINTS;
        }


        return $this;
    } // setPoints()

    /**
     * Set the value of [free_population] column.
     *
     * @param  int $v new value
     * @return Castle The current object (for fluent API support)
     */
    public function setFreePopulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->free_population !== $v) {
            $this->free_population = $v;
            $this->modifiedColumns[] = CastlePeer::FREE_POPULATION;
        }


        return $this;
    } // setFreePopulation()

    /**
     * Sets the value of [last_import] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Castle The current object (for fluent API support)
     */
    public function setLastImport($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->last_import !== null || $dt !== null) {
            $currentDateAsString = ($this->last_import !== null && $tmpDt = new DateTime($this->last_import)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->last_import = $newDateAsString;
                $this->modifiedColumns[] = CastlePeer::LAST_IMPORT;
            }
        } // if either are not null


        return $this;
    } // setLastImport()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Castle The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = CastlePeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Castle The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = CastlePeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->user = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->castle_type_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->castle_location_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->coordinates = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->x = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->y = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->silver = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->copper = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->current_st = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->current_as = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->current_pr = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->current_sk = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->current_bs = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->current_lr = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->current_hk = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->current_ok = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->mission_st = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->mission_as = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->mission_pr = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->mission_sk = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->mission_bs = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->mission_lr = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->usage_off = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->usage_def = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
            $this->mission_priority = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->environment_card = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
            $this->autodef_coordinates = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->autodef_x = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->autodef_y = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->points = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->free_population = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->last_import = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->created_at = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->updated_at = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 36; // 36 = CastlePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Castle object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aCastleType !== null && $this->castle_type_id !== $this->aCastleType->getId()) {
            $this->aCastleType = null;
        }
        if ($this->aCastleLocation !== null && $this->castle_location_id !== $this->aCastleLocation->getId()) {
            $this->aCastleLocation = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CastlePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCastleType = null;
            $this->aCastleLocation = null;
            $this->collCastle2Attacks = null;

            $this->collAttacks = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CastleQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CastlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(CastlePeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(CastlePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(CastlePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CastlePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCastleType !== null) {
                if ($this->aCastleType->isModified() || $this->aCastleType->isNew()) {
                    $affectedRows += $this->aCastleType->save($con);
                }
                $this->setCastleType($this->aCastleType);
            }

            if ($this->aCastleLocation !== null) {
                if ($this->aCastleLocation->isModified() || $this->aCastleLocation->isNew()) {
                    $affectedRows += $this->aCastleLocation->save($con);
                }
                $this->setCastleLocation($this->aCastleLocation);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->attacksScheduledForDeletion !== null) {
                if (!$this->attacksScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->attacksScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($remotePk, $pk);
                    }
                    Castle2AttackQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->attacksScheduledForDeletion = null;
                }

                foreach ($this->getAttacks() as $attack) {
                    if ($attack->isModified()) {
                        $attack->save($con);
                    }
                }
            } elseif ($this->collAttacks) {
                foreach ($this->collAttacks as $attack) {
                    if ($attack->isModified()) {
                        $attack->save($con);
                    }
                }
            }

            if ($this->castle2AttacksScheduledForDeletion !== null) {
                if (!$this->castle2AttacksScheduledForDeletion->isEmpty()) {
                    Castle2AttackQuery::create()
                        ->filterByPrimaryKeys($this->castle2AttacksScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->castle2AttacksScheduledForDeletion = null;
                }
            }

            if ($this->collCastle2Attacks !== null) {
                foreach ($this->collCastle2Attacks as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = CastlePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CastlePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CastlePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CastlePeer::USER)) {
            $modifiedColumns[':p' . $index++]  = '`user`';
        }
        if ($this->isColumnModified(CastlePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(CastlePeer::CASTLE_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`castle_type_id`';
        }
        if ($this->isColumnModified(CastlePeer::CASTLE_LOCATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`castle_location_id`';
        }
        if ($this->isColumnModified(CastlePeer::COORDINATES)) {
            $modifiedColumns[':p' . $index++]  = '`coordinates`';
        }
        if ($this->isColumnModified(CastlePeer::X)) {
            $modifiedColumns[':p' . $index++]  = '`X`';
        }
        if ($this->isColumnModified(CastlePeer::Y)) {
            $modifiedColumns[':p' . $index++]  = '`Y`';
        }
        if ($this->isColumnModified(CastlePeer::SILVER)) {
            $modifiedColumns[':p' . $index++]  = '`silver`';
        }
        if ($this->isColumnModified(CastlePeer::COPPER)) {
            $modifiedColumns[':p' . $index++]  = '`copper`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_ST)) {
            $modifiedColumns[':p' . $index++]  = '`current_st`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_AS)) {
            $modifiedColumns[':p' . $index++]  = '`current_as`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_PR)) {
            $modifiedColumns[':p' . $index++]  = '`current_pr`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_SK)) {
            $modifiedColumns[':p' . $index++]  = '`current_sk`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_BS)) {
            $modifiedColumns[':p' . $index++]  = '`current_bs`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_LR)) {
            $modifiedColumns[':p' . $index++]  = '`current_lr`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_HK)) {
            $modifiedColumns[':p' . $index++]  = '`current_hk`';
        }
        if ($this->isColumnModified(CastlePeer::CURRENT_OK)) {
            $modifiedColumns[':p' . $index++]  = '`current_ok`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_ST)) {
            $modifiedColumns[':p' . $index++]  = '`mission_st`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_AS)) {
            $modifiedColumns[':p' . $index++]  = '`mission_as`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_PR)) {
            $modifiedColumns[':p' . $index++]  = '`mission_pr`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_SK)) {
            $modifiedColumns[':p' . $index++]  = '`mission_sk`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_BS)) {
            $modifiedColumns[':p' . $index++]  = '`mission_bs`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_LR)) {
            $modifiedColumns[':p' . $index++]  = '`mission_lr`';
        }
        if ($this->isColumnModified(CastlePeer::USAGE_OFF)) {
            $modifiedColumns[':p' . $index++]  = '`usage_off`';
        }
        if ($this->isColumnModified(CastlePeer::USAGE_DEF)) {
            $modifiedColumns[':p' . $index++]  = '`usage_def`';
        }
        if ($this->isColumnModified(CastlePeer::MISSION_PRIORITY)) {
            $modifiedColumns[':p' . $index++]  = '`mission_priority`';
        }
        if ($this->isColumnModified(CastlePeer::ENVIRONMENT_CARD)) {
            $modifiedColumns[':p' . $index++]  = '`environment_card`';
        }
        if ($this->isColumnModified(CastlePeer::AUTODEF_COORDINATES)) {
            $modifiedColumns[':p' . $index++]  = '`autodef_coordinates`';
        }
        if ($this->isColumnModified(CastlePeer::AUTODEF_X)) {
            $modifiedColumns[':p' . $index++]  = '`autodef_X`';
        }
        if ($this->isColumnModified(CastlePeer::AUTODEF_Y)) {
            $modifiedColumns[':p' . $index++]  = '`autodef_Y`';
        }
        if ($this->isColumnModified(CastlePeer::POINTS)) {
            $modifiedColumns[':p' . $index++]  = '`points`';
        }
        if ($this->isColumnModified(CastlePeer::FREE_POPULATION)) {
            $modifiedColumns[':p' . $index++]  = '`free_population`';
        }
        if ($this->isColumnModified(CastlePeer::LAST_IMPORT)) {
            $modifiedColumns[':p' . $index++]  = '`last_import`';
        }
        if ($this->isColumnModified(CastlePeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(CastlePeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `castle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`user`':
                        $stmt->bindValue($identifier, $this->user, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`castle_type_id`':
                        $stmt->bindValue($identifier, $this->castle_type_id, PDO::PARAM_INT);
                        break;
                    case '`castle_location_id`':
                        $stmt->bindValue($identifier, $this->castle_location_id, PDO::PARAM_INT);
                        break;
                    case '`coordinates`':
                        $stmt->bindValue($identifier, $this->coordinates, PDO::PARAM_STR);
                        break;
                    case '`X`':
                        $stmt->bindValue($identifier, $this->x, PDO::PARAM_INT);
                        break;
                    case '`Y`':
                        $stmt->bindValue($identifier, $this->y, PDO::PARAM_INT);
                        break;
                    case '`silver`':
                        $stmt->bindValue($identifier, $this->silver, PDO::PARAM_INT);
                        break;
                    case '`copper`':
                        $stmt->bindValue($identifier, $this->copper, PDO::PARAM_INT);
                        break;
                    case '`current_st`':
                        $stmt->bindValue($identifier, $this->current_st, PDO::PARAM_INT);
                        break;
                    case '`current_as`':
                        $stmt->bindValue($identifier, $this->current_as, PDO::PARAM_INT);
                        break;
                    case '`current_pr`':
                        $stmt->bindValue($identifier, $this->current_pr, PDO::PARAM_INT);
                        break;
                    case '`current_sk`':
                        $stmt->bindValue($identifier, $this->current_sk, PDO::PARAM_INT);
                        break;
                    case '`current_bs`':
                        $stmt->bindValue($identifier, $this->current_bs, PDO::PARAM_INT);
                        break;
                    case '`current_lr`':
                        $stmt->bindValue($identifier, $this->current_lr, PDO::PARAM_INT);
                        break;
                    case '`current_hk`':
                        $stmt->bindValue($identifier, $this->current_hk, PDO::PARAM_INT);
                        break;
                    case '`current_ok`':
                        $stmt->bindValue($identifier, $this->current_ok, PDO::PARAM_INT);
                        break;
                    case '`mission_st`':
                        $stmt->bindValue($identifier, $this->mission_st, PDO::PARAM_INT);
                        break;
                    case '`mission_as`':
                        $stmt->bindValue($identifier, $this->mission_as, PDO::PARAM_INT);
                        break;
                    case '`mission_pr`':
                        $stmt->bindValue($identifier, $this->mission_pr, PDO::PARAM_INT);
                        break;
                    case '`mission_sk`':
                        $stmt->bindValue($identifier, $this->mission_sk, PDO::PARAM_INT);
                        break;
                    case '`mission_bs`':
                        $stmt->bindValue($identifier, $this->mission_bs, PDO::PARAM_INT);
                        break;
                    case '`mission_lr`':
                        $stmt->bindValue($identifier, $this->mission_lr, PDO::PARAM_INT);
                        break;
                    case '`usage_off`':
                        $stmt->bindValue($identifier, (int) $this->usage_off, PDO::PARAM_INT);
                        break;
                    case '`usage_def`':
                        $stmt->bindValue($identifier, (int) $this->usage_def, PDO::PARAM_INT);
                        break;
                    case '`mission_priority`':
                        $stmt->bindValue($identifier, (int) $this->mission_priority, PDO::PARAM_INT);
                        break;
                    case '`environment_card`':
                        $stmt->bindValue($identifier, (int) $this->environment_card, PDO::PARAM_INT);
                        break;
                    case '`autodef_coordinates`':
                        $stmt->bindValue($identifier, $this->autodef_coordinates, PDO::PARAM_STR);
                        break;
                    case '`autodef_X`':
                        $stmt->bindValue($identifier, $this->autodef_x, PDO::PARAM_INT);
                        break;
                    case '`autodef_Y`':
                        $stmt->bindValue($identifier, $this->autodef_y, PDO::PARAM_INT);
                        break;
                    case '`points`':
                        $stmt->bindValue($identifier, $this->points, PDO::PARAM_INT);
                        break;
                    case '`free_population`':
                        $stmt->bindValue($identifier, $this->free_population, PDO::PARAM_INT);
                        break;
                    case '`last_import`':
                        $stmt->bindValue($identifier, $this->last_import, PDO::PARAM_STR);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCastleType !== null) {
                if (!$this->aCastleType->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCastleType->getValidationFailures());
                }
            }

            if ($this->aCastleLocation !== null) {
                if (!$this->aCastleLocation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCastleLocation->getValidationFailures());
                }
            }


            if (($retval = CastlePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCastle2Attacks !== null) {
                    foreach ($this->collCastle2Attacks as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CastlePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getUser();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getCastleTypeId();
                break;
            case 4:
                return $this->getCastleLocationId();
                break;
            case 5:
                return $this->getCoordinates();
                break;
            case 6:
                return $this->getX();
                break;
            case 7:
                return $this->getY();
                break;
            case 8:
                return $this->getSilver();
                break;
            case 9:
                return $this->getCopper();
                break;
            case 10:
                return $this->getCurrentSt();
                break;
            case 11:
                return $this->getCurrentAs();
                break;
            case 12:
                return $this->getCurrentPr();
                break;
            case 13:
                return $this->getCurrentSk();
                break;
            case 14:
                return $this->getCurrentBs();
                break;
            case 15:
                return $this->getCurrentLr();
                break;
            case 16:
                return $this->getCurrentHk();
                break;
            case 17:
                return $this->getCurrentOk();
                break;
            case 18:
                return $this->getMissionSt();
                break;
            case 19:
                return $this->getMissionAs();
                break;
            case 20:
                return $this->getMissionPr();
                break;
            case 21:
                return $this->getMissionSk();
                break;
            case 22:
                return $this->getMissionBs();
                break;
            case 23:
                return $this->getMissionLr();
                break;
            case 24:
                return $this->getUsageOff();
                break;
            case 25:
                return $this->getUsageDef();
                break;
            case 26:
                return $this->getMissionPriority();
                break;
            case 27:
                return $this->getEnvironmentCard();
                break;
            case 28:
                return $this->getAutodefCoordinates();
                break;
            case 29:
                return $this->getAutodefX();
                break;
            case 30:
                return $this->getAutodefY();
                break;
            case 31:
                return $this->getPoints();
                break;
            case 32:
                return $this->getFreePopulation();
                break;
            case 33:
                return $this->getLastImport();
                break;
            case 34:
                return $this->getCreatedAt();
                break;
            case 35:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Castle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Castle'][$this->getPrimaryKey()] = true;
        $keys = CastlePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUser(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getCastleTypeId(),
            $keys[4] => $this->getCastleLocationId(),
            $keys[5] => $this->getCoordinates(),
            $keys[6] => $this->getX(),
            $keys[7] => $this->getY(),
            $keys[8] => $this->getSilver(),
            $keys[9] => $this->getCopper(),
            $keys[10] => $this->getCurrentSt(),
            $keys[11] => $this->getCurrentAs(),
            $keys[12] => $this->getCurrentPr(),
            $keys[13] => $this->getCurrentSk(),
            $keys[14] => $this->getCurrentBs(),
            $keys[15] => $this->getCurrentLr(),
            $keys[16] => $this->getCurrentHk(),
            $keys[17] => $this->getCurrentOk(),
            $keys[18] => $this->getMissionSt(),
            $keys[19] => $this->getMissionAs(),
            $keys[20] => $this->getMissionPr(),
            $keys[21] => $this->getMissionSk(),
            $keys[22] => $this->getMissionBs(),
            $keys[23] => $this->getMissionLr(),
            $keys[24] => $this->getUsageOff(),
            $keys[25] => $this->getUsageDef(),
            $keys[26] => $this->getMissionPriority(),
            $keys[27] => $this->getEnvironmentCard(),
            $keys[28] => $this->getAutodefCoordinates(),
            $keys[29] => $this->getAutodefX(),
            $keys[30] => $this->getAutodefY(),
            $keys[31] => $this->getPoints(),
            $keys[32] => $this->getFreePopulation(),
            $keys[33] => $this->getLastImport(),
            $keys[34] => $this->getCreatedAt(),
            $keys[35] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCastleType) {
                $result['CastleType'] = $this->aCastleType->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCastleLocation) {
                $result['CastleLocation'] = $this->aCastleLocation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCastle2Attacks) {
                $result['Castle2Attacks'] = $this->collCastle2Attacks->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CastlePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setUser($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setCastleTypeId($value);
                break;
            case 4:
                $this->setCastleLocationId($value);
                break;
            case 5:
                $this->setCoordinates($value);
                break;
            case 6:
                $this->setX($value);
                break;
            case 7:
                $this->setY($value);
                break;
            case 8:
                $this->setSilver($value);
                break;
            case 9:
                $this->setCopper($value);
                break;
            case 10:
                $this->setCurrentSt($value);
                break;
            case 11:
                $this->setCurrentAs($value);
                break;
            case 12:
                $this->setCurrentPr($value);
                break;
            case 13:
                $this->setCurrentSk($value);
                break;
            case 14:
                $this->setCurrentBs($value);
                break;
            case 15:
                $this->setCurrentLr($value);
                break;
            case 16:
                $this->setCurrentHk($value);
                break;
            case 17:
                $this->setCurrentOk($value);
                break;
            case 18:
                $this->setMissionSt($value);
                break;
            case 19:
                $this->setMissionAs($value);
                break;
            case 20:
                $this->setMissionPr($value);
                break;
            case 21:
                $this->setMissionSk($value);
                break;
            case 22:
                $this->setMissionBs($value);
                break;
            case 23:
                $this->setMissionLr($value);
                break;
            case 24:
                $this->setUsageOff($value);
                break;
            case 25:
                $this->setUsageDef($value);
                break;
            case 26:
                $this->setMissionPriority($value);
                break;
            case 27:
                $this->setEnvironmentCard($value);
                break;
            case 28:
                $this->setAutodefCoordinates($value);
                break;
            case 29:
                $this->setAutodefX($value);
                break;
            case 30:
                $this->setAutodefY($value);
                break;
            case 31:
                $this->setPoints($value);
                break;
            case 32:
                $this->setFreePopulation($value);
                break;
            case 33:
                $this->setLastImport($value);
                break;
            case 34:
                $this->setCreatedAt($value);
                break;
            case 35:
                $this->setUpdatedAt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CastlePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUser($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCastleTypeId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCastleLocationId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCoordinates($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setX($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setY($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSilver($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCopper($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCurrentSt($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCurrentAs($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCurrentPr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCurrentSk($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCurrentBs($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCurrentLr($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCurrentHk($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCurrentOk($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMissionSt($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMissionAs($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMissionPr($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMissionSk($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setMissionBs($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMissionLr($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setUsageOff($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setUsageDef($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMissionPriority($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setEnvironmentCard($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAutodefCoordinates($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAutodefX($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAutodefY($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setPoints($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFreePopulation($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLastImport($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setCreatedAt($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setUpdatedAt($arr[$keys[35]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CastlePeer::DATABASE_NAME);

        if ($this->isColumnModified(CastlePeer::ID)) $criteria->add(CastlePeer::ID, $this->id);
        if ($this->isColumnModified(CastlePeer::USER)) $criteria->add(CastlePeer::USER, $this->user);
        if ($this->isColumnModified(CastlePeer::NAME)) $criteria->add(CastlePeer::NAME, $this->name);
        if ($this->isColumnModified(CastlePeer::CASTLE_TYPE_ID)) $criteria->add(CastlePeer::CASTLE_TYPE_ID, $this->castle_type_id);
        if ($this->isColumnModified(CastlePeer::CASTLE_LOCATION_ID)) $criteria->add(CastlePeer::CASTLE_LOCATION_ID, $this->castle_location_id);
        if ($this->isColumnModified(CastlePeer::COORDINATES)) $criteria->add(CastlePeer::COORDINATES, $this->coordinates);
        if ($this->isColumnModified(CastlePeer::X)) $criteria->add(CastlePeer::X, $this->x);
        if ($this->isColumnModified(CastlePeer::Y)) $criteria->add(CastlePeer::Y, $this->y);
        if ($this->isColumnModified(CastlePeer::SILVER)) $criteria->add(CastlePeer::SILVER, $this->silver);
        if ($this->isColumnModified(CastlePeer::COPPER)) $criteria->add(CastlePeer::COPPER, $this->copper);
        if ($this->isColumnModified(CastlePeer::CURRENT_ST)) $criteria->add(CastlePeer::CURRENT_ST, $this->current_st);
        if ($this->isColumnModified(CastlePeer::CURRENT_AS)) $criteria->add(CastlePeer::CURRENT_AS, $this->current_as);
        if ($this->isColumnModified(CastlePeer::CURRENT_PR)) $criteria->add(CastlePeer::CURRENT_PR, $this->current_pr);
        if ($this->isColumnModified(CastlePeer::CURRENT_SK)) $criteria->add(CastlePeer::CURRENT_SK, $this->current_sk);
        if ($this->isColumnModified(CastlePeer::CURRENT_BS)) $criteria->add(CastlePeer::CURRENT_BS, $this->current_bs);
        if ($this->isColumnModified(CastlePeer::CURRENT_LR)) $criteria->add(CastlePeer::CURRENT_LR, $this->current_lr);
        if ($this->isColumnModified(CastlePeer::CURRENT_HK)) $criteria->add(CastlePeer::CURRENT_HK, $this->current_hk);
        if ($this->isColumnModified(CastlePeer::CURRENT_OK)) $criteria->add(CastlePeer::CURRENT_OK, $this->current_ok);
        if ($this->isColumnModified(CastlePeer::MISSION_ST)) $criteria->add(CastlePeer::MISSION_ST, $this->mission_st);
        if ($this->isColumnModified(CastlePeer::MISSION_AS)) $criteria->add(CastlePeer::MISSION_AS, $this->mission_as);
        if ($this->isColumnModified(CastlePeer::MISSION_PR)) $criteria->add(CastlePeer::MISSION_PR, $this->mission_pr);
        if ($this->isColumnModified(CastlePeer::MISSION_SK)) $criteria->add(CastlePeer::MISSION_SK, $this->mission_sk);
        if ($this->isColumnModified(CastlePeer::MISSION_BS)) $criteria->add(CastlePeer::MISSION_BS, $this->mission_bs);
        if ($this->isColumnModified(CastlePeer::MISSION_LR)) $criteria->add(CastlePeer::MISSION_LR, $this->mission_lr);
        if ($this->isColumnModified(CastlePeer::USAGE_OFF)) $criteria->add(CastlePeer::USAGE_OFF, $this->usage_off);
        if ($this->isColumnModified(CastlePeer::USAGE_DEF)) $criteria->add(CastlePeer::USAGE_DEF, $this->usage_def);
        if ($this->isColumnModified(CastlePeer::MISSION_PRIORITY)) $criteria->add(CastlePeer::MISSION_PRIORITY, $this->mission_priority);
        if ($this->isColumnModified(CastlePeer::ENVIRONMENT_CARD)) $criteria->add(CastlePeer::ENVIRONMENT_CARD, $this->environment_card);
        if ($this->isColumnModified(CastlePeer::AUTODEF_COORDINATES)) $criteria->add(CastlePeer::AUTODEF_COORDINATES, $this->autodef_coordinates);
        if ($this->isColumnModified(CastlePeer::AUTODEF_X)) $criteria->add(CastlePeer::AUTODEF_X, $this->autodef_x);
        if ($this->isColumnModified(CastlePeer::AUTODEF_Y)) $criteria->add(CastlePeer::AUTODEF_Y, $this->autodef_y);
        if ($this->isColumnModified(CastlePeer::POINTS)) $criteria->add(CastlePeer::POINTS, $this->points);
        if ($this->isColumnModified(CastlePeer::FREE_POPULATION)) $criteria->add(CastlePeer::FREE_POPULATION, $this->free_population);
        if ($this->isColumnModified(CastlePeer::LAST_IMPORT)) $criteria->add(CastlePeer::LAST_IMPORT, $this->last_import);
        if ($this->isColumnModified(CastlePeer::CREATED_AT)) $criteria->add(CastlePeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(CastlePeer::UPDATED_AT)) $criteria->add(CastlePeer::UPDATED_AT, $this->updated_at);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CastlePeer::DATABASE_NAME);
        $criteria->add(CastlePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Castle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUser($this->getUser());
        $copyObj->setName($this->getName());
        $copyObj->setCastleTypeId($this->getCastleTypeId());
        $copyObj->setCastleLocationId($this->getCastleLocationId());
        $copyObj->setCoordinates($this->getCoordinates());
        $copyObj->setX($this->getX());
        $copyObj->setY($this->getY());
        $copyObj->setSilver($this->getSilver());
        $copyObj->setCopper($this->getCopper());
        $copyObj->setCurrentSt($this->getCurrentSt());
        $copyObj->setCurrentAs($this->getCurrentAs());
        $copyObj->setCurrentPr($this->getCurrentPr());
        $copyObj->setCurrentSk($this->getCurrentSk());
        $copyObj->setCurrentBs($this->getCurrentBs());
        $copyObj->setCurrentLr($this->getCurrentLr());
        $copyObj->setCurrentHk($this->getCurrentHk());
        $copyObj->setCurrentOk($this->getCurrentOk());
        $copyObj->setMissionSt($this->getMissionSt());
        $copyObj->setMissionAs($this->getMissionAs());
        $copyObj->setMissionPr($this->getMissionPr());
        $copyObj->setMissionSk($this->getMissionSk());
        $copyObj->setMissionBs($this->getMissionBs());
        $copyObj->setMissionLr($this->getMissionLr());
        $copyObj->setUsageOff($this->getUsageOff());
        $copyObj->setUsageDef($this->getUsageDef());
        $copyObj->setMissionPriority($this->getMissionPriority());
        $copyObj->setEnvironmentCard($this->getEnvironmentCard());
        $copyObj->setAutodefCoordinates($this->getAutodefCoordinates());
        $copyObj->setAutodefX($this->getAutodefX());
        $copyObj->setAutodefY($this->getAutodefY());
        $copyObj->setPoints($this->getPoints());
        $copyObj->setFreePopulation($this->getFreePopulation());
        $copyObj->setLastImport($this->getLastImport());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCastle2Attacks() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCastle2Attack($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Castle Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CastlePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CastlePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CastleType object.
     *
     * @param                  CastleType $v
     * @return Castle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCastleType(CastleType $v = null)
    {
        if ($v === null) {
            $this->setCastleTypeId(NULL);
        } else {
            $this->setCastleTypeId($v->getId());
        }

        $this->aCastleType = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CastleType object, it will not be re-added.
        if ($v !== null) {
            $v->addCastle($this);
        }


        return $this;
    }


    /**
     * Get the associated CastleType object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CastleType The associated CastleType object.
     * @throws PropelException
     */
    public function getCastleType(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCastleType === null && ($this->castle_type_id !== null) && $doQuery) {
            $this->aCastleType = CastleTypeQuery::create()->findPk($this->castle_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCastleType->addCastles($this);
             */
        }

        return $this->aCastleType;
    }

    /**
     * Declares an association between this object and a CastleLocation object.
     *
     * @param                  CastleLocation $v
     * @return Castle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCastleLocation(CastleLocation $v = null)
    {
        if ($v === null) {
            $this->setCastleLocationId(NULL);
        } else {
            $this->setCastleLocationId($v->getId());
        }

        $this->aCastleLocation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CastleLocation object, it will not be re-added.
        if ($v !== null) {
            $v->addCastle($this);
        }


        return $this;
    }


    /**
     * Get the associated CastleLocation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CastleLocation The associated CastleLocation object.
     * @throws PropelException
     */
    public function getCastleLocation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCastleLocation === null && ($this->castle_location_id !== null) && $doQuery) {
            $this->aCastleLocation = CastleLocationQuery::create()->findPk($this->castle_location_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCastleLocation->addCastles($this);
             */
        }

        return $this->aCastleLocation;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Castle2Attack' == $relationName) {
            $this->initCastle2Attacks();
        }
    }

    /**
     * Clears out the collCastle2Attacks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Castle The current object (for fluent API support)
     * @see        addCastle2Attacks()
     */
    public function clearCastle2Attacks()
    {
        $this->collCastle2Attacks = null; // important to set this to null since that means it is uninitialized
        $this->collCastle2AttacksPartial = null;

        return $this;
    }

    /**
     * reset is the collCastle2Attacks collection loaded partially
     *
     * @return void
     */
    public function resetPartialCastle2Attacks($v = true)
    {
        $this->collCastle2AttacksPartial = $v;
    }

    /**
     * Initializes the collCastle2Attacks collection.
     *
     * By default this just sets the collCastle2Attacks collection to an empty array (like clearcollCastle2Attacks());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCastle2Attacks($overrideExisting = true)
    {
        if (null !== $this->collCastle2Attacks && !$overrideExisting) {
            return;
        }
        $this->collCastle2Attacks = new PropelObjectCollection();
        $this->collCastle2Attacks->setModel('Castle2Attack');
    }

    /**
     * Gets an array of Castle2Attack objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Castle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Castle2Attack[] List of Castle2Attack objects
     * @throws PropelException
     */
    public function getCastle2Attacks($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCastle2AttacksPartial && !$this->isNew();
        if (null === $this->collCastle2Attacks || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCastle2Attacks) {
                // return empty collection
                $this->initCastle2Attacks();
            } else {
                $collCastle2Attacks = Castle2AttackQuery::create(null, $criteria)
                    ->filterByCastle($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCastle2AttacksPartial && count($collCastle2Attacks)) {
                      $this->initCastle2Attacks(false);

                      foreach ($collCastle2Attacks as $obj) {
                        if (false == $this->collCastle2Attacks->contains($obj)) {
                          $this->collCastle2Attacks->append($obj);
                        }
                      }

                      $this->collCastle2AttacksPartial = true;
                    }

                    $collCastle2Attacks->getInternalIterator()->rewind();

                    return $collCastle2Attacks;
                }

                if ($partial && $this->collCastle2Attacks) {
                    foreach ($this->collCastle2Attacks as $obj) {
                        if ($obj->isNew()) {
                            $collCastle2Attacks[] = $obj;
                        }
                    }
                }

                $this->collCastle2Attacks = $collCastle2Attacks;
                $this->collCastle2AttacksPartial = false;
            }
        }

        return $this->collCastle2Attacks;
    }

    /**
     * Sets a collection of Castle2Attack objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castle2Attacks A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Castle The current object (for fluent API support)
     */
    public function setCastle2Attacks(PropelCollection $castle2Attacks, PropelPDO $con = null)
    {
        $castle2AttacksToDelete = $this->getCastle2Attacks(new Criteria(), $con)->diff($castle2Attacks);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->castle2AttacksScheduledForDeletion = clone $castle2AttacksToDelete;

        foreach ($castle2AttacksToDelete as $castle2AttackRemoved) {
            $castle2AttackRemoved->setCastle(null);
        }

        $this->collCastle2Attacks = null;
        foreach ($castle2Attacks as $castle2Attack) {
            $this->addCastle2Attack($castle2Attack);
        }

        $this->collCastle2Attacks = $castle2Attacks;
        $this->collCastle2AttacksPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Castle2Attack objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Castle2Attack objects.
     * @throws PropelException
     */
    public function countCastle2Attacks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCastle2AttacksPartial && !$this->isNew();
        if (null === $this->collCastle2Attacks || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCastle2Attacks) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCastle2Attacks());
            }
            $query = Castle2AttackQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCastle($this)
                ->count($con);
        }

        return count($this->collCastle2Attacks);
    }

    /**
     * Method called to associate a Castle2Attack object to this object
     * through the Castle2Attack foreign key attribute.
     *
     * @param    Castle2Attack $l Castle2Attack
     * @return Castle The current object (for fluent API support)
     */
    public function addCastle2Attack(Castle2Attack $l)
    {
        if ($this->collCastle2Attacks === null) {
            $this->initCastle2Attacks();
            $this->collCastle2AttacksPartial = true;
        }

        if (!in_array($l, $this->collCastle2Attacks->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCastle2Attack($l);

            if ($this->castle2AttacksScheduledForDeletion and $this->castle2AttacksScheduledForDeletion->contains($l)) {
                $this->castle2AttacksScheduledForDeletion->remove($this->castle2AttacksScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Castle2Attack $castle2Attack The castle2Attack object to add.
     */
    protected function doAddCastle2Attack($castle2Attack)
    {
        $this->collCastle2Attacks[]= $castle2Attack;
        $castle2Attack->setCastle($this);
    }

    /**
     * @param	Castle2Attack $castle2Attack The castle2Attack object to remove.
     * @return Castle The current object (for fluent API support)
     */
    public function removeCastle2Attack($castle2Attack)
    {
        if ($this->getCastle2Attacks()->contains($castle2Attack)) {
            $this->collCastle2Attacks->remove($this->collCastle2Attacks->search($castle2Attack));
            if (null === $this->castle2AttacksScheduledForDeletion) {
                $this->castle2AttacksScheduledForDeletion = clone $this->collCastle2Attacks;
                $this->castle2AttacksScheduledForDeletion->clear();
            }
            $this->castle2AttacksScheduledForDeletion[]= clone $castle2Attack;
            $castle2Attack->setCastle(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Castle is new, it will return
     * an empty collection; or if this Castle has previously
     * been saved, it will retrieve related Castle2Attacks from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Castle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Castle2Attack[] List of Castle2Attack objects
     */
    public function getCastle2AttacksJoinAttack($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = Castle2AttackQuery::create(null, $criteria);
        $query->joinWith('Attack', $join_behavior);

        return $this->getCastle2Attacks($query, $con);
    }

    /**
     * Clears out the collAttacks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Castle The current object (for fluent API support)
     * @see        addAttacks()
     */
    public function clearAttacks()
    {
        $this->collAttacks = null; // important to set this to null since that means it is uninitialized
        $this->collAttacksPartial = null;

        return $this;
    }

    /**
     * Initializes the collAttacks collection.
     *
     * By default this just sets the collAttacks collection to an empty collection (like clearAttacks());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initAttacks()
    {
        $this->collAttacks = new PropelObjectCollection();
        $this->collAttacks->setModel('Attack');
    }

    /**
     * Gets a collection of Attack objects related by a many-to-many relationship
     * to the current object by way of the castle_2_attack cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Castle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|Attack[] List of Attack objects
     */
    public function getAttacks($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collAttacks || null !== $criteria) {
            if ($this->isNew() && null === $this->collAttacks) {
                // return empty collection
                $this->initAttacks();
            } else {
                $collAttacks = AttackQuery::create(null, $criteria)
                    ->filterByCastle($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collAttacks;
                }
                $this->collAttacks = $collAttacks;
            }
        }

        return $this->collAttacks;
    }

    /**
     * Sets a collection of Attack objects related by a many-to-many relationship
     * to the current object by way of the castle_2_attack cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $attacks A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Castle The current object (for fluent API support)
     */
    public function setAttacks(PropelCollection $attacks, PropelPDO $con = null)
    {
        $this->clearAttacks();
        $currentAttacks = $this->getAttacks(null, $con);

        $this->attacksScheduledForDeletion = $currentAttacks->diff($attacks);

        foreach ($attacks as $attack) {
            if (!$currentAttacks->contains($attack)) {
                $this->doAddAttack($attack);
            }
        }

        $this->collAttacks = $attacks;

        return $this;
    }

    /**
     * Gets the number of Attack objects related by a many-to-many relationship
     * to the current object by way of the castle_2_attack cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related Attack objects
     */
    public function countAttacks($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collAttacks || null !== $criteria) {
            if ($this->isNew() && null === $this->collAttacks) {
                return 0;
            } else {
                $query = AttackQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByCastle($this)
                    ->count($con);
            }
        } else {
            return count($this->collAttacks);
        }
    }

    /**
     * Associate a Attack object to this object
     * through the castle_2_attack cross reference table.
     *
     * @param  Attack $attack The Castle2Attack object to relate
     * @return Castle The current object (for fluent API support)
     */
    public function addAttack(Attack $attack)
    {
        if ($this->collAttacks === null) {
            $this->initAttacks();
        }

        if (!$this->collAttacks->contains($attack)) { // only add it if the **same** object is not already associated
            $this->doAddAttack($attack);
            $this->collAttacks[] = $attack;

            if ($this->attacksScheduledForDeletion and $this->attacksScheduledForDeletion->contains($attack)) {
                $this->attacksScheduledForDeletion->remove($this->attacksScheduledForDeletion->search($attack));
            }
        }

        return $this;
    }

    /**
     * @param	Attack $attack The attack object to add.
     */
    protected function doAddAttack(Attack $attack)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$attack->getCastles()->contains($this)) { $castle2Attack = new Castle2Attack();
            $castle2Attack->setAttack($attack);
            $this->addCastle2Attack($castle2Attack);

            $foreignCollection = $attack->getCastles();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a Attack object to this object
     * through the castle_2_attack cross reference table.
     *
     * @param Attack $attack The Castle2Attack object to relate
     * @return Castle The current object (for fluent API support)
     */
    public function removeAttack(Attack $attack)
    {
        if ($this->getAttacks()->contains($attack)) {
            $this->collAttacks->remove($this->collAttacks->search($attack));
            if (null === $this->attacksScheduledForDeletion) {
                $this->attacksScheduledForDeletion = clone $this->collAttacks;
                $this->attacksScheduledForDeletion->clear();
            }
            $this->attacksScheduledForDeletion[]= $attack;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->user = null;
        $this->name = null;
        $this->castle_type_id = null;
        $this->castle_location_id = null;
        $this->coordinates = null;
        $this->x = null;
        $this->y = null;
        $this->silver = null;
        $this->copper = null;
        $this->current_st = null;
        $this->current_as = null;
        $this->current_pr = null;
        $this->current_sk = null;
        $this->current_bs = null;
        $this->current_lr = null;
        $this->current_hk = null;
        $this->current_ok = null;
        $this->mission_st = null;
        $this->mission_as = null;
        $this->mission_pr = null;
        $this->mission_sk = null;
        $this->mission_bs = null;
        $this->mission_lr = null;
        $this->usage_off = null;
        $this->usage_def = null;
        $this->mission_priority = null;
        $this->environment_card = null;
        $this->autodef_coordinates = null;
        $this->autodef_x = null;
        $this->autodef_y = null;
        $this->points = null;
        $this->free_population = null;
        $this->last_import = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collCastle2Attacks) {
                foreach ($this->collCastle2Attacks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAttacks) {
                foreach ($this->collAttacks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCastleType instanceof Persistent) {
              $this->aCastleType->clearAllReferences($deep);
            }
            if ($this->aCastleLocation instanceof Persistent) {
              $this->aCastleLocation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCastle2Attacks instanceof PropelCollection) {
            $this->collCastle2Attacks->clearIterator();
        }
        $this->collCastle2Attacks = null;
        if ($this->collAttacks instanceof PropelCollection) {
            $this->collAttacks->clearIterator();
        }
        $this->collAttacks = null;
        $this->aCastleType = null;
        $this->aCastleLocation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CastlePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     Castle The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = CastlePeer::UPDATED_AT;

        return $this;
    }

}

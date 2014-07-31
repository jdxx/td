<?php


/**
 * Base class that represents a row from the 'target' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseTarget extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TargetPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TargetPeer
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
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the coordinates field.
     * @var        string
     */
    protected $coordinates;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the time field.
     * @var        string
     */
    protected $time;

    /**
     * The value for the start_time field.
     * @var        boolean
     */
    protected $start_time;

    /**
     * The value for the use_mission_troops field.
     * @var        boolean
     */
    protected $use_mission_troops;

    /**
     * The value for the filter_castles_off field.
     * @var        boolean
     */
    protected $filter_castles_off;

    /**
     * The value for the filter_castles_def field.
     * @var        boolean
     */
    protected $filter_castles_def;

    /**
     * The value for the filter_castles_mix field.
     * @var        boolean
     */
    protected $filter_castles_mix;

    /**
     * The value for the filter_troops_marker field.
     * @var        boolean
     */
    protected $filter_troops_marker;

    /**
     * The value for the filter_troops_off field.
     * @var        boolean
     */
    protected $filter_troops_off;

    /**
     * The value for the filter_troops_def field.
     * @var        boolean
     */
    protected $filter_troops_def;

    /**
     * The value for the sort field.
     * @var        string
     */
    protected $sort;

    /**
     * The value for the priority field.
     * @var        string
     */
    protected $priority;

    /**
     * The value for the target_silver field.
     * @var        int
     */
    protected $target_silver;

    /**
     * The value for the target_sk field.
     * @var        int
     */
    protected $target_sk;

    /**
     * The value for the target_bs field.
     * @var        int
     */
    protected $target_bs;

    /**
     * The value for the target_lr field.
     * @var        int
     */
    protected $target_lr;

    /**
     * The value for the total_silver field.
     * @var        int
     */
    protected $total_silver;

    /**
     * The value for the total_st field.
     * @var        int
     */
    protected $total_st;

    /**
     * The value for the total_sk field.
     * @var        int
     */
    protected $total_sk;

    /**
     * The value for the total_bs field.
     * @var        int
     */
    protected $total_bs;

    /**
     * The value for the total_as field.
     * @var        int
     */
    protected $total_as;

    /**
     * The value for the total_pr field.
     * @var        int
     */
    protected $total_pr;

    /**
     * The value for the total_lr field.
     * @var        int
     */
    protected $total_lr;

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
     * @var        User
     */
    protected $aUser;

    /**
     * @var        PropelObjectCollection|TargetActions[] Collection to store aggregation of TargetActions objects.
     */
    protected $collTargetActionss;
    protected $collTargetActionssPartial;

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
    protected $targetActionssScheduledForDeletion = null;

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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
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
     * Get the [coordinates] column value.
     *
     * @return string
     */
    public function getCoordinates()
    {

        return $this->coordinates;
    }

    /**
     * Get the [date] column value.
     *
     * @return string
     */
    public function getDate()
    {

        return $this->date;
    }

    /**
     * Get the [time] column value.
     *
     * @return string
     */
    public function getTime()
    {

        return $this->time;
    }

    /**
     * Get the [start_time] column value.
     *
     * @return boolean
     */
    public function getStartTime()
    {

        return $this->start_time;
    }

    /**
     * Get the [use_mission_troops] column value.
     *
     * @return boolean
     */
    public function getUseMissionTroops()
    {

        return $this->use_mission_troops;
    }

    /**
     * Get the [filter_castles_off] column value.
     *
     * @return boolean
     */
    public function getFilterCastlesOff()
    {

        return $this->filter_castles_off;
    }

    /**
     * Get the [filter_castles_def] column value.
     *
     * @return boolean
     */
    public function getFilterCastlesDef()
    {

        return $this->filter_castles_def;
    }

    /**
     * Get the [filter_castles_mix] column value.
     *
     * @return boolean
     */
    public function getFilterCastlesMix()
    {

        return $this->filter_castles_mix;
    }

    /**
     * Get the [filter_troops_marker] column value.
     *
     * @return boolean
     */
    public function getFilterTroopsMarker()
    {

        return $this->filter_troops_marker;
    }

    /**
     * Get the [filter_troops_off] column value.
     *
     * @return boolean
     */
    public function getFilterTroopsOff()
    {

        return $this->filter_troops_off;
    }

    /**
     * Get the [filter_troops_def] column value.
     *
     * @return boolean
     */
    public function getFilterTroopsDef()
    {

        return $this->filter_troops_def;
    }

    /**
     * Get the [sort] column value.
     * time, silver, sk, bs, lr
     * @return string
     */
    public function getSort()
    {

        return $this->sort;
    }

    /**
     * Get the [priority] column value.
     * silver; runtime
     * @return string
     */
    public function getPriority()
    {

        return $this->priority;
    }

    /**
     * Get the [target_silver] column value.
     *
     * @return int
     */
    public function getTargetSilver()
    {

        return $this->target_silver;
    }

    /**
     * Get the [target_sk] column value.
     *
     * @return int
     */
    public function getTargetSk()
    {

        return $this->target_sk;
    }

    /**
     * Get the [target_bs] column value.
     *
     * @return int
     */
    public function getTargetBs()
    {

        return $this->target_bs;
    }

    /**
     * Get the [target_lr] column value.
     *
     * @return int
     */
    public function getTargetLr()
    {

        return $this->target_lr;
    }

    /**
     * Get the [total_silver] column value.
     *
     * @return int
     */
    public function getTotalSilver()
    {

        return $this->total_silver;
    }

    /**
     * Get the [total_st] column value.
     *
     * @return int
     */
    public function getTotalSt()
    {

        return $this->total_st;
    }

    /**
     * Get the [total_sk] column value.
     *
     * @return int
     */
    public function getTotalSk()
    {

        return $this->total_sk;
    }

    /**
     * Get the [total_bs] column value.
     *
     * @return int
     */
    public function getTotalBs()
    {

        return $this->total_bs;
    }

    /**
     * Get the [total_as] column value.
     *
     * @return int
     */
    public function getTotalAs()
    {

        return $this->total_as;
    }

    /**
     * Get the [total_pr] column value.
     *
     * @return int
     */
    public function getTotalPr()
    {

        return $this->total_pr;
    }

    /**
     * Get the [total_lr] column value.
     *
     * @return int
     */
    public function getTotalLr()
    {

        return $this->total_lr;
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
     * @return Target The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TargetPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = TargetPeer::USER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getId() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = TargetPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [coordinates] column.
     *
     * @param  string $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setCoordinates($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->coordinates !== $v) {
            $this->coordinates = $v;
            $this->modifiedColumns[] = TargetPeer::COORDINATES;
        }


        return $this;
    } // setCoordinates()

    /**
     * Set the value of [date] column.
     *
     * @param  string $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setDate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->date !== $v) {
            $this->date = $v;
            $this->modifiedColumns[] = TargetPeer::DATE;
        }


        return $this;
    } // setDate()

    /**
     * Set the value of [time] column.
     *
     * @param  string $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->time !== $v) {
            $this->time = $v;
            $this->modifiedColumns[] = TargetPeer::TIME;
        }


        return $this;
    } // setTime()

    /**
     * Sets the value of the [start_time] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setStartTime($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->start_time !== $v) {
            $this->start_time = $v;
            $this->modifiedColumns[] = TargetPeer::START_TIME;
        }


        return $this;
    } // setStartTime()

    /**
     * Sets the value of the [use_mission_troops] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setUseMissionTroops($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->use_mission_troops !== $v) {
            $this->use_mission_troops = $v;
            $this->modifiedColumns[] = TargetPeer::USE_MISSION_TROOPS;
        }


        return $this;
    } // setUseMissionTroops()

    /**
     * Sets the value of the [filter_castles_off] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setFilterCastlesOff($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->filter_castles_off !== $v) {
            $this->filter_castles_off = $v;
            $this->modifiedColumns[] = TargetPeer::FILTER_CASTLES_OFF;
        }


        return $this;
    } // setFilterCastlesOff()

    /**
     * Sets the value of the [filter_castles_def] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setFilterCastlesDef($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->filter_castles_def !== $v) {
            $this->filter_castles_def = $v;
            $this->modifiedColumns[] = TargetPeer::FILTER_CASTLES_DEF;
        }


        return $this;
    } // setFilterCastlesDef()

    /**
     * Sets the value of the [filter_castles_mix] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setFilterCastlesMix($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->filter_castles_mix !== $v) {
            $this->filter_castles_mix = $v;
            $this->modifiedColumns[] = TargetPeer::FILTER_CASTLES_MIX;
        }


        return $this;
    } // setFilterCastlesMix()

    /**
     * Sets the value of the [filter_troops_marker] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setFilterTroopsMarker($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->filter_troops_marker !== $v) {
            $this->filter_troops_marker = $v;
            $this->modifiedColumns[] = TargetPeer::FILTER_TROOPS_MARKER;
        }


        return $this;
    } // setFilterTroopsMarker()

    /**
     * Sets the value of the [filter_troops_off] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setFilterTroopsOff($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->filter_troops_off !== $v) {
            $this->filter_troops_off = $v;
            $this->modifiedColumns[] = TargetPeer::FILTER_TROOPS_OFF;
        }


        return $this;
    } // setFilterTroopsOff()

    /**
     * Sets the value of the [filter_troops_def] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Target The current object (for fluent API support)
     */
    public function setFilterTroopsDef($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->filter_troops_def !== $v) {
            $this->filter_troops_def = $v;
            $this->modifiedColumns[] = TargetPeer::FILTER_TROOPS_DEF;
        }


        return $this;
    } // setFilterTroopsDef()

    /**
     * Set the value of [sort] column.
     * time, silver, sk, bs, lr
     * @param  string $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setSort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sort !== $v) {
            $this->sort = $v;
            $this->modifiedColumns[] = TargetPeer::SORT;
        }


        return $this;
    } // setSort()

    /**
     * Set the value of [priority] column.
     * silver; runtime
     * @param  string $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setPriority($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->priority !== $v) {
            $this->priority = $v;
            $this->modifiedColumns[] = TargetPeer::PRIORITY;
        }


        return $this;
    } // setPriority()

    /**
     * Set the value of [target_silver] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTargetSilver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->target_silver !== $v) {
            $this->target_silver = $v;
            $this->modifiedColumns[] = TargetPeer::TARGET_SILVER;
        }


        return $this;
    } // setTargetSilver()

    /**
     * Set the value of [target_sk] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTargetSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->target_sk !== $v) {
            $this->target_sk = $v;
            $this->modifiedColumns[] = TargetPeer::TARGET_SK;
        }


        return $this;
    } // setTargetSk()

    /**
     * Set the value of [target_bs] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTargetBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->target_bs !== $v) {
            $this->target_bs = $v;
            $this->modifiedColumns[] = TargetPeer::TARGET_BS;
        }


        return $this;
    } // setTargetBs()

    /**
     * Set the value of [target_lr] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTargetLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->target_lr !== $v) {
            $this->target_lr = $v;
            $this->modifiedColumns[] = TargetPeer::TARGET_LR;
        }


        return $this;
    } // setTargetLr()

    /**
     * Set the value of [total_silver] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalSilver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_silver !== $v) {
            $this->total_silver = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_SILVER;
        }


        return $this;
    } // setTotalSilver()

    /**
     * Set the value of [total_st] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalSt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_st !== $v) {
            $this->total_st = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_ST;
        }


        return $this;
    } // setTotalSt()

    /**
     * Set the value of [total_sk] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_sk !== $v) {
            $this->total_sk = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_SK;
        }


        return $this;
    } // setTotalSk()

    /**
     * Set the value of [total_bs] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_bs !== $v) {
            $this->total_bs = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_BS;
        }


        return $this;
    } // setTotalBs()

    /**
     * Set the value of [total_as] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalAs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_as !== $v) {
            $this->total_as = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_AS;
        }


        return $this;
    } // setTotalAs()

    /**
     * Set the value of [total_pr] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalPr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_pr !== $v) {
            $this->total_pr = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_PR;
        }


        return $this;
    } // setTotalPr()

    /**
     * Set the value of [total_lr] column.
     *
     * @param  int $v new value
     * @return Target The current object (for fluent API support)
     */
    public function setTotalLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_lr !== $v) {
            $this->total_lr = $v;
            $this->modifiedColumns[] = TargetPeer::TOTAL_LR;
        }


        return $this;
    } // setTotalLr()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Target The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = TargetPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Target The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = TargetPeer::UPDATED_AT;
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
            $this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->coordinates = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->time = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->start_time = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->use_mission_troops = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->filter_castles_off = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->filter_castles_def = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->filter_castles_mix = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->filter_troops_marker = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->filter_troops_off = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->filter_troops_def = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->sort = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->priority = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->target_silver = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->target_sk = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->target_bs = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->target_lr = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->total_silver = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->total_st = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->total_sk = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->total_bs = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->total_as = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->total_pr = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->total_lr = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->created_at = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->updated_at = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = TargetPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Target object", $e);
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

        if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
            $this->aUser = null;
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
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TargetPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUser = null;
            $this->collTargetActionss = null;

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
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TargetQuery::create()
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
            $con = Propel::getConnection(TargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(TargetPeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(TargetPeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(TargetPeer::UPDATED_AT)) {
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
                TargetPeer::addInstanceToPool($this);
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

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
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

            if ($this->targetActionssScheduledForDeletion !== null) {
                if (!$this->targetActionssScheduledForDeletion->isEmpty()) {
                    foreach ($this->targetActionssScheduledForDeletion as $targetActions) {
                        // need to save related object because we set the relation to null
                        $targetActions->save($con);
                    }
                    $this->targetActionssScheduledForDeletion = null;
                }
            }

            if ($this->collTargetActionss !== null) {
                foreach ($this->collTargetActionss as $referrerFK) {
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

        $this->modifiedColumns[] = TargetPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TargetPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TargetPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(TargetPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(TargetPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(TargetPeer::COORDINATES)) {
            $modifiedColumns[':p' . $index++]  = '`coordinates`';
        }
        if ($this->isColumnModified(TargetPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(TargetPeer::TIME)) {
            $modifiedColumns[':p' . $index++]  = '`time`';
        }
        if ($this->isColumnModified(TargetPeer::START_TIME)) {
            $modifiedColumns[':p' . $index++]  = '`start_time`';
        }
        if ($this->isColumnModified(TargetPeer::USE_MISSION_TROOPS)) {
            $modifiedColumns[':p' . $index++]  = '`use_mission_troops`';
        }
        if ($this->isColumnModified(TargetPeer::FILTER_CASTLES_OFF)) {
            $modifiedColumns[':p' . $index++]  = '`filter_Castles_Off`';
        }
        if ($this->isColumnModified(TargetPeer::FILTER_CASTLES_DEF)) {
            $modifiedColumns[':p' . $index++]  = '`filter_Castles_Def`';
        }
        if ($this->isColumnModified(TargetPeer::FILTER_CASTLES_MIX)) {
            $modifiedColumns[':p' . $index++]  = '`filter_Castles_Mix`';
        }
        if ($this->isColumnModified(TargetPeer::FILTER_TROOPS_MARKER)) {
            $modifiedColumns[':p' . $index++]  = '`filter_Troops_Marker`';
        }
        if ($this->isColumnModified(TargetPeer::FILTER_TROOPS_OFF)) {
            $modifiedColumns[':p' . $index++]  = '`filter_Troops_Off`';
        }
        if ($this->isColumnModified(TargetPeer::FILTER_TROOPS_DEF)) {
            $modifiedColumns[':p' . $index++]  = '`filter_Troops_Def`';
        }
        if ($this->isColumnModified(TargetPeer::SORT)) {
            $modifiedColumns[':p' . $index++]  = '`sort`';
        }
        if ($this->isColumnModified(TargetPeer::PRIORITY)) {
            $modifiedColumns[':p' . $index++]  = '`priority`';
        }
        if ($this->isColumnModified(TargetPeer::TARGET_SILVER)) {
            $modifiedColumns[':p' . $index++]  = '`target_silver`';
        }
        if ($this->isColumnModified(TargetPeer::TARGET_SK)) {
            $modifiedColumns[':p' . $index++]  = '`target_sk`';
        }
        if ($this->isColumnModified(TargetPeer::TARGET_BS)) {
            $modifiedColumns[':p' . $index++]  = '`target_bs`';
        }
        if ($this->isColumnModified(TargetPeer::TARGET_LR)) {
            $modifiedColumns[':p' . $index++]  = '`target_lr`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_SILVER)) {
            $modifiedColumns[':p' . $index++]  = '`total_silver`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_ST)) {
            $modifiedColumns[':p' . $index++]  = '`total_st`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_SK)) {
            $modifiedColumns[':p' . $index++]  = '`total_sk`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_BS)) {
            $modifiedColumns[':p' . $index++]  = '`total_bs`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_AS)) {
            $modifiedColumns[':p' . $index++]  = '`total_as`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_PR)) {
            $modifiedColumns[':p' . $index++]  = '`total_pr`';
        }
        if ($this->isColumnModified(TargetPeer::TOTAL_LR)) {
            $modifiedColumns[':p' . $index++]  = '`total_lr`';
        }
        if ($this->isColumnModified(TargetPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(TargetPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `target` (%s) VALUES (%s)',
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
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`coordinates`':
                        $stmt->bindValue($identifier, $this->coordinates, PDO::PARAM_STR);
                        break;
                    case '`date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`time`':
                        $stmt->bindValue($identifier, $this->time, PDO::PARAM_STR);
                        break;
                    case '`start_time`':
                        $stmt->bindValue($identifier, (int) $this->start_time, PDO::PARAM_INT);
                        break;
                    case '`use_mission_troops`':
                        $stmt->bindValue($identifier, (int) $this->use_mission_troops, PDO::PARAM_INT);
                        break;
                    case '`filter_Castles_Off`':
                        $stmt->bindValue($identifier, (int) $this->filter_castles_off, PDO::PARAM_INT);
                        break;
                    case '`filter_Castles_Def`':
                        $stmt->bindValue($identifier, (int) $this->filter_castles_def, PDO::PARAM_INT);
                        break;
                    case '`filter_Castles_Mix`':
                        $stmt->bindValue($identifier, (int) $this->filter_castles_mix, PDO::PARAM_INT);
                        break;
                    case '`filter_Troops_Marker`':
                        $stmt->bindValue($identifier, (int) $this->filter_troops_marker, PDO::PARAM_INT);
                        break;
                    case '`filter_Troops_Off`':
                        $stmt->bindValue($identifier, (int) $this->filter_troops_off, PDO::PARAM_INT);
                        break;
                    case '`filter_Troops_Def`':
                        $stmt->bindValue($identifier, (int) $this->filter_troops_def, PDO::PARAM_INT);
                        break;
                    case '`sort`':
                        $stmt->bindValue($identifier, $this->sort, PDO::PARAM_STR);
                        break;
                    case '`priority`':
                        $stmt->bindValue($identifier, $this->priority, PDO::PARAM_STR);
                        break;
                    case '`target_silver`':
                        $stmt->bindValue($identifier, $this->target_silver, PDO::PARAM_INT);
                        break;
                    case '`target_sk`':
                        $stmt->bindValue($identifier, $this->target_sk, PDO::PARAM_INT);
                        break;
                    case '`target_bs`':
                        $stmt->bindValue($identifier, $this->target_bs, PDO::PARAM_INT);
                        break;
                    case '`target_lr`':
                        $stmt->bindValue($identifier, $this->target_lr, PDO::PARAM_INT);
                        break;
                    case '`total_silver`':
                        $stmt->bindValue($identifier, $this->total_silver, PDO::PARAM_INT);
                        break;
                    case '`total_st`':
                        $stmt->bindValue($identifier, $this->total_st, PDO::PARAM_INT);
                        break;
                    case '`total_sk`':
                        $stmt->bindValue($identifier, $this->total_sk, PDO::PARAM_INT);
                        break;
                    case '`total_bs`':
                        $stmt->bindValue($identifier, $this->total_bs, PDO::PARAM_INT);
                        break;
                    case '`total_as`':
                        $stmt->bindValue($identifier, $this->total_as, PDO::PARAM_INT);
                        break;
                    case '`total_pr`':
                        $stmt->bindValue($identifier, $this->total_pr, PDO::PARAM_INT);
                        break;
                    case '`total_lr`':
                        $stmt->bindValue($identifier, $this->total_lr, PDO::PARAM_INT);
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

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }


            if (($retval = TargetPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTargetActionss !== null) {
                    foreach ($this->collTargetActionss as $referrerFK) {
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
        $pos = TargetPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 2:
                return $this->getName();
                break;
            case 3:
                return $this->getCoordinates();
                break;
            case 4:
                return $this->getDate();
                break;
            case 5:
                return $this->getTime();
                break;
            case 6:
                return $this->getStartTime();
                break;
            case 7:
                return $this->getUseMissionTroops();
                break;
            case 8:
                return $this->getFilterCastlesOff();
                break;
            case 9:
                return $this->getFilterCastlesDef();
                break;
            case 10:
                return $this->getFilterCastlesMix();
                break;
            case 11:
                return $this->getFilterTroopsMarker();
                break;
            case 12:
                return $this->getFilterTroopsOff();
                break;
            case 13:
                return $this->getFilterTroopsDef();
                break;
            case 14:
                return $this->getSort();
                break;
            case 15:
                return $this->getPriority();
                break;
            case 16:
                return $this->getTargetSilver();
                break;
            case 17:
                return $this->getTargetSk();
                break;
            case 18:
                return $this->getTargetBs();
                break;
            case 19:
                return $this->getTargetLr();
                break;
            case 20:
                return $this->getTotalSilver();
                break;
            case 21:
                return $this->getTotalSt();
                break;
            case 22:
                return $this->getTotalSk();
                break;
            case 23:
                return $this->getTotalBs();
                break;
            case 24:
                return $this->getTotalAs();
                break;
            case 25:
                return $this->getTotalPr();
                break;
            case 26:
                return $this->getTotalLr();
                break;
            case 27:
                return $this->getCreatedAt();
                break;
            case 28:
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
        if (isset($alreadyDumpedObjects['Target'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Target'][$this->getPrimaryKey()] = true;
        $keys = TargetPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserId(),
            $keys[2] => $this->getName(),
            $keys[3] => $this->getCoordinates(),
            $keys[4] => $this->getDate(),
            $keys[5] => $this->getTime(),
            $keys[6] => $this->getStartTime(),
            $keys[7] => $this->getUseMissionTroops(),
            $keys[8] => $this->getFilterCastlesOff(),
            $keys[9] => $this->getFilterCastlesDef(),
            $keys[10] => $this->getFilterCastlesMix(),
            $keys[11] => $this->getFilterTroopsMarker(),
            $keys[12] => $this->getFilterTroopsOff(),
            $keys[13] => $this->getFilterTroopsDef(),
            $keys[14] => $this->getSort(),
            $keys[15] => $this->getPriority(),
            $keys[16] => $this->getTargetSilver(),
            $keys[17] => $this->getTargetSk(),
            $keys[18] => $this->getTargetBs(),
            $keys[19] => $this->getTargetLr(),
            $keys[20] => $this->getTotalSilver(),
            $keys[21] => $this->getTotalSt(),
            $keys[22] => $this->getTotalSk(),
            $keys[23] => $this->getTotalBs(),
            $keys[24] => $this->getTotalAs(),
            $keys[25] => $this->getTotalPr(),
            $keys[26] => $this->getTotalLr(),
            $keys[27] => $this->getCreatedAt(),
            $keys[28] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTargetActionss) {
                $result['TargetActionss'] = $this->collTargetActionss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = TargetPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 2:
                $this->setName($value);
                break;
            case 3:
                $this->setCoordinates($value);
                break;
            case 4:
                $this->setDate($value);
                break;
            case 5:
                $this->setTime($value);
                break;
            case 6:
                $this->setStartTime($value);
                break;
            case 7:
                $this->setUseMissionTroops($value);
                break;
            case 8:
                $this->setFilterCastlesOff($value);
                break;
            case 9:
                $this->setFilterCastlesDef($value);
                break;
            case 10:
                $this->setFilterCastlesMix($value);
                break;
            case 11:
                $this->setFilterTroopsMarker($value);
                break;
            case 12:
                $this->setFilterTroopsOff($value);
                break;
            case 13:
                $this->setFilterTroopsDef($value);
                break;
            case 14:
                $this->setSort($value);
                break;
            case 15:
                $this->setPriority($value);
                break;
            case 16:
                $this->setTargetSilver($value);
                break;
            case 17:
                $this->setTargetSk($value);
                break;
            case 18:
                $this->setTargetBs($value);
                break;
            case 19:
                $this->setTargetLr($value);
                break;
            case 20:
                $this->setTotalSilver($value);
                break;
            case 21:
                $this->setTotalSt($value);
                break;
            case 22:
                $this->setTotalSk($value);
                break;
            case 23:
                $this->setTotalBs($value);
                break;
            case 24:
                $this->setTotalAs($value);
                break;
            case 25:
                $this->setTotalPr($value);
                break;
            case 26:
                $this->setTotalLr($value);
                break;
            case 27:
                $this->setCreatedAt($value);
                break;
            case 28:
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
        $keys = TargetPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCoordinates($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTime($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStartTime($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUseMissionTroops($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFilterCastlesOff($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFilterCastlesDef($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFilterCastlesMix($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFilterTroopsMarker($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFilterTroopsOff($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFilterTroopsDef($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSort($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPriority($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTargetSilver($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTargetSk($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTargetBs($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTargetLr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTotalSilver($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTotalSt($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTotalSk($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTotalBs($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTotalAs($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTotalPr($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTotalLr($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCreatedAt($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setUpdatedAt($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TargetPeer::DATABASE_NAME);

        if ($this->isColumnModified(TargetPeer::ID)) $criteria->add(TargetPeer::ID, $this->id);
        if ($this->isColumnModified(TargetPeer::USER_ID)) $criteria->add(TargetPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(TargetPeer::NAME)) $criteria->add(TargetPeer::NAME, $this->name);
        if ($this->isColumnModified(TargetPeer::COORDINATES)) $criteria->add(TargetPeer::COORDINATES, $this->coordinates);
        if ($this->isColumnModified(TargetPeer::DATE)) $criteria->add(TargetPeer::DATE, $this->date);
        if ($this->isColumnModified(TargetPeer::TIME)) $criteria->add(TargetPeer::TIME, $this->time);
        if ($this->isColumnModified(TargetPeer::START_TIME)) $criteria->add(TargetPeer::START_TIME, $this->start_time);
        if ($this->isColumnModified(TargetPeer::USE_MISSION_TROOPS)) $criteria->add(TargetPeer::USE_MISSION_TROOPS, $this->use_mission_troops);
        if ($this->isColumnModified(TargetPeer::FILTER_CASTLES_OFF)) $criteria->add(TargetPeer::FILTER_CASTLES_OFF, $this->filter_castles_off);
        if ($this->isColumnModified(TargetPeer::FILTER_CASTLES_DEF)) $criteria->add(TargetPeer::FILTER_CASTLES_DEF, $this->filter_castles_def);
        if ($this->isColumnModified(TargetPeer::FILTER_CASTLES_MIX)) $criteria->add(TargetPeer::FILTER_CASTLES_MIX, $this->filter_castles_mix);
        if ($this->isColumnModified(TargetPeer::FILTER_TROOPS_MARKER)) $criteria->add(TargetPeer::FILTER_TROOPS_MARKER, $this->filter_troops_marker);
        if ($this->isColumnModified(TargetPeer::FILTER_TROOPS_OFF)) $criteria->add(TargetPeer::FILTER_TROOPS_OFF, $this->filter_troops_off);
        if ($this->isColumnModified(TargetPeer::FILTER_TROOPS_DEF)) $criteria->add(TargetPeer::FILTER_TROOPS_DEF, $this->filter_troops_def);
        if ($this->isColumnModified(TargetPeer::SORT)) $criteria->add(TargetPeer::SORT, $this->sort);
        if ($this->isColumnModified(TargetPeer::PRIORITY)) $criteria->add(TargetPeer::PRIORITY, $this->priority);
        if ($this->isColumnModified(TargetPeer::TARGET_SILVER)) $criteria->add(TargetPeer::TARGET_SILVER, $this->target_silver);
        if ($this->isColumnModified(TargetPeer::TARGET_SK)) $criteria->add(TargetPeer::TARGET_SK, $this->target_sk);
        if ($this->isColumnModified(TargetPeer::TARGET_BS)) $criteria->add(TargetPeer::TARGET_BS, $this->target_bs);
        if ($this->isColumnModified(TargetPeer::TARGET_LR)) $criteria->add(TargetPeer::TARGET_LR, $this->target_lr);
        if ($this->isColumnModified(TargetPeer::TOTAL_SILVER)) $criteria->add(TargetPeer::TOTAL_SILVER, $this->total_silver);
        if ($this->isColumnModified(TargetPeer::TOTAL_ST)) $criteria->add(TargetPeer::TOTAL_ST, $this->total_st);
        if ($this->isColumnModified(TargetPeer::TOTAL_SK)) $criteria->add(TargetPeer::TOTAL_SK, $this->total_sk);
        if ($this->isColumnModified(TargetPeer::TOTAL_BS)) $criteria->add(TargetPeer::TOTAL_BS, $this->total_bs);
        if ($this->isColumnModified(TargetPeer::TOTAL_AS)) $criteria->add(TargetPeer::TOTAL_AS, $this->total_as);
        if ($this->isColumnModified(TargetPeer::TOTAL_PR)) $criteria->add(TargetPeer::TOTAL_PR, $this->total_pr);
        if ($this->isColumnModified(TargetPeer::TOTAL_LR)) $criteria->add(TargetPeer::TOTAL_LR, $this->total_lr);
        if ($this->isColumnModified(TargetPeer::CREATED_AT)) $criteria->add(TargetPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(TargetPeer::UPDATED_AT)) $criteria->add(TargetPeer::UPDATED_AT, $this->updated_at);

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
        $criteria = new Criteria(TargetPeer::DATABASE_NAME);
        $criteria->add(TargetPeer::ID, $this->id);

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
     * @param object $copyObj An object of Target (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserId($this->getUserId());
        $copyObj->setName($this->getName());
        $copyObj->setCoordinates($this->getCoordinates());
        $copyObj->setDate($this->getDate());
        $copyObj->setTime($this->getTime());
        $copyObj->setStartTime($this->getStartTime());
        $copyObj->setUseMissionTroops($this->getUseMissionTroops());
        $copyObj->setFilterCastlesOff($this->getFilterCastlesOff());
        $copyObj->setFilterCastlesDef($this->getFilterCastlesDef());
        $copyObj->setFilterCastlesMix($this->getFilterCastlesMix());
        $copyObj->setFilterTroopsMarker($this->getFilterTroopsMarker());
        $copyObj->setFilterTroopsOff($this->getFilterTroopsOff());
        $copyObj->setFilterTroopsDef($this->getFilterTroopsDef());
        $copyObj->setSort($this->getSort());
        $copyObj->setPriority($this->getPriority());
        $copyObj->setTargetSilver($this->getTargetSilver());
        $copyObj->setTargetSk($this->getTargetSk());
        $copyObj->setTargetBs($this->getTargetBs());
        $copyObj->setTargetLr($this->getTargetLr());
        $copyObj->setTotalSilver($this->getTotalSilver());
        $copyObj->setTotalSt($this->getTotalSt());
        $copyObj->setTotalSk($this->getTotalSk());
        $copyObj->setTotalBs($this->getTotalBs());
        $copyObj->setTotalAs($this->getTotalAs());
        $copyObj->setTotalPr($this->getTotalPr());
        $copyObj->setTotalLr($this->getTotalLr());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTargetActionss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTargetActions($relObj->copy($deepCopy));
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
     * @return Target Clone of current object.
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
     * @return TargetPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TargetPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param                  User $v
     * @return Target The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getId());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addTarget($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->user_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addTargets($this);
             */
        }

        return $this->aUser;
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
        if ('TargetActions' == $relationName) {
            $this->initTargetActionss();
        }
    }

    /**
     * Clears out the collTargetActionss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Target The current object (for fluent API support)
     * @see        addTargetActionss()
     */
    public function clearTargetActionss()
    {
        $this->collTargetActionss = null; // important to set this to null since that means it is uninitialized
        $this->collTargetActionssPartial = null;

        return $this;
    }

    /**
     * reset is the collTargetActionss collection loaded partially
     *
     * @return void
     */
    public function resetPartialTargetActionss($v = true)
    {
        $this->collTargetActionssPartial = $v;
    }

    /**
     * Initializes the collTargetActionss collection.
     *
     * By default this just sets the collTargetActionss collection to an empty array (like clearcollTargetActionss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTargetActionss($overrideExisting = true)
    {
        if (null !== $this->collTargetActionss && !$overrideExisting) {
            return;
        }
        $this->collTargetActionss = new PropelObjectCollection();
        $this->collTargetActionss->setModel('TargetActions');
    }

    /**
     * Gets an array of TargetActions objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Target is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TargetActions[] List of TargetActions objects
     * @throws PropelException
     */
    public function getTargetActionss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTargetActionssPartial && !$this->isNew();
        if (null === $this->collTargetActionss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTargetActionss) {
                // return empty collection
                $this->initTargetActionss();
            } else {
                $collTargetActionss = TargetActionsQuery::create(null, $criteria)
                    ->filterByTarget($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTargetActionssPartial && count($collTargetActionss)) {
                      $this->initTargetActionss(false);

                      foreach ($collTargetActionss as $obj) {
                        if (false == $this->collTargetActionss->contains($obj)) {
                          $this->collTargetActionss->append($obj);
                        }
                      }

                      $this->collTargetActionssPartial = true;
                    }

                    $collTargetActionss->getInternalIterator()->rewind();

                    return $collTargetActionss;
                }

                if ($partial && $this->collTargetActionss) {
                    foreach ($this->collTargetActionss as $obj) {
                        if ($obj->isNew()) {
                            $collTargetActionss[] = $obj;
                        }
                    }
                }

                $this->collTargetActionss = $collTargetActionss;
                $this->collTargetActionssPartial = false;
            }
        }

        return $this->collTargetActionss;
    }

    /**
     * Sets a collection of TargetActions objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $targetActionss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Target The current object (for fluent API support)
     */
    public function setTargetActionss(PropelCollection $targetActionss, PropelPDO $con = null)
    {
        $targetActionssToDelete = $this->getTargetActionss(new Criteria(), $con)->diff($targetActionss);


        $this->targetActionssScheduledForDeletion = $targetActionssToDelete;

        foreach ($targetActionssToDelete as $targetActionsRemoved) {
            $targetActionsRemoved->setTarget(null);
        }

        $this->collTargetActionss = null;
        foreach ($targetActionss as $targetActions) {
            $this->addTargetActions($targetActions);
        }

        $this->collTargetActionss = $targetActionss;
        $this->collTargetActionssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TargetActions objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TargetActions objects.
     * @throws PropelException
     */
    public function countTargetActionss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTargetActionssPartial && !$this->isNew();
        if (null === $this->collTargetActionss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTargetActionss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTargetActionss());
            }
            $query = TargetActionsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTarget($this)
                ->count($con);
        }

        return count($this->collTargetActionss);
    }

    /**
     * Method called to associate a TargetActions object to this object
     * through the TargetActions foreign key attribute.
     *
     * @param    TargetActions $l TargetActions
     * @return Target The current object (for fluent API support)
     */
    public function addTargetActions(TargetActions $l)
    {
        if ($this->collTargetActionss === null) {
            $this->initTargetActionss();
            $this->collTargetActionssPartial = true;
        }

        if (!in_array($l, $this->collTargetActionss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTargetActions($l);

            if ($this->targetActionssScheduledForDeletion and $this->targetActionssScheduledForDeletion->contains($l)) {
                $this->targetActionssScheduledForDeletion->remove($this->targetActionssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TargetActions $targetActions The targetActions object to add.
     */
    protected function doAddTargetActions($targetActions)
    {
        $this->collTargetActionss[]= $targetActions;
        $targetActions->setTarget($this);
    }

    /**
     * @param	TargetActions $targetActions The targetActions object to remove.
     * @return Target The current object (for fluent API support)
     */
    public function removeTargetActions($targetActions)
    {
        if ($this->getTargetActionss()->contains($targetActions)) {
            $this->collTargetActionss->remove($this->collTargetActionss->search($targetActions));
            if (null === $this->targetActionssScheduledForDeletion) {
                $this->targetActionssScheduledForDeletion = clone $this->collTargetActionss;
                $this->targetActionssScheduledForDeletion->clear();
            }
            $this->targetActionssScheduledForDeletion[]= $targetActions;
            $targetActions->setTarget(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Target is new, it will return
     * an empty collection; or if this Target has previously
     * been saved, it will retrieve related TargetActionss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Target.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|TargetActions[] List of TargetActions objects
     */
    public function getTargetActionssJoinCastle($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TargetActionsQuery::create(null, $criteria);
        $query->joinWith('Castle', $join_behavior);

        return $this->getTargetActionss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->user_id = null;
        $this->name = null;
        $this->coordinates = null;
        $this->date = null;
        $this->time = null;
        $this->start_time = null;
        $this->use_mission_troops = null;
        $this->filter_castles_off = null;
        $this->filter_castles_def = null;
        $this->filter_castles_mix = null;
        $this->filter_troops_marker = null;
        $this->filter_troops_off = null;
        $this->filter_troops_def = null;
        $this->sort = null;
        $this->priority = null;
        $this->target_silver = null;
        $this->target_sk = null;
        $this->target_bs = null;
        $this->target_lr = null;
        $this->total_silver = null;
        $this->total_st = null;
        $this->total_sk = null;
        $this->total_bs = null;
        $this->total_as = null;
        $this->total_pr = null;
        $this->total_lr = null;
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
            if ($this->collTargetActionss) {
                foreach ($this->collTargetActionss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTargetActionss instanceof PropelCollection) {
            $this->collTargetActionss->clearIterator();
        }
        $this->collTargetActionss = null;
        $this->aUser = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TargetPeer::DEFAULT_STRING_FORMAT);
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
     * @return     Target The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = TargetPeer::UPDATED_AT;

        return $this;
    }

}

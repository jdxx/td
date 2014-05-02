<?php


/**
 * Base class that represents a row from the 'user' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseUser extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UserPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UserPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the server field.
     * @var        string
     */
    protected $server;

    /**
     * The value for the playerid field.
     * @var        string
     */
    protected $playerid;

    /**
     * The value for the phone field.
     * @var        string
     */
    protected $phone;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the sms field.
     * @var        boolean
     */
    protected $sms;

    /**
     * The value for the import_status field.
     * @var        int
     */
    protected $import_status;

    /**
     * The value for the import_date field.
     * @var        string
     */
    protected $import_date;

    /**
     * @var        PropelObjectCollection|Castle[] Collection to store aggregation of Castle objects.
     */
    protected $collCastles;
    protected $collCastlesPartial;

    /**
     * @var        PropelObjectCollection|CastleType[] Collection to store aggregation of CastleType objects.
     */
    protected $collCastleTypes;
    protected $collCastleTypesPartial;

    /**
     * @var        PropelObjectCollection|TimeTable[] Collection to store aggregation of TimeTable objects.
     */
    protected $collTimeTables;
    protected $collTimeTablesPartial;

    /**
     * @var        PropelObjectCollection|CastleLocation[] Collection to store aggregation of CastleLocation objects.
     */
    protected $collCastleLocations;
    protected $collCastleLocationsPartial;

    /**
     * @var        PropelObjectCollection|Target[] Collection to store aggregation of Target objects.
     */
    protected $collTargets;
    protected $collTargetsPartial;

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
    protected $castlesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $castleTypesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $timeTablesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $castleLocationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $targetsScheduledForDeletion = null;

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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [password] column value.
     *
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [server] column value.
     * DE-7
     * @return string
     */
    public function getServer()
    {

        return $this->server;
    }

    /**
     * Get the [playerid] column value.
     * Vollständiger Spielerlink
     * @return string
     */
    public function getPlayerid()
    {

        return $this->playerid;
    }

    /**
     * Get the [phone] column value.
     *
     * @return string
     */
    public function getPhone()
    {

        return $this->phone;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [sms] column value.
     *
     * @return boolean
     */
    public function getSms()
    {

        return $this->sms;
    }

    /**
     * Get the [import_status] column value.
     * 10=only tavernbrawl; 20=only sourcecode; 100=ok
     * @return int
     */
    public function getImportStatus()
    {

        return $this->import_status;
    }

    /**
     * Get the [optionally formatted] temporal [import_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getImportDate($format = 'Y-m-d H:i:s')
    {
        if ($this->import_date === null) {
            return null;
        }

        if ($this->import_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->import_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->import_date, true), $x);
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
     * @return User The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UserPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = UserPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [password] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = UserPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Set the value of [server] column.
     * DE-7
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setServer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->server !== $v) {
            $this->server = $v;
            $this->modifiedColumns[] = UserPeer::SERVER;
        }


        return $this;
    } // setServer()

    /**
     * Set the value of [playerid] column.
     * Vollständiger Spielerlink
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPlayerid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->playerid !== $v) {
            $this->playerid = $v;
            $this->modifiedColumns[] = UserPeer::PLAYERID;
        }


        return $this;
    } // setPlayerid()

    /**
     * Set the value of [phone] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[] = UserPeer::PHONE;
        }


        return $this;
    } // setPhone()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return User The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UserPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Sets the value of the [sms] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return User The current object (for fluent API support)
     */
    public function setSms($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->sms !== $v) {
            $this->sms = $v;
            $this->modifiedColumns[] = UserPeer::SMS;
        }


        return $this;
    } // setSms()

    /**
     * Set the value of [import_status] column.
     * 10=only tavernbrawl; 20=only sourcecode; 100=ok
     * @param  int $v new value
     * @return User The current object (for fluent API support)
     */
    public function setImportStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->import_status !== $v) {
            $this->import_status = $v;
            $this->modifiedColumns[] = UserPeer::IMPORT_STATUS;
        }


        return $this;
    } // setImportStatus()

    /**
     * Sets the value of [import_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return User The current object (for fluent API support)
     */
    public function setImportDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->import_date !== null || $dt !== null) {
            $currentDateAsString = ($this->import_date !== null && $tmpDt = new DateTime($this->import_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->import_date = $newDateAsString;
                $this->modifiedColumns[] = UserPeer::IMPORT_DATE;
            }
        } // if either are not null


        return $this;
    } // setImportDate()

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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->server = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->playerid = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->phone = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->email = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->sms = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->import_status = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->import_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = UserPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating User object", $e);
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCastles = null;

            $this->collCastleTypes = null;

            $this->collTimeTables = null;

            $this->collCastleLocations = null;

            $this->collTargets = null;

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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UserQuery::create()
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
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                UserPeer::addInstanceToPool($this);
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

            if ($this->castlesScheduledForDeletion !== null) {
                if (!$this->castlesScheduledForDeletion->isEmpty()) {
                    foreach ($this->castlesScheduledForDeletion as $castle) {
                        // need to save related object because we set the relation to null
                        $castle->save($con);
                    }
                    $this->castlesScheduledForDeletion = null;
                }
            }

            if ($this->collCastles !== null) {
                foreach ($this->collCastles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->castleTypesScheduledForDeletion !== null) {
                if (!$this->castleTypesScheduledForDeletion->isEmpty()) {
                    foreach ($this->castleTypesScheduledForDeletion as $castleType) {
                        // need to save related object because we set the relation to null
                        $castleType->save($con);
                    }
                    $this->castleTypesScheduledForDeletion = null;
                }
            }

            if ($this->collCastleTypes !== null) {
                foreach ($this->collCastleTypes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->timeTablesScheduledForDeletion !== null) {
                if (!$this->timeTablesScheduledForDeletion->isEmpty()) {
                    foreach ($this->timeTablesScheduledForDeletion as $timeTable) {
                        // need to save related object because we set the relation to null
                        $timeTable->save($con);
                    }
                    $this->timeTablesScheduledForDeletion = null;
                }
            }

            if ($this->collTimeTables !== null) {
                foreach ($this->collTimeTables as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->castleLocationsScheduledForDeletion !== null) {
                if (!$this->castleLocationsScheduledForDeletion->isEmpty()) {
                    foreach ($this->castleLocationsScheduledForDeletion as $castleLocation) {
                        // need to save related object because we set the relation to null
                        $castleLocation->save($con);
                    }
                    $this->castleLocationsScheduledForDeletion = null;
                }
            }

            if ($this->collCastleLocations !== null) {
                foreach ($this->collCastleLocations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->targetsScheduledForDeletion !== null) {
                if (!$this->targetsScheduledForDeletion->isEmpty()) {
                    foreach ($this->targetsScheduledForDeletion as $target) {
                        // need to save related object because we set the relation to null
                        $target->save($con);
                    }
                    $this->targetsScheduledForDeletion = null;
                }
            }

            if ($this->collTargets !== null) {
                foreach ($this->collTargets as $referrerFK) {
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

        $this->modifiedColumns[] = UserPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UserPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UserPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UserPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(UserPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(UserPeer::SERVER)) {
            $modifiedColumns[':p' . $index++]  = '`server`';
        }
        if ($this->isColumnModified(UserPeer::PLAYERID)) {
            $modifiedColumns[':p' . $index++]  = '`playerid`';
        }
        if ($this->isColumnModified(UserPeer::PHONE)) {
            $modifiedColumns[':p' . $index++]  = '`phone`';
        }
        if ($this->isColumnModified(UserPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(UserPeer::SMS)) {
            $modifiedColumns[':p' . $index++]  = '`sms`';
        }
        if ($this->isColumnModified(UserPeer::IMPORT_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`import_status`';
        }
        if ($this->isColumnModified(UserPeer::IMPORT_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`import_date`';
        }

        $sql = sprintf(
            'INSERT INTO `user` (%s) VALUES (%s)',
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
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`password`':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`server`':
                        $stmt->bindValue($identifier, $this->server, PDO::PARAM_STR);
                        break;
                    case '`playerid`':
                        $stmt->bindValue($identifier, $this->playerid, PDO::PARAM_STR);
                        break;
                    case '`phone`':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`sms`':
                        $stmt->bindValue($identifier, (int) $this->sms, PDO::PARAM_INT);
                        break;
                    case '`import_status`':
                        $stmt->bindValue($identifier, $this->import_status, PDO::PARAM_INT);
                        break;
                    case '`import_date`':
                        $stmt->bindValue($identifier, $this->import_date, PDO::PARAM_STR);
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


            if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCastles !== null) {
                    foreach ($this->collCastles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCastleTypes !== null) {
                    foreach ($this->collCastleTypes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTimeTables !== null) {
                    foreach ($this->collTimeTables as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCastleLocations !== null) {
                    foreach ($this->collCastleLocations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTargets !== null) {
                    foreach ($this->collTargets as $referrerFK) {
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getPassword();
                break;
            case 3:
                return $this->getServer();
                break;
            case 4:
                return $this->getPlayerid();
                break;
            case 5:
                return $this->getPhone();
                break;
            case 6:
                return $this->getEmail();
                break;
            case 7:
                return $this->getSms();
                break;
            case 8:
                return $this->getImportStatus();
                break;
            case 9:
                return $this->getImportDate();
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
        if (isset($alreadyDumpedObjects['User'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['User'][$this->getPrimaryKey()] = true;
        $keys = UserPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getPassword(),
            $keys[3] => $this->getServer(),
            $keys[4] => $this->getPlayerid(),
            $keys[5] => $this->getPhone(),
            $keys[6] => $this->getEmail(),
            $keys[7] => $this->getSms(),
            $keys[8] => $this->getImportStatus(),
            $keys[9] => $this->getImportDate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCastles) {
                $result['Castles'] = $this->collCastles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCastleTypes) {
                $result['CastleTypes'] = $this->collCastleTypes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTimeTables) {
                $result['TimeTables'] = $this->collTimeTables->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCastleLocations) {
                $result['CastleLocations'] = $this->collCastleLocations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTargets) {
                $result['Targets'] = $this->collTargets->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setPassword($value);
                break;
            case 3:
                $this->setServer($value);
                break;
            case 4:
                $this->setPlayerid($value);
                break;
            case 5:
                $this->setPhone($value);
                break;
            case 6:
                $this->setEmail($value);
                break;
            case 7:
                $this->setSms($value);
                break;
            case 8:
                $this->setImportStatus($value);
                break;
            case 9:
                $this->setImportDate($value);
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
        $keys = UserPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPassword($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setServer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPlayerid($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPhone($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmail($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSms($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setImportStatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setImportDate($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UserPeer::DATABASE_NAME);

        if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);
        if ($this->isColumnModified(UserPeer::NAME)) $criteria->add(UserPeer::NAME, $this->name);
        if ($this->isColumnModified(UserPeer::PASSWORD)) $criteria->add(UserPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(UserPeer::SERVER)) $criteria->add(UserPeer::SERVER, $this->server);
        if ($this->isColumnModified(UserPeer::PLAYERID)) $criteria->add(UserPeer::PLAYERID, $this->playerid);
        if ($this->isColumnModified(UserPeer::PHONE)) $criteria->add(UserPeer::PHONE, $this->phone);
        if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
        if ($this->isColumnModified(UserPeer::SMS)) $criteria->add(UserPeer::SMS, $this->sms);
        if ($this->isColumnModified(UserPeer::IMPORT_STATUS)) $criteria->add(UserPeer::IMPORT_STATUS, $this->import_status);
        if ($this->isColumnModified(UserPeer::IMPORT_DATE)) $criteria->add(UserPeer::IMPORT_DATE, $this->import_date);

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
        $criteria = new Criteria(UserPeer::DATABASE_NAME);
        $criteria->add(UserPeer::ID, $this->id);

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
     * @param object $copyObj An object of User (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setServer($this->getServer());
        $copyObj->setPlayerid($this->getPlayerid());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setSms($this->getSms());
        $copyObj->setImportStatus($this->getImportStatus());
        $copyObj->setImportDate($this->getImportDate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCastles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCastle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCastleTypes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCastleType($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTimeTables() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTimeTable($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCastleLocations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCastleLocation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTargets() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTarget($relObj->copy($deepCopy));
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
     * @return User Clone of current object.
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
     * @return UserPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UserPeer();
        }

        return self::$peer;
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
        if ('Castle' == $relationName) {
            $this->initCastles();
        }
        if ('CastleType' == $relationName) {
            $this->initCastleTypes();
        }
        if ('TimeTable' == $relationName) {
            $this->initTimeTables();
        }
        if ('CastleLocation' == $relationName) {
            $this->initCastleLocations();
        }
        if ('Target' == $relationName) {
            $this->initTargets();
        }
    }

    /**
     * Clears out the collCastles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addCastles()
     */
    public function clearCastles()
    {
        $this->collCastles = null; // important to set this to null since that means it is uninitialized
        $this->collCastlesPartial = null;

        return $this;
    }

    /**
     * reset is the collCastles collection loaded partially
     *
     * @return void
     */
    public function resetPartialCastles($v = true)
    {
        $this->collCastlesPartial = $v;
    }

    /**
     * Initializes the collCastles collection.
     *
     * By default this just sets the collCastles collection to an empty array (like clearcollCastles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCastles($overrideExisting = true)
    {
        if (null !== $this->collCastles && !$overrideExisting) {
            return;
        }
        $this->collCastles = new PropelObjectCollection();
        $this->collCastles->setModel('Castle');
    }

    /**
     * Gets an array of Castle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Castle[] List of Castle objects
     * @throws PropelException
     */
    public function getCastles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCastlesPartial && !$this->isNew();
        if (null === $this->collCastles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCastles) {
                // return empty collection
                $this->initCastles();
            } else {
                $collCastles = CastleQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCastlesPartial && count($collCastles)) {
                      $this->initCastles(false);

                      foreach ($collCastles as $obj) {
                        if (false == $this->collCastles->contains($obj)) {
                          $this->collCastles->append($obj);
                        }
                      }

                      $this->collCastlesPartial = true;
                    }

                    $collCastles->getInternalIterator()->rewind();

                    return $collCastles;
                }

                if ($partial && $this->collCastles) {
                    foreach ($this->collCastles as $obj) {
                        if ($obj->isNew()) {
                            $collCastles[] = $obj;
                        }
                    }
                }

                $this->collCastles = $collCastles;
                $this->collCastlesPartial = false;
            }
        }

        return $this->collCastles;
    }

    /**
     * Sets a collection of Castle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setCastles(PropelCollection $castles, PropelPDO $con = null)
    {
        $castlesToDelete = $this->getCastles(new Criteria(), $con)->diff($castles);


        $this->castlesScheduledForDeletion = $castlesToDelete;

        foreach ($castlesToDelete as $castleRemoved) {
            $castleRemoved->setUser(null);
        }

        $this->collCastles = null;
        foreach ($castles as $castle) {
            $this->addCastle($castle);
        }

        $this->collCastles = $castles;
        $this->collCastlesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Castle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Castle objects.
     * @throws PropelException
     */
    public function countCastles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCastlesPartial && !$this->isNew();
        if (null === $this->collCastles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCastles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCastles());
            }
            $query = CastleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collCastles);
    }

    /**
     * Method called to associate a Castle object to this object
     * through the Castle foreign key attribute.
     *
     * @param    Castle $l Castle
     * @return User The current object (for fluent API support)
     */
    public function addCastle(Castle $l)
    {
        if ($this->collCastles === null) {
            $this->initCastles();
            $this->collCastlesPartial = true;
        }

        if (!in_array($l, $this->collCastles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCastle($l);

            if ($this->castlesScheduledForDeletion and $this->castlesScheduledForDeletion->contains($l)) {
                $this->castlesScheduledForDeletion->remove($this->castlesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Castle $castle The castle object to add.
     */
    protected function doAddCastle($castle)
    {
        $this->collCastles[]= $castle;
        $castle->setUser($this);
    }

    /**
     * @param	Castle $castle The castle object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeCastle($castle)
    {
        if ($this->getCastles()->contains($castle)) {
            $this->collCastles->remove($this->collCastles->search($castle));
            if (null === $this->castlesScheduledForDeletion) {
                $this->castlesScheduledForDeletion = clone $this->collCastles;
                $this->castlesScheduledForDeletion->clear();
            }
            $this->castlesScheduledForDeletion[]= $castle;
            $castle->setUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Castles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Castle[] List of Castle objects
     */
    public function getCastlesJoinCastleType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CastleQuery::create(null, $criteria);
        $query->joinWith('CastleType', $join_behavior);

        return $this->getCastles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this User is new, it will return
     * an empty collection; or if this User has previously
     * been saved, it will retrieve related Castles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in User.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Castle[] List of Castle objects
     */
    public function getCastlesJoinCastleLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CastleQuery::create(null, $criteria);
        $query->joinWith('CastleLocation', $join_behavior);

        return $this->getCastles($query, $con);
    }

    /**
     * Clears out the collCastleTypes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addCastleTypes()
     */
    public function clearCastleTypes()
    {
        $this->collCastleTypes = null; // important to set this to null since that means it is uninitialized
        $this->collCastleTypesPartial = null;

        return $this;
    }

    /**
     * reset is the collCastleTypes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCastleTypes($v = true)
    {
        $this->collCastleTypesPartial = $v;
    }

    /**
     * Initializes the collCastleTypes collection.
     *
     * By default this just sets the collCastleTypes collection to an empty array (like clearcollCastleTypes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCastleTypes($overrideExisting = true)
    {
        if (null !== $this->collCastleTypes && !$overrideExisting) {
            return;
        }
        $this->collCastleTypes = new PropelObjectCollection();
        $this->collCastleTypes->setModel('CastleType');
    }

    /**
     * Gets an array of CastleType objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CastleType[] List of CastleType objects
     * @throws PropelException
     */
    public function getCastleTypes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCastleTypesPartial && !$this->isNew();
        if (null === $this->collCastleTypes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCastleTypes) {
                // return empty collection
                $this->initCastleTypes();
            } else {
                $collCastleTypes = CastleTypeQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCastleTypesPartial && count($collCastleTypes)) {
                      $this->initCastleTypes(false);

                      foreach ($collCastleTypes as $obj) {
                        if (false == $this->collCastleTypes->contains($obj)) {
                          $this->collCastleTypes->append($obj);
                        }
                      }

                      $this->collCastleTypesPartial = true;
                    }

                    $collCastleTypes->getInternalIterator()->rewind();

                    return $collCastleTypes;
                }

                if ($partial && $this->collCastleTypes) {
                    foreach ($this->collCastleTypes as $obj) {
                        if ($obj->isNew()) {
                            $collCastleTypes[] = $obj;
                        }
                    }
                }

                $this->collCastleTypes = $collCastleTypes;
                $this->collCastleTypesPartial = false;
            }
        }

        return $this->collCastleTypes;
    }

    /**
     * Sets a collection of CastleType objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castleTypes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setCastleTypes(PropelCollection $castleTypes, PropelPDO $con = null)
    {
        $castleTypesToDelete = $this->getCastleTypes(new Criteria(), $con)->diff($castleTypes);


        $this->castleTypesScheduledForDeletion = $castleTypesToDelete;

        foreach ($castleTypesToDelete as $castleTypeRemoved) {
            $castleTypeRemoved->setUser(null);
        }

        $this->collCastleTypes = null;
        foreach ($castleTypes as $castleType) {
            $this->addCastleType($castleType);
        }

        $this->collCastleTypes = $castleTypes;
        $this->collCastleTypesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CastleType objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CastleType objects.
     * @throws PropelException
     */
    public function countCastleTypes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCastleTypesPartial && !$this->isNew();
        if (null === $this->collCastleTypes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCastleTypes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCastleTypes());
            }
            $query = CastleTypeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collCastleTypes);
    }

    /**
     * Method called to associate a CastleType object to this object
     * through the CastleType foreign key attribute.
     *
     * @param    CastleType $l CastleType
     * @return User The current object (for fluent API support)
     */
    public function addCastleType(CastleType $l)
    {
        if ($this->collCastleTypes === null) {
            $this->initCastleTypes();
            $this->collCastleTypesPartial = true;
        }

        if (!in_array($l, $this->collCastleTypes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCastleType($l);

            if ($this->castleTypesScheduledForDeletion and $this->castleTypesScheduledForDeletion->contains($l)) {
                $this->castleTypesScheduledForDeletion->remove($this->castleTypesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CastleType $castleType The castleType object to add.
     */
    protected function doAddCastleType($castleType)
    {
        $this->collCastleTypes[]= $castleType;
        $castleType->setUser($this);
    }

    /**
     * @param	CastleType $castleType The castleType object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeCastleType($castleType)
    {
        if ($this->getCastleTypes()->contains($castleType)) {
            $this->collCastleTypes->remove($this->collCastleTypes->search($castleType));
            if (null === $this->castleTypesScheduledForDeletion) {
                $this->castleTypesScheduledForDeletion = clone $this->collCastleTypes;
                $this->castleTypesScheduledForDeletion->clear();
            }
            $this->castleTypesScheduledForDeletion[]= $castleType;
            $castleType->setUser(null);
        }

        return $this;
    }

    /**
     * Clears out the collTimeTables collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addTimeTables()
     */
    public function clearTimeTables()
    {
        $this->collTimeTables = null; // important to set this to null since that means it is uninitialized
        $this->collTimeTablesPartial = null;

        return $this;
    }

    /**
     * reset is the collTimeTables collection loaded partially
     *
     * @return void
     */
    public function resetPartialTimeTables($v = true)
    {
        $this->collTimeTablesPartial = $v;
    }

    /**
     * Initializes the collTimeTables collection.
     *
     * By default this just sets the collTimeTables collection to an empty array (like clearcollTimeTables());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTimeTables($overrideExisting = true)
    {
        if (null !== $this->collTimeTables && !$overrideExisting) {
            return;
        }
        $this->collTimeTables = new PropelObjectCollection();
        $this->collTimeTables->setModel('TimeTable');
    }

    /**
     * Gets an array of TimeTable objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TimeTable[] List of TimeTable objects
     * @throws PropelException
     */
    public function getTimeTables($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTimeTablesPartial && !$this->isNew();
        if (null === $this->collTimeTables || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTimeTables) {
                // return empty collection
                $this->initTimeTables();
            } else {
                $collTimeTables = TimeTableQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTimeTablesPartial && count($collTimeTables)) {
                      $this->initTimeTables(false);

                      foreach ($collTimeTables as $obj) {
                        if (false == $this->collTimeTables->contains($obj)) {
                          $this->collTimeTables->append($obj);
                        }
                      }

                      $this->collTimeTablesPartial = true;
                    }

                    $collTimeTables->getInternalIterator()->rewind();

                    return $collTimeTables;
                }

                if ($partial && $this->collTimeTables) {
                    foreach ($this->collTimeTables as $obj) {
                        if ($obj->isNew()) {
                            $collTimeTables[] = $obj;
                        }
                    }
                }

                $this->collTimeTables = $collTimeTables;
                $this->collTimeTablesPartial = false;
            }
        }

        return $this->collTimeTables;
    }

    /**
     * Sets a collection of TimeTable objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $timeTables A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setTimeTables(PropelCollection $timeTables, PropelPDO $con = null)
    {
        $timeTablesToDelete = $this->getTimeTables(new Criteria(), $con)->diff($timeTables);


        $this->timeTablesScheduledForDeletion = $timeTablesToDelete;

        foreach ($timeTablesToDelete as $timeTableRemoved) {
            $timeTableRemoved->setUser(null);
        }

        $this->collTimeTables = null;
        foreach ($timeTables as $timeTable) {
            $this->addTimeTable($timeTable);
        }

        $this->collTimeTables = $timeTables;
        $this->collTimeTablesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TimeTable objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TimeTable objects.
     * @throws PropelException
     */
    public function countTimeTables(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTimeTablesPartial && !$this->isNew();
        if (null === $this->collTimeTables || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTimeTables) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTimeTables());
            }
            $query = TimeTableQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collTimeTables);
    }

    /**
     * Method called to associate a TimeTable object to this object
     * through the TimeTable foreign key attribute.
     *
     * @param    TimeTable $l TimeTable
     * @return User The current object (for fluent API support)
     */
    public function addTimeTable(TimeTable $l)
    {
        if ($this->collTimeTables === null) {
            $this->initTimeTables();
            $this->collTimeTablesPartial = true;
        }

        if (!in_array($l, $this->collTimeTables->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTimeTable($l);

            if ($this->timeTablesScheduledForDeletion and $this->timeTablesScheduledForDeletion->contains($l)) {
                $this->timeTablesScheduledForDeletion->remove($this->timeTablesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TimeTable $timeTable The timeTable object to add.
     */
    protected function doAddTimeTable($timeTable)
    {
        $this->collTimeTables[]= $timeTable;
        $timeTable->setUser($this);
    }

    /**
     * @param	TimeTable $timeTable The timeTable object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeTimeTable($timeTable)
    {
        if ($this->getTimeTables()->contains($timeTable)) {
            $this->collTimeTables->remove($this->collTimeTables->search($timeTable));
            if (null === $this->timeTablesScheduledForDeletion) {
                $this->timeTablesScheduledForDeletion = clone $this->collTimeTables;
                $this->timeTablesScheduledForDeletion->clear();
            }
            $this->timeTablesScheduledForDeletion[]= $timeTable;
            $timeTable->setUser(null);
        }

        return $this;
    }

    /**
     * Clears out the collCastleLocations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addCastleLocations()
     */
    public function clearCastleLocations()
    {
        $this->collCastleLocations = null; // important to set this to null since that means it is uninitialized
        $this->collCastleLocationsPartial = null;

        return $this;
    }

    /**
     * reset is the collCastleLocations collection loaded partially
     *
     * @return void
     */
    public function resetPartialCastleLocations($v = true)
    {
        $this->collCastleLocationsPartial = $v;
    }

    /**
     * Initializes the collCastleLocations collection.
     *
     * By default this just sets the collCastleLocations collection to an empty array (like clearcollCastleLocations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCastleLocations($overrideExisting = true)
    {
        if (null !== $this->collCastleLocations && !$overrideExisting) {
            return;
        }
        $this->collCastleLocations = new PropelObjectCollection();
        $this->collCastleLocations->setModel('CastleLocation');
    }

    /**
     * Gets an array of CastleLocation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CastleLocation[] List of CastleLocation objects
     * @throws PropelException
     */
    public function getCastleLocations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCastleLocationsPartial && !$this->isNew();
        if (null === $this->collCastleLocations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCastleLocations) {
                // return empty collection
                $this->initCastleLocations();
            } else {
                $collCastleLocations = CastleLocationQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCastleLocationsPartial && count($collCastleLocations)) {
                      $this->initCastleLocations(false);

                      foreach ($collCastleLocations as $obj) {
                        if (false == $this->collCastleLocations->contains($obj)) {
                          $this->collCastleLocations->append($obj);
                        }
                      }

                      $this->collCastleLocationsPartial = true;
                    }

                    $collCastleLocations->getInternalIterator()->rewind();

                    return $collCastleLocations;
                }

                if ($partial && $this->collCastleLocations) {
                    foreach ($this->collCastleLocations as $obj) {
                        if ($obj->isNew()) {
                            $collCastleLocations[] = $obj;
                        }
                    }
                }

                $this->collCastleLocations = $collCastleLocations;
                $this->collCastleLocationsPartial = false;
            }
        }

        return $this->collCastleLocations;
    }

    /**
     * Sets a collection of CastleLocation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castleLocations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setCastleLocations(PropelCollection $castleLocations, PropelPDO $con = null)
    {
        $castleLocationsToDelete = $this->getCastleLocations(new Criteria(), $con)->diff($castleLocations);


        $this->castleLocationsScheduledForDeletion = $castleLocationsToDelete;

        foreach ($castleLocationsToDelete as $castleLocationRemoved) {
            $castleLocationRemoved->setUser(null);
        }

        $this->collCastleLocations = null;
        foreach ($castleLocations as $castleLocation) {
            $this->addCastleLocation($castleLocation);
        }

        $this->collCastleLocations = $castleLocations;
        $this->collCastleLocationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CastleLocation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CastleLocation objects.
     * @throws PropelException
     */
    public function countCastleLocations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCastleLocationsPartial && !$this->isNew();
        if (null === $this->collCastleLocations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCastleLocations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCastleLocations());
            }
            $query = CastleLocationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collCastleLocations);
    }

    /**
     * Method called to associate a CastleLocation object to this object
     * through the CastleLocation foreign key attribute.
     *
     * @param    CastleLocation $l CastleLocation
     * @return User The current object (for fluent API support)
     */
    public function addCastleLocation(CastleLocation $l)
    {
        if ($this->collCastleLocations === null) {
            $this->initCastleLocations();
            $this->collCastleLocationsPartial = true;
        }

        if (!in_array($l, $this->collCastleLocations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCastleLocation($l);

            if ($this->castleLocationsScheduledForDeletion and $this->castleLocationsScheduledForDeletion->contains($l)) {
                $this->castleLocationsScheduledForDeletion->remove($this->castleLocationsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CastleLocation $castleLocation The castleLocation object to add.
     */
    protected function doAddCastleLocation($castleLocation)
    {
        $this->collCastleLocations[]= $castleLocation;
        $castleLocation->setUser($this);
    }

    /**
     * @param	CastleLocation $castleLocation The castleLocation object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeCastleLocation($castleLocation)
    {
        if ($this->getCastleLocations()->contains($castleLocation)) {
            $this->collCastleLocations->remove($this->collCastleLocations->search($castleLocation));
            if (null === $this->castleLocationsScheduledForDeletion) {
                $this->castleLocationsScheduledForDeletion = clone $this->collCastleLocations;
                $this->castleLocationsScheduledForDeletion->clear();
            }
            $this->castleLocationsScheduledForDeletion[]= $castleLocation;
            $castleLocation->setUser(null);
        }

        return $this;
    }

    /**
     * Clears out the collTargets collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return User The current object (for fluent API support)
     * @see        addTargets()
     */
    public function clearTargets()
    {
        $this->collTargets = null; // important to set this to null since that means it is uninitialized
        $this->collTargetsPartial = null;

        return $this;
    }

    /**
     * reset is the collTargets collection loaded partially
     *
     * @return void
     */
    public function resetPartialTargets($v = true)
    {
        $this->collTargetsPartial = $v;
    }

    /**
     * Initializes the collTargets collection.
     *
     * By default this just sets the collTargets collection to an empty array (like clearcollTargets());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTargets($overrideExisting = true)
    {
        if (null !== $this->collTargets && !$overrideExisting) {
            return;
        }
        $this->collTargets = new PropelObjectCollection();
        $this->collTargets->setModel('Target');
    }

    /**
     * Gets an array of Target objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this User is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Target[] List of Target objects
     * @throws PropelException
     */
    public function getTargets($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTargetsPartial && !$this->isNew();
        if (null === $this->collTargets || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTargets) {
                // return empty collection
                $this->initTargets();
            } else {
                $collTargets = TargetQuery::create(null, $criteria)
                    ->filterByUser($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTargetsPartial && count($collTargets)) {
                      $this->initTargets(false);

                      foreach ($collTargets as $obj) {
                        if (false == $this->collTargets->contains($obj)) {
                          $this->collTargets->append($obj);
                        }
                      }

                      $this->collTargetsPartial = true;
                    }

                    $collTargets->getInternalIterator()->rewind();

                    return $collTargets;
                }

                if ($partial && $this->collTargets) {
                    foreach ($this->collTargets as $obj) {
                        if ($obj->isNew()) {
                            $collTargets[] = $obj;
                        }
                    }
                }

                $this->collTargets = $collTargets;
                $this->collTargetsPartial = false;
            }
        }

        return $this->collTargets;
    }

    /**
     * Sets a collection of Target objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $targets A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return User The current object (for fluent API support)
     */
    public function setTargets(PropelCollection $targets, PropelPDO $con = null)
    {
        $targetsToDelete = $this->getTargets(new Criteria(), $con)->diff($targets);


        $this->targetsScheduledForDeletion = $targetsToDelete;

        foreach ($targetsToDelete as $targetRemoved) {
            $targetRemoved->setUser(null);
        }

        $this->collTargets = null;
        foreach ($targets as $target) {
            $this->addTarget($target);
        }

        $this->collTargets = $targets;
        $this->collTargetsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Target objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Target objects.
     * @throws PropelException
     */
    public function countTargets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTargetsPartial && !$this->isNew();
        if (null === $this->collTargets || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTargets) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTargets());
            }
            $query = TargetQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUser($this)
                ->count($con);
        }

        return count($this->collTargets);
    }

    /**
     * Method called to associate a Target object to this object
     * through the Target foreign key attribute.
     *
     * @param    Target $l Target
     * @return User The current object (for fluent API support)
     */
    public function addTarget(Target $l)
    {
        if ($this->collTargets === null) {
            $this->initTargets();
            $this->collTargetsPartial = true;
        }

        if (!in_array($l, $this->collTargets->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTarget($l);

            if ($this->targetsScheduledForDeletion and $this->targetsScheduledForDeletion->contains($l)) {
                $this->targetsScheduledForDeletion->remove($this->targetsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Target $target The target object to add.
     */
    protected function doAddTarget($target)
    {
        $this->collTargets[]= $target;
        $target->setUser($this);
    }

    /**
     * @param	Target $target The target object to remove.
     * @return User The current object (for fluent API support)
     */
    public function removeTarget($target)
    {
        if ($this->getTargets()->contains($target)) {
            $this->collTargets->remove($this->collTargets->search($target));
            if (null === $this->targetsScheduledForDeletion) {
                $this->targetsScheduledForDeletion = clone $this->collTargets;
                $this->targetsScheduledForDeletion->clear();
            }
            $this->targetsScheduledForDeletion[]= $target;
            $target->setUser(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->password = null;
        $this->server = null;
        $this->playerid = null;
        $this->phone = null;
        $this->email = null;
        $this->sms = null;
        $this->import_status = null;
        $this->import_date = null;
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
            if ($this->collCastles) {
                foreach ($this->collCastles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCastleTypes) {
                foreach ($this->collCastleTypes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTimeTables) {
                foreach ($this->collTimeTables as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCastleLocations) {
                foreach ($this->collCastleLocations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTargets) {
                foreach ($this->collTargets as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCastles instanceof PropelCollection) {
            $this->collCastles->clearIterator();
        }
        $this->collCastles = null;
        if ($this->collCastleTypes instanceof PropelCollection) {
            $this->collCastleTypes->clearIterator();
        }
        $this->collCastleTypes = null;
        if ($this->collTimeTables instanceof PropelCollection) {
            $this->collTimeTables->clearIterator();
        }
        $this->collTimeTables = null;
        if ($this->collCastleLocations instanceof PropelCollection) {
            $this->collCastleLocations->clearIterator();
        }
        $this->collCastleLocations = null;
        if ($this->collTargets instanceof PropelCollection) {
            $this->collTargets->clearIterator();
        }
        $this->collTargets = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UserPeer::DEFAULT_STRING_FORMAT);
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

}

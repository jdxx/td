<?php


/**
 * Base class that represents a row from the 'attack' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseAttack extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AttackPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AttackPeer
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
     * The value for the attack_time field.
     * @var        string
     */
    protected $attack_time;

    /**
     * The value for the duration field.
     * @var        int
     */
    protected $duration;

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
     * @var        PropelObjectCollection|Castle2Attack[] Collection to store aggregation of Castle2Attack objects.
     */
    protected $collCastle2Attacks;
    protected $collCastle2AttacksPartial;

    /**
     * @var        PropelObjectCollection|Castle[] Collection to store aggregation of Castle objects.
     */
    protected $collCastles;

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
     * Get the [optionally formatted] temporal [attack_time] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAttackTime($format = 'Y-m-d H:i:s')
    {
        if ($this->attack_time === null) {
            return null;
        }

        if ($this->attack_time === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->attack_time);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->attack_time, true), $x);
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
     * Get the [duration] column value.
     * <998 = Anzahl Stunden; 998: bis zum Nachtmodus; 999: unendlich
     * @return int
     */
    public function getDuration()
    {

        return $this->duration;
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
     * @return Attack The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = AttackPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user] column.
     *
     * @param  int $v new value
     * @return Attack The current object (for fluent API support)
     */
    public function setUser($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user !== $v) {
            $this->user = $v;
            $this->modifiedColumns[] = AttackPeer::USER;
        }


        return $this;
    } // setUser()

    /**
     * Sets the value of [attack_time] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Attack The current object (for fluent API support)
     */
    public function setAttackTime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->attack_time !== null || $dt !== null) {
            $currentDateAsString = ($this->attack_time !== null && $tmpDt = new DateTime($this->attack_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->attack_time = $newDateAsString;
                $this->modifiedColumns[] = AttackPeer::ATTACK_TIME;
            }
        } // if either are not null


        return $this;
    } // setAttackTime()

    /**
     * Set the value of [duration] column.
     * <998 = Anzahl Stunden; 998: bis zum Nachtmodus; 999: unendlich
     * @param  int $v new value
     * @return Attack The current object (for fluent API support)
     */
    public function setDuration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duration !== $v) {
            $this->duration = $v;
            $this->modifiedColumns[] = AttackPeer::DURATION;
        }


        return $this;
    } // setDuration()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Attack The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = AttackPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Attack The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = AttackPeer::UPDATED_AT;
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
            $this->attack_time = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->duration = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->created_at = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->updated_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = AttackPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Attack object", $e);
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
            $con = Propel::getConnection(AttackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AttackPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCastle2Attacks = null;

            $this->collCastles = null;
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
            $con = Propel::getConnection(AttackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AttackQuery::create()
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
            $con = Propel::getConnection(AttackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(AttackPeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(AttackPeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(AttackPeer::UPDATED_AT)) {
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
                AttackPeer::addInstanceToPool($this);
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
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->castlesScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($pk, $remotePk);
                    }
                    Castle2AttackQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->castlesScheduledForDeletion = null;
                }

                foreach ($this->getCastles() as $castle) {
                    if ($castle->isModified()) {
                        $castle->save($con);
                    }
                }
            } elseif ($this->collCastles) {
                foreach ($this->collCastles as $castle) {
                    if ($castle->isModified()) {
                        $castle->save($con);
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

        $this->modifiedColumns[] = AttackPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AttackPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AttackPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(AttackPeer::USER)) {
            $modifiedColumns[':p' . $index++]  = '`user`';
        }
        if ($this->isColumnModified(AttackPeer::ATTACK_TIME)) {
            $modifiedColumns[':p' . $index++]  = '`attack_time`';
        }
        if ($this->isColumnModified(AttackPeer::DURATION)) {
            $modifiedColumns[':p' . $index++]  = '`duration`';
        }
        if ($this->isColumnModified(AttackPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(AttackPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `attack` (%s) VALUES (%s)',
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
                    case '`attack_time`':
                        $stmt->bindValue($identifier, $this->attack_time, PDO::PARAM_STR);
                        break;
                    case '`duration`':
                        $stmt->bindValue($identifier, $this->duration, PDO::PARAM_INT);
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


            if (($retval = AttackPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AttackPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAttackTime();
                break;
            case 3:
                return $this->getDuration();
                break;
            case 4:
                return $this->getCreatedAt();
                break;
            case 5:
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
        if (isset($alreadyDumpedObjects['Attack'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Attack'][$this->getPrimaryKey()] = true;
        $keys = AttackPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUser(),
            $keys[2] => $this->getAttackTime(),
            $keys[3] => $this->getDuration(),
            $keys[4] => $this->getCreatedAt(),
            $keys[5] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
        $pos = AttackPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAttackTime($value);
                break;
            case 3:
                $this->setDuration($value);
                break;
            case 4:
                $this->setCreatedAt($value);
                break;
            case 5:
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
        $keys = AttackPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUser($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAttackTime($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDuration($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUpdatedAt($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AttackPeer::DATABASE_NAME);

        if ($this->isColumnModified(AttackPeer::ID)) $criteria->add(AttackPeer::ID, $this->id);
        if ($this->isColumnModified(AttackPeer::USER)) $criteria->add(AttackPeer::USER, $this->user);
        if ($this->isColumnModified(AttackPeer::ATTACK_TIME)) $criteria->add(AttackPeer::ATTACK_TIME, $this->attack_time);
        if ($this->isColumnModified(AttackPeer::DURATION)) $criteria->add(AttackPeer::DURATION, $this->duration);
        if ($this->isColumnModified(AttackPeer::CREATED_AT)) $criteria->add(AttackPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(AttackPeer::UPDATED_AT)) $criteria->add(AttackPeer::UPDATED_AT, $this->updated_at);

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
        $criteria = new Criteria(AttackPeer::DATABASE_NAME);
        $criteria->add(AttackPeer::ID, $this->id);

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
     * @param object $copyObj An object of Attack (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUser($this->getUser());
        $copyObj->setAttackTime($this->getAttackTime());
        $copyObj->setDuration($this->getDuration());
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
     * @return Attack Clone of current object.
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
     * @return AttackPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AttackPeer();
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
     * @return Attack The current object (for fluent API support)
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
     * If this Attack is new, it will return
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
                    ->filterByAttack($this)
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
     * @return Attack The current object (for fluent API support)
     */
    public function setCastle2Attacks(PropelCollection $castle2Attacks, PropelPDO $con = null)
    {
        $castle2AttacksToDelete = $this->getCastle2Attacks(new Criteria(), $con)->diff($castle2Attacks);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->castle2AttacksScheduledForDeletion = clone $castle2AttacksToDelete;

        foreach ($castle2AttacksToDelete as $castle2AttackRemoved) {
            $castle2AttackRemoved->setAttack(null);
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
                ->filterByAttack($this)
                ->count($con);
        }

        return count($this->collCastle2Attacks);
    }

    /**
     * Method called to associate a Castle2Attack object to this object
     * through the Castle2Attack foreign key attribute.
     *
     * @param    Castle2Attack $l Castle2Attack
     * @return Attack The current object (for fluent API support)
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
        $castle2Attack->setAttack($this);
    }

    /**
     * @param	Castle2Attack $castle2Attack The castle2Attack object to remove.
     * @return Attack The current object (for fluent API support)
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
            $castle2Attack->setAttack(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Attack is new, it will return
     * an empty collection; or if this Attack has previously
     * been saved, it will retrieve related Castle2Attacks from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Attack.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Castle2Attack[] List of Castle2Attack objects
     */
    public function getCastle2AttacksJoinCastle($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = Castle2AttackQuery::create(null, $criteria);
        $query->joinWith('Castle', $join_behavior);

        return $this->getCastle2Attacks($query, $con);
    }

    /**
     * Clears out the collCastles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Attack The current object (for fluent API support)
     * @see        addCastles()
     */
    public function clearCastles()
    {
        $this->collCastles = null; // important to set this to null since that means it is uninitialized
        $this->collCastlesPartial = null;

        return $this;
    }

    /**
     * Initializes the collCastles collection.
     *
     * By default this just sets the collCastles collection to an empty collection (like clearCastles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initCastles()
    {
        $this->collCastles = new PropelObjectCollection();
        $this->collCastles->setModel('Castle');
    }

    /**
     * Gets a collection of Castle objects related by a many-to-many relationship
     * to the current object by way of the castle_2_attack cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Attack is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|Castle[] List of Castle objects
     */
    public function getCastles($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collCastles || null !== $criteria) {
            if ($this->isNew() && null === $this->collCastles) {
                // return empty collection
                $this->initCastles();
            } else {
                $collCastles = CastleQuery::create(null, $criteria)
                    ->filterByAttack($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collCastles;
                }
                $this->collCastles = $collCastles;
            }
        }

        return $this->collCastles;
    }

    /**
     * Sets a collection of Castle objects related by a many-to-many relationship
     * to the current object by way of the castle_2_attack cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Attack The current object (for fluent API support)
     */
    public function setCastles(PropelCollection $castles, PropelPDO $con = null)
    {
        $this->clearCastles();
        $currentCastles = $this->getCastles(null, $con);

        $this->castlesScheduledForDeletion = $currentCastles->diff($castles);

        foreach ($castles as $castle) {
            if (!$currentCastles->contains($castle)) {
                $this->doAddCastle($castle);
            }
        }

        $this->collCastles = $castles;

        return $this;
    }

    /**
     * Gets the number of Castle objects related by a many-to-many relationship
     * to the current object by way of the castle_2_attack cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related Castle objects
     */
    public function countCastles($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collCastles || null !== $criteria) {
            if ($this->isNew() && null === $this->collCastles) {
                return 0;
            } else {
                $query = CastleQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByAttack($this)
                    ->count($con);
            }
        } else {
            return count($this->collCastles);
        }
    }

    /**
     * Associate a Castle object to this object
     * through the castle_2_attack cross reference table.
     *
     * @param  Castle $castle The Castle2Attack object to relate
     * @return Attack The current object (for fluent API support)
     */
    public function addCastle(Castle $castle)
    {
        if ($this->collCastles === null) {
            $this->initCastles();
        }

        if (!$this->collCastles->contains($castle)) { // only add it if the **same** object is not already associated
            $this->doAddCastle($castle);
            $this->collCastles[] = $castle;

            if ($this->castlesScheduledForDeletion and $this->castlesScheduledForDeletion->contains($castle)) {
                $this->castlesScheduledForDeletion->remove($this->castlesScheduledForDeletion->search($castle));
            }
        }

        return $this;
    }

    /**
     * @param	Castle $castle The castle object to add.
     */
    protected function doAddCastle(Castle $castle)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$castle->getAttacks()->contains($this)) { $castle2Attack = new Castle2Attack();
            $castle2Attack->setCastle($castle);
            $this->addCastle2Attack($castle2Attack);

            $foreignCollection = $castle->getAttacks();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a Castle object to this object
     * through the castle_2_attack cross reference table.
     *
     * @param Castle $castle The Castle2Attack object to relate
     * @return Attack The current object (for fluent API support)
     */
    public function removeCastle(Castle $castle)
    {
        if ($this->getCastles()->contains($castle)) {
            $this->collCastles->remove($this->collCastles->search($castle));
            if (null === $this->castlesScheduledForDeletion) {
                $this->castlesScheduledForDeletion = clone $this->collCastles;
                $this->castlesScheduledForDeletion->clear();
            }
            $this->castlesScheduledForDeletion[]= $castle;
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
        $this->attack_time = null;
        $this->duration = null;
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
            if ($this->collCastles) {
                foreach ($this->collCastles as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCastle2Attacks instanceof PropelCollection) {
            $this->collCastle2Attacks->clearIterator();
        }
        $this->collCastle2Attacks = null;
        if ($this->collCastles instanceof PropelCollection) {
            $this->collCastles->clearIterator();
        }
        $this->collCastles = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AttackPeer::DEFAULT_STRING_FORMAT);
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
     * @return     Attack The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = AttackPeer::UPDATED_AT;

        return $this;
    }

}

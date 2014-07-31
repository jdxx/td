<?php


/**
 * Base class that represents a row from the 'target_actions' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseTargetActions extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TargetActionsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TargetActionsPeer
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
     * The value for the target_id field.
     * @var        int
     */
    protected $target_id;

    /**
     * The value for the castle_id field.
     * @var        int
     */
    protected $castle_id;

    /**
     * The value for the attack_silver field.
     * @var        int
     */
    protected $attack_silver;

    /**
     * The value for the attack_st field.
     * @var        boolean
     */
    protected $attack_st;

    /**
     * The value for the attack_sk field.
     * @var        boolean
     */
    protected $attack_sk;

    /**
     * The value for the attack_bs field.
     * @var        boolean
     */
    protected $attack_bs;

    /**
     * The value for the attack_as field.
     * @var        boolean
     */
    protected $attack_as;

    /**
     * The value for the attack_pr field.
     * @var        boolean
     */
    protected $attack_pr;

    /**
     * The value for the attack_lr field.
     * @var        boolean
     */
    protected $attack_lr;

    /**
     * The value for the attack_hk field.
     * @var        boolean
     */
    protected $attack_hk;

    /**
     * The value for the attack_ok field.
     * @var        boolean
     */
    protected $attack_ok;

    /**
     * @var        Target
     */
    protected $aTarget;

    /**
     * @var        Castle
     */
    protected $aCastle;

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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [target_id] column value.
     *
     * @return int
     */
    public function getTargetId()
    {

        return $this->target_id;
    }

    /**
     * Get the [castle_id] column value.
     *
     * @return int
     */
    public function getCastleId()
    {

        return $this->castle_id;
    }

    /**
     * Get the [attack_silver] column value.
     *
     * @return int
     */
    public function getAttackSilver()
    {

        return $this->attack_silver;
    }

    /**
     * Get the [attack_st] column value.
     *
     * @return boolean
     */
    public function getAttackSt()
    {

        return $this->attack_st;
    }

    /**
     * Get the [attack_sk] column value.
     *
     * @return boolean
     */
    public function getAttackSk()
    {

        return $this->attack_sk;
    }

    /**
     * Get the [attack_bs] column value.
     *
     * @return boolean
     */
    public function getAttackBs()
    {

        return $this->attack_bs;
    }

    /**
     * Get the [attack_as] column value.
     *
     * @return boolean
     */
    public function getAttackAs()
    {

        return $this->attack_as;
    }

    /**
     * Get the [attack_pr] column value.
     *
     * @return boolean
     */
    public function getAttackPr()
    {

        return $this->attack_pr;
    }

    /**
     * Get the [attack_lr] column value.
     *
     * @return boolean
     */
    public function getAttackLr()
    {

        return $this->attack_lr;
    }

    /**
     * Get the [attack_hk] column value.
     *
     * @return boolean
     */
    public function getAttackHk()
    {

        return $this->attack_hk;
    }

    /**
     * Get the [attack_ok] column value.
     *
     * @return boolean
     */
    public function getAttackOk()
    {

        return $this->attack_ok;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [target_id] column.
     *
     * @param  int $v new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setTargetId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->target_id !== $v) {
            $this->target_id = $v;
            $this->modifiedColumns[] = TargetActionsPeer::TARGET_ID;
        }

        if ($this->aTarget !== null && $this->aTarget->getId() !== $v) {
            $this->aTarget = null;
        }


        return $this;
    } // setTargetId()

    /**
     * Set the value of [castle_id] column.
     *
     * @param  int $v new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setCastleId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->castle_id !== $v) {
            $this->castle_id = $v;
            $this->modifiedColumns[] = TargetActionsPeer::CASTLE_ID;
        }

        if ($this->aCastle !== null && $this->aCastle->getId() !== $v) {
            $this->aCastle = null;
        }


        return $this;
    } // setCastleId()

    /**
     * Set the value of [attack_silver] column.
     *
     * @param  int $v new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackSilver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->attack_silver !== $v) {
            $this->attack_silver = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_SILVER;
        }


        return $this;
    } // setAttackSilver()

    /**
     * Sets the value of the [attack_st] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackSt($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_st !== $v) {
            $this->attack_st = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_ST;
        }


        return $this;
    } // setAttackSt()

    /**
     * Sets the value of the [attack_sk] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackSk($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_sk !== $v) {
            $this->attack_sk = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_SK;
        }


        return $this;
    } // setAttackSk()

    /**
     * Sets the value of the [attack_bs] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackBs($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_bs !== $v) {
            $this->attack_bs = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_BS;
        }


        return $this;
    } // setAttackBs()

    /**
     * Sets the value of the [attack_as] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackAs($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_as !== $v) {
            $this->attack_as = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_AS;
        }


        return $this;
    } // setAttackAs()

    /**
     * Sets the value of the [attack_pr] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackPr($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_pr !== $v) {
            $this->attack_pr = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_PR;
        }


        return $this;
    } // setAttackPr()

    /**
     * Sets the value of the [attack_lr] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackLr($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_lr !== $v) {
            $this->attack_lr = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_LR;
        }


        return $this;
    } // setAttackLr()

    /**
     * Sets the value of the [attack_hk] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackHk($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_hk !== $v) {
            $this->attack_hk = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_HK;
        }


        return $this;
    } // setAttackHk()

    /**
     * Sets the value of the [attack_ok] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return TargetActions The current object (for fluent API support)
     */
    public function setAttackOk($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->attack_ok !== $v) {
            $this->attack_ok = $v;
            $this->modifiedColumns[] = TargetActionsPeer::ATTACK_OK;
        }


        return $this;
    } // setAttackOk()

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
            $this->target_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->castle_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->attack_silver = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->attack_st = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->attack_sk = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->attack_bs = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->attack_as = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->attack_pr = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->attack_lr = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->attack_hk = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->attack_ok = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = TargetActionsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TargetActions object", $e);
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

        if ($this->aTarget !== null && $this->target_id !== $this->aTarget->getId()) {
            $this->aTarget = null;
        }
        if ($this->aCastle !== null && $this->castle_id !== $this->aCastle->getId()) {
            $this->aCastle = null;
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
            $con = Propel::getConnection(TargetActionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TargetActionsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTarget = null;
            $this->aCastle = null;
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
            $con = Propel::getConnection(TargetActionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TargetActionsQuery::create()
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
            $con = Propel::getConnection(TargetActionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TargetActionsPeer::addInstanceToPool($this);
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

            if ($this->aTarget !== null) {
                if ($this->aTarget->isModified() || $this->aTarget->isNew()) {
                    $affectedRows += $this->aTarget->save($con);
                }
                $this->setTarget($this->aTarget);
            }

            if ($this->aCastle !== null) {
                if ($this->aCastle->isModified() || $this->aCastle->isNew()) {
                    $affectedRows += $this->aCastle->save($con);
                }
                $this->setCastle($this->aCastle);
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

        $this->modifiedColumns[] = TargetActionsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TargetActionsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TargetActionsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(TargetActionsPeer::TARGET_ID)) {
            $modifiedColumns[':p' . $index++]  = '`target_id`';
        }
        if ($this->isColumnModified(TargetActionsPeer::CASTLE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`castle_id`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_SILVER)) {
            $modifiedColumns[':p' . $index++]  = '`attack_silver`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_ST)) {
            $modifiedColumns[':p' . $index++]  = '`attack_st`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_SK)) {
            $modifiedColumns[':p' . $index++]  = '`attack_sk`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_BS)) {
            $modifiedColumns[':p' . $index++]  = '`attack_bs`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_AS)) {
            $modifiedColumns[':p' . $index++]  = '`attack_as`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_PR)) {
            $modifiedColumns[':p' . $index++]  = '`attack_pr`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_LR)) {
            $modifiedColumns[':p' . $index++]  = '`attack_lr`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_HK)) {
            $modifiedColumns[':p' . $index++]  = '`attack_hk`';
        }
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_OK)) {
            $modifiedColumns[':p' . $index++]  = '`attack_ok`';
        }

        $sql = sprintf(
            'INSERT INTO `target_actions` (%s) VALUES (%s)',
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
                    case '`target_id`':
                        $stmt->bindValue($identifier, $this->target_id, PDO::PARAM_INT);
                        break;
                    case '`castle_id`':
                        $stmt->bindValue($identifier, $this->castle_id, PDO::PARAM_INT);
                        break;
                    case '`attack_silver`':
                        $stmt->bindValue($identifier, $this->attack_silver, PDO::PARAM_INT);
                        break;
                    case '`attack_st`':
                        $stmt->bindValue($identifier, (int) $this->attack_st, PDO::PARAM_INT);
                        break;
                    case '`attack_sk`':
                        $stmt->bindValue($identifier, (int) $this->attack_sk, PDO::PARAM_INT);
                        break;
                    case '`attack_bs`':
                        $stmt->bindValue($identifier, (int) $this->attack_bs, PDO::PARAM_INT);
                        break;
                    case '`attack_as`':
                        $stmt->bindValue($identifier, (int) $this->attack_as, PDO::PARAM_INT);
                        break;
                    case '`attack_pr`':
                        $stmt->bindValue($identifier, (int) $this->attack_pr, PDO::PARAM_INT);
                        break;
                    case '`attack_lr`':
                        $stmt->bindValue($identifier, (int) $this->attack_lr, PDO::PARAM_INT);
                        break;
                    case '`attack_hk`':
                        $stmt->bindValue($identifier, (int) $this->attack_hk, PDO::PARAM_INT);
                        break;
                    case '`attack_ok`':
                        $stmt->bindValue($identifier, (int) $this->attack_ok, PDO::PARAM_INT);
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

            if ($this->aTarget !== null) {
                if (!$this->aTarget->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTarget->getValidationFailures());
                }
            }

            if ($this->aCastle !== null) {
                if (!$this->aCastle->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCastle->getValidationFailures());
                }
            }


            if (($retval = TargetActionsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = TargetActionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTargetId();
                break;
            case 2:
                return $this->getCastleId();
                break;
            case 3:
                return $this->getAttackSilver();
                break;
            case 4:
                return $this->getAttackSt();
                break;
            case 5:
                return $this->getAttackSk();
                break;
            case 6:
                return $this->getAttackBs();
                break;
            case 7:
                return $this->getAttackAs();
                break;
            case 8:
                return $this->getAttackPr();
                break;
            case 9:
                return $this->getAttackLr();
                break;
            case 10:
                return $this->getAttackHk();
                break;
            case 11:
                return $this->getAttackOk();
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
        if (isset($alreadyDumpedObjects['TargetActions'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TargetActions'][$this->getPrimaryKey()] = true;
        $keys = TargetActionsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTargetId(),
            $keys[2] => $this->getCastleId(),
            $keys[3] => $this->getAttackSilver(),
            $keys[4] => $this->getAttackSt(),
            $keys[5] => $this->getAttackSk(),
            $keys[6] => $this->getAttackBs(),
            $keys[7] => $this->getAttackAs(),
            $keys[8] => $this->getAttackPr(),
            $keys[9] => $this->getAttackLr(),
            $keys[10] => $this->getAttackHk(),
            $keys[11] => $this->getAttackOk(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aTarget) {
                $result['Target'] = $this->aTarget->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCastle) {
                $result['Castle'] = $this->aCastle->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = TargetActionsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTargetId($value);
                break;
            case 2:
                $this->setCastleId($value);
                break;
            case 3:
                $this->setAttackSilver($value);
                break;
            case 4:
                $this->setAttackSt($value);
                break;
            case 5:
                $this->setAttackSk($value);
                break;
            case 6:
                $this->setAttackBs($value);
                break;
            case 7:
                $this->setAttackAs($value);
                break;
            case 8:
                $this->setAttackPr($value);
                break;
            case 9:
                $this->setAttackLr($value);
                break;
            case 10:
                $this->setAttackHk($value);
                break;
            case 11:
                $this->setAttackOk($value);
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
        $keys = TargetActionsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTargetId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCastleId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAttackSilver($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAttackSt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAttackSk($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAttackBs($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAttackAs($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAttackPr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAttackLr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAttackHk($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAttackOk($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TargetActionsPeer::DATABASE_NAME);

        if ($this->isColumnModified(TargetActionsPeer::ID)) $criteria->add(TargetActionsPeer::ID, $this->id);
        if ($this->isColumnModified(TargetActionsPeer::TARGET_ID)) $criteria->add(TargetActionsPeer::TARGET_ID, $this->target_id);
        if ($this->isColumnModified(TargetActionsPeer::CASTLE_ID)) $criteria->add(TargetActionsPeer::CASTLE_ID, $this->castle_id);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_SILVER)) $criteria->add(TargetActionsPeer::ATTACK_SILVER, $this->attack_silver);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_ST)) $criteria->add(TargetActionsPeer::ATTACK_ST, $this->attack_st);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_SK)) $criteria->add(TargetActionsPeer::ATTACK_SK, $this->attack_sk);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_BS)) $criteria->add(TargetActionsPeer::ATTACK_BS, $this->attack_bs);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_AS)) $criteria->add(TargetActionsPeer::ATTACK_AS, $this->attack_as);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_PR)) $criteria->add(TargetActionsPeer::ATTACK_PR, $this->attack_pr);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_LR)) $criteria->add(TargetActionsPeer::ATTACK_LR, $this->attack_lr);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_HK)) $criteria->add(TargetActionsPeer::ATTACK_HK, $this->attack_hk);
        if ($this->isColumnModified(TargetActionsPeer::ATTACK_OK)) $criteria->add(TargetActionsPeer::ATTACK_OK, $this->attack_ok);

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
        $criteria = new Criteria(TargetActionsPeer::DATABASE_NAME);
        $criteria->add(TargetActionsPeer::ID, $this->id);

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
     * @param object $copyObj An object of TargetActions (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTargetId($this->getTargetId());
        $copyObj->setCastleId($this->getCastleId());
        $copyObj->setAttackSilver($this->getAttackSilver());
        $copyObj->setAttackSt($this->getAttackSt());
        $copyObj->setAttackSk($this->getAttackSk());
        $copyObj->setAttackBs($this->getAttackBs());
        $copyObj->setAttackAs($this->getAttackAs());
        $copyObj->setAttackPr($this->getAttackPr());
        $copyObj->setAttackLr($this->getAttackLr());
        $copyObj->setAttackHk($this->getAttackHk());
        $copyObj->setAttackOk($this->getAttackOk());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return TargetActions Clone of current object.
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
     * @return TargetActionsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TargetActionsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Target object.
     *
     * @param                  Target $v
     * @return TargetActions The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTarget(Target $v = null)
    {
        if ($v === null) {
            $this->setTargetId(NULL);
        } else {
            $this->setTargetId($v->getId());
        }

        $this->aTarget = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Target object, it will not be re-added.
        if ($v !== null) {
            $v->addTargetActions($this);
        }


        return $this;
    }


    /**
     * Get the associated Target object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Target The associated Target object.
     * @throws PropelException
     */
    public function getTarget(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTarget === null && ($this->target_id !== null) && $doQuery) {
            $this->aTarget = TargetQuery::create()->findPk($this->target_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTarget->addTargetActionss($this);
             */
        }

        return $this->aTarget;
    }

    /**
     * Declares an association between this object and a Castle object.
     *
     * @param                  Castle $v
     * @return TargetActions The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCastle(Castle $v = null)
    {
        if ($v === null) {
            $this->setCastleId(NULL);
        } else {
            $this->setCastleId($v->getId());
        }

        $this->aCastle = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Castle object, it will not be re-added.
        if ($v !== null) {
            $v->addTargetActions($this);
        }


        return $this;
    }


    /**
     * Get the associated Castle object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Castle The associated Castle object.
     * @throws PropelException
     */
    public function getCastle(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCastle === null && ($this->castle_id !== null) && $doQuery) {
            $this->aCastle = CastleQuery::create()->findPk($this->castle_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCastle->addTargetActionss($this);
             */
        }

        return $this->aCastle;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->target_id = null;
        $this->castle_id = null;
        $this->attack_silver = null;
        $this->attack_st = null;
        $this->attack_sk = null;
        $this->attack_bs = null;
        $this->attack_as = null;
        $this->attack_pr = null;
        $this->attack_lr = null;
        $this->attack_hk = null;
        $this->attack_ok = null;
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
            if ($this->aTarget instanceof Persistent) {
              $this->aTarget->clearAllReferences($deep);
            }
            if ($this->aCastle instanceof Persistent) {
              $this->aCastle->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aTarget = null;
        $this->aCastle = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TargetActionsPeer::DEFAULT_STRING_FORMAT);
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

<?php


/**
 * Base class that represents a row from the 'castles' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastles extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CastlesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CastlesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        string
     */
    protected $id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

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
     * The value for the st field.
     * @var        int
     */
    protected $st;

    /**
     * The value for the asx field.
     * @var        int
     */
    protected $asx;

    /**
     * The value for the pr field.
     * @var        int
     */
    protected $pr;

    /**
     * The value for the sk field.
     * @var        int
     */
    protected $sk;

    /**
     * The value for the bs field.
     * @var        int
     */
    protected $bs;

    /**
     * The value for the lr field.
     * @var        int
     */
    protected $lr;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

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
     * The value for the server field.
     * @var        int
     */
    protected $server;

    /**
     * The value for the castle_groups_id field.
     * @var        int
     */
    protected $castle_groups_id;

    /**
     * @var        CastleGroups
     */
    protected $aCastleGroups;

    /**
     * @var        PropelObjectCollection|CastlesUnderAttack[] Collection to store aggregation of CastlesUnderAttack objects.
     */
    protected $collCastlesUnderAttacks;
    protected $collCastlesUnderAttacksPartial;

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
    protected $castlesUnderAttacksScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return string
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
     * Get the [st] column value.
     *
     * @return int
     */
    public function getSt()
    {

        return $this->st;
    }

    /**
     * Get the [asx] column value.
     *
     * @return int
     */
    public function getAsx()
    {

        return $this->asx;
    }

    /**
     * Get the [pr] column value.
     *
     * @return int
     */
    public function getPr()
    {

        return $this->pr;
    }

    /**
     * Get the [sk] column value.
     *
     * @return int
     */
    public function getSk()
    {

        return $this->sk;
    }

    /**
     * Get the [bs] column value.
     *
     * @return int
     */
    public function getBs()
    {

        return $this->bs;
    }

    /**
     * Get the [lr] column value.
     *
     * @return int
     */
    public function getLr()
    {

        return $this->lr;
    }

    /**
     * Get the [type] column value.
     * Def / Off / Mix
     * @return string
     */
    public function getType()
    {

        return $this->type;
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
     * Get the [server] column value.
     *
     * @return int
     */
    public function getServer()
    {

        return $this->server;
    }

    /**
     * Get the [castle_groups_id] column value.
     *
     * @return int
     */
    public function getCastleGroupsId()
    {

        return $this->castle_groups_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  string $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CastlesPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CastlesPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [silver] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setSilver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->silver !== $v) {
            $this->silver = $v;
            $this->modifiedColumns[] = CastlesPeer::SILVER;
        }


        return $this;
    } // setSilver()

    /**
     * Set the value of [copper] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setCopper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->copper !== $v) {
            $this->copper = $v;
            $this->modifiedColumns[] = CastlesPeer::COPPER;
        }


        return $this;
    } // setCopper()

    /**
     * Set the value of [st] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setSt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->st !== $v) {
            $this->st = $v;
            $this->modifiedColumns[] = CastlesPeer::ST;
        }


        return $this;
    } // setSt()

    /**
     * Set the value of [asx] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setAsx($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->asx !== $v) {
            $this->asx = $v;
            $this->modifiedColumns[] = CastlesPeer::ASX;
        }


        return $this;
    } // setAsx()

    /**
     * Set the value of [pr] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setPr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pr !== $v) {
            $this->pr = $v;
            $this->modifiedColumns[] = CastlesPeer::PR;
        }


        return $this;
    } // setPr()

    /**
     * Set the value of [sk] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sk !== $v) {
            $this->sk = $v;
            $this->modifiedColumns[] = CastlesPeer::SK;
        }


        return $this;
    } // setSk()

    /**
     * Set the value of [bs] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bs !== $v) {
            $this->bs = $v;
            $this->modifiedColumns[] = CastlesPeer::BS;
        }


        return $this;
    } // setBs()

    /**
     * Set the value of [lr] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lr !== $v) {
            $this->lr = $v;
            $this->modifiedColumns[] = CastlesPeer::LR;
        }


        return $this;
    } // setLr()

    /**
     * Set the value of [type] column.
     * Def / Off / Mix
     * @param  string $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CastlesPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [x] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setX($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->x !== $v) {
            $this->x = $v;
            $this->modifiedColumns[] = CastlesPeer::X;
        }


        return $this;
    } // setX()

    /**
     * Set the value of [y] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setY($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->y !== $v) {
            $this->y = $v;
            $this->modifiedColumns[] = CastlesPeer::Y;
        }


        return $this;
    } // setY()

    /**
     * Set the value of [server] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setServer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->server !== $v) {
            $this->server = $v;
            $this->modifiedColumns[] = CastlesPeer::SERVER;
        }


        return $this;
    } // setServer()

    /**
     * Set the value of [castle_groups_id] column.
     *
     * @param  int $v new value
     * @return Castles The current object (for fluent API support)
     */
    public function setCastleGroupsId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->castle_groups_id !== $v) {
            $this->castle_groups_id = $v;
            $this->modifiedColumns[] = CastlesPeer::CASTLE_GROUPS_ID;
        }

        if ($this->aCastleGroups !== null && $this->aCastleGroups->getId() !== $v) {
            $this->aCastleGroups = null;
        }


        return $this;
    } // setCastleGroupsId()

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

            $this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->silver = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->copper = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->st = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->asx = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->pr = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->sk = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->bs = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->lr = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->type = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->x = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->y = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->server = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->castle_groups_id = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CastlesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Castles object", $e);
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

        if ($this->aCastleGroups !== null && $this->castle_groups_id !== $this->aCastleGroups->getId()) {
            $this->aCastleGroups = null;
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
            $con = Propel::getConnection(CastlesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CastlesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCastleGroups = null;
            $this->collCastlesUnderAttacks = null;

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
            $con = Propel::getConnection(CastlesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CastlesQuery::create()
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
            $con = Propel::getConnection(CastlesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CastlesPeer::addInstanceToPool($this);
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

            if ($this->aCastleGroups !== null) {
                if ($this->aCastleGroups->isModified() || $this->aCastleGroups->isNew()) {
                    $affectedRows += $this->aCastleGroups->save($con);
                }
                $this->setCastleGroups($this->aCastleGroups);
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
                    CastlesUnderAttackQuery::create()
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

            if ($this->castlesUnderAttacksScheduledForDeletion !== null) {
                if (!$this->castlesUnderAttacksScheduledForDeletion->isEmpty()) {
                    CastlesUnderAttackQuery::create()
                        ->filterByPrimaryKeys($this->castlesUnderAttacksScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->castlesUnderAttacksScheduledForDeletion = null;
                }
            }

            if ($this->collCastlesUnderAttacks !== null) {
                foreach ($this->collCastlesUnderAttacks as $referrerFK) {
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

        $this->modifiedColumns[] = CastlesPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CastlesPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CastlesPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CastlesPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(CastlesPeer::SILVER)) {
            $modifiedColumns[':p' . $index++]  = '`silver`';
        }
        if ($this->isColumnModified(CastlesPeer::COPPER)) {
            $modifiedColumns[':p' . $index++]  = '`copper`';
        }
        if ($this->isColumnModified(CastlesPeer::ST)) {
            $modifiedColumns[':p' . $index++]  = '`st`';
        }
        if ($this->isColumnModified(CastlesPeer::ASX)) {
            $modifiedColumns[':p' . $index++]  = '`asx`';
        }
        if ($this->isColumnModified(CastlesPeer::PR)) {
            $modifiedColumns[':p' . $index++]  = '`pr`';
        }
        if ($this->isColumnModified(CastlesPeer::SK)) {
            $modifiedColumns[':p' . $index++]  = '`sk`';
        }
        if ($this->isColumnModified(CastlesPeer::BS)) {
            $modifiedColumns[':p' . $index++]  = '`bs`';
        }
        if ($this->isColumnModified(CastlesPeer::LR)) {
            $modifiedColumns[':p' . $index++]  = '`lr`';
        }
        if ($this->isColumnModified(CastlesPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CastlesPeer::X)) {
            $modifiedColumns[':p' . $index++]  = '`X`';
        }
        if ($this->isColumnModified(CastlesPeer::Y)) {
            $modifiedColumns[':p' . $index++]  = '`Y`';
        }
        if ($this->isColumnModified(CastlesPeer::SERVER)) {
            $modifiedColumns[':p' . $index++]  = '`server`';
        }
        if ($this->isColumnModified(CastlesPeer::CASTLE_GROUPS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`castle_groups_id`';
        }

        $sql = sprintf(
            'INSERT INTO `castles` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`silver`':
                        $stmt->bindValue($identifier, $this->silver, PDO::PARAM_INT);
                        break;
                    case '`copper`':
                        $stmt->bindValue($identifier, $this->copper, PDO::PARAM_INT);
                        break;
                    case '`st`':
                        $stmt->bindValue($identifier, $this->st, PDO::PARAM_INT);
                        break;
                    case '`asx`':
                        $stmt->bindValue($identifier, $this->asx, PDO::PARAM_INT);
                        break;
                    case '`pr`':
                        $stmt->bindValue($identifier, $this->pr, PDO::PARAM_INT);
                        break;
                    case '`sk`':
                        $stmt->bindValue($identifier, $this->sk, PDO::PARAM_INT);
                        break;
                    case '`bs`':
                        $stmt->bindValue($identifier, $this->bs, PDO::PARAM_INT);
                        break;
                    case '`lr`':
                        $stmt->bindValue($identifier, $this->lr, PDO::PARAM_INT);
                        break;
                    case '`type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`X`':
                        $stmt->bindValue($identifier, $this->x, PDO::PARAM_INT);
                        break;
                    case '`Y`':
                        $stmt->bindValue($identifier, $this->y, PDO::PARAM_INT);
                        break;
                    case '`server`':
                        $stmt->bindValue($identifier, $this->server, PDO::PARAM_INT);
                        break;
                    case '`castle_groups_id`':
                        $stmt->bindValue($identifier, $this->castle_groups_id, PDO::PARAM_INT);
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

            if ($this->aCastleGroups !== null) {
                if (!$this->aCastleGroups->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCastleGroups->getValidationFailures());
                }
            }


            if (($retval = CastlesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCastlesUnderAttacks !== null) {
                    foreach ($this->collCastlesUnderAttacks as $referrerFK) {
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
        $pos = CastlesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSilver();
                break;
            case 3:
                return $this->getCopper();
                break;
            case 4:
                return $this->getSt();
                break;
            case 5:
                return $this->getAsx();
                break;
            case 6:
                return $this->getPr();
                break;
            case 7:
                return $this->getSk();
                break;
            case 8:
                return $this->getBs();
                break;
            case 9:
                return $this->getLr();
                break;
            case 10:
                return $this->getType();
                break;
            case 11:
                return $this->getX();
                break;
            case 12:
                return $this->getY();
                break;
            case 13:
                return $this->getServer();
                break;
            case 14:
                return $this->getCastleGroupsId();
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
        if (isset($alreadyDumpedObjects['Castles'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Castles'][$this->getPrimaryKey()] = true;
        $keys = CastlesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getSilver(),
            $keys[3] => $this->getCopper(),
            $keys[4] => $this->getSt(),
            $keys[5] => $this->getAsx(),
            $keys[6] => $this->getPr(),
            $keys[7] => $this->getSk(),
            $keys[8] => $this->getBs(),
            $keys[9] => $this->getLr(),
            $keys[10] => $this->getType(),
            $keys[11] => $this->getX(),
            $keys[12] => $this->getY(),
            $keys[13] => $this->getServer(),
            $keys[14] => $this->getCastleGroupsId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCastleGroups) {
                $result['CastleGroups'] = $this->aCastleGroups->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCastlesUnderAttacks) {
                $result['CastlesUnderAttacks'] = $this->collCastlesUnderAttacks->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CastlesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSilver($value);
                break;
            case 3:
                $this->setCopper($value);
                break;
            case 4:
                $this->setSt($value);
                break;
            case 5:
                $this->setAsx($value);
                break;
            case 6:
                $this->setPr($value);
                break;
            case 7:
                $this->setSk($value);
                break;
            case 8:
                $this->setBs($value);
                break;
            case 9:
                $this->setLr($value);
                break;
            case 10:
                $this->setType($value);
                break;
            case 11:
                $this->setX($value);
                break;
            case 12:
                $this->setY($value);
                break;
            case 13:
                $this->setServer($value);
                break;
            case 14:
                $this->setCastleGroupsId($value);
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
        $keys = CastlesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSilver($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCopper($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAsx($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSk($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setBs($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setType($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setX($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setY($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setServer($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCastleGroupsId($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CastlesPeer::DATABASE_NAME);

        if ($this->isColumnModified(CastlesPeer::ID)) $criteria->add(CastlesPeer::ID, $this->id);
        if ($this->isColumnModified(CastlesPeer::NAME)) $criteria->add(CastlesPeer::NAME, $this->name);
        if ($this->isColumnModified(CastlesPeer::SILVER)) $criteria->add(CastlesPeer::SILVER, $this->silver);
        if ($this->isColumnModified(CastlesPeer::COPPER)) $criteria->add(CastlesPeer::COPPER, $this->copper);
        if ($this->isColumnModified(CastlesPeer::ST)) $criteria->add(CastlesPeer::ST, $this->st);
        if ($this->isColumnModified(CastlesPeer::ASX)) $criteria->add(CastlesPeer::ASX, $this->asx);
        if ($this->isColumnModified(CastlesPeer::PR)) $criteria->add(CastlesPeer::PR, $this->pr);
        if ($this->isColumnModified(CastlesPeer::SK)) $criteria->add(CastlesPeer::SK, $this->sk);
        if ($this->isColumnModified(CastlesPeer::BS)) $criteria->add(CastlesPeer::BS, $this->bs);
        if ($this->isColumnModified(CastlesPeer::LR)) $criteria->add(CastlesPeer::LR, $this->lr);
        if ($this->isColumnModified(CastlesPeer::TYPE)) $criteria->add(CastlesPeer::TYPE, $this->type);
        if ($this->isColumnModified(CastlesPeer::X)) $criteria->add(CastlesPeer::X, $this->x);
        if ($this->isColumnModified(CastlesPeer::Y)) $criteria->add(CastlesPeer::Y, $this->y);
        if ($this->isColumnModified(CastlesPeer::SERVER)) $criteria->add(CastlesPeer::SERVER, $this->server);
        if ($this->isColumnModified(CastlesPeer::CASTLE_GROUPS_ID)) $criteria->add(CastlesPeer::CASTLE_GROUPS_ID, $this->castle_groups_id);

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
        $criteria = new Criteria(CastlesPeer::DATABASE_NAME);
        $criteria->add(CastlesPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  string $key Primary key.
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
     * @param object $copyObj An object of Castles (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setSilver($this->getSilver());
        $copyObj->setCopper($this->getCopper());
        $copyObj->setSt($this->getSt());
        $copyObj->setAsx($this->getAsx());
        $copyObj->setPr($this->getPr());
        $copyObj->setSk($this->getSk());
        $copyObj->setBs($this->getBs());
        $copyObj->setLr($this->getLr());
        $copyObj->setType($this->getType());
        $copyObj->setX($this->getX());
        $copyObj->setY($this->getY());
        $copyObj->setServer($this->getServer());
        $copyObj->setCastleGroupsId($this->getCastleGroupsId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCastlesUnderAttacks() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCastlesUnderAttack($relObj->copy($deepCopy));
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
     * @return Castles Clone of current object.
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
     * @return CastlesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CastlesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CastleGroups object.
     *
     * @param                  CastleGroups $v
     * @return Castles The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCastleGroups(CastleGroups $v = null)
    {
        if ($v === null) {
            $this->setCastleGroupsId(NULL);
        } else {
            $this->setCastleGroupsId($v->getId());
        }

        $this->aCastleGroups = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CastleGroups object, it will not be re-added.
        if ($v !== null) {
            $v->addCastles($this);
        }


        return $this;
    }


    /**
     * Get the associated CastleGroups object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CastleGroups The associated CastleGroups object.
     * @throws PropelException
     */
    public function getCastleGroups(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCastleGroups === null && ($this->castle_groups_id !== null) && $doQuery) {
            $this->aCastleGroups = CastleGroupsQuery::create()->findPk($this->castle_groups_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCastleGroups->addCastless($this);
             */
        }

        return $this->aCastleGroups;
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
        if ('CastlesUnderAttack' == $relationName) {
            $this->initCastlesUnderAttacks();
        }
    }

    /**
     * Clears out the collCastlesUnderAttacks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Castles The current object (for fluent API support)
     * @see        addCastlesUnderAttacks()
     */
    public function clearCastlesUnderAttacks()
    {
        $this->collCastlesUnderAttacks = null; // important to set this to null since that means it is uninitialized
        $this->collCastlesUnderAttacksPartial = null;

        return $this;
    }

    /**
     * reset is the collCastlesUnderAttacks collection loaded partially
     *
     * @return void
     */
    public function resetPartialCastlesUnderAttacks($v = true)
    {
        $this->collCastlesUnderAttacksPartial = $v;
    }

    /**
     * Initializes the collCastlesUnderAttacks collection.
     *
     * By default this just sets the collCastlesUnderAttacks collection to an empty array (like clearcollCastlesUnderAttacks());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCastlesUnderAttacks($overrideExisting = true)
    {
        if (null !== $this->collCastlesUnderAttacks && !$overrideExisting) {
            return;
        }
        $this->collCastlesUnderAttacks = new PropelObjectCollection();
        $this->collCastlesUnderAttacks->setModel('CastlesUnderAttack');
    }

    /**
     * Gets an array of CastlesUnderAttack objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Castles is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CastlesUnderAttack[] List of CastlesUnderAttack objects
     * @throws PropelException
     */
    public function getCastlesUnderAttacks($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCastlesUnderAttacksPartial && !$this->isNew();
        if (null === $this->collCastlesUnderAttacks || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCastlesUnderAttacks) {
                // return empty collection
                $this->initCastlesUnderAttacks();
            } else {
                $collCastlesUnderAttacks = CastlesUnderAttackQuery::create(null, $criteria)
                    ->filterByCastles($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCastlesUnderAttacksPartial && count($collCastlesUnderAttacks)) {
                      $this->initCastlesUnderAttacks(false);

                      foreach ($collCastlesUnderAttacks as $obj) {
                        if (false == $this->collCastlesUnderAttacks->contains($obj)) {
                          $this->collCastlesUnderAttacks->append($obj);
                        }
                      }

                      $this->collCastlesUnderAttacksPartial = true;
                    }

                    $collCastlesUnderAttacks->getInternalIterator()->rewind();

                    return $collCastlesUnderAttacks;
                }

                if ($partial && $this->collCastlesUnderAttacks) {
                    foreach ($this->collCastlesUnderAttacks as $obj) {
                        if ($obj->isNew()) {
                            $collCastlesUnderAttacks[] = $obj;
                        }
                    }
                }

                $this->collCastlesUnderAttacks = $collCastlesUnderAttacks;
                $this->collCastlesUnderAttacksPartial = false;
            }
        }

        return $this->collCastlesUnderAttacks;
    }

    /**
     * Sets a collection of CastlesUnderAttack objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castlesUnderAttacks A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Castles The current object (for fluent API support)
     */
    public function setCastlesUnderAttacks(PropelCollection $castlesUnderAttacks, PropelPDO $con = null)
    {
        $castlesUnderAttacksToDelete = $this->getCastlesUnderAttacks(new Criteria(), $con)->diff($castlesUnderAttacks);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->castlesUnderAttacksScheduledForDeletion = clone $castlesUnderAttacksToDelete;

        foreach ($castlesUnderAttacksToDelete as $castlesUnderAttackRemoved) {
            $castlesUnderAttackRemoved->setCastles(null);
        }

        $this->collCastlesUnderAttacks = null;
        foreach ($castlesUnderAttacks as $castlesUnderAttack) {
            $this->addCastlesUnderAttack($castlesUnderAttack);
        }

        $this->collCastlesUnderAttacks = $castlesUnderAttacks;
        $this->collCastlesUnderAttacksPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CastlesUnderAttack objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CastlesUnderAttack objects.
     * @throws PropelException
     */
    public function countCastlesUnderAttacks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCastlesUnderAttacksPartial && !$this->isNew();
        if (null === $this->collCastlesUnderAttacks || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCastlesUnderAttacks) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCastlesUnderAttacks());
            }
            $query = CastlesUnderAttackQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCastles($this)
                ->count($con);
        }

        return count($this->collCastlesUnderAttacks);
    }

    /**
     * Method called to associate a CastlesUnderAttack object to this object
     * through the CastlesUnderAttack foreign key attribute.
     *
     * @param    CastlesUnderAttack $l CastlesUnderAttack
     * @return Castles The current object (for fluent API support)
     */
    public function addCastlesUnderAttack(CastlesUnderAttack $l)
    {
        if ($this->collCastlesUnderAttacks === null) {
            $this->initCastlesUnderAttacks();
            $this->collCastlesUnderAttacksPartial = true;
        }

        if (!in_array($l, $this->collCastlesUnderAttacks->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCastlesUnderAttack($l);

            if ($this->castlesUnderAttacksScheduledForDeletion and $this->castlesUnderAttacksScheduledForDeletion->contains($l)) {
                $this->castlesUnderAttacksScheduledForDeletion->remove($this->castlesUnderAttacksScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CastlesUnderAttack $castlesUnderAttack The castlesUnderAttack object to add.
     */
    protected function doAddCastlesUnderAttack($castlesUnderAttack)
    {
        $this->collCastlesUnderAttacks[]= $castlesUnderAttack;
        $castlesUnderAttack->setCastles($this);
    }

    /**
     * @param	CastlesUnderAttack $castlesUnderAttack The castlesUnderAttack object to remove.
     * @return Castles The current object (for fluent API support)
     */
    public function removeCastlesUnderAttack($castlesUnderAttack)
    {
        if ($this->getCastlesUnderAttacks()->contains($castlesUnderAttack)) {
            $this->collCastlesUnderAttacks->remove($this->collCastlesUnderAttacks->search($castlesUnderAttack));
            if (null === $this->castlesUnderAttacksScheduledForDeletion) {
                $this->castlesUnderAttacksScheduledForDeletion = clone $this->collCastlesUnderAttacks;
                $this->castlesUnderAttacksScheduledForDeletion->clear();
            }
            $this->castlesUnderAttacksScheduledForDeletion[]= clone $castlesUnderAttack;
            $castlesUnderAttack->setCastles(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Castles is new, it will return
     * an empty collection; or if this Castles has previously
     * been saved, it will retrieve related CastlesUnderAttacks from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Castles.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CastlesUnderAttack[] List of CastlesUnderAttack objects
     */
    public function getCastlesUnderAttacksJoinAttack($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CastlesUnderAttackQuery::create(null, $criteria);
        $query->joinWith('Attack', $join_behavior);

        return $this->getCastlesUnderAttacks($query, $con);
    }

    /**
     * Clears out the collAttacks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Castles The current object (for fluent API support)
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
     * to the current object by way of the castles_under_attack cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Castles is new, it will return
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
                    ->filterByCastles($this)
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
     * to the current object by way of the castles_under_attack cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $attacks A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Castles The current object (for fluent API support)
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
     * to the current object by way of the castles_under_attack cross-reference table.
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
                    ->filterByCastles($this)
                    ->count($con);
            }
        } else {
            return count($this->collAttacks);
        }
    }

    /**
     * Associate a Attack object to this object
     * through the castles_under_attack cross reference table.
     *
     * @param  Attack $attack The CastlesUnderAttack object to relate
     * @return Castles The current object (for fluent API support)
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
        if (!$attack->getCastless()->contains($this)) { $castlesUnderAttack = new CastlesUnderAttack();
            $castlesUnderAttack->setAttack($attack);
            $this->addCastlesUnderAttack($castlesUnderAttack);

            $foreignCollection = $attack->getCastless();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a Attack object to this object
     * through the castles_under_attack cross reference table.
     *
     * @param Attack $attack The CastlesUnderAttack object to relate
     * @return Castles The current object (for fluent API support)
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
        $this->name = null;
        $this->silver = null;
        $this->copper = null;
        $this->st = null;
        $this->asx = null;
        $this->pr = null;
        $this->sk = null;
        $this->bs = null;
        $this->lr = null;
        $this->type = null;
        $this->x = null;
        $this->y = null;
        $this->server = null;
        $this->castle_groups_id = null;
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
            if ($this->collCastlesUnderAttacks) {
                foreach ($this->collCastlesUnderAttacks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAttacks) {
                foreach ($this->collAttacks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCastleGroups instanceof Persistent) {
              $this->aCastleGroups->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCastlesUnderAttacks instanceof PropelCollection) {
            $this->collCastlesUnderAttacks->clearIterator();
        }
        $this->collCastlesUnderAttacks = null;
        if ($this->collAttacks instanceof PropelCollection) {
            $this->collAttacks->clearIterator();
        }
        $this->collAttacks = null;
        $this->aCastleGroups = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CastlesPeer::DEFAULT_STRING_FORMAT);
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

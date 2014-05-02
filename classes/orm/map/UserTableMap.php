<?php



/**
 * This class defines the structure of the 'user' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.orm.map
 */
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.UserTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('user');
        $this->setPhpName('User');
        $this->setClassname('User');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 50, null);
        $this->addColumn('password', 'Password', 'VARCHAR', false, 30, null);
        $this->addColumn('server', 'Server', 'CHAR', false, 6, null);
        $this->addColumn('playerid', 'Playerid', 'CHAR', false, 20, null);
        $this->addColumn('phone', 'Phone', 'CHAR', false, 20, null);
        $this->addColumn('email', 'Email', 'CHAR', false, 30, null);
        $this->addColumn('sms', 'Sms', 'BOOLEAN', false, 1, null);
        $this->addColumn('import_status', 'ImportStatus', 'INTEGER', false, 2, null);
        $this->addColumn('import_date', 'ImportDate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Castle', 'Castle', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'Castles');
        $this->addRelation('CastleType', 'CastleType', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'CastleTypes');
        $this->addRelation('TimeTable', 'TimeTable', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'TimeTables');
        $this->addRelation('CastleLocation', 'CastleLocation', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'CastleLocations');
        $this->addRelation('Target', 'Target', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'Targets');
    } // buildRelations()

} // UserTableMap

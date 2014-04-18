<?php



/**
 * This class defines the structure of the 'castle' table.
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
class CastleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.CastleTableMap';

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
        $this->setName('castle');
        $this->setPhpName('Castle');
        $this->setClassname('Castle');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('user', 'User', 'INTEGER', false, 4, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 50, null);
        $this->addForeignKey('castle_type_id', 'CastleTypeId', 'INTEGER', 'castle_type', 'id', false, 6, null);
        $this->addForeignKey('castle_location_id', 'CastleLocationId', 'INTEGER', 'castle_location', 'id', false, 6, null);
        $this->addColumn('coordinates', 'Coordinates', 'VARCHAR', false, 40, null);
        $this->addColumn('X', 'X', 'INTEGER', false, 6, null);
        $this->addColumn('Y', 'Y', 'INTEGER', false, 6, null);
        $this->addColumn('silver', 'Silver', 'INTEGER', false, 5, null);
        $this->addColumn('copper', 'Copper', 'INTEGER', false, 5, null);
        $this->addColumn('current_st', 'CurrentSt', 'INTEGER', false, 4, null);
        $this->addColumn('current_as', 'CurrentAs', 'INTEGER', false, 4, null);
        $this->addColumn('current_pr', 'CurrentPr', 'INTEGER', false, 4, null);
        $this->addColumn('current_sk', 'CurrentSk', 'INTEGER', false, 4, null);
        $this->addColumn('current_bs', 'CurrentBs', 'INTEGER', false, 4, null);
        $this->addColumn('current_lr', 'CurrentLr', 'INTEGER', false, 4, null);
        $this->addColumn('current_hk', 'CurrentHk', 'INTEGER', false, 4, null);
        $this->addColumn('current_ok', 'CurrentOk', 'INTEGER', false, 4, null);
        $this->addColumn('mission_st', 'MissionSt', 'INTEGER', false, 4, null);
        $this->addColumn('mission_as', 'MissionAs', 'INTEGER', false, 4, null);
        $this->addColumn('mission_pr', 'MissionPr', 'INTEGER', false, 4, null);
        $this->addColumn('mission_sk', 'MissionSk', 'INTEGER', false, 4, null);
        $this->addColumn('mission_bs', 'MissionBs', 'INTEGER', false, 4, null);
        $this->addColumn('mission_lr', 'MissionLr', 'INTEGER', false, 4, null);
        $this->addColumn('usage_off', 'UsageOff', 'BOOLEAN', false, 1, null);
        $this->addColumn('usage_def', 'UsageDef', 'BOOLEAN', false, 1, null);
        $this->addColumn('mission_priority', 'MissionPriority', 'BOOLEAN', false, 1, null);
        $this->addColumn('environment_card', 'EnvironmentCard', 'BOOLEAN', false, 1, null);
        $this->addColumn('autodef_coordinates', 'AutodefCoordinates', 'VARCHAR', false, 40, null);
        $this->addColumn('autodef_X', 'AutodefX', 'INTEGER', false, 6, null);
        $this->addColumn('autodef_Y', 'AutodefY', 'INTEGER', false, 6, null);
        $this->addColumn('points', 'Points', 'INTEGER', false, 3, null);
        $this->addColumn('open_population', 'OpenPopulation', 'INTEGER', false, 4, null);
        $this->addColumn('last_import', 'LastImport', 'TIMESTAMP', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CastleType', 'CastleType', RelationMap::MANY_TO_ONE, array('castle_type_id' => 'id', ), null, null);
        $this->addRelation('CastleLocation', 'CastleLocation', RelationMap::MANY_TO_ONE, array('castle_location_id' => 'id', ), null, null);
        $this->addRelation('Castle2Attack', 'Castle2Attack', RelationMap::ONE_TO_MANY, array('id' => 'castle_id', ), null, null, 'Castle2Attacks');
        $this->addRelation('Attack', 'Attack', RelationMap::MANY_TO_MANY, array(), null, null, 'Attacks');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' =>  array (
  'create_column' => 'created_at',
  'update_column' => 'updated_at',
  'disable_updated_at' => 'false',
),
        );
    } // getBehaviors()

} // CastleTableMap

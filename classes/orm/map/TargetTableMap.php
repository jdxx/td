<?php



/**
 * This class defines the structure of the 'target' table.
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
class TargetTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.TargetTableMap';

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
        $this->setName('target');
        $this->setPhpName('Target');
        $this->setClassname('Target');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', false, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 50, null);
        $this->addColumn('coordinates', 'Coordinates', 'VARCHAR', false, 40, null);
        $this->addColumn('date', 'Date', 'CHAR', false, 10, null);
        $this->addColumn('time', 'Time', 'CHAR', false, 5, null);
        $this->addColumn('start_time', 'StartTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('use_mission_troops', 'UseMissionTroops', 'BOOLEAN', false, 1, null);
        $this->addColumn('filter_Castles_Off', 'FilterCastlesOff', 'BOOLEAN', false, 1, null);
        $this->addColumn('filter_Castles_Def', 'FilterCastlesDef', 'BOOLEAN', false, 1, null);
        $this->addColumn('filter_Castles_Mix', 'FilterCastlesMix', 'BOOLEAN', false, 1, null);
        $this->addColumn('filter_Troops_Marker', 'FilterTroopsMarker', 'BOOLEAN', false, 1, null);
        $this->addColumn('filter_Troops_Off', 'FilterTroopsOff', 'BOOLEAN', false, 1, null);
        $this->addColumn('filter_Troops_Def', 'FilterTroopsDef', 'BOOLEAN', false, 1, null);
        $this->addColumn('sort', 'Sort', 'CHAR', false, 10, null);
        $this->addColumn('priority', 'Priority', 'CHAR', false, 10, null);
        $this->addColumn('target_silver', 'TargetSilver', 'INTEGER', false, 8, null);
        $this->addColumn('target_sk', 'TargetSk', 'INTEGER', false, 8, null);
        $this->addColumn('target_bs', 'TargetBs', 'INTEGER', false, 8, null);
        $this->addColumn('target_lr', 'TargetLr', 'INTEGER', false, 8, null);
        $this->addColumn('total_silver', 'TotalSilver', 'INTEGER', false, 8, null);
        $this->addColumn('total_st', 'TotalSt', 'INTEGER', false, 8, null);
        $this->addColumn('total_sk', 'TotalSk', 'INTEGER', false, 8, null);
        $this->addColumn('total_bs', 'TotalBs', 'INTEGER', false, 8, null);
        $this->addColumn('total_as', 'TotalAs', 'INTEGER', false, 8, null);
        $this->addColumn('total_pr', 'TotalPr', 'INTEGER', false, 8, null);
        $this->addColumn('total_lr', 'TotalLr', 'INTEGER', false, 8, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('TargetActions', 'TargetActions', RelationMap::ONE_TO_MANY, array('id' => 'target_id', ), null, null, 'TargetActionss');
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

} // TargetTableMap

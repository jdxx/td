<?php



/**
 * This class defines the structure of the 'castles' table.
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
class CastlesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.CastlesTableMap';

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
        $this->setName('castles');
        $this->setPhpName('Castles');
        $this->setClassname('Castles');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'CHAR', true, 12, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 50, null);
        $this->addColumn('silver', 'Silver', 'INTEGER', false, 5, null);
        $this->addColumn('copper', 'Copper', 'INTEGER', false, 5, null);
        $this->addColumn('st', 'St', 'INTEGER', false, 4, null);
        $this->addColumn('asx', 'Asx', 'INTEGER', false, 4, null);
        $this->addColumn('pr', 'Pr', 'INTEGER', false, 4, null);
        $this->addColumn('sk', 'Sk', 'INTEGER', false, 4, null);
        $this->addColumn('bs', 'Bs', 'INTEGER', false, 4, null);
        $this->addColumn('lr', 'Lr', 'INTEGER', false, 4, null);
        $this->addColumn('type', 'Type', 'CHAR', false, 3, null);
        $this->addColumn('X', 'X', 'INTEGER', false, 6, null);
        $this->addColumn('Y', 'Y', 'INTEGER', false, 6, null);
        $this->addColumn('server', 'Server', 'INTEGER', false, 3, null);
        $this->addForeignKey('castle_groups_id', 'CastleGroupsId', 'INTEGER', 'castle_groups', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CastleGroups', 'CastleGroups', RelationMap::MANY_TO_ONE, array('castle_groups_id' => 'id', ), null, null);
        $this->addRelation('CastlesUnderAttack', 'CastlesUnderAttack', RelationMap::ONE_TO_MANY, array('id' => 'castles_id', ), null, null, 'CastlesUnderAttacks');
        $this->addRelation('Attack', 'Attack', RelationMap::MANY_TO_MANY, array(), null, null, 'Attacks');
    } // buildRelations()

} // CastlesTableMap

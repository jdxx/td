<?php



/**
 * This class defines the structure of the 'attack2castle' table.
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
class Attack2castleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.Attack2castleTableMap';

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
        $this->setName('attack2castle');
        $this->setPhpName('Attack2castle');
        $this->setClassname('Attack2castle');
        $this->setPackage('orm');
        $this->setUseIdGenerator(false);
        $this->setIsCrossRef(true);
        // columns
        $this->addForeignPrimaryKey('attack_id', 'AttackId', 'INTEGER' , 'attack', 'id', true, null, null);
        $this->addForeignPrimaryKey('castle_id', 'CastleId', 'INTEGER' , 'castle', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Castle', 'Castle', RelationMap::MANY_TO_ONE, array('castle_id' => 'id', ), null, null);
        $this->addRelation('Attack', 'Attack', RelationMap::MANY_TO_ONE, array('attack_id' => 'id', ), null, null);
    } // buildRelations()

} // Attack2castleTableMap

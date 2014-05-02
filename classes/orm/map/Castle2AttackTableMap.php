<?php



/**
 * This class defines the structure of the 'castle_2_attack' table.
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
class Castle2AttackTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.Castle2AttackTableMap';

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
        $this->setName('castle_2_attack');
        $this->setPhpName('Castle2Attack');
        $this->setClassname('Castle2Attack');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        $this->setIsCrossRef(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 6, null);
        $this->addForeignKey('castle_id', 'CastleId', 'INTEGER', 'castle', 'id', false, 10, null);
        $this->addForeignKey('attack_id', 'AttackId', 'INTEGER', 'attack', 'id', false, 6, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('Attack', 'Attack', RelationMap::MANY_TO_ONE, array('attack_id' => 'id', ), null, null);
        $this->addRelation('Castle', 'Castle', RelationMap::MANY_TO_ONE, array('castle_id' => 'id', ), null, null);
    } // buildRelations()

} // Castle2AttackTableMap

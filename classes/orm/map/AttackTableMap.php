<?php



/**
 * This class defines the structure of the 'attack' table.
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
class AttackTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.AttackTableMap';

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
        $this->setName('attack');
        $this->setPhpName('Attack');
        $this->setClassname('Attack');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('user', 'User', 'INTEGER', false, 6, null);
        $this->addColumn('attack_time', 'AttackTime', 'TIMESTAMP', false, null, null);
        $this->addColumn('duration', 'Duration', 'INTEGER', false, 4, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Attack2castle', 'Attack2castle', RelationMap::ONE_TO_MANY, array('id' => 'attack_id', ), null, null, 'Attack2castles');
        $this->addRelation('Castle', 'Castle', RelationMap::MANY_TO_MANY, array(), null, null, 'Castles');
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

} // AttackTableMap

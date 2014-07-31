<?php



/**
 * This class defines the structure of the 'target_actions' table.
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
class TargetActionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.TargetActionsTableMap';

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
        $this->setName('target_actions');
        $this->setPhpName('TargetActions');
        $this->setClassname('TargetActions');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('target_id', 'TargetId', 'INTEGER', 'target', 'id', false, null, null);
        $this->addForeignKey('castle_id', 'CastleId', 'INTEGER', 'castle', 'id', false, 10, null);
        $this->addColumn('attack_silver', 'AttackSilver', 'INTEGER', false, 5, null);
        $this->addColumn('attack_st', 'AttackSt', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_sk', 'AttackSk', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_bs', 'AttackBs', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_as', 'AttackAs', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_pr', 'AttackPr', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_lr', 'AttackLr', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_hk', 'AttackHk', 'BOOLEAN', false, 1, null);
        $this->addColumn('attack_ok', 'AttackOk', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Target', 'Target', RelationMap::MANY_TO_ONE, array('target_id' => 'id', ), null, null);
        $this->addRelation('Castle', 'Castle', RelationMap::MANY_TO_ONE, array('castle_id' => 'id', ), null, null);
    } // buildRelations()

} // TargetActionsTableMap

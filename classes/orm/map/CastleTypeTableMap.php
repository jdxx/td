<?php



/**
 * This class defines the structure of the 'castle_type' table.
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
class CastleTypeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.CastleTypeTableMap';

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
        $this->setName('castle_type');
        $this->setPhpName('CastleType');
        $this->setClassname('CastleType');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 6, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', false, null, null);
        $this->addColumn('type', 'Type', 'CHAR', false, 3, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 50, null);
        $this->addColumn('total_st', 'TotalSt', 'INTEGER', false, 4, null);
        $this->addColumn('total_as', 'TotalAs', 'INTEGER', false, 4, null);
        $this->addColumn('total_pr', 'TotalPr', 'INTEGER', false, 4, null);
        $this->addColumn('total_sk', 'TotalSk', 'INTEGER', false, 4, null);
        $this->addColumn('total_bs', 'TotalBs', 'INTEGER', false, 4, null);
        $this->addColumn('total_lr', 'TotalLr', 'INTEGER', false, 4, null);
        $this->addColumn('total_hk', 'TotalHk', 'INTEGER', false, 4, null);
        $this->addColumn('total_ok', 'TotalOk', 'INTEGER', false, 4, null);
        $this->addColumn('mission_st', 'MissionSt', 'INTEGER', false, 4, null);
        $this->addColumn('mission_as', 'MissionAs', 'INTEGER', false, 4, null);
        $this->addColumn('mission_pr', 'MissionPr', 'INTEGER', false, 4, null);
        $this->addColumn('mission_sk', 'MissionSk', 'INTEGER', false, 4, null);
        $this->addColumn('mission_bs', 'MissionBs', 'INTEGER', false, 4, null);
        $this->addColumn('mission_lr', 'MissionLr', 'INTEGER', false, 4, null);
        $this->addColumn('bergfried', 'Bergfried', 'INTEGER', false, 2, null);
        $this->addColumn('zeughaus', 'Zeughaus', 'INTEGER', false, 2, null);
        $this->addColumn('taverne', 'Taverne', 'INTEGER', false, 2, null);
        $this->addColumn('bibliothek', 'Bibliothek', 'INTEGER', false, 2, null);
        $this->addColumn('wehranlage', 'Wehranlage', 'INTEGER', false, 2, null);
        $this->addColumn('markt', 'Markt', 'INTEGER', false, 2, null);
        $this->addColumn('bauernhof', 'Bauernhof', 'INTEGER', false, 2, null);
        $this->addColumn('holzfaeller', 'Holzfaeller', 'INTEGER', false, 2, null);
        $this->addColumn('holzlager', 'Holzlager', 'INTEGER', false, 2, null);
        $this->addColumn('steinbruch', 'Steinbruch', 'INTEGER', false, 2, null);
        $this->addColumn('steinlager', 'Steinlager', 'INTEGER', false, 2, null);
        $this->addColumn('erzmine', 'Erzmine', 'INTEGER', false, 2, null);
        $this->addColumn('erzlager', 'Erzlager', 'INTEGER', false, 2, null);
        $this->addColumn('langbogen', 'Langbogen', 'BOOLEAN', false, 1, null);
        $this->addColumn('dreifelderwirtschaft', 'Dreifelderwirtschaft', 'BOOLEAN', false, 1, null);
        $this->addColumn('kummet', 'Kummet', 'BOOLEAN', false, 1, null);
        $this->addColumn('vorratskeller', 'Vorratskeller', 'BOOLEAN', false, 1, null);
        $this->addColumn('steigbuegel', 'Steigbuegel', 'BOOLEAN', false, 1, null);
        $this->addColumn('waffenschmied', 'Waffenschmied', 'BOOLEAN', false, 1, null);
        $this->addColumn('ruestungsschmied', 'Ruestungsschmied', 'BOOLEAN', false, 1, null);
        $this->addColumn('bierpruefer', 'Bierpruefer', 'BOOLEAN', false, 1, null);
        $this->addColumn('schwertschmied', 'Schwertschmied', 'BOOLEAN', false, 1, null);
        $this->addColumn('eisenhaertung', 'Eisenhaertung', 'BOOLEAN', false, 1, null);
        $this->addColumn('armbrust', 'Armbrust', 'BOOLEAN', false, 1, null);
        $this->addColumn('giftpfeile', 'Giftpfeile', 'BOOLEAN', false, 1, null);
        $this->addColumn('pferdezucht', 'Pferdezucht', 'BOOLEAN', false, 1, null);
        $this->addColumn('waffenherstellung', 'Waffenherstellung', 'BOOLEAN', false, 1, null);
        $this->addColumn('pferdepanzerung', 'Pferdepanzerung', 'BOOLEAN', false, 1, null);
        $this->addColumn('schubkarren', 'Schubkarren', 'BOOLEAN', false, 1, null);
        $this->addColumn('brandpfeile', 'Brandpfeile', 'BOOLEAN', false, 1, null);
        $this->addColumn('hufschmied', 'Hufschmied', 'BOOLEAN', false, 1, null);
        $this->addColumn('umgebungskarte', 'Umgebungskarte', 'BOOLEAN', false, 1, null);
        $this->addColumn('zisterne', 'Zisterne', 'BOOLEAN', false, 1, null);
        $this->addColumn('max_population', 'MaxPopulation', 'INTEGER', false, 5, null);
        $this->addColumn('free_population', 'FreePopulation', 'INTEGER', false, 5, null);
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
        $this->addRelation('Castle', 'Castle', RelationMap::ONE_TO_MANY, array('id' => 'castle_type_id', ), null, null, 'Castles');
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

} // CastleTypeTableMap

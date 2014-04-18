<?php



/**
 * This class defines the structure of the 'buildings' table.
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
class BuildingsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'orm.map.BuildingsTableMap';

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
        $this->setName('buildings');
        $this->setPhpName('Buildings');
        $this->setClassname('Buildings');
        $this->setPackage('orm');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
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
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // BuildingsTableMap

<?php


/**
 * Base class that represents a row from the 'buildings' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseBuildings extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BuildingsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BuildingsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the bergfried field.
     * @var        int
     */
    protected $bergfried;

    /**
     * The value for the zeughaus field.
     * @var        int
     */
    protected $zeughaus;

    /**
     * The value for the taverne field.
     * @var        int
     */
    protected $taverne;

    /**
     * The value for the bibliothek field.
     * @var        int
     */
    protected $bibliothek;

    /**
     * The value for the wehranlage field.
     * @var        int
     */
    protected $wehranlage;

    /**
     * The value for the markt field.
     * @var        int
     */
    protected $markt;

    /**
     * The value for the bauernhof field.
     * @var        int
     */
    protected $bauernhof;

    /**
     * The value for the holzfaeller field.
     * @var        int
     */
    protected $holzfaeller;

    /**
     * The value for the holzlager field.
     * @var        int
     */
    protected $holzlager;

    /**
     * The value for the steinbruch field.
     * @var        int
     */
    protected $steinbruch;

    /**
     * The value for the steinlager field.
     * @var        int
     */
    protected $steinlager;

    /**
     * The value for the erzmine field.
     * @var        int
     */
    protected $erzmine;

    /**
     * The value for the erzlager field.
     * @var        int
     */
    protected $erzlager;

    /**
     * The value for the langbogen field.
     * @var        boolean
     */
    protected $langbogen;

    /**
     * The value for the dreifelderwirtschaft field.
     * @var        boolean
     */
    protected $dreifelderwirtschaft;

    /**
     * The value for the kummet field.
     * @var        boolean
     */
    protected $kummet;

    /**
     * The value for the vorratskeller field.
     * @var        boolean
     */
    protected $vorratskeller;

    /**
     * The value for the steigbuegel field.
     * @var        boolean
     */
    protected $steigbuegel;

    /**
     * The value for the waffenschmied field.
     * @var        boolean
     */
    protected $waffenschmied;

    /**
     * The value for the ruestungsschmied field.
     * @var        boolean
     */
    protected $ruestungsschmied;

    /**
     * The value for the bierpruefer field.
     * @var        boolean
     */
    protected $bierpruefer;

    /**
     * The value for the schwertschmied field.
     * @var        boolean
     */
    protected $schwertschmied;

    /**
     * The value for the eisenhaertung field.
     * @var        boolean
     */
    protected $eisenhaertung;

    /**
     * The value for the armbrust field.
     * @var        boolean
     */
    protected $armbrust;

    /**
     * The value for the giftpfeile field.
     * @var        boolean
     */
    protected $giftpfeile;

    /**
     * The value for the pferdezucht field.
     * @var        boolean
     */
    protected $pferdezucht;

    /**
     * The value for the waffenherstellung field.
     * @var        boolean
     */
    protected $waffenherstellung;

    /**
     * The value for the pferdepanzerung field.
     * @var        boolean
     */
    protected $pferdepanzerung;

    /**
     * The value for the schubkarren field.
     * @var        boolean
     */
    protected $schubkarren;

    /**
     * The value for the brandpfeile field.
     * @var        boolean
     */
    protected $brandpfeile;

    /**
     * The value for the hufschmied field.
     * @var        boolean
     */
    protected $hufschmied;

    /**
     * The value for the umgebungskarte field.
     * @var        boolean
     */
    protected $umgebungskarte;

    /**
     * The value for the zisterne field.
     * @var        boolean
     */
    protected $zisterne;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [bergfried] column value.
     *
     * @return int
     */
    public function getBergfried()
    {

        return $this->bergfried;
    }

    /**
     * Get the [zeughaus] column value.
     *
     * @return int
     */
    public function getZeughaus()
    {

        return $this->zeughaus;
    }

    /**
     * Get the [taverne] column value.
     *
     * @return int
     */
    public function getTaverne()
    {

        return $this->taverne;
    }

    /**
     * Get the [bibliothek] column value.
     *
     * @return int
     */
    public function getBibliothek()
    {

        return $this->bibliothek;
    }

    /**
     * Get the [wehranlage] column value.
     *
     * @return int
     */
    public function getWehranlage()
    {

        return $this->wehranlage;
    }

    /**
     * Get the [markt] column value.
     *
     * @return int
     */
    public function getMarkt()
    {

        return $this->markt;
    }

    /**
     * Get the [bauernhof] column value.
     *
     * @return int
     */
    public function getBauernhof()
    {

        return $this->bauernhof;
    }

    /**
     * Get the [holzfaeller] column value.
     *
     * @return int
     */
    public function getHolzfaeller()
    {

        return $this->holzfaeller;
    }

    /**
     * Get the [holzlager] column value.
     *
     * @return int
     */
    public function getHolzlager()
    {

        return $this->holzlager;
    }

    /**
     * Get the [steinbruch] column value.
     *
     * @return int
     */
    public function getSteinbruch()
    {

        return $this->steinbruch;
    }

    /**
     * Get the [steinlager] column value.
     *
     * @return int
     */
    public function getSteinlager()
    {

        return $this->steinlager;
    }

    /**
     * Get the [erzmine] column value.
     *
     * @return int
     */
    public function getErzmine()
    {

        return $this->erzmine;
    }

    /**
     * Get the [erzlager] column value.
     *
     * @return int
     */
    public function getErzlager()
    {

        return $this->erzlager;
    }

    /**
     * Get the [langbogen] column value.
     *
     * @return boolean
     */
    public function getLangbogen()
    {

        return $this->langbogen;
    }

    /**
     * Get the [dreifelderwirtschaft] column value.
     *
     * @return boolean
     */
    public function getDreifelderwirtschaft()
    {

        return $this->dreifelderwirtschaft;
    }

    /**
     * Get the [kummet] column value.
     *
     * @return boolean
     */
    public function getKummet()
    {

        return $this->kummet;
    }

    /**
     * Get the [vorratskeller] column value.
     *
     * @return boolean
     */
    public function getVorratskeller()
    {

        return $this->vorratskeller;
    }

    /**
     * Get the [steigbuegel] column value.
     *
     * @return boolean
     */
    public function getSteigbuegel()
    {

        return $this->steigbuegel;
    }

    /**
     * Get the [waffenschmied] column value.
     *
     * @return boolean
     */
    public function getWaffenschmied()
    {

        return $this->waffenschmied;
    }

    /**
     * Get the [ruestungsschmied] column value.
     *
     * @return boolean
     */
    public function getRuestungsschmied()
    {

        return $this->ruestungsschmied;
    }

    /**
     * Get the [bierpruefer] column value.
     *
     * @return boolean
     */
    public function getBierpruefer()
    {

        return $this->bierpruefer;
    }

    /**
     * Get the [schwertschmied] column value.
     *
     * @return boolean
     */
    public function getSchwertschmied()
    {

        return $this->schwertschmied;
    }

    /**
     * Get the [eisenhaertung] column value.
     *
     * @return boolean
     */
    public function getEisenhaertung()
    {

        return $this->eisenhaertung;
    }

    /**
     * Get the [armbrust] column value.
     *
     * @return boolean
     */
    public function getArmbrust()
    {

        return $this->armbrust;
    }

    /**
     * Get the [giftpfeile] column value.
     *
     * @return boolean
     */
    public function getGiftpfeile()
    {

        return $this->giftpfeile;
    }

    /**
     * Get the [pferdezucht] column value.
     *
     * @return boolean
     */
    public function getPferdezucht()
    {

        return $this->pferdezucht;
    }

    /**
     * Get the [waffenherstellung] column value.
     *
     * @return boolean
     */
    public function getWaffenherstellung()
    {

        return $this->waffenherstellung;
    }

    /**
     * Get the [pferdepanzerung] column value.
     *
     * @return boolean
     */
    public function getPferdepanzerung()
    {

        return $this->pferdepanzerung;
    }

    /**
     * Get the [schubkarren] column value.
     *
     * @return boolean
     */
    public function getSchubkarren()
    {

        return $this->schubkarren;
    }

    /**
     * Get the [brandpfeile] column value.
     *
     * @return boolean
     */
    public function getBrandpfeile()
    {

        return $this->brandpfeile;
    }

    /**
     * Get the [hufschmied] column value.
     *
     * @return boolean
     */
    public function getHufschmied()
    {

        return $this->hufschmied;
    }

    /**
     * Get the [umgebungskarte] column value.
     *
     * @return boolean
     */
    public function getUmgebungskarte()
    {

        return $this->umgebungskarte;
    }

    /**
     * Get the [zisterne] column value.
     *
     * @return boolean
     */
    public function getZisterne()
    {

        return $this->zisterne;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = BuildingsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [bergfried] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setBergfried($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bergfried !== $v) {
            $this->bergfried = $v;
            $this->modifiedColumns[] = BuildingsPeer::BERGFRIED;
        }


        return $this;
    } // setBergfried()

    /**
     * Set the value of [zeughaus] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setZeughaus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zeughaus !== $v) {
            $this->zeughaus = $v;
            $this->modifiedColumns[] = BuildingsPeer::ZEUGHAUS;
        }


        return $this;
    } // setZeughaus()

    /**
     * Set the value of [taverne] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setTaverne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taverne !== $v) {
            $this->taverne = $v;
            $this->modifiedColumns[] = BuildingsPeer::TAVERNE;
        }


        return $this;
    } // setTaverne()

    /**
     * Set the value of [bibliothek] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setBibliothek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bibliothek !== $v) {
            $this->bibliothek = $v;
            $this->modifiedColumns[] = BuildingsPeer::BIBLIOTHEK;
        }


        return $this;
    } // setBibliothek()

    /**
     * Set the value of [wehranlage] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setWehranlage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wehranlage !== $v) {
            $this->wehranlage = $v;
            $this->modifiedColumns[] = BuildingsPeer::WEHRANLAGE;
        }


        return $this;
    } // setWehranlage()

    /**
     * Set the value of [markt] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setMarkt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->markt !== $v) {
            $this->markt = $v;
            $this->modifiedColumns[] = BuildingsPeer::MARKT;
        }


        return $this;
    } // setMarkt()

    /**
     * Set the value of [bauernhof] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setBauernhof($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bauernhof !== $v) {
            $this->bauernhof = $v;
            $this->modifiedColumns[] = BuildingsPeer::BAUERNHOF;
        }


        return $this;
    } // setBauernhof()

    /**
     * Set the value of [holzfaeller] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setHolzfaeller($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->holzfaeller !== $v) {
            $this->holzfaeller = $v;
            $this->modifiedColumns[] = BuildingsPeer::HOLZFAELLER;
        }


        return $this;
    } // setHolzfaeller()

    /**
     * Set the value of [holzlager] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setHolzlager($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->holzlager !== $v) {
            $this->holzlager = $v;
            $this->modifiedColumns[] = BuildingsPeer::HOLZLAGER;
        }


        return $this;
    } // setHolzlager()

    /**
     * Set the value of [steinbruch] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setSteinbruch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->steinbruch !== $v) {
            $this->steinbruch = $v;
            $this->modifiedColumns[] = BuildingsPeer::STEINBRUCH;
        }


        return $this;
    } // setSteinbruch()

    /**
     * Set the value of [steinlager] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setSteinlager($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->steinlager !== $v) {
            $this->steinlager = $v;
            $this->modifiedColumns[] = BuildingsPeer::STEINLAGER;
        }


        return $this;
    } // setSteinlager()

    /**
     * Set the value of [erzmine] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setErzmine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->erzmine !== $v) {
            $this->erzmine = $v;
            $this->modifiedColumns[] = BuildingsPeer::ERZMINE;
        }


        return $this;
    } // setErzmine()

    /**
     * Set the value of [erzlager] column.
     *
     * @param  int $v new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setErzlager($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->erzlager !== $v) {
            $this->erzlager = $v;
            $this->modifiedColumns[] = BuildingsPeer::ERZLAGER;
        }


        return $this;
    } // setErzlager()

    /**
     * Sets the value of the [langbogen] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setLangbogen($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->langbogen !== $v) {
            $this->langbogen = $v;
            $this->modifiedColumns[] = BuildingsPeer::LANGBOGEN;
        }


        return $this;
    } // setLangbogen()

    /**
     * Sets the value of the [dreifelderwirtschaft] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setDreifelderwirtschaft($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->dreifelderwirtschaft !== $v) {
            $this->dreifelderwirtschaft = $v;
            $this->modifiedColumns[] = BuildingsPeer::DREIFELDERWIRTSCHAFT;
        }


        return $this;
    } // setDreifelderwirtschaft()

    /**
     * Sets the value of the [kummet] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setKummet($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->kummet !== $v) {
            $this->kummet = $v;
            $this->modifiedColumns[] = BuildingsPeer::KUMMET;
        }


        return $this;
    } // setKummet()

    /**
     * Sets the value of the [vorratskeller] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setVorratskeller($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->vorratskeller !== $v) {
            $this->vorratskeller = $v;
            $this->modifiedColumns[] = BuildingsPeer::VORRATSKELLER;
        }


        return $this;
    } // setVorratskeller()

    /**
     * Sets the value of the [steigbuegel] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setSteigbuegel($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->steigbuegel !== $v) {
            $this->steigbuegel = $v;
            $this->modifiedColumns[] = BuildingsPeer::STEIGBUEGEL;
        }


        return $this;
    } // setSteigbuegel()

    /**
     * Sets the value of the [waffenschmied] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setWaffenschmied($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->waffenschmied !== $v) {
            $this->waffenschmied = $v;
            $this->modifiedColumns[] = BuildingsPeer::WAFFENSCHMIED;
        }


        return $this;
    } // setWaffenschmied()

    /**
     * Sets the value of the [ruestungsschmied] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setRuestungsschmied($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ruestungsschmied !== $v) {
            $this->ruestungsschmied = $v;
            $this->modifiedColumns[] = BuildingsPeer::RUESTUNGSSCHMIED;
        }


        return $this;
    } // setRuestungsschmied()

    /**
     * Sets the value of the [bierpruefer] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setBierpruefer($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->bierpruefer !== $v) {
            $this->bierpruefer = $v;
            $this->modifiedColumns[] = BuildingsPeer::BIERPRUEFER;
        }


        return $this;
    } // setBierpruefer()

    /**
     * Sets the value of the [schwertschmied] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setSchwertschmied($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->schwertschmied !== $v) {
            $this->schwertschmied = $v;
            $this->modifiedColumns[] = BuildingsPeer::SCHWERTSCHMIED;
        }


        return $this;
    } // setSchwertschmied()

    /**
     * Sets the value of the [eisenhaertung] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setEisenhaertung($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->eisenhaertung !== $v) {
            $this->eisenhaertung = $v;
            $this->modifiedColumns[] = BuildingsPeer::EISENHAERTUNG;
        }


        return $this;
    } // setEisenhaertung()

    /**
     * Sets the value of the [armbrust] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setArmbrust($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->armbrust !== $v) {
            $this->armbrust = $v;
            $this->modifiedColumns[] = BuildingsPeer::ARMBRUST;
        }


        return $this;
    } // setArmbrust()

    /**
     * Sets the value of the [giftpfeile] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setGiftpfeile($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->giftpfeile !== $v) {
            $this->giftpfeile = $v;
            $this->modifiedColumns[] = BuildingsPeer::GIFTPFEILE;
        }


        return $this;
    } // setGiftpfeile()

    /**
     * Sets the value of the [pferdezucht] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setPferdezucht($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->pferdezucht !== $v) {
            $this->pferdezucht = $v;
            $this->modifiedColumns[] = BuildingsPeer::PFERDEZUCHT;
        }


        return $this;
    } // setPferdezucht()

    /**
     * Sets the value of the [waffenherstellung] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setWaffenherstellung($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->waffenherstellung !== $v) {
            $this->waffenherstellung = $v;
            $this->modifiedColumns[] = BuildingsPeer::WAFFENHERSTELLUNG;
        }


        return $this;
    } // setWaffenherstellung()

    /**
     * Sets the value of the [pferdepanzerung] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setPferdepanzerung($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->pferdepanzerung !== $v) {
            $this->pferdepanzerung = $v;
            $this->modifiedColumns[] = BuildingsPeer::PFERDEPANZERUNG;
        }


        return $this;
    } // setPferdepanzerung()

    /**
     * Sets the value of the [schubkarren] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setSchubkarren($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->schubkarren !== $v) {
            $this->schubkarren = $v;
            $this->modifiedColumns[] = BuildingsPeer::SCHUBKARREN;
        }


        return $this;
    } // setSchubkarren()

    /**
     * Sets the value of the [brandpfeile] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setBrandpfeile($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->brandpfeile !== $v) {
            $this->brandpfeile = $v;
            $this->modifiedColumns[] = BuildingsPeer::BRANDPFEILE;
        }


        return $this;
    } // setBrandpfeile()

    /**
     * Sets the value of the [hufschmied] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setHufschmied($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->hufschmied !== $v) {
            $this->hufschmied = $v;
            $this->modifiedColumns[] = BuildingsPeer::HUFSCHMIED;
        }


        return $this;
    } // setHufschmied()

    /**
     * Sets the value of the [umgebungskarte] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setUmgebungskarte($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->umgebungskarte !== $v) {
            $this->umgebungskarte = $v;
            $this->modifiedColumns[] = BuildingsPeer::UMGEBUNGSKARTE;
        }


        return $this;
    } // setUmgebungskarte()

    /**
     * Sets the value of the [zisterne] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Buildings The current object (for fluent API support)
     */
    public function setZisterne($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->zisterne !== $v) {
            $this->zisterne = $v;
            $this->modifiedColumns[] = BuildingsPeer::ZISTERNE;
        }


        return $this;
    } // setZisterne()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->bergfried = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->zeughaus = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->taverne = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->bibliothek = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->wehranlage = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->markt = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->bauernhof = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->holzfaeller = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->holzlager = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->steinbruch = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->steinlager = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->erzmine = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->erzlager = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->langbogen = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
            $this->dreifelderwirtschaft = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->kummet = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
            $this->vorratskeller = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->steigbuegel = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->waffenschmied = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->ruestungsschmied = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->bierpruefer = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
            $this->schwertschmied = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->eisenhaertung = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
            $this->armbrust = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->giftpfeile = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
            $this->pferdezucht = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->waffenherstellung = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
            $this->pferdepanzerung = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
            $this->schubkarren = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
            $this->brandpfeile = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
            $this->hufschmied = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
            $this->umgebungskarte = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
            $this->zisterne = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 34; // 34 = BuildingsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Buildings object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BuildingsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BuildingsQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(BuildingsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                BuildingsPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = BuildingsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BuildingsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BuildingsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(BuildingsPeer::BERGFRIED)) {
            $modifiedColumns[':p' . $index++]  = '`bergfried`';
        }
        if ($this->isColumnModified(BuildingsPeer::ZEUGHAUS)) {
            $modifiedColumns[':p' . $index++]  = '`zeughaus`';
        }
        if ($this->isColumnModified(BuildingsPeer::TAVERNE)) {
            $modifiedColumns[':p' . $index++]  = '`taverne`';
        }
        if ($this->isColumnModified(BuildingsPeer::BIBLIOTHEK)) {
            $modifiedColumns[':p' . $index++]  = '`bibliothek`';
        }
        if ($this->isColumnModified(BuildingsPeer::WEHRANLAGE)) {
            $modifiedColumns[':p' . $index++]  = '`wehranlage`';
        }
        if ($this->isColumnModified(BuildingsPeer::MARKT)) {
            $modifiedColumns[':p' . $index++]  = '`markt`';
        }
        if ($this->isColumnModified(BuildingsPeer::BAUERNHOF)) {
            $modifiedColumns[':p' . $index++]  = '`bauernhof`';
        }
        if ($this->isColumnModified(BuildingsPeer::HOLZFAELLER)) {
            $modifiedColumns[':p' . $index++]  = '`holzfaeller`';
        }
        if ($this->isColumnModified(BuildingsPeer::HOLZLAGER)) {
            $modifiedColumns[':p' . $index++]  = '`holzlager`';
        }
        if ($this->isColumnModified(BuildingsPeer::STEINBRUCH)) {
            $modifiedColumns[':p' . $index++]  = '`steinbruch`';
        }
        if ($this->isColumnModified(BuildingsPeer::STEINLAGER)) {
            $modifiedColumns[':p' . $index++]  = '`steinlager`';
        }
        if ($this->isColumnModified(BuildingsPeer::ERZMINE)) {
            $modifiedColumns[':p' . $index++]  = '`erzmine`';
        }
        if ($this->isColumnModified(BuildingsPeer::ERZLAGER)) {
            $modifiedColumns[':p' . $index++]  = '`erzlager`';
        }
        if ($this->isColumnModified(BuildingsPeer::LANGBOGEN)) {
            $modifiedColumns[':p' . $index++]  = '`langbogen`';
        }
        if ($this->isColumnModified(BuildingsPeer::DREIFELDERWIRTSCHAFT)) {
            $modifiedColumns[':p' . $index++]  = '`dreifelderwirtschaft`';
        }
        if ($this->isColumnModified(BuildingsPeer::KUMMET)) {
            $modifiedColumns[':p' . $index++]  = '`kummet`';
        }
        if ($this->isColumnModified(BuildingsPeer::VORRATSKELLER)) {
            $modifiedColumns[':p' . $index++]  = '`vorratskeller`';
        }
        if ($this->isColumnModified(BuildingsPeer::STEIGBUEGEL)) {
            $modifiedColumns[':p' . $index++]  = '`steigbuegel`';
        }
        if ($this->isColumnModified(BuildingsPeer::WAFFENSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`waffenschmied`';
        }
        if ($this->isColumnModified(BuildingsPeer::RUESTUNGSSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`ruestungsschmied`';
        }
        if ($this->isColumnModified(BuildingsPeer::BIERPRUEFER)) {
            $modifiedColumns[':p' . $index++]  = '`bierpruefer`';
        }
        if ($this->isColumnModified(BuildingsPeer::SCHWERTSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`schwertschmied`';
        }
        if ($this->isColumnModified(BuildingsPeer::EISENHAERTUNG)) {
            $modifiedColumns[':p' . $index++]  = '`eisenhaertung`';
        }
        if ($this->isColumnModified(BuildingsPeer::ARMBRUST)) {
            $modifiedColumns[':p' . $index++]  = '`armbrust`';
        }
        if ($this->isColumnModified(BuildingsPeer::GIFTPFEILE)) {
            $modifiedColumns[':p' . $index++]  = '`giftpfeile`';
        }
        if ($this->isColumnModified(BuildingsPeer::PFERDEZUCHT)) {
            $modifiedColumns[':p' . $index++]  = '`pferdezucht`';
        }
        if ($this->isColumnModified(BuildingsPeer::WAFFENHERSTELLUNG)) {
            $modifiedColumns[':p' . $index++]  = '`waffenherstellung`';
        }
        if ($this->isColumnModified(BuildingsPeer::PFERDEPANZERUNG)) {
            $modifiedColumns[':p' . $index++]  = '`pferdepanzerung`';
        }
        if ($this->isColumnModified(BuildingsPeer::SCHUBKARREN)) {
            $modifiedColumns[':p' . $index++]  = '`schubkarren`';
        }
        if ($this->isColumnModified(BuildingsPeer::BRANDPFEILE)) {
            $modifiedColumns[':p' . $index++]  = '`brandpfeile`';
        }
        if ($this->isColumnModified(BuildingsPeer::HUFSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`hufschmied`';
        }
        if ($this->isColumnModified(BuildingsPeer::UMGEBUNGSKARTE)) {
            $modifiedColumns[':p' . $index++]  = '`umgebungskarte`';
        }
        if ($this->isColumnModified(BuildingsPeer::ZISTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`zisterne`';
        }

        $sql = sprintf(
            'INSERT INTO `buildings` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`bergfried`':
                        $stmt->bindValue($identifier, $this->bergfried, PDO::PARAM_INT);
                        break;
                    case '`zeughaus`':
                        $stmt->bindValue($identifier, $this->zeughaus, PDO::PARAM_INT);
                        break;
                    case '`taverne`':
                        $stmt->bindValue($identifier, $this->taverne, PDO::PARAM_INT);
                        break;
                    case '`bibliothek`':
                        $stmt->bindValue($identifier, $this->bibliothek, PDO::PARAM_INT);
                        break;
                    case '`wehranlage`':
                        $stmt->bindValue($identifier, $this->wehranlage, PDO::PARAM_INT);
                        break;
                    case '`markt`':
                        $stmt->bindValue($identifier, $this->markt, PDO::PARAM_INT);
                        break;
                    case '`bauernhof`':
                        $stmt->bindValue($identifier, $this->bauernhof, PDO::PARAM_INT);
                        break;
                    case '`holzfaeller`':
                        $stmt->bindValue($identifier, $this->holzfaeller, PDO::PARAM_INT);
                        break;
                    case '`holzlager`':
                        $stmt->bindValue($identifier, $this->holzlager, PDO::PARAM_INT);
                        break;
                    case '`steinbruch`':
                        $stmt->bindValue($identifier, $this->steinbruch, PDO::PARAM_INT);
                        break;
                    case '`steinlager`':
                        $stmt->bindValue($identifier, $this->steinlager, PDO::PARAM_INT);
                        break;
                    case '`erzmine`':
                        $stmt->bindValue($identifier, $this->erzmine, PDO::PARAM_INT);
                        break;
                    case '`erzlager`':
                        $stmt->bindValue($identifier, $this->erzlager, PDO::PARAM_INT);
                        break;
                    case '`langbogen`':
                        $stmt->bindValue($identifier, (int) $this->langbogen, PDO::PARAM_INT);
                        break;
                    case '`dreifelderwirtschaft`':
                        $stmt->bindValue($identifier, (int) $this->dreifelderwirtschaft, PDO::PARAM_INT);
                        break;
                    case '`kummet`':
                        $stmt->bindValue($identifier, (int) $this->kummet, PDO::PARAM_INT);
                        break;
                    case '`vorratskeller`':
                        $stmt->bindValue($identifier, (int) $this->vorratskeller, PDO::PARAM_INT);
                        break;
                    case '`steigbuegel`':
                        $stmt->bindValue($identifier, (int) $this->steigbuegel, PDO::PARAM_INT);
                        break;
                    case '`waffenschmied`':
                        $stmt->bindValue($identifier, (int) $this->waffenschmied, PDO::PARAM_INT);
                        break;
                    case '`ruestungsschmied`':
                        $stmt->bindValue($identifier, (int) $this->ruestungsschmied, PDO::PARAM_INT);
                        break;
                    case '`bierpruefer`':
                        $stmt->bindValue($identifier, (int) $this->bierpruefer, PDO::PARAM_INT);
                        break;
                    case '`schwertschmied`':
                        $stmt->bindValue($identifier, (int) $this->schwertschmied, PDO::PARAM_INT);
                        break;
                    case '`eisenhaertung`':
                        $stmt->bindValue($identifier, (int) $this->eisenhaertung, PDO::PARAM_INT);
                        break;
                    case '`armbrust`':
                        $stmt->bindValue($identifier, (int) $this->armbrust, PDO::PARAM_INT);
                        break;
                    case '`giftpfeile`':
                        $stmt->bindValue($identifier, (int) $this->giftpfeile, PDO::PARAM_INT);
                        break;
                    case '`pferdezucht`':
                        $stmt->bindValue($identifier, (int) $this->pferdezucht, PDO::PARAM_INT);
                        break;
                    case '`waffenherstellung`':
                        $stmt->bindValue($identifier, (int) $this->waffenherstellung, PDO::PARAM_INT);
                        break;
                    case '`pferdepanzerung`':
                        $stmt->bindValue($identifier, (int) $this->pferdepanzerung, PDO::PARAM_INT);
                        break;
                    case '`schubkarren`':
                        $stmt->bindValue($identifier, (int) $this->schubkarren, PDO::PARAM_INT);
                        break;
                    case '`brandpfeile`':
                        $stmt->bindValue($identifier, (int) $this->brandpfeile, PDO::PARAM_INT);
                        break;
                    case '`hufschmied`':
                        $stmt->bindValue($identifier, (int) $this->hufschmied, PDO::PARAM_INT);
                        break;
                    case '`umgebungskarte`':
                        $stmt->bindValue($identifier, (int) $this->umgebungskarte, PDO::PARAM_INT);
                        break;
                    case '`zisterne`':
                        $stmt->bindValue($identifier, (int) $this->zisterne, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = BuildingsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = BuildingsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getBergfried();
                break;
            case 2:
                return $this->getZeughaus();
                break;
            case 3:
                return $this->getTaverne();
                break;
            case 4:
                return $this->getBibliothek();
                break;
            case 5:
                return $this->getWehranlage();
                break;
            case 6:
                return $this->getMarkt();
                break;
            case 7:
                return $this->getBauernhof();
                break;
            case 8:
                return $this->getHolzfaeller();
                break;
            case 9:
                return $this->getHolzlager();
                break;
            case 10:
                return $this->getSteinbruch();
                break;
            case 11:
                return $this->getSteinlager();
                break;
            case 12:
                return $this->getErzmine();
                break;
            case 13:
                return $this->getErzlager();
                break;
            case 14:
                return $this->getLangbogen();
                break;
            case 15:
                return $this->getDreifelderwirtschaft();
                break;
            case 16:
                return $this->getKummet();
                break;
            case 17:
                return $this->getVorratskeller();
                break;
            case 18:
                return $this->getSteigbuegel();
                break;
            case 19:
                return $this->getWaffenschmied();
                break;
            case 20:
                return $this->getRuestungsschmied();
                break;
            case 21:
                return $this->getBierpruefer();
                break;
            case 22:
                return $this->getSchwertschmied();
                break;
            case 23:
                return $this->getEisenhaertung();
                break;
            case 24:
                return $this->getArmbrust();
                break;
            case 25:
                return $this->getGiftpfeile();
                break;
            case 26:
                return $this->getPferdezucht();
                break;
            case 27:
                return $this->getWaffenherstellung();
                break;
            case 28:
                return $this->getPferdepanzerung();
                break;
            case 29:
                return $this->getSchubkarren();
                break;
            case 30:
                return $this->getBrandpfeile();
                break;
            case 31:
                return $this->getHufschmied();
                break;
            case 32:
                return $this->getUmgebungskarte();
                break;
            case 33:
                return $this->getZisterne();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Buildings'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Buildings'][$this->getPrimaryKey()] = true;
        $keys = BuildingsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getBergfried(),
            $keys[2] => $this->getZeughaus(),
            $keys[3] => $this->getTaverne(),
            $keys[4] => $this->getBibliothek(),
            $keys[5] => $this->getWehranlage(),
            $keys[6] => $this->getMarkt(),
            $keys[7] => $this->getBauernhof(),
            $keys[8] => $this->getHolzfaeller(),
            $keys[9] => $this->getHolzlager(),
            $keys[10] => $this->getSteinbruch(),
            $keys[11] => $this->getSteinlager(),
            $keys[12] => $this->getErzmine(),
            $keys[13] => $this->getErzlager(),
            $keys[14] => $this->getLangbogen(),
            $keys[15] => $this->getDreifelderwirtschaft(),
            $keys[16] => $this->getKummet(),
            $keys[17] => $this->getVorratskeller(),
            $keys[18] => $this->getSteigbuegel(),
            $keys[19] => $this->getWaffenschmied(),
            $keys[20] => $this->getRuestungsschmied(),
            $keys[21] => $this->getBierpruefer(),
            $keys[22] => $this->getSchwertschmied(),
            $keys[23] => $this->getEisenhaertung(),
            $keys[24] => $this->getArmbrust(),
            $keys[25] => $this->getGiftpfeile(),
            $keys[26] => $this->getPferdezucht(),
            $keys[27] => $this->getWaffenherstellung(),
            $keys[28] => $this->getPferdepanzerung(),
            $keys[29] => $this->getSchubkarren(),
            $keys[30] => $this->getBrandpfeile(),
            $keys[31] => $this->getHufschmied(),
            $keys[32] => $this->getUmgebungskarte(),
            $keys[33] => $this->getZisterne(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = BuildingsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setBergfried($value);
                break;
            case 2:
                $this->setZeughaus($value);
                break;
            case 3:
                $this->setTaverne($value);
                break;
            case 4:
                $this->setBibliothek($value);
                break;
            case 5:
                $this->setWehranlage($value);
                break;
            case 6:
                $this->setMarkt($value);
                break;
            case 7:
                $this->setBauernhof($value);
                break;
            case 8:
                $this->setHolzfaeller($value);
                break;
            case 9:
                $this->setHolzlager($value);
                break;
            case 10:
                $this->setSteinbruch($value);
                break;
            case 11:
                $this->setSteinlager($value);
                break;
            case 12:
                $this->setErzmine($value);
                break;
            case 13:
                $this->setErzlager($value);
                break;
            case 14:
                $this->setLangbogen($value);
                break;
            case 15:
                $this->setDreifelderwirtschaft($value);
                break;
            case 16:
                $this->setKummet($value);
                break;
            case 17:
                $this->setVorratskeller($value);
                break;
            case 18:
                $this->setSteigbuegel($value);
                break;
            case 19:
                $this->setWaffenschmied($value);
                break;
            case 20:
                $this->setRuestungsschmied($value);
                break;
            case 21:
                $this->setBierpruefer($value);
                break;
            case 22:
                $this->setSchwertschmied($value);
                break;
            case 23:
                $this->setEisenhaertung($value);
                break;
            case 24:
                $this->setArmbrust($value);
                break;
            case 25:
                $this->setGiftpfeile($value);
                break;
            case 26:
                $this->setPferdezucht($value);
                break;
            case 27:
                $this->setWaffenherstellung($value);
                break;
            case 28:
                $this->setPferdepanzerung($value);
                break;
            case 29:
                $this->setSchubkarren($value);
                break;
            case 30:
                $this->setBrandpfeile($value);
                break;
            case 31:
                $this->setHufschmied($value);
                break;
            case 32:
                $this->setUmgebungskarte($value);
                break;
            case 33:
                $this->setZisterne($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = BuildingsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setBergfried($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZeughaus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTaverne($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBibliothek($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setWehranlage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMarkt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBauernhof($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHolzfaeller($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setHolzlager($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSteinbruch($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSteinlager($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setErzmine($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setErzlager($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLangbogen($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDreifelderwirtschaft($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setKummet($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setVorratskeller($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSteigbuegel($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setWaffenschmied($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setRuestungsschmied($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setBierpruefer($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSchwertschmied($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setEisenhaertung($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setArmbrust($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setGiftpfeile($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPferdezucht($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setWaffenherstellung($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setPferdepanzerung($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setSchubkarren($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setBrandpfeile($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setHufschmied($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setUmgebungskarte($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setZisterne($arr[$keys[33]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BuildingsPeer::DATABASE_NAME);

        if ($this->isColumnModified(BuildingsPeer::ID)) $criteria->add(BuildingsPeer::ID, $this->id);
        if ($this->isColumnModified(BuildingsPeer::BERGFRIED)) $criteria->add(BuildingsPeer::BERGFRIED, $this->bergfried);
        if ($this->isColumnModified(BuildingsPeer::ZEUGHAUS)) $criteria->add(BuildingsPeer::ZEUGHAUS, $this->zeughaus);
        if ($this->isColumnModified(BuildingsPeer::TAVERNE)) $criteria->add(BuildingsPeer::TAVERNE, $this->taverne);
        if ($this->isColumnModified(BuildingsPeer::BIBLIOTHEK)) $criteria->add(BuildingsPeer::BIBLIOTHEK, $this->bibliothek);
        if ($this->isColumnModified(BuildingsPeer::WEHRANLAGE)) $criteria->add(BuildingsPeer::WEHRANLAGE, $this->wehranlage);
        if ($this->isColumnModified(BuildingsPeer::MARKT)) $criteria->add(BuildingsPeer::MARKT, $this->markt);
        if ($this->isColumnModified(BuildingsPeer::BAUERNHOF)) $criteria->add(BuildingsPeer::BAUERNHOF, $this->bauernhof);
        if ($this->isColumnModified(BuildingsPeer::HOLZFAELLER)) $criteria->add(BuildingsPeer::HOLZFAELLER, $this->holzfaeller);
        if ($this->isColumnModified(BuildingsPeer::HOLZLAGER)) $criteria->add(BuildingsPeer::HOLZLAGER, $this->holzlager);
        if ($this->isColumnModified(BuildingsPeer::STEINBRUCH)) $criteria->add(BuildingsPeer::STEINBRUCH, $this->steinbruch);
        if ($this->isColumnModified(BuildingsPeer::STEINLAGER)) $criteria->add(BuildingsPeer::STEINLAGER, $this->steinlager);
        if ($this->isColumnModified(BuildingsPeer::ERZMINE)) $criteria->add(BuildingsPeer::ERZMINE, $this->erzmine);
        if ($this->isColumnModified(BuildingsPeer::ERZLAGER)) $criteria->add(BuildingsPeer::ERZLAGER, $this->erzlager);
        if ($this->isColumnModified(BuildingsPeer::LANGBOGEN)) $criteria->add(BuildingsPeer::LANGBOGEN, $this->langbogen);
        if ($this->isColumnModified(BuildingsPeer::DREIFELDERWIRTSCHAFT)) $criteria->add(BuildingsPeer::DREIFELDERWIRTSCHAFT, $this->dreifelderwirtschaft);
        if ($this->isColumnModified(BuildingsPeer::KUMMET)) $criteria->add(BuildingsPeer::KUMMET, $this->kummet);
        if ($this->isColumnModified(BuildingsPeer::VORRATSKELLER)) $criteria->add(BuildingsPeer::VORRATSKELLER, $this->vorratskeller);
        if ($this->isColumnModified(BuildingsPeer::STEIGBUEGEL)) $criteria->add(BuildingsPeer::STEIGBUEGEL, $this->steigbuegel);
        if ($this->isColumnModified(BuildingsPeer::WAFFENSCHMIED)) $criteria->add(BuildingsPeer::WAFFENSCHMIED, $this->waffenschmied);
        if ($this->isColumnModified(BuildingsPeer::RUESTUNGSSCHMIED)) $criteria->add(BuildingsPeer::RUESTUNGSSCHMIED, $this->ruestungsschmied);
        if ($this->isColumnModified(BuildingsPeer::BIERPRUEFER)) $criteria->add(BuildingsPeer::BIERPRUEFER, $this->bierpruefer);
        if ($this->isColumnModified(BuildingsPeer::SCHWERTSCHMIED)) $criteria->add(BuildingsPeer::SCHWERTSCHMIED, $this->schwertschmied);
        if ($this->isColumnModified(BuildingsPeer::EISENHAERTUNG)) $criteria->add(BuildingsPeer::EISENHAERTUNG, $this->eisenhaertung);
        if ($this->isColumnModified(BuildingsPeer::ARMBRUST)) $criteria->add(BuildingsPeer::ARMBRUST, $this->armbrust);
        if ($this->isColumnModified(BuildingsPeer::GIFTPFEILE)) $criteria->add(BuildingsPeer::GIFTPFEILE, $this->giftpfeile);
        if ($this->isColumnModified(BuildingsPeer::PFERDEZUCHT)) $criteria->add(BuildingsPeer::PFERDEZUCHT, $this->pferdezucht);
        if ($this->isColumnModified(BuildingsPeer::WAFFENHERSTELLUNG)) $criteria->add(BuildingsPeer::WAFFENHERSTELLUNG, $this->waffenherstellung);
        if ($this->isColumnModified(BuildingsPeer::PFERDEPANZERUNG)) $criteria->add(BuildingsPeer::PFERDEPANZERUNG, $this->pferdepanzerung);
        if ($this->isColumnModified(BuildingsPeer::SCHUBKARREN)) $criteria->add(BuildingsPeer::SCHUBKARREN, $this->schubkarren);
        if ($this->isColumnModified(BuildingsPeer::BRANDPFEILE)) $criteria->add(BuildingsPeer::BRANDPFEILE, $this->brandpfeile);
        if ($this->isColumnModified(BuildingsPeer::HUFSCHMIED)) $criteria->add(BuildingsPeer::HUFSCHMIED, $this->hufschmied);
        if ($this->isColumnModified(BuildingsPeer::UMGEBUNGSKARTE)) $criteria->add(BuildingsPeer::UMGEBUNGSKARTE, $this->umgebungskarte);
        if ($this->isColumnModified(BuildingsPeer::ZISTERNE)) $criteria->add(BuildingsPeer::ZISTERNE, $this->zisterne);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(BuildingsPeer::DATABASE_NAME);
        $criteria->add(BuildingsPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Buildings (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBergfried($this->getBergfried());
        $copyObj->setZeughaus($this->getZeughaus());
        $copyObj->setTaverne($this->getTaverne());
        $copyObj->setBibliothek($this->getBibliothek());
        $copyObj->setWehranlage($this->getWehranlage());
        $copyObj->setMarkt($this->getMarkt());
        $copyObj->setBauernhof($this->getBauernhof());
        $copyObj->setHolzfaeller($this->getHolzfaeller());
        $copyObj->setHolzlager($this->getHolzlager());
        $copyObj->setSteinbruch($this->getSteinbruch());
        $copyObj->setSteinlager($this->getSteinlager());
        $copyObj->setErzmine($this->getErzmine());
        $copyObj->setErzlager($this->getErzlager());
        $copyObj->setLangbogen($this->getLangbogen());
        $copyObj->setDreifelderwirtschaft($this->getDreifelderwirtschaft());
        $copyObj->setKummet($this->getKummet());
        $copyObj->setVorratskeller($this->getVorratskeller());
        $copyObj->setSteigbuegel($this->getSteigbuegel());
        $copyObj->setWaffenschmied($this->getWaffenschmied());
        $copyObj->setRuestungsschmied($this->getRuestungsschmied());
        $copyObj->setBierpruefer($this->getBierpruefer());
        $copyObj->setSchwertschmied($this->getSchwertschmied());
        $copyObj->setEisenhaertung($this->getEisenhaertung());
        $copyObj->setArmbrust($this->getArmbrust());
        $copyObj->setGiftpfeile($this->getGiftpfeile());
        $copyObj->setPferdezucht($this->getPferdezucht());
        $copyObj->setWaffenherstellung($this->getWaffenherstellung());
        $copyObj->setPferdepanzerung($this->getPferdepanzerung());
        $copyObj->setSchubkarren($this->getSchubkarren());
        $copyObj->setBrandpfeile($this->getBrandpfeile());
        $copyObj->setHufschmied($this->getHufschmied());
        $copyObj->setUmgebungskarte($this->getUmgebungskarte());
        $copyObj->setZisterne($this->getZisterne());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Buildings Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return BuildingsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BuildingsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->bergfried = null;
        $this->zeughaus = null;
        $this->taverne = null;
        $this->bibliothek = null;
        $this->wehranlage = null;
        $this->markt = null;
        $this->bauernhof = null;
        $this->holzfaeller = null;
        $this->holzlager = null;
        $this->steinbruch = null;
        $this->steinlager = null;
        $this->erzmine = null;
        $this->erzlager = null;
        $this->langbogen = null;
        $this->dreifelderwirtschaft = null;
        $this->kummet = null;
        $this->vorratskeller = null;
        $this->steigbuegel = null;
        $this->waffenschmied = null;
        $this->ruestungsschmied = null;
        $this->bierpruefer = null;
        $this->schwertschmied = null;
        $this->eisenhaertung = null;
        $this->armbrust = null;
        $this->giftpfeile = null;
        $this->pferdezucht = null;
        $this->waffenherstellung = null;
        $this->pferdepanzerung = null;
        $this->schubkarren = null;
        $this->brandpfeile = null;
        $this->hufschmied = null;
        $this->umgebungskarte = null;
        $this->zisterne = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BuildingsPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}

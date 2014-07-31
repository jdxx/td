<?php


/**
 * Base class that represents a row from the 'castle_type' table.
 *
 *
 *
 * @package    propel.generator.orm.om
 */
abstract class BaseCastleType extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CastleTypePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CastleTypePeer
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
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the total_st field.
     * @var        int
     */
    protected $total_st;

    /**
     * The value for the total_sk field.
     * @var        int
     */
    protected $total_sk;

    /**
     * The value for the total_bs field.
     * @var        int
     */
    protected $total_bs;

    /**
     * The value for the total_as field.
     * @var        int
     */
    protected $total_as;

    /**
     * The value for the total_pr field.
     * @var        int
     */
    protected $total_pr;

    /**
     * The value for the total_lr field.
     * @var        int
     */
    protected $total_lr;

    /**
     * The value for the total_hk field.
     * @var        int
     */
    protected $total_hk;

    /**
     * The value for the total_ok field.
     * @var        int
     */
    protected $total_ok;

    /**
     * The value for the mission_st field.
     * @var        int
     */
    protected $mission_st;

    /**
     * The value for the mission_sk field.
     * @var        int
     */
    protected $mission_sk;

    /**
     * The value for the mission_bs field.
     * @var        int
     */
    protected $mission_bs;

    /**
     * The value for the mission_as field.
     * @var        int
     */
    protected $mission_as;

    /**
     * The value for the mission_pr field.
     * @var        int
     */
    protected $mission_pr;

    /**
     * The value for the mission_lr field.
     * @var        int
     */
    protected $mission_lr;

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
     * The value for the max_population field.
     * @var        int
     */
    protected $max_population;

    /**
     * The value for the free_population field.
     * @var        int
     */
    protected $free_population;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        PropelObjectCollection|Castle[] Collection to store aggregation of Castle objects.
     */
    protected $collCastles;
    protected $collCastlesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $castlesScheduledForDeletion = null;

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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Get the [type] column value.
     * Off, Def, Mix
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [total_st] column value.
     *
     * @return int
     */
    public function getTotalSt()
    {

        return $this->total_st;
    }

    /**
     * Get the [total_sk] column value.
     *
     * @return int
     */
    public function getTotalSk()
    {

        return $this->total_sk;
    }

    /**
     * Get the [total_bs] column value.
     *
     * @return int
     */
    public function getTotalBs()
    {

        return $this->total_bs;
    }

    /**
     * Get the [total_as] column value.
     *
     * @return int
     */
    public function getTotalAs()
    {

        return $this->total_as;
    }

    /**
     * Get the [total_pr] column value.
     *
     * @return int
     */
    public function getTotalPr()
    {

        return $this->total_pr;
    }

    /**
     * Get the [total_lr] column value.
     *
     * @return int
     */
    public function getTotalLr()
    {

        return $this->total_lr;
    }

    /**
     * Get the [total_hk] column value.
     *
     * @return int
     */
    public function getTotalHk()
    {

        return $this->total_hk;
    }

    /**
     * Get the [total_ok] column value.
     *
     * @return int
     */
    public function getTotalOk()
    {

        return $this->total_ok;
    }

    /**
     * Get the [mission_st] column value.
     *
     * @return int
     */
    public function getMissionSt()
    {

        return $this->mission_st;
    }

    /**
     * Get the [mission_sk] column value.
     *
     * @return int
     */
    public function getMissionSk()
    {

        return $this->mission_sk;
    }

    /**
     * Get the [mission_bs] column value.
     *
     * @return int
     */
    public function getMissionBs()
    {

        return $this->mission_bs;
    }

    /**
     * Get the [mission_as] column value.
     *
     * @return int
     */
    public function getMissionAs()
    {

        return $this->mission_as;
    }

    /**
     * Get the [mission_pr] column value.
     *
     * @return int
     */
    public function getMissionPr()
    {

        return $this->mission_pr;
    }

    /**
     * Get the [mission_lr] column value.
     *
     * @return int
     */
    public function getMissionLr()
    {

        return $this->mission_lr;
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
     * Get the [max_population] column value.
     *
     * @return int
     */
    public function getMaxPopulation()
    {

        return $this->max_population;
    }

    /**
     * Get the [free_population] column value.
     *
     * @return int
     */
    public function getFreePopulation()
    {

        return $this->free_population;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CastleTypePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = CastleTypePeer::USER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getId() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [type] column.
     * Off, Def, Mix
     * @param  string $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CastleTypePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = CastleTypePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [total_st] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalSt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_st !== $v) {
            $this->total_st = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_ST;
        }


        return $this;
    } // setTotalSt()

    /**
     * Set the value of [total_sk] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_sk !== $v) {
            $this->total_sk = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_SK;
        }


        return $this;
    } // setTotalSk()

    /**
     * Set the value of [total_bs] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_bs !== $v) {
            $this->total_bs = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_BS;
        }


        return $this;
    } // setTotalBs()

    /**
     * Set the value of [total_as] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalAs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_as !== $v) {
            $this->total_as = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_AS;
        }


        return $this;
    } // setTotalAs()

    /**
     * Set the value of [total_pr] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalPr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_pr !== $v) {
            $this->total_pr = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_PR;
        }


        return $this;
    } // setTotalPr()

    /**
     * Set the value of [total_lr] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_lr !== $v) {
            $this->total_lr = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_LR;
        }


        return $this;
    } // setTotalLr()

    /**
     * Set the value of [total_hk] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalHk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_hk !== $v) {
            $this->total_hk = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_HK;
        }


        return $this;
    } // setTotalHk()

    /**
     * Set the value of [total_ok] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTotalOk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_ok !== $v) {
            $this->total_ok = $v;
            $this->modifiedColumns[] = CastleTypePeer::TOTAL_OK;
        }


        return $this;
    } // setTotalOk()

    /**
     * Set the value of [mission_st] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMissionSt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_st !== $v) {
            $this->mission_st = $v;
            $this->modifiedColumns[] = CastleTypePeer::MISSION_ST;
        }


        return $this;
    } // setMissionSt()

    /**
     * Set the value of [mission_sk] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMissionSk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_sk !== $v) {
            $this->mission_sk = $v;
            $this->modifiedColumns[] = CastleTypePeer::MISSION_SK;
        }


        return $this;
    } // setMissionSk()

    /**
     * Set the value of [mission_bs] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMissionBs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_bs !== $v) {
            $this->mission_bs = $v;
            $this->modifiedColumns[] = CastleTypePeer::MISSION_BS;
        }


        return $this;
    } // setMissionBs()

    /**
     * Set the value of [mission_as] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMissionAs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_as !== $v) {
            $this->mission_as = $v;
            $this->modifiedColumns[] = CastleTypePeer::MISSION_AS;
        }


        return $this;
    } // setMissionAs()

    /**
     * Set the value of [mission_pr] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMissionPr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_pr !== $v) {
            $this->mission_pr = $v;
            $this->modifiedColumns[] = CastleTypePeer::MISSION_PR;
        }


        return $this;
    } // setMissionPr()

    /**
     * Set the value of [mission_lr] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMissionLr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mission_lr !== $v) {
            $this->mission_lr = $v;
            $this->modifiedColumns[] = CastleTypePeer::MISSION_LR;
        }


        return $this;
    } // setMissionLr()

    /**
     * Set the value of [bergfried] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setBergfried($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bergfried !== $v) {
            $this->bergfried = $v;
            $this->modifiedColumns[] = CastleTypePeer::BERGFRIED;
        }


        return $this;
    } // setBergfried()

    /**
     * Set the value of [zeughaus] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setZeughaus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zeughaus !== $v) {
            $this->zeughaus = $v;
            $this->modifiedColumns[] = CastleTypePeer::ZEUGHAUS;
        }


        return $this;
    } // setZeughaus()

    /**
     * Set the value of [taverne] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setTaverne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taverne !== $v) {
            $this->taverne = $v;
            $this->modifiedColumns[] = CastleTypePeer::TAVERNE;
        }


        return $this;
    } // setTaverne()

    /**
     * Set the value of [bibliothek] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setBibliothek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bibliothek !== $v) {
            $this->bibliothek = $v;
            $this->modifiedColumns[] = CastleTypePeer::BIBLIOTHEK;
        }


        return $this;
    } // setBibliothek()

    /**
     * Set the value of [wehranlage] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setWehranlage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wehranlage !== $v) {
            $this->wehranlage = $v;
            $this->modifiedColumns[] = CastleTypePeer::WEHRANLAGE;
        }


        return $this;
    } // setWehranlage()

    /**
     * Set the value of [markt] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMarkt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->markt !== $v) {
            $this->markt = $v;
            $this->modifiedColumns[] = CastleTypePeer::MARKT;
        }


        return $this;
    } // setMarkt()

    /**
     * Set the value of [bauernhof] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setBauernhof($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bauernhof !== $v) {
            $this->bauernhof = $v;
            $this->modifiedColumns[] = CastleTypePeer::BAUERNHOF;
        }


        return $this;
    } // setBauernhof()

    /**
     * Set the value of [holzfaeller] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setHolzfaeller($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->holzfaeller !== $v) {
            $this->holzfaeller = $v;
            $this->modifiedColumns[] = CastleTypePeer::HOLZFAELLER;
        }


        return $this;
    } // setHolzfaeller()

    /**
     * Set the value of [holzlager] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setHolzlager($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->holzlager !== $v) {
            $this->holzlager = $v;
            $this->modifiedColumns[] = CastleTypePeer::HOLZLAGER;
        }


        return $this;
    } // setHolzlager()

    /**
     * Set the value of [steinbruch] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setSteinbruch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->steinbruch !== $v) {
            $this->steinbruch = $v;
            $this->modifiedColumns[] = CastleTypePeer::STEINBRUCH;
        }


        return $this;
    } // setSteinbruch()

    /**
     * Set the value of [steinlager] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setSteinlager($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->steinlager !== $v) {
            $this->steinlager = $v;
            $this->modifiedColumns[] = CastleTypePeer::STEINLAGER;
        }


        return $this;
    } // setSteinlager()

    /**
     * Set the value of [erzmine] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setErzmine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->erzmine !== $v) {
            $this->erzmine = $v;
            $this->modifiedColumns[] = CastleTypePeer::ERZMINE;
        }


        return $this;
    } // setErzmine()

    /**
     * Set the value of [erzlager] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setErzlager($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->erzlager !== $v) {
            $this->erzlager = $v;
            $this->modifiedColumns[] = CastleTypePeer::ERZLAGER;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::LANGBOGEN;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::DREIFELDERWIRTSCHAFT;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::KUMMET;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::VORRATSKELLER;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::STEIGBUEGEL;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::WAFFENSCHMIED;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::RUESTUNGSSCHMIED;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::BIERPRUEFER;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::SCHWERTSCHMIED;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::EISENHAERTUNG;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::ARMBRUST;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::GIFTPFEILE;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::PFERDEZUCHT;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::WAFFENHERSTELLUNG;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::PFERDEPANZERUNG;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::SCHUBKARREN;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::BRANDPFEILE;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::HUFSCHMIED;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::UMGEBUNGSKARTE;
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
     * @return CastleType The current object (for fluent API support)
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
            $this->modifiedColumns[] = CastleTypePeer::ZISTERNE;
        }


        return $this;
    } // setZisterne()

    /**
     * Set the value of [max_population] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setMaxPopulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->max_population !== $v) {
            $this->max_population = $v;
            $this->modifiedColumns[] = CastleTypePeer::MAX_POPULATION;
        }


        return $this;
    } // setMaxPopulation()

    /**
     * Set the value of [free_population] column.
     *
     * @param  int $v new value
     * @return CastleType The current object (for fluent API support)
     */
    public function setFreePopulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->free_population !== $v) {
            $this->free_population = $v;
            $this->modifiedColumns[] = CastleTypePeer::FREE_POPULATION;
        }


        return $this;
    } // setFreePopulation()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CastleType The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = CastleTypePeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CastleType The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = CastleTypePeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

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
            $this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->total_st = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->total_sk = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->total_bs = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->total_as = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->total_pr = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->total_lr = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->total_hk = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->total_ok = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->mission_st = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->mission_sk = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->mission_bs = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->mission_as = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->mission_pr = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->mission_lr = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->bergfried = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->zeughaus = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->taverne = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->bibliothek = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->wehranlage = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->markt = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->bauernhof = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->holzfaeller = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->holzlager = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->steinbruch = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->steinlager = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->erzmine = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->erzlager = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->langbogen = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
            $this->dreifelderwirtschaft = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
            $this->kummet = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
            $this->vorratskeller = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
            $this->steigbuegel = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
            $this->waffenschmied = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
            $this->ruestungsschmied = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
            $this->bierpruefer = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
            $this->schwertschmied = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
            $this->eisenhaertung = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
            $this->armbrust = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
            $this->giftpfeile = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
            $this->pferdezucht = ($row[$startcol + 43] !== null) ? (boolean) $row[$startcol + 43] : null;
            $this->waffenherstellung = ($row[$startcol + 44] !== null) ? (boolean) $row[$startcol + 44] : null;
            $this->pferdepanzerung = ($row[$startcol + 45] !== null) ? (boolean) $row[$startcol + 45] : null;
            $this->schubkarren = ($row[$startcol + 46] !== null) ? (boolean) $row[$startcol + 46] : null;
            $this->brandpfeile = ($row[$startcol + 47] !== null) ? (boolean) $row[$startcol + 47] : null;
            $this->hufschmied = ($row[$startcol + 48] !== null) ? (boolean) $row[$startcol + 48] : null;
            $this->umgebungskarte = ($row[$startcol + 49] !== null) ? (boolean) $row[$startcol + 49] : null;
            $this->zisterne = ($row[$startcol + 50] !== null) ? (boolean) $row[$startcol + 50] : null;
            $this->max_population = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->free_population = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->created_at = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->updated_at = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 55; // 55 = CastleTypePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CastleType object", $e);
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

        if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
            $this->aUser = null;
        }
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
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CastleTypePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUser = null;
            $this->collCastles = null;

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
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CastleTypeQuery::create()
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
            $con = Propel::getConnection(CastleTypePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(CastleTypePeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(CastleTypePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(CastleTypePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CastleTypePeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

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

            if ($this->castlesScheduledForDeletion !== null) {
                if (!$this->castlesScheduledForDeletion->isEmpty()) {
                    foreach ($this->castlesScheduledForDeletion as $castle) {
                        // need to save related object because we set the relation to null
                        $castle->save($con);
                    }
                    $this->castlesScheduledForDeletion = null;
                }
            }

            if ($this->collCastles !== null) {
                foreach ($this->collCastles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CastleTypePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CastleTypePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CastleTypePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CastleTypePeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(CastleTypePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CastleTypePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_ST)) {
            $modifiedColumns[':p' . $index++]  = '`total_st`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_SK)) {
            $modifiedColumns[':p' . $index++]  = '`total_sk`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_BS)) {
            $modifiedColumns[':p' . $index++]  = '`total_bs`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_AS)) {
            $modifiedColumns[':p' . $index++]  = '`total_as`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_PR)) {
            $modifiedColumns[':p' . $index++]  = '`total_pr`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_LR)) {
            $modifiedColumns[':p' . $index++]  = '`total_lr`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_HK)) {
            $modifiedColumns[':p' . $index++]  = '`total_hk`';
        }
        if ($this->isColumnModified(CastleTypePeer::TOTAL_OK)) {
            $modifiedColumns[':p' . $index++]  = '`total_ok`';
        }
        if ($this->isColumnModified(CastleTypePeer::MISSION_ST)) {
            $modifiedColumns[':p' . $index++]  = '`mission_st`';
        }
        if ($this->isColumnModified(CastleTypePeer::MISSION_SK)) {
            $modifiedColumns[':p' . $index++]  = '`mission_sk`';
        }
        if ($this->isColumnModified(CastleTypePeer::MISSION_BS)) {
            $modifiedColumns[':p' . $index++]  = '`mission_bs`';
        }
        if ($this->isColumnModified(CastleTypePeer::MISSION_AS)) {
            $modifiedColumns[':p' . $index++]  = '`mission_as`';
        }
        if ($this->isColumnModified(CastleTypePeer::MISSION_PR)) {
            $modifiedColumns[':p' . $index++]  = '`mission_pr`';
        }
        if ($this->isColumnModified(CastleTypePeer::MISSION_LR)) {
            $modifiedColumns[':p' . $index++]  = '`mission_lr`';
        }
        if ($this->isColumnModified(CastleTypePeer::BERGFRIED)) {
            $modifiedColumns[':p' . $index++]  = '`bergfried`';
        }
        if ($this->isColumnModified(CastleTypePeer::ZEUGHAUS)) {
            $modifiedColumns[':p' . $index++]  = '`zeughaus`';
        }
        if ($this->isColumnModified(CastleTypePeer::TAVERNE)) {
            $modifiedColumns[':p' . $index++]  = '`taverne`';
        }
        if ($this->isColumnModified(CastleTypePeer::BIBLIOTHEK)) {
            $modifiedColumns[':p' . $index++]  = '`bibliothek`';
        }
        if ($this->isColumnModified(CastleTypePeer::WEHRANLAGE)) {
            $modifiedColumns[':p' . $index++]  = '`wehranlage`';
        }
        if ($this->isColumnModified(CastleTypePeer::MARKT)) {
            $modifiedColumns[':p' . $index++]  = '`markt`';
        }
        if ($this->isColumnModified(CastleTypePeer::BAUERNHOF)) {
            $modifiedColumns[':p' . $index++]  = '`bauernhof`';
        }
        if ($this->isColumnModified(CastleTypePeer::HOLZFAELLER)) {
            $modifiedColumns[':p' . $index++]  = '`holzfaeller`';
        }
        if ($this->isColumnModified(CastleTypePeer::HOLZLAGER)) {
            $modifiedColumns[':p' . $index++]  = '`holzlager`';
        }
        if ($this->isColumnModified(CastleTypePeer::STEINBRUCH)) {
            $modifiedColumns[':p' . $index++]  = '`steinbruch`';
        }
        if ($this->isColumnModified(CastleTypePeer::STEINLAGER)) {
            $modifiedColumns[':p' . $index++]  = '`steinlager`';
        }
        if ($this->isColumnModified(CastleTypePeer::ERZMINE)) {
            $modifiedColumns[':p' . $index++]  = '`erzmine`';
        }
        if ($this->isColumnModified(CastleTypePeer::ERZLAGER)) {
            $modifiedColumns[':p' . $index++]  = '`erzlager`';
        }
        if ($this->isColumnModified(CastleTypePeer::LANGBOGEN)) {
            $modifiedColumns[':p' . $index++]  = '`langbogen`';
        }
        if ($this->isColumnModified(CastleTypePeer::DREIFELDERWIRTSCHAFT)) {
            $modifiedColumns[':p' . $index++]  = '`dreifelderwirtschaft`';
        }
        if ($this->isColumnModified(CastleTypePeer::KUMMET)) {
            $modifiedColumns[':p' . $index++]  = '`kummet`';
        }
        if ($this->isColumnModified(CastleTypePeer::VORRATSKELLER)) {
            $modifiedColumns[':p' . $index++]  = '`vorratskeller`';
        }
        if ($this->isColumnModified(CastleTypePeer::STEIGBUEGEL)) {
            $modifiedColumns[':p' . $index++]  = '`steigbuegel`';
        }
        if ($this->isColumnModified(CastleTypePeer::WAFFENSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`waffenschmied`';
        }
        if ($this->isColumnModified(CastleTypePeer::RUESTUNGSSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`ruestungsschmied`';
        }
        if ($this->isColumnModified(CastleTypePeer::BIERPRUEFER)) {
            $modifiedColumns[':p' . $index++]  = '`bierpruefer`';
        }
        if ($this->isColumnModified(CastleTypePeer::SCHWERTSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`schwertschmied`';
        }
        if ($this->isColumnModified(CastleTypePeer::EISENHAERTUNG)) {
            $modifiedColumns[':p' . $index++]  = '`eisenhaertung`';
        }
        if ($this->isColumnModified(CastleTypePeer::ARMBRUST)) {
            $modifiedColumns[':p' . $index++]  = '`armbrust`';
        }
        if ($this->isColumnModified(CastleTypePeer::GIFTPFEILE)) {
            $modifiedColumns[':p' . $index++]  = '`giftpfeile`';
        }
        if ($this->isColumnModified(CastleTypePeer::PFERDEZUCHT)) {
            $modifiedColumns[':p' . $index++]  = '`pferdezucht`';
        }
        if ($this->isColumnModified(CastleTypePeer::WAFFENHERSTELLUNG)) {
            $modifiedColumns[':p' . $index++]  = '`waffenherstellung`';
        }
        if ($this->isColumnModified(CastleTypePeer::PFERDEPANZERUNG)) {
            $modifiedColumns[':p' . $index++]  = '`pferdepanzerung`';
        }
        if ($this->isColumnModified(CastleTypePeer::SCHUBKARREN)) {
            $modifiedColumns[':p' . $index++]  = '`schubkarren`';
        }
        if ($this->isColumnModified(CastleTypePeer::BRANDPFEILE)) {
            $modifiedColumns[':p' . $index++]  = '`brandpfeile`';
        }
        if ($this->isColumnModified(CastleTypePeer::HUFSCHMIED)) {
            $modifiedColumns[':p' . $index++]  = '`hufschmied`';
        }
        if ($this->isColumnModified(CastleTypePeer::UMGEBUNGSKARTE)) {
            $modifiedColumns[':p' . $index++]  = '`umgebungskarte`';
        }
        if ($this->isColumnModified(CastleTypePeer::ZISTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`zisterne`';
        }
        if ($this->isColumnModified(CastleTypePeer::MAX_POPULATION)) {
            $modifiedColumns[':p' . $index++]  = '`max_population`';
        }
        if ($this->isColumnModified(CastleTypePeer::FREE_POPULATION)) {
            $modifiedColumns[':p' . $index++]  = '`free_population`';
        }
        if ($this->isColumnModified(CastleTypePeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(CastleTypePeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `castle_type` (%s) VALUES (%s)',
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
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`total_st`':
                        $stmt->bindValue($identifier, $this->total_st, PDO::PARAM_INT);
                        break;
                    case '`total_sk`':
                        $stmt->bindValue($identifier, $this->total_sk, PDO::PARAM_INT);
                        break;
                    case '`total_bs`':
                        $stmt->bindValue($identifier, $this->total_bs, PDO::PARAM_INT);
                        break;
                    case '`total_as`':
                        $stmt->bindValue($identifier, $this->total_as, PDO::PARAM_INT);
                        break;
                    case '`total_pr`':
                        $stmt->bindValue($identifier, $this->total_pr, PDO::PARAM_INT);
                        break;
                    case '`total_lr`':
                        $stmt->bindValue($identifier, $this->total_lr, PDO::PARAM_INT);
                        break;
                    case '`total_hk`':
                        $stmt->bindValue($identifier, $this->total_hk, PDO::PARAM_INT);
                        break;
                    case '`total_ok`':
                        $stmt->bindValue($identifier, $this->total_ok, PDO::PARAM_INT);
                        break;
                    case '`mission_st`':
                        $stmt->bindValue($identifier, $this->mission_st, PDO::PARAM_INT);
                        break;
                    case '`mission_sk`':
                        $stmt->bindValue($identifier, $this->mission_sk, PDO::PARAM_INT);
                        break;
                    case '`mission_bs`':
                        $stmt->bindValue($identifier, $this->mission_bs, PDO::PARAM_INT);
                        break;
                    case '`mission_as`':
                        $stmt->bindValue($identifier, $this->mission_as, PDO::PARAM_INT);
                        break;
                    case '`mission_pr`':
                        $stmt->bindValue($identifier, $this->mission_pr, PDO::PARAM_INT);
                        break;
                    case '`mission_lr`':
                        $stmt->bindValue($identifier, $this->mission_lr, PDO::PARAM_INT);
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
                    case '`max_population`':
                        $stmt->bindValue($identifier, $this->max_population, PDO::PARAM_INT);
                        break;
                    case '`free_population`':
                        $stmt->bindValue($identifier, $this->free_population, PDO::PARAM_INT);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }


            if (($retval = CastleTypePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCastles !== null) {
                    foreach ($this->collCastles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CastleTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 2:
                return $this->getType();
                break;
            case 3:
                return $this->getName();
                break;
            case 4:
                return $this->getTotalSt();
                break;
            case 5:
                return $this->getTotalSk();
                break;
            case 6:
                return $this->getTotalBs();
                break;
            case 7:
                return $this->getTotalAs();
                break;
            case 8:
                return $this->getTotalPr();
                break;
            case 9:
                return $this->getTotalLr();
                break;
            case 10:
                return $this->getTotalHk();
                break;
            case 11:
                return $this->getTotalOk();
                break;
            case 12:
                return $this->getMissionSt();
                break;
            case 13:
                return $this->getMissionSk();
                break;
            case 14:
                return $this->getMissionBs();
                break;
            case 15:
                return $this->getMissionAs();
                break;
            case 16:
                return $this->getMissionPr();
                break;
            case 17:
                return $this->getMissionLr();
                break;
            case 18:
                return $this->getBergfried();
                break;
            case 19:
                return $this->getZeughaus();
                break;
            case 20:
                return $this->getTaverne();
                break;
            case 21:
                return $this->getBibliothek();
                break;
            case 22:
                return $this->getWehranlage();
                break;
            case 23:
                return $this->getMarkt();
                break;
            case 24:
                return $this->getBauernhof();
                break;
            case 25:
                return $this->getHolzfaeller();
                break;
            case 26:
                return $this->getHolzlager();
                break;
            case 27:
                return $this->getSteinbruch();
                break;
            case 28:
                return $this->getSteinlager();
                break;
            case 29:
                return $this->getErzmine();
                break;
            case 30:
                return $this->getErzlager();
                break;
            case 31:
                return $this->getLangbogen();
                break;
            case 32:
                return $this->getDreifelderwirtschaft();
                break;
            case 33:
                return $this->getKummet();
                break;
            case 34:
                return $this->getVorratskeller();
                break;
            case 35:
                return $this->getSteigbuegel();
                break;
            case 36:
                return $this->getWaffenschmied();
                break;
            case 37:
                return $this->getRuestungsschmied();
                break;
            case 38:
                return $this->getBierpruefer();
                break;
            case 39:
                return $this->getSchwertschmied();
                break;
            case 40:
                return $this->getEisenhaertung();
                break;
            case 41:
                return $this->getArmbrust();
                break;
            case 42:
                return $this->getGiftpfeile();
                break;
            case 43:
                return $this->getPferdezucht();
                break;
            case 44:
                return $this->getWaffenherstellung();
                break;
            case 45:
                return $this->getPferdepanzerung();
                break;
            case 46:
                return $this->getSchubkarren();
                break;
            case 47:
                return $this->getBrandpfeile();
                break;
            case 48:
                return $this->getHufschmied();
                break;
            case 49:
                return $this->getUmgebungskarte();
                break;
            case 50:
                return $this->getZisterne();
                break;
            case 51:
                return $this->getMaxPopulation();
                break;
            case 52:
                return $this->getFreePopulation();
                break;
            case 53:
                return $this->getCreatedAt();
                break;
            case 54:
                return $this->getUpdatedAt();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CastleType'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CastleType'][$this->getPrimaryKey()] = true;
        $keys = CastleTypePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserId(),
            $keys[2] => $this->getType(),
            $keys[3] => $this->getName(),
            $keys[4] => $this->getTotalSt(),
            $keys[5] => $this->getTotalSk(),
            $keys[6] => $this->getTotalBs(),
            $keys[7] => $this->getTotalAs(),
            $keys[8] => $this->getTotalPr(),
            $keys[9] => $this->getTotalLr(),
            $keys[10] => $this->getTotalHk(),
            $keys[11] => $this->getTotalOk(),
            $keys[12] => $this->getMissionSt(),
            $keys[13] => $this->getMissionSk(),
            $keys[14] => $this->getMissionBs(),
            $keys[15] => $this->getMissionAs(),
            $keys[16] => $this->getMissionPr(),
            $keys[17] => $this->getMissionLr(),
            $keys[18] => $this->getBergfried(),
            $keys[19] => $this->getZeughaus(),
            $keys[20] => $this->getTaverne(),
            $keys[21] => $this->getBibliothek(),
            $keys[22] => $this->getWehranlage(),
            $keys[23] => $this->getMarkt(),
            $keys[24] => $this->getBauernhof(),
            $keys[25] => $this->getHolzfaeller(),
            $keys[26] => $this->getHolzlager(),
            $keys[27] => $this->getSteinbruch(),
            $keys[28] => $this->getSteinlager(),
            $keys[29] => $this->getErzmine(),
            $keys[30] => $this->getErzlager(),
            $keys[31] => $this->getLangbogen(),
            $keys[32] => $this->getDreifelderwirtschaft(),
            $keys[33] => $this->getKummet(),
            $keys[34] => $this->getVorratskeller(),
            $keys[35] => $this->getSteigbuegel(),
            $keys[36] => $this->getWaffenschmied(),
            $keys[37] => $this->getRuestungsschmied(),
            $keys[38] => $this->getBierpruefer(),
            $keys[39] => $this->getSchwertschmied(),
            $keys[40] => $this->getEisenhaertung(),
            $keys[41] => $this->getArmbrust(),
            $keys[42] => $this->getGiftpfeile(),
            $keys[43] => $this->getPferdezucht(),
            $keys[44] => $this->getWaffenherstellung(),
            $keys[45] => $this->getPferdepanzerung(),
            $keys[46] => $this->getSchubkarren(),
            $keys[47] => $this->getBrandpfeile(),
            $keys[48] => $this->getHufschmied(),
            $keys[49] => $this->getUmgebungskarte(),
            $keys[50] => $this->getZisterne(),
            $keys[51] => $this->getMaxPopulation(),
            $keys[52] => $this->getFreePopulation(),
            $keys[53] => $this->getCreatedAt(),
            $keys[54] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCastles) {
                $result['Castles'] = $this->collCastles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
        $pos = CastleTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 2:
                $this->setType($value);
                break;
            case 3:
                $this->setName($value);
                break;
            case 4:
                $this->setTotalSt($value);
                break;
            case 5:
                $this->setTotalSk($value);
                break;
            case 6:
                $this->setTotalBs($value);
                break;
            case 7:
                $this->setTotalAs($value);
                break;
            case 8:
                $this->setTotalPr($value);
                break;
            case 9:
                $this->setTotalLr($value);
                break;
            case 10:
                $this->setTotalHk($value);
                break;
            case 11:
                $this->setTotalOk($value);
                break;
            case 12:
                $this->setMissionSt($value);
                break;
            case 13:
                $this->setMissionSk($value);
                break;
            case 14:
                $this->setMissionBs($value);
                break;
            case 15:
                $this->setMissionAs($value);
                break;
            case 16:
                $this->setMissionPr($value);
                break;
            case 17:
                $this->setMissionLr($value);
                break;
            case 18:
                $this->setBergfried($value);
                break;
            case 19:
                $this->setZeughaus($value);
                break;
            case 20:
                $this->setTaverne($value);
                break;
            case 21:
                $this->setBibliothek($value);
                break;
            case 22:
                $this->setWehranlage($value);
                break;
            case 23:
                $this->setMarkt($value);
                break;
            case 24:
                $this->setBauernhof($value);
                break;
            case 25:
                $this->setHolzfaeller($value);
                break;
            case 26:
                $this->setHolzlager($value);
                break;
            case 27:
                $this->setSteinbruch($value);
                break;
            case 28:
                $this->setSteinlager($value);
                break;
            case 29:
                $this->setErzmine($value);
                break;
            case 30:
                $this->setErzlager($value);
                break;
            case 31:
                $this->setLangbogen($value);
                break;
            case 32:
                $this->setDreifelderwirtschaft($value);
                break;
            case 33:
                $this->setKummet($value);
                break;
            case 34:
                $this->setVorratskeller($value);
                break;
            case 35:
                $this->setSteigbuegel($value);
                break;
            case 36:
                $this->setWaffenschmied($value);
                break;
            case 37:
                $this->setRuestungsschmied($value);
                break;
            case 38:
                $this->setBierpruefer($value);
                break;
            case 39:
                $this->setSchwertschmied($value);
                break;
            case 40:
                $this->setEisenhaertung($value);
                break;
            case 41:
                $this->setArmbrust($value);
                break;
            case 42:
                $this->setGiftpfeile($value);
                break;
            case 43:
                $this->setPferdezucht($value);
                break;
            case 44:
                $this->setWaffenherstellung($value);
                break;
            case 45:
                $this->setPferdepanzerung($value);
                break;
            case 46:
                $this->setSchubkarren($value);
                break;
            case 47:
                $this->setBrandpfeile($value);
                break;
            case 48:
                $this->setHufschmied($value);
                break;
            case 49:
                $this->setUmgebungskarte($value);
                break;
            case 50:
                $this->setZisterne($value);
                break;
            case 51:
                $this->setMaxPopulation($value);
                break;
            case 52:
                $this->setFreePopulation($value);
                break;
            case 53:
                $this->setCreatedAt($value);
                break;
            case 54:
                $this->setUpdatedAt($value);
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
        $keys = CastleTypePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setType($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTotalSt($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTotalSk($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTotalBs($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTotalAs($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTotalPr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTotalLr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTotalHk($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTotalOk($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMissionSt($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMissionSk($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMissionBs($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMissionAs($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMissionPr($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMissionLr($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setBergfried($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setZeughaus($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTaverne($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setBibliothek($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setWehranlage($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMarkt($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setBauernhof($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setHolzfaeller($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setHolzlager($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setSteinbruch($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSteinlager($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setErzmine($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setErzlager($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLangbogen($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDreifelderwirtschaft($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setKummet($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setVorratskeller($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setSteigbuegel($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setWaffenschmied($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setRuestungsschmied($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setBierpruefer($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setSchwertschmied($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setEisenhaertung($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setArmbrust($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setGiftpfeile($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setPferdezucht($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setWaffenherstellung($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setPferdepanzerung($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setSchubkarren($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setBrandpfeile($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setHufschmied($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setUmgebungskarte($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setZisterne($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setMaxPopulation($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setFreePopulation($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setCreatedAt($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setUpdatedAt($arr[$keys[54]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CastleTypePeer::DATABASE_NAME);

        if ($this->isColumnModified(CastleTypePeer::ID)) $criteria->add(CastleTypePeer::ID, $this->id);
        if ($this->isColumnModified(CastleTypePeer::USER_ID)) $criteria->add(CastleTypePeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(CastleTypePeer::TYPE)) $criteria->add(CastleTypePeer::TYPE, $this->type);
        if ($this->isColumnModified(CastleTypePeer::NAME)) $criteria->add(CastleTypePeer::NAME, $this->name);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_ST)) $criteria->add(CastleTypePeer::TOTAL_ST, $this->total_st);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_SK)) $criteria->add(CastleTypePeer::TOTAL_SK, $this->total_sk);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_BS)) $criteria->add(CastleTypePeer::TOTAL_BS, $this->total_bs);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_AS)) $criteria->add(CastleTypePeer::TOTAL_AS, $this->total_as);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_PR)) $criteria->add(CastleTypePeer::TOTAL_PR, $this->total_pr);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_LR)) $criteria->add(CastleTypePeer::TOTAL_LR, $this->total_lr);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_HK)) $criteria->add(CastleTypePeer::TOTAL_HK, $this->total_hk);
        if ($this->isColumnModified(CastleTypePeer::TOTAL_OK)) $criteria->add(CastleTypePeer::TOTAL_OK, $this->total_ok);
        if ($this->isColumnModified(CastleTypePeer::MISSION_ST)) $criteria->add(CastleTypePeer::MISSION_ST, $this->mission_st);
        if ($this->isColumnModified(CastleTypePeer::MISSION_SK)) $criteria->add(CastleTypePeer::MISSION_SK, $this->mission_sk);
        if ($this->isColumnModified(CastleTypePeer::MISSION_BS)) $criteria->add(CastleTypePeer::MISSION_BS, $this->mission_bs);
        if ($this->isColumnModified(CastleTypePeer::MISSION_AS)) $criteria->add(CastleTypePeer::MISSION_AS, $this->mission_as);
        if ($this->isColumnModified(CastleTypePeer::MISSION_PR)) $criteria->add(CastleTypePeer::MISSION_PR, $this->mission_pr);
        if ($this->isColumnModified(CastleTypePeer::MISSION_LR)) $criteria->add(CastleTypePeer::MISSION_LR, $this->mission_lr);
        if ($this->isColumnModified(CastleTypePeer::BERGFRIED)) $criteria->add(CastleTypePeer::BERGFRIED, $this->bergfried);
        if ($this->isColumnModified(CastleTypePeer::ZEUGHAUS)) $criteria->add(CastleTypePeer::ZEUGHAUS, $this->zeughaus);
        if ($this->isColumnModified(CastleTypePeer::TAVERNE)) $criteria->add(CastleTypePeer::TAVERNE, $this->taverne);
        if ($this->isColumnModified(CastleTypePeer::BIBLIOTHEK)) $criteria->add(CastleTypePeer::BIBLIOTHEK, $this->bibliothek);
        if ($this->isColumnModified(CastleTypePeer::WEHRANLAGE)) $criteria->add(CastleTypePeer::WEHRANLAGE, $this->wehranlage);
        if ($this->isColumnModified(CastleTypePeer::MARKT)) $criteria->add(CastleTypePeer::MARKT, $this->markt);
        if ($this->isColumnModified(CastleTypePeer::BAUERNHOF)) $criteria->add(CastleTypePeer::BAUERNHOF, $this->bauernhof);
        if ($this->isColumnModified(CastleTypePeer::HOLZFAELLER)) $criteria->add(CastleTypePeer::HOLZFAELLER, $this->holzfaeller);
        if ($this->isColumnModified(CastleTypePeer::HOLZLAGER)) $criteria->add(CastleTypePeer::HOLZLAGER, $this->holzlager);
        if ($this->isColumnModified(CastleTypePeer::STEINBRUCH)) $criteria->add(CastleTypePeer::STEINBRUCH, $this->steinbruch);
        if ($this->isColumnModified(CastleTypePeer::STEINLAGER)) $criteria->add(CastleTypePeer::STEINLAGER, $this->steinlager);
        if ($this->isColumnModified(CastleTypePeer::ERZMINE)) $criteria->add(CastleTypePeer::ERZMINE, $this->erzmine);
        if ($this->isColumnModified(CastleTypePeer::ERZLAGER)) $criteria->add(CastleTypePeer::ERZLAGER, $this->erzlager);
        if ($this->isColumnModified(CastleTypePeer::LANGBOGEN)) $criteria->add(CastleTypePeer::LANGBOGEN, $this->langbogen);
        if ($this->isColumnModified(CastleTypePeer::DREIFELDERWIRTSCHAFT)) $criteria->add(CastleTypePeer::DREIFELDERWIRTSCHAFT, $this->dreifelderwirtschaft);
        if ($this->isColumnModified(CastleTypePeer::KUMMET)) $criteria->add(CastleTypePeer::KUMMET, $this->kummet);
        if ($this->isColumnModified(CastleTypePeer::VORRATSKELLER)) $criteria->add(CastleTypePeer::VORRATSKELLER, $this->vorratskeller);
        if ($this->isColumnModified(CastleTypePeer::STEIGBUEGEL)) $criteria->add(CastleTypePeer::STEIGBUEGEL, $this->steigbuegel);
        if ($this->isColumnModified(CastleTypePeer::WAFFENSCHMIED)) $criteria->add(CastleTypePeer::WAFFENSCHMIED, $this->waffenschmied);
        if ($this->isColumnModified(CastleTypePeer::RUESTUNGSSCHMIED)) $criteria->add(CastleTypePeer::RUESTUNGSSCHMIED, $this->ruestungsschmied);
        if ($this->isColumnModified(CastleTypePeer::BIERPRUEFER)) $criteria->add(CastleTypePeer::BIERPRUEFER, $this->bierpruefer);
        if ($this->isColumnModified(CastleTypePeer::SCHWERTSCHMIED)) $criteria->add(CastleTypePeer::SCHWERTSCHMIED, $this->schwertschmied);
        if ($this->isColumnModified(CastleTypePeer::EISENHAERTUNG)) $criteria->add(CastleTypePeer::EISENHAERTUNG, $this->eisenhaertung);
        if ($this->isColumnModified(CastleTypePeer::ARMBRUST)) $criteria->add(CastleTypePeer::ARMBRUST, $this->armbrust);
        if ($this->isColumnModified(CastleTypePeer::GIFTPFEILE)) $criteria->add(CastleTypePeer::GIFTPFEILE, $this->giftpfeile);
        if ($this->isColumnModified(CastleTypePeer::PFERDEZUCHT)) $criteria->add(CastleTypePeer::PFERDEZUCHT, $this->pferdezucht);
        if ($this->isColumnModified(CastleTypePeer::WAFFENHERSTELLUNG)) $criteria->add(CastleTypePeer::WAFFENHERSTELLUNG, $this->waffenherstellung);
        if ($this->isColumnModified(CastleTypePeer::PFERDEPANZERUNG)) $criteria->add(CastleTypePeer::PFERDEPANZERUNG, $this->pferdepanzerung);
        if ($this->isColumnModified(CastleTypePeer::SCHUBKARREN)) $criteria->add(CastleTypePeer::SCHUBKARREN, $this->schubkarren);
        if ($this->isColumnModified(CastleTypePeer::BRANDPFEILE)) $criteria->add(CastleTypePeer::BRANDPFEILE, $this->brandpfeile);
        if ($this->isColumnModified(CastleTypePeer::HUFSCHMIED)) $criteria->add(CastleTypePeer::HUFSCHMIED, $this->hufschmied);
        if ($this->isColumnModified(CastleTypePeer::UMGEBUNGSKARTE)) $criteria->add(CastleTypePeer::UMGEBUNGSKARTE, $this->umgebungskarte);
        if ($this->isColumnModified(CastleTypePeer::ZISTERNE)) $criteria->add(CastleTypePeer::ZISTERNE, $this->zisterne);
        if ($this->isColumnModified(CastleTypePeer::MAX_POPULATION)) $criteria->add(CastleTypePeer::MAX_POPULATION, $this->max_population);
        if ($this->isColumnModified(CastleTypePeer::FREE_POPULATION)) $criteria->add(CastleTypePeer::FREE_POPULATION, $this->free_population);
        if ($this->isColumnModified(CastleTypePeer::CREATED_AT)) $criteria->add(CastleTypePeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(CastleTypePeer::UPDATED_AT)) $criteria->add(CastleTypePeer::UPDATED_AT, $this->updated_at);

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
        $criteria = new Criteria(CastleTypePeer::DATABASE_NAME);
        $criteria->add(CastleTypePeer::ID, $this->id);

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
     * @param object $copyObj An object of CastleType (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserId($this->getUserId());
        $copyObj->setType($this->getType());
        $copyObj->setName($this->getName());
        $copyObj->setTotalSt($this->getTotalSt());
        $copyObj->setTotalSk($this->getTotalSk());
        $copyObj->setTotalBs($this->getTotalBs());
        $copyObj->setTotalAs($this->getTotalAs());
        $copyObj->setTotalPr($this->getTotalPr());
        $copyObj->setTotalLr($this->getTotalLr());
        $copyObj->setTotalHk($this->getTotalHk());
        $copyObj->setTotalOk($this->getTotalOk());
        $copyObj->setMissionSt($this->getMissionSt());
        $copyObj->setMissionSk($this->getMissionSk());
        $copyObj->setMissionBs($this->getMissionBs());
        $copyObj->setMissionAs($this->getMissionAs());
        $copyObj->setMissionPr($this->getMissionPr());
        $copyObj->setMissionLr($this->getMissionLr());
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
        $copyObj->setMaxPopulation($this->getMaxPopulation());
        $copyObj->setFreePopulation($this->getFreePopulation());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCastles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCastle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return CastleType Clone of current object.
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
     * @return CastleTypePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CastleTypePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param                  User $v
     * @return CastleType The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getId());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addCastleType($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->user_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addCastleTypes($this);
             */
        }

        return $this->aUser;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Castle' == $relationName) {
            $this->initCastles();
        }
    }

    /**
     * Clears out the collCastles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CastleType The current object (for fluent API support)
     * @see        addCastles()
     */
    public function clearCastles()
    {
        $this->collCastles = null; // important to set this to null since that means it is uninitialized
        $this->collCastlesPartial = null;

        return $this;
    }

    /**
     * reset is the collCastles collection loaded partially
     *
     * @return void
     */
    public function resetPartialCastles($v = true)
    {
        $this->collCastlesPartial = $v;
    }

    /**
     * Initializes the collCastles collection.
     *
     * By default this just sets the collCastles collection to an empty array (like clearcollCastles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCastles($overrideExisting = true)
    {
        if (null !== $this->collCastles && !$overrideExisting) {
            return;
        }
        $this->collCastles = new PropelObjectCollection();
        $this->collCastles->setModel('Castle');
    }

    /**
     * Gets an array of Castle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CastleType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Castle[] List of Castle objects
     * @throws PropelException
     */
    public function getCastles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCastlesPartial && !$this->isNew();
        if (null === $this->collCastles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCastles) {
                // return empty collection
                $this->initCastles();
            } else {
                $collCastles = CastleQuery::create(null, $criteria)
                    ->filterByCastleType($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCastlesPartial && count($collCastles)) {
                      $this->initCastles(false);

                      foreach ($collCastles as $obj) {
                        if (false == $this->collCastles->contains($obj)) {
                          $this->collCastles->append($obj);
                        }
                      }

                      $this->collCastlesPartial = true;
                    }

                    $collCastles->getInternalIterator()->rewind();

                    return $collCastles;
                }

                if ($partial && $this->collCastles) {
                    foreach ($this->collCastles as $obj) {
                        if ($obj->isNew()) {
                            $collCastles[] = $obj;
                        }
                    }
                }

                $this->collCastles = $collCastles;
                $this->collCastlesPartial = false;
            }
        }

        return $this->collCastles;
    }

    /**
     * Sets a collection of Castle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $castles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CastleType The current object (for fluent API support)
     */
    public function setCastles(PropelCollection $castles, PropelPDO $con = null)
    {
        $castlesToDelete = $this->getCastles(new Criteria(), $con)->diff($castles);


        $this->castlesScheduledForDeletion = $castlesToDelete;

        foreach ($castlesToDelete as $castleRemoved) {
            $castleRemoved->setCastleType(null);
        }

        $this->collCastles = null;
        foreach ($castles as $castle) {
            $this->addCastle($castle);
        }

        $this->collCastles = $castles;
        $this->collCastlesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Castle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Castle objects.
     * @throws PropelException
     */
    public function countCastles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCastlesPartial && !$this->isNew();
        if (null === $this->collCastles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCastles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCastles());
            }
            $query = CastleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCastleType($this)
                ->count($con);
        }

        return count($this->collCastles);
    }

    /**
     * Method called to associate a Castle object to this object
     * through the Castle foreign key attribute.
     *
     * @param    Castle $l Castle
     * @return CastleType The current object (for fluent API support)
     */
    public function addCastle(Castle $l)
    {
        if ($this->collCastles === null) {
            $this->initCastles();
            $this->collCastlesPartial = true;
        }

        if (!in_array($l, $this->collCastles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCastle($l);

            if ($this->castlesScheduledForDeletion and $this->castlesScheduledForDeletion->contains($l)) {
                $this->castlesScheduledForDeletion->remove($this->castlesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Castle $castle The castle object to add.
     */
    protected function doAddCastle($castle)
    {
        $this->collCastles[]= $castle;
        $castle->setCastleType($this);
    }

    /**
     * @param	Castle $castle The castle object to remove.
     * @return CastleType The current object (for fluent API support)
     */
    public function removeCastle($castle)
    {
        if ($this->getCastles()->contains($castle)) {
            $this->collCastles->remove($this->collCastles->search($castle));
            if (null === $this->castlesScheduledForDeletion) {
                $this->castlesScheduledForDeletion = clone $this->collCastles;
                $this->castlesScheduledForDeletion->clear();
            }
            $this->castlesScheduledForDeletion[]= $castle;
            $castle->setCastleType(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CastleType is new, it will return
     * an empty collection; or if this CastleType has previously
     * been saved, it will retrieve related Castles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CastleType.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Castle[] List of Castle objects
     */
    public function getCastlesJoinCastleLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CastleQuery::create(null, $criteria);
        $query->joinWith('CastleLocation', $join_behavior);

        return $this->getCastles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CastleType is new, it will return
     * an empty collection; or if this CastleType has previously
     * been saved, it will retrieve related Castles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CastleType.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Castle[] List of Castle objects
     */
    public function getCastlesJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CastleQuery::create(null, $criteria);
        $query->joinWith('User', $join_behavior);

        return $this->getCastles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->user_id = null;
        $this->type = null;
        $this->name = null;
        $this->total_st = null;
        $this->total_sk = null;
        $this->total_bs = null;
        $this->total_as = null;
        $this->total_pr = null;
        $this->total_lr = null;
        $this->total_hk = null;
        $this->total_ok = null;
        $this->mission_st = null;
        $this->mission_sk = null;
        $this->mission_bs = null;
        $this->mission_as = null;
        $this->mission_pr = null;
        $this->mission_lr = null;
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
        $this->max_population = null;
        $this->free_population = null;
        $this->created_at = null;
        $this->updated_at = null;
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
            if ($this->collCastles) {
                foreach ($this->collCastles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCastles instanceof PropelCollection) {
            $this->collCastles->clearIterator();
        }
        $this->collCastles = null;
        $this->aUser = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CastleTypePeer::DEFAULT_STRING_FORMAT);
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

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     CastleType The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = CastleTypePeer::UPDATED_AT;

        return $this;
    }

}

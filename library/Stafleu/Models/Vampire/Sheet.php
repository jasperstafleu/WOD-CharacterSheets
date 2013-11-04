<?php
namespace Stafleu\Models\Vampire;

/**
 * @method string getClan() getClan()
 *         Returns the clan
 * @method Stafleu\Models\Sheet setClan() setClan(string $clan)
 *         Sets the clan
 *
 * @method integer getGeneration() getGeneration()
 *         Returns the generation
 * @method Stafleu\Models\Sheet setGeneration() setGeneration(int generation)
 *         Sets the generation
 *
 * @method string getSire() getSire()
 *         Returns the sire
 * @method Stafleu\Models\Sheet setSire() setSire(string $sire)
 *         Sets the sire
 *
 * @method integer getAlertness() getAlertness()
 *         Returns the attribute Alertness
 * @method Stafleu\Models\Sheet setAlertness() setAlertness(integer $alertness)
 *         Sets the attribute Alertness

 * @method integer getAthletics() getAthletics()
 *         Returns the attribute Athletics
 * @method Stafleu\Models\Sheet setAthletics() setAthletics(integer $athletics)
 *         Sets the attribute Athletics

 * @method integer getAwareness() getAwareness()
 *         Returns the attribute Awareness
 * @method Stafleu\Models\Sheet setAwareness() setAwareness(integer $awareness)
 *         Sets the attribute Awareness

 * @method integer getBrawl() getBrawl()
 *         Returns the attribute Brawl
 * @method Stafleu\Models\Sheet setBrawl() setBrawl(integer $brawl)
 *         Sets the attribute Brawl

 * @method integer getEmpathy() getEmpathy()
 *         Returns the attribute Empathy
 * @method Stafleu\Models\Sheet setEmpathy() setEmpathy(integer $empathy)
 *         Sets the attribute Empathy

 * @method integer getExpression() getExpression()
 *         Returns the attribute Expression
 * @method Stafleu\Models\Sheet setExpression() setExpression(integer $expression)
 *         Sets the attribute Expression

 * @method integer getIntimidation() getIntimidation()
 *         Returns the attribute Intimidation
 * @method Stafleu\Models\Sheet setIntimidation() setIntimidation(integer $intimidation)
 *         Sets the attribute Intimidation

 * @method integer getLeadership() getLeadership()
 *         Returns the attribute Leadership
 * @method Stafleu\Models\Sheet setLeadership() setLeadership(integer $leadership)
 *         Sets the attribute Leadership

 * @method integer getStreetwise() getStreetwise()
 *         Returns the attribute Streetwise
 * @method Stafleu\Models\Sheet setStreetwise() setStreetwise(integer $streetwise)
 *         Sets the attribute Streetwise

 * @method integer getSubterfuge() getSubterfuge()
 *         Returns the attribute Subterfuge
 * @method Stafleu\Models\Sheet setSubterfuge() setSubterfuge(integer $subterfuge)
 *         Sets the attribute Subterfuge

 * @method integer getAnimalKen() getAnimalKen()
 *         Returns the attribute AnimalKen
 * @method Stafleu\Models\Sheet setAnimalKen() setAnimalKen(integer $animalKen)
 *         Sets the attribute AnimalKen

 * @method integer getCrafts() getCrafts()
 *         Returns the attribute Crafts
 * @method Stafleu\Models\Sheet setCrafts() setCrafts(integer $crafts)
 *         Sets the attribute Crafts

 * @method integer getDrive() getDrive()
 *         Returns the attribute Drive
 * @method Stafleu\Models\Sheet setDrive() setDrive(integer $drive)
 *         Sets the attribute Drive

 * @method integer getEtiquette() getEtiquette()
 *         Returns the attribute Etiquette
 * @method Stafleu\Models\Sheet setEtiquette() setEtiquette(integer $etiquette)
 *         Sets the attribute Etiquette

 * @method integer getFirearms() getFirearms()
 *         Returns the attribute Firearms
 * @method Stafleu\Models\Sheet setFirearms() setFirearms(integer $firearms)
 *         Sets the attribute Firearms

 * @method integer getLarceny() getLarceny()
 *         Returns the attribute Larceny
 * @method Stafleu\Models\Sheet setLarceny() setLarceny(integer $larceny)
 *         Sets the attribute Larceny

 * @method integer getMelee() getMelee()
 *         Returns the attribute Melee
 * @method Stafleu\Models\Sheet setMelee() setMelee(integer $melee)
 *         Sets the attribute Melee

 * @method integer getPerformance() getPerformance()
 *         Returns the attribute Performance
 * @method Stafleu\Models\Sheet setPerformance() setPerformance(integer $performance)
 *         Sets the attribute Performance

 * @method integer getStealth() getStealth()
 *         Returns the attribute Stealth
 * @method Stafleu\Models\Sheet setStealth() setStealth(integer $stealth)
 *         Sets the attribute Stealth

 * @method integer getSurvival() getSurvival()
 *         Returns the attribute Survival
 * @method Stafleu\Models\Sheet setSurvival() setSurvival(integer $survival)
 *         Sets the attribute Survival

 * @method integer getAcademics() getAcademics()
 *         Returns the attribute Academics
 * @method Stafleu\Models\Sheet setAcademics() setAcademics(integer $academics)
 *         Sets the attribute Academics

 * @method integer getComputer() getComputer()
 *         Returns the attribute Computer
 * @method Stafleu\Models\Sheet setComputer() setComputer(integer $computer)
 *         Sets the attribute Computer

 * @method integer getFinance() getFinance()
 *         Returns the attribute Finance
 * @method Stafleu\Models\Sheet setFinance() setFinance(integer $finance)
 *         Sets the attribute Finance

 * @method integer getInvestigation() getInvestigation()
 *         Returns the attribute Investigation
 * @method Stafleu\Models\Sheet setInvestigation() setInvestigation(integer $investigation)
 *         Sets the attribute Investigation

 * @method integer getLaw() getLaw()
 *         Returns the attribute Law
 * @method Stafleu\Models\Sheet setLaw() setLaw(integer $law)
 *         Sets the attribute Law

 * @method integer getMedicine() getMedicine()
 *         Returns the attribute Medicine
 * @method Stafleu\Models\Sheet setMedicine() setMedicine(integer $medicine)
 *         Sets the attribute Medicine

 * @method integer getOccult() getOccult()
 *         Returns the attribute Occult
 * @method Stafleu\Models\Sheet setOccult() setOccult(integer $occult)
 *         Sets the attribute Occult

 * @method integer getPolitics() getPolitics()
 *         Returns the attribute Politics
 * @method Stafleu\Models\Sheet setPolitics() setPolitics(integer $politics)
 *         Sets the attribute Politics

 * @method integer getScience() getScience()
 *         Returns the attribute Science
 * @method Stafleu\Models\Sheet setScience() setScience(integer $science)
 *         Sets the attribute Science

 * @method integer getTechnology() getTechnology()
 *         Returns the attribute Technology
 * @method Stafleu\Models\Sheet setTechnology() setTechnology(integer $technology)
 *         Sets the attribute Technology
 *
 * @method array getDisciplines() getDisciplines()
 *         Returns the free fields Disciplines
 * @method Stafleu\Models\Sheet setDisciplines() setDisciplines(array $disciplines)
 *         Sets the free fields Disciplines
 *
 * @method integer getConscience() getConscience()
 *         Returns the virtue: Conscience
 * @method Stafleu\Models\Sheet setConscience() setConscience(array $conscience)
 *         Sets the virtue Conscience
 *
 * @method integer getSelfControl() getSelfControl()
 *         Returns the virtue: SelfControl
 * @method Stafleu\Models\Sheet setSelfControl() setSelfControl(array $selfControl)
 *         Sets the virtue SelfControl
 *
 * @method integer getCourage() getCourage()
 *         Returns the virtue: Courage
 * @method Stafleu\Models\Sheet setCourage() setCourage(array $courage)
 *         Sets the virtue Courage
 *
 * @method string getRoad() getRoad()
 *         Returns the character's Road
 * @method Stafleu\Models\Sheet setRoad() setRoad(string $road)
 *         Sets the character's Road
 *
 * @method string getRoadRating() getRoadRating()
 *         Returns the character's RoadRating
 * @method Stafleu\Models\Sheet setRoadRating() setRoadRating(string $roadRating)
 *         Sets the character's RoadRating
 *
 * @method integer getBloodpool() getBloodpool()
 *         Returns the character's Bloodpool
 * @method Stafleu\Models\Sheet setBloodpool() setBloodpool(int $bloodpool)
 *         Sets the character's Bloodpool
 *
 * @method integer getWeakness() getWeakness()
 *         Returns the character's Weakness
 * @method Stafleu\Models\Sheet setWeakness() setWeakness(int $weakness)
 *         Sets the character's Weakness
 *
 *
 * @author Jasper Stafleu
 */
class Sheet extends \Stafleu\Models\Sheet
{
    /**
     * Character's clan
     * @var string
     */
    protected $clan = '';

    /**
     * Character's generation
     * @var integer [4...15]
     */
    protected $generation = 13;

    /**
     * Character's sire
     * @var string
     */
    protected $sire = '';

    /**
     * Ability: Alertness
     * @var integer
     */
    protected $alertness = 0;

    /**
     * Ability: Athletics
     * @var integer
     */
    protected $athletics = 0;

    /**
     * Ability: Awareness
     * @var integer
     */
    protected $awareness = 0;

    /**
     * Ability: Brawl
     * @var integer
     */
    protected $brawl = 0;

    /**
     * Ability: Empathy
     * @var integer
     */
    protected $empathy = 0;

    /**
     * Ability: Expression
     * @var integer
     */
    protected $expression = 0;

    /**
     * Ability: Intimidation
     * @var integer
     */
    protected $intimidation = 0;

    /**
     * Ability: Leadership
     * @var integer
     */
    protected $leadership = 0;

    /**
     * Ability: Streetwise
     * @var integer
     */
    protected $streetwise = 0;

    /**
     * Ability: Subterfuge
     * @var integer
     */
    protected $subterfuge = 0;

    /**
     * Ability: AnimalKen
     * @var integer
     */
    protected $animalKen = 0;

    /**
     * Ability: Crafts
     * @var integer
     */
    protected $crafts = 0;

    /**
     * Ability: Drive
     * @var integer
     */
    protected $drive = 0;

    /**
     * Ability: Etiquette
     * @var integer
     */
    protected $etiquette = 0;

    /**
     * Ability: Firearms
     * @var integer
     */
    protected $firearms = 0;

    /**
     * Ability: Larceny
     * @var integer
     */
    protected $larceny = 0;

    /**
     * Ability: Melee
     * @var integer
     */
    protected $melee = 0;

    /**
     * Ability: Performance
     * @var integer
     */
    protected $performance = 0;

    /**
     * Ability: Stealth
     * @var integer
     */
    protected $stealth = 0;

    /**
     * Ability: Survival
     * @var integer
     */
    protected $survival = 0;

    /**
     * Ability: Academics
     * @var integer
     */
    protected $academics = 0;

    /**
     * Ability: Computer
     * @var integer
     */
    protected $computer = 0;

    /**
     * Ability: Finance
     * @var integer
     */
    protected $finance = 0;

    /**
     * Ability: Investigation
     * @var integer
     */
    protected $investigation = 0;

    /**
     * Ability: Law
     * @var integer
     */
    protected $law = 0;

    /**
     * Ability: Medicine
     * @var integer
     */
    protected $medicine = 0;

    /**
     * Ability: Occult
     * @var integer
     */
    protected $occult = 0;

    /**
     * Ability: Politics
     * @var integer
     */
    protected $politics = 0;

    /**
     * Ability: Science
     * @var integer
     */
    protected $science = 0;

    /**
     * Ability: Technology
     * @var integer
     */
    protected $technology = 0;

    /**
     * Disciplines
     * @var array
     */
    protected $disciplines = array();

    /**
     * Virtue: conscience / conviction
     * @var integer
     */
    protected $conscience = 1;

    /**
     * Virtue: self-control/instinct
     * @var integer
     */
    protected $selfControl = 1;

    /**
     * Virtue: courage
     * @var integer
     */
    protected $courage = 1;

    /**
     * Road
     * @var string
     */
    protected $road = 'Humanity';

    /**
     * Road rating
     * @var integer
     */
    protected $roadRating = 0;

    /**
     * Bloodpool rating
     * @var integer
     */
    protected $bloodpool = 0;

    /**
     * Clan weakness
     * @var string
     */
    protected $weakness = '';



} // end class Sheet
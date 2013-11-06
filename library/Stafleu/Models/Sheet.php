<?php
namespace Stafleu\Models;

/**
 * @method integer getId() getId()
 *         Returns the ID
 * @method Stafleu\Models\Sheet setId() setId(int $id)
 *         Sets the ID
 *
 * @method string getName() getName()
 *         Returns the name
 * @method Stafleu\Models\Sheet setName() setName(string $name)
 *         Sets the name
 *
 * @method string getPlayer() getPlayer()
 *         Returns the player
 * @method Stafleu\Models\Sheet setPlayer() setPlayer(string $player)
 *         Sets the player
 *
 * @method string getChronicle() getChronicle()
 *         Returns the chronicle
 * @method Stafleu\Models\Sheet setChronicle() setChronicle(string $chronicle)
 *         Sets the chronicle
 *
 * @method string getNature() getNature()
 *         Returns the nature
 * @method Stafleu\Models\Sheet setNature() setNature(string $nature)
 *         Sets the nature
 *
 * @method string getDemeanor() getDemeanor()
 *         Returns the demeanor
 * @method Stafleu\Models\Sheet setDemeanor() setDemeanor(string $demeanor)
 *         Sets the demeanor
 *
 * @method string getConcept() getConcept()
 *         Returns the concept
 * @method Stafleu\Models\Sheet setConcept() setConcept(string $concept)
 *         Sets the concept
 *
 * @method integer getStrength() getStrength()
 *         Returns the attribute Strength
 * @method Stafleu\Models\Sheet setStrength() setStrength(integer $strength)
 *         Sets the attribute Strength
 *
 * @method integer getDexterity() getDexterity()
 *         Returns the attribute Dexterity
 * @method Stafleu\Models\Sheet setDexterity() setDexterity(integer $dexterity)
 *         Sets the attribute Dexterity
 *
 * @method integer getStamina() getStamina()
 *         Returns the attribute Stamina
 * @method Stafleu\Models\Sheet setStamina() setStamina(integer $stamina)
 *         Sets the attribute Stamina
 *
 * @method integer getCharisma() getCharisma()
 *         Returns the attribute Charisma
 * @method Stafleu\Models\Sheet setCharisma() setCharisma(integer $charisma)
 *         Sets the attribute Charisma
 *
 * @method integer getManipulation() getManipulation()
 *         Returns the attribute Manipulation
 * @method Stafleu\Models\Sheet setManipulation() setManipulation(integer $manipulation)
 *         Sets the attribute Manipulation
 *
 * @method integer getAppearance() getAppearance()
 *         Returns the attribute Appearance
 * @method Stafleu\Models\Sheet setAppearance() setAppearance(integer $appearance)
 *         Sets the attribute Appearance
 *
 * @method integer getPerception() getPerception()
 *         Returns the attribute Perception
 * @method Stafleu\Models\Sheet setPerception() setPerception(integer $perception)
 *         Sets the attribute Perception
 *
 * @method integer getIntelligence() getIntelligence()
 *         Returns the attribute Intelligence
 * @method Stafleu\Models\Sheet setIntelligence() setIntelligence(integer $intelligence)
 *         Sets the attribute Intelligence
 *
 * @method integer getWits() getWits()
 *         Returns the attribute Wits
 * @method Stafleu\Models\Sheet setWits() setWits(integer $wits)
 *         Sets the attribute Wits
 *
 * @method array getTalents() getTalents()
 *         Returns the free fields Talents
 * @method Stafleu\Models\Sheet setTalents() setTalents(array $talents)
 *         Sets the free fields Talents
 *
 * @method array getSkills() getSkills()
 *         Returns the free fields Skills
 * @method Stafleu\Models\Sheet setSkills() setSkills(array $skills)
 *         Sets the free fields Skills
 *
 * @method array getKnowledges() getKnowledges()
 *         Returns the free fields Knowledges
 * @method Stafleu\Models\Sheet setKnowledges() setKnowledges(array $knowledges)
 *         Sets the free fields Knowledges
 *
 * @method array getBackgrounds() getBackgrounds()
 *         Returns the free fields Backgrounds
 * @method Stafleu\Models\Sheet setBackgrounds() setBackgrounds(array $backgrounds)
 *         Sets the free fields Backgrounds
 *
 * @method array getMerits() getMerits()
 *         Returns the free fields Merits
 * @method Stafleu\Models\Sheet setMerits() setMerits(array $merits)
 *         Sets the free fields Merits
 *
 * @method array getFlaws() getFlaws()
 *         Returns the free fields Flaws
 * @method Stafleu\Models\Sheet setFlaws() setFlaws(array $flaws)
 *         Sets the free fields Flaws
 *
 * @method integer getWillpower() getWillpower()
 *         Returns the character's Willpower
 * @method Stafleu\Models\Sheet setWillpower() setWillpower(int $willpower)
 *         Sets the character's Willpower
 *
 * @method integer getTemporaryWillpower() getTemporaryWillpower()
 *         Returns the character's TemporaryWillpower
 * @method Stafleu\Models\Sheet setTemporaryWillpower() setTemporaryWillpower(int $temporaryWillpower)
 *         Sets the character's TemporaryWillpower
 *
 * @method integer getHealth() getHealth()
 *         Returns the character's Health
 * @method Stafleu\Models\Sheet setHealth() setHealth(int $health)
 *         Sets the character's Health
 *
 * @method integer getExperience() getExperience()
 *         Returns the character's Experience
 * @method Stafleu\Models\Sheet setExperience() setExperience(int $experience)
 *         Sets the character's Experience
 *
 * @method integer getExperienceSpent() getExperienceSpent()
 *         Returns the character's ExperienceSpent
 * @method Stafleu\Models\Sheet setExperienceSpent() setExperienceSpent(int $experienceSpent)
 *         Sets the character's ExperienceSpent
 *
 * @author Jasper Stafleu
 */
abstract class Sheet extends Model
{
    /**
     * Unique identifier
     * @var integer
     */
    protected $id;

    /**
     * Character's name
     * @var string
     */
    protected $name = '';

    /**
     * Characters player
     * @var string
     */
    protected $player = '';

    /**
     * Character's chronicle
     * @var string
     */
    protected $chronicle = '';

    /**
     * Character's nature
     * @var string
     */
    protected $nature = '';

    /**
     * Character's demeanor
     * @var string
     */
    protected $demeanor = '';

    /**
     * Character's concept
     * @var string
     */
    protected $concept = '';

    /**
     * Attribute: Strength
     * @var integer
     */
    protected $strength = 1;

    /**
     * Attribute: Dexteriy
     * @var integer
     */
    protected $dexterity = 1;

    /**
     * Attribute: Stamina
     * @var integer
     */
    protected $stamina = 1;

    /**
     * Attribute: Charisma
     * @var integer
     */
    protected $charisma = 1;

    /**
     * Attribute: Manipulation
     * @var integer
     */
    protected $manipulation = 1;

    /**
     * Attribute: Appearance
     * @var integer
     */
    protected $appearance = 1;

    /**
     * Attribute: Perception
     * @var integer
     */
    protected $perception = 1;

    /**
     * Attribute: Intelligence
     * @var integer
     */
    protected $intelligence = 1;

    /**
     * Attribute: Wits
     * @var integer
     */
    protected $wits = 1;

    /**
     * Free fields: Talents
     * @var array
     */
    protected $talents = array();

    /**
     * Free fields: Skills
     * @var array
     */
    protected $skills = array();

    /**
     * Free fields: Knowledges
     * @var array
     */
    protected $knowledges = array();

    /**
     * Free fields: Backgrounds
     * @var array
     */
    protected $backgrounds = array();

    /**
     * Free fields: Merits
     * @var array
     */
    protected $merits = array();

    /**
     * Free fields: Flaws
     * @var array
     */
    protected $flaws = array();

    /**
     * Willpower rating
     * @var integer
     */
    protected $willpower = 0;

    /**
     * Temporary willpower rating
     * @var integer
     */
    protected $temporaryWillpower = 0;

    /**
     * Health
     * @var integer
     */
    protected $health = 0;

    /**
     * Experience amount
     * @var integer
     */
    protected $experience = 0;

    /**
     * Experience amount spent
     * @var integer
     */
    protected $experienceSpent = 0;

    /**
     * Adds Stafleu\Models\FreeField objects to this object
     * @param array $fields
     */
    public function addFreeFields(array $fields = array())
    {
        $arrs = array();
        foreach ( $fields as $field ) {
            $type = $field->getType();

            if ( empty($arrs[$type]) ) {
                $arrs[$type] = array();
            }
            $arrs[$type][$field->getName()] = $field->getValue();
        } // foreach

        foreach ( $arrs as $field => $values ) {
            $method = 'set' . ucfirst($field);
            $this->$method($values);
        } // foreach

        return $this;
    } // addFreeFields();

} // end class Stafleu_Model_Sheet
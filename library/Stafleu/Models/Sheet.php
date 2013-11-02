<?php
namespace Stafleu\Models;

/**
 * @method integer getId() getId()
 *         Returns the ID
 * @method Stafleu\Models\Sheet setId() setId(int $id)
 *         Sets the ID
 * @method string getName() getName()
 *         Returns the name
 * @method Stafleu\Models\Sheet setName() setName(string $name)
 *         Sets the name
 * @method string getPlayer() getPlayer()
 *         Returns the player
 * @method Stafleu\Models\Sheet setPlayer() setPlayer(string $player)
 *         Sets the player
 * @method string getChronicle() getChronicle()
 *         Returns the chronicle
 * @method Stafleu\Models\Sheet setChronicle() setChronicle(string $chronicle)
 *         Sets the chronicle
 * @method string getNature() getNature()
 *         Returns the nature
 * @method Stafleu\Models\Sheet setNature() setNature(string $nature)
 *         Sets the nature
 * @method string getDemeanor() getDemeanor()
 *         Returns the demeanor
 * @method Stafleu\Models\Sheet setDemeanor() setDemeanor(string $demeanor)
 *         Sets the demeanor
 * @method string getConcept() getConcept()
 *         Returns the concept
 * @method Stafleu\Models\Sheet setConcept() setConcept(string $concept)
 *         Sets the concept
 * @method integer getStrength() getStrength()
 *         Returns the attribute Strength
 * @method Stafleu\Models\Sheet setStrength() setStrength(integer $strength)
 *         Sets the attribute Strength
 * @method integer getDexterity() getDexterity()
 *         Returns the attribute Dexterity
 * @method Stafleu\Models\Sheet setDexterity() setDexterity(integer $dexterity)
 *         Sets the attribute Dexterity
 * @method integer getStamina() getStamina()
 *         Returns the attribute Stamina
 * @method Stafleu\Models\Sheet setStamina() setStamina(integer $stamina)
 *         Sets the attribute Stamina
 * @method integer getCharisma() getCharisma()
 *         Returns the attribute Charisma
 * @method Stafleu\Models\Sheet setCharisma() setCharisma(integer $charisma)
 *         Sets the attribute Charisma
 * @method integer getManipulation() getManipulation()
 *         Returns the attribute Manipulation
 * @method Stafleu\Models\Sheet setManipulation() setManipulation(integer $manipulation)
 *         Sets the attribute Manipulation
 * @method integer getAppearance() getAppearance()
 *         Returns the attribute Appearance
 * @method Stafleu\Models\Sheet setAppearance() setAppearance(integer $appearance)
 *         Sets the attribute Appearance
 * @method integer getPerception() getPerception()
 *         Returns the attribute Perception
 * @method Stafleu\Models\Sheet setPerception() setPerception(integer $perception)
 *         Sets the attribute Perception
 * @method integer getIntelligence() getIntelligence()
 *         Returns the attribute Intelligence
 * @method Stafleu\Models\Sheet setIntelligence() setIntelligence(integer $intelligence)
 *         Sets the attribute Intelligence
 * @method integer getWits() getWits()
 *         Returns the attribute Wits
 * @method Stafleu\Models\Sheet setWits() setWits(integer $wits)
 *         Sets the attribute Wits
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

} // end class Stafleu_Model_Sheet
<?php
namespace Stafleu\Forms;

class VampireSheet extends Sheet
{
    /**
     * (non-PHPdoc)
     * @see Zend_Form::init()
     */
    public function init()
    {
        $this->setMethod('POST');

        $this->addSheetElements('header-left', array('name', 'player', 'chronicle'));
        $this->addSheetElements('header-middle', array('nature', 'demeanor', 'concept'));
        $this->addSheetElements('header-right', array('clan', 'generation', 'sire'));
        $this->addSheetElements('physical', array('strength', 'dexterity', 'stamina'));
        $this->addSheetElements('social', array('charisma', 'manipulation', 'appearance'));
        $this->addSheetElements('mental', array('perception', 'intelligence', 'wits'));
        $this->addSheetElements('talents', array(
                'alertness',
                'athletics',
                'awareness',
                'brawl',
                'empathy',
                'expression',
                'intimidation',
                'leadership',
                'streetwise',
                'subterfuge',
        ));
        $this->addSheetElements('skills', array(
                'animalKen',
                'crafts',
                'drive',
                'etiquette',
                'firearms',
                'larceny',
                'melee',
                'performance',
                'stealth',
                'survival',
        ));
        $this->addSheetElements('knowledges', array(
                'academics',
                'computer',
                'finance',
                'investigation',
                'law',
                'medicine',
                'occult',
                'politics',
                'science',
                'technology',
        ));
    } // init();

} // end class VampireSheet
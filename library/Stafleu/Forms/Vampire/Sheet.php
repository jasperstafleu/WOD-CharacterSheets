<?php
namespace Stafleu\Forms\Vampire;

class Sheet extends \Stafleu\Forms\Sheet
{
    /**
     * (non-PHPdoc)
     * @see Zend_Form::init()
     */
    public function init()
    {
        $this->setMethod('POST');
        $this->addSheetElements('header-left', array('name', 'player', 'chronicle'), '\Zend_Form_Element_Text');
        $this->addSheetElements('header-middle', array('nature', 'demeanor', 'concept'), '\Zend_Form_Element_Text');
        $this->addSheetElements('header-right', array('clan', 'generation', 'sire'), '\Zend_Form_Element_Text');
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
        $this->addSheetElements('virtues', array('conscience', 'selfControl', 'courage'));
        $this->addSheetElements('road', array('road'), '\Zend_Form_Element_Text');
        $this->addSheetElements('roadRating', array('roadRating'));
        $this->addSheetElements('willpower', array('willpower', 'temporaryWillpower'));
        $this->addSheetElements('bloodpool', array('bloodpool'));
        $this->addSheetElements('health', array('health'));
        $this->addSheetElements('weakness', array('weakness'), '\Zend_Form_Element_TextArea');
        $this->addSheetElements('experience', array('experience', 'experienceSpent'), '\Zend_Form_Element_Text');

        $bloodpool = $this->getSheetElements('bloodpool');
        $bloodpool[0]->setMultiOptions(array(0,1,2,3,4,5,6,7,8,9,10));
    } // init();

} // end class Sheet
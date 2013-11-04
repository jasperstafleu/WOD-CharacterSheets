<?php
namespace Stafleu\Mappers;

class FreeField extends \Stafleu\Mappers\Mapper
{
    /**
     * Save the new values for the free fields in the $sheet
     *
     * @param \Stafleu\Models\Sheet $sheet
     * @throws \Zend_Exception
     * @return \Stafleu\Models\Sheet
     */
    public function saveFreeFields(\Stafleu\Models\Sheet $sheet)
    {
        $existingFields = $this->fetchAll(array('sheet' => $sheet->getId()));
        foreach ( $sheet->toArray() as $field => $arr ) {
            if ( !is_array($arr) ) {
                continue;
            }

            foreach ( $arr as $name => $value ) {
                foreach ( $existingFields as $key => $existingField ) {
                    if ( $existingField->getType() === $field
                            && $existingField->getName() === $name
                    ) {
                        unset($existingFields[$key]);
                        $existingField->setValue($value);
                        if ( !$this->save($existingField) ) {
                            throw new \Zend_Exception('Failed to store');
                        }
                        continue 2;
                    }
                } // foreach
            } // foreach

        } // foreach

        return $sheet;
    } // saveFreeFields();

    /**
     * (non-PHPdoc)
     * @see \Stafleu\Mappers\Mapper::save()
     */
    public function save(\Stafleu\Models\Model $freeField)
    {
        return $freeField->getValue() > 0
            ? parent::save($freeField)
            : $this->remove($freeField)
        ;
    } // save();

} // end class FreeField
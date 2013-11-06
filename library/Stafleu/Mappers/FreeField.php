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

                // field does not yet exist: add it
                $this->addFreeField($sheet, $field, $name, $value);
            } // foreach
        } // foreach

        return $sheet;
    } // saveFreeFields();

    public function addFreeField(\Stafleu\Models\Sheet $sheet, $type, $name, $value)
    {
        $ff = str_replace('Mapper', 'Model', self::getNamespace()) . 'FreeField';
        $ff = new $ff(array('name' => $name, 'value' => $value, 'sheet' => $sheet->getId(), 'type' => $type));
        $this->save($ff);
    } // addFreeField();

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
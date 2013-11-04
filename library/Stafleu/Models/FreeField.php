<?php
namespace Stafleu\Models;

/**
 * @method integer getId() getId()
 *         Returns the ID
 * @method Stafleu\Models\FreeField setId() setId(int $id)
 *         Sets the ID
 *
 * @method Stafleu\Models\Sheet getSheet() getSheet()
 *         Returns the sheet this field pertains to
 * @method Stafleu\Models\FreeField setSheet() setSheet(Stafleu\Models\Sheet $sheet)
 *         Sets the Sheet
 *
 * @method string getType() getType()
 *         Returns the type
 * @method Stafleu\Models\FreeField setType() setType(string $type)
 *         Sets the type
 *
 * @method string getName() getName()
 *         Returns the name
 * @method Stafleu\Models\FreeField setName() setName(string $name)
 *         Sets the name
 *
 * @method integer getValue() getValue()
 *         Returns the value
 * @method Stafleu\Models\FreeField setValue() setValue(int $value)
 *         Sets the value
 */
class FreeField extends Model
{
    /**
     * The ID
     * @var integer
     */
    protected $id = 0;

    /**
     * The sheet  this pertains to
     * @var Stafleu\Models\Sheet
     */
    protected $sheet = null;

    /**
     * The type of the free field
     * @var string
     */
    protected $type = '';

    /**
     * The name of the free field (label)
     * @var string
     */
    protected $name = '';

    /**
     * The value of the field
     * @var integer
     */
    protected $value = 0;

} // end class FreeField
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\ArmrestTypes
 * @property int $id
 * @property string $armrest_type
 * @property int $armrest_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereArmrestType($value)
 * @method static whereArmrestTypeId($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class ArmrestTypes extends Model {
    // Select Field #16 Data Model Class: ArmrestTypes
    protected $table='armrest_type';
}
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Units
 * @property int $id
 * @property string $unit
 * @property int $unit_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereUnit($value)
 * @method static whereUnitId($value)
 * @method static whereUpdatedAt($value)
 */
class Units extends Model {
    // Select Field #1 Data Model Class: Units
    protected $table='units';
}
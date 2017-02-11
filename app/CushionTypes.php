<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\CushionTypes
 * @property int $id
 * @property string $cushion_type
 * @property int $cushion_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereCushionType($value)
 * @method static whereCushionTypeId($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class CushionTypes extends Model
{
    // Select Field #14 Data Model Class: CushionTypes
    protected $table='cushion_type';
}
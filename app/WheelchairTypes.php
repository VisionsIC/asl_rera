<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairTypes
 * @property int $id
 * @property string $wc_type
 * @property int $wc_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 * @method static whereWcType($value)
 * @method static whereWcTypeId($value)
 */
class WheelchairTypes extends Model {
    // Select Field #8 Data Model Class: WheelchairTypes
    protected $table='wc_types';
}
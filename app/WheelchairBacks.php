<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairHeights
 * @property int $id
 * @property string $wc_back_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereWcBackType($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class WheelchairBacks extends Model {
    // Select Field #13 Data Model Class: WheelchairBacks
    protected $table='wc_backs';
}

<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairHeights
 * @property int $id
 * @property string $wc_height
 * @property int $wc_height_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereWcHeight($value)
 * @method static whereWcHeightId($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class WheelchairHeights extends Model {
    // Select Field #12 Data Model Class: WheelchairHeights
    protected $table='wc_heights';
}
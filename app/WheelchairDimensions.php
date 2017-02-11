<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairDimensions
 * @property int $id
 * @property string $wc_dimensions
 * @property int $wc_dimensions_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 * @method static whereWcDimensions($value)
 * @method static whereWcDimensionsId($value)
 */
class WheelchairDimensions extends Model {
    // Select Field #11 Data Model Class: WheelchairDimensions
    protected $table='wc_dimensions';
}
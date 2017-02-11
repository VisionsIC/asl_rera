<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\CushionDimensions
 * @property int $id
 * @property string $cushion_dimensions
 * @property int $cushion_dimensions_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereCushionDimensions($value)
 * @method static whereCushionDimensionsId($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class CushionDimensions extends Model {
    // Select Field #15 Data Model Class: CushionDimensions
    protected $table='cushion_dimensions';
}
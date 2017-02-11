<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\InpatientWcModels
 * @property int $id
 * @property string $inpatient_wc_model
 * @property int $inpatient_wc_brands_id
 * @property int $inpatient_wc_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereInpatientWcBrandsId($value)
 * @method static whereInpatientWcModel($value)
 * @method static whereInpatientWcTypeId($value)
 * @method static whereUpdatedAt($value)
 */
class InpatientWcModels extends Model {
    // Select Field #9 Data Model Class: InpatientWcModels
    protected $table='inpatient_wc_models';
}
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\InpatientWcBrands
 * @property int $id
 * @property string $inpatient_wc_brand
 * @property int $wc_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereInpatientWcBrand($value)
 * @method static whereUpdatedAt($value)
 * @method static whereWcTypeId($value)
 */
class InpatientWcBrands extends Model {
    // Select Field #10 Data Model Class: InpatientWcBrands
    protected $table='inpatient_wc_brands';
}
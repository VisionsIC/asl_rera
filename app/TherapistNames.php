<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\TherapistNames
 * @property int $id
 * @property string $therapist_names
 * @property int $title_id
 * @method static whereSelect($value)
 * @method static whereId($value)
 * @method static whereTherapistNames($value)
 * @method static whereTitleId($value)
 */
class TherapistNames extends Model {
    // Select Field #7 Data Model Class: TherapistNames
    protected $table='therapist_name';
}
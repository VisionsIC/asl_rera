<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Rooms
 * @property int $id
 * @property string $room
 * @property int $unit_id
 * @property int $diagnosis_id
 * @property int $inpatient_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($value)
 * @method static whereDiagnosisId($value)
 * @method static whereId($value)
 * @method static whereInpatientId($value)
 * @method static whereRoom($value)
 * @method static whereUnitId($value)
 * @method static whereUpdatedAt($value)
 */
class Rooms extends Model {
    // Select Field #3 Data Model Class: Rooms
    protected $table='rooms';
}
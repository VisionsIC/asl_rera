<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\PatientNames
 * @property int $id
 * @property string $patient_name
 * @property int $gender_id
 * @property int $diagnosis_id
 * @property int $unit_id
 * @property int $room_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereDiagnosisId($value)
 * @method static whereGenderId($value)
 * @method static whereId($value)
 * @method static wherePatientName($value)
 * @method static whereRoomId($value)
 * @method static whereUnitId($value)
 * @method static whereUpdatedAt($value)
 */
class PatientNames extends Model {
    // Select Field #2 Data Model Class: PatientName
    protected $table='inpatients';
}
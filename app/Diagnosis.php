<?php
namespace App;
use App\PatientNames;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Diagnosis
 * @property int $id
 * @property string $diagnosis_type
 * @property string $abbreviation
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereAbbreviation($value)
 * @method static whereCreatedAt($value)
 * @method static whereDiagnosisType($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class Diagnosis extends Model {
    // Select Field #5 Data Model Class: Diagnosis
    protected $table='diagnosis';
    //
    public function room() {
        //
        return $this->belongsTo('App\Rooms');
    }
}
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\TherapistTitles
 * @property int $id
 * @property string $title
 * @property string $title_abbreviation
 * @property int $therapist_id
 * @property int $title_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereTherapistId($value)
 * @method static whereTitle($value)
 * @method static whereTitleAbbreviation($value)
 * @method static whereTitleId($value)
 * @method static whereUpdatedAt($value)
 */
class TherapistTitles extends Model {
    // Select Field #6 Data Model Class: TherapistTitles
    protected $table='therapist_title';
}
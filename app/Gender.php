<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Gender
 * @property int $id
 * @property string $gender
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereGender($value)
 * @method static whereId($value)
 * @method static whereUpdatedAt($value)
 */
class Gender extends Model {
    // Select Field #4 Data Model Class: Gender
    protected $table='gender';
}
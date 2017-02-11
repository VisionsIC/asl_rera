<?php
namespace App;
use App\Notifications\UserResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * App\User
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $title
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Roles[] $roles
 * @method static whereSelect($value)
 * @method static whereWhere($value)
 * @method static whereCreatedAt($value)
 * @method static whereEmail($value)
 * @method static whereFirstname($value)
 * @method static whereId($value)
 * @method static whereLastname($value)
 * @method static wherePassword($value)
 * @method static whereRememberToken($value)
 * @method static whereTitle($value)
 * @method static whereUpdatedAt($value)
 * @method static whereUsername($value)
 */
class User extends Authenticatable {
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'username', 'firstname', 'lastname', 'title', 'email', 'password', 'unit'
    ];
    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Send the password reset notification.
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token) {
        $this->notify(new UserResetPassword($token));
    }
    // roles function
    public function roles() {
        return $this->belongsToMany('App\Roles', 'user_role', 'user_id', 'role_id');
    }
    // hasAnyRole function
    public function hasAnyRoles($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRoles($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRoles($roles)) {
                return true;
            }
        }
        return false;
    }
    // hasRole function
    public function hasRoles($role) {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Permission\Traits\HasRoles; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role;

/**
 * Class User
 * @package App\Models
 * @version November 15, 2024, 7:27 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $password
 * @property string $image
 * @property string $status
 * @property string $phone_number_two
 * @property integer $role_id
 */
class User extends Authenticatable
{

    use HasFactory,HasRoles;

    public $table = 'users';
    



    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'image',
        'status',
        'phone_number_two',
        'role_id',
        'gender'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'password' => 'string',
        'image' => 'string',
        'status' => 'string',
        'phone_number_two' => 'string',
        'role_id' => 'integer',
        'gender'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|min:3|max:100',
        'last_name' => 'required|string|min:3|max:200',
        'email' => 'required|string|email|unique:users,email',
        'phone_number' => 'required|min:10|max:10|unique:users,phone_number',
        'password' => 'required|string|min:8|max:10',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'status' => 'nullable|string',
        'phone_number_two' => 'nullable|string|min:10|max:10|unique:users,phone_number_two',
        'role_id' => 'required|integer',
        'gender' => 'nullable|string',
    ];

    

    // Define relationship with Role model
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

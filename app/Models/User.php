<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $telephone
 * @property $username
 * @property $date_of_birth
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{

    static $rules = [
		'name' => 'required',
		'telephone' => 'required',
		'username' => 'required',
		'date_of_birth' => 'required',
		'email' => 'required',
        'password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','telephone','username','date_of_birth','email','password'];



}

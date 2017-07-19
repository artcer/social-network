<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 *
 * @property HasMany $posts
 *
 * @package App
 */
class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    /**
     * Sets user relationship with posts
     *
     * @return HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}

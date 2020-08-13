<?php

namespace Baleghsefat\User\Models;

use Baleghsefat\User\Interfaces\MustVerifyMobile;
use Baleghsefat\User\Notifications\VerifyEmailNotification;
use Baleghsefat\User\Traits\MustVerifyMobile as MustVerifyMobileTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyMobile, MustVerifyEmail
{
    use Notifiable, MustVerifyMobileTrait;

    const ROLE_ADMIN = 'admin';
    const ROLE_user = 'user';
    const ROLES = [self::ROLE_ADMIN, self::ROLE_user];

    const IS_ACTIVE = 1;
    const NOT_ACTIVE = 0;
    const ACTIVITY_STATUS = [self::IS_ACTIVE, self::NOT_ACTIVE];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mobile', 'lastName', 'fullName', 'username',
        'mobile_verified_at', 'role', 'headline', 'bio', 'lastLoginIp', 'isActive'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Rewritten
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailNotification());
    }
}

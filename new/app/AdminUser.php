<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class AdminUser extends Authenticatable
{

    use Notifiable;
}

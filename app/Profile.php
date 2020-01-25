<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() {
        return $this->image ? "/storage/{$this->image}" : "/storage/profile/RYcrIz5xHcHVO9vArOFW8OTA6abtg83GByYPz0fq.png";
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    //Returns the foreign key for user for user_id
    public function user() {
        return $this->belongsTo(User::class);
    }
}

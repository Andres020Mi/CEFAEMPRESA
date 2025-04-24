<?php

namespace Modules\Users\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Users\Database\Factories\PersonFactory;

class Person extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'document_type',
        'document_number',
        'date_of_issue',
        'first_name',
        'second_first_name',
        'first_last_name',
        'second_last_name',
        'date_of_birth',
        'gender',
        'address',
        'telephone1',
        'telephone2',
        'telephone3',
        'personal_email',
        'misena_email',
        'sena_email',
        'avatar',
        'biometric_code',
        'document_front_photo',
        'document_back_photo',
    ];

    // protected static function newFactory(): PersonFactory
    // {
    //     // return PersonFactory::new();
    // }

    public function user()
{
    return $this->hasOne(User::class);
}

}

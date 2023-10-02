<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];
    // protected $fillable = [
    //                        'first_name',
    //                        'last_name',
    //                        'gender',
    //                        'grade_id',
    //                        'dob',
    //                        'nic',
    //                        'hcolor_id',
    //                        'address'
    //                 ];


    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function hcolor(): BelongsTo
    {
        return $this->belongsTo(HColor::class);
    }

    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class,'student_subject');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

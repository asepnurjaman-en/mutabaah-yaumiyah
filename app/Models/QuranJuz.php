<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuranJuz extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $guarded = ['id'];

    protected static function booted()
    {
        static::creating(function ($request) {
            $request->user_id = Auth::user()->id;
        });
    }

    public function surah_per_juz(): HasOne
    {
        return $this->hasOne(QuranSurahPerJuz::class, 'juz_id');
    }
}

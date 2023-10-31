<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuranAyat extends Model
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

    public function surah(): BelongsTo
    {
        return $this->belongsTo(QuranSurah::class, 'surah_id');
    }
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Opd;
use App\Models\Kategori;

class Aduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'kategori_id', 'judul', 'deskripsi', 
        'lokasi', 'bukti', 'status', 'catatan_admin'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
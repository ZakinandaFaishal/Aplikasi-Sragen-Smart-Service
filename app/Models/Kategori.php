<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Aduan;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'opd_id'];

    public function opd(): BelongsTo
    {
        return $this->belongsTo(Opd::class);
    }

    public function aduans(): HasMany
    {
        return $this->hasMany(Aduan::class);
    }
}
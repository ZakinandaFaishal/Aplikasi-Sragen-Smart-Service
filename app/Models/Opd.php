<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Aduan;

class Opd extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email'];

    public function kategoris(): HasMany
    {
        return $this->hasMany(Kategori::class);
    }
}
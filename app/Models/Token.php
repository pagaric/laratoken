<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Token extends Model
{
    use HasFactory;

    protected $table = 'banquejeton';

    public function getTokenById($id)
    {
        return DB::select("SELECT * FROM {$this->table} WHERE jeton = ?", [$id]);
    }

    public function getAll()
    {
        return DB::select("select * from {$this->table}");
    }

    public function deleteToken($id)
    {
        DB::delete("DELETE FROM {$this->table} WHERE jeton = ?", [$id]);
    }
}

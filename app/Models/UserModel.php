<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    
    protected $table = 'user';
    protected $guarded = ['id'];

    // Relasi ke model Kelas
    public function kelas()
{
    return $this->belongsTo(Kelas::class, 'kelas_id');
}


    // Method untuk mendapatkan data user, dengan parameter opsional $id
    public function getUser($id = null)
    {
        $query = $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                      ->select('user.id', 'user.nama', 'user.npm', 'user.foto', 'kelas.nama_kelas');

        // Jika $id diisi, tambahkan kondisi where untuk mencari berdasarkan id
        if ($id != null) {
            return $query->where('user.id', $id)->first(); // Mengembalikan 1 record jika $id diisi
        }

        // Jika $id tidak diisi, kembalikan seluruh data
        return $query->get(); // Mengembalikan semua data user jika $id kosong
    }

    // Kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',
        'npm',
        'kelas_id',
        'foto',
    ];

    public function show($id)
{
    $user = UserModel::with('kelas')->findOrFail($id);
    return view('profile', ['user' => $user]);
}

}

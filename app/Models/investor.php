<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class investor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "investor";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_Investor',
        'id_User',
        'id_Margin',
        'id_Transaksi',
        'Nama_Investor',
        'Alamat_Investor',
        'Tlp_Investor',
        'Jenis_Kelamin',
        'NIK',
        'NIM',
        'Status',
        'Saldo',
        'Jumlah_Investasi',
        'Tgl_Mulai',
        'Tgl_Berakhir',
        'Metode_transaksi',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

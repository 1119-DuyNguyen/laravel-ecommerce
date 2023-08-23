<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HoaDon
 * 
 * @property int $MaHD
 * @property int $MaTK
 * @property Carbon $NgayLap
 * @property int $TongTien
 * @property int|null $MaKM
 * @property int|null $MaVC
 * @property int $TrangThai
 * 
 * @property TaiKhoan $tai_khoan
 * @property KhuyenMai|null $khuyen_mai
 * @property VanChuyen|null $van_chuyen
 * @property Collection|ChiTietHoaDon[] $chi_tiet_hoa_dons
 *
 * @package App\Models
 */
class HoaDon extends Model
{
	protected $table = 'hoa_don';
	protected $primaryKey = 'MaHD';
	public $timestamps = false;

	protected $casts = [
		'MaTK' => 'int',
		'NgayLap' => 'datetime',
		'TongTien' => 'int',
		'MaKM' => 'int',
		'MaVC' => 'int',
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'MaTK',
		'NgayLap',
		'TongTien',
		'MaKM',
		'MaVC',
		'TrangThai'
	];

	public function tai_khoan()
	{
		return $this->belongsTo(TaiKhoan::class, 'MaTK');
	}

	public function khuyen_mai()
	{
		return $this->belongsTo(KhuyenMai::class, 'MaKM');
	}

	public function van_chuyen()
	{
		return $this->belongsTo(VanChuyen::class, 'MaVC');
	}

	public function chi_tiet_hoa_dons()
	{
		return $this->hasMany(ChiTietHoaDon::class, 'MaHD');
	}
}

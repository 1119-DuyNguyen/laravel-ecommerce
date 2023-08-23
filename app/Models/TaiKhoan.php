<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TaiKhoan
 *
 * @property int $MaTK
 * @property string $TenTaiKhoan
 * @property string $MatKhau
 * @property int $TrangThai
 * @property string|null $DiaChi
 * @property int $MaVT
 *
 * @property VaiTro $vai_tro
 * @property Collection|DanhGia[] $danh_gia
 * @property Collection|GioHang[] $gio_hangs
 * @property Collection|HoaDon[] $hoa_dons
 * @property Collection|SanPham[] $san_phams
 *
 * @package App\Models
 */
class TaiKhoan extends Model
{
	protected $table = 'tai_khoan';
	protected $primaryKey = 'MaTK';
	public $timestamps = false;

	protected $casts = [
		'TrangThai' => 'int',
		'MaVT' => 'int'
	];

	protected $fillable = [
		'TenTaiKhoan',
		'MatKhau',
		'TrangThai',
		'DiaChi',
		'MaVT'
	];

	public function vai_tro()
	{
		return $this->belongsTo(VaiTro::class, 'MaVT');
	}

	public function danh_gia()
	{
		return $this->hasMany(DanhGia::class, 'MaTK');
	}

	public function gio_hangs()
	{
		return $this->hasMany(GioHang::class, 'MaTK');
	}

	public function hoa_dons()
	{
		return $this->hasMany(HoaDon::class, 'MaTK');
	}

	public function san_phams()
	{
		return $this->hasMany(SanPham::class, 'MaTK');
	}
}

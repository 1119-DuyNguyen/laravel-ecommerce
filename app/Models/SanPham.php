<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SanPham
 *
 * @property int $MaSP
 * @property int $MaTK
 * @property string $TenSP
 * @property int $SoLuong
 * @property int $DonGia
 * @property string $HinhAnh
 * @property int $TrangThai
 * @property int $loaisanpham_MaLSP
 * @property float|null $DanhGia
 *
 * @property LoaiSanPham $loai_san_pham
 * @property TaiKhoan $tai_khoan
 * @property Collection|ChiTietHoaDon[] $chi_tiet_hoa_dons
 * @property Collection|DanhGia[] $danh_gia
 * @property Collection|GioHang[] $gio_hangs
 * @property Collection|OptionSanPham[] $option_san_phams
 *
 * @package App\Models
 */
class SanPham extends Model
{
	protected $table = 'san_pham';
	public $timestamps = false;

	protected $casts = [
		'MaTK' => 'int',
		'SoLuong' => 'int',
		'DonGia' => 'int',
		'TrangThai' => 'int',
		'loaisanpham_MaLSP' => 'int',
		'DanhGia' => 'float'
	];

	protected $fillable = [
		'TenSP',
		'SoLuong',
		'DonGia',
		'HinhAnh',
		'TrangThai',
		'loaisanpham_MaLSP',
		'DanhGia'
	];

	public function loai_san_pham()
	{
		return $this->belongsTo(LoaiSanPham::class, 'loaisanpham_MaLSP');
	}

	public function tai_khoan()
	{
		return $this->belongsTo(TaiKhoan::class, 'MaTK');
	}

	public function chi_tiet_hoa_dons()
	{
		return $this->hasMany(ChiTietHoaDon::class, 'MaSP');
	}

	public function danh_gia()
	{
		return $this->hasMany(DanhGia::class, 'MaSP');
	}

	public function gio_hangs()
	{
		return $this->hasMany(GioHang::class, 'MaSP');
	}

	public function option_san_phams()
	{
		return $this->hasMany(OptionSanPham::class, 'MaSP');
	}
}

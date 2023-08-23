<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChiTietHoaDon
 * 
 * @property int $MaHD
 * @property int $MaSP
 * @property int $DonGia
 * @property int $SoLuong
 * 
 * @property HoaDon $hoa_don
 * @property SanPham $san_pham
 *
 * @package App\Models
 */
class ChiTietHoaDon extends Model
{
	protected $table = 'chi_tiet_hoa_don';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MaHD' => 'int',
		'MaSP' => 'int',
		'DonGia' => 'int',
		'SoLuong' => 'int'
	];

	protected $fillable = [
		'DonGia',
		'SoLuong'
	];

	public function hoa_don()
	{
		return $this->belongsTo(HoaDon::class, 'MaHD');
	}

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class, 'MaSP');
	}
}

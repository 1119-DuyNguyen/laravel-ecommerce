<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DanhGia
 *
 * @property int $MaTK
 * @property int $MaSP
 * @property float $DanhGia
 *
 * @property SanPham $san_pham
 * @property TaiKhoan $tai_khoan
 *
 * @package App\Models
 */
class DanhGia extends Model
{
	protected $table = 'danh_gia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MaTK' => 'int',
		'MaSP' => 'int',
		'DanhGia' => 'float'
	];

	protected $fillable = [
		'DanhGia'
	];

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class, 'MaSP');
	}

	public function tai_khoan()
	{
		return $this->belongsTo(TaiKhoan::class, 'MaTK');
	}
}

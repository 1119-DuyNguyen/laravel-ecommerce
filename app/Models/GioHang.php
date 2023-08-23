<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GioHang
 * 
 * @property int $MaTK
 * @property int $MaSP
 * @property int $SoLuong
 * 
 * @property TaiKhoan $tai_khoan
 * @property SanPham $san_pham
 *
 * @package App\Models
 */
class GioHang extends Model
{
	protected $table = 'gio_hang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MaTK' => 'int',
		'MaSP' => 'int',
		'SoLuong' => 'int'
	];

	protected $fillable = [
		'SoLuong'
	];

	public function tai_khoan()
	{
		return $this->belongsTo(TaiKhoan::class, 'MaTK');
	}

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class, 'MaSP');
	}
}

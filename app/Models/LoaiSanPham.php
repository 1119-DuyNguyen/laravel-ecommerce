<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LoaiSanPham
 * 
 * @property int $MaLSP
 * @property string $TenLSP
 * @property string $Mota
 * @property int $TrangThai
 * @property int|null $loaisanpham_MaLSP
 * 
 * @property LoaiSanPham|null $loai_san_pham
 * @property Collection|LoaiSanPham[] $loai_san_phams
 * @property Collection|SanPham[] $san_phams
 *
 * @package App\Models
 */
class LoaiSanPham extends Model
{
	protected $table = 'loai_san_pham';
	protected $primaryKey = 'MaLSP';
	public $timestamps = false;

	protected $casts = [
		'TrangThai' => 'int',
		'loaisanpham_MaLSP' => 'int'
	];

	protected $fillable = [
		'TenLSP',
		'Mota',
		'TrangThai',
		'loaisanpham_MaLSP'
	];

	public function loai_san_pham()
	{
		return $this->belongsTo(LoaiSanPham::class, 'loaisanpham_MaLSP');
	}

	public function loai_san_phams()
	{
		return $this->hasMany(LoaiSanPham::class, 'loaisanpham_MaLSP');
	}

	public function san_phams()
	{
		return $this->hasMany(SanPham::class, 'loaisanpham_MaLSP');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OptionSanPham
 * 
 * @property int $MaOption
 * @property int $MaSP
 * @property string $TenOption
 * @property int $DonGia
 * @property int $SoLuong
 * 
 * @property SanPham $san_pham
 *
 * @package App\Models
 */
class OptionSanPham extends Model
{
	protected $table = 'option_san_pham';
	protected $primaryKey = 'MaOption';
	public $timestamps = false;

	protected $casts = [
		'MaSP' => 'int',
		'DonGia' => 'int',
		'SoLuong' => 'int'
	];

	protected $fillable = [
		'MaSP',
		'TenOption',
		'DonGia',
		'SoLuong'
	];

	public function san_pham()
	{
		return $this->belongsTo(SanPham::class, 'MaSP');
	}
}

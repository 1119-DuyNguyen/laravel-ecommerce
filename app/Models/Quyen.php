<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Quyen
 * 
 * @property int $MaQuyen
 * @property string $TenQuyen
 * @property string $ChiTietQuyen
 * @property int $TrangThai
 * 
 * @property Collection|VaiTro[] $vai_tros
 *
 * @package App\Models
 */
class Quyen extends Model
{
	protected $table = 'quyen';
	protected $primaryKey = 'MaQuyen';
	public $timestamps = false;

	protected $casts = [
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'TenQuyen',
		'ChiTietQuyen',
		'TrangThai'
	];

	public function vai_tros()
	{
		return $this->belongsToMany(VaiTro::class, 'vai_tro_quyen', 'MaQuyen', 'MaVT');
	}
}

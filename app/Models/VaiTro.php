<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VaiTro
 * 
 * @property int $MaVT
 * @property string $TenVT
 * 
 * @property Collection|TaiKhoan[] $tai_khoans
 * @property Collection|Quyen[] $quyens
 *
 * @package App\Models
 */
class VaiTro extends Model
{
	protected $table = 'vai_tro';
	protected $primaryKey = 'MaVT';
	public $timestamps = false;

	protected $fillable = [
		'TenVT'
	];

	public function tai_khoans()
	{
		return $this->hasMany(TaiKhoan::class, 'MaVT');
	}

	public function quyens()
	{
		return $this->belongsToMany(Quyen::class, 'vai_tro_quyen', 'MaVT', 'MaQuyen');
	}
}

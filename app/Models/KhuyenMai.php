<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KhuyenMai
 * 
 * @property int $MaKM
 * @property string $TenKM
 * @property int $DieuKienKM
 * @property Carbon $NgayBD
 * @property int $PhanTramKM
 * @property Carbon $NgayKT
 * @property int $TrangThai
 * 
 * @property Collection|HoaDon[] $hoa_dons
 *
 * @package App\Models
 */
class KhuyenMai extends Model
{
	protected $table = 'khuyen_mai';
	protected $primaryKey = 'MaKM';
	public $timestamps = false;

	protected $casts = [
		'DieuKienKM' => 'int',
		'NgayBD' => 'datetime',
		'PhanTramKM' => 'int',
		'NgayKT' => 'datetime',
		'TrangThai' => 'int'
	];

	protected $fillable = [
		'TenKM',
		'DieuKienKM',
		'NgayBD',
		'PhanTramKM',
		'NgayKT',
		'TrangThai'
	];

	public function hoa_dons()
	{
		return $this->hasMany(HoaDon::class, 'MaKM');
	}
}

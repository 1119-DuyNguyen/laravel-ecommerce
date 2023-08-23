<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VanChuyen
 * 
 * @property int $MaVC
 * @property string $TenVC
 * @property int $GiaVC
 * 
 * @property Collection|HoaDon[] $hoa_dons
 *
 * @package App\Models
 */
class VanChuyen extends Model
{
	protected $table = 'van_chuyen';
	protected $primaryKey = 'MaVC';
	public $timestamps = false;

	protected $casts = [
		'GiaVC' => 'int'
	];

	protected $fillable = [
		'TenVC',
		'GiaVC'
	];

	public function hoa_dons()
	{
		return $this->hasMany(HoaDon::class, 'MaVC');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VaiTroQuyen
 * 
 * @property int $MaVT
 * @property int $MaQuyen
 * 
 * @property Quyen $quyen
 * @property VaiTro $vai_tro
 *
 * @package App\Models
 */
class VaiTroQuyen extends Model
{
	protected $table = 'vai_tro_quyen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MaVT' => 'int',
		'MaQuyen' => 'int'
	];

	public function quyen()
	{
		return $this->belongsTo(Quyen::class, 'MaQuyen');
	}

	public function vai_tro()
	{
		return $this->belongsTo(VaiTro::class, 'MaVT');
	}
}

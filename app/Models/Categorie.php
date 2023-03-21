<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * 
 * @property int $id_categorie
 * @property string $libelle
 * 
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class Categorie extends Model
{
	protected $table = 'categorie';
	protected $primaryKey = 'id_categorie';
	public $timestamps = false;

	protected $fillable = [
		'libelle'
	];

	public function articles()
	{
		return $this->hasMany(Article::class, 'id_categorie');
	}
}

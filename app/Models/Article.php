<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
/**
 * Class Article
 *
 * @property int $id_article
 * @property string $titre
 * @property string $resume
 * @property string $contenu
 * @property int $id_categorie
 *
 * @property Categorie $categorie
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'article';
	protected $primaryKey = 'id_article';
	public $timestamps = false;

	protected $casts = [
		'id_categorie' => 'int'
	];

	protected $fillable = [
		'titre',
		'resume',
		'contenu',
		'id_categorie'
	];

	public function categorie()
	{
		return $this->belongsTo(Categorie::class, 'id_categorie');
	}

    public function slug()
    {
        return str()->slug($this->titre." ".$this->id_article);
    }
}

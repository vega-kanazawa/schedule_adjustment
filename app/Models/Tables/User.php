<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;

/**
 * ユーザ モデル
 */
class User extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * 主キー
     *
     * @var string
     */
	protected $primaryKey = 'id';

    /**
     * IDが自動増分されるか
     *
     * @var bool
     */
	public $incrementing = true;

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * 複数代入する属性
     *
     * @var array
     */
	protected $fillable = [
		//'id',
		'name',
		'disp_order',
		//'created_at',
		//'updated_at',
	];

	/**
	 * 属性のラベル
	 *
	 * @return array 属性のラベル
	 */
	public static function attributeLabels()
	{
		return [
			'id'				=> 'ID',
            'name'              => '名前',
			'disp_order'  	    => '表示順',
			'created_at'		=> '作成日時',
			'updated_at'		=> '更新日時',
		];
	}
}

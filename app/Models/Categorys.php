<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    // テーブル名セット
    protected $table = 'categorys';

    // タイムスタンプ設定
    public $timestamps = true;

    /**
     * カテゴリ一覧を取得
     */
    public static function getCategory() {
        return Categorys::get();
    }
    
    /**
     * IDに紐づくカテゴリを取得
     * 
     * @param $id
     * @return Categorys
     */
    public static function getCategoryTieId($id) {
        return Categorys::where('id', $id)->first();
    }
}

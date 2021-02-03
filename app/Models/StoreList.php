<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorys;

class StoreList extends Model
{
    // テーブル名セット
    protected $table = 'store_lists';

    // タイムスタンプ設定
    public $timestamps = true;

    /**
     * 店舗一覧を取得
     * 
     * @param
     * @return StoreList
     */
    public static function getStoreList() {
        return StoreList::get();
    }

    /**
     * 店舗一覧にカテゴリ情報を付随したデータを取得
     * 
     * @param
     * @return StoreList
     */
    public static function getStoreListCategory() {
        $stores = StoreList::getStoreList();
        foreach ($stores as $store) {
            $category = Categorys::getCategoryTieId($store->category_id);
            $store->category_name = $category->category_name;
        }
        return $stores;
    }
}

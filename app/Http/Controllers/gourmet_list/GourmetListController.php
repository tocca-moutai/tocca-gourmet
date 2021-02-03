<?php

namespace App\Http\Controllers\gourmet_list;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

use App\Models\StoreList;
use App\Models\Categorys;

class GourmetListController extends Controller
{
    /**
     * 店舗一覧画面 初期表示
     * 
     * @param
     * @return View
     */
    public function index() {
        $categorys = Categorys::getCategory();
        $stores = StoreList::getStoreListCategory();
        return view('gourmet_list.index', compact('categorys', 'stores'));
    }

    /**
     * 店舗一覧画面 お店自動選択機能
     */
    public function generate() {
        
    }
}

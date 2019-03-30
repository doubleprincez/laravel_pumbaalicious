<?php

namespace App\Http\Controllers;

use App\AdCategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Spatie\Searchable\Search;

class PagesController extends Controller
{
    //
    public function index(){
        $products = Product::all()->sortByDesc('created_at');
        $shop = AdCategory::popularMonth()->get()->take(3);

        $new_products =Product::where('type','=','new')->with('category')->get()->sortByDesc('created_ats');
        $new_products_sort = $new_products->groupBy('category.title')->take(3);


        return view('pages.index')->with([
            'products'=>$products,
            'shop'=>$shop,
            'new'=>$new_products_sort
        ]);

    }

    public function contact(){
        return view('pages.contact');
    }

    public function hot(){
        return view('pages.hot');
    }

    public function help(){
        return view('pages.help');
    }

    public function search(Request $request)
    {
        $per_page = 12;
        $set_page = $request->input('page');
        if(isset($set_page)){
            $page = $set_page;
        }
        else{
            $page = 1;
        }
        $searchResults = (new Search())
            ->registerModel(AdCategory::class, 'title')
            ->registerModel(Product::class, 'title')
            ->perform($request->input('query'));
        $total = $searchResults->count();
        $offset = ($page * $per_page)/$per_page;
         $result = $searchResults->forPage($page,$per_page);

       $paginated = new LengthAwarePaginator(
           $result->values(),
           $total,
           $per_page,
           Paginator::resolveCurrentPage(),
           ['path'=>Paginator::resolveCurrentPath()]
    );
        return view('search.index')->with(['searchResults'=>$paginated]);
    }
}

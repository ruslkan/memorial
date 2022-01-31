<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return CategoryResource::collection(Category::with('products')->get());
        $categories = Category::all();
        //return new CategoryResource($categories);
        //$categories = DB::table('category')
           //->join('subcategory', 'subcategory.category_id', '=','category.id')
           //->where('parent_id',0)
           //->get();

        return new CategoryResource($categories);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return new CategoryResource(Category::with('products')->findOrFail($id));
    }

}

<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function index()
	{
		$categories = Categories::all();
		return response()->json($categories, 200);
	}

	public function getCategories($id)
	{
		$category = Categories::find($id);
		if($category)
			return response()->json($category, 200);

		return response()->json(["Categoy does not exist"], 404);
	}

	public function createNewCategory(Request $request)
	{
		$category = Categories::create($request->all());
		return response()->json($category, 201);
	}

	public function updateCategory(Request $request, $id)
	{
		$category = Categories::find($id);
		$category->category_name = $request->input('category_name');
		$category->description = $request->input('description');
		$category->icon = $request->input('icon');
		$category->parent = $request->input('parent');

		$category->save();

		return response()->json($category);
	}
}


?>
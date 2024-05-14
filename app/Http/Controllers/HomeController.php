<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class HomeController extends Controller
{   
    

    //Отобразить список задач
    public function index()
    {
        $categories = Category::all();
        return view('index',['categories' => $categories]);
    }

  
    //Показать форму создания задач

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        
        if($request->hasFile('image'))
        {
            $imagePath = $request->file('image')->store('images', 'public');
            $category->image_path = $imagePath;
        }

        
        $category->save();

        return redirect()->route('categories.index');
    }

    //Отоброзить инфрмацию о конкретной задаче

    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return view('show', ['categories' => $categories]);
    }

    //Показать форму редактирования задачи

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit',['category' => $category]);
    }

    public function update(CategoryRequest $request,$id)
    {

        $category = Category::findOrFail($id);
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
    
}

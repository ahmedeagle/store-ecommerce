<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class BrandsController extends Controller
{

    public function index()
    {
         $brands = Brand::orderBy('id','DESC') -> paginate(PAGINATION_COUNT);
        return view('dashboard.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('dashboard.brands.create');
    }


    public function store(BrandRequest $request)
    {


            DB::beginTransaction();

            //validation

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);


            $fileName = "";
            if ($request->has('photo')) {

                $fileName = uploadImage('brands', $request->photo);
            }

            $brand = Brand::create($request->except('_token','photo'));

            //save translations
            $brand->name = $request->name;
            $brand -> photo = $fileName;

            $brand->save();

            return redirect()->route('admin.brands')->with(['success' => 'تم ألاضافة بنجاح']);
            DB::commit();



    }


    public function edit($id)
    {

        //get specific categories and its translations
        $category = Category::orderBy('id', 'DESC')->find($id);

        if (!$category)
            return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

        return view('dashboard.categories.edit', compact('category'));

    }


    public function update($id, MainCategoryRequest $request)
    {
        try {
            //validation

            //update DB


            $category = Category::find($id);

            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود']);

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $category->update($request->all());

            //save translations
            $category->name = $request->name;
            $category->save();

            return redirect()->route('admin.maincategories')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            //get specific categories and its translations
            $category = Category::orderBy('id', 'DESC')->find($id);

            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);

            $category->delete();

            return redirect()->route('admin.maincategories')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}

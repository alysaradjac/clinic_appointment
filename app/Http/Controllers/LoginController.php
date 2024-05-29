<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $products = Product::all();

        foreach ($products as $product) {
            $product->name = ucwords($product->name);
        }

        return view('home', compact('products'));
    }
    
    public function adminIndex()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->name = ucwords($product->name);
        }

        return view('admin.product_list', compact('products'));
    }

    public function getProductsByCategory($id)
    {
        if($id == 0) {
            $products = Product::all();
            return response()->json($products);
        }
        
        $products = Product::where('category_id', $id)->get();

        return response()->json($products);
    }

    public function getCategoryName($id) 
    {
        $category = Category::find($id);

        if ($category) {
            $categoryName = $category->name;
            return response()->json($categoryName);
          } else {
            return response()->json("All");
          }
    }

    public function searchProduct(Request $request, $productName)
    {
        $categoryId = $request->query('categoryId');

        $products = Product::where('name', 'like', '%'. $productName. '%')->get();

        if ($categoryId >= 1 && $categoryId <= 7) {
            $products = Product::where('name', 'like', '%'. $productName. '%')->where('category_id', $categoryId)->get();
            
            return response()->json($products);
        }

        if ($products->count() > 0 ) {
            return response()->json($products);
        } else {
            $products = Product::all();
            return response()->json($products);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15000',
            'time' => 'required|integer',
            'category_id' => ['required',Rule::in([1, 2, 3, 4, 5, 6, 7])],
            // 'name' => 'required|string|max:255',
            // 'price' => 'required|numeric',
            // 'image' => 'nullable',
            // 'time' => 'required|integer',
            // 'category_id' => ['required',Rule::in([1, 2, 3, 4, 5, 6, 7])],
        ]);

        //dd($validatedData);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/product'), $filename);

            $validatedData['image'] = $filename;
        } else {
            $validatedData['image'] = 'default.jpg';
        }

        $product = Product::create($validatedData);
        return redirect('/product_list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $id->delete();
        return redirect('/product_list')->with('success', 'Product deleted successfully!');
    }
}

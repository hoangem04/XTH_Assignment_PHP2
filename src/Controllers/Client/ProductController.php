<?php
namespace Fpt\ThoiTrang\Controllers\Client;
use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Commons\Helper;
use Fpt\ThoiTrang\Models\Category;
use Fpt\ThoiTrang\Models\Product;
 class ProductController extends Controller{
   private Product $product;
   private Category $category;
   public function __construct()
   {
       $this->product = new Product();
       $this->category = new Category();
   }
   public function index()
   {
       $products = $this->product->all();
      //  Helper::debug($products);
       $this->renderViewClient('products.product', [
           'products' => $products,
          
       ]);
   }
    
   public function detail($id)
    {
        $products = $this->product->findByID($id);
        $categories = $this->category->all();
        $categoryPluck = array_column($categories, 'name', 'id');
        // Helper::debug($categoryPluck);
        $this->renderViewClient('products.detail', [
            'product' => $products,
            'categoryPluck' => $categoryPluck
        ]);
    }
    public function about()
    {
        
        $this->renderViewClient('about', [
        ]);
    }
    public function contact()
    {
        
        $this->renderViewClient('contact', [
        ]);
    }
    public function small($idCategory)
    {
        $products = $this->product->findByCategoryID($idCategory);
        // Helper::debug($products);
        $this->renderViewClient('products.productsmall', [
            'products'=>$products
        ]);
       
    }
 

    public function medium($idCategory)
    {
        $products = $this->product->findByCategoryID($idCategory);
        // Helper::debug($products);
        $this->renderViewClient('products.productmedium', [
            'products' => $products
        ]);
    }
    public function big($idCategory)
    {
        $products = $this->product->findByCategoryID($idCategory);
        // Helper::debug($products);
        $this->renderViewClient('products.productbig', [
            'products' => $products
        ]);
    }
    public function wallet($idCategory)
    {
        $products = $this->product->findByCategoryID($idCategory);
        // Helper::debug($products);
        $this->renderViewClient('products.productwallet', [
            'products' => $products
        ]);
    }
    
    public function backpuck($idCategory)
    {
        $products = $this->product->findByCategoryID($idCategory);
        // Helper::debug($products);
        $this->renderViewClient('products.productbackpuck', [
            'products' => $products
        ]);
    }
}

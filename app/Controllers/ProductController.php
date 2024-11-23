<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->getProductsWithCategory();
        return view('products/index', $data);
    }


    public function create()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('products/create', $data);
    }

    public function store()
    {
        $model = new ProductModel();
        $data = $this->request->getPost();
    
      
        if (!empty($data['cropped_image'])) {
            $croppedImage = $data['cropped_image'];
            $imageData = explode(',', $croppedImage);
            $decodedImage = base64_decode(end($imageData));
    
            
            $imageName = uniqid() . '.jpg';
            file_put_contents(FCPATH . 'uploads/' . $imageName, $decodedImage);
            $data['image'] = $imageName;
        }
    
        $model->save($data);
        return redirect()->to('/products');
    }
    
    public function delete($id)
    {
        $model = new ProductModel();

       
        if ($model->find($id)) {
            $model->delete($id);
            return redirect()->to('/products')->with('success', 'Product deleted successfully.');
        } else {
            return redirect()->to('/products')->with('error', 'Product not found.');
        }
    }
}

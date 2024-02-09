<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Backend\BikeManagement\MotorBike;
use App\Models\Backend\PartsManagement\PartsProduct;
use App\Models\Frontend\Contact;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    protected $products = [];
    public function index()
    {
        return view('backend.home.index');
    }

    public function contact()
    {
        return view('backend.additional-features.contacts.index', [
            'contacts' => Contact::where('status', 1)->get(),
        ]);
    }
    public function getProductsByParentType($type)
    {
        if ($type == 'parts')
        {
            $this->products = PartsProduct::where(['status' => 1])->get(['id', 'title']);
        } elseif ($type == 'bike')
        {
            $this->products = MotorBike::where(['status' => 1])->get(['id', 'model_name']);
        }
        if ($this->products)
        {
            foreach ($this->products as $product)
            {
                $product->option_title  = $type == 'parts' ? $product->title : $product->model_name;
            }
        }
        return response()->json($this->products);
    }
}

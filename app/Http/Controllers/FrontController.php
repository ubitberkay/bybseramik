<?php

namespace App\Http\Controllers;

use App\Http\Requests\IletisimFormRequest;
use App\Mail\FormSubmitted;
use App\Models\Boyut;
use App\Models\GenelBilgiler;
use App\Models\IletisimForm;
use App\Models\IletisimInfo;
use App\Models\ProtilesUrun;
use App\Models\Slider;
use App\Models\Type;
use App\Models\Urun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        $contact_items = IletisimInfo::get();
        $home_items = GenelBilgiler::get();
        $products = Urun::orderBy('id', 'asc')->get()->take(3);
        $sliders = Slider::orderBy('id', 'asc')->get()->take(3);
        return view('front.home', compact('contact_items', 'home_items', 'products', 'sliders'));
    }
    public function seramikler(Request $request)
    {
        $form_name = $request->name;
        $form_size = $request->size;
        $query = Urun::query();
        if (!empty($form_name)) {
            $query->where('name', 'like', '%' . $form_name . '%');
        }
        if (!empty($form_size)) {
            $query->where('boyuts', 'like', '%' . $form_size . '%');
        }
        if (!empty($form_type)) {
            $query->where('types', 'like', '%' . $form_type . '%');
        }
        if (!empty($form_color)) {
            $query->where('color', 'like', '%' . $form_color . '%');
        }
        $products = $query->with('boyut')->paginate(6);
        $sizes = Boyut::all();
        foreach ($products as $product) {
            $product->boyuts = Boyut::whereIn('id', $product->boyuts)->get();
        }
        $types = Type::all();
        foreach ($products as $product) {
            $product->types = Type::whereIn('id', $product->types)->get();
        }
             return view('front.seramikler', compact('products', 'sizes','types','form_name'));
    }
    public function seramik($id)
    {
        $seramik = Urun::with('boyut')->findOrFail($id);
        $types = Urun::with('type')->findOrFail($id);
        return view('front.seramik', compact('seramik','types'));
    }
    public function granitler(Request $request)
    {
        $form_name = $request->name;
        $form_size = $request->size;
        $query = ProtilesUrun::query();
                if (!empty($form_name)) {
            $query->where('name', 'like', '%' . $form_name . '%');
        }
        if (!empty($form_size)) {
            $query->where('boyuts', 'like', '%' . $form_size . '%');
        }
        if (!empty($form_type)) {
            $query->where('type', 'like', '%' . $form_type . '%');
        }
        if (!empty($form_color)) {
            $query->where('color', 'like', '%' . $form_color . '%');
        }
        $products = $query->with('boyut')->paginate(6);
        $sizes = Boyut::all();
        foreach ($products as $product) {
            $product->boyuts = Boyut::whereIn('id', $product->boyuts)->get();
        }
        $types = Type::all();
        foreach ($products as $product) {
                    $product->types = Type::whereIn('id', $product->types)->get();
        }
        return view('front.granitler', compact('products', 'sizes','form_name','types'));
    }
    public function granit($id)
    {
        $granit = ProtilesUrun::with('boyut')->findOrFail($id);
        $types = ProtilesUrun::with('type')->findOrFail($id);
        return view('front.granit', compact('granit','types'));
    }
    public function contact()
    {
        $contact_item = IletisimInfo::get();
        return view('front.contact', compact('contact_item'));
    }
    public function contact_submit(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone_number' => 'required',
        ]);
        $obj = new IletisimForm();
        $obj->user = $request->user;
        $obj->email = $request->email;
        $obj->message = $request->message;
        $obj->phone_number = $request->phone_number;
        $obj->save();
        return redirect('/')->with('success', 'Mesajınız gönderildi!');
    }
    public function about()
    {
        $about_item = GenelBilgiler::get();
        return view('front.about', compact('about_item'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoyutRequest;
use App\Http\Requests\GenelBilgilerRequest;
use App\Http\Requests\IletisimInfoRequest;
use App\Http\Requests\ProtilesUrunRequest;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\TypeRequest;
use App\Http\Requests\UrunRequest;
use App\Models\Boyut;
use App\Models\GenelBilgiler;
use App\Models\IletisimForm;
use App\Models\IletisimInfo;
use App\Models\ProtilesUrun;
use App\Models\Slider;
use App\Models\Type;
use App\Models\Urun;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function boyut_index()
    {
        $boyut = Boyut::all();
        return view('boyut.index', compact('boyut'));
    }
    public function boyut_create()
    {
        return view('boyut.create');
    }
    public function boyut_store(BoyutRequest $request)
    {
        $boyut =Boyut::create($request->validated());
        return redirect()->route('boyut.index')->with('success', 'Boyut Eklendi!');
    }
    public function boyut_edit(Boyut $boyut)
    {
        return view('boyut.edit', compact('boyut'));
    }
    public function boyut_update(BoyutRequest $request, Boyut $boyut)
    {
        $boyut->update($request->validated());
        return redirect()->route('boyut.index')->with('success', 'Boyut Güncellendi!');
    }
    public function boyut_destroy(Boyut $boyut)
    {
        $boyut->delete();
        return redirect()->route('boyut.index')->with('success', 'Boyut Silindi!');
    }

    public function genel_bilgiler_edit(GenelBilgiler $genelBilgiler)
    {
        return view('genel-bilgiler.edit', compact('genelBilgiler'));
    }
    public function genel_bilgiler_update(GenelBilgilerRequest $request, GenelBilgiler $genelBilgiler)
    {
        $genelBilgiler->update($request->validated());
        return redirect()->back()->with('success', 'Genel Bilgiler başarı ile güncellendi!');
    }


    public function urun_index()
    {
        $urun = Urun::all();
        return view('urun.index', compact('urun'));
    }
    public function urun_create()
    {
        $boyut = Boyut::all();
        $type = Type::all();
        return view('urun.create', compact('boyut','type'));
    }
    public function urun_store(UrunRequest $request)
    {
        $urun = Urun::create($request->validated());
        if ($request->file('image')) {
            $urun->addMediaFromRequest('image')->usingName($urun->name)->toMediaCollection('image');
        }
        return redirect()->route('urun.index')->with('success', 'Ürün Eklendi!');
    }
    public function urun_edit(Urun $urun)
    {
        $boyut = Boyut::all();
        $types = Type::all();
        return view('urun.edit', compact('urun','boyut','types'));
    }
    public function urun_update(UrunRequest $request, Urun $urun)
    {
        $urun->update($request->validated());
        if ($request->file('image')) {
            $urun->clearMediaCollection('image');
            $urun->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('urun.index')->with('success', 'Ürün Düzenlendi!');
    }
    public function urun_destroy(Urun $urun)
    {
        $urun->clearMediaCollection();
        $urun->delete();
        return redirect()->route('urun.index')->with('success', 'Ekip Üyesi Silindi!');
    }

    public function protiles_index()
    {
        $protilesUrun = ProtilesUrun::all();
        return view('protiles.index', compact('protilesUrun'));
    }
    public function protiles_create()
    {
        $boyut = Boyut::all();
        $type = Type::all();
        return view('protiles.create', compact('boyut','type'));
    }
    public function protiles_store(ProtilesUrunRequest $request)
    {
        $protilesUrun = ProtilesUrun::create($request->validated());
        if ($request->file('image')) {
            $protilesUrun->addMediaFromRequest('image')->usingName($protilesUrun->name)->toMediaCollection('image');
        }
        return redirect()->route('protiles.index')->with('success', 'Ürün Eklendi!');
    }
    public function protiles_edit(ProtilesUrun $protilesUrun)
    {
        $boyut = Boyut::all();
        $type = Boyut::all();
        return view('protiles.edit', compact('protilesUrun','boyut','type'));
    }
    public function protiles_update(ProtilesUrunRequest $request, ProtilesUrun $protilesUrun)
    {
        $protilesUrun->update($request->validated());
        if ($request->file('image')) {
            $protilesUrun->clearMediaCollection('image');
            $protilesUrun->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect()->route('protiles.index')->with('success', 'Ürün Düzenlendi!');
    }
    public function protiles_destroy(ProtilesUrun $protilesUrun)
    {
        $protilesUrun->clearMediaCollection();
        $protilesUrun->delete();
        return redirect()->route('protiles.index')->with('success', 'Ürün Silindi!');
    }

    public function iletisim_info_edit(IletisimInfo $iletisimInfo)
    {
        return view('iletisim.edit', compact('iletisimInfo'));
    }
    public function iletisim_info_update(IletisimInfoRequest $iletisimInfoRequest, IletisimInfo $iletisimInfo)
    {
        $iletisimInfo->update($iletisimInfoRequest->validated());
        return redirect()->back()->with('success', 'Genel Bilgiler başarı ile güncellendi!');
    }

    public function slider_index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }
    public function slider_create()
    {
        return view('sliders.create');
    }
    public function slider_store(SliderRequest $request)
    {
        $sliders = Slider::create($request->validated());
        if ($request->file('image')) {
            $sliders->addMediaFromRequest('image')->usingName($sliders->title)->toMediaCollection('image');
        }
        return redirect(route('sliders.index'))->withSuccess('Başarıyla Oluşturuldu');
    }
    public function slider_edit(Slider $sliders)
    {
        return view('sliders.edit', compact('sliders'));
    }
    public function slider_update(SliderRequest $request, Slider $sliders)
    {
        $sliders->update($request->validated());
        if ($request->file('image')) {
            $sliders->clearMediaCollection('image');
            $sliders->addMediaFromRequest('image')->toMediaCollection('image');
        }
        return redirect(route('sliders.index'))->withSuccess('Başarıyla Düzenlendi');
    }
    public function slider_destroy(Slider $sliders)
    {
        $sliders->clearMediaCollection();
        $sliders->delete();
        return redirect(route('sliders.index'));
    }

    public function type_index()
    {
        $type = Type::all();
        return view('type.index', compact('type'));
    }
    public function type_create()
    {
        return view('type.create');
    }
    public function type_store(TypeRequest $request)
    {
        $type =Type::create($request->validated());
        return redirect()->route('type.index')->with('success', 'Ürün Tipi Eklendi!');
    }
    public function type_edit(Type $type)
    {
        return view('type.edit', compact('type'));
    }
    public function type_update(TypeRequest $request, Type $type)
    {
        $type->update($request->validated());
        return redirect()->route('type.index')->with('success', 'Ürün Tipi Güncellendi!');
    }
    public function type_destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('type.index')->with('success', 'Type Silindi!');
    }

    public function message_index()
    {
        $messages = IletisimForm::orderBy('created_at')->limit(10)->get();
        return view('mesajlar.index', compact('messages'));
    }
}

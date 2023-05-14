<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {   $this->middleware('auth');
       
    }
    public function List()
    {
        $cate = Category::all();
        $product = Product::all();
        return view('admin.product.list', compact('product', 'cate'));
    }
    public function Delete(Product $id)
    {
        $id->delete();
        return redirect()->back()->with('success', 'Đã xóa sản phẩm');
    }
    public function Create()
    {
        $cate = Category::all();
        return view('admin.product.create', compact(['cate']));
    }
    public function CreatePost(Request $request)
    {
        $product = new Product();
        // imageGet
        $arrayImgae = '';
        if ($request->has('image')) {
            if (!empty($request->image)) {
                foreach ($request->image as $key => $image) {
                    $arrayImgae =  $this->imageGet($key, $image) . '|' . $arrayImgae;
                }
            }
        }
        $product->name = $request->name;
        $product->id_category = $request->id_category;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->price = $request->price;
        if (!empty($arrayImgae)) {
            $product->image = substr_replace($arrayImgae, "", -1);
        }

        //THÔNG SÓ KỸ THUẬT
        if ($request->has('dongCPU')) {
            $product->dongCPU = $request->dongCPU;
        }
        if ($request->has('congNgheCPU')) {
            $product->congNgheCPU = $request->congNgheCPU;
        }
        if ($request->has('maCPU')) {
            $product->maCPU = $request->maCPU;
        }
        if ($request->has('tocDoCPU')) {
            $product->tocDoCPU = $request->tocDoCPU;
        }
        if ($request->has('TanSoTuborToiDa')) {
            $product->TanSoTuborToiDa = $request->TanSoTuborToiDa;
        }
        if ($request->has('soLoiCPU')) {
            $product->soLoiCPU = $request->soLoiCPU;
        }
        if ($request->has('soluong')) {
            $product->soluong = $request->soluong;
        }
        if ($request->has('boNhoDem')) {
            $product->boNhoDem = $request->boNhoDem;
        }
        if ($request->has('dungLuongRAM')) {
            $product->dungLuongRAM = $request->dungLuongRAM;
        }
        if ($request->has('loaiRAM')) {
            $product->loaiRAM = $request->loaiRAM;
        }
        if ($request->has('tocDoBusRAM')) {
            $product->tocDoBusRAM = $request->tocDoBusRAM;
        }

        if ($request->has('hoTroRAMToiDa')) {
            $product->hoTroRAMToiDa = $request->hoTroRAMToiDa;
        }
        if ($request->has('kheCamRAM')) {
            $product->kheCamRAM = $request->kheCamRAM;
        }
        if ($request->has('dungLuongOCung')) {
            $product->dungLuongOCung = $request->dungLuongOCung;
        }
        if ($request->has('loaiOCung')) {
            $product->loaiOCung = $request->loaiOCung;
        }
        if ($request->has('chuanGiaoTiepOCung')) {
            $product->chuanGiaoTiepOCung = $request->chuanGiaoTiepOCung;
        }
        if ($request->has('kheOCungMoRong')) {
            $product->kheOCungMoRong = $request->kheOCungMoRong;
        }
        if ($request->has('cardDoHoai')) {
            $product->cardDoHoai = $request->cardDoHoai;
        }
        if ($request->has('cardTichHop')) {
            $product->cardTichHop = $request->cardTichHop;
        }
        if ($request->has('kichThuocManHinh')) {
            $product->kichThuocManHinh = $request->kichThuocManHinh;
        }
        if ($request->has('tangSoQuet')) {
            $product->tangSoQuet = $request->tangSoQuet;
        }
        if ($request->has('CongNgheManHinh')) {
            $product->CongNgheManHinh = $request->CongNgheManHinh;
        }
        if ($request->has('ketNoiKhongGiay')) {
            $product->ketNoiKhongGiay = $request->ketNoiKhongGiay;
        }
        if ($request->has('thongSoLanWireless')) {
            $product->thongSoLanWireless = $request->thongSoLanWireless;
        }
        if ($request->has('congGiaoTiep')) {
            $product->congGiaoTiep = $request->congGiaoTiep;
        }
        if ($request->has('webcam')) {
            $product->webcam = $request->webcam;
        }
        if ($request->has('denBanPhim')) {
            $product->denBanPhim = $request->denBanPhim;
        }
        if ($request->has('tinhNangDatBiet')) {
            $product->tinhNangDatBiet = $request->tinhNangDatBiet;
        }
        if ($request->has('heDieuHanh')) {
            $product->heDieuHanh = $request->heDieuHanh;
        }
        if ($request->has('thongSoPin')) {
            $product->thongSoPin = $request->thongSoPin;
        }
        if ($request->has('kichThuoc')) {
            $product->kichThuoc = $request->kichThuoc;
        }
        if ($request->has('trongLuong')) {
            $product->trongLuong = $request->trongLuong;
        }
        if ($request->has('mauSac')) {
            $product->mauSac = $request->mauSac;
        }
        if ($request->has('chatLieu')) {
            $product->chatLieu = $request->chatLieu;
        }
        if ($request->has('phuKien')) {
            $product->phuKien = $request->phuKien;
        }
        if ($request->has('content')) {
            $product->content = $request->content;
        }
        $product->save();
        return redirect()->route('Product.list')->with('success', 'thêm thành công');
    }
    public function Edit($id)
    {
        $cate = Category::all();
        $product = Product::findOrFail($id);

        return view('admin.product.edit', compact(['cate', 'product']));
    }
    public function EditPost($id, Request $request)
    {
        // dd($request->all());
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->id_category = $request->id_category;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->has('image')) {
            if (!empty($request->image)) {
                $countImageOld = count(explode('|', $product->image));
                $countImageNew = count($request->image);
                // dd($countImageOld, $countImageNew);
                $imageRequest = '';
                if ($countImageNew > $countImageOld) {
                    foreach ($request->image as $key => $ima) {
                        $imageRequest =  $this->imageGet($key, $ima) . '|' . $imageRequest;
                    }
                    $product->image = substr_replace($imageRequest, "", -1);
                } else {
                    foreach ($request->image as $key => $ima) {
                        $imageRequest =  $this->imageGet($key, $ima) . '|' . $imageRequest;
                    }
                    foreach (explode('|', $product->image) as $key => $ima) {
                        if (($key + 1) > $countImageNew) {
                            $imageRequest =   $ima . '|' . $imageRequest;
                        }
                    }
                    $product->image = substr_replace($imageRequest, "", -1);
                }
            }
        }
        if ($request->has('dongCPU')) {
            $product->dongCPU = $request->dongCPU;
        }
        if ($request->has('congNgheCPU')) {
            $product->congNgheCPU = $request->congNgheCPU;
        }
        if ($request->has('maCPU')) {
            $product->maCPU = $request->maCPU;
        }
        if ($request->has('tocDoCPU')) {
            $product->tocDoCPU = $request->tocDoCPU;
        }
        if ($request->has('TanSoTuborToiDa')) {
            $product->TanSoTuborToiDa = $request->TanSoTuborToiDa;
        }
        if ($request->has('soLoiCPU')) {
            $product->soLoiCPU = $request->soLoiCPU;
        }
        if ($request->has('soluong')) {
            $product->soluong = $request->soluong;
        }
        if ($request->has('boNhoDem')) {
            $product->boNhoDem = $request->boNhoDem;
        }
        if ($request->has('dungLuongRAM')) {
            $product->dungLuongRAM = $request->dungLuongRAM;
        }
        if ($request->has('loaiRAM')) {
            $product->loaiRAM = $request->loaiRAM;
        }
        if ($request->has('tocDoBusRAM')) {
            $product->tocDoBusRAM = $request->tocDoBusRAM;
        }

        if ($request->has('hoTroRAMToiDa')) {
            $product->hoTroRAMToiDa = $request->hoTroRAMToiDa;
        }
        if ($request->has('kheCamRAM')) {
            $product->kheCamRAM = $request->kheCamRAM;
        }
        if ($request->has('dungLuongOCung')) {
            $product->dungLuongOCung = $request->dungLuongOCung;
        }
        if ($request->has('loaiOCung')) {
            $product->loaiOCung = $request->loaiOCung;
        }
        if ($request->has('chuanGiaoTiepOCung')) {
            $product->chuanGiaoTiepOCung = $request->chuanGiaoTiepOCung;
        }
        if ($request->has('kheOCungMoRong')) {
            $product->kheOCungMoRong = $request->kheOCungMoRong;
        }
        if ($request->has('cardDoHoai')) {
            $product->cardDoHoai = $request->cardDoHoai;
        }
        if ($request->has('cardTichHop')) {
            $product->cardTichHop = $request->cardTichHop;
        }
        if ($request->has('kichThuocManHinh')) {
            $product->kichThuocManHinh = $request->kichThuocManHinh;
        }
        if ($request->has('tangSoQuet')) {
            $product->tangSoQuet = $request->tangSoQuet;
        }
        if ($request->has('CongNgheManHinh')) {
            $product->CongNgheManHinh = $request->CongNgheManHinh;
        }
        if ($request->has('ketNoiKhongGiay')) {
            $product->ketNoiKhongGiay = $request->ketNoiKhongGiay;
        }
        if ($request->has('thongSoLanWireless')) {
            $product->thongSoLanWireless = $request->thongSoLanWireless;
        }
        if ($request->has('congGiaoTiep')) {
            $product->congGiaoTiep = $request->congGiaoTiep;
        }
        if ($request->has('webcam')) {
            $product->webcam = $request->webcam;
        }
        if ($request->has('denBanPhim')) {
            $product->denBanPhim = $request->denBanPhim;
        }
        if ($request->has('tinhNangDatBiet')) {
            $product->tinhNangDatBiet = $request->tinhNangDatBiet;
        }
        if ($request->has('heDieuHanh')) {
            $product->heDieuHanh = $request->heDieuHanh;
        }
        if ($request->has('thongSoPin')) {
            $product->thongSoPin = $request->thongSoPin;
        }
        if ($request->has('kichThuoc')) {
            $product->kichThuoc = $request->kichThuoc;
        }
        if ($request->has('trongLuong')) {
            $product->trongLuong = $request->trongLuong;
        }
        if ($request->has('mauSac')) {
            $product->mauSac = $request->mauSac;
        }
        if ($request->has('chatLieu')) {
            $product->chatLieu = $request->chatLieu;
        }
        if ($request->has('phuKien')) {
            $product->phuKien = $request->phuKien;
        }
        if ($request->has('content')) {
            $product->content = $request->content;
        }
        $product->save();
        return redirect()->route('Product.list')->with('success', 'Sửa thành công');
    }
    public function imageGet($index, $file)
    {
        $image = $file;
        $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
        $uploadname = $index . '-product-' . time() . '.' . $extension;
        $image->move(public_path() . '/uploads/', $uploadname);

        return 'uploads/' . $uploadname;
    }
}

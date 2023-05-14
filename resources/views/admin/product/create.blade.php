@extends('admin.index')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <strong>Thêm Sản phẩm</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('Product.createPost') }}" method="POST" enctype="multipart/form-data"
                            class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Loại sản phẩm</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="id_category" id="">
                                        @foreach ($cate as $ca)
                                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tên</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" placeholder="Nhập"
                                        class="form-control">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Số lượng</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="amount" placeholder="Nhập"
                                        class="form-control">
                                    @error('amount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Thông tin chi tiết</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="text-input" name="description" placeholder="Nhập" class="form-control"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Giá / 1 sản phẩm</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="price" placeholder="Nhập"
                                        class="form-control">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="image_here">
                                    <div class="row form-group image_count">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Ảnh 1</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="text-input" name="image[]" placeholder="Nhập"
                                                class="form-control">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <button type="button" class="btn btn-primary btn-sm btnAddImage">
                                        <i class="fa fa-dot-circle-o"></i> Thêm ảnh
                                    </button>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nội dung sản phẩm</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="content"></textarea>
                                </div>
                            </div>

                            <div class="row form-group bg-warning">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">
                                        <h2>Thông số kỹ thuật</h2>
                                    </label>
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Bộ xử lý</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Dòng CPU</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="dongCPU" placeholder="Nhập"
                                        class="form-control">
                                    @error('dongCPU')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Công nghệ CPU</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="congNgheCPU" placeholder="Nhập"
                                        class="form-control">
                                    @error('congNgheCPU')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Mã CPU</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="maCPU" placeholder="Nhập"
                                        class="form-control">
                                    @error('maCPU')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tốc độ CPU</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="tocDoCPU" placeholder="Nhập"
                                        class="form-control">
                                    @error('tocDoCPU')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tần số turbo tối đa</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="TanSoTuborToiDa" placeholder="Nhập"
                                        class="form-control">
                                    @error('TanSoTuborToiDa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Số lõi CPU</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="soLoiCPU" placeholder="Nhập"
                                        class="form-control">
                                    @error('soLoiCPU')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Số luồng</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="soluong" placeholder="Nhập"
                                        class="form-control">
                                    @error('soluong')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Bộ nhớ đệm</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="boNhoDem" placeholder="Nhập"
                                        class="form-control">
                                    @error('boNhoDem')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Bộ nhớ RAM</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Dung lượng RAM</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="dungLuongRAM" placeholder="Nhập"
                                        class="form-control">
                                    @error('dungLuongRAM')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Loại RAM</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="loaiRAM" placeholder="Nhập"
                                        class="form-control">
                                    @error('loaiRAM')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tốc độ Bus RAM</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="tocDoBusRAM" placeholder="Nhập"
                                        class="form-control">
                                    @error('tocDoBusRAM')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Hỗ trợ RAM tối đa</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="hoTroRAMToiDa" placeholder="Nhập"
                                        class="form-control">
                                    @error('hoTroRAMToiDa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Khe cắm RAM</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="kheCamRAM" placeholder="Nhập"
                                        class="form-control">
                                    @error('kheCamRAM')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Ổ cứng</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Dung lượng ổ cứng</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="dungLuongOCung" placeholder="Nhập"
                                        class="form-control">
                                    @error('dungLuongOCung')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Loại ổ cứng</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="loaiOCung" placeholder="Nhập"
                                        class="form-control">
                                    @error('loaiOCung')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Chuẩn giao tiếp ổ cứng </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="chuanGiaoTiepOCung" placeholder="Nhập"
                                        class="form-control">
                                    @error('chuanGiaoTiepOCung')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Khe ổ cứng mở rộng</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="kheOCungMoRong" placeholder="Nhập"
                                        class="form-control">
                                    @error('kheOCungMoRong')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Card đồ họa</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="cardDoHoai" placeholder="Nhập"
                                        class="form-control">
                                    @error('cardDoHoai')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Card tích hợp</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="cardTichHop" placeholder="Nhập"
                                        class="form-control">
                                    @error('cardTichHop')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Màn hình</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Kích thước màn hình</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="kichThuocManHinh" placeholder="Nhập"
                                        class="form-control">
                                    @error('kichThuocManHinh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Độ phân giải</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="doPhanGiai" placeholder="Nhập"
                                        class="form-control">
                                    @error('doPhanGiai')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tần số quét</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="tangSoQuet" placeholder="Nhập"
                                        class="form-control">
                                    @error('tangSoQuet')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Công nghệ màn hình </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="CongNgheManHinh" placeholder="Nhập"
                                        class="form-control">
                                    @error('CongNgheManHinh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Kết nối</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Kết nối không dây</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="ketNoiKhongGiay" placeholder="Nhập"
                                        class="form-control">
                                    @error('ketNoiKhongGiay')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Thông số (Lan/Wireless) </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="thongSoLanWireless" placeholder="Nhập"
                                        class="form-control">
                                    @error('thongSoLanWireless')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Cổng giao tiếp</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="congGiaoTiep" placeholder="Nhập"
                                        class="form-control">
                                    @error('congGiaoTiep')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Tính năng</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Webcam</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="webcam" placeholder="Nhập"
                                        class="form-control">
                                    @error('webcam')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Đèn bàn phím</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="denBanPhim" placeholder="Nhập"
                                        class="form-control">
                                    @error('denBanPhim')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tính năng đặc biệt </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="tinhNangDatBiet" placeholder="Nhập"
                                        class="form-control">
                                    @error('tinhNangDatBiet')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Phần mềm</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Hệ điều hành</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="heDieuHanh" placeholder="Nhập"
                                        class="form-control">
                                    @error('heDieuHanh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group bg-info">
                                <div class="col col-md-12">
                                    <label for="text-input" class=" form-control-label">Thông tin khác</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Thông số pin</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="thongSoPin" placeholder="Nhập"
                                        class="form-control">
                                    @error('thongSoPin')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Kích thước</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="kichThuoc" placeholder="Nhập"
                                        class="form-control">
                                    @error('kichThuoc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Trọng lượng</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="trongLuong" placeholder="Nhập"
                                        class="form-control">
                                    @error('trongLuong')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Màu sắc</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="mauSac" placeholder="Nhập"
                                        class="form-control">
                                    @error('mauSac')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Chất liệu</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="chatLieu" placeholder="Nhập"
                                        class="form-control">
                                    @error('chatLieu')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Phụ kiện</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="phuKien" placeholder="Nhập"
                                        class="form-control">
                                    @error('phuKien')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Tạo
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

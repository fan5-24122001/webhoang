<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->text('content')->nullable();
            $table->string('dongCPU')->nullable();
            $table->string('congNgheCPU')->nullable();
            $table->string('maCPU')->nullable();
            $table->string('tocDoCPU')->nullable();
            $table->string('TanSoTuborToiDa')->nullable();
            $table->string('soLoiCPU')->nullable();
            $table->string('soluong')->nullable();
            $table->string('boNhoDem')->nullable();
            $table->string('dungLuongRAM')->nullable();
            $table->string('loaiRAM')->nullable();
            $table->string('tocDoBusRAM')->nullable();
            $table->string('hoTroRAMToiDa')->nullable();
            $table->string('kheCamRAM')->nullable();
            $table->string('dungLuongOCung')->nullable();
            $table->string('loaiOCung')->nullable();
            $table->string('chuanGiaoTiepOCung')->nullable();
            $table->string('kheOCungMoRong')->nullable();
            $table->string('cardDoHoai')->nullable();
            $table->string('cardTichHop')->nullable();
            $table->string('kichThuocManHinh')->nullable();
            $table->string('doPhanGiai')->nullable();
            $table->string('tangSoQuet')->nullable();
            $table->string('CongNgheManHinh')->nullable();
            $table->string('ketNoiKhongGiay')->nullable();
            $table->string('thongSoLanWireless')->nullable();
            $table->string('congGiaoTiep')->nullable();
            $table->string('webcam')->nullable();
            $table->string('denBanPhim')->nullable();
            $table->string('tinhNangDatBiet')->nullable();
            $table->string('heDieuHanh')->nullable();
            $table->string('thongSoPin')->nullable();
            $table->string('kichThuoc')->nullable();
            $table->string('trongLuong')->nullable();
            $table->string('mauSac')->nullable();
            $table->string('chatLieu')->nullable();
            $table->string('phuKien')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            //
            $table->dropColumn('dongCPU');
            $table->dropColumn('congNgheCPU');
            $table->dropColumn('maCPU');
            $table->dropColumn('tocDoCPU');
            $table->dropColumn('TanSoTuborToiDa');
            $table->dropColumn('soLoiCPU');
            $table->dropColumn('soluong');
            $table->dropColumn('boNhoDem');
            $table->dropColumn('dungLuongRAM');
            $table->dropColumn('loaiRAM');
            $table->dropColumn('tocDoBusRAM');
            $table->dropColumn('hoTroRAMToiDa');
            $table->dropColumn('kheCamRAM');
            $table->dropColumn('dungLuongOCung');
            $table->dropColumn('loaiOCung');
            $table->dropColumn('chuanGiaoTiepOCung');
            $table->dropColumn('kheOCungMoRong');
            $table->dropColumn('cardDoHoai');
            $table->dropColumn('cardTichHop');
            $table->dropColumn('kichThuocManHinh');
            $table->dropColumn('doPhanGiai');
            $table->dropColumn('tangSoQuet');
            $table->dropColumn('CongNgheManHinh');
            $table->dropColumn('ketNoiKhongGiay');
            $table->dropColumn('thongSoLanWireless');
            $table->dropColumn('webcam');
            $table->dropColumn('denBanPhim');
            $table->dropColumn('tinhNangDatBiet');
            $table->dropColumn('heDieuHanh');
            $table->dropColumn('thongSoPin');
            $table->dropColumn('kichThuoc');
            $table->dropColumn('trongLuong');
            $table->dropColumn('mauSac');
            $table->dropColumn('chatLieu');
            $table->dropColumn('phuKien');
        });
    }
}

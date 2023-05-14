@extends('admin.index')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <strong>Sửa thể loại</strong>
                </div>
                <div class="card-body card-block">
                    <form action="{{route('Category.EditPost',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                        <input type="hidden" id="text-input" value="{{$category->id}}" name="id" class="form-control">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" value="{{$category->name}}" name="name" placeholder="Nhập" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Nhóm loại sản phẩm</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="id_category_item" id="">
                                    @foreach ($CategoryItem as $item)
                                        <option value="{{$item->id}}" {{ ($item->id == $category->id_category_item ) ? 'selected' : ''}} >{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Sửa
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

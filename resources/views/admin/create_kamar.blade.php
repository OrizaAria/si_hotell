<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>Tambah Kamar</strong></div>
                            <div class="block-body">
                                <form action="{{ url('tambah_kamar') }}" method="Post" enctype="multipart/form-data"
                                    class="form-horizontal">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Nama Kamar</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kamar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Deskripsi</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="desk" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Harga</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="harga" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Type Kamar</label>
                                        <div class="col-sm-9">
                                            <select name="type" class="form-control mb-3 mb-3">
                                                <option value="economy">Economy</option>
                                                <option value="medium">Medium</option>
                                                <option value="deluxe">Deluxe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Wifi</label>
                                        <div class="col-sm-9">
                                            <select name="wifi" class="form-control mb-3 mb-3">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Upload Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="gambar" class="form-control">
                                        </div>
                                    </div>
                                    <center>
                                        <div class="line"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-9 ml-auto">
                                                <button type="submit" value="" class="btn btn-primary">Tambah
                                                    Kamar</button>
                                            </div>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>

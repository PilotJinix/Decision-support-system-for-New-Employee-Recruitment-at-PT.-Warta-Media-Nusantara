@extends("admin.layouts.master")
@section("content")
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Calon Penerima</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-end">
                            <a class="btn btn-rounded btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addNewCustomer"><span
                                    class="btn-icon-start text-primary"><i class="fa fa-plus color-info"></i>
                                    </span>Tambah Periode</a>
                            <!-- Add Order -->
                            <div class="modal fade" id="addNewCustomer">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Penerimaan</h5>
                                            <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{route("create-calonpenerima")}}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Nama Periode</label>
                                                    <select type="text" class="form-control form-select" name="id_periode">
                                                        <option selected>Pilih Periode</option>
                                                        @foreach($dataperiode as $data)
                                                            <option value="{{$data->id}}" {{old('dataperiode') == $data->id ? 'selected' : ''}}>{{$data->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Nim</label>
                                                    <input type="text" class="form-control" name="nim">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Dokumen</label>
                                                    <select type="text" class="form-control form-select" name="dokumen">
                                                        <option selected>Pilih Status</option>
                                                        <option value="90">Lengkap</option>
                                                        <option value="10">Tidak Lengkap</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Prestasi IPK</label>
                                                    <select type="text" class="form-control form-select" name="ipk">
                                                        <option selected>Pilih Status</option>
                                                        <option value="90">IPK > 3.51</option>
                                                        <option value="75">3.25 > IPK < 3.50</option>
                                                        <option value="50">3.00 > IPK < 3.25</option>
                                                        <option value="30">2.75 > IPK < 3.00</option>
                                                        <option value="0">IPK < 2.75</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Wawancara</label>
                                                    <select type="text" class="form-control form-select" name="wawancara">
                                                        <option selected>Pilih Status</option>
                                                        <option value="90">Sangat Baik</option>
                                                        <option value="75">Baik</option>
                                                        <option value="50">Cukup</option>
                                                        <option value="30">Kurang</option>
                                                        <option value="0">Sangat Kurang</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Gaji Orang Tua</label>
                                                    <select type="text" class="form-control form-select" name="gaji">
                                                        <option selected>Pilih Status</option>
                                                        <option value="90">Gaji >= 3.500.000</option>
                                                        <option value="75">2.500.000 >= Gaji <= 3.500.000</option>
                                                        <option value="50">1.500.000 >= Gaji <= 2.500.000</option>
                                                        <option value="30">500.000 >= Gaji <= 1.500.000</option>
                                                        <option value="0">Gaji < 500.000</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Periode</th>
                                        <th>Dokumen</th>
                                        <th>Prestasi Pengalaman</th>
                                        <th>Essay</th>
                                        <th>Gaji Orang Tua</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($datacalon as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->dokumen)}}</td>
                                            <td>{{__($item->prestasi)}}</td>
                                            <td>{{__($item->essay)}}</td>
                                            <td>{{__($item->gaji)}}</td>
                                            <td>
                                                @if($item->status == "Lolos")
                                                    <span class="badge light badge-success">Lolos</span>
                                                @elseif($item->status == "Tidak Lolos")
                                                    <span class="badge light badge-danger">Tidak Lolos</span>
                                                @else
                                                    <span class="badge light badge-info">Sedang diproses</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="{{__("#editkegiatan".$item->id)}}"><i class="fa fa-pencil"></i></a>
                                                    <div class="modal fade" id="{{__('editkegiatan'.$item->id)}}">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Penerimaan</h5>
                                                                    <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{route("edit-calonPenerima", $item->id)}}">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Dokumen</label>
                                                                            <select type="text" class="form-control form-select" name="editdokumen">
                                                                                <option value="90" {{$item->dokumen == "90" ? "selected" : ""}}>Lengkap</option>
                                                                                <option value="10" {{$item->dokumen == "10" ? "selected" : ""}}>Tidak Lengkap</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Prestasi IPK</label>
                                                                            <select type="text" class="form-control form-select" name="editipk">
                                                                                <option value="90" {{$item->prestasi == "90" ? "selected" : ""}}>IPK > 3.51</option>
                                                                                <option value="75" {{$item->prestasi == "75" ? "selected" : ""}}>3.25 > IPK < 3.50</option>
                                                                                <option value="50" {{$item->prestasi == "50" ? "selected" : ""}} >3.00 > IPK < 3.25</option>
                                                                                <option value="30" {{$item->prestasi == "30" ? "selected" : ""}} >2.75 > IPK < 3.00</option>
                                                                                <option value="0" {{$item->prestasi == "0" ? "selected" : ""}} >IPK < 2.75</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Essay</label>
                                                                            <select type="text" class="form-control form-select" name="editessay">
                                                                                <option value="100" {{$item->essay == "90" ? "selected" : ""}}>Sangat Baik</option>
                                                                                <option value="70" {{$item->essay == "75" ? "selected" : ""}}>Baik</option>
                                                                                <option value="40" {{$item->essay == "50" ? "selected" : ""}}>Cukup</option>
                                                                                <option value="10" {{$item->essay == "30" ? "selected" : ""}}>Kurang</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Gaji Orang Tua</label>
                                                                            <select type="text" class="form-control form-select" name="editgaji">
                                                                                <option value="90" {{$item->gaji == "90" ? "selected" : ""}}>Gaji >= 3.500.000</option>
                                                                                <option value="75" {{$item->gaji == "75" ? "selected" : ""}}>2.500.000 >= Gaji <= 3.500.000</option>
                                                                                <option value="50" {{$item->gaji == "50" ? "selected" : ""}}>1.500.000 >= Gaji <= 2.500.000</option>
                                                                                <option value="30" {{$item->gaji == "30" ? "selected" : ""}}>500.000 >= Gaji <= 1.500.000</option>
                                                                                <option value="0" {{$item->gaji == "0" ? "selected" : ""}}>Gaji < 500.000</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Status Penerimaan</label>
                                                                            <select type="text" class="form-control form-select" name="editstatus">
                                                                                <option value="Lolos" {{$item->status == "Lolos" ? "selected" : ""}}>Lolos</option>
                                                                                <option value="Tidak Lolos" {{$item->status == "Tidak Lolos" ? "selected" : ""}}>Tidak Lolos</option>
                                                                                <option value="Sedang diproses" {{$item->status == "Sedang diproses" ? "selected" : ""}}>Sedang diproses</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="{{__("#modal".$item->id)}}"><i class="fa fa-trash"></i></a>
                                                    <div class="modal fade" id={{__('modal'.$item->id)}} tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Akun</h5>
                                                                    <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <i class="fa fa-warning"
                                                                       style="font-size: 100px; color: orange"></i>
                                                                    <p>{{__("Semua data akan dihapus!")}}
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="{{route("deleteperiode", $item->id)}}">
                                                                        <button type="button" class="btn btn-danger">Hapus Data</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection

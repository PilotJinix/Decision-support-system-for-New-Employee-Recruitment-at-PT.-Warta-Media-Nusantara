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
                    <h2 class="font-w600 mb-0">Kriteria Benefit</h2>
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
                                            <form method="POST" action="{{route("create-benefit")}}">
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
                                                    <select type="text" class="form-control form-select" name="name">
                                                        <option selected>Pilih Status</option>
                                                        <option value="Dokumen" >Dokumen</option>
                                                        <option value="Prestasi dan Pengalaman">Prestasi dan Pengalaman</option>
                                                        <option value="Wawancara">Wawancara</option>
                                                        <option value="Gaji Orang Tua">Gaji Orang Tua</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Kriteria Type</label>
                                                    <select type="text" class="form-control form-select" name="sifat_kriteria">
                                                        <option selected>Pilih Status</option>
                                                        <option value="max">MAXIMUM</option>
                                                        <option value="min">MINIMUM</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Kriteria Bobot</label>
                                                    <select type="text" class="form-control form-select" name="bobot_kriteria">
                                                        <option selected>Pilih Status</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
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
                                        <th>Nama Periode</th>
                                        <th>Nama</th>
                                        <th>Type</th>
                                        <th>Bobot</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($databenefit as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->nama_kriteria)}}</td>
                                            <td>
                                                @if($item->sifat_kriteria == "max")
                                                    <span class="badge light badge-success">MAXIMAL</span>
                                                @else
                                                    <span class="badge light badge-danger">MINIMUM</span>
                                                @endif
                                            </td>
                                            <td>{{__($item->bobot_kriteria)}}</td>
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
                                                                    <form method="POST" action="{{route("edit-benefit", $item->id)}}">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Name</label>
                                                                            <select type="text" class="form-control form-select" name="editnama">
                                                                                <option value="Dokumen" {{$item->nama_kriteria == "Dokumen" ? "selected" : ""}}>Dokumen</option>
                                                                                <option value="Prestasi dan Pengalaman" {{$item->nama_kriteria == "Prestasi dan Pengalaman" ? "selected" : ""}}>Prestasi dan Pengalaman</option>
                                                                                <option value="Wawancara" {{$item->nama_kriteria == "Wawancara" ? "selected" : ""}}>Wawancara</option>
                                                                                <option value="Gaji Orang Tua" {{$item->nama_kriteria == "Gaji Orang Tua" ? "selected" : ""}}>Gaji Orang Tua</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Type</label>
                                                                            <select type="text" class="form-control form-select" name="editsifat">
                                                                                <option value="max" {{$item->sifat_kriteria == "max" ? "selected" : ""}}>MAXIMUM</option>
                                                                                <option value="min" {{$item->sifat_kriteria == "min" ? "selected" : ""}}>MINIMUM</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Bobot</label>
                                                                            <select type="text" class="form-control form-select" name="editbobot">
                                                                                <option value="1" {{$item->bobot_kriteria == "1" ? "selected" : ""}}>1</option>
                                                                                <option value="2" {{$item->bobot_kriteria == "2" ? "selected" : ""}}>2</option>
                                                                                <option value="3" {{$item->bobot_kriteria == "3" ? "selected" : ""}}>3</option>
                                                                                <option value="4" {{$item->bobot_kriteria == "4" ? "selected" : ""}}>4</option>
                                                                                <option value="5" {{$item->bobot_kriteria == "5" ? "selected" : ""}}>5</option>
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
                                                                    <p>{{__("Semua data periode ".$item->nama_kriteria." akan dihapus!")}}
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="{{route("deletebenefit", $item->id)}}">
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

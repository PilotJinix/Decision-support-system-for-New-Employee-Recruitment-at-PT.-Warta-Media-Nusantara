
@extends("admin.layouts.master")
@section("content")
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pilih Periode</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="#">
                                <div class="input-group">
                                    <select class="default-select form-control wide">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Tabel Normalisasi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Periode</th>
                                        <th>Nama Pendaftar</th>
                                        <th>Nim</th>
                                        <th>Dokumen</th>
                                        <th>Prestasi</th>
                                        <th>IPK</th>
                                        <th>Essay</th>
                                        <th>Gaji Orang Tua</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($data["datanormalisasi"] as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->nama_lengkap)}}</td>
                                            <td>{{__($item->nim)}}</td>
                                            <td>{{__($item->dokumen)}}</td>
                                            <td>{{__($item->prestasi)}}</td>
                                            <td>{{__($item->ipk)}}</td>
                                            <td>{{__($item->essay)}}</td>
                                            <td>{{__($item->gaji)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Tabel Ranking</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Periode</th>
                                        <th>Nama Pendaftar</th>
                                        <th>Nim</th>
                                        <th>Dokumen</th>
                                        <th>Prestasi</th>
                                        <th>IPK</th>
                                        <th>Essay</th>
                                        <th>Gaji Orang Tua</th>
                                        <th>Jumlah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($data["data_ranking"] as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->nama_lengkap)}}</td>
                                            <td>{{__($item->nim)}}</td>
                                            <td>{{__($item->dokumen)}}</td>
                                            <td>{{__($item->prestasi)}}</td>
                                            <td>{{__($item->ipk)}}</td>
                                            <td>{{__($item->essay)}}</td>
                                            <td>{{__($item->gaji)}}</td>
                                            <td>{{__($item->jumlah)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Tabel Final Ranking</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Periode</th>
                                        <th>Nama Pendaftar</th>
                                        <th>Nim</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($data["data_final_ranking"] as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->nama_lengkap)}}</td>
                                            <td>{{__($item->nim)}}</td>
                                            <td>{{__($item->jumlah)}}</td>
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
                                                                    <h5 class="modal-title">Edit Status</h5>
                                                                    <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{route("edit-tabel-final-ranking", $item->id)}}">
                                                                        @csrf
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

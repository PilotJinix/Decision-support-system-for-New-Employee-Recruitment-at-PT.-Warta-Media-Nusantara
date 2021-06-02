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
                                            <form method="POST" action="{{route("create-periode")}}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Kategori</label>
                                                    <select type="text" class="form-control form-select" name="kategori">
                                                        <option selected>Pilih Status</option>
                                                        <option value="Internship">Internship</option>
                                                        <option value="Formal">Formal</option>
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
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Periode</th>
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
                                            <td>{{__($item->nama)}}</td>
                                            <td>{{__($item->nim)}}</td>
                                            <td>{{__($item->id_periode)}}</td>
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
                                                                    <form method="POST" action="{{route("edit-penerimaan", $item->id)}}">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Name</label>
                                                                            <input type="text" class="form-control" name="editname" value="{{__($item->nama)}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Kategori</label>
                                                                            <select type="text" class="form-control form-select" name="editkategori">
{{--                                                                                @if($item->kategori == "Internship")--}}
{{--                                                                                    <option value="Internship" selected>Internship</option>--}}
{{--                                                                                    <option value="Formal">Formal</option>--}}
{{--                                                                                @else--}}
{{--                                                                                    <option value="Internship">Internship</option>--}}
{{--                                                                                    <option value="Formal" selected>Formal</option>--}}
{{--                                                                                @endif--}}
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Status Penerimaan</label>
                                                                            <select type="text" class="form-control form-select" name="editstatus">
                                                                                @if($item->status == "0")
                                                                                    <option value="0" selected>Dibuka</option>
                                                                                    <option value="1">Ditutup</option>
                                                                                @else
                                                                                    <option value="0">Dibuka</option>
                                                                                    <option value="1" selected>Ditutup</option>
                                                                                @endif
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
                                                                    <p>{{__("Semua data periode ".$item->nama." akan dihapus!")}}
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

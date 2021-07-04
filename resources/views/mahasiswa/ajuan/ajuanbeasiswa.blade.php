@extends("mahasiswa.layouts.master")
@section("content")
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Ajuan Beasiswa</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-end">
                            <a class="btn btn-rounded btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addNewCustomer"><span
                                    class="btn-icon-start text-primary"><i class="fa fa-plus color-info"></i>
                                    </span>Ajuan Beasiswa</a>
                            <!-- Add Order -->
                            <div class="modal fade" id="addNewCustomer">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Ajuan Beasiswa</h5>
                                            <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" enctype="multipart/form-data" action="{{route("create-ajuan-beasiswa")}}" >
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
                                                    <label class="text-black font-w500">IPK</label>
                                                    <select type="text" class="form-control form-select" name="ipk">
                                                        <option value="" selected>Pilih Status</option>
                                                        <option value="100">3.85 <= IPK <= 4.00</option>
                                                        <option value="70">3.50 <= IPK < 3.85</option>
                                                        <option value="40">3.25 <= IPK < 3.50</option>
                                                        <option value="10">3,00 <= x < 3,25</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Gaji Orang Tua</label>
                                                    <select type="text" class="form-control form-select" name="gaji">
                                                        <option value="" selected>Pilih Status</option>
                                                        <option value="10">Gaji <= Rp 1.500.000</option>
                                                        <option value="40">Rp 1.500.000 < Gaji <= Rp. 4.000.000 </option>
                                                        <option value="70">Rp. 4.000.000 < Gaji <= Rp. 7.000.000</option>
                                                        <option value="100">Gaji > Rp .7.000.000 </option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">File</label>
                                                    <div class="rounded" style="border: 1px solid #e1e1e1;padding: 13px;border-radius: 5px">
                                                        <input type="file" style="cursor: pointer;border: none" name="data">
                                                    </div>
                                                    <label style="color: gray">(Max data = 4MB )</label>
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
                                        <th>IPK</th>
                                        <th>Gaji Orang Tua</th>
                                        <th>Status</th>
{{--                                        <th>Action</th>--}}
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
                                            <td>{{__($item->ipk)}}</td>
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
{{--                                            <td>--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="{{__("#editkegiatan".$item->id)}}"><i class="fa fa-pencil"></i></a>--}}
{{--                                                    <div class="modal fade" id="{{__('editkegiatan'.$item->id)}}">--}}
{{--                                                        <div class="modal-dialog" role="document">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header">--}}
{{--                                                                    <h5 class="modal-title">Edit Ajuan Beasiswa</h5>--}}
{{--                                                                    <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-body">--}}
{{--                                                                    <form method="POST" action="{{route("edit-calonPenerima", $item->id)}}">--}}
{{--                                                                        @csrf--}}
{{--                                                                        <div class="mb-3">--}}
{{--                                                                            <label class="text-black font-w500">IPK</label>--}}
{{--                                                                            <select type="text" class="form-control form-select" name="editipk">--}}
{{--                                                                                <option value="100" {{$item->ipk == "100" ? "selected" : ""}}>3.85 <= IPK <= 4.00</option>--}}
{{--                                                                                <option value="70" {{$item->ipk == "70" ? "selected" : ""}}>3.50 <= IPK < 3.85</option>--}}
{{--                                                                                <option value="40" {{$item->ipk == "40" ? "selected" : ""}} >3.25 <= IPK < 3.50</option>--}}
{{--                                                                                <option value="10" {{$item->ipk == "10" ? "selected" : ""}} >3.00 <= IPK < 3.25</option>--}}
{{--                                                                            </select>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="mb-3">--}}
{{--                                                                            <label class="text-black font-w500">Gaji Orang Tua</label>--}}
{{--                                                                            <select type="text" class="form-control form-select" name="editgaji">--}}
{{--                                                                                <option value="10" {{$item->gaji == "10" ? "selected" : ""}}>Gaji <= Rp 1.500.000</option>--}}
{{--                                                                                <option value="40" {{$item->gaji == "40" ? "selected" : ""}}>Rp 1.500.000 < Gaji <= Rp. 4.000.000 </option>--}}
{{--                                                                                <option value="70" {{$item->gaji == "70" ? "selected" : ""}}>Rp. 4.000.000 < Gaji <= Rp. 7.000.000</option>--}}
{{--                                                                                <option value="100" {{$item->gaji == "100" ? "selected" : ""}}>Gaji > Rp .7.000.000 </option>--}}

{{--                                                                            </select>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <button type="submit" class="btn btn-primary btn-block">Save</button>--}}
{{--                                                                        </div>--}}
{{--                                                                    </form>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="javascript:void(0)" class="btn btn-danger shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="{{__("#modal".$item->id)}}"><i class="fa fa-trash"></i></a>--}}
{{--                                                    <div class="modal fade" id={{__('modal'.$item->id)}} tabindex="-1" role="dialog"--}}
{{--                                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header">--}}
{{--                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Akun</h5>--}}
{{--                                                                    <a href="javascript:void(0);" class="btn-close" data-bs-dismiss="modal"></a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-body text-center">--}}
{{--                                                                    <i class="fa fa-warning"--}}
{{--                                                                       style="font-size: 100px; color: orange"></i>--}}
{{--                                                                    <p>{{__("Semua data periode ".$item->name." akan dihapus!")}}--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-footer">--}}
{{--                                                                    <a href="{{route("deleteperiode", $item->id)}}">--}}
{{--                                                                        <button type="button" class="btn btn-danger">Hapus Data</button>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
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

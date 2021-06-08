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
                                        <th>IPK</th>
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
                                                                                <option value="100" {{$item->dokumen == "100" ? "selected" : ""}}>Lengkap</option>
                                                                                <option value="70" {{$item->dokumen == "70" ? "selected" : ""}}>Lengkap kecuali SKTM</option>
                                                                                <option value="40" {{$item->dokumen == "40" ? "selected" : ""}}>Lengkap kecuali Surat Rekomendasi</option>
                                                                                <option value="10" {{$item->dokumen == "10" ? "selected" : ""}}>Tidak Lengkap</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Prestasi dan Pengalaman</label>
                                                                            <select type="text" class="form-control form-select" name="editprestasi">
                                                                                <option value="100" {{$item->prestasi == "100" ? "selected" : ""}}>Sertifikat Kejuaraan dan Organisasi</option>
                                                                                <option value="70" {{$item->prestasi == "70" ? "selected" : ""}}>Sertifikat Kejuaraan</option>
                                                                                <option value="40" {{$item->prestasi == "40" ? "selected" : ""}}>Sertifikat Organisasi</option>
                                                                                <option value="10" {{$item->prestasi == "10" ? "selected" : ""}}>Tidak ada pengalaman organisasi</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Prestasi IPK</label>
                                                                            <select type="text" class="form-control form-select" name="editipk">
                                                                                <option value="100" {{$item->ipk == "100" ? "selected" : ""}}>3.85 <= IPK <= 4.00</option>
                                                                                <option value="70" {{$item->ipk == "70" ? "selected" : ""}}>3.50 <= IPK < 3.85</option>
                                                                                <option value="40" {{$item->ipk == "40" ? "selected" : ""}} >3.25 <= IPK < 3.50</option>
                                                                                <option value="10" {{$item->ipk == "10" ? "selected" : ""}} >3.00 <= IPK < 3.25</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Essay</label>
                                                                            <select type="text" class="form-control form-select" name="editessay">
                                                                                <option value="100" {{$item->essay == "100" ? "selected" : ""}}>Sangat Baik</option>
                                                                                <option value="70" {{$item->essay == "70" ? "selected" : ""}}>Baik</option>
                                                                                <option value="40" {{$item->essay == "40" ? "selected" : ""}}>Cukup</option>
                                                                                <option value="10" {{$item->essay == "10" ? "selected" : ""}}>Kurang</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Gaji Orang Tua</label>
                                                                            <select type="text" class="form-control form-select" name="editgaji">
                                                                                <option value="10" {{$item->gaji == "10" ? "selected" : ""}}>Gaji <= Rp 1.500.000</option>
                                                                                <option value="40" {{$item->gaji == "40" ? "selected" : ""}}>Rp 1.500.000 < Gaji <= Rp. 4.000.000 </option>
                                                                                <option value="70" {{$item->gaji == "70" ? "selected" : ""}}>Rp. 4.000.000 < Gaji <= Rp. 7.000.000</option>
                                                                                <option value="100" {{$item->gaji == "100" ? "selected" : ""}}>Gaji > Rp .7.000.000 </option>
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

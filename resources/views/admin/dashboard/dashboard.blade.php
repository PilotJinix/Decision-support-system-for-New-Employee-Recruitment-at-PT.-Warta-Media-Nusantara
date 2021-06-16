@extends("admin.layouts.master")
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Dashboard</h2>
                    <p class="text-light">Welcome Dashboard</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                            <div class="widget-stat card">
                                <div class="card-body p-4">
                                    <div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
                                        <div class="media-body">
                                            <p class="mb-1">College Student</p>
                                            <h4 class="mb-0">{{$murid}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                            <div class="widget-stat card">
                                <div class="card-body p-4">
                                    <div class="media ai-icon">
									<span class="me-3 bgl-warning text-warning">
										<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
                                        <div class="media-body">
                                            <p class="mb-1">Scholarship Applicants</p>
                                            <h4 class="mb-0">{{$pengajuaan}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                            <div class="widget-stat card">
                                <div class="card-body  p-4">
                                    <div class="media ai-icon">
									<span class="me-3 bgl-danger text-danger">
										<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calender">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg>
									</span>
                                        <div class="media-body">
                                            <p class="mb-1">Application Approved</p>
                                            <h4 class="mb-0">{{$diterima}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                            <div class="widget-stat card">
                                <div class="card-body p-4">
                                    <div class="media ai-icon">
									<span class="me-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
                                        <div class="media-body">
                                            <p class="mb-1">Scholarship Period</p>
                                            <h4 class="mb-0">{{$periode}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Periode Penerimaan</h2>
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
                                                        <option value="Beasiswa">Beasiswa</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-black font-w500">Kuota Diterima</label>
                                                    <input type="number" class="form-control" name="kuota" min="1">
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
                                        <th>Name</th>
                                        <th>Kategori</th>
                                        <th>Periode</th>
                                        <th>Kuota</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($data_periode as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->kategori)}}</td>
                                            <td>{{__($item->id)}}</td>
                                            <td>{{__($item->kuota)}}</td>
                                            <td>
                                                @if($item->status == "0")
                                                    <span class="badge light badge-success">Dibuka</span>
                                                @else
                                                    <span class="badge light badge-warning">Ditutup</span>
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
                                                                            <input type="text" class="form-control" name="editname" value="{{__($item->name)}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Kategori</label>
                                                                            <select type="text" class="form-control form-select" name="editkategori">
                                                                                <option value="Beasiswa" {{$item->kategori == "Beasiswa" ? "selected" : ""}}>Beasiswa</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Kuota Diterima</label>
                                                                            <input type="number" class="form-control" name="editkuota" value="{{__($item->kuota)}}" min="1">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="text-black font-w500">Status Penerimaan</label>
                                                                            <select type="text" class="form-control form-select" name="editstatus">
                                                                                <option value="0" {{$item->status == "0" ? "selected" : ""}}>Dibuka</option>
                                                                                <option value="1" {{$item->status == "1" ? "selected" : ""}}>Ditutup</option>
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
                                                                    <p>{{__("Semua data periode ".$item->name." akan dihapus!")}}
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

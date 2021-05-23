@extends("layouts.master")
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
                    <p class="text-light">Lorem ipsum  dolor sit amet </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="chart-num font-w600 mb-0">215</h2>
                                        <svg class="ms-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-black font-w500 mb-0">Tickets</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="widgetChart1" class="chart-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="chart-num font-w600 mb-0">$536k</h2>
                                        <svg class="ms-2" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 -4.76837e-06C0.222201 -4.76837e-06 -0.670134 2.15428 0.589795 3.41421L7.78218 10.6066C8.56323 11.3876 9.82956 11.3876 10.6106 10.6066L17.803 3.41421C19.0629 2.15428 18.1706 -4.76837e-06 16.3888 -4.76837e-06H2.00401Z" fill="#FF3131"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-black font-w500 mb-0">Revenue</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="widgetChart2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="chart-num font-w600 mb-0">652</h2>
                                        <svg class="ms-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-black font-w500 mb-0">Sales</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <canvas id="widgetChart3" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-body pt-sm-4 pt-3 d-flex align-items-center justify-content-between">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <h2 class="chart-num font-w600 mb-0">45242</h2>
                                        </div>
                                        <div>
                                            <h5 class="text-black font-w500 mb-3 mt-2">Event Held</h5>
                                        </div>
                                        <div>
                                            <p class="text-primary fs-14 mb-0">
                                                <svg class="me-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns=	"http://www.w3.org/2000/svg">
                                                    <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"/>
                                                </svg>
                                                2.4%
                                                <span class="op-6 text-light">than Last Week</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-inline-block position-relative donut-chart-sale">
                                            <span class="donut1" data-peity='{ "fill": ["rgb(14, 138, 116,1)", "rgba(240, 240, 240)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
                                            <small class="text-black">66%</small>
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
                                        <th>Name</th>
                                        <th>Kategori</th>
                                        <th>Periode</th>
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
                                                                            @if($item->kategori == "Internship")
                                                                                <option value="Internship" selected>Internship</option>
                                                                                <option value="Formal">Formal</option>
                                                                            @else
                                                                                <option value="Internship">Internship</option>
                                                                                <option value="Formal" selected>Formal</option>
                                                                            @endif
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

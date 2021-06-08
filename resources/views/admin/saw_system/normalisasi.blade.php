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
                                        <th>Prestasi dan Pengalaman</th>
                                        <th>Essay</th>
                                        <th>Essay</th>
                                        <th>Gaji Orang Tua</th>
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
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->name)}}</td>
                                            <td>{{__($item->name)}}</td>
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

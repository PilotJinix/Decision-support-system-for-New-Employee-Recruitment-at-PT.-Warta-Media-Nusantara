@extends("mahasiswa.layouts.master")
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
                    <p class="text-light">Beasiswa</p>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Pendaftaran Beasiswa</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Pendaftaran Beasiwa dapat dilakukan ketika periode beasiswa telah dibuka oleh pernyedia beasiswa <br> mahasiswa dapat melihat periode beasiswa tersebut pada tabel periode penerimaan </p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-end align-items-center">
                        <a href="javascript:void(0);" class="btn btn-primary">Ajukan Beasiswa</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ketentuan Essay</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-list-group">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-2">
                                        <div class="list-group mb-4 " id="list-tab" role="tablist"><a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab">Motivasi</a> <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab">Kesiapan Diri</a> <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab">Gambaran Diri</a>
                                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab">Issue</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-10">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="list-home">
                                                <h4 class="mb-4">Jelaskan apa motivasi terbesar Anda ingin mengikuti Beasiswa BI ?</h4>
                                                <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit
                                                    occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in
                                                    cupidatat nisi enim eu nostrud do aliquip veniam minim.</p>
                                            </div>
                                            <div class="tab-pane fade" id="list-profile" role="tabpanel">
                                                <h4 class="mb-4">Beritahu saya kesiapan diri Anda jika diterjukan ke Daerah terpencil untuk mengabdi ke masyarakat, sertakan alasan ?</h4>
                                                <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                                    incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                                    commodo veniam incididunt veniam ad.</p>
                                            </div>
                                            <div class="tab-pane fade" id="list-messages">
                                                <h4 class="mb-4">Ceritakan gambaran diri Anda, dan hal apa yang akan Anda lakukan jika diterima sebagai penerima Beasiswa BI ?</h4>
                                                <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
                                                    enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
                                                    Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="list-settings">
                                                <h4 class="mb-4">Ceritakan issue kebanksentralan yang sedang hangat saat ini, dan berikan tanggapan Anda tentang issue tersebut ?</h4>
                                                <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute
                                                    est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna
                                                    labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
                                            </div>
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

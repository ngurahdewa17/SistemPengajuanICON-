@extends('layouts.mainindex')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Pengajuan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard ICON +</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="/store_pengajuan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Pemohon</label>
                                        <input type="text" class="form-control @error('namaMitra') is-invalid @enderror" name="namaMitra"  placeholder="Masukkan nama mitra">
                                    
                                        <!-- error message untuk title -->
                                        @error('namaMitra')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Masukan Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Masukkan email anda">
                                    
                                        <!-- error message untuk title -->
                                        @error('email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Perusahaan</label>
                                        <input type="text" class="form-control @error('namaPerusahaan') is-invalid @enderror" name="namaPerusahaan"  placeholder="Masukkan nama perusahaan anda">
                                    
                                        <!-- error message untuk title -->
                                        @error('namaPerusahaan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Pekerjaan</label>
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan"  placeholder="Masukka nama pekerjaan">
                                    
                                        <!-- error message untuk title -->
                                        @error('pekerjaan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">No.SP2KPA</label>
                                        <input type="text" class="form-control @error('noSP2KPA') is-invalid @enderror" name="noSP2KPA"  placeholder="Masukkan No.SP2KPA">
                                    
                                        <!-- error message untuk title -->
                                        @error('noSP2KPA')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tanggal Mulai Pekerjaan</label>
                                        <input type="date" id="Tanggal" name="haritanggalMulai" class="form-control @error('haritanggalMulai') is-invalid @enderror"  placeholder="Masukkan Tanggal Mulai Pekerjaan">
            
                                        <!-- error message untuk title -->
                                        @error('haritanggalMulai')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Tanggal Selesai Pekerjaan</label>
                                        <input type="date" id="Tanggal" name="haritanggalSelesai" class="form-control @error('haritanggalSelesai') is-invalid @enderror"  placeholder="Masukkan Tanggal Selesai Pekerjaan">
                                     
                                    
                                        <!-- error message untuk title -->
                                        @error('haritanggalSelesai')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="font-weight-bold">Lokasi Pekerjaan</label>
                                        <input type="text" class="form-control @error('namaLokasi') is-invalid @enderror" name="namaLokasi"  placeholder="Masukkan Nama Lokasi">
                                    
                                        <!-- error message untuk title -->
                                        @error('namaLokasi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="font-weight-bold">Aktifitas</label>
                                        <div class="form-group">
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" name="aktifitas[]" value="FOC" class="btn-check" id="btncheck1" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck1">FOC</label>
                                              
                                                <input type="checkbox" name="aktifitas[]" value="FOT" class="btn-check" id="btncheck2" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck2">FOT</label>
                                              
                                                <input type="checkbox" name="aktifitas[]" value="Sarpen" class="btn-check" id="btncheck3" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck3">Sarpen</label>
                                            </div>
                                            <p class="text-muted"><small><em>*klik checkbox diatas untuk memilih jenis aktifitas</em></small></p>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="font-weight-bold">Aktifitas</label>
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label">
                                                    <input type="checkbox" name="aktifitas[]" value="FOC"> FOC
                                                </label>
                                                <label for="checkbox1" class="form-check-label">
                                                    <input type="checkbox" name="aktifitas[]" value="FOT"> FOT
                                                </label>
                                                <label for="checkbox1" class="form-check-label">
                                                    <input type="checkbox" name="aktifitas[]" value="Sarpen"> Sarpen        
                                                </label>
                                            </div>
                                        </div>     
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="font-weight-bold">Lokasi</label>
                                        <div class="form-group">
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" name="lokasi[]" value="POP" class="btn-check" id="btncheck4" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck4">POP</label>
                                              
                                                <input type="checkbox" name="lokasi[]" value="Outdoor" class="btn-check" id="btncheck5" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck5">Outdoor</label>
                                              
                                                <input type="checkbox" name="lokasi[]" value="Customer" class="btn-check" id="btncheck6" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck6">Customer</label>
                                            </div>
                                            <p class="text-muted"><small><em>*klik checkbox diatas untuk memilih lokasi</em></small></p>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label class="font-weight-bold">Lokasi</label>
                                                <input type="checkbox" class="form-control"  name="lokasi[]" value="POP">
                                                <input type="checkbox" class="form-control"  name="lokasi[]" value="Outdoor">
                                                <input type="checkbox" class="form-control"  name="lokasi[]" value="Customer">
                                            </div>
                                        </div>     
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="font-weight-bold">Task List</label>
                                        <div class="form-group">
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" name="taskList[]" value="Penarikan" class="btn-check" id="btncheck7" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck7">Penarikan</label>
                                              
                                                <input type="checkbox" name="taskList[]" value="Survey" class="btn-check" id="btncheck8" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck8">Survey</label>
                                              
                                                <input type="checkbox" name="taskList[]" value="Instalasi" class="btn-check" id="btncheck9" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck9">Instalasi</label>

                                                <input type="checkbox" name="taskList[]" value="QC" class="btn-check" id="btncheck10" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck10">QC</label>

                                                <input type="checkbox" name="taskList[]" value="Jointing" class="btn-check" id="btncheck11" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck11">Jointing</label>

                                                <input type="checkbox" name="taskList[]" value="Pemasangan" class="btn-check" id="btncheck12" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck12">Pemasangan</label>

                                                <input type="checkbox" name="taskList[]" value="Pengembalian" class="btn-check" id="btncheck13" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck13">Pengembalian</label>

                                                <input type="checkbox" name="taskList[]" value="Penggalian" class="btn-check" id="btncheck14" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck14">Penggalian</label>

                                                <input type="checkbox" name="taskList[]" value="Perapihan" class="btn-check" id="btncheck15" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck15">Perapihan</label>

                                                <input type="checkbox" name="taskList[]" value="Pulling" class="btn-check" id="btncheck16" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck16">Pulling</label>    
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" name="taskList[]" value="Relokasi" class="btn-check" id="btncheck17" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck17">Relokasi</label>
                                              
                                                <input type="checkbox" name="taskList[]" value="Repair" class="btn-check" id="btncheck18" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck18">Repair</label>
                                              
                                                <input type="checkbox" name="taskList[]" value="Splicing" class="btn-check" id="btncheck19" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck19">Splicing</label>

                                                <input type="checkbox" name="taskList[]" value="Tesccomm" class="btn-check" id="btncheck20" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck20">Tesccomm</label>

                                                <input type="checkbox" name="taskList[]" value="Tracing" class="btn-check" id="btncheck21" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck21">Tracing</label>

                                                <input type="checkbox" name="taskList[]" value="Deaktivasi" class="btn-check" id="btncheck22" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck22">Deaktivasi</label>

                                                <input type="checkbox" name="taskList[]" value="PM FOC" class="btn-check" id="btncheck23" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck23">PM FOC</label>

                                                <input type="checkbox" name="taskList[]" value="PM FOT" class="btn-check" id="btncheck24" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck24">PM FOT</label>

                                                <input type="checkbox" name="taskList[]" value="PM Sarpen" class="btn-check" id="btncheck25" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck25">PM Sarpen</label>

                                                <input type="checkbox" name="taskList[]" value="Yang lain..." class="btn-check" id="btncheck26" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btncheck26">Yang lain...</label> 
                                            </div>
                                            <p class="text-muted"><small><em>*klik checkbox diatas untuk memilih task list</em></small></p>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label class="font-weight-bold">Task List</label>
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Penarikan">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Survey">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Instalasi">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="QC">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Jointing">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Pemasangan">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Pengembalian">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Penggalian">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Perapihan">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Pulling">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Relokasi">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Repair">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Splicing">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Tesccomm">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Tracing">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Deaktivasi">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="PM FOC">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="PM FOT">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="PM Sarpen">
                                                <input type="checkbox" class="form-control"  name="taskList[]" value="Yang lain...">
                                            </div>
                                        </div>     
                                    </div> --}}

                                    <div class="form-group">
                                        <label class="font-weight-bold">Pengawas Pekerjaan</label>
                                        <input type="text" class="form-control @error('pengawasPekerjaan') is-invalid @enderror" name="pengawasPekerjaan"  placeholder="Masukkan nama pengawas pekerjaan">
                                    
                                        <!-- error message untuk title -->
                                        @error('pekerjaan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">No HP Pengawas Pekerjaan</label>
                                        <input type="text" class="form-control @error('noHPPegawaiPekerjaan') is-invalid @enderror" name="noHPPegawaiPekerjaan"  placeholder="Masukka no HP pengawas pekerjaan">
                                    
                                        <!-- error message untuk title -->
                                        @error('no HPPegawaiPekerjaan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Pengawas K3</label>
                                        <input type="text" class="form-control @error('pengawasK3') is-invalid @enderror" name="pengawasK3"  placeholder="Masukka nama pengawas K3">
                                    
                                        <!-- error message untuk title -->
                                        @error('pegawasK3')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">No HP Pengawas K3</label>
                                        <input type="text" class="form-control @error('noHPPegawaiK3') is-invalid @enderror" name="noHPPegawaiK3"  placeholder="Masukka no HP pengawas K3">
                                    
                                        <!-- error message untuk title -->
                                        @error('noHPPegawaiK3')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Upload Sertifikat K3</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    
                                        <!-- error message untuk title -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
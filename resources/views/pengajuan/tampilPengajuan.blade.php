@extends('layouts.mainindex')
@section('container')
    <div class="content-wrapper">
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pemohon</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard ICON +</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">  
                                <div class="x_title">
                                    <div class="mb-2">
                                        <a href="/form_pengajuan" class="btn btn-success" class="text-decoration-none">PENGAJUAN</a >
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="x_content">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="50%">
                                        <thead class="primary">
                                            <tr class="text-bold">
                                                <td>No</td>
                                                <td>Email Pemohon</td>
                                                <td>No.SP2K/PA</td>
                                                <td>Tanggal Pekerjaan Mulai</td>
                                                <td>Tanggal Pekerjaan Berakhir</td>
                                                <td>Aktifitas</td>
                                                <td>Lokasi</td>
                                                <td>Pengawas Pekerjaan</td>
                                                <td>Pengawas K3</td>
                                                <td>Image K3</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dataPengajuan as $dataP)
                                            <tr>
                                                <td>{{$no++}}</td>  
                                                <td>{{$dataP->namaMitra}}</td>
                                                <td>{{$dataP->noSP2KPA}}</td>
                                                <td>{{$dataP->haritanggalMulai}}</td>
                                                <td>{{$dataP->haritanggalSelesai}}</td>
                                                <td>{{$dataP->aktifitas}}</td>
                                                <td>{{$dataP->lokasi}}</td>
                                                <td>{{$dataP->pengawasPekerjaan}}</td>
                                                <td>{{$dataP->pengawasK3}}</td>   
                                                <td><img src="{{ asset('storage/images/'.$dataP->image) }}" width="70" height="100" class="img img-responsive"/></td>
                                                
                                                <td>
                                                    <div class="form-group">
                                                        <form method="POST" action="">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="submit" name="submit" value="PENDING"  class="btn btn-warning" style="width: 100%;" />
                                                                <input type="hidden" name="_method" value="PUT" />
                                                        </form>
                                                    </div>
                                                    <div class="form-group">
                                                        <form method="POST" action="">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="submit" name="print" value="PRINT"  class="btn btn-success" style="width: 100%;" />
                                                                <input type="hidden" name="_method" value="PUT" />
                                                        </form>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="/print_template" class="btn btn-success" class="text-decoration-none">TEMPLATE DATA</a >
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{  $dataPengajuan->links() }}
                                    {{-- {{ $data_pelanggan->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </div>

  
        
        
   
    
@endsection
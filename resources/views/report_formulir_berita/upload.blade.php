@include('header_admin');
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Upload Formulir Berita</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <!-- <li><span>APBN</span></li>
                <li><span>Rencana Kegiatan</span></li> -->
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <section class="panel">

        <br>
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">PER BULAN</a></li>
            <li><a data-toggle="tab" href="#menu1">PER TW/SEMESTER</a></li>
            <li><a data-toggle="tab" href="#menu2">PER TAHUN</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>
                    <h2 class="panel-title">PER BULAN</h2>
                </header>
                <div class="panel-body">

                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                  					<th><center>No</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Keterangan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Nama File</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($satuttk as $val1)
                          <tr>
                            <td><center>{{$no1++}}</center></td>
                            <td>{{$val1->nama_sub_upload_progja}}</td>
                            <td>{{$val1->ket}}</td>
                            @if(empty($val1->nama_file))
                            <td><center><i class="fa fa-times text-danger"><i></center></td>
                            @else
                            <td><center><i class="fa fa-check text-success"><i></center></td>
                            @endif


                              <input type="hidden" name="id_file" value="{{$val1->id_file}}">
                            @if(empty($val1->nama_file))
                            <td><center><i class="fa fa-times text-danger"></i><center></td>
                            @else
                            <td><center>{{$val1->nama_file}}</center></td>
                            @endif
                            @if(!empty($val1->nama_file))
                            <td><center><a class="btn btn-success" href="{{asset('uploads/satker/'.$val1->nama_file)}}" download><i class="fa fa-download"></i></a></center></td>
                            @else
                            <td><center><a disabled class="btn btn-success" href="{{asset('uploads/satker/'.$val1->nama_file)}}" download><i class="fa fa-download"></i></a></center></td>
                            @endif
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="menu1" class="tab-pane fade">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>
                    <h2 class="panel-title">PER TW/SEMESTER</h2>
                </header>
                <div class="panel-body">
                    <br>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Keterangan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Nama File</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($duattk as $val1)
                        <tr>
                          <td><center>{{$no2++}}</center></td>
                          <td>{{$val1->nama_sub_upload_progja}}</td>
                          <td>{{$val1->ket}}</td>
                          @if(empty($val1->nama_file))
                          <td><center><i class="fa fa-times text-danger"><i></center></td>
                          @else
                          <td><center><i class="fa fa-check text-success"><i></center></td>
                          @endif


                            <input type="hidden" name="id_file" value="{{$val1->id_file}}">
                          @if(empty($val1->nama_file))
                          <td><center><i class="fa fa-times text-danger"></i><center></td>
                          @else
                          <td><center>{{$val1->nama_file}}</center></td>
                          @endif
                          @if(!empty($val1->nama_file))
                          <td><center><a class="btn btn-success" href="{{asset('uploads/satker/'.$val1->nama_file)}}" download><i class="fa fa-download"></i></a></center></td>
                          @else
                          <td><center><a disabled class="btn btn-success" href="{{asset('uploads/satker/'.$val1->nama_file)}}" download><i class="fa fa-download"></i></a></center></td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>
                    <h2 class="panel-title">PER TAHUN</h2>
                </header>
                <div class="panel-body">
                    <br>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Keterangan</center></th>
                            <th><center>Status</center></th>
                            <th><center>Nama File</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tigattk as $val1)
                        <tr>
                          <td><center>{{$no3++}}</center></td>
                          <td>{{$val1->nama_sub_upload_progja}}</td>
                          <td>{{$val1->ket}}</td>
                          @if(empty($val1->nama_file))
                          <td><center><i class="fa fa-times text-danger"><i></center></td>
                          @else
                          <td><center><i class="fa fa-check text-success"><i></center></td>
                          @endif


                            <input type="hidden" name="id_file" value="{{$val1->id_file}}">
                          @if(empty($val1->nama_file))
                          <td><center><i class="fa fa-times text-danger"></i><center></td>
                          @else
                          <td><center>{{$val1->nama_file}}</center></td>
                          @endif
                          @if(!empty($val1->nama_file))
                          <td><center><a class="btn btn-success" href="{{asset('uploads/satker/'.$val1->nama_file)}}" download><i class="fa fa-download"></i></a></center></td>
                          @else
                          <td><center><a disabled class="btn btn-success" href="{{asset('uploads/satker/'.$val1->nama_file)}}" download><i class="fa fa-download"></i></a></center></td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</section>

<script type="text/javascript">
    $(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('getApbn') }}",
            columns: [
                {data: 'row', name: 'row'},
                {data: 'tanggal_rencanaz', name: 'tanggal_rencana', orderable: false, searchable: true},
                {data: 'id_program', name: 'id_program'},
                {data: 'id_program', name: 'program'},
                {data: 'keluaran', name: 'keluaran'},
                {data: 'detail_kegiatan', name: 'detail_kegiatan'},
                {data: 'row', name: 'row'},
                {
                    data: 'action', name: 'action', orderable: false, searchable: false
                }]
        });
    });
</script>

@include('footer_admin')

@extends('layout.app')

@section('title','form')

@section('content')
<br>


<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, Selamat Datang</h4>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Murid Kelas X</h4>
                        </div>
                        
                        <div class="card-body">
                          <br><br>
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Nisn</th>
                                            <th>Gender</th>
                                            <th>Kelas</th>
                                            <th>Email</th>
                                            <th>Detail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach ($murid as $item)
                                        <tr>
                                            <td><img class="rounded-circle" width="35" src="../../images/profile/kosong.png" alt=""></td>
                                            <td>{{ $item->id }}</td> 
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->nisn }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td><a href="javascript:void(0);"><strong>{{ $item->kelas->name }}</strong></a></td>
                                            <td>{{ $item->email }}</td>
                                            <td><a href="/dashboard/detailmurid/{{ $item->id }}"><div class="badge badge-primary">detail</div></a></td>
                                            <td>
                                                <span>
                                                    <a href="/dashboard/{{ $item->id }}/editmurid" ><button type="button" class="ml-3 mb-1 btn btn-warning shadow btn-xs sharp mr-1">   <i class="mdi mdi-border-color"></i> </button></a>
                                                    
                                                    <form action="/dashboard/hapusmurid/{{ $item->id }}" method="POST" onsubmit="return confirm('yakin hapus?')">
                                                     @csrf
                                                     @method('DELETE')
                                                        <button type="submit" class="ml-3 btn btn-danger shadow btn-xs sharp">  <i class="fa fa-trash"></i>  </button>
                                                      </form>
                                                </span>	
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
@endsection
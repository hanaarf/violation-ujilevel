@extends('layout.app')

@section('title','form')

@section('content')
<br>
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
        <strong>{{ $message }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
  @endif
  @if ($message = Session::get('hapus'))
  <div class="alert alert-primary alert-dismissible fade show">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
    <strong>{{ $message }}
    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
</div>
  @endif

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
                            <h4 class="card-title">Semua Murid</h4>
                        </div>
                        
                        <div class="card-body">
                            <a href="/dashboard/form-murid">
                            <button type="button" class="btn btn-rounded btn-outline-primary">+ Add</button></a>
                            <button type="button" class="btn btn-rounded btn-outline-danger">Data removed</button><br><br>
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
                                            <th>wali kelas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach ($murid as $item)
                                        <tr>
                                            <td><img class="rounded-circle" width="35" src="../images/profile/kosong.png" alt=""></td>
                                            <td>{{ $item->id }}</td> 
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->nisn }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td><a href="javascript:void(0);"><strong>{{ $item->kelas->name }}</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>{{ $item->kelas->guru->name }}</strong></a></td>
                                            <td>
                                                <a href="/dashboard/{{ $item->id }}/restoremurid"><button type="button" class="mb-2 badge badge-success">   restore data </button></a>
            
                                                <form action="/dashboard/forcedeletemurid/{{ $item->id }}" method="POST" onsubmit="return confirm('yakin hapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                       <button type="submit" class="badge badge-danger"> Force delete </button>
                                                </form>
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
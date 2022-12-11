@extends('layout.app')

@section('title','form')

@section('content')
<br><br>

<div class="container-fluid">
    <div class="form-head mb-5">
        <h3 class="font-w600 mb-0">Detail Murid</h3>
    </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xl-12 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                <div class="btn sharp tp-btn" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <svg width="25" height="24" viewbox="0 0 25 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0049 13C12.5572 13 13.0049 12.5523 13.0049 12C13.0049 11.4477 12.5572 11 12.0049 11C11.4526 11 11.0049 11.4477 11.0049 12C11.0049 12.5523 11.4526 13 12.0049 13Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                        <path
                                            d="M12.0049 6C12.5572 6 13.0049 5.55228 13.0049 5C13.0049 4.44772 12.5572 4 12.0049 4C11.4526 4 11.0049 4.44772 11.0049 5C11.0049 5.55228 11.4526 6 12.0049 6Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                        <path
                                            d="M12.0049 20C12.5572 20 13.0049 19.5523 13.0049 19C13.0049 18.4477 12.5572 18 12.0049 18C11.4526 18 11.0049 18.4477 11.0049 19C11.0049 19.5523 11.4526 20 12.0049 20Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="my-profile">
                                    <img src="../../images/profile/kosong.png" alt="" class="rounded">
                                    <a href="javascript:void(0);"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div>
                                <h4 class="mt-3 font-w600 text-black mb-0 name-text">{{ $murid->name }}</h4>
                                <span>{{ $murid->email }}</span>
                            </div>
                            <ul class="portofolio-social">
                                <li><a href="javascript:void(0);"><i class="fa fa-phone"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            </ul>

                            <div class="profile-personal-info">
                                <br><br>
                                <h4 class="text-primary mb-4">Data diri :</h4>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500">Name <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $murid->name }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500">Email <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{ $murid->email }}</a></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500">Password <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{ $murid->pw }}</a></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500">Tgl lahir <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{ $murid->tgl_lahir }}</a></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500">Telp <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $murid->telp }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500">Alamat <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $murid->alamat }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500"> kelas <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $murid->kelas->name }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500"> Wali kelas <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $murid->kelas->guru->name }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h6 class="f-w-500"> Total point <span class="pull-right">:</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $murid->point }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kasus</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>Murid</strong></th>
                                    <th><strong>Pelanggaran</strong></th>
                                    <th><strong>point</strong></th>
                                    {{-- <th><strong>wali kelas</strong></th> --}}
                                    <th><strong>Tanggal</strong></th>
                                    <th></th>
                                </tr>
                            </thead>|
                            @foreach( $langgar as $item )
                            <tbody>
                                <tr>
                                    <td><strong>{{$loop-> iteration}}</strong></td>
                                    <td>{{ $item->murid->name }}</td>
                                    <td>{{ $item->pelanggaran->name }}</td>
                                    <td>{{ $item->pelanggaran->point }}</td>
                                    {{-- <td><span class="badge light badge-success">{{ $item->kelas->guru_id }}</span></td> --}}
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/dashboard/{{ $item->id }}/editviolation">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
        
                            </tbody>
        
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection

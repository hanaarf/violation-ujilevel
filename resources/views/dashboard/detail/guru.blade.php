@extends('layout.app')

@section('title','form')

@section('content')
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
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="../../images/profile/kosong.png" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ $guru->name }}</h4>
                                <p>{{ $guru->mapel->name }}</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h5 class="text-muted mb-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="670e09010827021f060a170b024904080a">{{ $guru->email }}</a></h5>
                                <p>pw : {{ $guru->pw }}</p>
                            </div>
                            <div class="dropdown ml-auto">
                                <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="m-b-0">{{ $guru->tgl_lahir }}</h3><span>Tanggal Lahir</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1 mr-1">Follow</a> 
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1" data-toggle="modal" data-target="#sendMessageModal">Send Message</a>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="sendMessageModal">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Send Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="comment-form">
                                                    <div class="row"> 
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="text-black font-w600">Name <span class="required">*</span></label>
                                                                <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="text-black font-w600">Email <span class="required">*</span></label>
                                                                <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="text-black font-w600">Comment</label>
                                                                <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-0">
                                                                <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
             
              
            </div>
        </div>



        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Tentang</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-posts" class="tab-pane fade active show">
                                    <div class="my-post-content pt-3">
                                        <div class="post-input">
                                           
                                            <!-- Modal -->
                                            <div class="modal fade" id="linkModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Social Links</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <a class="btn-social facebook" href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                                            <a class="btn-social google-plus" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                                                            <a class="btn-social linkedin" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
                                                            <a class="btn-social instagram" href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                                            <a class="btn-social twitter" href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                            <a class="btn-social youtube" href="javascript:void(0)"><i class="fa fa-youtube"></i></a>
                                                            <a class="btn-social whatsapp" href="javascript:void(0)"><i class="fa fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="images/profile/8.jpg" alt="" class="img-fluid w-100">
                                            <h4 class="text-primary">Tentang {{ $guru->name }}</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolores magni quidem sint ipsum temporibus rerum, sequi deserunt officia sapiente!</p>
                                            
                                                <div class="profile-personal-info">
                                                   <br><br> <h4 class="text-primary mb-4">Informasi lengkap :</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ $guru->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{ $guru->email }}</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Password <span class="pull-right">:</span>
                                                            </h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9ccd1c8c4d9c5cce9ccd1c8c4d9c5ccc587cac6c4">{{ $guru->pw }}</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Mengajar <span class="pull-right">:</span></h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ $guru->mapel->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Wali dr kelas <span class="pull-right">:</span></h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span> @foreach ($guru->kelas as $kelas)
                                                            {{ $kelas->name}}
                                                            @endforeach</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Telp <span class="pull-right">:</span>
                                                            </h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ $guru->telp }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h6 class="f-w-500">Alamat <span class="pull-right">:</span></h6>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{ $guru->alamat }}</span>
                                                        </div>
                                                    </div>
                                                </div>

<br>
                                            <button class="btn btn-primary mr-2"><span class="mr-2"><i class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#replyModal"><span class="mr-2"><i class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="replyModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Post Reply</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <textarea class="form-control" rows="4">Message</textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
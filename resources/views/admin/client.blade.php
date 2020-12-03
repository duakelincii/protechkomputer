@extends('layout.admin_layout')
@section('main_content')
@section('title','Clients')
@section('body','hold-transition skin-blue sidebar-mini')
<div class="wrapper">
    <x-admin_header />
    <x-admin_sidebar />

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
<!-- Main content -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Client</h3>
            <a href="{{url('admin/new-client')}}"> <button type="button" class="btn btn-primary" style="float:right">Add Client</button> </a>
            @if(Session::has('successadd'))
            <br><br>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
                <span>{{session('successadd')}}</span>
            </div>                        
            @elseif(Session::has('successupdate'))
            <br><br>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
                <span>{{session('successupdate')}}</span>
              </div> 
              @elseif(Session::has('successupdateimage'))
              <br><br>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="fa fa-check"></i>
                  <span>{{session('successupdateimage')}}</span>
                </div>  
                @elseif(Session::has('successdelete'))
                <br><br>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-check"></i>
                    <span>{{session('successdelete')}}</span>
                  </div>        
            @endif
        </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Client Name</th>
                <th>Client URL</th>
                <th>Client Image</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($client as $cli)
              <tr>
                <td>{{$cli['client_name']}}</td>
                <td>{{$cli['client_url']}}</td>
              <td align="center"><img src="{{asset('images')}}/{{$cli->client_logo}}" alt="" width="100" height="100"></td>
              <td>                      
                <a href="{{url('admin/edit-client')}}/{{$cli->id}}" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit</a>
                <a href="{{url('admin/edit-client-image')}}/{{$cli->id}}" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit Image</a>
                <a onclick="deleteConfirm('{{url('admin/delete-client')}}/{{$cli->id}}')" href="#!" class="btn btn-small text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
              </td>
              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Client Name</th>
                <th>Client URL</th>
                <th>Client Image</th>
                <th>Actions</th>
              </tr>
              </tfoot>
            </table>
          </div>
                      <!--Modal Delete -->
                      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="productdeletemodal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="productdeletemodal">Are you sure you would like to delete this product?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">Deleted data cannot be recovered.</div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                              <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END OF MODAL-->
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-admin_footer />
</div>
<!-- ./wrapper -->

@endsection
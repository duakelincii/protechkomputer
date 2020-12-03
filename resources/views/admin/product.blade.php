@extends('layout.admin_layout')
@section('main_content')
@section('title','Products')
@section('body','hold-transition skin-blue sidebar-mini')
<div class="wrapper">
    <x-admin_header />
    <x-admin_sidebar />

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Product</h3>
            <a href="{{url('admin/new-product')}}"> <button type="button" class="btn btn-primary" style="float:right">Add Product</button> </a>
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
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Product Description</th>
                <th>Product Image</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                              @foreach ($data as $dat)

              <tr>
<td width='120'>{{$dat->product_name}}</td>
                <td>{{$dat->category_name}}</td>
                <td>{!!$dat->product_description!!}</td>
              <td align="center"><img src="{{asset('images')}}/{{$dat->product_image}}" alt="" width="250" height="125"></td>
              <td width='175'>                      
                <a href="{{url('admin/edit-product')}}/{{$dat->id}}" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit</a>
                <a href="{{url('admin/edit-product-image')}}/{{$dat->id}}" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit Image</a>
                <a onclick="deleteConfirm('{{url('admin/delete-product')}}/{{$dat->id}}')" href="#!" class="btn btn-small text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
              </td>
              </tr>
                            @endforeach

              </tbody>
              <tfoot>
              <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Product Description</th>
                <th>Product Image</th>
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
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    <x-admin_footer />
</div>
<!-- ./wrapper -->

@endsection


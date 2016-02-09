        @extends('advisor.adv_master')
        @section('body_template')  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Dash
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">       

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Create </h3>
                </div><!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad col-md-6">
                        {!! Form::open(array('url' => 'category')) !!}
                                <div class="form-group">
                                    <label>First Name</label>
                                    {!! Form::text('fname', '' ,['class' => 'form-control', 'placeholder' => 'Category name']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    {!! Form::text('lname', '' ,['class' => 'form-control', 'placeholder' => 'Category name']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    {!! Form::text('email', '' ,['class' => 'form-control', 'placeholder' => 'Category name']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    {!! Form::password('password', '' ,['class' => 'form-control', 'placeholder' => 'Category name']) !!}
                                </div>
                                    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                            
                        {!! Form::close() !!}
                      </div>
                    </div><!-- /.col -->
               
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @endsection
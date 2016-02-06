        @extends('admin.master')
        @section('body_template')
        <section class="content">
			<header class="main-header clearfix">
				<h1 class="main-header__title">
					<i class="icon pe-7s-home"></i>
					Dashboard <small>Statistics and more</small>
				</h1>
				<ul class="main-header__breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Dashboard</a></li>
					<li class="active"><a href="#">Sample Pages</a></li>
				</ul>
				<div class="main-header__date">
					<i class="icon pe-7s-date"></i>
					<span>December 27, 2013</span>
					<i class="pe-7s-angle-down-circle"></i>
				</div>
			</header>
			
			<div class="row">
				
				<div class="col-md-12">
					<article class="widget">
    					<header class="widget__header">
    						<h3 class="widget__title">Add Category</h3>
    						<div class="widget__config">
    							<a href="#"><i class="pe-7f-refresh"></i></a>
    							<a href="#"><i class="pe-7s-close"></i></a>
    						</div>
    					</header>
                        
    					<div class="widget__content">
                            {!! Form::model($category, array('route' =>array('category.update',$category->id), 'method' => 'PUT')) !!}
                                {!! Form::text('name', $category->name ,['class' => 'input-text', 'placeholder' => 'Category name']) !!}
                                    <div class="dropdown">
                                    {!! Form::select('status',array(
                                        'Active' => 'active',
                                        'Inactive' => 'inactive'
                                    ), 'Active',['class' => 'dropdown-select']) !!}
                                    </div>
                                    {!! Form::submit('Update', ['class' => 'btn btn-light pull-right']) !!}
                            
                            {!! Form::close() !!}
                            <div class="clearfix"></div>
    					</div>
    
    				</article>
				</div> <!-- /col -->

			</div> <!-- /row -->

		</section>	 <!-- /content -->
        @endsection
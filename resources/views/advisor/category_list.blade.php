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
    						<h3 class="widget__title">List Of Category</h3>
    						<div class="widget__config">
    							<a href="#"><i class="pe-7f-refresh"></i></a>
    							<a href="#"><i class="pe-7s-close"></i></a>
    						</div>
    					</header>

    					<div class="widget__content">
    						<a href="{{ url('/category/create') }}" class="btn btn-skyblue">Add Category</a>
                            <table class="table">
    							<thead>
    								<tr>
    									<th>S.N</th>
    									<th>Name</th>
    									<th>Status</th>
                                        <th>Action</th>
    								</tr>
    							</thead>
    							<tbody>
                                    <?php $counter = 1;?>
                                    @foreach($categories as $category)
    								<tr>
    									<td> {{ $counter++ }}</td>
    									<td>{{ $category->name }}</td>
    									<td>{{ $category->status }}</td>
                                        <td>
                                            <a class="btn btn-green btn-xs" href="{{ route('category.edit', $category->id) }}">Edit</a> | 
                                            {!! Form::open(array('url' => 'category/' . $category->id)) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::submit('Delete', array('class' => 'btn btn-red btn-xs')) !!}
                                            {!! Form::close() !!}
                                            
                                        </td>
    								</tr>
    							    @endforeach 
    							</tbody>
    						</table>
    
    					</div>
                    </article><!-- /widget -->
				</div> <!-- /column -->

			</div> <!-- /row -->

		</section>	 <!-- /content -->
        @endsection
		<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-fixed">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
                            <a href="#" class="media-left"><img src="{{setting('admin', 'logo' , 'img')}}" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">{{setting('admin' , 'sitename')}}</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="{{route('admin.home')}}"><i class="icon-home4"></i> <span>الرئيسيه</span></a></li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Destination</span></a>
									<ul>
										<li class="{{ active('destination') }}" ><a href="{{route('admin.destination.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('destination' , 'create') }}"><a href="{{route('admin.destination.create')}}"><i class="icon-stack"></i> Create</a></li>

									</ul>
                                </li>
                                <li>
									<a href="#"><i class="icon-stack"></i> <span>Sightseeing</span></a>
									<ul>
										<li class="{{ active('sightseeing') }}" ><a href="{{route('admin.sightseeing.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('sightseeing' , 'create') }}"><a href="{{route('admin.sightseeing.create')}}"><i class="icon-stack"></i> Create</a></li>
									</ul>
                                </li>
                                    <li>
									<a href="#"><i class="icon-stack"></i> <span>Hotel</span></a>
									<ul>
										<li class="{{ active('hotel') }}" ><a href="{{route('admin.hotel.index')}}"><i class="icon-stack"></i> All</a></li>
                                        <li  class="{{ active('hotel' , 'create') }}"><a href="{{route('admin.hotel.create')}}"><i class="icon-stack"></i> Create</a></li>
									</ul>
								</li>
								<!-- /main -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->

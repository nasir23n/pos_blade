<div class="aside" id="aside">
    <!-- .aside_top is fixed to top of the sidebar -->
    <a href="{{ route('admin.dashboard') }}" class="aside_top"> ADMIN PANEL </a>

    <div class="aside_fixed_part">
        <div class="aside_profile">
            <div class="profile_image">
                <img src="{{ asset('backend/image/logo.jpg') }}" alt="U" />
            </div>
            <div class="info">
                <h4 class="name">{{ auth()->user()->name }}</h4>
                <p>{{ auth()->user()->email }}</p>
            </div>
        </div>
        <ul class="aside_links">
            <li>
                <a class="{{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="aside_icon fa fa-tachometer-alt"></i>
                    Deshboard
                </a>
            </li>
            <li>
                <a class="{{ Route::is('admin.supplier*') ? 'active' : '' }}" href="{{ route('admin.supplier.index') }}">
                    <i class="aside_icon fa fa-users"></i>
                    Suppliers
                </a>
            </li>
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn {{ (Route::is('admin.category.index') || Route::is('admin.product*') || Route::is('admin.brand*') || Route::is('admin.unit.index')) ? 'active' : '' }}">
                    <i class="aside_icon fa fa-cubes"></i>
                    Products
                </a>
                <ul>
                    <li><a class="{{ Route::is('admin.product.index') ? 'active' : '' }}" href="{{ route('admin.product.index') }}">Product List</a></li>
                    <li><a class="{{ Route::is('admin.product.create') ? 'active' : '' }}" href="{{ route('admin.product.create') }}">Product Create</a></li>
                    <li><a class="{{ Route::is('admin.category.index') ? 'active' : '' }}" href="{{ route('admin.category.index') }}">Category</a></li>
                    <li><a class="{{ Route::is('admin.unit.index') ? 'active' : '' }}" href="{{ route('admin.unit.index') }}">Units</a></li>
                    <li><a class="{{ Route::is('admin.brand*') ? 'active' : '' }}" href="{{ route('admin.brand.index') }}">Brands</a></li>
                </ul>
            </li>
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn {{ (Route::is('admin.purchase*')) ? 'active' : '' }}">
                    <i class="aside_icon fas fa-shapes"></i>
                    Purchase
                </a>
                <ul>
                    <li><a class="{{ Route::is('admin.purchase.index') ? 'active' : '' }}" href="{{ route('admin.purchase.index') }}">Purchase List</a></li>
                    <li><a class="{{ Route::is('admin.purchase.create') ? 'active' : '' }}" href="{{ route('admin.purchase.create') }}">Purchase Create</a></li>
                </ul>
            </li>
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn {{ (Route::is('admin.payment_method*') || Route::is('admin.payment_status*')) ? 'active' : '' }}">
                    <i class="aside_icon fa fa-cogs"></i>
                    Settings
                </a>
                <ul>
                    <li><a class="{{ Route::is('admin.payment_method.index') ? 'active' : '' }}" href="{{ route('admin.payment_method.index') }}">Payment Method</a></li>
                    <li><a class="{{ Route::is('admin.payment_status.index') ? 'active' : '' }}" href="{{ route('admin.payment_status.index') }}">Payment Status</a></li>
                </ul>
            </li>
            
            {{-- <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn {{ Route::is('admin.brand*') ? 'active' : '' }}">
                    <i class="aside_icon fab fa-canadian-maple-leaf"></i>
                    Brands
                </a>
                <ul>
                    <li><a class="{{ Route::is('admin.brand.index') ? 'active' : '' }}" href="{{ route('admin.brand.index') }}">All Brands</a></li>
                    <li><a class="{{ Route::is('admin.brand.create') ? 'active' : '' }}" href="{{ route('admin.brand.create') }}">Create Brands</a></li>
                </ul>
            </li> --}}
            <li><a href="{{ route('admin.font_awesome') }}" class="{{ Route::is('admin.font_awesome') ? 'active' : '' }}"><i class="aside_icon far fa-flag"></i> Font Awesome</a></li>
            <li><a href="{{ route('admin.bootstrap_icon') }}" class="{{ Route::is('admin.bootstrap_icon') ? 'active' : '' }}"><i class="fab aside_icon fa-bootstrap"></i> Bootstrap Icons</a></li>
            {{-- 
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn">
                    <i class="aside_icon fab fa-canadian-maple-leaf"></i>
                    Catagory
                </a>
                <ul>
                    <li><a href="#">Add Catagory</a></li>
                    <li><a href="#">All Catagory</a></li>
                    <li>
                        <a href="#">
                            Trashed Catagory
                            <span class="badges danger ml_auto" id="aside_trashed">
                                1
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn">
                    <i class="far aside_icon fa-newspaper"></i>
                    News
                </a>
                <ul>
                    <li><a href="#">Add News</a></li>
                    <li><a href="#">All News</a></li>
                    <li><a href="#">Drafed News</a></li>
                </ul>
            </li>
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn">
                    <i class="fas aside_icon fa-images"></i>
                    Media
                </a>
                <ul>
                    <li><a href="#">Add Media Item</a></li>
                    <li><a href="#">All Media Item</a></li>
                    <li><a href="#">Trashed Media Item</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">More Class</a></li> --}}
        </ul>
    </div>
</div>
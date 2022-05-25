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
            <li class="aside_drop">
                <a href="javascript:void(0)" class="aside_drop_btn {{ Route::is('admin.brands*') ? 'active' : '' }}">
                    <i class="aside_icon fab fa-canadian-maple-leaf"></i>
                    Brands
                </a>
                <ul>
                    <li><a class="{{ Route::is('admin.brands.index') ? 'active' : '' }}" href="{{ route('admin.brands.index') }}">All Brands</a></li>
                    <li><a class="{{ Route::is('admin.brands.create') ? 'active' : '' }}" href="{{ route('admin.brands.create') }}">Create Brands</a></li>
                </ul>
            </li>
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
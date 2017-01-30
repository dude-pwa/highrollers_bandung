<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
            </li>
            <li>
                <a href="{{ url('admin/categories') }}" class="active"><i class="fa fa-folder fa-fw"></i> Categories</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Products<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/product_models') }}">Product Model</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/products') }}">Product</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="#">Product List <span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-third-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level Item</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </li>
        </ul>

    </div>
</div>
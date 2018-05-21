<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li @if(Route::currentRouteName() == 'admin.dashboard') class="treeview menu-open" @endif><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

            <li @if(in_array(Route::currentRouteName(),
                [
                    'point-categories.index',
                    'point-categories.create',
                    'point-categories.edit',
                    'point-categories.show',
                    'points.index',
                    'points.create',
                    'points.edit',
                    'points.show',
                    'extra-charges.index',
                    'extra-charges.create',
                    'extra-charges.edit',
                    'extra-charges.show',
                    'payment-method-types.index',
                    'payment-method-types.create',
                    'payment-method-types.edit',
                    'payment-method-types.show',
                    'payment-methods.index',
                    'payment-methods.create',
                    'payment-methods.edit',
                    'payment-methods.show',
                    'cartypes.index',
                    'cartypes.create',
                    'cartypes.edit',
                    'cartypes.show',
                    'cars.index',
                    'cars.create',
                    'cars.edit',
                    'cars.show',
                    'currencies.index',
                    'currencies.create',
                    'currencies.edit',
                    'currencies.show',
                    'routes.index',
                    'routes.create',
                    'routes.edit',
                    'routes.show',
                    'countries.index',
                    'countries.create',
                    'countries.edit',
                    'countries.show',
                    'partners.index',
                    'partners.edit',
                    'partners.create',
                    'partners.show'

                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-taxi"></i> <span>Tb</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'point-categories.index',
                        'point-categories.create',
                        'point-categories.edit',
                        'point-categories.show',
                        'points.index',
                        'points.create',
                        'points.edit',
                        'points.show',
                        'extra-charges.index',
                        'extra-charges.create',
                        'extra-charges.edit',
                        'extra-charges.show',
                        'payment-method-types.index',
                        'payment-method-types.create',
                        'payment-method-types.edit',
                        'payment-method-types.show',
                        'payment-methods.index',
                        'payment-methods.create',
                        'payment-methods.edit',
                        'payment-methods.show',
                        'cartypes.index',
                        'cartypes.create',
                        'cartypes.edit',
                        'cartypes.show',
                        'driver.index',
                        'driver.create',
                        'driver.edit',
                        'cars.index',
                        'cars.create',
                        'cars.edit',
                        'cars.show',
                        'currencies.index',
                        'currencies.create',
                        'currencies.edit',
                        'currencies.show',
                        'routes.index',
                        'routes.create',
                        'routes.edit',
                        'routes.show',
                        'countries.index',
                        'countries.create',
                        'countries.edit',
                        'countries.show',
                        'partners.index',
                        'partners.edit',
                        'partners.create',
                        'partners.show'
                    ]
                    )) style="display: block" @endif
                        class="treeview-menu">
                    <li
                        @if(in_array(Route::currentRouteName(),
                        [
                            'point-categories.index',
                            'point-categories.create',
                            'point-categories.edit',
                            'point-categories.show',

                        ]
                        )) class="active" @endif>
                        <a href="{{ route('point-categories.index') }}"><i class="fa fa-globe"></i>Point Categories</a>
                    </li>

                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'points.index',
                                'points.create',
                                'points.edit',
                                'points.show',

                            ]
                            )) class="active" @endif>
                        <a href="{{ route('points.index') }}"><i class="fa fa-map-marker"></i>Points</a>
                    </li>
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'routes.index',
                                'routes.create',
                                'routes.edit',
                                'routes.show',

                            ]
                            )) class="active" @endif>
                        <a href="{{ route('routes.index') }}"><i class="fa fa-road"></i>Routes</a>
                    </li>
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'extra-charges.index',
                                'extra-charges.create',
                                'extra-charges.edit',
                                'extra-charges.show',

                            ]
                            )) class="active" @endif>
                        <a href="{{ route('extra-charges.index') }}"><i class="fa fa-map-o"></i>Extra Charges</a>
                    </li>
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'payment-method-types.index',
                                'payment-method-types.create',
                                'payment-method-types.edit',
                                'payment-method-types.show'
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('payment-method-types.index') }}"><i class="fa fa-dollar"></i>Payment Method Types</a>
                    </li>
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'payment-methods.index',
                                'payment-methods.create',
                                'payment-methods.edit',
                                'payment-methods.show'
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('payment-methods.index') }}"><i class="fa fa-credit-card"></i>Payment Methods</a>
                    </li>
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'cartypes.index',
                                'cartypes.create',
                                'cartypes.edit',
                                'cartypes.show'
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('cartypes.index') }}"><i class="fa fa- fa-bus"></i>Cartypes</a>
                    </li>
                        @if(App\Helpers\Helper::isAdmin())
                            <li  @if(in_array(Route::currentRouteName(),
                                [
                                    'driver.index',
                                    'driver.create',
                                    'driver.edit'
                                ]
                                )) class="active" @endif>
                                <a href="{{ route('driver.index') }}">
                                    <i class="fa  fa-truck"></i> Driver
                                </a>
                            </li>
                        @endif
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'cars.index',
                                'cars.create',
                                'cars.edit',
                                'cars.show'
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('cars.index') }}"><i class="fa fa-car"></i>Cars</a>
                    </li>
                    <li
                        @if(in_array(Route::currentRouteName(),
                            [
                                'currencies.index',
                                'currencies.create',
                                'currencies.edit',
                                'currencies.show'
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('currencies.index') }}"><i class="fa fa-euro"></i>Currencies</a>
                    </li>

                    <li
                            @if(in_array(Route::currentRouteName(),
                                [
                                    'countries.index',
                                    'countries.create',
                                    'countries.edit',
                                    'countries.show'
                                ]
                                )) class="active" @endif>
                        <a href="{{ route('countries.index') }}"><i class=" fa fa-globe"></i>Countries</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                                [
                                    'partners.index',
                                    'partners.create',
                                    'partners.edit',
                                    'partners.show'
                                ]
                                )) class="active" @endif>
                        <a href="{{ route('partners.index') }}"><i class=" fa fa-mars"></i>Partners</a>
                    </li>
                </ul>
            </li>

            <li @if(in_array(Route::currentRouteName(),
                [
                    'admins.store',
                    'admins.index',
                    'admins.edit',
                    'admins.create',
                    'admins.update',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-address-book"></i> <span>Administrators</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'admins.store',
                        'admins.index',
                        'admins.edit',
                        'admins.create',
                        'admins.update',

                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'admins.index',
                            'admins.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('admins.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    @if(App\Helpers\Helper::isAdmin())
                        <li @if(Route::currentRouteName() == 'admins.create') class="active" @endif><a href="{{ route('admins.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>
                    @endif
                </ul>
            </li>
            <!--A-M-->
            <li @if(in_array(Route::currentRouteName(),
                [
                         'language.index',
                        'language.create',
                        'language.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-desktop"></i> <span>Website</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                         'language.index',
                         'language.create',
                         'language.edit',
                         'menu.index',
                         'menu.create',
                         'menu.edit',
                         'submenu.index',
                         'submenu.create',
                         'submenu.edit',
                         'category.index',
                         'category.create',
                         'category.edit',
                         'article.index',
                         'article.create',
                         'article.edit',
                         'contact-forms.index',
                         'contact-forms.create',
                         'contact-forms.show',
                         'contact-forms.edit',
                         'images.index',
                         'images.create',
                         'images.edit',

                    ]
                    )) style="display: block" @endif
                class="treeview-menu">
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'language.index',
                                'language.create',
                                'language.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('language.index') }}"><i class="fa fa-language"></i>Language</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'menu.index',
                                'menu.create',
                                'menu.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('menu.index') }}"><i class="fa fa-bars"></i>Menu</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'submenu.index',
                                'submenu.create',
                                'submenu.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('submenu.index') }}"><i class="fa fa-toggle-down"></i>Submenu</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'category.index',
                                'category.create',
                                'category.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('category.index') }}"><i class="fa fa-copyright"></i>Category</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'article.index',
                                'article.create',
                                'article.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('article.index') }}"><i class="fa fa-book"></i>Articles</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'images.index',
                                'images.create',
                                'images.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('images.index') }}"><i class="fa fa-image"></i>Images</a>
                    </li>
                    <li
                            @if(in_array(Route::currentRouteName(),
                            [
                                'contact-forms.index',
                                'contact-forms.create',
                                'contact-forms.show',
                                'contact-forms.edit',
                            ]
                            )) class="active" @endif>
                        <a href="{{ route('contact-forms.index') }}"><i class="fa fa-envelope"></i>Contact forms</a>
                    </li>


                </ul>
            </li>
            <!--End A-M-->
            <!-- coment
            <li  @if(in_array(Route::currentRouteName(),
                [
                    'language.index',
                    'language.create',
                    'language.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-language"></i> <span>Languages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'language.index',
                        'language.create',
                        'language.edit',
                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'language.index',
                            'language.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('language.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    <li @if(Route::currentRouteName() == 'language.create') class="active" @endif><a href="{{ route('language.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>

            <li  @if(in_array(Route::currentRouteName(),
                [
                    'menu.index',
                    'menu.create',
                    'menu.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-bars"></i> <span>Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'menu.index',
                        'menu.create',
                        'menu.edit',
                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'menu.index',
                            'menu.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('menu.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    <li @if(Route::currentRouteName() == 'menu.create') class="active" @endif><a href="{{ route('menu.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>

            <li @if(in_array(Route::currentRouteName(),
                [
                    'submenu.index',
                    'submenu.create',
                    'submenu.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-toggle-down"></i> <span>Submenu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'submenu.index',
                        'submenu.create',
                        'submenu.edit',
                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'submenu.index',
                            'submenu.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('submenu.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    <li @if(Route::currentRouteName() == 'submenu.create') class="active" @endif><a href="{{ route('submenu.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>

            <li @if(in_array(Route::currentRouteName(),
                [
                    'category.index',
                    'category.create',
                    'category.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-copyright"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'category.index',
                        'category.create',
                        'category.edit',
                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'category.index',
                            'category.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    <li @if(Route::currentRouteName() == 'category.create') class="active" @endif><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>

            <li @if(in_array(Route::currentRouteName(),
                [
                    'article.index',
                    'article.create',
                    'article.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-book"></i> <span>Articles</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'article.index',
                        'article.create',
                        'article.edit',
                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'article.index',
                            'article.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('article.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    <li @if(Route::currentRouteName() == 'article.create') class="active" @endif><a href="{{ route('article.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>



            <li @if(in_array(Route::currentRouteName(),
                [
                    'images.index',
                    'images.create',
                    'images.edit',
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-image "></i> <span>Images</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'images.index',
                        'images.create',
                        'images.edit',
                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(in_array(Route::currentRouteName(),
                        [
                            'images.index',
                            'images.edit',
                        ]
                        )) class="active" @endif>
                        <a href="{{ route('images.index') }}"><i class="fa fa-circle-o"></i> List</a>
                    </li>
                    <li @if(Route::currentRouteName() == 'images.create') class="active" @endif><a href="{{ route('images.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
                </ul>
            </li>

            <li @if(in_array(Route::currentRouteName(),
                [
                    'contact-forms.index',
                    'contact-forms.create',
                    'contact-forms.show',
                    'contact-forms.edit'
                ]
                )) class="treeview menu-open" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Contact forms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul @if(in_array(Route::currentRouteName(),
                    [
                        'contact-forms.index',
                        'contact-forms.create',
                        'contact-forms.show',
                        'contact-forms.edit'

                    ]
                    )) style="display: block" @endif
                    class="treeview-menu">
                    <li @if(Route::currentRouteName() == 'contact-forms.index') class="active" @endif>
                        <a href="{{route('contact-forms.index')}}"><i class="fa fa-circle-o"></i>List</a>
                    </li>

                    <li @if(Route::currentRouteName() == 'contact-forms.create') class="active" @endif>
                        <a href="{{route('contact-forms.create')}}"><i class="fa fa-circle-o"></i>Create</a>
                    </li>
                </ul>
            </li>
-->

            <li @if(Route::currentRouteName() == 'setting.index') class="treeview menu-open"@else class="treeview-single" @endif>
                <a href="{{ route('setting.index') }}">
                    <i class="fa fa-gears"></i> <span>Settings</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
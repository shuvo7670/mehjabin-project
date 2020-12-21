<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="/dashboard">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('backend.slider.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Slider</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('backend.category.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Category</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('backend.product.list')}}">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Product</span>
            </a>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('backend.setting.header.list')}}"><i class="icon fa fa-circle-o"></i>Header</a></li>
            <li><a class="treeview-item" href="{{route('backend.setting.footer.list')}}"><i class="icon fa fa-circle-o"></i>Footer</a></li>
          </ul>
        </li>        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('backend.pages.about.list')}}"><i class="icon fa fa-circle-o"></i>About Us</a></li>            
            <li><a class="treeview-item" href="{{route('backend.pages.contact.list')}}"><i class="icon fa fa-circle-o"></i>Contact Us</a></li>            
            <li><a class="treeview-item" href="{{route('backend.pages.policy.list')}}"><i class="icon fa fa-circle-o"></i>Return Policy</a></li>
            <li><a class="treeview-item" href="{{route('backend.pages.termsofcondition.list')}}"><i class="icon fa fa-circle-o"></i>Terms & Condition</a></li>
           
          </ul>
        </li>
      </ul>
    </aside>

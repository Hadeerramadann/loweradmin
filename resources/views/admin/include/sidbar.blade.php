<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/adminhome') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
               <i class="menu-arrow"></i>
              <span class="menu-title">UI Elements</span>
              <i class="icon-layout menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <!-- ********* -->
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/custdet') }}" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">البيانات الاساسيه</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">الاستشارات القانونيه</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">اجنده الجلسات</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">المهام اليوميه</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">توكيلات العملاء</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">القضايا</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">الاعمال الاداريه/التخليصات</span>

            </a>
            
          </li>
          
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">الوثائق</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">الحسابات</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">التقارير</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">دليل التليفونات والعناوين</span>

            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false" >
              <i class="menu-arrow"></i>
              <span class="menu-title">العاملين بالمكتب</span>

            </a>
            
          </li>

          <!-- *********** -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-arrow"></i>

              <span class="menu-title">Charts</span>
              <i class="icon-bar-graph menu-icon"></i>

            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-arrow"></i>

              <span class="menu-title">Tables</span>
              <i class="icon-grid-2 menu-icon"></i>

            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
               <i class="menu-arrow"></i>
             
               <span class="menu-title">Icons</span>
              <i class="icon-contract menu-icon"></i>

            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-arrow"></i>

              <span class="menu-title">User Pages</span>
              <i class="icon-head menu-icon"></i>

            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="menu-arrow"></i>

              <span class="menu-title">Error pages</span>
              <i class="icon-ban menu-icon"></i>

            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/') }}/pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
        
        </ul>
      </nav>
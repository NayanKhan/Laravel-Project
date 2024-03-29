<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>Codex <i>Hunter</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
  <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
  <ul class="br-sideleft-menu">
    <li class="br-menu-item">
      <a href="{{ route ('dasboard') }}" class="br-menu-link active">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Dashboard</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

   
   <!-- Branch Management Menu Start -->

   <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Education Department</label>

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Branch</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route ('branch.manage') }}" class="sub-link">Manage All Branch</a></li>
        <li class="sub-item"><a href="{{ route ('branch.create') }}" class="sub-link">Create New Branch</a></li>
      </ul>
    </li>

    <!-- Branch Management Menu Ends -->
    
    <!-- Course Management Menu Start -->

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Course</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route ('course.manage') }}" class="sub-link">Manage All Course</a></li>
        <li class="sub-item"><a href="{{ route ('course.create') }}" class="sub-link">Create New Course</a></li>
      </ul>
    </li>
  <!-- Course Management Menu Ends -->

    <!-- Course Management Menu Start -->

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Coupon</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route ('coupon.manage') }}" class="sub-link">Manage All Coupon</a></li>
        <li class="sub-item"><a href="{{ route ('coupon.create') }}" class="sub-link">Create New Coupon</a></li>
      </ul>
    </li>
  <!-- Course Management Menu Ends -->

  <!-- Course Management Menu Start -->

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Course Curriculum</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route ('curriculum.manage') }}" class="sub-link">Manage Course Curriculum</a></li>
        <li class="sub-item"><a href="{{ route ('curriculum.create') }}" class="sub-link">Create New Course Curriculum</a></li>
      </ul>
    </li>
  <!-- Course Management Menu Ends -->

  <!-- Batch Management Menu Start -->

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">All Batches</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route ('batch.manage') }}" class="sub-link">Addmission Going On</a></li>
        <li class="sub-item"><a href="" class="sub-link">All Batches</a></li>
        <li class="sub-item"><a href="{{ route ('batch.create') }}" class="sub-link">Add New Batches</a></li>
      </ul>
    </li>
  <!-- Batch Management Menu Ends -->

  <!-- Mentor Management Menu Start -->
   <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">HR. Department</label>

    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-contact tx-20"></i>
        <span class="menu-item-label">Mentor</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route ('mentor.manage') }}" class="sub-link">Manage All Mentor</a></li>
        <li class="sub-item"><a href="{{ route ('mentor.create') }}" class="sub-link">Create New Mentor</a></li>
      </ul>
    </li>
    <!-- Course Management Menu Ends -->

    
    
   
    
    
    
  

  <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

  <div class="info-list">
    <div class="info-list-item">
      <div>
        <p class="info-list-label">Memory Usage</p>
        <h5 class="info-list-amount">32.3%</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
        <p class="info-list-label">CPU Usage</p>
        <h5 class="info-list-amount">140.05</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
        <p class="info-list-label">Disk Usage</p>
        <h5 class="info-list-amount">82.02%</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
        <p class="info-list-label">Daily Traffic</p>
        <h5 class="info-list-amount">62,201</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
    </div><!-- info-list-item -->
  </div><!-- info-list -->

  <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->
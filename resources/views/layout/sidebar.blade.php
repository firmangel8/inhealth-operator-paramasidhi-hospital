<div class="sidebar" data-color="purple" data-background-color="white" data-image="">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
        <center> <img src="{{ URL::asset('assets/img/logo.jpg') }}" style="width:300px"/> </center>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ \Request::getRequestUri() == '/inhealth/' ? 'active' : '' }}">
            <a class="nav-link" href="/inhealth/">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ \Request::getRequestUri() == '/inhealth/checkCard/' ? 'active' : '' }}">
            <a class="nav-link" href="/inhealth/checkCard/">
              <i class="material-icons">person</i>
              <p>Cek Kartu</p>
            </a>
          </li>
          <li class="nav-item {{ \Request::getRequestUri() == '/inhealth/search-sjp/' ? 'active' : '' }}">
            <a class="nav-link" href="/inhealth/search-sjp/">
              <i class="material-icons">content_paste</i>
              <p>Riwayat SJP</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
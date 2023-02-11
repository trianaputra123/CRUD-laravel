<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()->is('pemesanan') ? 'active' : '' }}"><a href="/pemesanan"><i class="fa fa-wechat (alias)"></i> <span>Pemesanan</span></a></li>
        <li class="{{request()->is('Buah') ? 'active' : '' }}"><a href="/Buah"><i class="fa fa-wechat (alias)"></i> <span>Buah</span></a></li>
      
      </ul>
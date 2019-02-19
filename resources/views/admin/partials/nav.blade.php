<ul class="sidebar-menu" data-widget="tree">
  <li class="header">Navegación</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Home</span></a></li>
  <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Producto</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#">Ver productos</a></li>
      <li>
        <router-link to="/product-create"><i class="fa fa-pencil" ></i> Subir producto</router-link>
      </li>
    </ul>
  </li>
</ul>

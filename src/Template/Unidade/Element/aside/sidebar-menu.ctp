<ul class="sidebar-menu" data-widget="tree">
  <li class="header">PAINEL DE NAVEGAÇÃO</li>
  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span> GRÁFICO</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>CAMPANHA</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/unidade/campanhas/add'); ?>"><i class="fa fa-circle-o"></i> Registar</a></li>
      <li><a href="<?php echo $this->Url->build('/unidade/campanhas/index'); ?>"><i class="fa fa-circle-o"></i> Listar</a></li>
      
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-edit"></i> <span> DIAGNÓSTICO </span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/unidade/diagnosticos/add'); ?>"><i class="fa fa-circle-o"></i> Registar </a></li>
      <li><a href="<?php echo $this->Url->build('/unidade/diagnosticos/index'); ?>"><i class="fa fa-circle-o"></i> Listar </a></li>
      
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-edit"></i> <span> PACIENTE</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/dscm/pacientes/add'); ?>"><i class="fa fa-circle-o"></i> Registar </a></li>
      <li><a href="<?php echo $this->Url->build('/dscm/pacientes/index'); ?>"><i class="fa fa-circle-o"></i> Listar </a></li>
      
    </ul>
  </li>
  
  <li>
    <a href="<?php echo $this->Url->build('/pages/calendar'); ?>">
      <i class="fa fa-calendar"></i> <span>Calendar</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-red">3</small>
        <small class="label pull-right bg-blue">17</small>
      </span>
    </a>
  </li>
  <li>
    <a href="<?php echo $this->Url->build('/pages/mailbox/mailbox'); ?>">
      <i class="fa fa-envelope"></i> <span>Mailbox</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-yellow">12</small>
        <small class="label pull-right bg-green">16</small>
        <small class="label pull-right bg-red">5</small>
      </span>
    </a>
  </li>
  
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li>
</ul>
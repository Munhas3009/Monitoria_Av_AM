<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tratamento $tratamento
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tratamento
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($tratamento, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('contadormensal');
                echo $this->Form->control('unidade_id', ['options' => $unidades]);
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('paciente_id', ['options' => $pacientes]);
                echo $this->Form->control('diagnostico_id', ['options' => $diagnosticos]);
                echo $this->Form->control('tratam');
                echo $this->Form->control('obs');
                echo $this->Form->control('situacaovacinacao');
                echo $this->Form->control('situacaopaciente');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

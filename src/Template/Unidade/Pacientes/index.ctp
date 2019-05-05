<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pacientes

        <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('List'); ?></h3>

                    <div class="box-tools">
                        <form action="" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="keyword" default="$this->request->query('keyword')" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('area_trabalho') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('residencia') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('genero') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('idade') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('contacto') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pacientes as $paciente): ?>
                                <tr>
                                    <td><?= $this->Number->format($paciente->id) ?></td>
                                    <td><?= h($paciente->name) ?></td>
                                    <td><?= h($paciente->area_trabalho) ?></td>
                                    <td><?= h($paciente->residencia) ?></td>
                                    <td><?= h($paciente->genero) ?></td>
                                    <td><?= $this->Number->format($paciente->idade) ?></td>
                                    <td><?= $this->Number->format($paciente->contacto) ?></td>
                                    <td><?= h($paciente->created) ?></td>
                                    <td><?= h($paciente->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="paginator"> 
                        <ul class="pagination">

                        </ul>
                        <p><?=
                            $this->Paginator->counter(['format' => _('Page {{page}} of {{pages}}, '
                                        . 'showing {{current}} record(s) out of {{count}} total')])
                            ?>
                        </p>
                    </div>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
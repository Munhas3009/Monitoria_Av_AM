<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tratamentos

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
                                <th scope="col"><?= $this->Paginator->sort('contadormensal') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('unidade_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('diagnostico_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('tratam') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('obs') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('situacaovacinacao') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('situacaopaciente') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tratamentos as $tratamento): ?>
                                <tr>
                                    <td><?= $this->Number->format($tratamento->id) ?></td>
                                    <td><?= $this->Number->format($tratamento->contadormensal) ?></td>
                                    <td><?= $tratamento->has('unidade') ? $this->Html->link($tratamento->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $tratamento->unidade->id]) : '' ?></td>
                                    <td><?= $tratamento->has('user') ? $this->Html->link($tratamento->user->id, ['controller' => 'Users', 'action' => 'view', $tratamento->user->id]) : '' ?></td>
                                    <td><?= $tratamento->has('paciente') ? $this->Html->link($tratamento->paciente->name, ['controller' => 'Pacientes', 'action' => 'view', $tratamento->paciente->id]) : '' ?></td>
                                    <td><?= $tratamento->has('diagnostico') ? $this->Html->link($tratamento->diagnostico->name, ['controller' => 'Diagnosticos', 'action' => 'view', $tratamento->diagnostico->id]) : '' ?></td>
                                    <td><?= h($tratamento->tratam) ?></td>
                                    <td><?= h($tratamento->obs) ?></td>
                                    <td><?= h($tratamento->situacaovacinacao) ?></td>
                                    <td><?= h($tratamento->situacaopaciente) ?></td>
                                    <td><?= h($tratamento->created) ?></td>
                                    <td><?= h($tratamento->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $tratamento->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tratamento->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tratamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tratamento->id), 'class' => 'btn btn-danger btn-xs']) ?>
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

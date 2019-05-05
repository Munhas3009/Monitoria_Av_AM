<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Campanhas

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
                                <th scope="col"><?= $this->Paginator->sort('unidade_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('tipo_vacinacao') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('dose') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('unidade_sanitaria') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('brigada_movel') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('agente_comunitario_saude') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('intervalo_idade') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('mulhere_p_parto') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('comentarios') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($campanhas as $campanha): ?>
                                <tr>
                                    <td><?= $this->Number->format($campanha->id) ?></td>
                                    <td><?= $campanha->has('unidade') ? $this->Html->link($campanha->unidade->name, ['controller' => 'Unidades', 'action' => 'view', $campanha->unidade->id]) : '' ?></td>
                                    <td><?= $campanha->has('user') ? $this->Html->link($campanha->user->id, ['controller' => 'Users', 'action' => 'view', $campanha->user->id]) : '' ?></td>
                                    <td><?= h($campanha->tipo_vacinacao) ?></td>
                                    <td><?= $this->Number->format($campanha->dose) ?></td>
                                    <td><?= $this->Number->format($campanha->unidade_sanitaria) ?></td>
                                    <td><?= $this->Number->format($campanha->brigada_movel) ?></td>
                                    <td><?= $this->Number->format($campanha->agente_comunitario_saude) ?></td>
                                    <td><?= $this->Number->format($campanha->intervalo_idade) ?></td>
                                    <td><?= $this->Number->format($campanha->mulhere_p_parto) ?></td>
                                    <td><?= h($campanha->comentarios) ?></td>
                                    <td><?= h($campanha->created) ?></td>
                                    <td><?= h($campanha->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $campanha->id], ['class' => 'btn btn-info btn-xs']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campanha->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campanha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campanha->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
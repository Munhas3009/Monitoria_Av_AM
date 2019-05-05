
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt scope="row"><?= __('Name') ?></dt>
                        <dd><?= h($unidade->name) ?></dd>
                        <dt scope="row"><?= __('Slogan') ?></dt>
                        <dd><?= h($unidade->slogan) ?></dd>
                        <dt scope="row"><?= __('Nuit') ?></dt>
                        <dd><?= h($unidade->nuit) ?></dd>
                        <dt scope="row"><?= __('Email') ?></dt>
                        <dd><?= h($unidade->email) ?></dd>
                        <dt scope="row"><?= __('Category') ?></dt>
                        <dd><?= $unidade->has('category') ? $this->Html->link($unidade->category->name, ['controller' => 'Categories', 'action' => 'view', $unidade->category->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Distrito') ?></dt>
                        <dd><?= $unidade->has('distrito') ? $this->Html->link($unidade->distrito->name, ['controller' => 'Distritos', 'action' => 'view', $unidade->distrito->id]) : '' ?></dd>
                        <dt scope="row"><?= __('Id') ?></dt>
                        <dd><?= $this->Number->format($unidade->id) ?></dd>
                        <dt scope="row"><?= __('Numero Camas') ?></dt>
                        <dd><?= $this->Number->format($unidade->numero_camas) ?></dd>
                        <dt scope="row"><?= __('Data Fundacao') ?></dt>
                        <dd><?= h($unidade->data_fundacao) ?></dd>
                        <dt scope="row"><?= __('Created') ?></dt>
                        <dd><?= h($unidade->created) ?></dd>
                        <dt scope="row"><?= __('Modified') ?></dt>
                        <dd><?= h($unidade->modified) ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>

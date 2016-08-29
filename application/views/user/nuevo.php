    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?= form_open('article/create'); ?>
                    <div class="form-group">
                        <?= form_label('Ingrese nombre del post', 'post') ?>
                        <?= form_input('post', '', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Ingrese una breve descripción', 'descripcion') ?>
                        <?= form_input('descripcion', '', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= form_label('Ingrese el contenido del post', 'contenido') ?>
                        <?= form_textarea('contenido', '', ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?= form_submit('', 'Crear post', ['class'=>'btn btn-success btn-block']); ?>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>

    <hr>


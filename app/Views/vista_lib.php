<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<form action="<?= site_url('guardadatos')?>" method="POST">
    <div class="rendered-form">
        <div class="formbuilder-text form-group field-nombre">
            <label for="nombre" class="formbuilder-text-label">
                <div>Nombre Libro</div><span class="formbuilder-required">*</span></label>
            <input type="text" class="form-control" name="nombre" access="false" id="nombre" required="required" aria-required="true">
        </div>
        <div class="formbuilder-text form-group field-pag">
            <label for="pag" class="formbuilder-text-label">
                <div>Paginas</div><span class="formbuilder-required">*</span></label>
            <input type="text" class="form-control" name="paginas" access="false" id="pag" required="required" aria-required="true">
        </div>
        <div class="formbuilder-text form-group field-autor">
            <label for="autor" class="formbuilder-text-label">autor<span class="formbuilder-required">*</span></label>
            <input type="text" class="form-control" name="autor" access="false" id="autor" required="required" aria-required="true">
        </div>
    </div>

    <button type="submit">Insertar</button>
</form>
</html>
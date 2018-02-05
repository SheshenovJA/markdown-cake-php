<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Smart admin</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-skins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-rtl.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/demo.min.css">
    <?= $this->fetch('pageCss'); ?>
</head>

<?= $this->element('sidebar'); ?>

<?= $this->Flash->render() ?>
<?= $this->fetch('content'); ?>




<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>

<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

<script src="/admin/js/plugin/pace/pace.js"></script>
<script src="/admin/js/bootstrap/bootstrap.js"></script>
<!-- IMPORTANT: APP CONFIG -->
<script src="/admin/js/app.config.js"></script>
<script src="/admin/js/demo.min.js"></script>
<!-- MAIN APP JS FILE -->
<script src="/admin/js/app.js" > </script>
<!-- JQUERY MASKED INPUT -->
<script src="/admin/js/plugin/masked-input/jquery.maskedinput.js"></script>


<!-- JQUERY VALIDATE -->
<script src="/admin/js/plugin/jquery-validate/jquery.validate.js"></script>

<?= $this->fetch('pageScript'); ?>
</html>




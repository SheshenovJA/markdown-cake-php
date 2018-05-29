
<link rel="stylesheet" href="/admin/css/pnotify.custom.min.css">

<!--    <div id="system_msg_wrapper" class="fixed system_error">-->
<!--        <div class="system_msg_top"></div>-->
<!--        <div class="system_msg_body">-->
<!--            <a class="system_msg_close"tabindex="1" style="display: none;">Close</a>-->
<!--            <div class="system_msg">-->
<!--                <span class="system_msg_title">Системне повідомлення!</span>-->
<!--                <p>--><?php //echo $message ?><!--</p>-->
<!--            </div>-->
<!--            <div style="clear:both"></div>-->
<!--        </div>-->
<!--        <div class="system_msg_bottom"></div>-->
<!--    </div>-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>

<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        new PNotify({
            title: 'Успіх!',
            text: '<?php echo $message ?>',
            type: 'success'
        });
    });
</script>
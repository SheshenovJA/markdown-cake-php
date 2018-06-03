<?php $this->append('pageScript')?>
    <script>
        $('#show_notif').change(function () {
            if ($('#show_notif').is(':checked')) {
                $.ajax({
                    url: '/admin/showNotif',
                    data: { islocked: parseInt(1), name:'show_notif' },
                    type: 'POST',
                    dataType: "json",
                    success: function(){
                        new PNotify({
                            title: 'Збережено!',
                            text: 'Інфо-панель відображаєтсься при запуску',
                            type: 'success'
                        });
                    }
                });
            }else{
                $.ajax({
                    url: '/admin/showNotif',
                    data: { islocked: parseInt(0), name:'show_notif'},
                    type: 'POST',
                    dataType: "json",
                    success: function(){
                        new PNotify({
                            title: 'Success!',
                            text: 'Інфо-панель не відображаєтсься',
                            type: 'success'
                        });
                    }
                });
            }
        });
    </script>

<?php if(!empty($options) && $options['show_notif'] == 1){?>
    <script>
        jQuery(function(){
            jQuery('#activity').click();
        });
    </script>
    <?php }?>
<?php $this->end()?>
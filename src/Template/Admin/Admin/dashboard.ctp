<?php $this->append('pageScript')?>
    <script>
        $('#show_notif').change(function () {
            if ($('#show_notif').is(':checked')) {
                $.ajax({
                    url: '/admin/showNotif',
                    data: { islocked: true },
                    type: 'POST',
                    dataType: "json"
                });
            }else{
                $.ajax({
                    url: '/admin/showNotif',
                    data: { islocked: false },
                    type: 'POST',
                    dataType: "json"
                });
            }
        });
    </script>


    <script>
        jQuery(function(){
            jQuery('#activity').click();
        });
    </script>
<?php $this->end()?>
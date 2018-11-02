<script>
    $('#upload').click(function (e) {
       e.preventDefault();

       var formData = new FormData($(this).parents('form')[0]);


       $.ajax({
          url: "<?php echo base_url('Auto/FormJs/getJsData') ?>",
          dataType: 'text',
          contentType: false,
          processData: false,
          data: formData,
          type: 'post',
          success: function (respone) {
              console.log(respone);
          }
       });


    });
</script>
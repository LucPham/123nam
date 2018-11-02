<script>

    /*Votes*/

    $(document).on('click','.vote-item', function (e) {
       var score = $(this).attr('item');
       var uri = window.location.pathname;
       uri = uri.split("-");
       var id = uri[uri.length-1];
       id = id.split(".")[0];

       if (isNaN(score) === false && isNaN(id) === false) {

            var linear = {
                '0.5': 'lear-half-point',
                '1': 'linear-one-point',
                '1.5': 'linear-one-half-point',
                '2': 'linear-two-point',
                '2.5': 'linear-two-half-point',
                '3': 'linear-three-point',
                '3.5': 'linear-three-half-point',
                '4': 'linear-four-point',
                '4.5': 'linear-four-half-point',
                '5': 'linear-five-point'
            };

            $.ajax({
               url: "<?php echo base_url('privated/C_timeline/votesAjax') ?>",
               type: "post",
               data: {_score: score, place_id: id},
               success: function(respone) {
                  var getJson = $.parseJSON(respone);

                  if (getJson.success === true) {

                    $('.overLoadScreen').show();
                    $('.notify-box .info strong').html('Bình chọn thành công!');
                    $('.notify-box').show();
                    $('#linear').removeClass().addClass('linear '+linear[getJson.averageScore]);
                    $('.score').html('<h3>'+getJson.averageScore+'</h3>');

                  } else if(getJson.success === false){
                    $('.overLoadScreen').show();
                    $('.notify-box .info strong').html('Rất tiếc! Bình chọn chưa thành công');
                    $('.notify-box').show();
                  }
                  console.log(getJson);
               }
            });
       } else console.log('Not a number!');


        offOnPopUp();
        offAutoPopup();

    });/**@Document*/



    function offOnPopUp() {
        $('.overLoadScreen').on('click', function (e) {
           $('.notify-box').hide();
           $(this).hide();
        });
    };
    function offAutoPopup() {
      setTimeout(function () {
          $('.notify-box').hide();
          $('.overLoadScreen').hide();
      }, 1000);
    }
</script>
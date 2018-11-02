<script>

    $(document).on('click', '#tl-showmore', function (e) {
       e.preventDefault();
       var page = $(this).attr('page');

       if (isNaN(page) === false) {
           $.ajax({
               url: "<?php echo base_url('privated/C_timeline/showmoreTimelineIndexAjax') ?>",
               type: "POST",
               data: {_page: page},
               beforeSend: function () {
                   $('#showmore img').show();
               },
               success: function (respone) {
                   var getJson = $.parseJSON(respone);
                   if (getJson.success === true) {
                       $('#showmore img').hide();
                       var dataLoad = getJson.data;
                       var wrapPrev = '<div class="demo-card-wrapper">';
                       var wrapNext = '</div>';
                       var load     = '';
                       var template = '';
                       var baseUrl  = "<?php echo base_url() ?>";
                       for (var i = 0; i < dataLoad.length; i ++) {
                           load +=
                                      '<div class="demo-card demo-card--step'+(i+1)+'">'+
                                      '<div class="head">'+
                                      '<div class="number-box"><span>0'+dataLoad[i].timeline_id+'</span></div>'+
                                      '<a href="'+baseUrl+"private/timeline/"+dataLoad[i].url+"-"+dataLoad[i].timeline_id+".html"+'"><h2><span>'+dataLoad[i].date+'</span>'+dataLoad[i]["places_title"]+'</h2></a>'+
                                      '</div>'+
                                      '<div class="body">'+
                                      '<p>'+dataLoad[i]["description"]+'</p>'+
                                      '<a href="#"><img src="http://placehold.it/1000x500"></a>'+
                                      '</div>'+
                                      '</div>';
                       }
                       template = wrapPrev+load+wrapNext;
                       $('#showmore').before(template);
                   } else alert('Not available!');
                   /**@Button @showmore*/
                   if (getJson.next === false) {
                       $('#showmore').hide();
                   } else $('#showmore #tl-showmore').attr("page",page*1+1);
               }
           });
       } else alert('Only number!');
    });
</script>
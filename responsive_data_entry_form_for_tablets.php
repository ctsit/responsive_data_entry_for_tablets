<?php
    return function($project_id, $record, $instrument, $event_id, $group_id, $survey_hash, $response_id, $repeat_instance) {
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                var width = $(document).width();

                // Explicit check for devices with 768 <= width <= 1024.
                if(width >= 768 && width <=1024){
                    $('#formSaveTip').remove();
                    $('#subheader').css('visibility', 'hidden');

                    $('.container').css('width', 'initial');
                    $('.rcproject-navbar').show();
                    $('.navbar-header').css('float', 'none');
                    $('.navbar-toggle').show();
                    
                    // Adjust css properties of left menu bar and data entry form.
                    $('#west').css({
                        'display': 'none',
                        'max-width': '80%',
                        'width': '80%',
                        'font-size': '16px'
                    });
                    $('#center').css('width', '90%');

                    // On click of menu icon, toggle left menu bar.
                    $('.navbar-toggle').on('click', function(){
                        if($('#west').css('display') == 'none'){
                            $('#west').show();
                        } else{
                            $('#west').hide();
                        }
                    });
                }
            });
        </script>
       <?php 
    };
?>

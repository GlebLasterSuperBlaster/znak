$(function() {
    $(document).ready(function() {
        $('.rewiew-textarea').on('blur, keyup', function() {
            var $max = 60;


            var $val = $(this).val();

            $(this).attr('maxlength', $max);

            if( $val.length <= 0 ) {
                $('.text-label-rewiew-count').html("0/60");
            } else {
                if( $max < parseInt( $val.length ) ) {
                    $this.val( $val.substring(0, $max) );
                }

                $('.text-label-rewiew-count').html( $(this).val().length+"/60");
            }
        });
    });
});
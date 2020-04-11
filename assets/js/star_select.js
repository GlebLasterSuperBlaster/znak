$(function() {
    $('.mark-select').change(function () {
        var vibor = $(this).find(':selected').val();
        if(vibor == 's1') {
            $('.selected-element').html('<div class="mark-number">1.0&nbsp</div><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>');
        } else if(vibor == 's2') {
            $('.selected-element').html('<div class="mark-number">2.0&nbsp</div><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>');
        } else if(vibor == 's3') {
            $('.selected-element').html('<div class="mark-number">3.0&nbsp</div><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>');
        } else if(vibor == 's4') {
            $('.selected-element').html('<div class="mark-number">4.0&nbsp</div><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>');
        } else if(vibor == 's5') {
            $('.selected-element').html('<div class="mark-number">5.0&nbsp</div><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"><i class="fas fa-star"></i>');
        }
    });

});
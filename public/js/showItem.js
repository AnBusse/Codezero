$(document).ready(function() {
    $('.js-like-item').on('click', function(e) {
        e.preventDefault();
        var $link = $(e.currentTarget);

        $link.toggleClass('fa-heart-o').toggleClass('fa-heart');
        $('.js-like-article-count').html('TEST');
        //$link.toggleClass('fa-heart-o').toggleClass('fa-heart');

        $.ajax({
            method: 'POST',
            url: $link.attr('href')
        }).done(function(data) {
            $('.js-like-item-count').html(data.hearts);
        });
    });
});

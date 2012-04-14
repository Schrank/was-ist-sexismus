$(function () {
    $('.navbar').click(function (event) {
        if ($(event.target).closest('[href=#add]').length > 0) {
            event.preventDefault();
            $.ajax('/spruch/add/', {
                complete: function (req) {
                    $('#content').html(req.responseText);
                }
            });
        } else if ($(event.target).closest('[href=#]').length > 0) {
            event.preventDefault();
            $.ajax('/spruch/', {
                complete: function (req) {
                    $('#content').html(req.responseText);
                }
            });
        } else if ($(event.target).closest('[href=#impressum]').length > 0) {
            event.preventDefault();
            $.ajax('/impressum/', {
                complete: function (req) {
                    $('#content').html(req.responseText);
                }
            });
        }
    });
});
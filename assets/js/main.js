var GZ = (function(my, $) {
    my.get = function(url, params, callback) {
        return $.getJSON("http://dev.generationzgame.com/api/v1" + url, params, callback);
    };

    return my;
}(GZ || {}, jQuery));

$(window).ready(function() {
    // $('form[method=post]').submit(function(e) {
    //     e.preventDefault();
    //     var action = $(this).attr("action");

    //     GZ.get(action, $(this).serializeArray(), function(res) {
    //         console.log(res);
    //     });
    // });

    $.mobile.defaultPageTransition = "slide";

    var help_list_object = {};
    $("a[href=#help_panel]").click(function() {
        var title = ucwords($(this).parent().attr("data-title").trim());
        var content;

        $('#help_panel_content').html("");

        if (!help_list_object.hasOwnProperty(title)) {
            $.mobile.loading("show", {
                textonly: false
            });

            $.ajax({
                "url": "/help/lookup",
                "dataType": "json",
                "data": {
                    "title": title
                }
            }).done(function(data) {
                populateHelp(data);

                help_list_object[title] = data;
            }).always(function() {
                $.mobile.loading("hide");
            });
        } else {
            populateHelp(help_list_object[title]);
        }

        $("#help_panel").trigger("updatelayout");
    });

    var slider_obj = {};
    $(".new_player_slider").on("change", function(e) {
        if (!slider_obj.hasOwnProperty($(this).attr("id")) ||
            slider_obj[$(this).attr("id")] != $(this).val()) {
            var change = $(this).val() - slider_obj[$(this).attr("id")];
            slider_obj[$(this).attr("id")] = $(this).val();
            var pr = parseInt($("#points_remaining").val());

            if (!isNaN(change)) {
                $("#points_remaining").val(pr - change).slider("refresh");

                var myId = $(this).attr("id");
                $.each($(".new_player_slider"), function(k, v) {
                    if ($(v).attr("id") != myId) {
                        var pr = parseInt($("#points_remaining").val());
                        var new_max = parseInt($(v).val()) + pr;
                        $(v).attr("max", new_max).slider("refresh");
                    }
                });
            }
        }
    });
});

function populateHelp(data) {
    $('#help_panel_content').html("");
    var h3 = $("<h3 />").text(data.title);
    var p = $("<p />").text(data.content);
    $('#help_panel_content').html(h3);
    $('#help_panel_content').append(p);
}

function ucwords(str) {
    return (str + '')
        .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
            return $1.toUpperCase();
        });
}
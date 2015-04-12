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
        var title = ucwords($(this).attr("data-title").trim());
        console.log(title);
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

    // $("#gameRequestPage").on("submit", "#joinRequestForm", function(e) {
    //     e.preventDefault();
    //     console.log("join game?");
    //     var action = $(this).attr("action");
    //     GZ.get(action, $(this).serializeArray(), function(res) {
    //         console.log(res);
    //     });
    //     $.mobile.changePage("#requestSuccess", { role: "dialog" });
    // });
});

$(document).on("pageshow","#game-view", function() {
    $("#leave-game").unbind('click').click(function (e) {
        e.preventDefault();
        var url = $(e.target).attr("href");
        confirmDialog("Are you sure you want to leave the game? This is an irreversible change. Once you confirm you will not be able to retrieve your character in the future.", function() {
            // user has confirmed, do stuff
            //console.log("user has confirmed, do stuff",$(e.target).attr("href"));
            //console.log("wat",url);
            $.mobile.navigate(url);
        });
    });
});

function setupSliderHandler()
{
    // Tearing down old handlers to make way for the new
    $(".ui-field-contain").off("change", ".new_player_slider");
    var slider_obj = {};
    $(".ui-field-contain").on("change", ".new_player_slider", function(e) {
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
}

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

function confirmDialog(text, callback) {
    var popupDialogId = 'popupDialog';
    $('<div data-role="popup" id="' + popupDialogId + '" data-confirmed="no" data-transition="pop" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:500px;"> \
                        <div data-role="header" data-theme="a">\
                            <h1>Question</h1>\
                        </div>\
                        <div role="main" class="ui-content">\
                            <h3 class="ui-title">' + text + '</h3>\
                            <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b optionConfirm" data-rel="back">Yes</a>\
                            <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b optionCancel" data-rel="back" data-transition="flow">No</a>\
                        </div>\
                    </div>')
        .appendTo($.mobile.pageContainer);
    var popupDialogObj = $('#' + popupDialogId);
    popupDialogObj.trigger('create');
    popupDialogObj.popup({
        afterclose: function (event, ui) {
            popupDialogObj.find(".optionConfirm").first().off('click');
            var isConfirmed = popupDialogObj.attr('data-confirmed') === 'yes' ? true : false;
            $(event.target).remove();
            if (isConfirmed && callback) {
                callback();
            }
        }
    });
    popupDialogObj.popup('open');
    popupDialogObj.find(".optionConfirm").first().on('click', function () {
        popupDialogObj.attr('data-confirmed', 'yes');
    });
}
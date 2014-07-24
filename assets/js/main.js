$(window).ready(function() {
    // $("#registerform").on("submit", function(e)
    // {
    // 	e.preventDefault();
    // 	$.ajax(
    // 	{
    // 		url: "/main/register",
    // 	    beforeSend: function()
    // 	    {
    // 	    	// Handle the beforeSend event
    // 		},
    // 		complete: function()
    // 		{
    // 			// Handle the complete event
    // 		}
    // 		// ......
    // 	});
    // });

    var help_list_object = {};
    $("a[href=#help_panel]").click(function() {
        var title = ucwords($(this).attr("data-title").trim());
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
});

function populateHelp(data) {
    $('#help_panel_content').html("");
    var h3 = $("<h3 />").text(data.title);
    var p = $("<p />").text(data.content);
    $('#help_panel_content').html(h3);
    $('#help_panel_content').append(p);
}

function ucwords(str) {
    //  discuss at: http://phpjs.org/functions/ucwords/
    // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // improved by: Waldo Malqui Silva
    // improved by: Robin
    // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // bugfixed by: Onno Marsman
    //    input by: James (http://www.james-bell.co.uk/)
    //   example 1: ucwords('kevin van  zonneveld');
    //   returns 1: 'Kevin Van  Zonneveld'
    //   example 2: ucwords('HELLO WORLD');
    //   returns 2: 'HELLO WORLD'

    return (str + '')
        .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
            return $1.toUpperCase();
        });
}
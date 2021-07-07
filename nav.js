/* navigation parts */
var mobile_index = (function()
{
    var state = 0, toggle, index, nav;

    document.addEventListener('DOMContentLoaded', function()
    {
        toggle = document.getElementById('toggle');
        toggler = document.getElementById('toggler');
        index = document.getElementById('index');

        if (toggle.addEventListener)
        {
            toggle.addEventListener("click", function(ev)
            {
                mobile_index.displayer();
                ev.preventDefault();
                ev.stopPropagation();
            });
        }
        else
        {
            toggle.attachEvent("click", function(ev)
            {
                mobile_index.displayer();
                ev.preventDefault();
                ev.stopPropagation();
            });
        }
    });

    var public = {

        displayer : function ()
        {
            (state == 0) ? private.opener() : private.closer();
        }
    };

    var private = {

        opener : function ()
        {
            toggler.classList.remove('icono-hamburger');
            toggler.classList.add('icono-cross');

            toggle.classList.add('is-active');
            index.classList.add('active');

            state = 1;
        },

        closer : function ()
        {
            toggler.classList.remove('icono-cross');
            toggler.classList.add('icono-hamburger');

            toggle.classList.remove('is-active');
            index.classList.remove('active');

            state = 0;
        },
    };

    return public;

})();

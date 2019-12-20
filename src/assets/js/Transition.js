(function ($, window, document, undefined) {
    var pluginName = "redirectPage",
        defaults = {
            'href': ''
        };

    function Plugin(element, options) {
        this.element = $(element);
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }
    Plugin.prototype = {
        init: function () {
            timer(3, this.timerHandler, this.timerCallback.bind(this));
        },
        timerHandler: function (time) {
            $('#timer-output').text(time);
        },
        timerCallback: function () {
            window.location.href = this.settings.href;
        }
    };

    const timer = (to, handler, callback) => {
        if (to-- <= 0) {
            callback();
            return;
        }

        setTimeout(() => {
            handler(to);
            timer(to, handler, callback);
        }, 1000);
    };

    $.fn[pluginName] = function (options) {
        this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
            }
        });
        return this;
    };
})(jQuery, window, document);

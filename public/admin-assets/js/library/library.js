(function ($) {
    var HT = {};
    var document = $(document);
    HT.switchery = () => {
        $(".js-switch_2").each(function () {
            // let _this = $(this);
            var switchery = new Switchery(this, { color: "#ED5565" });
        });
    };
    document.ready(function () {
        HT.switchery();
    });
})(jQuery);

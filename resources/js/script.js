//--------do an ajax call for insert to cart-------------

$(".add-to-cart-btn").on("click", function () {
    let id = $(this).data("id");

    $.ajax({
        url: BASE_URL + "/shop/add-to-cart",
        type: "GET",
        dataType: "html",
        data: { id: $(this).data("id") },
        success: function (res) {
            location.reload();
        },
    });
});

//--------Error/Warning 3 sec delay-------------

$(".bm-box").delay(3000).slideUp();

$(".update-cart").on("click", function () {
    $.ajax({
        url: BASE_URL + "/shop/update-cart",
        type: "GET",
        dataType: "html",
        data: { id: $(this).data("id"), op: $(this).val() },
        success: function (res) {
            location.reload();
        },
    });
});

//--------Make friendly URL-------------

String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, "-");
};

$(".origin-text").on("keyup", function () {
    $(".target-text").val($(this).val().permalink());
});

//----------Write image name at bootstrap field-------------

$('.custom-file-input').on('change',function(e){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
})



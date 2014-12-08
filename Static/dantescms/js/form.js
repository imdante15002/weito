$(document).ready(function() {
    $("form :input").blur(function() {
        $(this).parent().find(".red").remove();
        if ($(this).is("#tag")) {
            if (this.value == "" || this.value != $("#tag").val()) {
                var tag = $("<span class='red'>*标题不能为空</span>");
                $(this).parent().append(tag)
            }
        }
        /*-----------*/
        if ($(this).is("#user")) {
            if (this.value == "" || this.value != $("#user").val()) {
                var tag = $("<span class='red'>*用户名不能为空</span>");
                $(this).parent().append(tag)
            }
        }
        /*-----------*/
        if ($(this).is("#se")) {
            if (this.value == "" || this.value != $("#se").val()) {
                var tag = $("<span class='red'>*未选择岗位</span>");
                $(this).parent().append(tag)
            }
        }
        /*-----------*/
        if ($(this).is("#jobid")) {
            if (this.value == "" || this.value != $("#jobid").val()) {
                var tag = $("<span class='red'>*未选择岗位</span>");
                $(".ajax_category").parent().append(tag)
            }
        }
    });
    $("#submit").click(function() {
        $("form :input").trigger("blur");
        var hdw3 = $(".error").length;
        if (hdw3) {
            return false
        }
    });
});
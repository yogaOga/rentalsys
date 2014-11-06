/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

(function($) {
    $.fn.pagination = function() {
        var length = 10;
        var dataCount = $("tbody#data tr").length;
        var pageIndex = 0;
        var firstIndex = 2;
        var lastIndex = 6;
        var first = ' <a href="#" class="page">first</a>';
        var last = '<a href="#" class="page">last</a>';

//        $(function() {
        for (var i = 1; i <= length; i++) {
            $("tbody#data tr:nth-child(" + i + ")").removeClass("hide");
        }
        if (dataCount <= 10) {
            $(".pagination").html("");
        } else {
            if (dataCount > 20 && dataCount <= 30) {
                pageIndex = 2;
            } else if (dataCount > 20 && dataCount <= 40) {
                pageIndex = 3;
            } else if (dataCount > 20 && dataCount <= 50) {
                pageIndex = 4;
            } else if (dataCount > 20 && dataCount <= 60) {
                pageIndex = 5;
            } else if (dataCount > 20 && dataCount > 60) {
                pageIndex = 6;
            }
            $(".pagination").html(first);
            for (var i = 2; i <= pageIndex; i++) {
                $(".pagination").append('<a href="#" class="page">' + i + '</a>');
            }
            $(".pagination").append(last);

            $(".pagination :nth-child(1)").addClass("active");
        }

//        });
        $(".page").live("click", function() {
            var current = $(".page.active");
            var clicked = $(this);
            var clickedIndexValue = clicked.html();
            var currentIndexValue = current.html();
            var totalIndex = Math.ceil(dataCount / length);
            current.removeClass("active");
            clicked.addClass("active");
            current = clicked;
            if (clickedIndexValue === "first") {
                clickedIndexValue = 1;
            }
            if (currentIndexValue === "first") {
                currentIndexValue = 1;
            }
            if (clickedIndexValue === "last") {
                clickedIndexValue = totalIndex;
            }
            if (currentIndexValue === "last") {
                currentIndexValue = totalIndex;

            }

            for (var i = 0; i < length; i++) {
                var oldIndex = length * currentIndexValue - i;
                var newIndex = length * clickedIndexValue - i;

                $("tbody#data tr:nth-child(" + oldIndex + ")").addClass("hide");
                $("tbody#data tr:nth-child(" + newIndex + ")").removeClass("hide");
            }

            if (pageIndex === 6) {
                if (clickedIndexValue == lastIndex) {
                    var restOfIndex = totalIndex - lastIndex - 1;
                    var untilIndex = (restOfIndex - 4 <= 0) ? lastIndex + restOfIndex : lastIndex + 4;
         
                    if (restOfIndex > 0) {
                        $(".pagination").html(first);
                        for (var i = lastIndex; i <= untilIndex; i++) {
                            $(".pagination").append('<a href="#" class="page">' + i + '</a>');
                        }
                        $(".pagination").append(last);
                        $(".pagination :nth-child(2)").addClass("active");
                        firstIndex = lastIndex;
                        lastIndex = untilIndex;

                    }
                } else if (clickedIndexValue == firstIndex) {
                    
                    var restOfIndex = firstIndex - 4;
                    var untilIndex = restOfIndex + 4;
                    if (restOfIndex > 0) {
                        $(".pagination").html(first);

                        for (var i = restOfIndex; i <= untilIndex; i++) {
                            $(".pagination").append('<a href="#" class="page">' + i + '</a>');
                        }
                        $(".pagination").append(last);
                        $(".pagination :nth-child(6)").addClass("active");
                        firstIndex = restOfIndex;
                        lastIndex = untilIndex;
                    }
                }

            }
        });
    }
}(jQuery));
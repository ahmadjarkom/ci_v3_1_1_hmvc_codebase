$(function() {
    $(".modal").on("shown.bs.modal", function(e) {
        var link = $(e.relatedTarget);
        $(this).find(".modal-content").load(link.attr("data-source"));
    });
});

// // Active link on navigation
// $(function(){
//     var current = location.pathname;
//     $('.nav li a').each(function(){
//         var $this = $(this);
//         var url = window.location.href;

//         // If current path is same with link, then active
//         if($this.attr('href') == url){
//             $this.addClass('active');
//         }
//     })
// })
<!--   Core JS Files   -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/rangeslider.min.js"></script>
<script src="js/typed.js"></script>
<script>
var typed = new Typed('.typed-words', {
    strings: ["Benefit 1", " Glowing 2", " Benefit 3"],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 4000,
    startDelay: 1000,
    loop: true,
    showCursor: true
});
</script>
<script src="js/main.js"></script>
<script src="mine/datatables.min.js"> </script>
<script src="mine/jQuery.print.js"> </script>
<script src="mine/wow.min.js"> </script>
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
new WOW({
    animateClass: 'animate__animated', // default
}).init();
</script>
<script type="text/javascript">
var aneh;
$(document).ready(function() {

    aneh = $('.tb').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: 'column',
                renderer: function(api, rowIdx, columns) {
                    var data = $.map(columns, function(col, i) {
                        return col.hidden ?
                            '<li  class="" data-dtr-index="1" data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
                            '<div class="d-flex justify-content-between" >' +

                            '<span class="dtr-title">' + col.title + ':' + '</span> ' +
                            '<span class="dtr-data text-right text-break text-wrap">' + col.data + '</span>' +
                            '</li></div>' :
                            '';
                    }).join('');

                    return data ?
                        $('<ul style="display:block;" class="dtr-details" />').append(data) :
                        false;
                }
            }
        },
        "dom": '<"p-2 d-flex justify-content-between" f>t<"card-body d-flex justify-content-end" p>',
        "lengthMenu": [
            [5, 10, -1],
            [5, 10, "All"]
        ],
        "language": {
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        }
    });



});
</script>

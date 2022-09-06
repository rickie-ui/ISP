$(document).ready(function () {
    $("#billing").DataTable();

    $(".val").click(function () {
        $("#amount").val($("input[type=radio]:checked").val());
    });

    $(".val").click(function () {
        $("#amount").val($("input[type=radio]:checked").val());
    });

    //restricting date //restricting date
    let dtToday = new Date();

    let month = dtToday.getMonth() + 1;
    let day = dtToday.getDate();
    let year = dtToday.getFullYear();
    if (month < 10) month = "0" + month.toString();
    if (day > 30) day = "0" + day.toString();

    var minDate = year + "-" + month + "-" + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);

    $("#month").attr("min", minDate);
});

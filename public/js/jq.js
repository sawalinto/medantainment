$(document).ready(function()
{
    $(".dashboard").show();
    $(".slider").hide();
    $(".dokumentasi").hide();
    $(".client").hide();

    $(".slider1").click(function()
    {
        $(".dashboard").hide();
        $(".slider").show();
        $(".dokumentasi").hide();
      $(".client").hide();
    });

    $(".home1").click(function()
    {
        $(".dashboard").show();
        $(".slider").hide();
        $(".dokumentasi").hide();
      $(".client").hide();
    });

    $(".dokumentasi1").click(function()
    {
        $(".dashboard").hide();
        $(".slider").hide();
        $(".dokumentasi").show();
        $(".client").hide();
    });

    $(".klien1").click(function()
    {
        $(".dashboard").hide();
        $(".slider").hide();
        $(".dokumentasi").hide();
        $(".client").show();
    });
});
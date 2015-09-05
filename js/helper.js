$(function()
{

    var $overall = 0;

    $("tr.sum").each(function()
    {

        var $qnt = $(this).find("td").eq(0);
        var $price = $(this).find("td").eq(1);

        console.log($qnt+" | "+$price);

        var sum = parseFloat($price.text()) * parseFloat($qnt.text());

        $(this).find("td").eq(2).text(sum);
        
        $overall+= sum;

    });
    
    $("#total").text($overall);

});
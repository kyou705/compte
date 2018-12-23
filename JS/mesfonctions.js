function AfficherLesJeux()
{
    $.ajax
    (
        {
            type:"get",
            url:"../PHP/V2Page2.php",
            data:"id="+$('#lstCategories').val(),
            success:function(data)
            {
                $('#divJeux').empty();
                $('#divJeux').append(data);
            },
            error: function()
            {
                alert("Erreur sur l'affichage des jeux");
            }
        }
    );
}
$(function() {
    $.ajax({
        url:'request.php',
        dataType:'json',
    }).done(function(data){
        console.log(data.nome);
    })
})
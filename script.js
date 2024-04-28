function loadItems(){
    $.post('environment/database.php', {rq:'get'}, function(response){
        var items = JSON.parse(response);
        $('#itemList').empty();
        $.each(items, function(index, item){
            console.log(item);
        })
    })
}

$(document).ready(function(){
    loadItems();
})
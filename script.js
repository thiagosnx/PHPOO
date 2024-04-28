function loadItems(){
    $.post('environment/database.php', {rq:'get'}, function(response){
        var items = JSON.parse(response);
        $('#itemList').empty();
        $.each(items, function(index, item){
            console.log(item);
        })
    })
}
function insertItem(){
    var itemName = $('#itemName').val();
    $.post('environment/database.php', {rq:'isrt', 'name':itemName}, function(response){
        if(response != 'Erro'){
            loadItems();
        }else{
            console.log(response);
        }
    }
)

}


$(document).ready(function(){
    loadItems();
})
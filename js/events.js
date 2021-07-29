function deletePost()
{
    event.preventDefault();
    let param = {id:$(this).data('index')}
    let reponse = confirm("Êtes-vous sûr de vouloir supprimer cet article ?");
    if (reponse == true)
    $.get('admin_delete_ajax.php',param, getResponse);
    
}
/*
function deletePostPhp()
{
    let del = document.querySelector('.delete');
    del.addeventListener('click', confirm("Êtes-vous sûr de vouloir supprimer cet article ?"));
}*/

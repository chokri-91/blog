function getResponse(data)
{
    console.log(data)
    let ligne = $('.delete[data-index ='+ data + ']').parents('tr')
    console.log(ligne)
    ligne.remove()
}
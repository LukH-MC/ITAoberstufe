function redirect(url, id)
{
    var ask = confirm("You are about to visit "+ id +".\nAre you sure?");
    if (ask)
	{
        window.location.href = url;
    }
}
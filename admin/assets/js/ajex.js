
var js_base_url = function (url) {
    //var base_urls = window.location.origin;
    //var host = window.location.host;
    //var pathArray = window.location.pathname.split('/');
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    if (url === undefined || url === null)
        url = '';
    return baseUrl + '/' + url;
}

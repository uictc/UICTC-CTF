function createCookie(name,value) {
    if (value == null) {
        var dt = new Date();
        var yr = dt.getUTCFullYear() +("0" + (dt.getUTCMonth()+1)).slice(-2) + ("0" + dt.getUTCDate()).slice(-2);

        document.cookie = name+"="+yr+"; path=/;";
    }else{
        document.cookie = name+"="+value+"; path=/;";
    }
}
createCookie('time',null);
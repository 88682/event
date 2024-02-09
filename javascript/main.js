function alerts(a) {
    switch (a){
    case 'registered':
        alert("Your account has been created! Please log in."); 
    break;
    case 'loginfail':
        alert("Wrong username or password!"); 
    break;
    case 'servererror':
        alert("Server failed to do it's job..."); 
    break;
}
}
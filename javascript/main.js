function alerts(a) {
    switch (a){
    case 'registered':
        alert("Your account has been created! Please log in."); 
    break;
    case 'event':
        alert("Event has been created."); 
    break;
    case 'loginfail':
        alert("Wrong username or password!"); 
    break;
    case 'servererror':
        alert("Server failed to do it's job..."); 
    break;
    case 'codefail':
        alert("Wrong code."); 
    break;
    case 'doublename':
        alert("This username already exists."); 
    break;
    case 'uploaded':
        alert("Photos were uploaded!"); 
    break;
}
}
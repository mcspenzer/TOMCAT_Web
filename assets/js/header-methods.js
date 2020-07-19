var firstName = sessionStorage.getItem('user_first_name');
var lastName = sessionStorage.getItem('user_last_name');
var email = sessionStorage.getItem('user_email');
var displayPhoto = sessionStorage.getItem('user_display_photo');
var displayPhotoParsed = displayPhoto.substring(2);

if (!firstName && !lastName && !email & !displayPhoto) {
    console.log('- Session not initiated');
    sessionStorage.clear();
    window.location.replace("../login/tims_login.php");
} else {
    $('#user-profile-first-name').html(firstName + ' ' + lastName);
    $('#user-profile-display-photo').attr('src', '../users/process/' + displayPhotoParsed);
}

function logoutUser() {
    sessionStorage.clear();
    window.location.replace("../login/tims_login.php");
}
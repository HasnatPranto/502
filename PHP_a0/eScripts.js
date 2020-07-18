function check() {
    var p= document.getElementsByName("u_pass")[0];
    var pp= document.getElementsByName("re-pass")[0];

    if (pp.value!=='' && pp.value===p.value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password matched';
        document.getElementById("sb").disabled =false;
    } else {
        document.getElementById('message').style.color = 'grey';
        document.getElementById('message').innerHTML = 'Password is not matching';
        document.getElementById("sb").disabled =true;
    }
}
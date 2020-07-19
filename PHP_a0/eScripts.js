function check() {
    var p= document.getElementsByName("u_pass")[0];
    var pp= document.getElementsByName("re-pass")[0];

    if(p.value.length > pp.value.length && p.value.includes(pp.value) && p.value[0]===pp.value[0]){
        document.getElementById('message').style.color = 'grey';
        document.getElementById('message').innerHTML = 'Good so far';
        document.getElementById("sb").disabled = true;
    }
    else{
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password is not matching';
        document.getElementById("sb").disabled =true;
    }
    if (pp.value===p.value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password Matched';
        document.getElementById("sb").disabled =false;
    }
    if(pp.value.length===0){  document.getElementById('message').innerHTML = '';}
}

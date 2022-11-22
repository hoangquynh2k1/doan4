function hire()
{
    document.getElementById('1').style.display=none;
}
function flex1()
{
    document.getElementById('1').style.display=flex;
}
function pdk(){
    document.getElementById('1').style.display='flex';
    document.getElementById('fdk').style.display='block';
    document.getElementById('fdn').style.display='none';
}
function pdn(){
    document.getElementById('1').style.display='flex';
    document.getElementById('fdn').style.display='block';
    document.getElementById('fdk').style.display='none';
}
// function fdk(){
//      var a = document.getElementById('name1').value;
//      document.getElementById('dk').innerText ='Xin chào';
//      document.getElementById('dn').innerText =a;
//      hire();
// }
// function fdn(){
//     var a = document.getElementById('name2').value;
//     document.getElementById('dk').innerText ='Xin chào';
//     document.getElementById('dn').innerText =a;
//     hire();
// }
function check(){
    var name = document.getElementById('name2').value;
    var pass = document.getElementById('pass2').value;
    if(name != '' && pass !=''){
        alert('Đăng nhập thành công!');
        window.location.pathname = '/';
    }
    else{
        alert('Tài khoản hoặc mật khẩu không chính xác!');
    }
}
function checkadmin(){
    var name = document.getElementById('name').value;
    var pass = document.getElementById('pass').value;
    // if(name != '' && pass !=''){
    //     window.open(Admin.html);
    //     window.close(login.html);
    // }
    // else{
    //     alert('Tài khoản hoặc mật khẩu không chính xác!');
    // }
}
let sideNavItems = document.getElementsByClassName('side-nav')[0].getElementsByClassName('item');
let topNavItems = document.getElementsByClassName('top-nav')[0].getElementsByClassName('item');
//console.log(sideNavItems);

let updateNav = (items) => {
    for (let i = 0; i < items.length; i++) {
        let content = document.getElementById('content-' + i);
        if (!content.hasAttribute('hidden')) {
            if (!items[i].classList.contains('active')) {
                items[i].classList.add('active');
            }
        } else {
            if (items[i].classList.contains('active')) {
                items[i].classList.remove('active');
            }
        }
    }
}

let showPanel = (items) => {
    for (let i = 0; i < items.length; i++) {
        items[i].addEventListener('click', () => {
            //console.log(i);
            for (let j = 0; j < items.length; j++) {
                let content = document.getElementById('content-' + j);
                if (!content.hasAttribute('hidden')) {
                    content.setAttribute('hidden', '');
                }
            }
            
            let content = document.getElementById('content-' + i);
            content.removeAttribute('hidden');

            updateNav(sideNavItems);
            updateNav(topNavItems);
        })
    }
}

updateNav(sideNavItems);
updateNav(topNavItems);

showPanel(sideNavItems);
showPanel(topNavItems);

$(function () {
    setTimeout(function () { $(".auto-hide").fadeOut(1500); }, 5000)
})

let oldPassword, newPassword, retypeNewPassword;
let alertNP = document.getElementById('alert_new_password');
let alertRNP = document.getElementById('alert_retype_new_password');
let saveBtn = document.getElementById('save_new_pass');

let isValid;

let checkValidInput = () => {
    if (!isValid) {
        if (!saveBtn.hasAttribute('disabled')) {
            console.log('here');
            saveBtn.setAttribute('disabled', '');
        }
    } else {
        saveBtn.removeAttribute('disabled');
    }
}

document.getElementsByName('old_password')[0].addEventListener('change', function () {
    oldPassword = this.value;
});

document.getElementsByName('new_password')[0].addEventListener('change', function () {
    newPassword = this.value;
    isValid = true;
    
    if (oldPassword) {
        if (newPassword.length < 8 || newPassword.length > 20) {
            console.log('false');
            alertNP.removeAttribute('hidden');
            alertNP.innerHTML = 'Mật khẩu mới phải có độ dài từ 8 đến 20 kí tự';
            isValid = false;
        }
        else if (newPassword === oldPassword) {
            console.log('false');
            alertNP.removeAttribute('hidden');
            alertNP.innerHTML = 'Mật khẩu mới phải khác mật khẩu cũ';
            isValid = false;
        } else {
            console.log('true');
            if (!alertNP.hasAttribute('hidden')) {
                alertNP.setAttribute('hidden', '');
                alertNP.innerHTML = null;
                isValid = true
            }
        }
    }

    checkValidInput();
});

document.getElementsByName('retype_new_password')[0].addEventListener('change', function () {
    retypeNewPassword = this.value;
    isValid = true;

    if (newPassword) {
        if (newPassword !== retypeNewPassword) {
            console.log('false');
            alertRNP.removeAttribute('hidden');
            alertRNP.innerHTML = 'Mật khẩu mới phải khác mật khẩu cũ';
            isValid = false;
            
        } else {
            console.log('true');
            if (!alertRNP.hasAttribute('hidden')) {
                alertRNP.setAttribute('hidden', '');
            }
            isValid = true;
        }
    }

    checkValidInput();
});

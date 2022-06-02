
const renderEmail = () => {

    const email = document.getElementById('email');
    var para = document.getElementById('para');

    
        if(email.click){
    
            const formEmail = `<form method="POST">
                                <input name="newEmail" placeholder='your new email' name='email' type="text">
                                <input name="newPassword" placeholder="your password" type="password"  >
                                <input name"email" type="submit" value="change your email">
                            </form>`;

            para.insertAdjacentHTML('afterbegin',formEmail);
        
        
    
        }
    }



    const renderPassword = () => {
        
        const password = document.getElementById('pass');

        if(password.click){

            const formPass = `<form method="POST">
                                <input name="newEmail" placeholder='your new email' name='email' type="text">
                                <input name="newPassword" placeholder="your password" type="password"  >
                                <input name"email" type="submit" value="change your email">
                            </form>`;

            para.insertAdjacentHTML('afterbegin',formPass);

        }
    }





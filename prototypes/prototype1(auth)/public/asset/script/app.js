
const renderEmail = () => {

    const email = document.getElementById('email');
    var para = document.getElementById('para');

    if(para){
    if(email.click){
    
        const formEmail = `<form method="POST">
                                <input name="newEmail" placeholder='your new email' name='email' type="text">
                                <input name="" placeholder="your password" type="password"  >
                                <input type="submit" value="submit">
                            </form>`;

        para.insertAdjacentHTML('afterbegin',formEmail);
        
        
    }
    }
    }






// show popup form 

const showPopUp = () => {

    let button = document.getElementById('showButton');

    if(button.click){


        document.querySelector('.popupContainer').style.display='block';
 

}

}

//hide popup form when click on close mark
const hideForm = () => {
 
    let closeButton = document.getElementById('closePopUp');

    if(closeButton.click){

        document.querySelector('.popupContainer').style.display='none';
    }

}

// render change email  form
const renderEmail = () => {

const email = document.getElementById('email');
var emailDiv = document.getElementById('emailDiv');
        
    if(email.click){


        const formEmail = `<div class='emailContainer'>
                                <form method="POST">
                                    <input  name="newEmail" placeholder='your new email' required name='email' type="email">
                                    <input name="cPassword" placeholder="your password" required type="password"  >
                                    <input name="email" type="submit" value="change your email">
                                </form>
                            </div>
                          `;

       while(emailDiv.firstChild){

            emailDiv.removeChild(emailDiv.firstChild);
            emailDiv.insertAdjacentHTML('beforebegin',formEmail);
       }

    }
    
       
    }

//render change password form
const renderPass = () => {
var passDiv = document.getElementById('passDiv');

    const password = document.getElementById('pass');


    if(password.click){

        const formPass = `<div class='passContainer'>
                                <form method="POST">
                                    <input name="oldPassword" required placeholder="your old password" type="password">
                                    <input name="newPassword" required placeholder="your new your password" type="password"  >
                                    <input name="password" type="submit" value="change your password">
                               </form>
                            </div>`;

  


            
       while(passDiv.firstChild){

        passDiv.removeChild(passDiv.firstChild);
        passDiv.insertAdjacentHTML('beforebegin',formPass);
    }
                       
            

    }
}





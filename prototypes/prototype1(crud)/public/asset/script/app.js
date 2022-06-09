
//popup form 

const showPopUp = () => {

        var button = document.getElementById('showButton');

        if(button.click){


            document.querySelector('.popupContainer').style.display='block';
     

    }





}

const hideForm = () => {


}


// setting icon 

const setting = () => {

    let settings = document.getElementById('setting');
    if(settings.click){

        document.querySelector('.setting').style.display='block';

        
    }
}




// render email form
const renderEmail = () => {

    const email = document.getElementById('email');
    var emailDiv = document.getElementById('emailDiv');

            
        if(email.click){
[]
            const formEmail = `<form method="POST">
                                <input name="newEmail" placeholder='your new email' name='email' type="text">
                                <input name="cPassword" placeholder="your password" type="password"  >
                                <input name="email" type="submit" value="change your email">
                              </form>
                              `;

           while(emailDiv.firstChild){

                emailDiv.removeChild(emailDiv.firstChild);
                emailDiv.insertAdjacentHTML('beforebegin',formEmail);
           }

           
            
            



        }
        
           
        }



//render password form
    
const renderPass = () => {
    var passDiv = document.getElementById('passDiv');

        const password = document.getElementById('pass');

        if(password.click){

            const formPass = `<form method="POST">
                                <input name="oldPassword" placeholder="your old password" type="password">
                                <input name="newPassword" placeholder="your new your password" type="password"  >
                                <input name="password" type="submit" value="change your password">
                            </form>`;

            while(passDiv.firstChild){

                passDiv.removeChild(passDiv.firstChild);
                passDiv.insertAdjacentHTML('beforebegin',formPass);


                
                           }
                

        }
}





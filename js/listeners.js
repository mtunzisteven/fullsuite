import{request} from "./requests.js";


export const formListener = (formElements, responseDiv) => {

    // Iterate the forms elements
    for(let i = 0; i < formElements.length; i++){

        const name = formElements[i].name; 
        const email = formElements[i].email; 
        const message = formElements[i].message;

        // Set up a submit event listener for each marker in the array
        formElements[i].addEventListener('submit', function(){
            preventDefault();

            const data = {
                'name': name,
                'email': email,
                'message': message
            }

            request(data, responseDiv)

    });

  }

};

export const mobileMenuListener = (openMenu, closeMenu, defaultmMenu, heddenmMenu) => {

    openMenu.addEventListener('click', function(){

        defaultmMenu.setAttribute("id", "hidden");

        heddenmMenu.removeAttribute("id");

    });

    closeMenu.addEventListener('click', function(){

        heddenmMenu.setAttribute("id", "hidden");

        defaultmMenu.removeAttribute("id");

    });

};
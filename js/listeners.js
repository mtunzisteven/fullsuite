import{request} from "./requests.js";


export const formListener = (formElements, responseDiv) => {

    // Iterate the forms elements
    formElements.forEach(function(formElement){

        const name = formElement.name; 
        const email = formElement.email; 
        const subject = formElement.subject; 
        const message = formElement.message;

        // Set up a submit event listener for each marker in the array
        formElement.addListener('submit', function(){
            preventDefault();

            const data = {
                'name': name,
                'email': email,
                'subject': subject,
                'message': message
            }

            request(data, responseDiv)

    });

  });

};

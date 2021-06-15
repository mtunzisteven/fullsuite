import{formListener} from "./listeners.js";


const forms = document.forms;
const responseDiv = document.querySelector('#response-div');

formListener(forms, responseDiv)

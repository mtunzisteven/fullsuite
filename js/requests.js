
export const request = (data, responseDiv) => {

    fetch("/fullsuite/index.php",
        {
            method:"POST",
            action: "email",
            body: data
        }
    )
    .then(response => {
        
        if(response.ok){

            return response.text();

        }
        throw Error("Error: ", response.statusText);

    })

    .then(text => responseDiv.innerHTML = text)
    .catch(error => responseDiv.innerHTML = "Error:", error)
}
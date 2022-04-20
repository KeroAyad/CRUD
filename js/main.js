function alertFunc(){
    let message= document.getElementById('form');
    message.innerHTML = `
        <div class=" container col-11 col-md-9 col-xl-8 my-3 alert alert-success alert-dismissible fade show" role="alert">

        <strong>Holy guacamole!</strong> Data updated successfully.
        <a href="display.php">Go home</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
      return message
}
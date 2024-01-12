document.addEventListener("DOMContentLoaded", () => {
    document.querySelector('.register').addEventListener("click", createRegisterForm);
    document.querySelector('.loggin').addEventListener("click", createLoginForm);

    //document.querySelectorAll('.BookTableRow').forEach(function (item) { onRowClick(item) });

    function onRowClick(item) {
        item.addEventListener('click', function () {
            alert(item);
        });
    }


    function createLoginForm() {
        AddFocusActive();
        var loginDiv = document.createElement('div')
        loginDiv.setAttribute('id', 'dybamicLoginForm')
        loginDiv.setAttribute('id', 'dybamicAccessForm')
        // Create an input element (you can add more fields as needed)
        var form = document.createElement('form');
        form.setAttribute('id', 'loginForm');
        form.setAttribute('id', 'accessForm');
        form.setAttribute('action', 'UserAccessManagement/login.php');
        form.setAttribute('method', 'post');
        var labelUsername = document.createElement('label');
        labelUsername.setAttribute('for', 'username');
        labelUsername.innerHTML = "Username";
        var inputUsername = document.createElement('input');
        inputUsername.setAttribute('type', 'text');
        inputUsername.setAttribute('id', 'username');
        inputUsername.setAttribute('name', 'username');
        inputUsername.setAttribute('placeholder', 'Username');
        inputUsername.setAttribute('required', '');
        var labelPassword = document.createElement('label');
        labelPassword.setAttribute('for', 'password');
        labelPassword.innerHTML = "Password";
        var inputPassword = document.createElement('input');
        inputPassword.setAttribute('type', 'password');
        inputPassword.setAttribute('id', 'password');
        inputPassword.setAttribute('name', 'password');
        inputPassword.setAttribute('placeholder', 'Password');
        inputPassword.setAttribute('required', '');
        // Create a submit button
        var submitButton = document.createElement('button');
        submitButton.setAttribute('type', 'submit');
        submitButton.textContent = 'Login';
        form.appendChild(labelUsername);
        form.appendChild(inputUsername);
        form.appendChild(labelPassword);
        form.appendChild(inputPassword);
        form.appendChild(submitButton);
        loginDiv.appendChild(form);


        // Append the form to the body (you can change this to append it to a specific element)
        document.body.insertBefore(loginDiv, document.body.firstChild);

        //add a php code here

        //delete forms
        document.querySelector('#focuseActive').addEventListener("click", function () {
            RemoveFocusActive();
            //document.querySelector('#bodyFocuseActive').remove(loginDiv);
        })

    }

    function createRegisterForm() {
        AddFocusActive();
        var registerDiv = document.createElement('div')
        registerDiv.setAttribute('id', 'dybamicRegisterForm')
        registerDiv.setAttribute('id', 'dybamicAccessForm')

        // Create an input element (you can add more fields as needed)
        var form = document.createElement('form');
        form.setAttribute('id', 'registerForm');
        form.setAttribute('id', 'accessForm');
        form.setAttribute('action', 'UserAccessManagement/register.php');
        form.setAttribute('method', 'post');

        var labelUsername = document.createElement('label');
        labelUsername.setAttribute('for', 'username');
        labelUsername.innerHTML = "Username";

        var inputUsername = document.createElement('input');
        inputUsername.setAttribute('type', 'text');
        inputUsername.setAttribute('id', 'username');
        inputUsername.setAttribute('name', 'username');
        inputUsername.setAttribute('placeholder', 'Username');
        inputUsername.setAttribute('required', '');

        var labelPassword = document.createElement('label');
        labelPassword.setAttribute('for', 'password');
        labelPassword.innerHTML = "Password";

        var inputPassword = document.createElement('input');
        inputPassword.setAttribute('type', 'password');
        inputPassword.setAttribute('id', 'password');
        inputPassword.setAttribute('name', 'password');
        inputPassword.setAttribute('placeholder', 'Password');
        inputPassword.setAttribute('required', '');

        // Create a submit button
        var submitButton = document.createElement('button');
        submitButton.setAttribute('type', 'submit');
        submitButton.textContent = 'Register';

        // Append the input and button to the form
        form.appendChild(labelUsername);
        form.appendChild(inputUsername);
        form.appendChild(labelPassword);
        form.appendChild(inputPassword);
        form.appendChild(submitButton);
        registerDiv.appendChild(form);


        // Append the form to the body (you can change this to append it to a specific element)
        document.body.insertBefore(registerDiv, document.body.firstChild);

        //add a php code here

        //delete forms
        document.querySelector('#focuseActive').addEventListener("click", function () {
            RemoveFocusActive();
            //document.querySelector('#bodyFocuseActive').remove(registerDiv);
        })
    }

    function AddFocusActive() {
        var background = document.createElement('div')
        background.setAttribute('id', 'focuseActive')
        document.body.setAttribute('id', 'bodyFocuseActive')
        document.body.insertBefore(background, document.body.firstChild);
    }

    function RemoveFocusActive() {
        document.querySelector('#dybamicAccessForm').remove();
        document.querySelector('#focuseActive').remove();
        document.querySelector('#bodyFocuseActive').removeAttribute('id');

    }

    function SaveBookInfo() {
        document.querySelector('')
    }


});
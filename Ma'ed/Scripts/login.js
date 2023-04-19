const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const login = document.getElementById('login');

signUpButton.addEventListener('click', () => {
	login.classList.add();
});

signInButton.addEventListener('click', () => {
	login.classList.remove();
});
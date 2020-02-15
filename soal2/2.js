const is_username_valid = (username) =>  /^[a-z]{5,9}$/.test(username);
console.log(is_username_valid('jok3r'));
console.log(is_username_valid('suparman'));

const is_password_valid = (password) =>  /(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[\W|_])(?=.*[=]).{8,}$/.test(password);
console.log(is_password_valid('Dap0#r'));
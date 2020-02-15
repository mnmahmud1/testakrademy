const is_username_valid = (username) =>  /^[a-z]{5,9}$/.test(username);

console.log(is_username_valid('jok3r'));
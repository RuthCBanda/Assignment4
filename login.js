let loginBtn = document.querySelector(".loginBtn");
let usernameBx = document.querySelector(".#username");
let passwordBx = document.querySelector(".#password");

loginBtn.addEventListener('click', async () => {
	let username = usernameBx.value;
	let password = passwordBx.value;
	let data ={username, password}
	if(username && password){
		let response = await fetch("", {
			method: POST,
			body: JSON.stringify(data),
			headers: {"Content-Type": "application/json"}
		});
		let my_data = await response.json();
		if (my_data.msg.toLowerCase() === "ok"){
			alert("Login successful");
			location.href = "results.php";
		}else{
			alert("Login Failed!");
		}
	}
});
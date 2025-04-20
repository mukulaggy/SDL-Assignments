// Alert on page load
alert("Welcome to the JS Demo Page!");

// 1. Calculate average number of weeks in a human lifetime
let years = 80;
let weeks = years * 52;
console.log(`Average human lifetime: ${weeks} weeks`);

// 2. Store a string in a variable
let username = "John Doe";
console.log("Username:", username);

// 3. Tell time of the day
let hour = new Date().getHours();
if (hour < 12) {
  console.log("Good morning!");
} else if (hour < 18) {
  console.log("Good afternoon!");
} else {
  console.log("Good evening!");
}

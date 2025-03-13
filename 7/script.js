// Simple alert
function showAlert() {
  alert("Welcome to JavaScript Examples!");
}

// Calculate average weeks in human lifetime
function calculateLifeWeeks() {
  const averageLifespan = 75; // years
  const weeksInYear = 52;
  const totalWeeks = averageLifespan * weeksInYear;

  document.getElementById(
    "result"
  ).innerHTML = `Average number of weeks in a ${averageLifespan}-year human lifetime: ${totalWeeks} weeks`;
}

// String variable example
let greeting = "Hello, World!";
console.log(greeting);

// Function to determine time of day
function showTimeOfDay() {
  const hour = new Date().getHours();
  let timeOfDay;

  if (hour >= 5 && hour < 12) {
    timeOfDay = "Good Morning";
  } else if (hour >= 12 && hour < 17) {
    timeOfDay = "Good Afternoon";
  } else {
    timeOfDay = "Good Night";
  }

  document.getElementById("result").innerHTML = timeOfDay;
}

// Run this when page loads
window.onload = function () {
  console.log("Page loaded!");
  // Show initial greeting
  document.getElementById("result").innerHTML = greeting;
};

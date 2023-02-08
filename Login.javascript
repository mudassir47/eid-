// Initialize Firebase
var firebaseConfig = {
  apiKey: "YOUR_API_KEY",
  authDomain: "YOUR_AUTH_DOMAIN",
  databaseURL: "YOUR_DATABASE_URL",
  projectId: "YOUR_PROJECT_ID",
  storageBucket: "YOUR_STORAGE_BUCKET",
  messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
  appId: "YOUR_APP_ID"
};
firebase.initializeApp(firebaseConfig);

// Get form element
var form = document.getElementById("login-form");

// Add submit event listener to form
form.addEventListener("submit", function(e) {
  e.preventDefault();
  
  // Get email and password values
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  
  // Sign in user with Firebase auth
  firebase.auth().signInWithEmailAndPassword(email, password)
    .then(function() {
      console.log("User signed in");
    })
    .catch(function(error) {
      console.error(error.message);
    });
});

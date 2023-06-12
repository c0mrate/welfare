const express = require('express');
const bodyParser = require('body-parser');
const fs = require('fs');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));

// Register route
app.post('/register', (req, res) => {
  const { name, email, password } = req.body;

  // Create an object with the user data
  const userData = {
    name,
    email,
    password
  };

  // Read the existing users data from the JSON file
  let usersData = [];
  try {
    const data = fs.readFileSync('users.json');
    usersData = JSON.parse(data);
  } catch (err) {
    console.error(err);
  }

  // Add the new user data to the existing data
  usersData.push(userData);

  // Write the updated data back to the JSON file
  fs.writeFileSync('users.json', JSON.stringify(usersData));

  // Respond with a success message
  res.send('Registration successful!');
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});

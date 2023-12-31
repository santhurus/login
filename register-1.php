<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="register.css">
	
</head>
<body>
    <form action="register_process.php" method="post">
        <h2>Lecturer Registration</h2>

        <label for="name">Name in full:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="designation">Designation:</label>
        <select name="designation" required>
            <option value="Assistant Lecturer">Assistant Lecturer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Senior Lecturer I">Senior Lecturer I</option>
            <option value="Senior Lecturer II">Senior Lecturer II</option>
        </select>

        <label for="course">Course:</label>
        <select name="course" required>
          
            <option value="1">HNDA</option>
            <option value="2">HNDIT</option>
            <option value="3">HNDE</option>
       
        </select>

        <div><label for="gender">Gender:</label>
       <label>Male</label> <input type="radio" name="gender" value="Male" required>  
      <label>Female </label><input type="radio" name="gender" value="Female" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>

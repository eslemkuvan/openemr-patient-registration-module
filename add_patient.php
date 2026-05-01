<form action="save_patient.php" method="POST">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    National ID: <input type="text" name="national_id"><br>
    Birth Date: <input type="date" name="birth_date"><br>

    Gender:
    <select name="gender">
        <option>Male</option>
        <option>Female</option>
    </select><br>

    Phone: <input type="text" name="phone"><br>
    Email: <input type="email" name="email"><br>
    Address: <textarea name="address"></textarea><br>

    <button type="submit">Save</button>
</form>

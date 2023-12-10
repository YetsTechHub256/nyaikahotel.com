<style>
{
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
}

form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
}

table td {
    padding: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

@media (max-width: 600px) {
    form {
        max-width: 100%;
    }
}
</style>
<form action="pesapal-iframe.php" method="post">
	<table>
		<tr>
			<td>Amount:</td>
			<td><input type="text" name="amount" value="1000" />
			(UGX)
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="MERCHANT" readonly="readonly" />
			(leave as default - MERCHANT)
			</td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><input type="text" name="description" value="Order Description" /></td>
		</tr>
		
		<tr>
			<td>First Name:</td>
			<td><input type="text" name="first_name" value="Mumbere" /></td>
		</tr>
		<tr>
			<td> Last Name:</td>
			<td><input type="text" name="last_name" value="Deric" /></td>
		</tr>
		<tr>
			<td> Email Address:</td>
			<td><input type="text" name="email" value="dericyetsjr@gmail.com" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="BOOK NOW" /></td>
		</tr>
	</table>
</form>

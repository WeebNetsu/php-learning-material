<!DOCTYPE html>
<html>
<head>
	<title>Error Messages</title>
</head>
<body>
	<style type="text/css">
		.error{
			font-weight: bold;
		}
	</style>

	<h2 align="center">Error Messages</h2>

	<h3>Example of an error message:</h3>
	<p><i title="Severity of the error">Parse error:</i> syntax error, <i title="What went wrong">unexpected</i> T_ECHO in <i title="Where it went wrong">path/to/file.php</i> on line 15.</p>

	<table cellspacing="0" border="1" cellpadding="5" align="center">
		<tr>
			<th><b>Error</b></th>
			<th>Reason</th>
		</tr>

		<tr>
			<td class="error">Fatal Error</td>
			<td>Often caused when the programmer referred to an <b>non-existent</b> file or function</td>
		</tr>

		<tr>
			<td class="error">Recoverable Error</td>
			<td>When an <b>exception</b> is thrown... A try and catch block can fix this</td>
		</tr>

		<tr>
			<td class="error">Parse Error</td>
			<td>There is a mistake in your code syntax, such as missed matched quotes, missing a semicolon or closing bracket</td>
		</tr>

		<tr>
			<td class="error">Warning</td>
			<td>When you are missing something that wont stop the code from running, such as a missing imported file</td>
		</tr>

		<tr>
			<td class="error">Deprecated</td>
			<td>When a PHP feature will be <b>removed</b> in the next version of PHP... Consider updating your code to prevent future errors</td>
		</tr>

		<tr>
			<td class="error">Strict</td>
			<td>When a technique you use is not considered good practice</td>
		</tr>

		<tr>
			<td class="error">Notice</td>
			<td>When minor things such as unused variables are in your code</td>
		</tr>
	</table>
</body>
</html>
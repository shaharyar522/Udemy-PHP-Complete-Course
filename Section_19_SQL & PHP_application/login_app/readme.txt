Main Database APIs in PHP
API Name	Description	Example Database	Status

1. MySQL (Deprecated)	Oldest method for MySQL, simple but insecure. Removed in PHP 7+.	MySQL	❌ Deprecated
2. MySQLi (MySQL Improved)	Improved version of MySQL API, supports procedural & OOP.	MySQL	✅ Recommended
3. PDO (PHP Data Objects)	Universal API that supports many databases.	MySQL, PostgreSQL, SQLite, etc.	✅ Highly Recommended
4. ODBC (Open Database Connectivity)	Generic API to connect to various DBs through drivers.	MS Access, SQL Server, etc.	🟡 Sometimes used
5. PostgreSQL Extension (pg_connect)	Direct connection for PostgreSQL databases.	PostgreSQL	✅ Used for PGSQL only
6. SQLite3 Extension	For local file-based database (no server).	SQLite	✅ Used in small apps
7. IBM DB2 / Oracle APIs	Special extensions for enterprise databases.	DB2, Oracle	🟢 Enterprise use only





/// pdo used for all mutipler database 
new PDO("mysql:host=localhost", "root", "");

new mysqli("localhost", "root", "");  
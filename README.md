# PHP AJAX Database Project

This project provides a simple PHP backend for handling AJAX requests and interacting with a Microsoft SQL Server database. It includes functions for database connections and performing `SELECT`, `INSERT`, and `UPDATE` queries. The project is designed to be used with a front-end that makes AJAX calls to the PHP scripts.

## Setup

1.  **Configure the database connection:**
    Open the `conn.php` file and modify the database connection settings. The project supports two database connections, identified by `id` 1 and 2. You can switch between them by changing the `id` passed to the `connectionDataBase()` function.

    ```php
    function connectionDataBase($id) {
        $configs = [
            1 => ["host" => "HOST1", "username" => "YOUR_DB1", "password" => "YOUR_PASSWORD", "db" => "YOUR_DB1"],
            2 => ["host" => "HOST2", "username" => "YOUR_DB2", "password" => "YOUR_PASSWORD2", "db" => "YOUR_DB2"]
        ];
        // ...
    }
    ```

    Replace `"HOST1"`, `"YOUR_DB1"`, and `"YOUR_PASSWORD"` with your actual database credentials.

## Usage

The `query.php` file contains functions for interacting with the database.

*   `getDetail_bind($sql, $param, $serv)`: Executes a `SELECT` query with bound parameters.
*   `Update_bind($sql, $param, $serv)`: Executes an `INSERT` or `UPDATE` query with bound parameters.
*   `getDetail($sql, $serv)`: Executes a `SELECT` query.
*   `Update($sql, $serv)`: Executes an `INSERT` or `UPDATE` query.

### AJAX Example

The `test_ajax.php` file provides an example of how to handle AJAX requests. You can use jQuery to make AJAX calls to this file.

```javascript
$.ajax({
    url: 'test_ajax.php',
    type: 'POST',
    data: {
        status: 'show_list' // or 'addnew'
    },
    success: function(response) {
        // Handle the response from the server
        console.log(response);
    }
});
```

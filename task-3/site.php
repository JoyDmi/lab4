            <!DOCTYPE html>

            <html lang="ru">

            <head>
                <meta charset="UTF-8">
            </head>

            <body>
            <label><center>Добавить объявление!</center></label><br><br>
            <form action="safe3.php" method="POST">
                E-mail:
                <input type="text" name="email" /><br>
                <br>
                Категория объявления:
                <select name="category">
                    <option>House</option>
                    <option>Cars</option>
                    <option>Services</option>
                    <option>Other</option>
                </select>
                <br>
                <br>
                Название объявления:
                <input type="text" name="heading"><br>
                <br>
               Описание:
                <textarea rows="5" cols="50" name="description"></textarea><br>
                <br>
                <input type="submit" value="отправить">

                <p><center>Table List:</form>
                <table border="1">
                    <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Description</th>
                        </center>
                    </tr>
<?include "table.php" ?>
                </table>
            </body>
            </html>
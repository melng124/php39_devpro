<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Form</title>
</head>
<body>
<form action="" method="get" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2">Pizza Shop 2.0</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Pizza Topping</td>
            <td>
                <input type="radio" name="topping"> A <br />
                <input type="radio" name="topping"> B <br />
                <input type="radio" name="topping"> C <br />
            </td>
        </tr>
        <tr>
            <td>Pizza Sauce</td>
            <td>
                <select name="sauce">
                    <option value="1">Tomato1</option>
                    <option value="2">Tomato2</option>
                    <option value="3">Tomato3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Option Extras</td>
            <td>
                <input type="checkbox" name="extras" /> Extra
                Cheese &nbsp;
                <input type="checkbox" name="extras" /> Extra B
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Delevery Instructions: <br />
                <textarea name="develery" cols="10" rows="3">

                </textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit"  name="submit-form"
                       value="Send my order" />
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
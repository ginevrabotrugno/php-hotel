<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>PHP Hotel</h1>
    <section class="container">

        <form action="index.php">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                <label class="form-check-label" for="inlineRadio3">3 </label>
            </div>

            <button type="button" class="btn btn-primary">Filtra</button>

        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Col</th>
                    <th scope="col">Second Col</th>
                    <th scope="col">Third Col</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>string</td>
                    <td>string</td>
                    <td>string</td>
                </tr>
                <tr>
                    <td>string</td>
                    <td>string</td>
                    <td>string</td>
                </tr>
                <tr>
                    <td>string</td>
                    <td>string</td>
                    <td>string</td>
                </tr>
                <tr>
                    <td>string</td>
                    <td>string</td>
                    <td>string</td>
                </tr>
                <tr>
                    <td>string</td>
                    <td>string</td>
                    <td>string</td>
                </tr>
                <tr>
                    <td>string</td>
                    <td>string</td>
                    <td>string</td>
                </tr>
            </tbody>
        </table>

    </section>
</body>
</html>
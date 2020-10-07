<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tomas Daugėla">
    <title>p2 php</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>
    <!-- <header>
    </header> -->
    <main>
        <div class="container">
            <section>
                <div class="top">BMI calculator</div>
                <div id="quizBoard">
                    <div id="result">
                        <?php
                        $height = isset($_POST['height']) ? str_replace(',', '.', $_POST['height']) : null;
                        $weight = isset($_POST['weight']) ? str_replace(',', '.', $_POST['weight']) : null;

                        if (isset($weight) && isset($height)) {
                            if (is_numeric($height) && is_numeric($weight)) {
                                $bmi = round($weight / ($height * $height), 2);
                                switch ($bmi) {
                                    case ($bmi < 16): {
                                            echo '<span style="color: red">BMI is ' . $bmi . '<br>Severe Thinness</span>';
                                            break;
                                        }
                                    case ($bmi > 16 && $bmi < 17): {
                                            echo '<span style="color: orange">BMI is ' . $bmi . '<br>Moderate Thinness</span>';
                                            break;
                                        }
                                    case ($bmi > 17 && $bmi < 18.5): {
                                            echo '<span style="color: GoldenRod">BMI is ' . $bmi . '<br>Mild Thinness</span>';
                                            break;
                                        }
                                    case ($bmi > 18.5 && $bmi < 25): {
                                            echo '<span style="color: green">BMI is ' . $bmi . '<br>Normal</span>';
                                            break;
                                        }
                                    case ($bmi > 25 && $bmi < 30): {
                                            echo '<span style="color: GoldenRod">BMI is ' . $bmi . '<br>Overweight</span>';
                                            break;
                                        }
                                    case ($bmi > 30 && $bmi < 35): {
                                            echo '<span style="color: red">BMI is ' . $bmi . '<br>Obese Class I</span>';
                                            break;
                                        }
                                    case ($bmi > 35 && $bmi < 40): {
                                            echo '<span style="color: red">BMI is ' . $bmi . '<br>Obese Class II</span>';
                                            break;
                                        }
                                    case ($bmi > 40): {
                                            echo '<span style="color: red">BMI is ' . $bmi . '<br>Obese Class III</span>';
                                            break;
                                        }
                                    default: {
                                            break;
                                        }
                                }
                            } else {
                                echo 'enter numbers';
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
            <section>
                <form action="index.php" method="post">
                    <label for="">what's your height?</label>
                    <input type="text" name="height" id="" placeholder="height in meters">
                    <label for="">what's your weight?</label>
                    <input type="text" name="weight" id="" placeholder="weight in kilograms">
                    <button type="submit" id="set">calculate BMI</button>
                </form>
                <table>
                    <tbody>
                        <tr>
                            <th>Category</th>
                            <th>BMI range - kg/m2</th>
                        </tr>
                    </tbody>
                    <tr>
                        <td>Severe Thinness</td>
                        <td>< 16</td>
                    </tr>
                    <tr>
                        <td>Moderate Thinness</td>
                        <td>16 - 17</td>
                    </tr>
                    <tr>
                        <td>Mild Thinness</td>
                        <td>17 - 18.5</td>
                    </tr>
                    <tr>
                        <td>Normal</td>
                        <td>18.5 - 25</td>
                    </tr>
                    <tr>
                        <td>Overweight</td>
                        <td>25 - 30</td>
                    </tr>
                    <tr>
                        <td>Obese Class I</td>
                        <td>30 - 35</td>
                    </tr>
                    <tr>
                        <td>Obese Class II</td>
                        <td>35 - 40</td>
                    </tr>
                    <tr>
                        <td>Obese Class III</td>
                        <td> > 40</td>
                    </tr>
                </table>
            </section>
        </div>
    </main>
    <!-- <footer>
            </footer> -->
    <!-- <script src="assets/js/main.js"></script> -->
</body>

</html>
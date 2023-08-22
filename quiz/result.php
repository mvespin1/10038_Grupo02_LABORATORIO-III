<?php
// Obtén las respuestas del formulario
$answers = $_POST;

// Define las respuestas correctas
$correct_answers = [
    "answer_1" => "canberra",
    "answer_2" => "nueva_zelanda",
    "answer_3" => "australia",
    "answer_4" => "china",
    "answer_5" => "dolar_fiyiano"
];

// Compara las respuestas y calcula el puntaje
$score = 0;
foreach ($correct_answers as $question => $correct_answer) {
    if (isset($answers[$question]) && $answers[$question] === $correct_answer) {
        $score++;
    }
}

// Guarda el puntaje en formato JSON
$result = [
    "score" => $score,
    "total_questions" => count($correct_answers),
];
$result_json = json_encode($result);

// Guarda el resultado en un archivo JSON
file_put_contents('result.json', $result_json);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado del Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/fondo.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <a href="../index.html" class="btn btn-secondary">Volver al Inicio</a>
        </div>


        <br><br><br><br><br>
        <div class="card mx-auto" style="max-width: 300px;">
            <div class="card-body">
                <h1 class="text-center">¡Resultado del Quiz!</h1>
                <h5 class="card-title">Tu puntaje:</h5>
                <p class="card-text">
                    <?php echo $score; ?> de <?php echo count($correct_answers); ?>
                </p>
                <center><a href="index.html" class="btn btn-success">Volver al Quiz</a></center>
            </div>

        </div>
    </div>

</body>

</html>
<html>

<head>

 <title>PHP Quiz</title>

</head>

<body>


 <h1>Result</h1>

        <?php

            $ans1 = $_POST['question-1-answers'];
            $ans2 = $_POST['question-2-answers'];
            $ans3 = $_POST['question-3-answers'];
            $ans4 = $_POST['question-4-answers'];
            $ans5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($ans1 == "Washington DC")
            {
              $totalCorrect++;
            }

            if ($ans2 == "7")
            {
              $totalCorrect++;
            }

            if ($ans3 == "1000")
            {
              $totalCorrect++;
            }

            if ($ans4 == "Fraser hall")
            {
              $totalCorrect++;
            }

            if ($ans5 == "car")
            {
               $totalCorrect++;
            }


            echo "Question 1: Capital of USA is...<br>";
            echo "Your answer: $ans1<br>";
            echo "Correct answer: Washington DC<br>";

            echo "Question 2: How many oceans are there?<br>";
            echo "Your answer: $ans2<br>";
            echo "Correct answer: 7<br>";

            echo "Question 3: How many meters are in 1 kilo meter?<br>";
            echo "Your answer: $ans3<br>";
            echo "Correct answer: 1000<br>";

            echo "Question 4:The building at the highest point of Lawrence is<br>";
            echo "Your answer: $ans4<br>";
            echo "Correct answer: Fraser hall<br>";

            echo "Question 5: Bugatti is a<br>";

            echo "Your answer: $ans5<br>";
            echo "Correct answer: car<br>";



            echo "<div id='results'>$totalCorrect / 5 correct</div>";

            if ($totalCorrect == 1)
            {
              echo "percentage: 20%";
            }

            if ($totalCorrect == 2)
            {
              echo "percentage: 40%";
            }

            if ($totalCorrect == 3)
            {
              echo "percentage: 60%";
            }

            if ($totalCorrect == 4)
            {
              echo "percentage: 80%";
            }

            if ($totalCorrect == 5)
            {
              echo "percentage: 100%";
            }



        ?>


</body>

</html>

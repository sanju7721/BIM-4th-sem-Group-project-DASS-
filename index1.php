<?php

$crops = [
    [
        "id" => 1,
        "name" => "Rice",
        "season" => "Summer",
        "soil" => "Clay Soil",
        "water" => "High",
        "harvest" => "4 Months",
        "description" => "Rice is one of the world's most important food crops. It grows best in warm climates with plenty of water.",
        "image" => "https://via.placeholder.com/300x200?text=Rice"
    ],
    [
        "id" => 2,
        "name" => "Wheat",
        "season" => "Winter",
        "soil" => "Loamy Soil",
        "water" => "Medium",
        "harvest" => "5 Months",
        "description" => "Wheat is a major cereal crop used for making flour, bread, pasta, and other foods.",
        "image" => "https://via.placeholder.com/300x200?text=Wheat"
    ],
    [
        "id" => 3,
        "name" => "Maize",
        "season" => "Spring",
        "soil" => "Well-drained Soil",
        "water" => "Medium",
        "harvest" => "3 Months",
        "description" => "Maize, also known as corn, is grown for food, livestock feed, and industrial products.",
        "image" => "https://via.placeholder.com/300x200?text=Maize"
    ],
    [
        "id" => 4,
        "name" => "Potato",
        "season" => "Winter",
        "soil" => "Sandy Loam",
        "water" => "Medium",
        "harvest" => "90 Days",
        "description" => "Potato is a root vegetable rich in carbohydrates and widely cultivated around the world.",
        "image" => "https://via.placeholder.com/300x200?text=Potato"
    ],
    [
        "id" => 5,
        "name" => "Tomato",
        "season" => "Summer",
        "soil" => "Loamy Soil",
        "water" => "Regular",
        "harvest" => "80 Days",
        "description" => "Tomatoes are rich in vitamins and are commonly used in salads, sauces, and cooking.",
        "image" => "https://via.placeholder.com/300x200?text=Tomato"
    ]
];

// Search (optional)
$search = "";
if (isset($_GET['search'])) {
    $search = strtolower(trim($_GET['search']));
}

// Crop Details
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);
    $found = false;

    foreach ($crops as $crop) {

        if ($crop['id'] == $id) {

            $found = true;
            ?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($crop['name']); ?></title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#F5F5DC;
            padding:30px;
            color:#4E342E;
        }

        .details{
          width:700px;
    margin:auto;
    background:#FFF8E7;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.15);
    border:1px solid #D7CCC8;
       
        }

        img{
            width:100%;
            border-radius:10px;
        }

        a{
          display:inline-block;
    margin-top:20px;
    background:#795548;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:5px;
        }

        a:hover{
            background:darkgreen;
        }
    </style>
</head>

<body>

<div class="details">

    <img src="<?php echo htmlspecialchars($crop['image']); ?>" alt="<?php echo htmlspecialchars($crop['name']); ?>">

    <h1><?php echo htmlspecialchars($crop['name']); ?></h1>

    <p><strong>Season:</strong> <?php echo htmlspecialchars($crop['season']); ?></p>

    <p><strong>Soil Type:</strong> <?php echo htmlspecialchars($crop['soil']); ?></p>

    <p><strong>Water Requirement:</strong> <?php echo htmlspecialchars($crop['water']); ?></p>

    <p><strong>Harvest Time:</strong> <?php echo htmlspecialchars($crop['harvest']); ?></p>

    <p><?php echo htmlspecialchars($crop['description']); ?></p>
<a href="cropguide.php">← Back</a>

</div>

</body>
</html>

<?php
            exit();
        }
    }

    // If crop not found
    if (!$found) {
        echo "<h2>Crop not found.</h2>";
        echo '<a href="index.php">Back</a>';
        exit();
    }
}
?>
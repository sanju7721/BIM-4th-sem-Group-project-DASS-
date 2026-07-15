<?php

$crops = [
[
"id"=>1,
"name"=>"Rice",
"season"=>"Summer",
"soil"=>"Clay Soil",
"water"=>"High",
"harvest"=>"4 Months",
"description"=>"Rice is one of the world's most important food crops. It grows best in warm climates with plenty of water.",
"image"=>"https://via.placeholder.com/300x200?text=Rice"
],

[
"id"=>2,
"name"=>"Wheat",
"season"=>"Winter",
"soil"=>"Loamy Soil",
"water"=>"Medium",
"harvest"=>"5 Months",
"description"=>"Wheat is a major cereal crop used for making flour, bread, pasta, and other foods.",
"image"=>"https://via.placeholder.com/300x200?text=Wheat"
],

[
"id"=>3,
"name"=>"Maize",
"season"=>"Spring",
"soil"=>"Well-drained Soil",
"water"=>"Medium",
"harvest"=>"3 Months",
"description"=>"Maize, also known as corn, is grown for food, livestock feed, and industrial products.",
"image"=>"https://via.placeholder.com/300x200?text=Maize"
],

[
"id"=>4,
"name"=>"Potato",
"season"=>"Winter",
"soil"=>"Sandy Loam",
"water"=>"Medium",
"harvest"=>"90 Days",
"description"=>"Potato is a root vegetable rich in carbohydrates and widely cultivated around the world.",
"image"=>"https://via.placeholder.com/300x200?text=Potato"
],

[
"id"=>5,
"name"=>"Tomato",
"season"=>"Summer",
"soil"=>"Loamy Soil",
"water"=>"Regular",
"harvest"=>"80 Days",
"description"=>"Tomatoes are rich in vitamins and are commonly used in salads, sauces, and cooking.",
"image"=>"https://via.placeholder.com/300x200?text=Tomato"
]
];

$search = "";

if(isset($_GET['search'])){
    $search = strtolower(trim($_GET['search']));
}

?>
<!DOCTYPE html>
<html>
<head>

<title>Crop Guide</title>

<style>

body{
 font-family: Arial, sans-serif;
    background: #F5F5DC;      
    margin: 0;
    padding: 20px;
    color: #4E342E;
}

h1{
text-align: center;
    color: #6D4C41;
}

form{
text-align:center;
margin-bottom:30px;
}

input{
padding: 10px;
    width: 250px;
    border: 1px solid #A1887F;
    border-radius: 5px;
}

button{
 padding: 10px 20px;
    background: #8D6E63;      /* Brown */
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.container{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:20px;
}

.card{
width: 260px;
    background: #FFF8E7;      /* Cream */
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    text-align: center;
    border: 1px solid #D7CCC8;
}

.card img{
width:100%;
border-radius:10px;
}

.card a{
display: inline-block;
    margin-top: 10px;
    background: #795548;      /* Brown */
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

</style>

</head>

<body>

<h1>🌾 Agriculture Crop Guide</h1>

<form>

<input
type="text"
name="search"
placeholder="Search crop..."
value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">

<button>Search</button>

</form>

<div class="container">

<?php

foreach($crops as $crop){

if($search==""
|| strpos(strtolower($crop['name']),$search)!==false
|| strpos(strtolower($crop['season']),$search)!==false
|| strpos(strtolower($crop['soil']),$search)!==false){

?>

<div class="card">

<img src="<?php echo $crop['image']; ?>">

<h2><?php echo $crop['name']; ?></h2>

<p><b>Season:</b> <?php echo $crop['season']; ?></p>

<p><b>Soil:</b> <?php echo $crop['soil']; ?></p>
<a href="index1.php?id=<?php echo $crop['id']; ?>">View Details</a>


</div>

<?php

}

}

?>

</div>

</body>
</html>

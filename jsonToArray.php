<!-- <?php
  // JSON string
  $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  print_r($someArray);        // Dump all data of the Array
  echo $someArray[0]["name"]."<br>"; // Access Array data

  // Convert JSON string to Object
  $someObject = json_decode($someJSON);
  //print_r($someObject);      // Dump all data of the Object
  echo $someObject[0]->name; // Access Object data
?> -->

 <!-- <?php
  // Loop through Array
$someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';
$someArray = json_decode($someJSON, true);
  
  foreach ($someArray as $key => $value) {
    echo "name: ".$value["name"] . "<br>gender: " . $value["gender"] . "<br>";
  }

  
?> --> 

<!-- <?php
  // Array
  $someArray = [
    [
      "name"   => "Jonathan Suh",
      "gender" => "male"
    ],
    [
      "name"   => "William Philbin",
      "gender" => "male"
    ],
    [
      "name"   => "Allison McKinnery",
      "gender" => "female"
    ]
  ];

  // Convert Array to JSON String
  $someJSON = json_encode($someArray);
  echo $someJSON;
?> -->

<select id="gender" name="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>

<table id="people" border="1">
  <thead>
    <th>Name</th>
    <th>Gender</th>
  </thead>
  <tbody>

  </tbody>
</table>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$("#gender").on("change", function() {
  $.ajax({
    type: "POST",
    data: {
      "gender": $("#gender").val()
    },
    url: "response.php",
    dataType: "json",
    success: function(JSONObject) {
      var peopleHTML = "";

      // Loop through Object and create peopleHTML
      for (var key in JSONObject) {
        if (JSONObject.hasOwnProperty(key)) {
          peopleHTML += "<tr>";
            peopleHTML += "<td>" + JSONObject[key]["name"] + "</td>";
            peopleHTML += "<td>" + JSONObject[key]["gender"] + "</td>";
          peopleHTML += "</tr>";
        }
      }

      // Replace table’s tbody html with peopleHTML
      $("#people tbody").html(peopleHTML);
    }
  });
});
</script>